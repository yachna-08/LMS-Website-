<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Homepage</title>

	<link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
    
	<link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Hammersmith+One' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=NTR' rel='stylesheet' type='text/css'>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">LMS<span>Website</span></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#mainCarousel">Home</a>
                    </li>
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="#portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a href="Signin.php">LOGIN</a>
                    </li>
					
                    <li>
                        <a href="#contact">Contact Us</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
    <style>
    
    	.navbar-default {
    		background-color: transparent;
    		border-color: transparent;
    		-webkit-transition: all 0.5s ease 0s;
  			-o-transition: all 0.5s ease 0s;
  			transition: all 0.5s ease 0s;
    	}
    	
    	.navbar-nav { 
    		margin-top: 40px;
    		float: right;
    	}
    	
    	@media screen and (max-width: 767px) {
    	.navbar-nav {
    		float: none;
    		text-align: center;
    		background: rgba(235, 236, 241, 0.5);
    	}
    	}
    	
    	.navbar-default .navbar-brand {
    		margin-top: 40px;
    		font-size: 28px;
    		font-family: 'Righteous', cursive;
    		color: #fff;
    		letter-spacing: 1px;
    		-moz-transition:color .5s ease-in;
   			-o-transition:color .5s ease-in;
    		-webkit-transition:color .5s ease-in;
    	}
    	
    	.navbar-default .navbar-brand span {
    		color: #0e2e47;
    		-moz-transition:color .5s ease-in;
   			-o-transition:color .5s ease-in;
    		-webkit-transition:color .5s ease-in;
    	}
    	
    	@media screen and (max-width: 400px) {
    	.navbar-default .navbar-brand {
    		font-size: 22px;
    	}
    	}
    	
    	.navbar-default .navbar-brand:hover, .navbar-default .navbar-brand span:hover {
    		color: #0e2e47;
    	}
    	
    	.navbar-default .navbar-nav>li>a {
    		color: #fff;
    		font-size: 15px;
    		font-family: 'Noto Sans', sans-serif;
    		text-transform: uppercase;
    		letter-spacing: 1px;
    	}
    	
    	.navbar-default .navbar-nav>li>a:hover {
    		color: #0e2e47;
    	}
    	
    	.navbar-default .navbar-nav>li>a:focus {
    		color: #42a5f6;
    	}
    	
    	.navbar-default .navbar-toggle {
    		margin-top: 40px;
    		border: none;
    	}
    	
		.navbar-default .navbar-toggle:focus, .navbar-default .navbar-toggle:hover {
			background: none;
		}
    	
    	.navbar-default .navbar-toggle .icon-bar {
    		height: 4px;
    		width: 28px;
    		background: #42a5f6;
		}
    	
    	.navbar-default.shrink {
    		background:rgba(132, 141, 169, 0.8)
		}
		
		.navbar-default.shrink .navbar-nav {
			margin-top: 20px;
			margin-bottom: 10px;
		}
		
		.navbar-default.shrink .navbar-brand {
			margin-top: 20px;
		}
		
		.navbar-default.shrink .navbar-toggle {
			margin-top: 25px;
		}

    
    </style>

    <!-- Full Page Image Background Carousel Header -->
    <header id="mainCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#mainCarousel" data-slide-to="1"></li>
            <li data-target="#mainCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
            <div class="slider_overlay"></div>
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('images/pexels-julia-m-cameron-4144294.jpg');">
                    <div class="hero">
                        <hgroup>
                            <h1>Hi, welcome to this LMS Website</h1>
                            <h3>Get started below to create a great future ahead</h3>
                        </hgroup>
                        <button class="btn btn-hero btn-lg" role="button" style="color: #fff;">Explore</button>
                    </div>
                </div>
            </div>
            <div class="item">

            <div class="slider_overlay"></div>
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('images/pexels-august-de-richelieu-4260481.jpg');">
                    <div class="hero">
                        <hgroup>
                            <h1>Get Set Ready GO!</h1>
                            <h3>We are here to guide you 😉</h3>
							<button class="btn btn-hero btn-lg" role="button" style="color: #fff;">Explore</button>
                        </hgroup>
                    </div>
                </div>
            </div>
            <div class="item">    
            <div class="slider_overlay"></div>
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('images/pexels-andrea-piacquadio-3776180.jpg');">
                    <div class="hero">
                        <hgroup>
                            <h1>Lets! Look into the courses</h1>
							<button class="btn btn-hero btn-lg" role="button" style="color: #fff;">Explore</button>
                        </hgroup>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#mainCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#mainCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>
    
    <div id="about">
    	<div class="container">
    		<div class="text">
    			<h2>About Us</h2>
    			<hr>
    			<p>Businesses and entrepreneurs should not assume that an online training platform costs thousands of dollars in license fees. There are free options, like MasterStudy LMS, a WordPress online training plugin.
					we are one of the them who provide free pathways to learners.
					</p>
			</div>

        <div class="col-md-6">
            <!-- begin panel group -->
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                
                <!-- panel 1 -->
                <div class="panel panel-default">
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab1" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingOne"data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h4 class="panel-title">Responsive Design</h4>
                        </div>
                    </span>
                    
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                        <!-- Tab content goes here -->
                        <p>Responsive Web design is the approach that suggests that design and development should respond to the user’s behavior and environment based on screen size, platform and orientation.</p>
                        <p>But responsive Web design is not only about adjustable screen resolutions and automatically resizable images, but rather about a whole new way of thinking about design. Let’s talk about all of these features, plus additional ideas in the making.</p>
                        </div>
                    </div>
                </div> 
                <!-- / panel 1 -->
                
                <!-- panel 2 -->
                <div class="panel panel-default">
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab2" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <h4 class="panel-title collapsed">Efficient Code</h4>
                        </div>
                    </span>

                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                        <!-- Tab content goes here -->
                        <p>Code efficiency plays a significant role in applications in a high-execution-speed environment where performance and scalability are paramount.
</p>
                        <p>One of the recommended best practices in coding is to ensure good code efficiency. Well-developed programming codes should be able to handle complex algorithms.</p>
                        </div>
                    </div>
                </div>
                <!-- / panel 2 -->
                
                <!--  panel 3 -->
                <div class="panel panel-default">
                    <!--wrap panel heading in span to trigger image change as well as collapse -->
                    <span class="side-tab" data-target="#tab3" data-toggle="tab" role="tab" aria-expanded="false">
                        <div class="panel-heading" role="tab" id="headingThree"  class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <h4 class="panel-title">24 Hour Support</h4>
                        </div>
                    </span>

                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                          <div class="panel-body">
                          <!-- tab content goes here -->
						  <p>We are available 24*7 for you. If any guidence is required you can contact us.</p>
						</div>
                        </div>
                      </div>
            	</div>
             </div> 
             
   	 		 <div class="col-md-6">
    			<div id="carousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
					<ol class="carousel-indicators">
			  			<li data-target="#carousel" data-slide-to="0" class="active"></li>
			    		<li data-target="#carousel" data-slide-to="1"></li>
			    		<li data-target="#carousel" data-slide-to="2"></li>
			    		<li data-target="#carousel" data-slide-to="3"></li>
			    		<li data-target="#carousel" data-slide-to="4"></li>
					</ol>
					<!-- Wrapper for slides -->
					<div class="carousel-inner">
			    		<div class="item active">
			    			<img src="images/free to use.jpg" alt="First slide">
			    		</div>
			    		<div class="item">
			    			<img src="images/join us.jpg" alt="Second slide">
			    		</div>
			    		<div class="item">
			    			<img src="images/Free of cost roadmaps scratch to advance.jpg" alt="Third slide">
			    		</div>
			    		<div class="item">
			    			<img src="images/mentors.jpg" alt="Third slide">
			    		</div>
			    		<div class="item">
			    			<img src="images/go.jpg" alt="Third slide">
			    		</div>
					</div>
				</div>
			</div>
             
        </div>
    </div>
    
    
    <div id="portfolio">
    	<div class="container">
    		<h2>Our Portfolio</h2>
    		<p>We are here to guide you to pursuing the many courses through which you can easily enhance your skills. LMS Website is one of the website which provide many courses in free of cost and many pathways in free  for learning.</p>
      			<div class="portfolioFilter">  
        			<ul class="Portfolio-nav wow fadeIn delay-02s">
        				<li><a href="#" data-filter="*" class="current" >All</a></li>
            			<li><a href="#" data-filter=".webdesign" >Java / App development</a></li>
            			<li><a href="#" data-filter=".appdevelopment" >Web design / Java</a></li>
            			<li><a href="#" data-filter=".graphicdesign" >Devops / Software Testing</a></li>
        			</ul>
       			</div> 
    	</div>
    	
       		<div class="portfolioContainer">
            	<div class=" Portfolio-box appdevelopment">
                	<a href="#"><img src="images/Website-Design-new.jpeg" alt=""></a>	
                </div>
                <div class="Portfolio-box webdesign">
                	<a href="#"><img src="images/85390-java-language-text-programming-logo-programmer.png" alt=""></a>	
                </div>
                <div class=" Portfolio-box appdevelopment">
                	<a href="#"><img src="images/Java-Syntax-tv.webp" alt=""></a>	
                </div>
                <div class=" Portfolio-box webdesign" >
                	<a href="#"><img src="images/mobile-application-development-guidelines-riseuplabs.webp" alt=""></a>	
                </div>
                <div class=" Portfolio-box graphicdesign">
                	<a href="#"><img src="images/7602.1513404277.png" alt=""></a>	
                </div>
                <div class=" Portfolio-box graphicdesign">
                	<a href="#"><img src="images/software-testing.jpg" alt=""></a>	
                </div>
    		</div>
    	
    </div>
    <hr>
    <div id="contact">
    	<div class="container">
    		<h2>Contact Us</h2>  
    		<p>Contact us for any query.</p>
    		<div class="col-md-6">
    			<div class="contact-form">
					<form action="#" method="post">
						<input id="name" name="name" type="text" placeholder="Name:" required>
						<input id="email" name="email" type="text" placeholder="Email:" required>
						<input id="subject" name="subject" type="subject" placeholder="Subject:" required>
						<textarea id="message" name="message" placeholder="Your Message:" rows="5" required></textarea>
						<br>
						<button name="submit" id="submit" type="submit">Send Message</button>
					</form>
				</div>  
			</div>	
			
    	</div>
    	
		<iframe width="100%;" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="pointer-events: none; margin-top: 30px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.281992959266!2d-0.1302576842043993!3d51.5080423184772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604ce3941eb1f%3A0x1a5342fdf089c627!2sTrafalgar+Square!5e0!3m2!1sen!2suk!4v1462913556349"></iframe>
		
    </div>
    
    
    <div id="subscribe">
    	<div class="container">
    	    <h2>Subscribe To our newsletter</h2>
    	    <p>Subscribe to us for more courses. </p>
			<div class="col-md-8 col-md-offset-2">
             	<form action="#">
              		<div class="input-group">
                 		<input class="btn btn-lg" name="email" id="email" type="email" placeholder="Enter your email address" required>
                 		<button class="btn btn-info btn-lg" type="submit">Submit</button>
             		 </div>
            	</form>
			</div>  
    	</div>
    </div>
    
	<div class="footer">
  		<div class="container">
   			<p class="text-muted">Copyright 2023 | All Rights Reserved.</p>
  		</div>
	</div>



    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
    <script src="js/jquery.isotope.js"></script>
    
    <script src="js/jquery.scrollUp.min.js"></script>
    
    
	<script type="text/javascript">
	
	$('a[href^="#"]').on('click', function(event) {
    	var target = $(this.getAttribute('href'));
    	if( target.length ) {
       		event.preventDefault();
        	$('html, body').stop().animate({
            	scrollTop: target.offset().top
        	}, 1000);
    	}
	});

	</script>
    <!--LOGIN page validation-->
	function validateform()
	{
		
	}
    
    <!-- Navbar Change on Scroll -->
	<script type="text/javascript">
		$(function(){
 		var shrinkHeader = 100;
  		$(window).scroll(function() {
    		var scroll = getCurrentScroll();
      		if ( scroll >= shrinkHeader ) {
           		$('.navbar-default').addClass('shrink');
        	}
       		else {
            	$('.navbar-default').removeClass('shrink');
        	}
  		});
		function getCurrentScroll() {
    		return window.pageYOffset || document.documentElement.scrollTop;
    	}
	});

	</script>    


	<!-- Portfolio Isotope Settings -->
	<script type="text/javascript">

	$(window).load(function(){
  
  
 	 var $container = $('.portfolioContainer'),
     	$body = $('body'),
     	colW = 375,
      	columns = null;

  
  	$container.isotope({
    // disable window resizing
    	resizable: true,
   	 	masonry: {
        columnWidth: colW
    	}
  	});
  
  	$(window).smartresize(function(){
    // check if columns has changed
    	var currentColumns = Math.floor( ( $body.width() -30 ) / colW );
    	if ( currentColumns !== columns ) {
      	// set new column count
      	columns = currentColumns;
      	// apply width to container manually, then trigger relayout
      	$container.width( columns * colW )
        	.isotope('reLayout');
    	}
    
  	}).smartresize(); // trigger resize to set container width
  	$('.portfolioFilter a').click(function(){
        	$('.portfolioFilter .current').removeClass('current');
        	$(this).addClass('current');
 
        	var selector = $(this).attr('data-filter');
        	$container.isotope({
			
            filter: selector,
         });
        	 return false;
   	 	});
  
	});

	</script>
	
	
	<!-- Scroll To Top Settings -->
    <script type="text/javascript">
    
    $(function () {
  		$.scrollUp({
    		scrollName: 'scrollUp', // Element ID
    		topDistance: '300', // Distance from top before showing element (px)
    		topSpeed: 600, // Speed back to top (ms)
    		animation: 'fade', // Fade, slide, none
    		animationInSpeed: 200, // Animation in speed (ms)
    		animationOutSpeed: 200, // Animation out speed (ms)
    		activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
    		scrollImg: true,
  		});
	});
    
    </script>

	
</body>

</html>
