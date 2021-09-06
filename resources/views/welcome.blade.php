<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Take My IT Class</title>
        <meta name="description" content="Take My IT Class, programming, exams ranging form assignment, online semester class, discussions, proctored exams, and programing quiz with our professional team.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="frontendIT/assets/images/fav-icon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="frontendIT/assets/images/fav-icon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="frontendIT/assets/images/fav-icon/favicon-16x16.png">
        <link rel="manifest" href="frontendIT/assets/images/fav-icon/site.webmanifest">
        <!-- bootstrap CSS -->
        <link rel="stylesheet" href="frontendIT/assets/css/bootstrap.min.css" type="text/css" media="all" />
        <!-- carousel CSS -->
        <link rel="stylesheet" href="frontendIT/assets/css/owl.carousel.min.css" type="text/css" media="all" />
        <!-- responsive CSS -->
        <link rel="stylesheet" href="frontendIT/assets/css/responsive.css" type="text/css" media="all" />
        <!-- nivo-slider CSS -->
        <link rel="stylesheet" href="frontendIT/assets/css/nivo-slider.css" type="text/css" media="all" />
        <!-- animate CSS -->
        <link rel="stylesheet" href="frontendIT/assets/css/animate.css" type="text/css" media="all" />
        <!-- animated-text CSS -->
        <link rel="stylesheet" href="frontendIT/assets/css/animated-text.css" type="text/css" media="all" />
        <!-- font-awesome CSS -->
        <link type="text/css" rel="stylesheet" href="frontendIT/assets/fonts/font-awesome/css/font-awesome.min.css">
        <!-- font-flaticon CSS -->
        <link rel="stylesheet" href="frontendIT/assets/css/flaticon.css" type="text/css" media="all" />
        <!-- theme-default CSS -->
        <link rel="stylesheet" href="frontendIT/assets/css/theme-default.css" type="text/css" media="all" />
        <!-- meanmenu CSS -->
        <link rel="stylesheet" href="frontendIT/assets/css/meanmenu.min.css" type="text/css" media="all" />
        <!-- Main Style CSS -->
        <link rel="stylesheet"  href="frontendIT/style.css" type="text/css" media="all" />
        <!-- transitions CSS -->
        <link rel="stylesheet" href="frontendIT/assets/css/owl.transitions.css" type="text/css" media="all" />
        <!-- venobox CSS -->
        <link rel="stylesheet" href="frontendIT/venobox/venobox.css" type="text/css" media="all" />
        <!-- widget CSS -->
        <link rel="stylesheet" href="frontendIT/assets/css/widget.css" type="text/css" media="all" />
        <!-- modernizr js -->
        <script type="text/javascript" src="frontendIT/assets/js/vendor/modernizr-3.5.0.min.js"></script>

    </head>
    </head>
    <body class="antialiased">

    <!--==================================================-->
    <!----- Start Techno Main Menu Area ----->
    <!--==================================================-->
    <div id="sticky-header" class="techno_nav_manu transparent_menu white d-md-none d-lg-block d-sm-none d-none">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo mt-4">
                        <a class="logo_img" href="{{route('home')}}" title="TakeMyITClass">
                            <img src="frontendIT/assets/images/fav-icon/logo.jpg" size="56x56" alt="" />
                        </a>
                        <a class="main_sticky" href="{{route('home')}}" title="TakeMyITClass">
                            <img src="frontendIT/assets/images/fav-icon/logo-white.jpg" alt="astute" />
                        </a>
                    </div>
                </div>
                <div class="col-md-9">
                    <nav class="techno_menu">
                        <ul class="nav_scroll">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><a href="{{route('home')}}#about">about</a></li>
                            <li><a href="{{route('home')}}#services">Service</a></li>
                            <li><a href="{{route('home')}}#how-it-works">How it Works</a></li>
                            <li><a href="{{route('home')}}#portfolio">Portfolio</a></li>
                            <li><a href="#contact.html">Contact</a></li>
                        </ul>
                        <div class="donate-btn-header">
                            <a class="dtbtn" href="#">Login</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!----- Techno Mobile Menu Area ----->
    <div class="mobile-menu-area d-sm-block d-md-block d-lg-none ">
        <div class="mobile-menu">
            <nav class="techno_menu">
                <ul class="nav_scroll">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('home')}}#about">about</a></li>
                    <li><a href="{{route('home')}}#services">Service</a></li>
                    <li><a href="{{route('home')}}#how-it-works">How it Works</a></li>
                    <li><a href="{{route('home')}}#portfolio">Portfolio</a></li>
                    <li><a href="#contact.html">Contact</a></li>
                    <li><a href="#contact.html">Login</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!--==================================================-->
    <!----- End Techno Main Menu Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Techno Slider Area ----->
    <!--==================================================-->
    <div class="slider_area d-flex align-items-center slider2 landing" id="home">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single_slider">
                        <div class="slider_content text-center">
                            <div class="slider_text">
                                <div class="slider_text_inner">
                                    <h1>Take My IT Class</h1>
                                    <h1>Exams,or Assignment For Me</h1>
                                </div>
                                <div class="slider_text_desc pt-4">
                                    <p>We are a Specialised Team to Help You With all your Online Course work Needs.
                                        We cover and handle  Online Courses, Exams, Proctored exams in Programming Projects, Essays,assignments, Thesis, and Research papers in the Field of Technology, Programming, and Coding.</p>
                                </div>
                                <div class="slider_button pt-5 d-flex">
                                    <div class="button">
                                        <a href="{{route('home')}}#how-it-works">How IT Work <i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro__bg">
            <canvas id="intro__canvas" data-colors='["#FBA500", "#FF3C00", "#fff"]'></canvas>
        </div>
    </div>
    <!--==================================================-->
    <!----- End Techno Slider Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Techno Flipbox Top Feature Area ----->
    <!--==================================================-->
    <div class="flipbox_area top_feature">
        <div class="container">
            <div class="row nagative_margin">
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-6">
                    <div class="techno_flipbox mb-30">
                        <div class="techno_flipbox_font">
                            <div class="techno_flipbox_inner">
                                <div class="techno_flipbox_icon">
                                    <div class="icon">
                                        <i class="flaticon-global-1"></i>
                                    </div>
                                </div>
                                <div class="flipbox_title">
                                    <h3>IT Online Courses</h3>
                                </div>
                            </div>
                        </div>
                        <div class="techno_flipbox_back">
                            <div class="techno_flipbox_inner">
                                <div class="flipbox_title">
                                    <h3>IT Online Courses</h3>
                                </div>
                                <div class="flipbox_desc">
                                    <p>We Handle IT related Online Courses. We guarantee to take care of your entire online IT course.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-6">
                    <div class="techno_flipbox mb-30">
                        <div class="techno_flipbox_font">
                            <div class="techno_flipbox_inner">
                                <div class="techno_flipbox_icon">
                                    <div class="icon">
                                        <i class="flaticon-data"></i>
                                    </div>
                                </div>
                                <div class="flipbox_title">
                                    <h3>Solution For Assignments and Quiz</h3>
                                </div>
                            </div>
                        </div>
                        <div class="techno_flipbox_back">
                            <div class="techno_flipbox_inner">
                                <div class="flipbox_title">
                                    <h3>Solution For Assignments and Quiz</h3>
                                </div>
                                <div class="flipbox_desc">
                                    <p>We will handle all your Assignment, quiz, and tests needs</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-6">
                    <div class="techno_flipbox mb-30">
                        <div class="techno_flipbox_font">
                            <div class="techno_flipbox_inner">
                                <div class="techno_flipbox_icon">
                                    <div class="icon">
                                        <i class="flaticon-interaction"></i>
                                    </div>
                                </div>
                                <div class="flipbox_title">
                                    <h3>Continuous Communication with Our Team</h3>
                                </div>
                            </div>
                        </div>
                        <div class="techno_flipbox_back">
                            <div class="techno_flipbox_inner">
                                <div class="flipbox_title">
                                    <h3>Continuous Communication with Our Team</h3>
                                </div>
                                <div class="flipbox_desc">
                                    <p>Provide explanations and a detailed approach in handling your Assignments and Quiz</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-6">
                    <div class="techno_flipbox mb-30">
                        <div class="techno_flipbox_font">
                            <div class="techno_flipbox_inner">
                                <div class="techno_flipbox_icon">
                                    <div class="icon">
                                        <i class="flaticon-developer"></i>
                                    </div>
                                </div>
                                <div class="flipbox_title">
                                    <h3>Best IT Experts in The Field </h3>
                                </div>
                            </div>
                        </div>
                        <div class="techno_flipbox_back">
                            <div class="techno_flipbox_inner">
                                <div class="flipbox_title">
                                    <h3>Best IT Experts in The Field </h3>
                                </div>
                                <div class="flipbox_desc">
                                    <p>Get to Work with the Best Software Engineers, and Developers to handle your Assignment</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End Techno Flipbox Top Feature Area ----->
    <!--==================================================-->
    <!--==================================================-->
    <!----- Start Techno How IT Work Area ----->
    <!--==================================================-->
    <div class="how_it_work pt-50 pb-65" id="how-it-works">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text_center mb-60 mt-3">

                        <div class="section_sub_title uppercase mb-3">
                            <h6>HOW IT WORKS</h6>
                        </div>
                        <div class="section_main_title">
                            <h1>Our Working Process</h1>
                        </div>
                        <div class="em_bar">
                            <div class="em_bar_bg"></div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single_it_work mb-4">
                        <div class="single_it_work_content pl-2 pr-2">
                            <div class="single_it_work_content_list pb-5">
                                <span>1</span>
                            </div>
                            <div class="single_work_content_title pb-2">
                                <h4>Initiate Chat and Submit Course/Assignment details</h4>
                            </div>
                            <div class="single_it_work_content_text pt-1">
                                <p>Initiate Chat with our support team through the WhatsApp section below. Discuss the assignment, exams, online course details amd requirements with our Support Team</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single_it_work mb-4">
                        <div class="single_it_work_content pl-2 pr-2">
                            <div class="single_it_work_content_list pb-5">
                                <span>2</span>
                            </div>
                            <div class="single_work_content_title pb-2">
                                <h4>Agree and Pay Pocket Friendly Price</h4>
                            </div>
                            <div class="single_it_work_content_text pt-1">
                                <p>Based on your Assignment/task details, we agree with you on considerable and pocket friendly prices. Our team will share the Payment Details</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single_it_work mb-4">
                        <div class="single_it_work_content pl-2 pr-2">
                            <div class="single_it_work_content_list three pb-5">
                                <span>3</span>
                            </div>
                            <div class="single_work_content_title pb-2">
                                <h4>Communication and Deliver Result</h4>
                            </div>
                            <div class="single_it_work_content_text pt-1">
                                <p>We will analyze your assignment and solve your solutions. We will keep you posted on the progress and result delivery through the chats.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End Techno How IT Work Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Techno Flipbox Area ----->
    <!--==================================================-->

    <div class="flipbox_area pt-85 pb-70" id="services" style="background-image:url(frontendIT/assets/images/slider/slider-4.jpg)"; >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text_center white mb-55">
                        <div class="section_sub_title uppercase mb-3">
                            <h6>SERVICES</h6>
                        </div>
                        <div class="section_main_title">
                            <h1>Provide Exclusive Services</h1>
                        </div>
                        <div class="em_bar">
                            <div class="em_bar_bg"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6">
                    <div class="techno_flipbox mb-30">
                        <div class="techno_flipbox_font">
                            <div class="techno_flipbox_inner">
                                <div class="techno_flipbox_icon">
                                    <div class="icon">
                                        <i class="flaticon-padlock"></i>
                                    </div>
                                </div>
                                <div class="flipbox_title">
                                    <h3>Proctored Exams, Tests and Quiz</h3>
                                </div>
                                <div class="flipbox_desc">
                                    <p>Our Experts in Various IT fields will Help you bag good grades from your exams</p>
                                </div>
                            </div>
                        </div>
                        <div class="techno_flipbox_back " style="background-image:url(frontendIT/assets/images/feature1.jpg);">
                            <div class="techno_flipbox_inner">
                                <div class="flipbox_title">
                                    <h3>Proctored Exams</h3>
                                </div>
                                <div class="flipbox_desc">
                                    <p>We use software to access your laptop during the exam time you only sit in front of your laptop. Can we discuss this on WhatsApp?</p>
                                </div>
                                <div class="flipbox_button">
                                    <a href="#">Chat on WhatsApp<i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6">
                    <div class="techno_flipbox mb-30">
                        <div class="techno_flipbox_font">
                            <div class="techno_flipbox_inner">
                                <div class="techno_flipbox_icon">
                                    <div class="icon">
                                        <i class="flaticon-intelligent"></i>
                                    </div>
                                </div>
                                <div class="flipbox_title">
                                    <h3>Software Application Use and Certification</h3>
                                </div>
                                <div class="flipbox_desc">
                                    <p>We handle online courses dealing with operating systems such as Windows, MacOs, and Linux</p>
                                </div>
                            </div>
                        </div>
                        <div class="techno_flipbox_back " style="background-image:url(frontendIT/assets/images/feature2.jpg);">
                            <div class="techno_flipbox_inner">
                                <div class="flipbox_title">
                                    <h3>Software Application</h3>
                                </div>
                                <div class="flipbox_desc">
                                    <p>We Cover Windows online course on application use such as Microsoft office packages (Word, Excel, Access, Publisher).</p>
                                </div>
                                <div class="flipbox_button">
                                    <a href="#">Chat on WhatsApp<i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6">
                    <div class="techno_flipbox mb-30">
                        <div class="techno_flipbox_font">
                            <div class="techno_flipbox_inner">
                                <div class="techno_flipbox_icon">
                                    <div class="icon">
                                        <i class="flaticon-code"></i>
                                    </div>
                                </div>
                                <div class="flipbox_title">
                                    <h3>Web Development</h3>
                                </div>
                                <div class="flipbox_desc">
                                    <p>Custom Web App Development Projects for your Final Projects</p>
                                </div>
                            </div>
                        </div>
                        <div class="techno_flipbox_back " style="background-image:url(frontendIT/assets/images/feature3.jpg);">
                            <div class="techno_flipbox_inner">
                                <div class="flipbox_title">
                                    <h3>Web Development Projects</h3>
                                </div>
                                <div class="flipbox_desc">
                                    <p>Our Software And Web Devs will help you finish your final year project. Let's Discuss About your Final Year Project on What's App</p>
                                </div>
                                <div class="flipbox_button">
                                    <a href="#">Chat on WhatsApp<i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6">
                    <div class="techno_flipbox mb-30">
                        <div class="techno_flipbox_font">
                            <div class="techno_flipbox_inner">
                                <div class="techno_flipbox_icon">
                                    <div class="icon">
                                        <i class="flaticon-content-writing"></i>
                                    </div>
                                </div>
                                <div class="flipbox_title">
                                    <h3>Essays and Assignment</h3>
                                </div>
                                <div class="flipbox_desc">
                                    <p>We help you write custom essays, research proposals, in the IT related topics</p>
                                </div>
                            </div>
                        </div>
                        <div class="techno_flipbox_back " style="background-image:url(frontendIT/assets/images/feature3.jpg);">
                            <div class="techno_flipbox_inner">
                                <div class="flipbox_title">
                                    <h3>Essays and Assignment</h3>
                                </div>
                                <div class="flipbox_desc">
                                    <p>We handle Thesis, Research Proposals, Software Documentations, Custom Essays on Different topics, and s/w Product Description Articles</p>
                                </div>
                                <div class="flipbox_button">
                                    <a href="#">Chat on WhatsApp<i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6">
                    <div class="techno_flipbox mb-30">
                        <div class="techno_flipbox_font">
                            <div class="techno_flipbox_inner">
                                <div class="techno_flipbox_icon">
                                    <div class="icon">
                                        <i class="flaticon-bar-chart"></i>
                                    </div>
                                </div>
                                <div class="flipbox_title">
                                    <h3>Grade Booster</h3>
                                </div>
                                <div class="flipbox_desc">
                                    <p>We also Take Halfway Done Courses to help you boost your overall mean Grade</p>
                                </div>
                            </div>
                        </div>
                        <div class="techno_flipbox_back " style="background-image:url(frontendIT/assets/images/feature1.jpg);">
                            <div class="techno_flipbox_inner">
                                <div class="flipbox_title">
                                    <h3>Boost Your Grades</h3>
                                </div>
                                <div class="flipbox_desc">
                                    <p>Share with us your details about the course and leave everything to us. We will help you scoop higher grades in the remaining Sections.</p>
                                </div>
                                <div class="flipbox_button">
                                    <a href="#">Chat on WhatsApp<i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6">
                    <div class="techno_flipbox mb-30">
                        <div class="techno_flipbox_font">
                            <div class="techno_flipbox_inner">
                                <div class="techno_flipbox_icon">
                                    <div class="icon">
                                        <i class="flaticon-business-and-finance"></i>
                                    </div>
                                </div>
                                <div class="flipbox_title">
                                    <h3>Database Development</h3>
                                </div>
                                <div class="flipbox_desc">
                                    <p>We handle online courses, assignments, and tests on in Database design and development</p>
                                </div>
                            </div>
                        </div>
                        <div class="techno_flipbox_back " style="background-image:url(frontendIT/assets/images/feature2.jpg);">
                            <div class="techno_flipbox_inner">
                                <div class="flipbox_title">
                                    <h3>Database Design</h3>
                                </div>
                                <div class="flipbox_desc">
                                    <p>MySql, NoSql, Oracle. We Develop Database design schemas, DFDs, ERDs, and Database Normalization Assignments, quizzes, and tasks</p>
                                </div>
                                <div class="flipbox_button">
                                    <a href="#">Chat on WhatsApp<i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--==================================================-->
    <!----- End Techno Flipbox Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Techno About Area ----->
    <!--==================================================-->
    <div class="about_area pt-70 pb-70" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
                    <div class="section_title text_left mb-40 mt-3">
                        <div class="section_sub_title uppercase mb-3">
                            <h6>ABOUT US</h6>
                        </div>
                        <div class="section_main_title">
                            <h1>Preparing For Your Success</h1>
                            <h1>Provide Best <span>Services</span></h1>
                        </div>
                        <div class="em_bar">
                            <div class="em_bar_bg"></div>
                        </div>
                        <div class="section_content_text bold pt-5">
                            <p>We are a team of professional experts in the IT, and Software engineering industry who are passionate and here to help you out to balance between work, online course and family time.</p>
                        </div>
                    </div>
                    <div class="singel_about_left mb-30">
                        <div class="singel_about_left_inner mb-3">
                            <div class="singel-about-content boder pl-4">
                                <p>Time flies fast, but it's good you are the pilot. Just control your time well away from hijackers. Save time profitably; Spend time productively!</p>
                                <p>People who have fully prepared always save time. Albert Einstein was right to teach that if he is given six hours to chop down a tree, he would spend the first four sharpening the axes. When you are done with your action plans, work will be easier!</p>
                            </div>
                        </div>
                        <div class="singel_about_left_inner pl-4">
                            <div class="button two">
                                <a href="#contact">Get In Touch</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
                    <div class="single_about_thumb mb-3">
                        <div class="single_about_thumb_inner">
                            <img src="frontendIT/assets/images/about-img2.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End Techno About Area ----->
    <!--==================================================-->



    <!--==================================================-->
    <!----- End Techno Case Study Area ----->
    <!--==================================================-->




    <!--==================================================-->
    <!----- Start Techno Portfolio Area ----->
    <!--==================================================-->
    <div class="portfolio_area pt-80 pb-70" id="portfolio">
        <div class="container">
            <div class="row">
                <!-- Start Section Tile -->
                <div class="col-lg-12">
                    <div class="section_title text_center mb-50 mt-3">

                        <div class="section_sub_title uppercase mb-3">
                            <h6>PORTFOLIO</h6>
                        </div>
                        <div class="section_main_title">
                            <h1>Our Latest Works For</h1>
                            <h1>Your Business</h1>
                        </div>
                        <div class="em_bar">
                            <div class="em_bar_bg"></div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="portfolio_nav">
                        <div class="portfolio_menu">
                            <ul class="menu-filtering">
                                <li class="current_menu_item" data-filter="*">All Works</li>
                                <li data-filter=".physics" >Branding</li>
                                <li data-filter=".cemes" >Prototype</li>
                                <li data-filter=".math" >UX Research</li>
                                <li data-filter=".english">Web Design</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row image_load">
                <div class="col-lg-4 col-md-6 col-sm-12 grid-item physics english">
                    <div class="single_portfolio">
                        <div class="single_portfolio_inner">
                            <div class="single_portfolio_thumb">
                                <a href="#"><img src="frontendIT/assets/images/portfolio/p1.jpg" alt="" /></a>
                            </div>
                        </div>
                        <div class="single_portfolio_content">
                            <div class="single_portfolio_icon">
                                <a class="portfolio-icon venobox vbox-item" data-gall="myportfolio" href="frontendIT/assets/images/portfolio/p1.jpg"><i class="fa fa-search-plus"></i></a>
                            </div>
                            <div class="single_portfolio_content_inner">
                                <span>Prototype UX Research</span>
                                <h2><a href="#">Digital Marketing</a></h2>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 grid-item cemes">
                    <div class="single_portfolio">
                        <div class="single_portfolio_inner">
                            <div class="single_portfolio_thumb">
                                <a href="#"><img src="frontendIT/assets/images/portfolio/p2.jpg" alt="" /></a>
                            </div>
                        </div>
                        <div class="single_portfolio_content">
                            <div class="single_portfolio_icon">
                                <a class="portfolio-icon venobox vbox-item" data-gall="myportfolio" href="frontendIT/assets/images/portfolio/p2.jpg"><i class="fa fa-search-plus"></i></a>
                            </div>
                            <div class="single_portfolio_content_inner">
                                <span>UX Research</span>
                                <h2><a href="#">Awesome Creative</a></h2>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 grid-item cemes">
                    <div class="single_portfolio">
                        <div class="single_portfolio_inner">
                            <div class="single_portfolio_thumb">
                                <a href="#"><img src="frontendIT/assets/images/portfolio/p3.jpg" alt="" /></a>
                            </div>
                        </div>
                        <div class="single_portfolio_content">
                            <div class="single_portfolio_icon">
                                <a class="portfolio-icon venobox vbox-item" data-gall="myportfolio" href="frontendIT/assets/images/portfolio/p3.jpg"><i class="fa fa-search-plus"></i></a>
                            </div>
                            <div class="single_portfolio_content_inner">
                                <span>Design, Photoshop</span>
                                <h2><a href="#">Business Solution</a></h2>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 grid-item cemes math">
                    <div class="single_portfolio">
                        <div class="single_portfolio_inner">
                            <div class="single_portfolio_thumb">
                                <a href="#"><img src="frontendIT/assets/images/portfolio/p4.jpg" alt="" /></a>
                            </div>
                        </div>
                        <div class="single_portfolio_content">
                            <div class="single_portfolio_icon">
                                <a class="portfolio-icon venobox vbox-item" data-gall="myportfolio" href="frontendIT/assets/images/portfolio/p4.jpg"><i class="fa fa-search-plus"></i></a>
                            </div>
                            <div class="single_portfolio_content_inner">
                                <span>Software Engineer</span>
                                <h2><a href="#">Company Project</a></h2>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 grid-item physics english">
                    <div class="single_portfolio admin">
                        <div class="single_portfolio_inner">
                            <div class="single_portfolio_thumb">
                                <a href="#"><img src="frontendIT/assets/images/portfolio/p5.jpg" alt="" /></a>
                            </div>
                        </div>
                        <div class="single_portfolio_content">
                            <div class="single_portfolio_icon">
                                <a class="portfolio-icon venobox vbox-item" data-gall="myportfolio" href="frontendIT/assets/images/portfolio/p5.jpg"><i class="fa fa-search-plus"></i></a>
                            </div>
                            <div class="single_portfolio_content_inner">
                                <span>Photoshop</span>
                                <h2><a href="#">Mastering Web Design</a></h2>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 grid-item math">
                    <div class="single_portfolio admin">
                        <div class="single_portfolio_inner">
                            <div class="single_portfolio_thumb">
                                <a href="#"><img src="frontendIT/assets/images/portfolio/p6.jpg" alt="" /></a>
                            </div>
                        </div>
                        <div class="single_portfolio_content">
                            <div class="single_portfolio_icon">
                                <a class="portfolio-icon venobox vbox-item" data-gall="myportfolio" href="frontendIT/assets/images/portfolio/p6.jpg"><i class="fa fa-search-plus"></i></a>
                            </div>
                            <div class="single_portfolio_content_inner">
                                <span>Design, Photoshop</span>
                                <h2><a href="#">Awesome Logo Design</a></h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--==================================================-->
    <!----- Start Techno Video Area ----->
    <!--==================================================-->
    <div class="video_area pt-100 pb-200"style="background-image:url(frontendIT/assets/images/slider/bg.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text_center white mb-55">
                        <div class="section_main_title">
                            <h1>We Create Real Impact For Those</h1>
                            <h1>Who Partner With Us.</h1>
                        </div>
                        <div class="em_bar">
                            <div class="em_bar_bg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="video_area pb-200">
        <div class="container">
            <div class="row mrt-200">
                <div class="col-lg-12">
                    <div class="single_video">
                        <div class="single_video_thumb">
                            <img src="frontendIT/assets/images/slider/video.png" alt="" />
                        </div>
                    </div>
                    <div class="single-video text-center">
                        <div class="video-icon mrt-345">
                            <h1 class="lead text-white">Assignment Analysis</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End Techno Video Area ----->
    <!--==================================================-->



    <!--==================================================-->
    <!----- Start Techno Testimonial Area ----->
    <!--==================================================-->
    <div id="review" class="testimonial-bg pt-100 pb-70">
        <div id="container-general" class="ready anim-section-features anim-section-desc anim-section-quote">
            <section id="section-quote">
                <div class="col-lg-12">
                    <div class="section_title text_center mt-3">
                        <div class="section_sub_title uppercase mb-3">
                            <h6>TESTIMONIAL</h6>
                        </div>
                        <div class="section_main_title">
                            <h1>Our Happy <span>Clients Says</span></h1>
                        </div>
                        <div class="em_bar">
                            <div class="em_bar_bg"></div>
                        </div>
                    </div>
                </div>
                <!--Left Bubble Images-->
                <div class="container-pe-quote left">
                    <div class="pp-quote li-quote-1" data-textquote="quote-text-1">
                        <div class="img animated bounce"></div>
                    </div>
                    <div class="pp-quote li-quote-2" data-textquote="quote-text-2">
                        <div class="img animated bounce"></div>
                    </div>
                    <div class="pp-quote li-quote-3" data-textquote="quote-text-3">
                        <div class="img animated bounce"></div>
                    </div>
                    <div class="pp-quote li-quote-4 active" data-textquote="quote-text-4">
                        <div class="img animated bounce"></div>
                    </div>
                    <div class="pp-quote li-quote-5" data-textquote="quote-text-5">
                        <div class="img animated bounce"></div>
                    </div>
                    <div class="pp-quote li-quote-6" data-textquote="quote-text-6">
                        <div class="img animated bounce"></div>
                    </div>
                </div>
                <!--Left Bubble Images-->
                <!--Center Testimonials-->
                <div class="container-quote carousel-on">
                    <!--Testimonial 1-->
                    <div class="quote quote-text-3 hide-bottom" data-ppquote="li-quote-3">
                        <p>'Managing everyday banking has finally become fun, fast and easy. Icing on the cake, customer support is super reactive: 5 stars!'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Tom Abel De</div>
                            <div class="job">Digital Marketing</div>
                        </div>
                    </div>
                    <!--Testimonial 2-->
                    <div class="quote quote-text-4 show" data-ppquote="li-quote-4">
                        <p>'Qonto met my needs straight away. ng has finally become fun, fast andCustomer care is awesome! Period.'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Sanuka Santa</div>
                            <div class="job">To To Company</div>
                        </div>
                    </div>
                    <!--Testimonial 3-->
                    <div class="quote hide-bottom quote-text-5" data-ppquote="li-quote-5">
                        <p>'With Qonto, I've been able to order MasterCard cards in seconds. My purchasing team can now be autonomous with their payments. Qonto is game changer.'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Grégoire Pasquet</div>
                            <div class="job">Solf Solution</div>
                        </div>
                    </div>
                    <!--Testimonial 4-->
                    <div class="quote hide-bottom quote-text-6" data-ppquote="li-quote-6">
                        <p>'Qonto? Easy, fast, efficient. Traditionalng has finally become fun, fast and banks' hassles belong to the past!'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Nicolas Puran</div>
                            <div class="job">CEO Founder</div>
                        </div>
                    </div>
                    <!--Testimonial 5-->
                    <div class="quote hide-bottom quote-text-7" data-ppquote="li-quote-7">
                        <p>'Qonto? A flawless UX and a customer service ng has finally become fun, fast and that cares so much. This is just incredible!'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Mathieu Jouhet</div>
                            <div class="job">Freelance @Hello Mat</div>
                        </div>
                    </div>
                    <!--Testimonial 6-->
                    <div class="quote hide-bottom quote-text-8" data-ppquote="li-quote-8">
                        <p>'I needed a bank similar to a SaaS for LiveMentor: ng has finally become fun, fast and I think I found it.'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Charles Jadran</div>
                            <div class="job">Web Development</div>
                        </div>
                    </div>
                    <!--Testimonial 7-->
                    <div class="quote hide-bottom quote-text-9" data-ppquote="li-quote-9">
                        <p>'I can say 'Goodbye' to the banking pains I had to ng has finally become fun, fast and bear with, and 'hello' to a way to do finance that makes sense.'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Digong Frando</div>
                            <div class="job">CEO Officience</div>
                        </div>
                    </div>
                    <!--Testimonial 8-->
                    <div class="quote hide-bottom quote-text-10" data-ppquote="li-quote-10">
                        <p>'Qonto is 100% in tune with what we do at Alan.eu: a user-friendly service, a user-centric interface and a very reactive customer support.'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Charles Samuelian</div>
                            <div class="job">Director & Photo Man</div>
                        </div>
                    </div>
                    <!--Testimonial 9-->
                    <div class="quote hide-bottom quote-text-11" data-ppquote="li-quote-11">
                        <p>'I have been looking for a modern and efficient banking alternative that could support the development of my business. I'm just wondering why Qonto did not exist before!'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Khatry Firmanio</div>
                            <div class="job">CEO Company</div>
                        </div>
                    </div>
                    <!--Testimonial 10-->
                    <div class="quote hide-bottom quote-text-13" data-ppquote="li-quote-13">
                        <p>'That's just perfect - It rocks baby! ng has finally become fun, fast and You wanna apply at TheFamily? Use Qonto first.'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Jadran Parvej Imon</div>
                            <div class="job">CEO Managar</div>
                        </div>
                    </div>
                    <!--Testimonial 11-->
                    <div class="quote quote-text-1 hide-bottom" data-ppquote="li-quote-1">
                        <p>'I wish I could have had Qonto ng has finally become fun, fast andenrolled in the Techstars Paris's first batch!'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Bertier Luyt</div>
                            <div class="job">Managing Director</div>
                        </div>
                    </div>
                    <!--Testimonial 12-->
                    <div class="quote quote-text-2 hide-bottom" data-ppquote="li-quote-2">
                        <p>'Thanks to a slick interface and simple ng has finally become fun, fast and features, managing payments and expenses has become a piece of cake!'</p>
                        <div class="container-info">
                            <div class="pp"></div>
                            <div class="name">Darpon Abir Khan</div>
                            <div class="job">Founder Officience</div>
                        </div>
                    </div>
                </div>
                <!--Right Bubble Images-->
                <div class="container-pe-quote right">
                    <div class="pp-quote li-quote-7" data-textquote="quote-text-7">
                        <div class="img animated bounce"></div>
                    </div>
                    <div class="pp-quote li-quote-8" data-textquote="quote-text-8">
                        <div class="img animated bounce"></div>
                    </div>
                    <div class="pp-quote li-quote-9" data-textquote="quote-text-9">
                        <div class="img animated bounce"></div>
                    </div>
                    <div class="pp-quote li-quote-10" data-textquote="quote-text-10">
                        <div class="img animated bounce"></div>
                    </div>
                    <div class="pp-quote li-quote-11" data-textquote="quote-text-11">
                        <div class="img animated bounce"></div>
                    </div>
                    <div class="pp-quote li-quote-13" data-textquote="quote-text-13">
                        <div class="img animated bounce"></div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!--==================================================-->
    <!----- End Techno Testimonial Area ----->
    <!--==================================================-->


    <!--==================================================-->
    <!----- Start Techno Blog Area ----->
    <!--==================================================-->
    <div class="blog_area bg_color2 pt-80 pb-70" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text_center mb-60 mt-3">
                        <div class="section_sub_title uppercase mb-3">
                            <h6>MORE INFO ABOUT</h6>
                        </div>
                        <div class="section_main_title">
                            <h1>See Our Latest News</h1>
                        </div>
                        <div class="em_bar">
                            <div class="em_bar_bg"></div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single_blog text_center mb-4">
                        <div class="single_blog_thumb">
                            <a href="blog-details.html"><img src="frontendIT/assets/images/blog4.jpg" alt="" /></a>
                        </div>
                        <div class="single_blog_content pl-4 pr-4">
                            <div class="techno_blog_meta shado_bg">
                                <a href="#">Techno </a>
                                <span class="meta-date pl-3">Augost 5, 2020</span>
                            </div>
                            <div class="blog_page_title pb-1 pt-3">
                                <h3><a href="blog-details.html">The five devices you need to work anytime</a></h3>
                            </div>
                            <div class="blog_description">
                                <p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.  </p>
                            </div>
                            <div class="blog_page_button pb-4">
                                <a href="blog-details.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single_blog text_center mb-4">
                        <div class="single_blog_thumb">
                            <a href="blog-details.html"><img src="frontendIT/assets/images/blog1.jpg" alt="" /></a>
                        </div>
                        <div class="single_blog_content pl-4 pr-4">
                            <div class="techno_blog_meta shado_bg">
                                <a href="#">Techno </a>
                                <span class="meta-date pl-3">Augost 5, 2020</span>
                            </div>
                            <div class="blog_page_title pb-1 pt-3">
                                <h3><a href="blog-details.html">The five devices you need to work anytime</a></h3>
                            </div>
                            <div class="blog_description">
                                <p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.  </p>
                            </div>
                            <div class="blog_page_button pb-4">
                                <a href="blog-details.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single_blog text_center mb-4">
                        <div class="single_blog_thumb">
                            <a href="blog-details.html"><img src="frontendIT/assets/images/blog2.jpg" alt="" /></a>
                        </div>
                        <div class="single_blog_content pl-4 pr-4">
                            <div class="techno_blog_meta shado_bg">
                                <a href="#">Techno </a>
                                <span class="meta-date pl-3">Augost 5, 2020</span>
                            </div>
                            <div class="blog_page_title pt-3 pb-1">
                                <h3><a href="blog-details.html">The five devices you need to work anytime</a></h3>
                            </div>
                            <div class="blog_description">
                                <p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.  </p>
                            </div>
                            <div class="blog_page_button pb-4">
                                <a href="blog-details.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End Techno Blog Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Techno Contact Area ----->
    <!--==================================================-->
    <div class="contact_area pt-85 pb-90" style="background-image:url(frontendIT/assets/images/bg-cnt.jpg)" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title white text_center mb-60 mt-3">
                        <div class="section_sub_title uppercase mb-3">
                            <h6>CONTACT US</h6>
                        </div>
                        <div class="section_main_title">
                            <h1>Have Questions?</h1>
                            <h1>We Got you Covered</h1>
                        </div>
                        <div class="em_bar">
                            <div class="em_bar_bg"></div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="quote_wrapper">
                        <form id="contact_form" action="#" method="POST" >
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form_box mb-30">
                                        <input type="text" name="name"  placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_box mb-30">
                                        <input type="email" name="email" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_box mb-30">
                                        <input type="text" name="phone" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form_box mb-30">
                                        <input type="text" name="subject" placeholder="Subject">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form_box mb-30">
                                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Write a Message"></textarea>
                                    </div>
                                    <div class="quote_btn text_center">
                                        <button class="btn" type="submit">Submit Query</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <p class="form-message"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End Techno Contact Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Techno Brand Area ----->
    <!--==================================================-->

    <div class="brand_area pt-30 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <!--brand owl curousel -->
                        <div class="brand_list owl-carousel curosel-style">
                            <!-- Start Single Brand -->
                            <div class="col-lg-12">
                                <div class="single_brand mt-3 mb-5">
                                    <div class="single_brand_thumb">
                                        <img src="frontendIT/assets/images/brand/1.png" alt="" />
                                    </div>
                                </div>
                            </div>
                            <!-- Start Single Brand -->
                            <div class="col-lg-12">
                                <div class="single_brand mt-3 mb-5">
                                    <div class="single_brand_thumb">
                                        <img src="frontendIT/assets/images/brand/2.png" alt="" />
                                    </div>
                                </div>
                            </div>
                            <!-- Start Single Brand -->
                            <div class="col-lg-12">
                                <div class="single_brand mt-3 mb-5">
                                    <div class="single_brand_thumb">
                                        <img src="frontendIT/assets/images/brand/3.png" alt="" />
                                    </div>
                                </div>
                            </div>
                            <!-- Start Single Brand -->
                            <div class="col-lg-12">
                                <div class="single_brand mt-3 mb-5">
                                    <div class="single_brand_thumb">
                                        <img src="frontendIT/assets/images/brand/4.png" alt="" />
                                    </div>
                                </div>
                            </div>
                            <!-- Start Single Brand -->
                            <div class="col-lg-12">
                                <div class="single_brand mt-3 mb-5">
                                    <div class="single_brand_thumb">
                                        <img src="frontendIT/assets/images/brand/5.png" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End Techno Brand Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start Techno Footer Middle Area ----->
    <!--==================================================-->
    <div class="footer-middle bg-dark2 pt-95">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget widgets-company-info">
                        <div class="footer-bottom-logo pb-40">
                            <img src="frontendIT/assets/images/fav-icon/logo-white.jpg" alt="" />
                        </div>
                        <div class="company-info-desc">
                            <p>Condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus.
                            </p>
                        </div>
                        <div class="follow-company-info pt-3">
                            <div class="follow-company-text mr-3">
                                <a href="#"><p>Follow Us</p></a>
                            </div>
                            <div class="follow-company-icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-skype"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget widget-nav-menu">
                        <h4 class="widget-title pb-4">Our Services</h4>
                        <div class="menu-quick-link-container ml-4">
                            <ul id="menu-quick-link" class="menu">
                                <li><a href="#">Marketing Strategy</a></li>
                                <li><a href="#">Interior Design</a></li>
                                <li><a href="#">Digital Services</a></li>
                                <li><a href="#">Product Selling</a></li>
                                <li><a href="#">Product Design</a></li>
                                <li><a href="#">Social Marketing</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget widgets-company-info">
                        <h3 class="widget-title pb-4">Company Address</h3>
                        <div class="company-info-desc">
                            <p>Porem awesome dolor sitework amet, consetur acing elit, sed do eiusmod ligal
                            </p>
                        </div>
                        <div class="footer-social-info">
                            <p><span>Address :</span>54/1 New dhas sorini Asut, Melbord Austria.</p>
                        </div>
                        <div class="footer-social-info">
                            <p><span>Phone :</span>54786547521</p>
                        </div>
                        <div class="footer-social-info">
                            <p><span>Email :</span>demo@example.com</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div id="em-recent-post-widget">
                        <div class="single-widget-item">
                            <h4 class="widget-title pb-3">Popular Post</h4>
                            <div class="recent-post-item active pb-3">
                                <div class="recent-post-image mr-3">
                                    <a href="#">
                                        <img width="80" height="80" src="frontendIT/assets/images/recent1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="recent-post-text">
                                    <h6><a href="#">
                                            Tiktok Illegally collecting data sharing
                                        </a>
                                    </h6>
                                    <span class="rcomment">December 12, 2020</span>
                                </div>
                            </div>
                            <div class="recent-post-item pt-1">
                                <div class="recent-post-image mr-3">
                                    <a href="#">
                                        <img width="80" height="80" src="frontendIT/assets/images/recent3.jpg" alt="">
                                    </a>
                                </div>
                                <div class="recent-post-text">
                                    <h6><a href="#">
                                            How can use our latest news by
                                        </a>
                                    </h6>
                                    <span class="rcomment">December 15, 2020</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="row footer-bottom mt-70 pt-3 pb-1">
                <div class="col-lg-6 col-md-6">
                    <div class="footer-bottom-content">
                        <div class="footer-bottom-content-copy">
                            <p>© 2021  &lt;TakeMyITClass/&gt;.All Rights Reserved. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="footer-bottom-right">
                        <div class="footer-bottom-right-text">
                            <a class="absod" href="#">Privacy Policy </a>
                            <a href="#"> Terms & Conditions</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End Techno Footer Middle Area ----->
    <!--==================================================-->

    <!-- jquery js -->
    <script type="text/javascript" src="frontendIT/assets/js/vendor/jquery-3.2.1.min.js"></script>
    <!-- bootstrap js -->
    <script type="text/javascript" src="frontendIT/assets/js/bootstrap.min.js"></script>
    <!-- carousel js -->
    <script type="text/javascript" src="frontendIT/assets/js/owl.carousel.min.js"></script>
    <!-- counterup js -->
    <script type="text/javascript" src="frontendIT/assets/js/jquery.counterup.min.js"></script>
    <!-- waypoints js -->
    <script type="text/javascript" src="frontendIT/assets/js/waypoints.min.js"></script>
    <!-- wow js -->
    <script type="text/javascript" src="frontendIT/assets/js/wow.js"></script>
    <!-- imagesloaded js -->
    <script type="text/javascript" src="frontendIT/assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- venobox js -->
    <script type="text/javascript" src="frontendIT/venobox/venobox.js"></script>
    <!-- OnePage Nav js -->
    <script type="text/javascript" src="frontendIT/assets/js/jquery.nav.js"></script>
    <!-- ajax mail js -->
    <script type="text/javascript" src="frontendIT/assets/ajax-mail.html"></script>
    <!--  testimonial js -->
    <script type="text/javascript" src="frontendIT/assets/js/testimonial.js"></script>
    <!--  animated-text js -->
    <script type="text/javascript" src="frontendIT/assets/js/animated-text.js"></script>
    <!-- venobox min js -->
    <script type="text/javascript" src="frontendIT/venobox/venobox.min.js"></script>
    <!-- isotope js -->
    <script type="text/javascript" src="frontendIT/assets/js/isotope.pkgd.min.js"></script>
    <!-- jquery nivo slider pack js -->
    <script type="text/javascript" src="frontendIT/assets/js/jquery.nivo.slider.pack.js"></script>
    <!-- jquery meanmenu js -->
    <script type="text/javascript" src="frontendIT/assets/js/jquery.meanmenu.js"></script>
    <!-- jquery scrollup js -->
    <script type="text/javascript" src="frontendIT/assets/js/jquery.scrollUp.js"></script>
    <!-- theme js -->
    <script type="text/javascript" src="frontendIT/assets/js/theme.js"></script>
    <!-- jquery js -->
    </body>

</html>
