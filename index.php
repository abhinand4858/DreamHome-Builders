<?php
    ob_start();
    session_start(); 
?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Dream Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
       
        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic,300' rel='stylesheet' type='text/css'>

		<!-- all css here -->
		
		<!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Animated text css -->
		<link rel="stylesheet" href="css/animated.css">
		<!-- owl.carousel css -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.transitions.css">
		<!-- font-awesome css -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- style css -->
		<link rel="stylesheet" href="style.css">
		<!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css">
		<!-- modernizr css -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        
        <header>
            <!-- Start Top Header -->
            <div id="sticker" class="header-area">
                <div class="container">
                    <!-- Navigation -->
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!-- Brand -->
                        
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse main-menu" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active">
                                    <a class="page-scroll" href="#home">Home</a>
                                </li>
                                <li>
                                    <a class="page-scroll" href="#about">About</a>
                                </li>
                                <li>
                                    <a class="page-scroll" href="#skills">Skills</a>
                                </li>		              	
                                <li>
                                    <a class="page-scroll" href="#portfolio">Portfolio</a>
                                </li>	
                                <li>
                                    <a class="page-scroll" href="#reviews">Reviews</a>
                                </li>
                                <?php
                                if(!isset($_SESSION['user']) ) { 
                                ?>
                                <li>
                                    <a class="page-scroll" href="login.php">Login</a>
                                </li>

                                <?php  } else {
                                ?>
                                 <li>
                                    <a class="" href="select.php">More</a>
                                </li>
                                <li>
                                    <a class="" href="logout.php?logout"> <?php echo $_SESSION['user']; ?></a>
                                </li>

                                <?php  }  ?>
                                         			              
                            </ul>
                        </div>
                        <!-- navbar-collapse -->
                    </nav>
                    <!-- END: Navigation -->
                </div>
            </div>


            <!-- End Top Header -->
            <!-- Start Bottom Header -->
            <div id="home" class="header-img">
                <div class="header-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-left">
                            <div class="header-bottom">
                                <h1>Hey, we are Dream House Constructions</h1>
                                <h2 class="cd-headline clip is-full-width">
                                    <span class="cd-words-wrapper">
                                        <b class="is-visible">Limitless Creativity</b>
                                        <b>Making your dream come true</b>
                                        <b>Unique designs to choose</b>
                                        <b>Good quality materials</b>
                                    </span>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Bottom Header -->
        </header>
		<!-- END Header -->
        <!-- Start About Area -->
		<div id ="about" class="about-area page-scroll area-padding">
			<div class="container">
			    <!-- section head -->
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="section-head">
						    <h3>We do:</h3>
						</div>
					</div>
				</div>
				<!-- end row -->
				<div class="row second-row">
				    <div class="col-md-3 col-sm-4">
				        <div class="about-details text-center">
				            <div class="single-about">
				                <a class="about-icon" href="#"><i class=""></i></a>
				                <h4>Splendid design</h4>
                                <p>See through our awesome architechture designs that best suites your dream home.</p>
				            </div>
				        </div>
				        <!-- end about-details -->
				    </div>
				    <!-- end col-md-4 -->
				    <div class="col-md-3 col-sm-4">
				        <div class="about-details text-center">
				            <div class="single-about">
				                <a class="about-icon" href="#"><i class=""></i></a>
				                <h4>Building Renovation</h4>
                                <p>Our project diversity and commitment to quality has allowed us to exceed client needs and expectations.  Our services include general contracting, construction management, design build and pre-construction services.</p>
				            </div>
				        </div>
				        <!-- end about-details -->
				    </div>
				    <div class="col-md-3 col-sm-4">
				        <div class="about-details text-center">
				            <div class="single-about">
				                <a class="about-icon" href="#"><i class=""></i></a>
				                <h4>Pre-Construction Design and estimating</h4>
                                <p>Dream House  Construction excels in providing cost-effective pre-construction
                                 services to our clients. In doing so, we are able
                                  to provide many types of pre-construction estimates.</p>
				            </div>
				        </div>
				        <!-- end about-details -->
				    </div>
				    <!-- end col-md-4 -->
				    <div class="col-md-3 hidden-sm">
				        <div class="about-details text-center">
				            <div class="single-about">
				                <a class="about-icon" href="#"><i class=""></i></a>
				                <h4>Emergency Services</h4>
                                <p>Dream House  Construction Company can handle your Emergency
                                24 hours a day, 7 days a week, with an immediate, live response and quick, onsite arrival time.</p>
				            </div>
				        </div>
				        <!-- end about-details -->
				    </div>
				    <!-- end col-md-4 -->
				</div>
				<div class="row fix">
				    <div class="col-md-6 col-sm-6">
				        <div class="self-img">
				            <a href="#"><img src="img/background/bg4.jpg" alt=""></a>
				        </div>
				    </div>
				    <div class="col-md-6 col-sm-6">
                        <!-- about-self -->
				        <div class="about-self">
				            <div class="self-head">
				                <h4 class="intro-head">Introduction</h4>
                                <p>Dream House Construction Inc. is  passionate about building your "dream home", love to create modern houses & provide great service to our customers and clients.</p>
				            </div>
				            <div class="self-text">
				                <ul>
                                    <li>Dream House Construction:Since 2001</li>
                                   <li>Expert Civil Engineers</li>
                                    <li>Services: Around the globe</li>
                                    <li>Country: California</li>
                                    <li>Community :Team Leading</li>
                                </ul>
				            </div>
				            
				        </div>
				        <!-- end about-self -->
				    </div>
				</div>
			</div>
		</div>
		<!-- end About -->
		<!-- Stert Add area -->
		<div class="add-area area-margin">
            <div class="head-overly"></div>
		    <div class="container">
		        <div class="row">
		            <div class="add-text">
                        <div class="col-md-6 col-sm-6">
                            <div class="add-content">
                                <h2>When the best and the most expensive are not synonyms</h2>
                            </div>
                        </div>
                        
                        </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- end Add area -->
		<!-- Start Skills -->
		<div id ="skills" class="skill-area page-scroll area-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="section-head">
						    <h3>Best-in class services</h3>
						</div>
					</div>
				</div>
				<!-- end row -->
                <div class="row second-row">
                    <div class="col-md-6 col-sm-6">
                        <!-- Skills Content -->
                        <div class="skills-content">
                            <div class="skills-details">
                                <p>Our skilled teams take pride in guiding a project from conception to successful completion. Dream House Construction
                                partners with clients from the very beginning to listen to their needs and develop a clear and 
                                shared vision for a project. Then we collaborate with talented architects, engineers, and subcontractors to bring 
                                that vision to life. This interactive approach ensures quality workmanship and attention to det
                                ail every step of the way and a finished structure you can be proud of</p>
                            </div>
                            <div class="skills-idea">
                               <h4 class="intro-head">Work startegy</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-lightbulb-o"></i>Idea </a>We have  variety of design palns for your building</li>
                                    <li><a href="#"><i class="fa fa-thumbs-o-up"></i>Quality materials:</a>Best in class materials to withstand any calamity</li>
                                    <li><a href="#"><i class="fa fa-pencil"></i>Best site locations:</a>Water front,sea front and much more amazing locations..</li>
                                    <li><a href="#"><i class="fa fa-line-chart"></i>Getting done:</a>Get your dream home ready and start living.... </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Skills Content -->
                    </div>
                    <div class="col-md-6 col-sm-6">
                       <!-- Skills Progressbar -->
                       <div class="skill-progress">
                            <h4 class="web-ex">Design rating</h4>
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="1.5s " role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
                                </div>
                            </div>
                            <span class="web-per wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="1.5s">95%</span>
                        </div>
                        <!-- Skills Progressbar -->
                        <div class="skill-progress">
                            <h4 class="web-ex">Service rating</h4>
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="1.5s " role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                            </div>
                            <span class="web-per bar-2 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="1.5s">90%</span>
                        </div>
                        <!-- Skills Progressbar -->
                        <div class="skill-progress">
                            <h4 class="web-ex">Customer Satisfaction</h4>
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="1.5s " role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                </div>
                            </div>
                            <span class="web-per bar-3 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="1.5s">80%</span>
                        </div>
                        <div class="skill-progress">
                            <h4 class="web-ex">Budget rating</h4>
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="1.5s " role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                </div>
                            </div>
                            <span class="web-per bar-4 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="1.5s">90%</span>
                        </div>
                        <!-- Skills Progressbar -->
                        <div class="skill-progress">
                            <h4 class="web-ex">Company rating</h4>
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="1.5s " role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                                </div>
                            </div>
                            <span class="web-per bar-5 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="1.5s">85%</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="skill-edu">
                           <h4 class="intro-head">Our Projects</h4>
                            <!-- edu-result -->
                            <div class="edu-result">
                                <h5><span>2012</span>Construction of Oberon Hotel</h5>
                                <h6> California</h6>
                                <p>We have constructed the 3 star hotel at California.</p>
                            </div>
                            <!-- edu-result -->
                            <div class="edu-result">
                                <h5><span>2006</span>Folsom Dam Project Hits High-Water Mark</h5>
                                 <h6>California</h6>
                                <p>Built as part of an effort to prevent overtopping of Folsom Dam and to protect Sacramento against 200-year floods, the Folsom
                                 Dam Auxiliary Spillway project team overcame numerous
                                 technical and logistical challenges to deliver the $318-million project.</p>
                            </div>
                            <!-- edu-result -->
                            <div class="edu-result last-result">
                               <h5><span>2015</span> Kaiser Permanente San Diego Medical Center</h5>
                                <h6>  San Diego</h6>
                                <p>Kaiser Permanente’s San Diego Medical Center combines technology and the natural world to create a healing environment.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Start Experince -->
                    <div class="col-md-6 col-sm-6">
                        <div class="skill-edu">
                            <h4 class="intro-head">Latest Projects</h4>
                            <!-- edu-result -->
                            <div class="edu-result">
                                <h5><span>2016</span>Gateshead Millennium Bridge.</h5>
                                <h6> Courtesy of Kay Williams.</h6>
                                <p>Advanced modeling techniques, material choices and analysis methodologies adopted for building practices are not yet fully embraced within the bridge industry. </p>
                            </div>
                            <!-- edu-result -->
                            <div class="edu-result">
                                <h5><span>2017</span>Egg-shaped office building in Mumbai</h5>
                                 <h6> Blends natural shape with innovative technology</h6>
                                <p> The new “Cybertecture Egg” has been designed as a poultry-inspired office building for Mumbai, India.</p>
                            </div>
                            <!-- edu-result -->
                            <div class="edu-result last-result">
                               <h5><span>2017</span>Smart Office in Delhi</h5>
                                <h6> Royal Computer Center</h6>
                                <p>As IoT technology and philosophy continue to advance, smart buildings are becoming an increasingly attractive option for property investors.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Skills -->
        <!-- Start counter -->
        <div class="fun-fact-area fix area-margin">
            <div class="head-overly"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <!-- fun_text  -->
                        <div class="fun_text text-center">
                            <a href="#"><i class="fa fa-heart"></i></a>
                            <span class="counter">1603</span>
                            <h6>Happy Customers</h6>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <!-- fun_text  -->
                        <div class="fun_text text-center">
                            <a href="#"><i class="fa fa-user"></i></a>
                            <span class="counter">750</span>
                            <h6>Success Projects</h6>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <!-- fun_text  -->
                        <div class="fun_text text-center">
                            <a href="#"><i class="fa fa-clock-o"></i></a>
                            <span class="counter">905</span>
                            <h6>Website Managing</h6>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <!-- fun_text  -->
                        <div class="fun_text text-center">
                            <a href="#"><i class="fa fa-question"></i></a>
                            <span class="counter">5550</span>
                            <h6>Article Wrote</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End counter -->
        <!-- awesome-portfolio-area start -->
	    <div id="portfolio" class="portfolio-area fix area-padding">
		    <div class="container">
			    <!-- section-heading start -->
			    <div class="row">
                    <div class="col-md-12">
                        <div class="section-head">
                            <h3>Portfolio.</h3>
                        </div>
                    </div>
                </div>
                <!-- section-heading end -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- awesome-portfolio start -->
                        <div class="awesome-portfolio">
                            <div class="awesome-portfolio-menu">
                                <ul>
                                    <li class="filter" data-filter="all" >All Items</li>
                                    <li class="filter" data-filter=".design">Design</li>
                                    <li class="filter" data-filter=".web">Popular Designs</li>
                                    <li class="filter" data-filter=".wordpress">Future designs</li>
                                    <li class="filter" data-filter=".php">Our Best Designs</li>
                                </ul>				
                            </div>
                            <div class="awesome-portfolio-content">
                                <!-- single-awesome-portfolio start -->
                                <div class="single-awesome-portfolio mix all web wordpress">
                                    <a href="#">
                                        <div class="awesome-img"><img src="img/portfolio/1.jpg" alt="" /></div>
                                        <div class="awesome-info">
                                            <h3>Designer home</h3>
                                            <p></p>
                                        </div>
                                    </a>
                                </div>
                                <!-- single-awesome-portfolio end -->
                                <!-- single-awesome-portfolio start -->
                                <div class="single-awesome-portfolio mix all design php">
                                    <a href="#">
                                        <div class="awesome-img"><img src="img/portfolio/2.jpg" alt="" /></div>
                                        <div class="awesome-info">
                                            <h3>Spacious home</h3>
                                            <p>New gen designs</p>
                                        </div>
                                    </a>
                                </div>
                                <!-- single-awesome-portfolio end -->
                                <!-- single-awesome-portfolio start -->
                                <div class="single-awesome-portfolio mix all web wordpress">
                                    <a href="#">
                                        <div class="awesome-img"><img src="img/portfolio/3.jpg" alt="" /></div>
                                        <div class="awesome-info">
                                            <h3>Ambient light house</h3>
                                            <p></p>
                                        </div>
                                    </a>
                                </div>
                                <!-- single-awesome-portfolio end -->
                                <!-- single-awesome-portfolio start -->
                                <div class="single-awesome-portfolio mix all design php">
                                    <a href="#">
                                        <div class="awesome-img"><img src="img/portfolio/4.jpg" alt="" /></div>
                                        <div class="awesome-info">
                                            <h3>Natural</h3>
                                            <p>Elegant Designs</p>
                                        </div>
                                    </a>
                                </div>
                                <!-- single-awesome-portfolio end -->
                                <!-- single-awesome-portfolio start -->
                                <div class="single-awesome-portfolio mix all web design wordpress">
                                    <a href="#">
                                        <div class="awesome-img"><img src="img/portfolio/5.jpg" alt="" /></div>
                                        <div class="awesome-info">
                                            <h3>Illuminated homes</h3>
                                            <p></p>
                                        </div>
                                    </a>
                                </div>
                                <!-- single-awesome-portfolio end -->
                                <!-- single-awesome-portfolio start -->
                                <div class="single-awesome-portfolio mix all design php">
                                    <a href="#">
                                        <div class="awesome-img"><img src="img/portfolio/6.jpg" alt="" /></div>
                                        <div class="awesome-info">
                                            <h3>Simple</h3>
                                            <p></p>
                                        </div>
                                    </a>
                                </div>
                                <!-- single-awesome-portfolio end -->
                                <!-- single-awesome-portfolio start -->
                                <div class="single-awesome-portfolio mix all design wordpress">
                                    <a href="#">
                                        <div class="awesome-img"><img src="img/portfolio/7.jpg" alt="" /></div>
                                        <div class="awesome-info">
                                            <h3>Older designs</h3>
                                            <p></p>
                                        </div>
                                    </a>
                                </div>
                                <!-- single-awesome-portfolio end -->
                                <!-- single-awesome-portfolio start -->
                                <div class="single-awesome-portfolio mix all web wordpress php">
                                    <a href="#">
                                        <div class="awesome-img"><img src="img/portfolio/8.jpg" alt="" /></div>
                                        <div class="awesome-info">
                                            <h3>The perfect house</h3>
                                            <p></p>
                                        </div>
                                    </a>
                                </div>
                                <!-- single-awesome-portfolio end -->
                            </div>	
                        </div>
                        <!-- awesome-portfolio end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- awesome-portfolio-area end -->
        <!-- Start testimonials end -->
		<div id="reviews" class="Reviews-area">
            <div class="head-overly"></div>
		    <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                        <div class="Reviews-content">
                            <!-- start testimonial carousel -->
                            <div class="testimonial-carousel item-indicator">
                                <div class="single-testi text-center">
                                    <div class="testi-img">
                                        <img src="img/testimonial/test1.jpg" alt="">
                                    </div>
                                    <div class="testi-text text-center">
                                        <p> The common question that gets asked in business is, ‘why?’ That’s a good question, but an equally valid question is, ‘why not?’</p>                            <h4>Abinand</h4>
                                        <span class="guest-rev">CTO<a href="#"></a></span>
                                    </div>
                                </div>
                                <!-- End single item -->
                                <div class="single-testi text-center">
                                    <div class="testi-img">
                                        <img src="img/testimonial/test2.jpeg" alt="">
                                    </div>
                                    <div class="testi-text text-center">
                                        <p>It takes 20 years to build a reputation and five minutes to ruin it. If you think about that, you’ll do things differently. </p>
                                        <h4>Venkitaraman</h4>
                                        <span class="guest-rev">Executive Officer<a href="#"></a></span>
                                    </div>
                                </div>
                                <!-- End single item -->
                                <div class="single-testi text-center">
                                    <div class="testi-img">
                                        <img src="img/testimonial/test3.jpg" alt="">
                                    </div>
                                    <div class="testi-text text-center">
                                        <p>The world is changing very fast. Big will not beat small anymore. It will be the fast beating the slow.</p>
                                        <h4>DarsiManoj</h4>
                                        <span class="guest-rev">Director<a href="#"></a></span>
                                    </div>
                                </div>
                                <!-- End single item -->
                                 <div class="single-testi text-center">
                                    <div class="testi-img">
                                        <img src="img/testimonial/test4.jpeg" alt="">
                                    </div>
                                    <div class="testi-text text-center">
                                        <p>Lots of companies don’t succeed over time. What do they fundamentally do wrong? They usually miss the future.</p>
                                        <h4>Yeshwant</h4>
                                        <span class="guest-rev">CEO<a href="#"></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
		    </div>
		</div>
		<!-- End testimonials end -->
		<!-- Start Blog Ares -->
		<div id="blog" class="blog-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-head">
                            <h3>Our Latest Designs.</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="blog-item">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-blog">
                                <div class="single-blog-img">
                                    <a href="#">
                                        <img src="img/blog/blog1.jpg" alt="">
                                        <span class="overly"></span>
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <h4><a href="#"></a></h4>
                                    <p>Design</p>
                                </div>
                                <div class="blog-meta">
                                    <span class="date-type">
                                        <i class="fa fa-calendar"></i>2016-02-05 / 07:10:45
                                    </span>
                                    <span class="comments-type">
                                        <i class="fa fa-comment-o"></i>
                                        <a href="#">80 comments</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- single blog -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-blog">
                                <div class="single-blog-img">
                                    <a href="#">
                                        <img src="img/blog/blog2.jpg" alt="">
                                        <span class="overly"></span>
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <h4><a href="#"></a></h4>
                                    <p>Design</p>
                                </div>
                                <div class="blog-meta">
                                    <span class="date-type">
                                        <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                                    </span>
                                    <span class="comments-type">
                                        <i class="fa fa-comment-o"></i>
                                        <a href="#">130 comments</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- single blog -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-blog">
                                <div class="single-blog-img">
                                    <a href="#">
                                        <img src="img/blog/blog3.jpg" alt="">
                                        <span class="overly"></span>
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <h4><a href="#"></a></h4>
                                    <p>Design</p>
                                </div>
                                <div class="blog-meta">
                                    <span class="date-type">
                                        <i class="fa fa-calendar"></i>2016-04-07 / 08:10:18
                                    </span>
                                    <span class="comments-type">
                                        <i class="fa fa-comment-o"></i>
                                        <a href="#">30 comments</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- single blog -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-blog">
                                <div class="single-blog-img">
                                    <a href="#">
                                        <img src="img/blog/blog4.jpg" alt="">
                                        <span class="overly"></span>
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <h4><a href="#"></a></h4>
                                    <p>Design</p>
                                </div>
                                <div class="blog-meta">
                                    <span class="date-type">
                                        <i class="fa fa-calendar"></i>2016-04-07 / 08:10:18
                                    </span>
                                    <span class="comments-type">
                                        <i class="fa fa-comment-o"></i>
                                        <a href="#">30 comments</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- single blog -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-blog">
                                <div class="single-blog-img">
                                    <a href="#">
                                        <img src="img/blog/blog5.jpg" alt="">
                                        <span class="overly"></span>
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <h4><a href="#"></a></h4>
                                    <p>Design</p>
                                </div>
                                <div class="blog-meta">
                                    <span class="date-type">
                                        <i class="fa fa-calendar"></i>2016-04-07 / 08:10:18
                                    </span>
                                    <span class="comments-type">
                                        <i class="fa fa-comment-o"></i>
                                        <a href="#">30 comments</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- single blog -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-blog">
                                <div class="single-blog-img">
                                    <a href="#">
                                        <img src="img/blog/blog6.jpg" alt="">
                                        <span class="overly"></span>
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <h4><a href="#"></a></h4>
                                    <p>At work</p>
                                </div>
                                <div class="blog-meta">
                                    <span class="date-type">
                                        <i class="fa fa-calendar"></i>2016-04-07 / 08:10:18
                                    </span>
                                    <span class="comments-type">
                                        <i class="fa fa-comment-o"></i>
                                        <a href="#">30 comments</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- single blog -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Blog Ares -->
        <!-- Start contact Area -->
        <div id="contact" class="contact-area area-padding">
            <div class="head-overly"></div>
            <div class="container">
                <div class="row contact-inner">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="Cont-content">
                            <h4 class="intro-head">Contact us</h4>
                        </div>
                        <div class="map-zone">
                            <!-- Map area -->
                            <div class="map-area">
                            </div><!-- End Map area -->
                            <div class="contact-info">
                                <div class="contact-icons">
                                    <h3>Contact info</h3>
                                    <ul>
                                        <li>
                                            <i class="fa fa-map-marker"></i> <strong>Address</strong>
                                             Amrita School of Engineering, Amritapuri
                                        </li>
                                        <li>
                                            <i class="fa fa-mobile"></i> <strong>Phone</strong>
                                            +91854754323
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope"></i> <strong>Email</strong>
                                            <a href="#">admin@dreamhouse.com</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="icons-bottom text-center">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="contact-form">
                            <div class="Cont-content">
                                <h4 class="intro-head">Leave a massege</h4>
                            </div>
                            <div class="row contact-bg">
                                <form action="mail.php" method="post">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <input name="name" type="text" placeholder="Name (required)" />
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <input name="email" type="email" placeholder="Email (required)" />
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <input name="subject" type="text" placeholder="Subject" />
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                        <input type="submit" value="Submit Form" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End contact Area -->
            
        <!-- all js here -->
        <!-- jquery latest version -->
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Google Map js -->
        
        <!-- owl.carousel js -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- easing js -->
        <script src="js/easing.js"></script>
        <!-- jquery.appear js -->
        <script src="js/jquery.appear.js"></script>
        <!-- animated js -->
        <script src="js/animated.js"></script>
        <!-- Mixitup js -->
        <script src="js/jquery.mixitup.min.js"></script>
        <!-- wow js -->
        <script src="js/wow.min.js"></script>
        <!-- counter js -->
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/waypoints.js"></script>
        <!-- plugins js -->
        <script src="js/plugins.js"></script>
        <!-- main js -->
        <script src="js/main.js"></script>
    </body> 
    
</html>         