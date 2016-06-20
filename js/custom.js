
$(function() {

	$('.send_message_form').click(function(){ 
		var dis = $(this);
		$('#form_send_message').ajaxForm({
			type: 'POST',
			url: 'contact/send_message',
			beforeSubmit: function(formData, jqForm, options)
			{
				var name = $('#full_name').val();
				var email = $('#email_address').val();
				var subject = $('#subject').val();
				var message = $('#message').val();
			
				
				if(name.trim() == ''){
					// $('#myErrorReg').modal('show');
					// $('.alert_msg').html('Enter your full name in the required field to proceed.').show();
					$('#full_name').parent().addClass('has-error').find('.help-block').text('Enter your full name in the required field to proceed.');
					$('#full_name').focus();
					$('#full_name').val('');
					$('#email_address').parent().removeClass('has-error').find('.help-block').text('');
					$('#subject').parent().removeClass('has-error').find('.help-block').text('');
					$('#message').parent().removeClass('has-error').find('.help-block').text('');
					return false;
				}else if(!name.match(/^[A-Za-z . -]+$/))
				{
					// $('#myErrorReg').modal('show');
					// $('.alert_msg').html('Enter valid name in the required field to proceed.').show();
					$('#full_name').parent().addClass('has-error').find('.help-block').text('Enter valid name in the required field to proceed.');
					$('#full_name').focus();
					$('#full_name').val('');
					$('#email_address').parent().removeClass('has-error').find('.help-block').text('');
					$('#subject').parent().removeClass('has-error').find('.help-block').text('');
					$('#message').parent().removeClass('has-error').find('.help-block').text('');
					return false;
				}else if(email.trim() == '')
				{
					// $('#myErrorReg').modal('show');
					// $('.alert_msg').html('Enter your email address in the required field to proceed.').show();
					$('#email_address').parent().addClass('has-error').find('.help-block').text('Enter your email address in the required field to proceed.');
					$('#email_address').focus();
					$('#email_address').val('');
					$('#full_name').parent().removeClass('has-error').find('.help-block').text('');
					$('#subject').parent().removeClass('has-error').find('.help-block').text('');
					$('#message').parent().removeClass('has-error').find('.help-block').text('');
					return false;
				}else if(!email.match(/^([a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,4}$)/i))
				{
					// $('#myErrorReg').modal('show');
					// $('.alert_msg').html('Enter valid email address in the required field to proceed.').show();
					$('#email_address').parent().addClass('has-error').find('.help-block').text('Enter valid email address in the required field to proceed.');
					$('#email_address').focus();
					$('#email_address').val('');
					$('#full_name').parent().removeClass('has-error').find('.help-block').text('');
					$('#subject').parent().removeClass('has-error').find('.help-block').text('');
					$('#message').parent().removeClass('has-error').find('.help-block').text('');
					return false;
				}else if(subject.trim() == '')
				{
					// $('#myErrorReg').modal('show');
					// $('.alert_msg').html('Enter your subject in the required field to proceed.').show();
					$('#subject').parent().addClass('has-error').find('.help-block').text('Enter your subject in the required field to proceed.');
					$('#subject').focus();
					$('#subject').val('');
					$('#full_name').parent().removeClass('has-error').find('.help-block').text('');
					$('#email_address').parent().removeClass('has-error').find('.help-block').text('');
					$('#message').parent().removeClass('has-error').find('.help-block').text('');
					return false;
				}else if(message.trim() == '')
				{
					// $('#myErrorReg').modal('show');
					// $('.alert_msg').html('Enter your message in the required field to proceed.').show();
					$('#message').parent().addClass('has-error').find('.help-block').text('Enter your message in the required field to proceed.');
					$('#message').focus();
					$('#message').val('');
					$('#full_name').parent().removeClass('has-error').find('.help-block').text('');
					$('#email_address').parent().removeClass('has-error').find('.help-block').text('');
					$('#subject').parent().removeClass('has-error').find('.help-block').text('');
					return false;
				}else
				{
					$('#full_name').parent().removeClass('has-error').find('.help-block').text('');
					$('#email_address').parent().removeClass('has-error').find('.help-block').text('');
					$('#subject').parent().removeClass('has-error').find('.help-block').text('');
					$('#message').parent().removeClass('has-error').find('.help-block').text('');
				}
				dis.button('loading');
			},
			
			success: function(html)
			{
				// alert(html);
				if(html == 'success')
				{
					$('.alert_msg').hide();
					$('.success_msg').html('Message send successfully. Thank you!.').show();
					$('#mySuccessReg').modal('show');
					// $('#myErrorReg').modal('show');
					// $('.alert_msg').html('Error!.').show();
					// $('#email_sign').val('');
					// $('#email_sign1').val('');
					// return false;
				}else
				{
					$('#myErrorReg').modal('show');
					$('.alert_msg').html('Could not send your mail, Please try again later!.').show();
					// $('#email_sign').val('');
					// $('#email_sign1').val('');
					// $('.alert_msg').hide();
					// $('.success_msg').html('Message send successfully. Thank you!.').show();
					// $('#mySuccessReg').modal('show');
					return false;
					dis.button('reset');
				}
			}
		});
	});
	
	/* $('#myErrorReg').on('hidden.bs.modal', function () {
		var name = $('#full_name').val();
		var email = $('#email_address').val();
		var subject = $('#subject').val();
		var message = $('#message').val();
	
		if(name.trim() == '')
		{
			$('#full_name').focus();
		}else if(!name.match(/^[A-Za-z . -]+$/))
		{
			$('#full_name').focus();
			$('#full_name').val('');
		}else if(email.trim() == '')
		{
			$('#email_address').focus();
		}else if(!email.match(/^([a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,4}$)/i))
		{
			$('#email_address').focus();
			$('#email_address').val('');
		}else if(subject.trim() == '')
		{
			$('#subject').focus();
		}else if(message.trim() == '')
		{
			$('#message').focus();
		}
	}); */
	
	
	/* paralax */
	$(document).ready(function() {
	   
		$('a.l-home').click(function(){
			$('html, body').animate({
				scrollTop:0
			}, 1500, function() {
				//parallaxScroll(); // Callback is required for iOS
			});
    	return false;
		});
		
		$('a.l-home').click(function(){
			$('html, body').animate({
				scrollTop:$('#home-aai').offset().top
			}, 1500, function() {
				//parallaxScroll(); // Callback is required for iOS
			});
    	return false;
		});
		
		$('a.l-news').click(function(){
			$('html, body').animate({
				scrollTop:$('#news-aai').offset().top
			}, 1500, function() {
				//parallaxScroll(); // Callback is required for iOS
			});
    	return false;
		});
		
		$('a.l-about').click(function(){
			$('html, body').animate({
				scrollTop:$('#about-aai').offset().top
			}, 1500, function() {
				//parallaxScroll(); // Callback is required for iOS
			});
    	return false;
		});
		
		$('a.l-wwd').click(function(){
			$('html, body').animate({
				scrollTop:$('#whatwedo-aai').offset().top
			}, 1500, function() {
				//parallaxScroll(); // Callback is required for iOS
			});
    	return false;
		});
		
		$('a.l-ourwork').click(function(){
			$('html, body').animate({
				scrollTop:$('#ourwork-aai').offset().top
			}, 1500, function() {
				//parallaxScroll(); // Callback is required for iOS
			});
    	return false;
		});
		
		$('a.l-clients').click(function(){
			$('html, body').animate({
				scrollTop:$('#clients-aai').offset().top
			}, 1500, function() {
				//parallaxScroll(); // Callback is required for iOS
			});
    	return false;
		});
		
		$('a.l-wwu').click(function(){
			$('html, body').animate({
				scrollTop:$('#workwithus-aai').offset().top
			}, 1500, function() {
				//parallaxScroll(); // Callback is required for iOS
			});
    	return false;
		});
		
		$('a.l-contact').click(function(){
			$('html, body').animate({
				scrollTop:$('#contact-aai').offset().top
			}, 1500, function() {
				//parallaxScroll(); // Callback is required for iOS
			});
    	return false;
		});
		
		
	});
	
	
	/* added brand 01-03-2014 */
		/* var current = 0,
		$preview = $( '#preview' ),
		$carouselEl = $( '#carousel-plug' ),
		$carouselItems = $carouselEl.children(),
		carousel = $carouselEl.elastislide( {
			current : current,
			minItems : 4,
			onClick : function( el, pos, evt ) {

				changeImage( el, pos );
				evt.preventDefault();

			},
			onReady : function() {
				changeImage( $carouselItems.eq( current ), current );
			}
		} );

		function changeImage( el, pos ) {
			$preview.attr( 'src', el.data( 'preview' ) );
			$carouselItems.removeClass( 'current-img' );
			el.addClass( 'current-img' );
			carousel.setCurrent( pos );
		}   */
		
		
		// /* added events 01-07-2014 */
		/* var current = 0,
		$previewevent = $( '#preview-events' ),
		$carouselElevents = $( '#carousel-plug-events' ),
		$carouselItemsevents = $carouselElevents.children(),
		carouselevents = $carouselElevents.elastislide( {
			current : current,
			minItems : 4,
			onClick : function( el, pos, evt ) {

				changeImageevent( el, pos );
				evt.preventDefault();

			},
			onReady : function() {
				changeImageevent( $carouselItems.eq( current ), current );
			}
		} );

		function changeImageevent( el, pos ) {
			$previewevent.attr( 'src', el.data( 'preview-ev' ) );
			$carouselItemsevents.removeClass( 'current-img' );
			el.addClass( 'current-img' );
			carouselevents.setCurrent( pos );
		} */ 
		
		// /* added trial and sampling 01-07-2014 */
		/* var current = 0,
		$previewTrialSampling = $( '#preview-trialsampling' ),
		$carouselElTrialSampling = $( '#carousel-plug-trialsampling' ),
		$carouselItemsTrialSampling = $carouselElTrialSampling.children(),
		carouselTrialSampling = $carouselElTrialSampling.elastislide( {
			current : current,
			minItems : 4,
			onClick : function( el, pos, evt ) {

				changeImageTrialSampling( el, pos );
				evt.preventDefault();

			},
			onReady : function() {
				changeImageTrialSampling( $carouselItems.eq( current ), current );
			}
		} );

		function changeImageTrialSampling( el, pos ) {
			$previewTrialSampling.attr( 'src', el.data( 'preview-tr' ) );
			$carouselItemsTrialSampling.removeClass( 'current-img' );
			el.addClass( 'current-img' );
			carouselTrialSampling.setCurrent( pos );
		}  */
		
		/*  paralax mouse scroll */
		$(document).ready(function(){
			var $window = $(window);
			$('.section-aai[data-type="background"]').each(function(){
				var $bgobj = $(this); // assigning the object
		 
				$(window).scroll(function() {
				var yPos = -( ($window.scrollTop() - $bgobj.offset().top) / $bgobj.data('speed'));
				 
					// Put together our final background position
					var coords = '50% '+ yPos + 'px';
	 
					// Move the background
					$bgobj.css({ backgroundPosition: coords });
				}); 
			});    
		});
	
	
		/* active nav menu */
		$(function(){
			$('#navbar-active a').click(function () {
				$('#navbar-active a').removeClass('active');
				$(this).addClass('active');
			 });
		 });
	   
	   /* active nav menu in mousescroll */
		$(window).scroll(function()
		{
			// var home = "home";
			// alert(home);
			$('.l-menu').removeClass('active');
			if(window.scrollY < 1000) {
				$('.l-home').addClass('active');
			} else if(window.scrollY < 2000) {
				$('.l-news').addClass('active');
			} else if(window.scrollY < 3000 ) {
				$('.l-about').addClass('active');
			} else if(window.scrollY < 4000 ) {
				$('.l-wwd').addClass('active');
			} else if(window.scrollY < 5000 ) {
				$('.l-ourwork').addClass('active');
			} else if(window.scrollY < 6000 ) {
				$('.l-clients').addClass('active');
			} else if(window.scrollY < 7000 ) {
				$('.l-wwu').addClass('active');
			} else if(window.scrollY >= 7000 ) {
				$('.l-contact').addClass('active');
			}			
	   });
	
	// $(".l-home").click(function() {
		// doBounce($('#home-sec'), 2, '10px', 300);   
	// });
	
	// function doBounce(element, times, distance, speed) {
		// for(i = 0; i < times; i++) {
			// element.animate({marginTop: '-='+distance},speed)
				// .animate({marginTop: '+='+distance},speed);
		// }        
	// }	
	   
		/* carousel control */
		// $('.slide').mouseenter(function(){
			// $('a.left').show('fast');
			// $('a.right').show('fast');
		// });
		
	/* $(window).scroll(function()
		{
			if (document.body.scrollTop === 0)
				$(".navbar").css({"box-shadow":"none"});
			else
				$(".navbar").css({'-webkit-box-shadow' : '0 1px 10px rgba(0, 0, 0, 0.1)',
										 '-moz-box-shadow'    : '0 1px 10px rgba(0, 0, 0, 0.1)',
										 'box-shadow'         : '0 1px 10px rgba(0, 0, 0, 0.1)'});
												
	   }); */
	   
	/* $('#btn_modal').click(function()
	{
		
		$('#myModal').modal('show');
	
	});
	
	$('.send-msg').click(function(){
	
		alert(html);
	}
	
	$('.send_message_form').click(function(){
		$('#form_dentist_profile').ajaxForm({
			
			type: 'POST',
			url: 'dentist_profile/save_dentist_info',
			beforeSubmit: function (){
				var fname = $('#fname').val();
				var middle = $('#middle').val();
				var lname = $('#lname').val();
				var email1 = $('#email1').val();
				
				if(fname.trim() == '' || lname.trim() == ''){
					$('#myErrorReg_profile').modal('show');
					$('.profile_alert_msg').html('Enter your full name in the required field to proceed.').show();
					return false;
				}else if(!fname.match(/^[A-Za-z . -]+$/) || !lname.match(/^[A-Za-z . -]+$/))
				{
					$('#myErrorReg_profile').modal('show');
					$('.profile_alert_msg').html('Enter valid name in the required field to proceed.').show();
					return false;
				}else if(email1.trim() == '')
				{
					$('#myErrorReg_profile').modal('show');
					$('.profile_alert_msg').html('Enter your email address in the required field to proceed.').show();
					return false;
				}else if(!email1.match(/^([a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,4}$)/i))
				{
					$('#myErrorReg_profile').modal('show');
					$('.profile_alert_msg').html('Enter valid email address in the required field to proceed.').show();
					return false;
				}
			},
			
			success: function(html)
			{
				// alert(html)
				$('.profile_alert_msg').hide();
				// $('.success_msg').html('Registration Success!').show();
				$('.profile_success_msg').html('Saved Successfully!').show();
				$('#mySuccessReg_profile').modal('show');
			}
		});
	});	 */
	
	// $('#case_btn').click(function(){
	
		// $('.carousel-hid').slideToggle(250);
		// $('.case-body').show(250);
		// var _div = $('carousel-hid').value();
		// alert(_div);
		// if(){
		
		// }
	// });
	
	// $('#on-ground_btn').click(function(){

		// $('.carousel-hid').slideToggle(250);
		// $('.onground-body').show(250);
	// });
	
	// $('#case_btn').click(function() {
		// $('.carousel-hid').slideToggle('slow', function() {
			// if ($('.carousel-hid').is(':hidden'))
			// {
				// $('.case-body').show();
				// $('.onground-body').hide();
				// $('.events-body').hide();
			// }

		// });             
	// });

	/* $('.button_showUp').click(function(){
		var id = $(this).attr('id');
		show_content_sample(id,$(this));
	});

	function show_content_sample(id,el)
	{
		if($('#show_picture').attr('data') == 'hide')
		{
			$('#show_picture').slideDown(250);
			$('#show_picture').attr('data','show');
			$('[class^=step_]').hide();
			$('.step_'+id).show();
		}else
		{
			if($('.step_'+id).attr('style') == 'display: block;')
			{
				$('#show_picture').slideUp(250);
				$('#show_picture').attr('data','hide');
			}else
			{
				$('[class^=step_]').hide();
				$('.step_'+id).show();
			}
		}
	} */
	
	
	function toggle_visibility(id,el) {
		event.preventDefault();
		var e = document.getElementById(id);
		if (e.style.display == 'block') 
		{
			$(e).slideUp();
			//e.style.display = 'none';
		}
		else 
		{
		   //$(e).slideDown();
			e.style.display = 'block';
		}
		hideAllBut(id);
	}

	function hideAllBut(id) {
		var lists = document.querySelectorAll('.reveal');
		for (var i = lists.length; i--; ) {
			if (lists[i].id != id) {
				lists[i].style.display = 'none';
			}
		}
	}

	$('.btn_view a').click(function () {
		var id = $(this).attr('data');
		toggle_visibility(id, $(this));
	})
	
	// $(document).ready(function(){
    // Set the interval to be 5 seconds
		/* var t = setInterval(function(){
			$("#carousel ul").animate({marginLeft:-100},1000,function(){
				$(this).find("li:last").after($(this).find("li:first"));
				$(this).css({marginLeft:0});
			})
		},5000);
	}); */
	
	/* carousel edit by Mic */
	$('.next_btn').click(function(){
    // Set the interval to be 4 seconds
		var total_item = $(this).parents('.parent_container').find(".thumbs li").length;
		var per_view = $(this).parent().parent().children('.carousel_count').val();
		var slide_length = $(this).parent().parent().children('.slide_length').val();
		var click_count = $(this).parent().parent().children('.click_count').val();
		per_view = Number(per_view);
		slide_length = Number(slide_length);
		click_count = Number(click_count);
		
		if(per_view >= total_item)
		{
			// $('.next_btn').hide();
			return false;
		}
		
		if(click_count == 0)
		{
			slide_length = slide_length + (-200);
			$(this).parent().parent().children('.slide_length').val(slide_length);
		}else
		{
			slide_length = slide_length + (-100);
			$(this).parent().parent().children('.slide_length').val(slide_length);
		}
		
		click_count = click_count + 1;
		$(this).parent().parent().children('.click_count').val(click_count);
		
		$(this).parents('.parent_container').find("#carousel ul").animate({marginLeft:slide_length},400,function(){
			// $(this).find("li:last"); //.after($(this).find("li:first"));
			// $(this).css({marginLeft:-slide_length});
		});
		per_view = per_view + 1;
		// if(per_view = per_view + 1)
		// {
			// $('.prev_btn').show();
		// }
		$(this).parent().parent().children('.carousel_count').val(per_view);
	});
	
	$('.prev_btn').click(function(){
		var per_view = $(this).parent().parent().children('.carousel_count').val();
		var slide_length = $(this).parent().parent().children('.slide_length').val();
		var click_count = $(this).parent().parent().children('.click_count').val();
		per_view = Number(per_view);
		slide_length = Number(slide_length);
		click_count = Number(click_count);
		
		if(slide_length >= 100 || slide_length == 0)
		{
			// $('.prev_btn').hide();
			return false;
		}
		
		slide_length = slide_length + 100;
		per_view = per_view - 1;
		// if(per_view = per_view - 1)
		// {
			// $('.next_btn').show();
		// }
		$(this).parent().parent().children('.carousel_count').val(per_view);
		$(this).parent().parent().children('.slide_length').val(slide_length);
		
		$(this).parents('.parent_container').find("#carousel ul").animate({marginLeft:slide_length},400,function(){
			// $(this).find("li:first").before($(this).find("li:last"));
			// $(this).css({marginLeft:0});
		});
	});
	
	/*  carousel preview */
	$('.click_link_brand').click(function(){
		var image = $(this).attr('alt');
		$('.pre_view').html('<img src="'+image+'" class="col-md-12 col-sm-12" style="width:100%;margin-top:23px;margin-bottom:23px;">');
	});
	
	$('.click_link_events').click(function(){
		var image = $(this).attr('alt');
		$('.pre_view_events').html('<img src="'+image+'" class="col-md-12 col-sm-12" style="width:100%;margin-top:23px;margin-bottom:23px;">');
	});
	
	$('.click_link_trial').click(function(){
		var image = $(this).attr('alt');
		$('.pre_view_trial').html('<img src="'+image+'" class="col-md-12 col-sm-12">');
	});
	
	$('.click_link_ambient').click(function(){
		var image = $(this).attr('alt');
		$('.pre_view_ambient').html('<img src="'+image+'" class="col-md-12 col-sm-12">');
	});
	
	$('.click_link_tieup').click(function(){
		var image = $(this).attr('alt');
		$('.pre_view_tieup').html('<img src="'+image+'" class="col-md-12 col-sm-12">');
	});
	// $('.click_link_ambient').click(function(){
		// var image = $(this).find('img').attr('src');
		// $('.pre_view_ambient').html('<img src="'+image+'" class="col-md-12 col-sm-12" style="width:;">');
	// });
	
	/* nprev and next carousel */
	$('.thumb-wrap').mouseenter(function(){
		$('.next_btn').fadeIn();
		$('.prev_btn').fadeIn();
	});
	
	$('.thumb-wrap').mouseleave(function(){
		$('.next_btn').fadeOut();
		$('.prev_btn').fadeOut();
	});

});

