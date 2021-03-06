<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <title>Front-Project</title>
    <link rel="stylesheet" href="./assets/css/main.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">  -->
        <link rel="stylesheet" href="./assets/js/bootstrap.min.css">
        <script src="./assets/js/jquery-2.1.0.min.js"></script>
            
  
</head>

<body>
<script>
</script>

    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <a href="https://google.com" class="logo">
                            <img src="./assets/image/new/logo.png" alt="Softy Pinko"/>
                        </a>
                        <ul class="nav" >
                            <li><a href="#welcome" class="active">Home</a></li>
                            <li><a href="#features">About</a></li>
                            <li><a href="#work-process">Work Process</a></li>
                            <li><a href="#testimonials">Testimonials</a></li>
                            <li><a href="#pricing-plans">Pricing Tables</a></li>
                            <li><a href="#blog">Blog Entries</a></li>
                            <li><a href="#contact-us">Contact Us</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->

                    </nav>
                </div>
            </div>
        </div>
    </header>
    <script>
         $(document).ready(function(){
  $('ul li a').click(function(){
    $('li a').removeClass("active");
    $(this).addClass("active");
});
});
    </script>
    <script>
(function ($) {
	
    // "use strict";
	 mobileNav();
	// window.sr = new scrollReveal()
	 
	if($('.menu-trigger').length){
		$(".menu-trigger").on('click', function() {	
			$(this).toggleClass('.active');
			$('.header-area .nav').slideToggle(200);
		});
	}
	
	$(window).on('resize', function() {
		mobileNav();
	});
	function mobileNav() {
		var width = $(window).width();
		$('.menu-trigger  li a ').on('click', function() {
			if(width < 992) {
                // $('li a').removeClass("active");
                //  $(this).addClass("active");
			}
		});
   } 
})(jQuery);




// $(document).on("click", ".main-nav", function () {
//     $("#features").animate({
//         width: "-200px", 
//         height: '200px',
//         },
//         5000)
    
// });
 window.scroll({
  top: 2500, 
  left: 0, 
  behavior: 'smooth'
});

    </script>

    <!-- Welcome -->
                    <div class="welcome-area" id="welcome">
                        
                        <div class="header-text">
                            <div class="container">
                                <div class="row">
                                    <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12" style="margin: auto auto;">
                                        <h1>We provide the best <strong>strategy</strong><br>to grow up your <strong>business</strong></h1>
                                        <p class="p-main-main">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et repellat qui quod laboriosam, modi eos dolore magnam praesentium obcaecati neque.</p>
                                        <a href="#features" class="main-button-slider" target="_blank"  href="https://google.com">Discover More</a>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="div">
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#b342f5" fill-opacity="1" d="M0,224L48,202.7C96,181,192,139,288,138.7C384,139,480,181,576,197.3C672,213,768,203,864,181.3C960,160,1056,128,1152,138.7C1248,149,1344,203,1392,229.3L1440,256L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
                         -->
                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                            <path fill="#b26ed8" fill-opacity="1" d="M0,128L48,106.7C96,85,192,43,288,64C384,85,480,171,576,176C672,181,768,107,864,96C960,85,1056,139,1152,181.3C1248,224,1344,256,1392,272L1440,288L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
                          </svg>
                 </div>
     <!-- Features -->

<section class="section home-feature">
    <div class="container">
        <div class="row">
            <!-- <div class="col-lg-12" style="margin-top: -180px;">
                    <div class="mx-auto">
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="features-small-item">
                            <div class="icon">
                                <i><img src="./assets/image/5.png" alt="seo"></i>
                            </div>
                            <h5 class="feat ures-title">Modern Strategy</h5>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing vd</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="features-small-item">
                            <div class="icon">
                                <i><img src="./assets/image/5.png" alt="Seo"></i>
                            </div>
                            <h5 class="features-title">Best Relationship</h5>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing vd</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="features-small-item">
                            <div class="icon">
                                <i><img src="./assets/image/5.png" alt="seo"></i>
                            </div>
                            <h5 class="features-title">Ultimate Marketing</h5>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing vd</p>
                        </div>
                     </div>
                </div>
            </div> -->
            <div class="col-lg-12" style="margin-top: -180px;">
                <div class="row">
                    <div class=" col-lg-4 col-sm-12">
                        <div class="features-small-item">
                            <div class="icon">
                                <i><img src="./assets/image/5.png" alt="seo"></i>
                            </div>
                            <h5 class="features-title">Modern Strategy</h5>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing vd</p>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-sm-12 ">
                        <div class="features-small-item">
                            <div class="icon">
                                <i><img src="./assets/image/5.png" alt="seo"></i>
                            </div>
                            <h5 class="features-title">Modern Strategy</h5>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing vd</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 ">
                        <div class="features-small-item">
                            <div class="icon"> 
                                <i><img src="./assets/image/5.png" alt="seo"></i>
                            </div>
                            <h5 class="features-title">Modern Strategy</h5>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing vd</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section padding-top-70 pb-0" id="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12 align-self-center" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                <img src="./assets/image/2.png" class="rounded img-fluid d-block mx-auto" alt="SEO">
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
                <div class="left-heading">
                    <h2 class="section-title">Let’s discuss about you project</h2>
                </div>
                <div class="left-text">
                    <p>Nullam sit amet purus libero. Etiam ullamcorper nisl ut augue blandit, at finibus leo efficitur. Nam gravida purus non sapien auctor, ut aliquam magna ullamcorper.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="hr"></div>
            </div>
        </div>
    </div>
</section>

<section class="section padding-bottom-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-bottom-fix">
                <div class="left-heading">
                    <h2 class="section-title">We can help you to grow your business</h2>
                </div>
                <div class="left-text">
                    <p>Aenean pretium, ipsum et porttitor auctor, metus ipsum iaculis nisi, a bibendum lectus libero vitae urna. Sed id leo eu dolor luctus congue sed eget ipsum. Nunc nec luctus libero. Etiam quis dolor elit.</p>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5 col-md-12 col-sm-12 align-self-center mobile-bottom-fix-big" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                <img src="./assets/image/1.png" class="rounded img-fluid d-block mx-auto" alt="SEO">
            </div>
        </div>
    </div>
</section>

<section class="mini" id="work-process">
    <div class="mini-content">
        <div class="container">
            <div class="row">
                <div class="offset-lg-3 col-lg-6 mr-auto">
                    <div class="info">
                        <h1>Work Process</h1>
                        <p>Aenean nec tempor metus. Maecenas ligula dolor, commodo in imperdiet interdum, vehicula ut ex. Donec ante diam.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-sm-12">
                    <a href="#" class="mini-box">
                        <i><img src="assets/image/4.png" alt="seo"></i>
                        <strong>Sketch Up</strong>
                        <span>Lorem ipsum dolor sit amet.adr</span>
                    </a>
                </div>
                <div class="col-lg-2 col-sm-12">
                    <a href="#" class="mini-box">
                        <i><img src="assets/image/4.png" alt="seo"></i>
                        <strong>Sketch Up</strong>
                        <span>Lorem ipsum dolor sit amet.adr</span>
                    </a>
                </div>
                <div class="col-lg-2 col-sm-12">
                    <a href="#" class="mini-box">
                        <i><img src="assets/image/4.png" alt="seo"></i>
                        <strong>Sketch Up</strong>
                        <span>Lorem ipsum dolor sit amet.adr</span>
                    </a>
                </div>
                <div class="col-lg-2 col-sm-12">
                    <a href="#" class="mini-box">
                        <i><img src="assets/image/4.png" alt="seo"></i>
                        <strong>Sketch Up</strong>
                        <span>Lorem ipsum dolor sit amet.adr</span>
                    </a>
                </div>
                <div class="col-lg-2 col-sm-12">
                    <a href="#" class="mini-box">
                        <i><img src="assets/image/4.png" alt="seo"></i>
                        <strong style="text-decoration: none;">Sketch Up</strong>
                        <span style="text-decoration: none;">Lorem ipsum dolor sit amet.adr</span>
                    </a>
                </div>
                <div class="col-lg-2 col-sm-12">
                    <a href="#" class="mini-box">
                        <i><img src="assets/image/4.png" alt="seo"></i>
                        <strong>Sketch Up</strong>
                        <span>Lorem ipsum dolor sit amet.adr</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section" id="testimonials">
    <div class="container">
        <div class="row" style="text-align: center;">
            <div class="col-lg-12">
                <div class="center-heading">
                    <h2 class="section-title"> What do they say ?</h2>
                </div>
            </div>
            <div class="offset-lg-3 col-lg-6 mr-auto">
                <div class="center-text" style="text-align: center;">
                    <p>Donec tempus, sem non rutrum imperdiet, lectus orci fringilla nulla, at accumsan elit eros a turpis. Ut sagittis lectus libero.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <div class="team-item">
                    <div class="team-content">
                        <i><img src="./assets/image/4.png" alt=""></i>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum ullam cumque nostrum cum facilis autem ipsam ad earum illo. Soluta!</p>
                        <div class="user-image">
                            <img src="./assets/image/4.png" alt="">
                        </div>
                        <div class="team-info">
                            <h3 class="user-name">Shayan Kamandi</h3>
                            <span>Developer</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="team-item">
                    <div class="team-content">
                        <i><img src="./assets/image/4.png" alt=""></i>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum ullam cumque nostrum cum facilis autem ipsam ad earum illo. Soluta!</p>
                        <div class="user-image">
                            <img src="./assets/image/4.png" alt="">
                        </div>
                        <div class="team-info">
                            <h3 class="user-name"> Reza Ehsani</h3>
                            <span>Manager</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="team-item">
                    <div class="team-content">
                        <i><img src="./assets/image/4.png" alt=""></i>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum ullam cumque nostrum cum facilis autem ipsam ad earum illo. Soluta!</p>
                        <div class="user-image">
                            <img src="./assets/image/4.png" alt="">
                        </div>
                        <div class="team-info">
                            <h3 class="user-name">Ali Jafari</h3>
                            <span>Back-End</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

  <!-- ***** Pricing Plans Start ***** -->
  <section class="section colored" id="pricing-plans" style="background-color: #f2f2fe;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="center-heading">
                    <h2 class="section-title text-center">Pricing Plans</h2>
                </div>
            </div>
            <div class="offset-lg-3 col-lg-6 mx-auto" >
                <div class="center-text " style="text-align: center;">
                    <p>Donec vulputate urna sed rutrum venenatis. Cras consequat magna quis arcu elementum, quis congue risus volutpat.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- ***** Pricing Start ***** -->
            <div class="col-lg-4 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                <div class="pricing-item">
                    <div class="pricing-header">
                        <h3 class="pricing-title">Starter</h3>
                    </div>
                    <div class="pricing-body">
                        <div class="price-wrapper">
                            <span class="currency">$</span>
                            <span class="price">14.50</span>
                            <span class="period">monthly</span>
                        </div>
                        <ul class="list">
                            <li class="active">60 GB space</li>
                            <li class="active">60 GB space</li>
                            <li class="active">60 GB space</li>
                            <li>60 GB space</li>
                            <li>60 GB space</li>
                            <li>60 GB space</li>
                        </ul>
                    </div>
                    <div class="pricing-footer">
                        <a href="#" class="main-button">Purchase Now</a>
                    </div>
                </div>
            </div>
            <!-- ***** Pricing Start ***** -->
            <div class="col-lg-4 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                <div class="pricing-item active">
                    <div class="pricing-header">
                        <h3 class="pricing-title">Premium</h3>
                    </div>
                    <div class="pricing-body">
                        <div class="price-wrapper">
                            <span class="currency">$</span>
                            <span class="price">21.50</span>
                            <span class="period">monthly</span>
                        </div>
                        <ul class="list">
                            <li class="active">120 GB space</li>
                            <li class="active">120 GB space</li>
                            <li class="active">120 GB space</li>
                            <li class="active">120 GB space</li>
                            <li>120 GB space</li>
                            <li>120 GB space</li>
                        </ul>
                    </div>
                    <div class="pricing-footer">
                        <a href="#" class="main-button">Purchase Now</a>
                    </div>
                </div>
            </div>
            <!-- ***** Pricing Start ***** -->
            <div class="col-lg-4 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                <div class="pricing-item">
                    <div class="pricing-header">
                        <h3 class="pricing-title">Advanced</h3>
                    </div>
                    <div class="pricing-body">
                        <div class="price-wrapper">
                            <span class="currency">$</span>
                            <span class="price">42.00</span>
                            <span class="period">monthly</span>
                        </div>
                        <ul class="list">
                            <li class="active">250 GB space</li>
                            <li class="active">250 GB space</li>
                            <li class="active">250 GB space</li>
                            <li class="active">250 GB space</li>
                            <li class="active">250 GB space</li>
                            <li class="active">250 GB space</li>
                        </ul>
                    </div>
                    <div class="pricing-footer">
                        <a href="#" class="main-button">Purchase Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ***** Counter Parallax Start ***** -->
<section class="counter">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="count-item decoration-bottom">
                        <strong class="strong-counter" data-count="126">0</strong>
                        <span>Projects</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="count-item decoration-top">
                        <strong class="strong-counter" data-count="67">0</strong>
                        <span>Projects</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="count-item decoration-bottom">
                        <strong class="strong-counter" data-count="30">0</strong>
                        <span>Projects</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="count-item">
                        <strong class="strong-counter" data-count="100">0</strong>
                        <span>Projects</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- CONTER FOR NUMBER -->
    <script> 
        var a = 0;
$(window).scroll(function() {
  var oTop = $('.row').offset().top - window.innerHeight;
  if (a == 0 && $(window).scrollTop() > oTop) {
    $('.strong-counter').each(function() {
      var $this = $(this),
        countTo = $this.attr('data-count');
      $({
        countNum: $this.text()
      }).animate({
          countNum: countTo
        },
        {
          duration: 3000,
          easing: 'swing',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum);
          }
        });
    });
    a = 1;
  }
});
    </script>
    

<!-- ***** Blog Start ***** -->
<section class="section" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="center-heading">
                    <h2 class="section-title text-center">Blog Entries</h2>
                </div>
            </div>
            <div class="offset-lg-3 col-lg-6 mx-auto">
                <div class="center-text" style="text-align: center;">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, amet deserunt tempora veritatis harum ea!tempora veritats</p>
                </div>
            </div>
        </div>
        <!-- ***** Section Title End ***** -->

        <div class="row">
            <div class="col-lg-4  col-sm-12">
                <div class="blog-post-thumb">
                    <div class="img">
                        <img src="/assets/image/new/blog-item-01.png" alt="">
                    </div>
                    <div class="blog-content">
                        <h3>
                            <a href="blog.php" target="_blank" style="text-decoration: none;">Vivamus ac vehicula dui</a>
                        </h3>
                        <div class="text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, amet deserunt tempora veritatis harum ea!tempora veritats
                        </div>
                        <a href="http://localhost/front-project/blog.html" target="_blank"  style="text-decoration: none;" class="main-button">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="blog-post-thumb">
                    <div class="img">
                        <img src="/assets/image/new/blog-item-01.png" alt="">
                    </div>
                    <div class="blog-content">
                        <h3>
                            <a style="text-decoration: none;" target="_blank" href="blog.php">Phasellus convallis augue</a>
                        </h3>
                        <div class="text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, amet deserunt tempora veritatis harum ea!tempora veritats
                        </div>
                        <a href="http://localhost/front-project/blog.html" target="_blank" style="text-decoration: none;" class="main-button">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="blog-post-thumb">
                    <div class="img">
                        <img src="/assets/image/new/blog-item-01.png" alt="">
                    </div>
                    <div class="blog-content">
                        <h3>
                            <a style="text-decoration: none;" href="http://localhost/front-project/blog.html">Nam gravida purus non</a>
                        </h3>
                        <div class="text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, amet deserunt tempora veritatis harum ea!tempora veritats
                        </div>
                        <a href="http://localhost/front-project/#welcome" target="_blank" style="text-decoration: none;" class="main-button">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ***** Contact Us Start ***** -->
<section class="section colored" id="contact-us" style="background-color:#f2f2fe;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="center-heading">
                    <h2 class="section-title text-center">Talk To Us</h2>
                </div>
            </div>
            <div class="offset-lg-3 col-lg-6 mx-auto">
                <div class="center-text"  style="text-align: center;">
                    <p>Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-6 col-sm-12">
                <div class="contact-form">
                    <form id="contact" action=" register-form.php" method="post">
                      <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                          <fieldset>
                            <input name="name" type="text" class="form-control text-left" id="name" placeholder="Full Name" required="">
                          </fieldset>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                          <fieldset>
                            <input name="email" type="email" class="form-control text-left" id="email" placeholder="E-Mail Address" required="">
                          </fieldset>
                        </div>
                          <div class="col-lg-6 col-md-12 col-sm-12">
                              <fieldset>
                                  <input name="number" type="tel" class="form-control text-left" id="number" placeholder="+989361570108" required="" >
                                  </fieldset>
                          </div>
                        <div class="col-lg-12">
                          <fieldset>
                            <textarea name="message" rows="6" class="form-control text-left" id="message" placeholder="Your Message" required=""></textarea>
                          </fieldset>
                        </div>
                        <div class="col-lg-12">
                          <fieldset>
                            <button type="submit" name="sub" id="form-submit" class="main-button" style="float:left">Send Message</button>
                          </fieldset>
                        </div>
                      </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <h5 class="margin-bottom-30 text-left ">Keep in touch</h5>
                <div class="contact-text text-left">
                    <p>110-220 Quisque diam odio, maximus ac consectetur eu, 10260
                    <br>auctor non lorem</p>
                    <p>You are NOT allowed to re-distribute Softy Pinko template on any template collection websites. Thank you.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <ul class="social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p class="copyright">Copyright &copy;Shayan Kamandi 2021</p>
            </div>
        </div>
    </div>
</footer>


<!-- <script src="./assets/js/toggle.js"></script> -->
<script src="./assets/js/jquery-2.1.0.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> 
<script src="./assets/js/popper.js"></script>

<script src="./assets/js/bootstrap.min.js"></script>

<!-- <script src="./assets/js/custom.js"></script> -->

<script src="./assets/js/jquery.counterup.min.js"></script>

<script src="./assets/js/waypoints.min.js"></script>

<script src="./assets/js/scrollreveal.min.js"></script>

<script src="./assets/js/imgfix.min.js"></script>

