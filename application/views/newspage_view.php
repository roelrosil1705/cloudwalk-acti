<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title><?php echo isset($title) ? $title : 'Activation Advertising, Inc.'; ?></title>
    <meta name="description" content="As of June 20, 2016, we at Activations Advertising, Inc. continue to cooperate with the NBI and the Congress regarding the investigation on Closeup Forever Summer 2016 .">
    <meta name="keywords" content="Activations, Advertising">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <link href="<?php echo base_url();?>style/news_style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>style/whatwedo_style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>style/style.css" rel="stylesheet">

    <script src="<?php echo base_url();?>js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>js/jquery-ui.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>elastslide/css/demo.css" /><!-- added 01-03-2014 -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>elastslide/css/elastislide.css" /><!-- added 01-03-2014 -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>elastslide/css/custom.css" /><!-- added 01-03-2014 -->
    <script src="<?php echo base_url();?>elastslide/js/modernizr.custom.17475.js"></script><!-- added 01-03-2014 -->
    <script type="application/ld+json">
	{
	  "@context": "http://schema.org",
	  "@type": "Organization",
	  "url": "http://activationsadvertising.com",
	  "contactPoint": [{
		"@type": "ContactPoint",
		"telephone": "435-6566",
		"contactType": "customer service"
	  }]
	}
	</script>
</head>
<body style="background:url('<?php echo base_url() ?>img/bg-news.png') 50% 0 no-repeat fixed">
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-79955706-1', 'auto');
    ga('send', 'pageview');

</script>
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
                                <p>As of June 20, 2016, we at Activations Advertising, Inc. continue to cooperate with the NBI and the Congress regarding the investigation on Closeup Forever Summer 2016. The deaths that occurred during the event are a terrible tragedy and have been profoundly traumatic for all of the parties involved.</p>
                                <p>In the interest of full disclosure, we would like to make public the documents that we have submitted to the authorities, which includes the security plan, and validated by affidavits. We have decided to publish this so that the public can be informed about the details of the surrounding circumstances.</p>
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
                                <div class="col-md-10 col-md-offset-1">
                                    <h4><b>What is CloseUp Forever Summer?</b></h4>
                                    <p>CloseUp Forever Summer is an annual Electronic Dance Music (EDM) festival featuring the world's top DJs performing live. The event is delivered and funded by CloseUp/Unilever Philippines with support from its contracted suppliers/co-organizers Eventscape Manila and Activations Advertising.</p>
                                    <br/>
                                    <h3 style="text-align: center;"><strong>INVOLVED GROUPS AND ORGANIZATIONS</strong></h3>
                                    <h4><b>Civilian</b></h4>
                                    <b>1.) CloseUp/Unilever Philippines - Principal</b><br/><br/>
                                    <b>2.) Eventscape - Program Implementation , Staging  Requirements, Logistics, Food and Beverage</b>
                                    <p> </p>
                                    <ul style="margin-left: 50px;">
                                        <li>Creative Conceptualization</li>
                                        <li>Program Management</li>
                                        <li>Stage Management</li>
                                        <li>Technical Requirements</li>
                                        <li>Stage and Fabrication Requirements</li>
                                        <li>Backstage Management</li>
                                        <li>Tents/Electrical Lightning Logistics</li>
                                        <li>Coordination for the Set-up and Technical Requirements of Concessionaries</li>
                                        <li>Coordination for Securing Mayor's Permit, PRA, and CBP</li>
                                        <li>Procurement of Special Event Permits</li>
                                    </ul>
                                    <b>3.) Activations Advertising - Event Security, On-ground Manpower and Logistics</b>
                                    <p>Activations Advertising Inc. was given the task of planning, organizing and implementing the security and emergency measures for the event. </p>
                                    <ul style="margin-left: 50px;">
                                        <li>Planning and Implementation of event security and emergency procedures</li>
                                        <li>Security and On-ground Manpower</li>
                                        <li>Emergency Medical Team and Ambulances</li>
                                        <li>Coordination with PNP</li>
                                        <li>Coordination with Hospitals</li>
                                        <li>Coordination with Licensed Ticket outlet</li>
                                        <li>RFID Venue Entry System (by POUCH)</li>
                                    </ul>
                                    <b>4.) SM Mall of Asia - Venue Owner, Security</b>
                                    <p>The venue was provided by SM Mall of Asia at their concert grounds. The venue is a popular location for big concert events similar to CloseUp Forever Summer.</p>
                                    <ul style="margin-left: 50px;">
                                        <li>Venue</li>
                                        <li>Additional Security</li>
                                    </ul>
                                    <h4><b>Government</b></h4>
                                    <b>1.) PNP Pasay / Southern Police District (Police)</b>
                                    <p>The Police was asked to support and participate in the planning and implementation of the event by providing expert assistance in regard to security planning and identifying potential dangers and hazards in events of this type. They were also requested to provide police assistance outside and inside the venue during the event for increase police presence.</p>
                                    <ul style="margin-left: 50px;">
                                        <li>Planning and Implementation Support</li>
                                        <li>Police Presence</li>
                                        <li>Law Enforcement</li>
                                    </ul>
                                    <b>2.) City of Pasay</b>
                                    <ul style="margin-left: 50px;">
                                        <li>Permit Issuance</li>
                                        <li>Venue Inspection Team</li>
                                    </ul>
                                    <b>3.) Bureau of Fire Protection</b>
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
                                    <h3 style="text-align: center;"><strong>PRE-EVENT PLANNING</strong></h3>
                                    <p>Months and weeks before the event, CloseUp/Unilever and its joint suppliers and partners (Eventscape and Activations Advertising) formulated and finalized the event logistics, procedures and security measures in implementing the 4th annual running of CloseUp Forever summer music festival.</p>
                                    <br/>
                                    <h4><b>Standards Followed</b></h4>
                                    <ul class="mar15">
                                        <li>
                                            Security Personnel Requirements
                                            <ul class="mar30">
                                                <li>The security plan was based on the US events standard of security-to-guest ratio of 1:50, i.e. 1 security personnel for every 50 audience members.</li>
                                                <br>
                                                <table class="twidth" border="1px">
                                                    <tr>
                                                        <th style="text-align: center;">Particulars</th>
                                                        <th style="text-align: center;">Planned No.</th>
                                                        <th style="text-align: center;">Actual Deployed</th>
                                                    </tr>
                                                    <tr align="left">
                                                        <td align="center">On-ground Safety Commander and Security Commander</td>
                                                        <td align="center">1</td>
                                                        <td align="center">1</td>
                                                    </tr>
                                                    <tr align="left">
                                                        <td align="center">Assistant to the Safety Commanders</td>
                                                        <td align="center">3</td>
                                                        <td align="center">4</td>
                                                    </tr>
                                                    <tr align="left">
                                                        <td align="center">Head PNP</td>
                                                        <td align="center">1</td>
                                                        <td align="center">1</td>
                                                    </tr>
                                                    <tr align="left">
                                                        <td align="center"><a href="http://localhost/cloudwalk-acti/pdf/List_of_PNP.pdf" target="_blank">PNP</a></td>
                                                        <td align="center">100</td>
                                                        <td align="center">104</td>
                                                    </tr>
                                                    <tr align="left">
                                                        <td align="center">Intel Group</td>
                                                        <td align="center">---</td>
                                                        <td align="center">8</td>
                                                    </tr>
                                                    <tr align="left">
                                                        <td align="center">SM Mall of Asia Security</td>
                                                        <td align="center">100</td>
                                                        <td align="center">100</td>
                                                    </tr>
                                                    <tr align="left">
                                                        <td align="center">Head Security</td>
                                                        <td align="center">1</td>
                                                        <td align="center">1</td>
                                                    </tr>
                                                    <tr align="left">
                                                        <td align="center">Bouncers Team Leaders</td>
                                                        <td align="center">15</td>
                                                        <td align="center">15</td>
                                                    </tr>
                                                    <tr align="left">
                                                        <td align="center">Bouncers</td>
                                                        <td align="center">235</td>
                                                        <td align="center">235</td>
                                                    </tr>
                                                    <tr align="left">
                                                        <td align="center">Bouncer's Team Leader</td>
                                                        <td align="center">15</td>
                                                        <td align="center">15</td>
                                                    </tr>
                                                    <tr align="left">
                                                        <td align="center">Red Knights Security (for SVIP)</td>
                                                        <td align="center">16</td>
                                                        <td align="center">16</td>
                                                    </tr>
                                                    <tr align="left">
                                                        <td align="center">k-9 Units</td>
                                                        <td align="center">6</td>
                                                        <td align="center">6</td>
                                                    </tr>
                                                    <tr align="left">
                                                        <td align="center">Total</td>
                                                        <td align="center"><b>472</b></td>
                                                        <td align="center"><b>485</b></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3"><br></td>
                                                    </tr>
                                                    <tr align="left">
                                                        <th> </th>
                                                        <th style="text-align: center;">Planned</th>
                                                        <th style="text-align: center;">Actual</th>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">Attendees</td>
                                                        <td>15000</td>
                                                        <td>12312</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">Ratio</td>
                                                        <td>1:30</td>
                                                        <td>1:25</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3"><b>U.S. Industry Standard Ratio 1:50</b></td>
                                                    </tr>
                                                </table>
                                                <br>
                                                <br>
                                                <li>
                                                    On-ground Security Personnel
                                                    <ul class="mar30">
                                                        <li>
                                                            <p>Security was to be provided by teams comprised of bouncers, on-ground personnel and the police. These units were to be deployed inside and outside the venue including critical locations like entrances and exits and other entry points between different sections of the venue.</p>
                                                            <p>On-ground Security Personnel were provided by Delirium and Red Knights. These are all bouncers with years of experience in handling large - scale live events.</p>
                                                            <p>Security Objectives:</p>
                                                            <ul class="mar30">
                                                                <li>Deter and stop violence or unruly behavior</li>
                                                                <li>Prevent or minimize physical injuries</li>
                                                                <li>Prevent damage to property</li>
                                                                <li>Deter or stop theft and other petty crimes</li>
                                                                <li>Confiscate prohibited items from entering the venue (weapons, drugs, cameras etc.)</li>
                                                                <li>Prevent other threats like terrorist actions</li>
                                                            </ul>
                                                        </li>
                                                    </ul>

                                                </li>
                                                <br>
                                                <li>
                                                    On-ground Manpower
                                                    <ul class="mar30">
                                                        <li>
                                                            <p>A separate group of on-ground manpower were deployed to operate key sections of the venue. These include manning entrances, guest assistance, utility, logistics, etc.</p>
                                                            <br>
                                                            <table style="border: 1px solid #000;width: 100%;text-align: center;">
                                                                <tr>
                                                                    <td style="border: 1px solid #000;"><b>Particulars</b></td>
                                                                    <td style="border: 1px solid #000;"><b>Actual Deployed</b></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="border: 1px solid #000;">Project Managers</td>
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
                                                                <tr>
                                                                    <td style="border: 1px solid #000;"><b>Total</b></td>
                                                                    <td style="border: 1px solid #000;"><b>280</b></td>
                                                                </tr>
                                                            </table>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <br>
                                                <li>
                                                    Pasay City Event Inspection Team
                                                    <ul class="mar30">
                                                        <li>
                                                            <p>During the event the Pasay City Local Government also deployed a 20-man event inspection team to verify compliance with the city's laws and ordinances particularly with regard to safety, lewd behavior, and drugs.</p>

                                                            <table class="twidth" border="1px" style="padding: 5px;">
                                                                <tr>
                                                                    <th style="text-align: center;">Particulars</th>
                                                                    <th style="text-align: center;">Actual Deployed</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>Pasay City Event Inspection Team</td>
                                                                    <td>20</td>
                                                                </tr>
                                                            </table>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>

                                        </li>
                                    </ul>

                                    <br>
                                    <ul class="mar15">
                                        <li>
                                            Medical Personnel Requirements
                                            <ul class="mar30">
                                                <li>The organizers also followed the <a href="<?=base_url('img/medical/Medical_Resource_Planner.JPG')?>" target="_blank">Government of Western Australia-Department of Health: Guidelines for Concerts, Events, and Organized Gatherings</a> standard of the number of emergency medical professionals and teams to be used for events of this type and size. </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <br>
                                    <h4><b>Planning and Production Meetings</b></h4>
                                    <p>CloseUp and its main suppliers Activations Advertising and Eventscape conducted three separate pre-production meetings with suppliers, partners and government organizations to refine and finalize the security measures that would be put in place during the event.</p>
                                    <br>
                                    <h4><b>Pre-production and security meetings</b></h4>
                                    <table style="border: 1px solid #000;width: 100%;text-align: center;">
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
                                    <br>
                                    <h4><b>1st Briefing Day - May 12, 2016</b></h4>
                                    <div class="img-holder">
                                        <img id="large" src="<?php echo base_url() ?>img/1stbriefing/Picture1.jpg" style="width:100%;height: 380px;" />
                                        <table style="width: 100%;margin-bottom: 20px;">
                                            <tr>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/1stbriefing/Picture2.jpg" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/1stbriefing/Picture3.jpg" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/1stbriefing/Picture4.jpg" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                            </tr>
                                        </table>
                                    </div><br/>
                                    <h4><b>2nd Briefing Day - May 18, 2016</b></h4>
                                    <div class="img-holder">
                                        <img id="large" src="<?php echo base_url() ?>img/2ndbriefing/Picture9.jpg" style="width:100%;height: 380px;" />
                                        <table style="width: 100%;margin-bottom: 20px;">
                                            <tr>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/2ndbriefing/Picture9.jpg" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/2ndbriefing/Picture10.jpg" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/2ndbriefing/Picture11.jpg" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                            </tr>
                                        </table>
                                    </div><br/>
                                    <h4><b>3rd Briefing Day - May 19, 2016</b></h4>
                                    <div class="img-holder">
                                        <img id="large" src="<?php echo base_url() ?>img/3rdbriefing/Picture15.jpg" style="width:100%;height: 380px;" />
                                        <table style="width: 100%;margin-bottom: 20px;">
                                            <tr>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/3rdbriefing/Picture15.jpg" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/3rdbriefing/Picture16.jpg" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/3rdbriefing/Picture17.jpg" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <br>
                                    <br>
                                    <h2 class="twidth">VENUE SAFETY FEATURES, PROCEDURES AND ASSETS</h2>
                                    <h4><b>Venue Map</b></h4>
                                    <img class="twidth" src="<?=base_url('img/odds/1.jpg');?>">
                                    <br/><br/>
                                    <h4><b>Barricades and Restricted Entry Points</b></h4>
                                    <p>The venue was barricaded to prevent non-ticket holders from entering and to ensure all guests were directed to the entrance locations and go through strict entry and security procedures.</p>
                                    <p>Important sections of the venue were divided into different zones with varying levels of security and could only be entered by passing through security and inspection.</p>
                                    <br>
                                    <h4><b>Guest Information</b></h4>
                                    <p>The organizers also provided information to guests regarding the safety and security rules of the event including a list of prohibited items.</p>
                                    <br/>
                                    <h4><b>Prohibited Items Signages.</b></h4>
                                    <ul style="margin-left: 50px;">
                                        <li>
                                            <p>Large and visible signages at key areas like entrances inform concert goers the list of prohibited items inside the venue.</p>
                                            <img src="<?php echo base_url() ?>img/odds/2222.jpg" style="width: 100%;">
                                        </li>
                                    </ul>
                                    <br/>
                                    <h4><b>Security and Emergency Safety Videos</b></h4>
                                    <ul style="margin-left: 50px;">
                                        <li>
                                            <p>Videos were shown on screen during the event that informed concert goers to follow the event's security, safety and emergency rules.</p>
                                        </li>
                                    </ul>
                                    <video class="twidth" height="388" controls>
                                        <source src="<?=base_url('videos/Media1.mp4')?>" type="video/mp4">
                                    </video>
                                    <br/>
                                    <br/>
                                    <h4><b>Pouch RFID System</b></h4>
                                    <p>Pouch provided RFID tagging system using an RFID wristband that facilitated and recorded entrances and allowed wireless cash transactions between guests and concessionaires. This system also restricted minors from buying alcoholic drinks.</p>
                                    <br/>
                                    <h4><b>Entrance Procedures and Security</b></h4>
                                    <p>Before entering the venue, audience members had to pass several lines of security steps. </p>
                                    <ol type="1" class="mar30">
                                        <li>Barker Announcement</li>
                                        <li>Checking of Tickets & Frisking</li>
                                        <li>2<sup>nd</sup> Frisking</li>
                                        <li>Scanning of Tickets </li>
                                        <li>Tagging and Registration</li>
                                    </ol>
                                    <br/>
                                    <h4><b>CCTV</b></h4>
                                    <p>CCTV units were deployed to monitor the entire venue. All footages were viewed live in a central control room inside the venue.</p>
                                    <div class="img-holder">
                                        <img id="large" src="<?php echo base_url() ?>img/runsheet/sec_plot/5. CCTV Plotting.jpg" style="width:100%;height: 380px;" />
                                        <table style="width: 100%;">
                                            <tr>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/sec_plot/5. CCTV Plotting.jpg" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/cctv/BOH.JPG" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/cctv/VIP.JPG" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/cctv/IMG_0135.JPG" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/cctv/SVIP Entrance Left.JPG" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                            </tr>
                                            <tr>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/cctv/IMG_0216.JPG" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/cctv/IMG_0218.JPG" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/cctv/IMG_6435.JPG" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/cctv/SVIP Entrance Right.JPG" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/cctv/IMG_6802.JPG" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <br/>
                                    <h4><b>Central Control Room</b></h4>
                                    <p>A central control room monitored and directed all operations in the venue via communication with on-ground and security personnel on the basis of the CCTV live footages.</p>
                                    <img src="<?php echo base_url() ?>img/slides/controlsystem.jpg" style="width: 100%;">
                                    <br>
                                    <br/>
                                    <h4><b>Nearby Hospitals Link-up</b></h4>
                                    <p>Several days before the event, the organizers coordinated with 4 hospitals that were nearest to the venue. </p>
                                    <table style="border: 1px solid #000;width: 100%;text-align: center;">
                                        <tr>
                                            <td style="border: 1px solid #000;"><b>Hospitals</b></td>
                                            <td style="border: 1px solid #000;">PDF</td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid #000;">San Juan De Dios </td>
                                            <td style="border: 1px solid #000;"><a href="<?=base_url('pdf/San_Juan_de_Dios.pdf')?>" target="_blank">Read more</a></td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid #000;">Adventist Medical </td>
                                            <td style="border: 1px solid #000;"><a href="<?=base_url('pdf/Adventist_Medical_Center_Manila.pdf')?>" target="_blank">Read more</a></td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid #000;">Pasay General Hospital</td>
                                            <td style="border: 1px solid #000;"><a href="<?=base_url('pdf/Pasay_City_General_Hospital.pdf')?>" target="_blank">Read more</a></td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid #000;">Manila Doctors</td>
                                            <td style="border: 1px solid #000;"><a href="<?=base_url('pdf/Manila_Doctors.pdf')?>" target="_blank">Read more</a></td>
                                        </tr>
                                    </table>
                                    <br>
                                    <h4><b>Emergency and Evacuation Protocol</b></h4>
                                    <p>Organizers devised plans for immediate evacuation and assistance to all audience members and staff inside the venue in case of a major emergency including: earthquake, fire, flood, or terrorist incidents.</p>
                                    <img src="<?php echo base_url() ?>img/evacuation plan.jpg" style="width:100%;height: 380px;" />
                                    <br>
                                    <br>
                                    <h4><b>Emergency Medical Teams and Medical Stations</b></h4>
                                    <br>
                                    <p>A number of medical first aid stations were installed offering immediate first aid attention. A larger ambulatory tent (field hospital) was also provided for medical treatment in serious cases.</p>
                                    <div class="img-holder">
                                        <img id="large" src="<?php echo base_url() ?>img/slides/medical_highlight.jpg" style="width:100%;height: 380px;" />
                                        <table style="width: 100%;margin-bottom: 20px;">
                                            <tr>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/slides/medical_highlight.jpg" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/first_aid_tent/1. Medical-First Aid Tent.jpg" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/first_aid_tent/Ambulance.png" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/first_aid_tent/Medical Personnel.jpg" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/first_aid_tent/Picture 2.jpg" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                            </tr>
                                            <tr>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/first_aid_tent/Picture 3.jpg" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/first_aid_tent/Picture 4.jpg" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/first_aid_tent/Picture 5.jpg" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/first_aid_tent/Picture 6.jpg" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/first_aid_tent/Picture 7.jpg" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <table style="border: 1px solid #000;width: 100%;text-align: center;margin-top: 27px;">
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
                                    <br/>
                                    <p>Emergency Medical Teams were deployed throughout the venue ready to quickly provide medical assistance to audience members when needed.</p>
                                    <img src="<?php echo base_url() ?>img/slides/ambulance.JPG" style="width:100%;" />
                                    <table style="border: 1px solid #000;width: 100%;text-align: center;margin-top: 20px;">
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
                                            <td style="border: 1px solid #000;">30 EMTs /Nurses</td>
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
                                    <br/>
                                    <h4><b>CLOSEUP FOREVER SUMMER 2016 RUNSHEET</b></h4>
                                    <br/>
                                    <table class="runsheet">
                                        <tr>
                                            <td class="head">Date</td>
                                            <td class="head">Time</td>
                                            <td class="head">Activity</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="31" class="row1">May 21, 2016</td>
                                            <td class="row1">6:30 am</td>
                                            <td class="row1">Call time of Manpower @ Quirino 2B Basketball Court</td>
                                        </tr>
                                        <tr>
                                            <td class="row2">8:30 am</td>
                                            <td class="row2">Call time of Core Group</td>
                                        </tr>
                                        <tr>
                                            <td class="row1"></td>
                                            <td class="row1">Distributon of Breakfast Meal</td>
                                        </tr>
                                        <tr>
                                            <td class="row2">9:30 am to 10:00 am</td>
                                            <td class="row2">On-site rebriefing of Core + TLs</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2" class="row1">10:00 am to 10:30 am</td>
                                            <td class="row1">Distribution of AAI Wirst Tags, IDs and Uniform of On-ground Team</td>
                                        </tr>
                                        <tr>
                                            <td class="row1">Distribution of Pouch Devices to AAI</td>
                                        </tr>
                                        <tr>
                                            <td class="row2">10:00 am</td>
                                            <td class="row2">Start distribution of IDs to Unilever, partner agencies and concessionaires</td>
                                        </tr>
                                        <tr>
                                            <td class="row1">10:30 am to 11:30 am</td>
                                            <td class="row1">On-site simulation of on-ground manpower team</td>
                                        </tr>
                                        <tr>
                                            <td class="row2">11:00 am</td>
                                            <td class="row2">Call time of Bouncers</td>
                                        </tr>
                                        <tr>
                                            <td class="row1">11:15 am</td>
                                            <td class="row1">Assembly of Security/Bouncers</td>
                                        </tr>
                                        <tr>
                                            <td class="row2">11:30 am</td>
                                            <td class="row2">Security Briefing on-site</td>
                                        </tr>
                                        <tr>
                                            <td class="row1">12:00 nn</td>
                                            <td class="row1">SM Tickets Set-up (24 Laptops & Scanners) / WIFI Connection</td>
                                        </tr>
                                        <tr>
                                            <td class="row2">12:15 pm</td>
                                            <td class="row2">Rebriefing with Unilever Brand Team</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2" class="row1">12:30 pm</td>
                                            <td class="row1">Distribution of wrist tags + IDs to Bouncers (per area)</td>
                                        </tr>
                                        <tr>
                                            <td class="row1">Distribution of Lunch Meals</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2" class="row2">1:30 pm</td>
                                            <td class="row2">Clearing of Venue/ Prep for Security Sweep</td>
                                        </tr>
                                        <tr>
                                            <td class="row2">All manpower should wear their uniform</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="2" class="row1">2:00 pm</td>
                                            <td class="row1">Start of Security Sweep Proper</td>
                                        </tr>
                                        <tr>
                                            <td class="row1">Distribution of Remaining event IDs</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="3" class="row2">2:30 pm</td>
                                            <td class="row2">Distribution of Pouch Devices to Concessionaires</td>
                                        </tr>
                                        <tr>
                                            <td class="row2">Distribution of Communicators</td>
                                        </tr>
                                        <tr>
                                            <td class="row2">All manpower on standby to designated areas</td>
                                        </tr>
                                        <tr>
                                            <td class="row1">4:00 pm</td>
                                            <td class="row1">Gates Open</td>
                                        </tr>
                                        <tr>
                                            <td class="row2">6:00 pm</td>
                                            <td class="row2">Distribution of Dinner </td>
                                        </tr>
                                        <tr>
                                            <td class="row1">12:00 mn</td>
                                            <td class="row1">Distribution of Midnight Meal</td>
                                        </tr>
                                        <tr>
                                            <td class="row2">2:30 am</td>
                                            <td class="row2">End of Show</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="4" class="row1">3:00 am</td>
                                            <td class="row1">Retrieval of all Pouch Devices (On-ground team + Concessionaires)</td>
                                        </tr>
                                        <tr>
                                            <td class="row1">Retrieval of all Communicators</td>
                                        </tr>
                                        <tr>
                                            <td class="row1">Retrieval of all materials and equipments</td>
                                        </tr>
                                        <tr>
                                            <td class="row1">Inventory of Sales</td>
                                        </tr>
                                        <tr>
                                            <td class="row2">4:00 am</td>
                                            <td class="row2">GO HOME AND SLEEP!!!</td>
                                        </tr>
                                    </table>
                                    <br>
                                    <h4 style="margin-bottom: 0px;"><b>Manpower Rebriefing</b></h4>
                                    <p>9:30 am to 10:00 am</p><br/>
                                    <div class="img-holder">
                                        <img id="large" src="<?php echo base_url() ?>img/runsheet/manpower/6c1a237e48820985ab7acfe00b43ed0eb7e57c3e2b7ee135d79ea5cf44ec4d2d_full.jpg" style="width:100%;height: 380px;" />
                                        <table style="width: 100%;margin-bottom: 20px;">
                                            <tr>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/manpower/6c1a237e48820985ab7acfe00b43ed0eb7e57c3e2b7ee135d79ea5cf44ec4d2d_full.jpg" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/manpower/IMG_0105.JPG" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/manpower/IMG_0115.JPG" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <br/>
                                    <h4 style="margin-bottom: 0px;"><b>Distribution of AAI Wirst Tags, IDs, Uniform and Pouch Devices to AAI</b></h4>
                                    <p>10:00 am to 10:30 am</p><br/>
                                    <div class="img-holder">
                                        <img id="large" src="<?php echo base_url() ?>img/runsheet/distribution/IMG_0264.JPG" style="width:100%;height: 380px;" />
                                        <table style="width: 100%;margin-bottom: 20px;">
                                            <tr>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/distribution/IMG_0264.JPG" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/distribution/IMG_0295.JPG" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/distribution/IMG_0296.JPG" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                            </tr>
                                            <tr>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/distribution/IMG_0495.JPG" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/distribution/IMG_6907.JPG" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/distribution/IMG_6964.JPG" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                            </tr>
                                        </table>
                                    </div><br/>
                                    <h4 style="margin-bottom: 0px;"><b>On-ground Manpower Simulation</b></h4>
                                    <p>10:30 am to 11:30 am</p><br/>
                                    <div class="img-holder">
                                        <img id="large" src="<?php echo base_url() ?>img/runsheet/simulation/IMG_0221.JPG" style="width:100%;height: 380px;" />
                                        <table style="width: 100%;margin-bottom: 20px;">
                                            <tr>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/simulation/IMG_0221.JPG" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/simulation/IMG_0314.JPG" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/simulation/Picture1.jpg" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/simulation/Picture2.jpg" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/simulation/Picture3.jpg" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                            </tr>
                                        </table>
                                    </div><br/>
                                    <h4 style="margin-bottom: 0px;"><b>Security Briefing</b></h4>
                                    <p>11:30 am</p><br/>
                                    <div class="img-holder">
                                        <img id="large" src="<?php echo base_url() ?>img/runsheet/sec_brief/Picture1.jpg" style="width:100%;height: 380px;" />
                                        <table style="width: 100%;margin-bottom: 20px;">
                                            <tr>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/sec_brief/Picture1.jpg" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/sec_brief/1f84550abc7a952246f710114a404edf7dc45c79d0b79e1ab78b835cf6b17528_full.jpg" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/sec_brief/13275216_1271713416190974_482153606_o.jpg" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/sec_brief/IMG_0283.JPG" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                            </tr>
                                            <tr>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/sec_brief/IMG_0317.JPG" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/sec_brief/IMG_6922.JPG" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/sec_brief/IMG_6930.JPG" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/sec_brief/IMG_6931.JPG" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                            </tr>
                                        </table>
                                    </div><br/>
                                    <h4 style="margin-bottom: 0px;"><b>Security Sweep</b></h4>
                                    <p>2:00 pm</p><br/>
                                    <div class="img-holder">
                                        <img id="large" src="<?php echo base_url() ?>img/runsheet/sec_sweep/IMG_0379.JPG" style="width:100%;height: 380px;" />
                                        <table style="width: 100%;margin-bottom: 20px;">
                                            <tr>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/sec_sweep/IMG_0379.JPG" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/sec_sweep/IMG_0381.JPG" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/sec_sweep/IMG_0384.JPG" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/sec_sweep/IMG_0386.JPG" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/sec_sweep/IMG_0388.JPG" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                            </tr>
                                            <tr>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/sec_sweep/IMG_0391.JPG" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/sec_sweep/IMG_0411.JPG" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/sec_sweep/IMG_0418.JPG" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/sec_sweep/IMG_0429.JPG" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/sec_sweep/IMG_0458.JPG" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                            </tr>
                                        </table>
                                    </div><br/>
                                    <h4 style="margin-bottom: 0px;"><b>Security Plotting</b></h4><br/>
                                    <ul style="margin-left: 50px;">
                                        <li>
                                            <p>Security Placement of Bouncers</p>
                                            <div class="img-holder">
                                                <img id="large" src="<?php echo base_url() ?>img/runsheet/sec_plot/3. Security Bouncers.jpg" style="width:100%;height: 380px;" />
                                                <table style="width: 100%;margin-bottom: 20px;">
                                                    <tr>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/sec_plot/3. Security Bouncers.jpg" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/sec_plot/3. SVIP Plotting.jpg" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/sec_plot/4. BOH Security Plotting.gif" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/sec_plot/3. Picture 15.jpg" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/sec_plot/3. Picture 14.png" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/sec_plot/3. Picture 13.jpg" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/sec_plot/3. Picture 12.jpg" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/sec_plot/3. Picture 11.jpg" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/sec_plot/3. Picture 10.jpg" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/sec_plot/3. Picture 9.jpg" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/sec_plot/3. Picture 8.jpg" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/sec_plot/3. Picture 7.png" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/sec_plot/3. Picture 6.jpg" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/sec_plot/3. Picture 5.jpg" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/sec_plot/3. Picture 4.jpg" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/sec_plot/3. Picture 3.jpg" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/sec_plot/3. Picture 2.jpg" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/sec_plot/3. Picture 1.jpg" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/sec_plot/3. Event Proper Picture 2.jpg" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/sec_plot/3. Event Proper Picture 1.jpg" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </li>
                                        <li>
                                            <p>Security Placement of PNP</p>
                                            <div class="img-holder">
                                                <img id="large" src="<?php echo base_url() ?>img/slides/pnp_highlight.jpg" style="width:100%;height: 380px;" />
                                                <table style="width: 100%;margin-bottom: 20px;">
                                                    <tr>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/slides/pnp_highlight.jpg" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/sec_plot/PNP/1. PNP Plotting.jpg" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/sec_plot/PNP/Intel plotting.jpg" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/sec_plot/PNP/2. Picture 1.png" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/sec_plot/PNP/2. Picture 7.png" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/pnp/Picture25.png" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/sec_plot/PNP/2. Picture 3.png" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/sec_plot/PNP/2. Picture 4.png" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/sec_plot/PNP/2. Picture 5.png" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/runsheet/sec_plot/PNP/2. Picture 6.png" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/pnp/Picture1.png" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/pnp/Picture2.png" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/pnp/Picture3.png" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/pnp/Picture4.png" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/pnp/Picture6.png" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
<!--                                                        <td><img class="img-thumb" src="--><?php //echo base_url() ?><!--img/pnp/Picture5.png" style="width:100%;border: 5px solid #000;height: 100px;" /></td>-->
                                                    </tr>
                                                    <tr>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/pnp/Picture7.png" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/pnp/Picture8.png" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/pnp/Picture9.png" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/pnp/Picture10.png" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/pnp/Picture11.png" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/pnp/Picture12.png" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/pnp/Picture13.png" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/pnp/Picture14.png" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/pnp/Picture15.png" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/pnp/Picture16.png" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/pnp/Picture17.png" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/pnp/Picture18.png" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/pnp/Picture19.png" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/pnp/Picture20.png" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/pnp/Picture21.png" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/pnp/Picture22.png" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/pnp/Picture23.png" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                        <td><img class="img-thumb" src="<?php echo base_url() ?>img/pnp/Picture24.png" style="width:100%;border: 5px solid #000;height: 100px;" /></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </li>
                                    </ul>
                                    <h1 class="twidth">IMPORTANT INCIDENTS</h1><br/>
                                    <h4><b>Fatalities Attended to by Organizers</b></h4>
                                    <br/>
                                    <p>During the event, three audience members were given quick medical aid due to illness. These individuals were then immediately transported to the nearest hospitals to be given further medical attention.</p>
                                    <table class="twidth" border="1px">
                                        <tr>
                                            <th style="text-align: center;">Name of Individual</th>
                                            <th style="text-align: center;">Hospital</th>
                                        </tr>
                                        <tr>
                                            <td>Ariel Leal 22 yrs old</td>
                                            <td>San Juan de Dios</td>
                                        </tr>
                                        <tr>
                                            <td>Bianca Fontejon 19 yrs old</td>
                                            <td>Manila Doctors</td>
                                        </tr>
                                        <tr>
                                            <td>Eric Anthony Miller 36 yrs old</td>
                                            <td>Manila Doctors</td>
                                        </tr>
                                    </table><br/>
                                    <h4><b>Other Fatalities</b></h4><br/>
                                    <p>Two other individuals who attended the event were found outside the venue and brought to hospitals. Information on the circumstances surrounding their deaths are unknown because they were not brought to the hospital by the organizers.</p>

                                    <br>
                                    <br>
                                    <table style="border: 1px solid #000;width: 100%;text-align: center;">
                                        <tr>
                                            <td style="border: 1px solid #000;"><b>Name of Individual</b></td>
                                            <td style="border: 1px solid #000;"><b>Notes</b></td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid #000;">Lance Garcia 36 yrs old</td>
                                            <td style="border: 1px solid #000;">Found outside the venue by SM Mall security (not related to the event)  near a parking facility and brought to hospital.</td>
                                        </tr>
                                        <tr>
                                            <td style="border: 1px solid #000;">Ken Miyagawa 18 yrs old</td>
                                            <td style="border: 1px solid #000;">Brought to the hospital by acquaintances. Whether individual was brought directly from the event venue or another location to the hospital is unknown.</td>
                                        </tr>
                                    </table>
                                    <br/>
                                    <p>Click <a target="_blank" href="https://drive.google.com/folderview?id=0B5goOu25aJnQMmUtS0ZRTExGVjg&usp=drive_web">here</a> for reference video.</p>
                                    <h4 style="margin-top: 20px"><b>Recap</b></h4>
                                    <br/>
                                    <p>Based on the planning and implementation figures, the organizers followed industry- standard safety & security procedures in organizing major live events involving large number of audiences. During implementation, the organizers exceeded the required number of security and medical personnel based on US and Government of Western Australia-Department of Health: Guidelines for Concerts, Events, and Organized Gatherings standards. The entry procedures and protocols followed and implemented this year were more stringent than, and actually exceeded, those implemented in similar events in the past.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End PAGE 3-->
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
    $('.img-thumb').on('click',function(){
        var imgsrc = $(this).attr('src');
        $(this).parents('.img-holder').find('#large').attr('src',imgsrc);
    });
</script>

</body>
</html>
