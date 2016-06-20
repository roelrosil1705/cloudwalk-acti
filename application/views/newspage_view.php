<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>

    <meta name="robots" content="noindex">

    <title><?php echo isset($title) ? $title : 'Activation Advertising, Inc.'; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <link href="<?php echo base_url();?>style/news_style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>style/whatwedo_style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>style/style.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>elastslide/css/demo.css" /><!-- added 01-03-2014 -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>elastslide/css/elastislide.css" /><!-- added 01-03-2014 -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>elastslide/css/custom.css" /><!-- added 01-03-2014 -->
    <script src="<?php echo base_url();?>elastslide/js/modernizr.custom.17475.js"></script><!-- added 01-03-2014 -->

</head>
<body style="background:url('<?php echo base_url() ?>img/bg-news.png') 50% 0 no-repeat fixed">
<div id="scrolltopbtn" style="display: none;position: fixed;right: 6px;background: rgba(0,0,0,0.2);padding: 15px;border-radius: 10px;top: 5px;z-index: 1111;">
    <a href="#wrapper">TOP &#11014;</a>
</div>
<div id="wrapper" style="border:solid px green;">
    <div class="">
        <div class="well well-md well-sm" style="background:transparent;border:none;">
            <nav class="navbar navbar-default" role="navigation" style="background:transparent;border:none;">
                <!--<div class="row">-->

                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <div class="nav navbar-nav">
                            <div id="navbar-active" class="list-inline col-md-12 col-md-pull-1 col-sm-12 col-sm-offset-1" style="margin-left:px;">
                                <div class="nav-home col-md-1 col-sm-1 active">
                                    <a href="<?php echo base_url(); ?>#home-aai" class="l-menu l-home" <?php //if(isset($activeMenu) && $activeMenu == 'home' ){echo 'style="background:#de6818;color:#fff;text-decoration:none;"';}?>>
                                        <span class="nav-label-s">HOME</span>
                                    </a>
                                </div>
                                <div class="nav-news col-md-1 col-sm-1 active">
                                    <a href="<?php echo base_url(); ?>#news-aai" href="<?php //echo base_url('news'); ?>" class="l-menu l-news active" <?php //if(isset($activeMenu) && $activeMenu == 'news_page' ){echo 'style="background:#01589c;color:white;text-decoration:none;"';}?>>
                                        <span class="nav-label-s">NEWS</span>
                                    </a>
                                </div>
                                <div class="nav-about col-md-1 col-sm-1 active">
                                    <a href="<?php echo base_url(); ?>#about-aai" class="l-menu l-about" <?php //if(isset($activeMenu) && $activeMenu == 'about_page' ){echo 'style="background:#de6818;color:white;text-decoration:none;"';}?>>
                                        <span class="nav-label">ABOUT US</span>
                                    </a>
                                </div>
                                <div class="nav-wwd col-md-1 col-sm-1 active">
                                    <a href="<?php echo base_url(); ?>#whatwedo-aai" class="l-menu l-wwd" <?php //if(isset($activeMenu) && $activeMenu == 'whatwedo_page' ){echo 'style="background:#de6818;color:white;text-decoration:none;"';}?>>
                                        <span class="nav-label">WHAT WE DO</span>
                                    </a>
                                </div>
                                <div class="nav-ourwork col-md-1 col-sm-1 active">
                                    <a href="<?php echo base_url(); ?>#ourwork-aai" class="l-menu l-ourwork" <?php //if(isset($activeMenu) && $activeMenu == 'ourwork_page' ){echo 'style="background:#de6818;color:white;text-decoration:none;"';}?>>
                                        <span class="nav-label">OUR WORK</span>
                                    </a>
                                </div>
                                <div class="nav-clients col-md-1 col-sm-1 active">
                                    <a href="<?php echo base_url(); ?>#clients-aai" class="l-menu l-clients" <?php //if(isset($activeMenu) && $activeMenu == 'clients_page' ){echo 'style="background:#01589c;color:white;text-decoration:none;"';}?>>
                                        <span class="nav-label-s">CLIENTS</span>
                                    </a>
                                </div>
                                <div class="nav-wwu col-md-1 col-sm-1 active">
                                    <a href="<?php echo base_url(); ?>#workwithus-aai" class="l-menu l-wwu" <?php //if(isset($activeMenu) && $activeMenu == 'workwithus_page' ){echo 'style="background:#de6818;color:white;text-decoration:none;"';}?>>
                                        <span class="nav-label">WORK WITH US</span>
                                    </a>
                                </div>
                                <div class="nav-contact col-md-1 col-sm-1 active">
                                    <a href="<?php echo base_url(); ?>#contact-aai" class="l-menu l-contact" <?php //if(isset($activeMenu) && $activeMenu == 'contact_page' ){echo 'style="background:#de6818;color:white;text-decoration:none;"';}?>>
                                        <span class="nav-label">CONTACT US</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--</div>	-->
            </nav>
        </div>
    </div>
    <div class="curtains" style="margin-top: -36px;">
        <div>
            <div style="min-height: 100%;" class="aai-background news-para">
                <div id="news-sec" class="container" style="border:solid px red;margin-top:0px;">

                    <div class="row" style="border:solid px red;">
                        <div class="col-md-12 col-sm-4">
                            <img src="<?php echo base_url(); ?>images/news-title.png" style="max-width: 431px;display: block;margin: 0 auto;">
                        </div>
                    </div>
                    <!--Start PAGE 1-->
                    <div class="row col-md-10 col-md-offset-1 aai-news-bshadow" style="min-height: 800px;">
                        <div class="col-md-12" style="border-bottom:solid px gray;padding: 70px 15px;text-align: justify;">
                            <div class="container" style="font-weight: 100;font-family: sans-serif;padding-top: 25%;font-size: 1.2em;">
                                <!--Start CONTENT -->
                                <p>As of June 20, 2016, we at Activations Advertising, Inc. continue to cooperate with the NBI and the Congress regarding the investigation on Closeup Forever Summer 2016 . The deaths that occurred during the event are a terrible tragedy and have been profoundly traumatic for all of the parties involved.</p>
                                <p>In the interest of full disclosure, we would like to make public the documents, which we have submitted, to the NBI –which includes the security plan validated by affidavits. We have decided to publish this so that the public can be informed about the details of this unfortunate circumstance.</p>
                                <p>Currently, our organization is working with several security experts to find possible enhancements to our security protocol.</p>
                                <!--End CONTENT -->
                            </div>
                        </div>
                    </div>
                    <!--End PAGE 1-->
                    <!--Start PAGE 2-->
                    <div class="row col-md-10 col-md-offset-1 aai-news-bshadow" style="min-height: 800px;">
                        <div class="col-md-12" style="border-bottom:solid px gray;padding: 70px 15px;text-align: justify;">
                            <div class="container" style="font-weight: 100;font-family: sans-serif;">
                                <h4 style="text-align: center;"><strong>INVOLVED GROUPS AND ORGANIZATIONS</strong></h4>
                                <div class="col-md-10 col-md-offset-1">
                                    <b>Civilian</b>
                                    <ul style="margin-left: 50px;">
                                        <li>CloseUp/Unilever Philippines –Event Organizer</li>
                                        <li>EventScape – Event Implementation, Logistics, Talent Acquisition, Food and Beverage</li>
                                        <li>Activations Advertising – Event Security, On-ground Manpower and Logistics</li>
                                        <li>Pouch – RFID Venue Entry System</li>
                                        <li>SM Mall of Asia – Venue Owner, Security</li>
                                    </ul>
                                    <b>Government</b>
                                    <ul style="margin-left: 50px;">
                                        <li>PNP Pasay</li>
                                        <li>City of Pasay</li>
                                        <li>Bureau of Fire Protection</li>
                                    </ul>
                                    <b>What is CloseUp Forever Summer?</b>
                                    <p>CloseUp Forever Summer is an annual Electronic Dance Music (EDM) festival featuring the world’s top DJs performing live. The event is organized and funded by CloseUp/Unilever Philippines with support from its contracted suppliers EventScape and Activations Advertising.</p>

                                    <b>EventScape</b>
                                    <p>EventScape was responsible for organizing and bringing-in the featured talent and performers for the event.</p>
                                    <ul style="margin-left: 50px;">
                                        <li>Staging of the event</li>
                                        <li>Talent Acquisition</li>
                                        <li>Event setup</li>
                                        <li>Official Permits (Event, City, Alcohol)</li>
                                        <li>Organizing food and alcoholic beverage suppliers</li>
                                        <li>Selling of Food. Beverages, Alcoholic drinks</li>
                                    </ul>

                                    <b>Activations Advertising</b>
                                    <p>Activations Advertising Inc. was given the task of planning, organizing and implementing the security and emergency measures for the event. </p>
                                    <ul style="margin-left: 50px;">
                                        <li>Planning and Implementation of event security and emergency procedures</li>
                                        <li>Security and On-ground Manpower</li>
                                        <li>Emergency Medical Team and Ambulances</li>
                                        <li>Coordination with PNP</li>
                                        <li>Coordination with Hospitals</li>
                                        <li>Coordination with Licensed Ticket outlet</li>
                                    </ul>
                                </div>
                                <!--End CONTENT -->
                            </div>
                        </div>
                    </div>
                    <!--End PAGE 2-->
                    <!--Start PAGE 3-->
                    <div class="row col-md-10 col-md-offset-1 aai-news-bshadow" style="min-height: 800px;">
                        <div class="col-md-12" style="border-bottom:solid px gray;padding: 70px 15px;text-align: justify;">
                            <div class="container" style="font-weight: 100;font-family: sans-serif;">
                                <div class="col-md-10 col-md-offset-1">
                                    <b>SM Mall of Asia</b>
                                    <p>The venue was provided by SM Mall of Asia at their concert grounds. The venue has been a popular location for big concert events similar to CloseUp Forever Summer.</p>
                                    <ul class="mar30">
                                        <li>Venue</li>
                                        <li>Additional Security</li>
                                    </ul>
                                    <b>Pasay City Police</b>
                                    <p>The Pasay City Police was asked to support and participate in the planning and implementation of the event by providing expert assistance in regards to security planning and identifying potential dangers and hazards in events of this type. Pasay City Police was also requested to provide police assistance outside and inside the venue during the event as well as show police presence.</p>
                                    <ul class="mar30">
                                        <li>Additional Security</li>
                                        <li>Police presence</li>
                                        <li>Planning and implementation support</li>
                                    </ul>

                                    <h2 class="twidth">PRE-EVENT PLANNING</h2>
                                    <p>Months and weeks before the event, the event organizer (CloseUp/Unilever Philippines) and its joint suppliers and partners (Eventscape and Activations Advertising) formulated and finalized the event logistics, procedures and security measures in implementing the 4th annual running of CloseUp Forever summer music festival.</p>
                                    <h3>Standards Followed</h3>
                                    <b>Security Personnel Requirements</b>
                                    <ul class="mar30">
                                        <li>The security plan was based on the US events standard a security-to-guest ratio of 1:50. 1 security personnel for every 50 audience members. </li>
                                    </ul>
                                    <b>Medical Personnel Requirements</b>
                                    <ul class="mar30">
                                        <li>
                                            The organizers also followed the WHO standard of the number of emergency medical professionals and teams to be used for events of this type and size.
                                            <br><a href="http://ww2.health.wa.gov.au/~/media/Files/Corporate/general%20documents/Environmental%20health/Concerts%20and%20Mass%20Gathering%20Guidelines.ashx">Click here for reference.</a><br>
                                            <br>Government of Western Australia-Department of Health: Guidelines for Concerts, Events, and Organized Gatherings
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End PAGE 3 -->
                    <!--Start PAGE 4 -->
                    <div class="row col-md-10 col-md-offset-1 aai-news-bshadow" style="min-height: 800px;">
                        <div class="col-md-12" style="border-bottom:solid px gray;padding: 70px 15px;text-align: justify;">
                            <div class="container" style="font-weight: 100;font-family: sans-serif;">
                                <!--Start CONTENT -->
                                <div class="col-md-10 col-md-offset-1">
                                    <b>Planning and Production Meetings</b>
                                    <p>CloseUp and its main suppliers Activations Advertising and Eventscape conducted three separate pre-production meetings with suppliers, partners and government organizations refine and finalize the security measures that will be put in place during the event.</p>
                                    <table style="border: 1px solid #000;width: 100%;text-align: center;">
                                        <tr>
                                            <td colspan="3" style="border: 1px solid #000;"><b>PRE-PRODUCTION AND SECURITY MEETINGS</b></td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid #000;"><b>Agenda</b></td>
                                            <td style="border: 1px solid #000;"><b>Date</b></td>
                                            <td style="border: 1px solid #000;"><b>Location</b></td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid #000;">1st Production Meeting</td>
                                            <td style="border: 1px solid #000;">05/12/2016</td>
                                            <td style="border: 1px solid #000;">SM Mall of Asia</td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid #000;">2nd Production Meeting</td>
                                            <td style="border: 1px solid #000;">05/18/2016</td>
                                            <td style="border: 1px solid #000;">Brgy Pinahan, Quezon City</td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid #000;">3rd Production Meeting</td>
                                            <td style="border: 1px solid #000;">05/19/2016</td>
                                            <td style="border: 1px solid #000;">Brgy. Quirino 2B Covered Court</td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid #000;">Final Security Briefing/Simulation</td>
                                            <td style="border: 1px solid #000;">05/21/2016</td>
                                            <td style="border: 1px solid #000;">Mall of Asia</td>
                                        </tr>
                                    </table>
                                    <h3><b>EVENT DAY AND IMPLEMENTATION OF SECURITY PLAN</b></h3>
                                    <b>Quick Look: Security Plan</b>
                                    <p>The security plan was based from previous CloseUp Forever Summer runs and similar events implemented by the organizers. </p>
                                </div>
                                <!--End CONTENT -->
                            </div>
                        </div>
                    </div>
                    <!--End PAGE 4-->
                    <!--Start PAGE 5 -->
                    <div class="row col-md-10 col-md-offset-1 aai-news-bshadow" style="min-height: 800px;">
                        <div class="col-md-12" style="border-bottom:solid px gray;padding: 70px 15px;text-align: justify;">
                            <div class="container" style="font-weight: 100;font-family: sans-serif;">
                                <!--Start CONTENT -->
                                <div class="col-md-10 col-md-offset-1">
                                    <h2 class="twidth">VENUE SAFETY FEATURES, PROCEDURES AND ASSETS</h2>
                                    <h3><i>Venue Map</i></h3>
                                    <img class="twidth" src="<?=base_url('img/odds/1.jpg');?>">
                                    <h3><i>Barricades and Restricted Entry Points</i></h3>
                                    <p>The venue was barricaded to prevent non-ticket holders from entering and to ensure all guests were directed to the entrance locations and go through the thorough entry and security procedures.</p>
                                    <p>Important sections of the venue were divided into different zones with varying levels of security and can only be entered by passing through security and inspection.</p>
                                    <h3><i>Guest Information </i></h3>
                                </div>
                                <!--End CONTENT -->
                            </div>
                        </div>
                    </div>
                    <!--End PAGE 5-->
                    <!--Start PAGE 6 -->
                    <div class="row col-md-10 col-md-offset-1 aai-news-bshadow" style="min-height: 800px;">
                        <div class="col-md-12" style="border-bottom:solid px gray;padding: 70px 15px;text-align: justify;">
                            <div class="container" style="font-weight: 100;font-family: sans-serif;">
                                <!--Start CONTENT -->
                                <div class="col-md-10 col-md-offset-1">
                                    <p>The organizers also provided information to guests regarding the safety and security rules of the event including a list of prohibited items.</p>
                                    <h4>Prohibited Items Signages.</h4>
                                    <ul style="margin-left: 50px;">
                                        <li>
                                            <p>Large and visible signages at key areas like entrances that show the list of prohibited items inside the venue to inform concert goers.</p>
                                            <img src="<?php echo base_url() ?>img/odds/2222.jpg" style="width: 100%;">
                                        </li>
                                    </ul>
                                    <h4>Security and Emergency Safety Videos</h4>
                                    <ul style="margin-left: 50px;">
                                        <li>Videos were shown on-screen during the event that informs concert goers to follow the event’s security, safety and emergency rules. </li>
                                    </ul>
                                    <iframe class="embed-responsive-item twidth" src="<?=base_url('videos/Media1.mp4')?>" style="height: 388px;" allowfullscreen></iframe>
                                </div>
                                <!--End CONTENT -->
                            </div>
                        </div>
                    </div>
                    <!--End PAGE 6 -->
                    <!--Start PAGE 7-->
                    <div class="row col-md-10 col-md-offset-1 aai-news-bshadow" style="min-height: 800px;">
                        <div class="col-md-12" style="border-bottom:solid px gray;padding: 70px 15px;text-align: justify;">
                            <div class="container" style="font-weight: 100;font-family: sans-serif;">
                                <!--Start CONTENT -->
                                <div class="col-md-10 col-md-offset-1">
                                    <h3><i>Pouch RFID System</i></h3>
                                    <p>Puch provided RFID tagging system using an RFID wristband that facilitates and records entrances as well as facilitating wireless cash transactions between guests and concessionaires. This system also restricts minors from buying alcoholic drinks.</p>
                                    <h3><i>Entrance Procedure and Security</i></h3>
                                    <p>Before entering the venue, audience members must pass several lines of security steps. </p>
                                    <ol type="1" class="mar30">
                                        <li>Barker Announcement</li>
                                        <li>Checking of Tickets & Frisking</li>
                                        <li>2<sup>nd</sup> Frisking</li>
                                        <li>Scanning of tickets </li>
                                        <li>Tagging and registration</li>
                                    </ol>
                                    <video src=""></video>
                                    <h3><i>CCTV</i></h3>
                                    <p>CCTV units were also deployed to monitor the entire venue. All footage was viewed live in a central control room inside the venue.</p>
                                    <h3><i>Central Control Room</i></h3>
                                    <p>A central control room monitored and directed all operations in the venue via communication with on-ground and security personnel plus CCTV live footage.</p>
                                </div>
                                <!--End CONTENT -->
                            </div>
                        </div>
                    </div>
                    <!--End PAGE 7-->
                    <!--Start PAGE 8 -->
                    <div class="row col-md-10 col-md-offset-1 aai-news-bshadow" style="min-height: 800px;">
                        <div class="col-md-12" style="border-bottom:solid px gray;padding: 70px 15px;text-align: justify;">
                            <div class="container" style="font-weight: 100;font-family: sans-serif;">
                                <!--Start CONTENT -->
                                <div class="col-md-10 col-md-offset-1">
                                    <h4>Medical Tents</h4>
                                    <p>A number of medical first-aide stations were installed offering quick first-aide. A larger ambulatory tent was also installed equipped to provide medical treatment for serious cases.</p>
                                    <table style="border: 1px solid #000;width: 100%;text-align: center;">
                                        <tr>
                                            <td style="border: 1px solid #000;"><b>Asset</b></td>
                                            <td style="border: 1px solid #000;"><b>Capability</b></td>
                                            <td style="border: 1px solid #000;"><b>Number Deployed</b></td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid #000;">First-aid Station</td>
                                            <td style="border: 1px solid #000;">First-aid, minor injuries or treatment.</td>
                                            <td style="border: 1px solid #000;">4</td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid #000;">Ambulatory tent</td>
                                            <td style="border: 1px solid #000;">Serious Medical Incidents. Emergency equipment.</td>
                                            <td style="border: 1px solid #000;">1</td>
                                        </tr>
                                    </table>
                                    <h4>Hospitals</h4>
                                    <p>Several days before the event, we have coordinated with  4 hospitals nearby. </p>
                                    <table style="border: 1px solid #000;width: 100%;text-align: center;">
                                        <tr>
                                            <td style="border: 1px solid #000;"><b>Hospitals</b></td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid #000;">San Juan De Dios </td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid #000;">Adventist Medical </td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid #000;">Pasay General Hospital</td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid #000;">Manila Doctors</td>
                                        </tr>
                                    </table>
                                    <h4>Security Sweep</h4>
                                    <p>Before the event, a thorough security sweep was conducted by security teams with K-9 units to ensure that no illicit material are present in the venue before guests were allowed to enter.</p>

                                    <h4>Emergency and Evacuation Protocol</h4>
                                    <p>Organizers also implemented plans for immediate evacuation and assistance to all audience members and staff inside the venue in case of a major emergency including: earthquake, fire, floods, or terrorist incidents</p>
                                </div>
                                <!--End CONTENT -->
                            </div>
                        </div>
                    </div>
                    <!--End PAGE 8 -->
                    <!--Start PAGE 9-->
                    <div class="row col-md-10 col-md-offset-1 aai-news-bshadow" style="min-height: 800px;">
                        <div class="col-md-12" style="padding: 70px 15px;text-align: justify;">
                            <div class="container" style="font-weight: 100;font-family: sans-serif;">
                                <!--Start CONTENT -->
                                <div class="col-md-10 col-md-offset-1">
                                    <h2 class="twidth">NUMBER OF PERSONNEL DEPLOYED FOR THE EVENT</h2>
                                    <h3><i>On-ground Security Personnel</i></h3>
                                    <p>Security was to be provided by teams comprised of bouncers, on-ground personnel and police. These units were to be deployed inside and outside the venue including critical locations like entrances and exits and other entry points between different sections of the venue.</p>
                                    <p>Certified and registered bouncer teams were provided Delirum and Red Knights which were comprised of bouncers with experience in handling large-scale live events.</p>
                                    <p>Security Objectives:</p>
                                    <ul class="mar30">
                                        <li>Deter and stop violence or unruly behavior</li>
                                        <li>Prevent or minimize physical injuries</li>
                                        <li>Prevent damage to property</li>
                                        <li>Deter or stop theft and other petty crimes</li>
                                        <li>Confiscate prohibited items from entering the venue (Weapons, drugs, cameras etc.)</li>
                                        <li>Prevent other threats like terrorist actions. </li>
                                    </ul>
                                    <table class="twidth" border="1px">
                                        <tr>
                                            <th>Particulars</th>
                                            <th>Planned No.</th>
                                            <th>Actual Deployed</th>
                                        </tr>
                                        <tr align="left">
                                            <td>On-ground Safety Commander</td>
                                            <td>1</td>
                                            <td>1</td>
                                        </tr>
                                        <tr align="left">
                                            <td>Assistant Safety Commanders</td>
                                            <td>3</td>
                                            <td>4</td>
                                        </tr>
                                        <tr align="left">
                                            <td>SM Mall of Asia Security</td>
                                            <td>100</td>
                                            <td>100</td>
                                        </tr>
                                        <tr align="left">
                                            <td>Head Security</td>
                                            <td>1</td>
                                            <td>1</td>
                                        </tr>
                                        <tr align="left">
                                            <td>Bouncers Team Leaders</td>
                                            <td>15</td>
                                            <td>15</td>
                                        </tr>
                                        <tr align="left">
                                            <td>Bouncers</td>
                                            <td>235</td>
                                            <td>235</td>
                                        </tr>
                                        <tr align="left">
                                            <td>Red Knights Security (for SVIP)</td>
                                            <td>16</td>
                                            <td>16</td>
                                        </tr>
                                        <tr align="left">
                                            <td>k-9 Units</td>
                                            <td>6</td>
                                            <td>6</td>
                                        </tr>
                                        <tr align="left">
                                            <td>Total</td>
                                            <td>377</td>
                                            <td>378</td>
                                        </tr>
                                    </table>
                                    <h3><i>On-ground Manpower</i></h3>
                                    <p>A separate group of on-ground manpower were deployed to operate key sections of the venue. These include manning entrances, guest assistance, utility, logistics, etc.</p>
                                </div>
                                <!--End CONTENT -->
                            </div>
                        </div>
                    </div>
                    <!--End PAGE 9-->
                    <!--Start PAGE 10-->
                    <div class="row col-md-10 col-md-offset-1 aai-news-bshadow" style="min-height: 800px;">
                        <div class="col-md-12" style="border-bottom:solid px gray;padding: 70px 15px;text-align: justify;">
                            <div class="container" style="font-weight: 100;font-family: sans-serif;">
                                <!--Start CONTENT -->
                                <div class="col-md-10 col-md-offset-1">
                                    <table style="border: 1px solid #000;width: 100%;text-align: center;">
                                        <tr>
                                            <td style="border: 1px solid #000;"><b>Particulars</b></td>
                                            <td style="border: 1px solid #000;"><b>Actual Deployed</b></td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid #000;">Project Manager</td>
                                            <td style="border: 1px solid #000;">9</td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid #000;">Team Leaders</td>
                                            <td style="border: 1px solid #000;">19</td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid #000;">Gate Personnel</td>
                                            <td style="border: 1px solid #000;">111</td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid #000;">Top-up Personnel</td>
                                            <td style="border: 1px solid #000;">30</td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid #000;">Tent and on-ground attendants</td>
                                            <td style="border: 1px solid #000;">27</td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid #000;">Documentation</td>
                                            <td style="border: 1px solid #000;">3 teams</td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid #000;">Barkers</td>
                                            <td style="border: 1px solid #000;">4</td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid #000;">Utility</td>
                                            <td style="border: 1px solid #000;">8</td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid #000;">Standby Manpower</td>
                                            <td style="border: 1px solid #000;">10</td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid #000;">Technical Team (CCTV, radio, comms, etc.)</td>
                                            <td style="border: 1px solid #000;">30</td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid #000;">Core AAI Team</td>
                                            <td style="border: 1px solid #000;">32</td>
                                        </tr>
                                    </table>
                                    <h4>Emergency Medical Teams and Medical Stations</h4>
                                    <p>Emergency Medical Teams were deployed throughout the venue ready to quickly provide medical assistance to audience members when needed.</p>
                                    <table style="border: 1px solid #000;width: 100%;text-align: center;">
                                        <tr>
                                            <td style="border: 1px solid #000;"><b>Particulars</b></td>
                                            <td style="border: 1px solid #000;"><b>No. Of Teams</b></td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid #000;">Ambulance Team</td>
                                            <td style="border: 1px solid #000;">6 teams</td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid #000;">Paramedics Team</td>
                                            <td style="border: 1px solid #000;">30 EMT’s /Nurses</td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid #000;">Unilever Paramedics</td>
                                            <td style="border: 1px solid #000;">2 Medical Doctors/ 1 nurse</td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid #000;">Fire Trucks w/ Marshals</td>
                                            <td style="border: 1px solid #000;">4 units</td>
                                        </tr>
                                    </table>

                                    <h4>Police Deployment</h4>
                                    <p>Members of the PNP Pasay were present to provide additional security inside and outside the venue and show strong police presence to deter potential criminal activity.</p>
                                    <table style="border: 1px solid #000;width: 100%;text-align: center;">
                                        <tr>
                                            <td style="border: 1px solid #000;"><b>Particulars</b></td>
                                            <td style="border: 1px solid #000;"><b>Planned</b></td>
                                            <td style="border: 1px solid #000;"><b>Actual Deployed</b></td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid #000;">Head of PNP</td>
                                            <td style="border: 1px solid #000;">1</td>
                                            <td style="border: 1px solid #000;">1</td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid #000;">PNP Police Officers</td>
                                            <td style="border: 1px solid #000;">100</td>
                                            <td style="border: 1px solid #000;">104</td>
                                        </tr>
                                    </table>
                                    <h4>PNP Undercover Contingent: INTEL GROUP</h4>
                                    <p>The Pasay PNP also deployed civilian-clothed units inside the venue to monitor the audience and guard against potential dangers.</p>
                                </div>
                                <!--End CONTENT -->
                            </div>
                        </div>
                    </div>
                    <!--End PAGE 10-->
                    <!--Start PAGE 11-->
                    <div class="row col-md-10 col-md-offset-1 aai-news-bshadow" style="min-height: 800px;">
                        <div class="col-md-12" style="padding: 70px 15px;text-align: justify;">
                            <div class="container" style="font-weight: 100;font-family: sans-serif;">
                                <!--Start CONTENT -->
                                <div class="col-md-10 col-md-offset-1">
                                    <table class="twidth" border="1px">
                                        <tr>
                                            <th style="text-align: center;">Particulars</th>
                                            <th style="text-align: center;">Planned</th>
                                            <th style="text-align: center;">Actual Deployed</th>
                                        </tr>
                                        <tr>
                                            <td>INTEL GROUP (Undercover)</td>
                                            <td>none</td>
                                            <td>8</td>
                                        </tr>
                                    </table>
                                    <h3><i>Pasay City Event Inspection Team</i></h3>
                                    <p>Before and during the event, Pasay City Local Government also deployed a 20-man event inspection team who will verify and sign-off if the said event is in compliance with the city’s Laws and Ordinances with regards to safety, lewd behavior, and drugs.</p>

                                    <table class="twidth" border="1px" style="padding: 5px;">
                                        <tr>
                                            <th style="text-align: center;">Particulars</th>
                                            <th style="text-align: center;">Planned</th>
                                            <th style="text-align: center;">Actual Deployed</th>
                                        </tr>
                                        <tr>
                                            <td>Pasay City Event Inspection Team</td>
                                            <td>20</td>
                                            <td>20</td>
                                        </tr>
                                    </table>

                                    <h1 class="twidth">IMPORTANT INCIDENTS</h1>
                                    <h3><i>Event Fatalities</i></h3>
                                    <p>During the event, 3 audience members were given quick medical aid due to illness. These individuals were then immediately transported to the nearest hospitals to be given necessary medical attention.</p>
                                    <table class="twidth" border="1px">
                                        <tr>
                                            <th style="text-align: center;">Name of Individual</th>
                                            <th style="text-align: center;">Hospital</th>
                                        </tr>
                                        <tr>
                                            <td>Ariel Leal (22 yrs)</td>
                                            <td>San Juan de Dios</td>
                                        </tr>
                                        <tr>
                                            <td>Bianca Fontejon 19 yrs old</td>
                                            <td>Manila Doctors</td>
                                        </tr>
                                        <tr>
                                            <td>Eric Miller 36 yrs old</td>
                                            <td>Manila Doctors</td>
                                        </tr>
                                    </table>
                                    <h3><i>Outside Fatalities</i></h3>
                                    <p>Two individuals who also attended the event earlier in the evening were found outside the venue and brought to hospitals and were then declared fatalities. Additional information on the events that transpired before the individuals were received in the hospital are unknown as they were not inside the venue when the incidents occurred.</p>
                                </div>
                                <!--End CONTENT -->
                            </div>
                        </div>
                    </div>
                    <!--End PAGE 11-->
                    <!--Start PAGE 12-->
                    <div class="row col-md-10 col-md-offset-1 aai-news-bshadow" style="min-height: 800px;margin-bottom: 60px;">
                        <div class="col-md-12" style="border-bottom:solid px gray;padding: 70px 15px;text-align: justify;">
                            <div class="container" style="font-weight: 100;font-family: sans-serif;">
                                <!--Start CONTENT -->
                                <div class="col-md-10 col-md-offset-1">
                                    <table style="border: 1px solid #000;width: 100%;text-align: center;">
                                        <tr>
                                            <td style="border: 1px solid #000;"><b>Name of Individual</b></td>
                                            <td style="border: 1px solid #000;"><b>Notes</b></td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid #000;">Lance Garcia </td>
                                            <td style="border: 1px solid #000;">Found outside the venue by SM Mall security (not related to the event)  near a parking facility and brought to hospital.</td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid #000;">Ken Migawa</td>
                                            <td style="border: 1px solid #000;">Brought to the hospital by acquaintances. Whether individual was brought directly from the event venue or another location to the hospital is unknown.</td>
                                        </tr>
                                    </table>

                                    <h4>Conclusion and Summary</h4>
                                    <p>Based from the planning and implementation figures, the organizers followed industry- standard safety & security procedures in organizing major live events involving large numbers of audiences. The security and emergency protocols implemented mirrored or exceeded similar events. The required number of manpower, resources and assets were allocated in the implementation of its plans.</p>
                                    <p>During implementation, the organizers exceeded the required number of security and medical personnel based on US and WHO events standards and its entry procedures and protocols were more stringent than that of other similar events in the past. </p>
                                </div>
                                <!--End CONTENT -->
                            </div>
                        </div>
                    </div>
                    <!--End PAGE -->

                </div>
            </div>
        </div>
    </div>

</div>
<div id="footer">
    <?php
    // echo $this->load->view('homepage/footer');
    // if(isset($identifier))
    // {
    // echo $this->load->view('homepage/footer');
    // }
    // else
    // {
    // echo $this->load->view('dentist_dashboard/footer');
    // }
    ?>
</div>

<script src="<?php echo base_url();?>js/jquery.min.js"></script>
<script src="<?php echo base_url();?>js/jquery-ui.min.js"></script>

<script src="<?php echo base_url();?>bootstrap/js/bootstrap.js"></script>
<script src="http://code.jquery.com/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>elastslide/js/jquerypp.custom.js"></script><!-- added 01-03-2014 -->
<script type="text/javascript" src="<?php echo base_url();?>elastslide/js/jquery.elastislide.js"></script><!-- added 01-03-2014 -->

<script src="<?php echo base_url();?>js/jquery.form.js"></script>

<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script><!-- added 01-03-2014 -->

<script type='text/javascript'>
    $(window).scroll(function(event){
        var st = $(this).scrollTop();
        if (st > 0){
            $('#scrolltopbtn').show();
        } else {
            $('#scrolltopbtn').hide();
        }
        lastScrollTop = st;
    });
</script>

</body>
</html>

