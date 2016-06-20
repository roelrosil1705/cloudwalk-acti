<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	function index()
	{
		$data['activeMenu'] = 'contact_page';
		$data['title'] = 'Activation Advertising, Inc. - Below the line. Beyond Expectations.';
		$data['header'] = $this->load->view('homepage/header', $data, true); 
		$data['body'] = $this->load->view('contact_view', $data, true); 
		$this->load->view('contactpage', $data);
	}
	
	public function send_message()
    {
        // $myemail = 'info@activationadvertising.com';//<-----Put Your email address here.
        $myemail = 'je.p@cloudwalkdigital.com';//<-----Put Your email address here.
    
        $full_name = $this->input->post('full_name');
        $QuestionComment = $this->input->post('message');

        $subject = $this->input->post('subject');
        $email_address = $this->input->post('email_address'); 
        $message = "Full Name: ".$full_name. "<br/>" . "\nEmail: " .$email_address. "<br/>" ."\nMessage: ". $QuestionComment;
		
        // $to = $myemail; 
        // $email_subject = "$subject";
        // $email_body = "$message"; 
        // $headers = "From: $full_name <$email_address>\n"; 
        // $headers .= "Reply-To: $email_address";

		$this->load->library('email');
		
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'mail.mydentistpal.com';
		$config['smtp_user'] = 'info@mydentistpal.com';
		$config['smtp_pass'] = 'mdp2468';
		$config['smtp_port'] = 26;
		$config['mailtype'] = 'html';
		
		$this->email->initialize($config);
		
		$this->email->from($email_address);
		$this->email->to($myemail); 
		$this->email->subject($subject);
		$this->email->message($message);	

		$sentmail = $this->email->send();
			
		// $sentmail = mail($to,$email_subject,$email_body,$headers);
		
        //redirect to the 'thank you' page
        if(!$sentmail){
                // echo "mail successful send";
				echo "failed";
        }else{ 
                // echo "Could not send you mail, Please try again later";
				echo "success";
        }
		 
/*      
		$message2 = "Your message below has been sent:\n" . $QuestionComment . "<br/>" . "\n\n www.activationadvertising.com";

        $to2 = $email_address; 
        $email_subject2 = "Activation Advertising, Inc. Inquiry"; 
        // $email_body2 = "$message2"; 

        $headers2 = "From: Activation Advertising, Inc. <$myemail>\n"; 
        $headers2 .= "Reply-To: $myemail";
		
		$this->load->library('email');
		
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'mail.mydentistpal.com';
		$config['smtp_user'] = 'info@mydentistpal.com';
		$config['smtp_pass'] = 'mdp2468';
		$config['smtp_port'] = 26;
		$config['mailtype'] = 'html';
		
		$this->email->initialize($config);
		
		$this->email->from($myemail);
		$this->email->to($to2); 
		$this->email->subject($email_subject2);
		$this->email->message($message2);	

		$sentmail2 = $this->email->send();
		// $sentmail2 = mail($to2,$email_subject2,$email_body2,$headers2);

        //redirect to the 'thank you' page
		if(!$sentmail2){
                // echo "mail successful send";
				echo "failed";
        }else{ 
                // echo "Could not send you mail, Please try again later";
				echo "success";
        }  
*/
    }
	
	/* 
	function send_message()
	{
		// $myemail = 'info@activationadvertising.ph';//<-----Put Your email address here.
    
        $full_name = $this->input->post('full_name');
        $QuestionComment = $this->input->post('message');

        $subject = $this->input->post('subject');
        $email_address = $this->input->post('email_address'); 
        $message = "Full Name: ".$full_name. "\nEmail: ".$email_address. "\nMessage: ". $QuestionComment;

        // $to = $myemail; 
        // $email_subject = "$subject";
        // $email_body = "$message"; 

        $headers = "From: $full_name <$email_address>\n"; 
        $headers .= "Reply-To: $email_address";

		$this->load->library('email');
		
		$config['protocol'] = 'smtp';
			$config['smtp_host'] = 'mail.mydentistpal.com';
			$config['smtp_user'] = 'info@mydentistpal.com';
			$config['smtp_pass'] = 'mdp2468';
			$config['smtp_port'] = 26;
			$config['mailtype'] = 'html';
			
			$this->email->initialize($config);
			
			$this->email->from('info@activationadvertising.com', 'Activation Advertising, Inc.');
			$this->email->to($email_address); 
			$this->email->subject($subject);
			$this->email->message($message);	

			$sentmail = $this->email->send();
			if (!$sentmail) {
				echo "failed";
			// $message_status = "<div id='msg-status-fade'><span style='position:absolute; margin-top:5px;'>Your message has been sent successfully. Thank you $yourname.</span></div>";
			// $yourname = '';
			// $youremail = '';
			// $yoursubject = '';
			// $yourmessage = '';	
			} else {
				echo "success";
			// $message_status = "<div id='msg-status-fade'><span style='position:absolute; margin-top:5px; color:red;'>Your message could not been sent. Please try again!</span></div>";						
			}
        //redirect to the 'thank you' page
        // if(mail($to,$email_subject,$email_body,$headers)){
                // echo "message sent";
        // }else{ 
                // echo "Could not send youe message, Please try again later";
        // }

        // $message2 = "Your message below has been sent:\n" . $QuestionComment . "\n\n www.activationadvertising.com";

        // $to2 = $email_address; 
        // $email_subject2 = "Activation Advertising, Inc. Inquiry";
        // $email_body2 = "$message2"; 

        // $headers2 = "From: Activation Advertising, Inc. <$myemail>\n"; 
        // $headers2 .= "Reply-To: $myemail";

        //redirect to the 'thank you' page
        // if(mail($to2,$email_subject2,$email_body2,$headers2)){
                // echo "mail successful send";
        // }else{ 
                // echo "Could not send you mail, Please try again later";
        // }
		
		// $send_contact = @mail("$to", "Subject: $email_subject", $message, $headers);

		// if ($send_contact) {
			// echo "success";
			// $message_status = "<div id='msg-status-fade'><span style='position:absolute; margin-top:5px;'>Your message has been sent successfully. Thank you $yourname.</span></div>";
			// $yourname = '';
			// $youremail = '';
			// $yoursubject = '';
			// $yourmessage = '';	
		// } else {
			// echo "failed";
		// $message_status = "<div id='msg-status-fade'><span style='position:absolute; margin-top:5px; color:red;'>Your message could not been sent. Please try again!</span></div>";						
		// }
		// echo "hehe....=)";
	}
	 */
}
/* End of file contact.php */
/* Location: ./application/controllers/contact.php */