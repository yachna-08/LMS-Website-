
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
	 <!-- Link Swiper's CSS -->
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>

<!-- CSS -->
<link rel="stylesheet" href="css copy/styles.css">
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
                        <a href="#portfolio">Courses</a>
                    </li>
                    <li>
                        <a href="Signin.php">Helpdesk</a>
                    </li>
					
                    <li>
                        <a href="#contact">Welcome </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
    <style>
    
    	.navbar-default {
    		background-color: #0e2e47;
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
    		color: #42a5f6;
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
    		color:#42a5f6;
    	}
    	
    	.navbar-default .navbar-nav>li>a {
    		color: #fff;
    		font-size: 15px;
    		font-family: 'Noto Sans', sans-serif;
    		text-transform: uppercase;
    		letter-spacing: 1px;
    	}
    	
    	.navbar-default .navbar-nav>li>a:hover {
    		color: #42a5f6;
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
	<section class="swiper mySwiper">

<div class="swiper-wrapper">

  <div class="card swiper-slide">
	<div class="card__image">
	  <img src="images/user1.jpg" alt="card image">
	</div>

	<div class="card__content">
	  <span class="card__title">Web Designer</span>
	  <span class="card__name">Vanessa Martinez</span>
	  <p class="card__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit veritatis labore provident non tempora odio est sunt, ipsum</p>
	  <button class="card__btn">View More</button>
	</div>
  </div>
  <div class="card swiper-slide">
	<div class="card__image">
	  <img src="images/user1.jpg" alt="card image">
	</div>

	<div class="card__content">
	  <span class="card__title">Web Designer</span>
	  <span class="card__name">Vanessa Martinez</span>
	  <p class="card__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit veritatis labore provident non tempora odio est sunt, ipsum</p>
	  <button class="card__btn">View More</button>
	</div>
  </div>

  <div class="card swiper-slide">
	<div class="card__image">
	  <img src="images/user2.jpg" alt="card image">
	</div>

	<div class="card__content">
	  <span class="card__title">Ui Designer</span>
	  <span class="card__name">Sarah Bowen</span>
	  <p class="card__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit veritatis labore provident non tempora odio est sunt, ipsum</p>
	  <button class="card__btn">View More</button>
	</div>
  </div>
  <div class="card swiper-slide">
	<div class="card__image">
	  <img src="images/user2.jpg" alt="card image">
	</div>

	<div class="card__content">
	  <span class="card__title">Ui Designer</span>
	  <span class="card__name">Sarah Bowen</span>
	  <p class="card__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit veritatis labore provident non tempora odio est sunt, ipsum</p>
	  <button class="card__btn">View More</button>
	</div>
  </div>

  <div class="card swiper-slide">
	<div class="card__image">
	  <img src="images/user3.jpg" alt="card image">
	</div>

	<div class="card__content">
	  <span class="card__title">Web Developer</span>
	  <span class="card__name">David Murphy</span>
	  <p class="card__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit veritatis labore provident non tempora odio est sunt, ipsum</p>
	  <button class="card__btn">View More</button>
	</div>
  </div>
  <div class="card swiper-slide">
	<div class="card__image">
	  <img src="images/user3.jpg" alt="card image">
	</div>

	<div class="card__content">
	  <span class="card__title">Web Developer</span>
	  <span class="card__name">David Murphy</span>
	  <p class="card__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit veritatis labore provident non tempora odio est sunt, ipsum</p>
	  <button class="card__btn">View More</button>
	</div>
  </div>

  <div class="card swiper-slide">
	<div class="card__image">
	  <img src="images/user4.jpg" alt="card image">
	</div>

	<div class="card__content">
	  <span class="card__title">Mobile Designer</span>
	  <span class="card__name">Kelsey West</span>
	  <p class="card__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit veritatis labore provident non tempora odio est sunt, ipsum</p>
	  <button class="card__btn">View More</button>
	</div>
  </div>
  <div class="card swiper-slide">
	<div class="card__image">
	  <img src="images/user4.jpg" alt="card image">
	</div>

	<div class="card__content">
	  <span class="card__title">Mobile Designer</span>
	  <span class="card__name">Kelsey West</span>
	  <p class="card__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit veritatis labore provident non tempora odio est sunt, ipsum</p>
	  <button class="card__btn">View More</button>
	</div>
  </div>

</div>
</section>


<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
var swiper = new Swiper(".mySwiper", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  coverflowEffect: {
	rotate: 0,
	stretch: 0,
	depth: 300,
	modifier: 1,
	slideShadows: false,
  },
  pagination: {
	el: ".swiper-pagination",
  },
});
</script>
</body>
</html>