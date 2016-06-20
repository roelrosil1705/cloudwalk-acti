<!DOCTYPE html>
<html>
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
<div id="wrapper" style="border:solid px green;">
    <div class="">
        <div class="well well-md well-sm" style="background:transparent;border:none;">
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background:transparent;border:none;">
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

                    <div class="row" style="border:solid px red;margin-top:150px;">
                        <div class="col-md-12 col-sm-4">
                            <img src="<?php echo base_url(); ?>images/news-title.png" style="max-width: 431px;display: block;margin: 0 auto;">
                        </div>
                    </div>
                    <!--Start PAGE -->
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
                    <!--End PAGE -->
                    <!--Start PAGE -->
                    <div class="row col-md-10 col-md-offset-1 aai-news-bshadow" style="min-height: 800px;">
                        <div class="col-md-12" style="border-bottom:solid px gray;padding: 70px 15px;text-align: justify;">
                            <div class="container" style="font-weight: 100;font-family: sans-serif;">
                                <!--Start CONTENT -->
                                <b>3 SM Mall of Asia</b>
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
                                <!--End CONTENT -->
                            </div>
                        </div>
                    </div>
                    <!--End PAGE -->
                    <!--Start PAGE -->
                    <div class="row col-md-10 col-md-offset-1 aai-news-bshadow" style="min-height: 800px;margin-bottom: 60px;">
                        <div class="col-md-12" style="border-bottom:solid px gray;padding: 70px 15px;text-align: justify;">
                            <div class="container" style="font-weight: 100;font-family: sans-serif;">
                                <!--Start CONTENT -->
                                <h2 class="twidth">5 VENUE SAFETY FEATURES, PROCEDURES AND ASSETS</h2>
                                <h3><i>Venue Map</i></h3>
                                <img class="twidth" src="<?=base_url('img/odds/1.jpg');?>">
                                <h3><i>Barricades and Restricted Entry Points</i></h3>
                                <p>The venue was barricaded to prevent non-ticket holders from entering and to ensure all guests were directed to the entrance locations and go through the thorough entry and security procedures.</p>
                                <p>Important sections of the venue were divided into different zones with varying levels of security and can only be entered by passing through security and inspection.</p>
                                <h3><i>Guest Information </i></h3>
                                <!--End CONTENT -->
                            </div>
                        </div>
                    </div>
                    <!--End PAGE -->
                    <!--Start PAGE -->
                    <div class="row col-md-10 col-md-offset-1 aai-news-bshadow" style="min-height: 800px;margin-bottom: 60px;">
                        <div class="col-md-12" style="border-bottom:solid px gray;padding: 70px 15px;text-align: justify;">
                            <div class="container" style="font-weight: 100;font-family: sans-serif;">
                                <!--Start CONTENT -->
                                <h3><i>7 Pouch RFID System</i></h3>
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
                                <!--End CONTENT -->
                            </div>
                        </div>
                    </div>
                    <!--End PAGE -->
                    <!--Start PAGE -->
                    <div class="row col-md-10 col-md-offset-1 aai-news-bshadow" style="min-height: 800px;margin-bottom: 60px;">
                        <div class="col-md-12" style="padding: 70px 15px;text-align: justify;">
                            <div class="container" style="font-weight: 100;font-family: sans-serif;">
                                <!--Start CONTENT -->
                                <h2 class="twidth">9 NUMBER OF PERSONNEL DEPLOYED FOR THE EVENT</h2>
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
                                <!--End CONTENT -->
                            </div>
                        </div>
                    </div>
                    <!--End PAGE -->
                    <!--Start PAGE -->
                    <div class="row col-md-10 col-md-offset-1 aai-news-bshadow" style="min-height: 800px;margin-bottom: 60px;">
                        <div class="col-md-12" style="padding: 70px 15px;text-align: justify;">
                            <div class="container" style="font-weight: 100;font-family: sans-serif;">
                                <!--Start CONTENT -->11
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

</script>

</body>
</html>
