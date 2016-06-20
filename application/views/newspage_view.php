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
<body style="background-image:url('img/bg-workwithus.png');">
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
            <div id="news-aai" style="min-height: 100%;" class="aai-background news-para section-aai">
                <div id="news-sec" class="container" style="border:solid px red;margin-top:0px;">

                    <div class="row" style="border:solid px red;margin-top:150px;">
                        <div class="col-md-4 col-md-offset-2 col-sm-4">
                            <!--<p class="news_title">news</p>-->
                            <img src="<?php echo base_url(); ?>images/news-title.png">
                        </div>
                    </div>
                    <!--
                        <div class="row aai-news-bshadow" style="">
                            <div class="container pull-left" style="margin-top: 8px;">

                                <div class="col-md-1">
                                    <a href="#"><img src="img/twitter.png"></a>
                                </div>

                                <div class="col-md-12">
                                    <p><span><b>Activation Advertising</b></span> uploaded a new photo in the album <b>Rexona Run</b></p>
                                </div>
                            </div>
                        </div>
                    -->
                    <!--
                        <div class="row aai-news-bshadow">
                            <div class="container pull-left" style="margin-top: 8px;">

                                <div class="col-md-1">
                                    <a href="https://www.facebook.com/activationsadvertisinginc" target="_blank"><img src="img/fb.png"></a>
                                </div>

                                <div class="col-md-12">
                                    <p><span><b>Activation Advertising</b></span> uploaded a new photo in the album <b>Rexona Run</b></p>
                                </div>
                            </div>
                        </div>
                    -->
                    <div class="row aai-news-bshadow">
                        <div class="col-md-12" style="border-bottom:solid px gray;padding: 15px;">
                            <div class="container">
                                <p><span><strong>Activations brings excitement at every turn with the launch of the Samsung Gear S2 and Samsung Galaxy Studio.</strong></span></p>
                                <p>Hundreds of media and influencers from the tech scene flocked to the SM Mall of Asia where, for the first time ever, a big event was held at the iconic Globe Rotunda in front of the Mall.
                                    Activations Advertising played a leading role in creating one of the biggest tech launches ever in the country with the arrival of Samsung's latest smartwatch, the Gear S2. We converted the MOA globe into the biggest smartwatch ever in a live interactive display to celebrate the product's launch.
                                    The night also saw the opening of the Samsung Galaxy Studio at the SM MOA Cyberzone as it makes its exclusive stop here in the Philippines on its worldwide tour. The booth activation featured exciting experience zones headline by Samsung's latest line of smartphones with the Gear S2 taking center stage.
                                    Check out the Samsung Galaxy Studio at the SM Mall of Asia Cyberzone from November 27 to December 5, 2015.
                                    #GalaxyStudioPH #GearsS2</p>
                            </div>
                            <div class="container">
                                <p><span><strong>Powering-up 1 MILLION Future-ready teen AGAIN!!!</strong></span></p>
                                <p>#TeenWeekPH 2015 has just wrapped-up it's nationwide celebrations of all things teens. We visited more than 200 high-schools throughout the Philippines where we enjoyed, celebrated and shared wonderful experiences with more than 1 million students.
                                    The 1-week celebrations aimed to educate Filipino teens about the important topics that are essential to a their personal development like personal care, hygiene, self-esteem. ambitions and future careers, which were made more fun and exciting with the help of Creamsilk, Rexona and Pond's.
                                    From enlightening TED-talk forums, fun games, and shareable photo moments, students took-in important learnings while still having a good time all week long.
                                    The celebrations concluded with the first-ever TeenWeek Fair headlined by a talent showcase featuring outstanding live performances from the students themselves. Our favorite Unilever brand ambassadors and celebrities like were also there to share the celebrations with our students.
                                    In it's 3rd year of running, #TeenWeekPH has added 1 million more young teens who are future-ready to take on the world.
                                    See you all next year!</p>
                            </div>
                            <div class="container" style="border-bottom:solid px gray; margin-top: 10px;">
                                <p><span><strong>Activations Advertising Inc. breaks another world record.</strong></span></p>
                                <p>AAI has bagged another world record after it set the official Guinness World Record for the most number of people handwashing a single piece of fabric
                                    simultaneously for Breeze Detergent.
                                    Fighting through torrential rain and the massive logistics and planning nightmare of an official world record attempt, the agency successfully
                                    gathered more than 2,200 moms at the UMAK Track & Field who were able to successfully handwash a 1 Kilometer long piece of cloth all at the same time.
                                    The record-breaking attempt was the perfect showcase of Breeze's superiority over other detergent brands and it's a quality is now etched in the record books.
                                    This is also the agency's second successful record attempt after its Mentos Geyser record which was set in 2010 <!--<a href="#" class="aai-news-link"><strong>Read More...</strong></a>--></p>
                            </div>
                            <!--<hr class="featurette-divider">-->
                            <!--<div>&nbsp;</div>-->
                        </div>
                        <!--<div>&nbsp;</div>-->
                        <!--
                        <div class="col-md-12" style="border-bottom:solid px gray;">
                            <div class="container" style="margin-top: 10px;">
                                <p><span><b>Activation Advertising Wins Special Award for Ambient Media Advertising!</b></span></p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at scelerisque ipsum. Sed at tellus ut lectus
                                aliquam fermentum ut nec mauris. Nullam quis dolor ornare, lobortis orci et, ullamcorper metus. Aliquam dignissim
                                sed urna nec suscipit. Donec tincidunt, felis pharetra gravida commodo, nulla quam mattis sem, et dignissim augue enim a lacus. <a href="#" class="aai-news-link"><b>Read More...</b></a></p>
                            </div>
                        </div>
                        -->
                    </div>
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
