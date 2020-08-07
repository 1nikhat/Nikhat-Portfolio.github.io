<?php
    $message_sent = false;
    if(isset($_POST['submit'])){
            if(isset($_POST['email']) && $_POST['email'] != ''){
                //submit the form
                if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
                {
                    $username = $_POST['name'];
                    $useremail = $_POST['email'];
                    $usersubject = $_POST['subject'];
                    $usermsg = $_POST['message'];

                   //s echo $useremail;
                    $to = "nikhat.parvin013@gmail.com";
                    $body = "User Name : ".$username."\r\n".
                            "Email: ".$useremail."\r\n".
                            "Message: ".$usermsg."\r\n";
                    $email_from = '1nikhatparvin@gmail.com';
                    $headers = "From :$email_from.\r\n";
                    //echo $body;
                    if(mail($to,$usersubject,$body,$headers))
                    {
                        $message_sent = true;
                        echo "Thank You...! Email successfully sent to $to ....";
                        header("location:index.php");
                        

                    }
                    else{
                         echo "Not Sending Mail...";
                    }


                     /*
                    $email_from = 'nikhat.parvin013@gmail.com';
                    $email_subject = "New form submission";
                    $email_body = "User Name: $username.\n".
                                  "User Email: $useremail.\n".
                                  "User subj: $usersubject.\n".
                                  "User msg: $usermsg.\n";
                    $to = "1nikhatparvin@gmail.com";
                    $headers = "From :$email_from.\r\n";
                    $headers = "Reply-To :$useremail.\r\n";
                    mail($to, $email_body, $email_subject,$headers);
                    header("location : index.php");*/

                }     
            } 
    }
    
?>
<!doctype html>

<html lang="en">
<head>
	<!-- Required meta tags -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" >
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
        <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/tooplate-style.css">
    
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/slick.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
	<title>MyPortFolio</title>
        <script
            src="https://code.jquery.com/jquery-3.5.1.js">
         </script>
         
         
        
</head>
<body>
    
    <script> 
            function fun(){ 
                document.getElementById('name').value=''; 
                document.getElementById('email').value=''; 
                document.getElementById('subject').value='';
                document.getElementById('message').value='';
            } 
    </script> 
    <!-- PRE LOADER 
<div class="preloader">
     <div class="spinner">
          <span class="sk-inner-circle"></span>
     </div>
</div>

<!-- MENU -->
<div class="navbar custom-navbar navbar-fixed-top" role="navigation">
     <div class="container">


          <header>
        <div class="menu-toggle" id="hamburger">
            <i class="fas fa-bars"></i>
        </div>
        <div class="overlay"></div>
        <div class="container1">
            <nav>
                <h1 class="brand"><a href="index.html">N<span>i</span>kki</a></h1>
                <ul class="nav navbar-nav navbar-right" id="menu">
                    <li><a href="#home" class="smoothScroll">Home</a></li>
                    <li><a href="#sec2" class="smoothScroll">About Me</a></li>
                    <li><a href="#sec3" class="smoothScroll">Skills</a></li>  
                    <li><a href="#sec4" class="smoothScroll">Projects</a></li>
                    <li><a href="#sec5" class="smoothScroll">Achievements</a></li>
                    <li><a href="#sec6" class="smoothScroll">Contact</a></li>
                </ul>
            </nav>
        </div>
</header>
     </div>
</div>

<!-- HOME -->
<section id="home" class="parallax-section">
     <div class="overlay contents"></div>
     <div class="container">
          <div class="row">

               <div class="col-md-8 col-sm-12">
                    <div class="home-text">
                         <div class="top-banner__text">
				<div class="top-banner__text-up">
                                    <span class="brand-span "><h2>Hello! I'm</h2></span><br>
                                          <h1>NIKHAT PARVIN</h1>  
                  
				</div>
				<div class="top-banner__text-down">
					
                                    <span class="brand-span"><h2>Welcome To Visiting My WebSite</h2></span>
				</div>
				
				
			</div>
                         <ul class="section-btn">
                             <li>
                              <a href="pdf_file/cv.pdf" class="smoothScroll"><span data-hover="Download CV">Download CV</span></a>
                             </li>
                         </ul>
                        <a class="box1" href="#sec6">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a> 
                        
                    </div>
               </div>

          </div>
     </div>

     <!-- Video -->
     <video controls autoplay loop muted>
          <source src="videos/video.mp4" type="video/mp4">
          Your browser does not support the video tag.
     </video>
</section>


<!-- ABOUT -->

	<!-- About me -->
	<section class="fh5co-about-me" id="sec2">
		<div class="about-me-inner site-container">
			<article class="portfolio-wrapper">
				<div class="portfolio__img">
					<img src="./images/dp.jpg" class="about-me__profile" alt="about me profile picture">
				</div>
				<div class="portfolio__bottom">
					<div class="portfolio__name">
						<span>N</span>
						<h2 class="universal-h2">ikhat Parvin</h2>
					</div>
					<p>Looking For The Good Opportunity</p>
				</div>
			</article>
			<div class="about-me__text">
				<div class="about-me-slider">
					<div class="about-me-single-slide">
						<h2 class="universal-h2 universal-h2-bckg">About me</h2>
                                                
                                                <p><span>Dedicated</span> to learning additional technologies and coding languages (currently enrolled in a Machine Learning course)</p>
                                                
                                                
                                                
						<h4>PASSIONATE</h4>
						<p class="p-white">See me</p>
					</div>
					<div class="about-me-single-slide">
						<h2 class="universal-h2 universal-h2-bckg">About me 2</h2>
						<p><span>I</span>follow this motto that "Nothing is impossible". And so I'm basically confident in front of whatever challenge is put before me. Looking for entry level opportunities in the IT industry   .
						<h4></h4>
						<p class="p-white">See me</p>
					</div>
				</div>
			</div>
		</div>
		<div class="about-me-bckg"></div>
	</section>

	
                               
         <!-- starting circular progress bar -->
         <section id="sec3">  
             
         <div class="body1">
             
             <div class="containers">
                 
                 <div class="card">
                     <div class="box">
                         <div class="percent">
                             <svg>
                             <circle cx="70" cy="70" r="70"></circle>
                             <circle cx="70" cy="70" r="70"></circle>
                             </svg>
                             <div class="number">
                                 <h2>80<span>%</span></h2>
                                 
                             </div>
                         </div>
                         <h2 class="text">HTML5</h2>  
                     </div>   
                 </div>
                 
                 <div class="card">
                     <div class="box">
                         <div class="percent">
                             <svg>
                             <circle cx="70" cy="70" r="70"></circle>
                             <circle cx="70" cy="70" r="70"></circle>
                             </svg>
                             <div class="number">
                                 <h2>75<span>%</span></h2>
                                 
                             </div>
                         </div>
                         <h2 class="text">CSS3</h2>  
                     </div>   
                 </div>
                 
                 <div class="card">
                     <div class="box">
                         <div class="percent">
                             <svg>
                             <circle cx="70" cy="70" r="70"></circle>
                             <circle cx="70" cy="70" r="70"></circle>
                             </svg>
                             <div class="number">
                                 <h2>70<span>%</span></h2>
                                 
                             </div>
                         </div>
                         <h2 class="text">PHP</h2>  
                     </div>   
                 </div>
                 
                 <div class="card">
                     <div class="box">
                         <div class="percent">
                             <svg>
                             <circle cx="70" cy="70" r="70"></circle>
                             <circle cx="70" cy="70" r="70"></circle>
                             </svg>
                             <div class="number">
                                 <h2>60<span>%</span></h2>
                                 
                             </div>
                         </div>
                         <h2 class="text">Data Science</h2>  
                     </div>   
                 </div>
                 
                 <div class="card">
                     <div class="box">
                         <div class="percent">
                             <svg>
                             <circle cx="70" cy="70" r="70"></circle>
                             <circle cx="70" cy="70" r="70"></circle>
                             </svg>
                             <div class="number">
                                 <h2>72<span>%</span></h2>
                                 
                             </div>
                         </div>
                         <h2 class="text">Python</h2>  
                     </div>   
                 </div>
                 
                 <div class="card">
                     <div class="box">
                         <div class="percent">
                             <svg>
                             <circle cx="70" cy="70" r="70"></circle>
                             <circle cx="70" cy="70" r="70"></circle>
                             </svg>
                             <div class="number">
                                 <h2>65<span>%</span></h2>
                                 
                             </div>
                         </div>
                         <h2 class="text">Angular</h2>  
                     </div>   
                 </div>
                 
             </div>
         </div>
         </section>         
         
    
         <!-- ending progress bar -->
         <!-- starting animation page -->
         <section class="animation_body" id="sec4">
             <div class="leftbox">
                 
                 <div class="content">
                     <h2>PROJECTS &  EXPERIENCE</h2>
                     <P>I have done 2 Months of Internship From Spark Hack Foundation</P>
                 </div>
             </div>
                 <div class="events">
                     <ul class="proejects">
                         <li> 
                            <div class="time">
                                <h2>FEB<br><span>2018</span></h2>

                            </div>
                             <div class="details">
                                 <h3>COMPLETELY AUTOMATED WATER DISPENSER TANK</h3>
                                 <p>This IOT based project was designed to help the public save water.
                                    
                                    </p>
                                    <a href="#">View More</a>
                             </div>
                             <div style="clear: both;"></div>
                         </li>    
                         <li> 
                            <div class="time">
                                <h2>SEPT<br><span>2018</span></h2>

                            </div>
                             <div class="details">
                                 <h3>ONLINE ANTIQUE SHOPPING WEBSITE</h3>
                                 <p>The aim of this project is on the online shopping applicationit is developed using Core JAVA, Database
                                     
                                    </p>
                                    <a href="#">View More</a>
                             </div>
                             <div style="clear: both;"></div>
                         </li>    
                         <li> 
                            <div class="time">
                                <h2>JUL<br><span>2019</span></h2>

                            </div>
                             <div class="details">
                                 <h3>E-COMMERC WEBSITE</h3>
                                 <p>Both the front-end and back-endof an e-commerce websitewas designed using HTML5, CSS3, BOOTSTRAP, SQL, PHP.
                                    
                                    </p>
                                    <a href="#">View More</a>
                             </div>
                             <div style="clear: both;"></div>
                         </li>    
                         <li> 
                            <div class="time">
                                <h2>DEC<br><span>2019</span></h2>

                            </div>
                             <div class="details">
                                 <h3>SCRIBE (BLOG WRITING WEBSITE)</h3>
                                 <p>The aim of this project is on the online Blog Writing applicationit is developed using ANGULAR and FIREBAS.
                                    
                                    </p>
                                    <a href="#">View More</a>
                             </div>
                             <div style="clear: both;"></div>
                         </li>    
                     </ul>
                     
                 
                 
             </div>
             
         </section>
         <!-- ending animation page -->
	

	<!-- Quotes -->
	<section class="fh5co-quotes" id="sec5">
		<div class="site-container">
			<div class="about-me-slider">
				<div>
					<h2 class="universal-h2 universal-h2-bckg">Extra Curricular &  Achievements</h2>
					<p>Secured Third position in Spark-Hack (innovative project) competition in Jadavpur University tech-fest organized by EE department in 2018.</p>
					<img src="./images/quotes.svg" alt="quotes svg">
					<h4>Spark-Hack Competition(innovative project)</h4>
					<p>2018</p>
				</div>
				<div>
					<h2 class="universal-h2 universal-h2-bckg">Extra Curricular &  Achievements</h2>
                                        <p>Was among the top 10 teams in Innovation Competition in Health Hack in 2018.</p>
                                        <img src="./images/quotes.svg" alt="quotes svg">
					<h4>Health Hack Competition(innovative project)</h4>
					<p>2018</p>
				</div>
			</div>
		</div>
	</section>
	<!-- Quotes end -->

	<!-- Social -->
        <section class="fh5co-social">
		<div class="site-container">
			<div class="social">
				<h5>Follow me!!</h5>
				<div class="middle">
                                    <a class="btn" id="facebook" href="https://www.facebook.com/nikhat.parvin.12139">
                                          <i class="fab fa-facebook-f"></i>
                                        </a>
                                    <a class="btn" id="twitter" href="https://twitter.com/parvin_nikhat">
                                          <i class="fab fa-twitter"></i>
                                        </a>
                                    <a class="btn" id="google" href="1nikhatparvin@gmail.com">
                                          <i class="fab fa-google"></i>
                                        </a>
                                    <a class="btn" id="linkedin" href="https://www.linkedin.com/in/nikhat-parvin-8aa676150/">
                                          <i class="fab fa-linkedin"></i>
                                        </a>
                                    <a class="btn" id="youtube" href="#">
                                          <i class="fab fa-youtube"></i>
                                        </a>
                                </div>
				<h5>Share it!</h5>
			</div>
		</div>
	</section>
	<!-- Social -->

	<!-- Footer -->
        <footer class="site-footer" id="sec6">
		<div class="site-container">
			<div class="footer-inner">
				<div class="footer-info">
					<div class="footer-info__left">
						<img src="./images/dp2.jpg" alt="about me image">
						<p>Read more about me</p>
					</div>
					<div class="footer-info__right">
						<h5>Get In Touch</h5>
						<p class="footer-phone">Phone: +919123013848</p>
						<p>Email : 1nikhatparvin@gmail.com</p>
						<div class="social-icons">
							<a href="#" target="_blank"><img src="./images/social-twitter.png" alt="social icon"></a>
							<a href="#" target="_blank"><img src="./images/social-pinterest.png" alt="social icon"></a>
							<a href="#" target="_blank"><img src="./images/social-youtube.png" alt="social icon"></a>
							<a href="#" target="_blank"><img src="./images/social-twitter.png" alt="social icon"></a>
						</div>
					</div>
				</div>
				<div class="footer-contact-form">
					<h5>Contact Form</h5>
                                        <form class="contact-form" method="post" action="index.php">
						<div class="contact-form__input">
							<input type="text" class="form-control" name="name" placeholder="your Name" required>
                                                        <input type="email" class="form-control" name="email" placeholder="Email" required><br>
                                                      <!--  <input type="text" class="form-control" name="subject" placeholder="Subject" required>-->
						</div>
                                                <div class="contact-form__input">
                                                        <input type="text" class="form-control" name="subject" placeholder="Subject" required>
						</div>
                                            
                                            <textarea name="message" class="form-control" placeholder="Message" required></textarea>
                                            <ul class="section-btn">
                                                <li>
                                                    <button class="submit" type="submit" name="submit" onclick="fun()"><span data-hover="Send Message">Send Message</span></button>
                                                </li>
                                            </ul>
						<!--<input type="submit" name="submit" class="smoothScroll"><span data-hover="Download CV">Download CV</span>-->
					</form>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="site-container footer-bottom-inner">
                            <center><p>2020 | Design by <a>Nikhat Parvin</a>.</p></center>
				
			</div>
		</div>
	</footer>
	<!-- Footer end -->
        <script>
            
     var open = document.getElementById('hamburger');
    var changeIcon = true;

open.addEventListener("click", function(){

    var overlay = document.querySelector('.overlay');
    var nav = document.querySelector('nav');
    var icon = document.querySelector('.menu-toggle i');

    overlay.classList.toggle("menu-open");
    nav.classList.toggle("menu-open");

    if (changeIcon) {
        icon.classList.remove("fa-bars");
        icon.classList.add("fa-times");

        changeIcon = false;
    }
    else {
        icon.classList.remove("fa-times");
        icon.classList.add("fa-bars");
        changeIcon = true;
    }
});
            
        </script>
        <script type="text/javascript">
            $(window).on('scroll', function(){
                if ($(window).scrollTop()){
                    $('nav').addClass('black');
                }
                else {
                    $('nav').removeClass('black');
                }
            })
        </script>
        
	<!-- Scripts -->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.parallax.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/magnific-popup-options.js"></script>
        <script src="js/modernizr.custom.js"></script>
        <script src="js/smoothscroll.js"></script>
        <script src="js/custom.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>