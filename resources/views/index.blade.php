<!DOCTYPE html>
<html lang="en">

  <head>
    
    <!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
   
    
    
    <title>Student Project Tracker</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon/favicon.ico')}}">
    <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="{{asset('assets/images/favicon/apple-touch-icon.png')}}">
    
    <!-- All CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets//css/plugin.css')}}">
    
    <!-- Main CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    
    <!-- Google Web Fonts  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 

 </head>

  <body>
    
    
	
	<!-- Preloader Start -->
    <div id="preloader">
	  <div class="loader"></div>
    </div>
    <!-- Preloader End -->

    
    
    <!-- Home & Menu Section Start -->
    <header id="home" class="home-section">
        
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                
                    <div class="col-sm-3">
                        <div class="logo">
                           <!--put pick here-->
                        </div>
                    </div>
                    
                    <div class="col-sm-9">
                        <div class="navigation-menu">
                            <div class="navbar">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="active"><a class="smoth-scroll" href="#home">Home <div class="ripple-wrapper"></div></a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#about">About</a>
                                        </li>                                     
                                        <li><a class="smoth-scroll" href="#contact">Contact</a>
                                        </li>
                                         <li><a class="smoth-scroll" href="login.html">Login</a>
                                        </li>
                                         <li><a class="smoth-scroll" href="signup.html">Signup</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="home-section-background" data-stellar-background-ratio="0.5">
            <div class="display-table">
                <div class="display-table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="header-text">
                                    <p>Projects done by our Students</p>
                                    <h2><span class="typing"></span></h2>
                                    
                                    <div class="margin-top-60">
                          <a class="button button-style button-style-icon fa fa-long-arrow-right smoth-scroll" href="#portfolio">View Portfolio</a>
                                  </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </header>
    <!-- Home & Menu Section End-->
    
    
    
    
  
        <section id="about" class="about-section">
<div class="container">
	<div class="row">
		<div class="col-lg-10 col-lg-offset-1 text-center">
             <div class="about-me section-space-padding">
			<h2 class="section-heading">WHAT WE ARE ABOUT<br/>& OUR <b style="color:#24b662" >PURPOSE</b></h2>
			<hr>
			<p>
                This website allows students to showcase the past projects in which they have worked on.

			</p>
			<p>
				  This will additionally help future students to appreciate the work done for projects in the past.
			</p>
			<p>
				 Furthermore, this website would allow students to have a referenceable online resource to highlight their accomplishments during their undergraduate degree.
			</p>
            </div>
	</div>
</div>
</div>
</section>

    
    <!-- Portfolio Start -->
    <section id="portfolio" class="portfolio section-space-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2> Portfolio.</h2>
                        <p></p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <ul class="portfolio">
                    <li class="filter" data-filter="all">all</li>
                    <li class="filter" data-filter=".course1">Web Systems</li>
                    <li class="filter" data-filter=".course2">Data Structures</li>
                    <li class="filter" data-filter=".course3">Databases</li>
                </ul>
            </div>
            

            
            <div class="portfolio-inner">
                <div class="row">
                <!--model 1 -->
                    <div width="50px" class="col-md-4 col-sm-6 col-xs-12 mix course1"  >
                         <img src="images/project1.jpg" alt="Projects"  >
                        <div align="center" style="color:#24b662" > <button onclick="document.getElementById('id01').style.display='block'" class="w3-button "><b>Project name</b></button></div>

                      <div id="id01" class="w3-modal">
                       <div class="w3-modal-content w3-card-4">
                        <header class="w3-container w3-black"> 
                       <span onclick="document.getElementById('id01').style.display='none'" 
                          class="w3-button w3-display-topright">&times;</span>
                         <h2>Project Name</h2>
                           </header>
                          <div class="w3-container">
                      <p>Course Code:<br/> </p>
                       <p>Project Description:<br/> </p>
                      <p>Group members:<br/>
                       <img src="images/pic2.jpg" alt="Student image" style="width:120px;height:120px;">  Mark Johnson<br/>
                      <img src="images/pic2.jpg" alt="Student image" style="width:120px;height:120px;"> Debra Smith<br/>
                       <img src="images/pic2.jpg" alt="Student image" style="width:120px;height:120px;"> Kyle Johnson<br/>
                       <img src="images/pic2.jpg" alt="Student image" style="width:120px;height:120px;"> Sasha White<br/>
          
                         </p>
                        </div>
                       <footer class="w3-container w3-black">
                       </footer>
                       </div>
                        </div>
  
                        
                    </div>
                
                    <!--model2-->
                    <div class="col-md-4 col-sm-6 col-xs-12 mix course1">
                         <img src="images/project2.jpg" alt="">
                     <div align="center" style="color:#24b662" >  <button onclick="document.getElementById('id02').style.display='block'" class="w3-button"><b>Project Name</b></button></div>

  <div id="id02" class="w3-modal">
    <div class="w3-modal-content w3-card-4">
      <header class="w3-container w3-black"> 
        <span onclick="document.getElementById('id02').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Project Name</h2>
      </header>
      <div class="w3-container">
         <p>Course Code:<br/> </p>
                       <p>Project Description:<br/> </p>
                      <p>Group members:<br/>
                       <img src="images/pic2.jpg" alt="Student image" style="width:120px;height:120px;">  Barry Allen<br/>
                      <img src="images/pic2.jpg" alt="Student image" style="width:120px;height:120px;"> Iris West<br/>
                       <img src="images/pic2.jpg" alt="Student image" style="width:120px;height:120px;"> Wally Knight<br/>
                       <img src="images/pic2.jpg" alt="Student image" style="width:120px;height:120px;"> Mark Nana<br/>
          
                         </p>
      </div>
      <footer class="w3-container w3-black">
      </footer>
    </div>
  </div> 
</div>
                    <!--model3-->
                    <div class="col-md-4 col-sm-6 col-xs-12 mix course2">
                         <img src="images/project3.jpg" alt="">
                       <div align="center" style="color:#24b662"> <button onclick="document.getElementById('id03').style.display='block'" class="w3-button "><b>Project Name</b></button></div>

  <div id="id03" class="w3-modal">
    <div class="w3-modal-content w3-card-4">
      <header class="w3-container w3-black"> 
        <span onclick="document.getElementById('id03').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Project Name</h2>
      </header>
      <div class="w3-container">
       <p>Course Code:<br/> </p>
                        <p>Project Description:<br/> </p>
                          <p>Group members:<br/>
                       <img src="images/pic2.jpg" alt="Student image" style="width:120px;height:120px;">  Johnathon Johnson<br/>
                      <img src="images/pic2.jpg" alt="Student image" style="width:120px;height:120px;"> Anna Adams<br/>
                      <img src="images/pic2.jpg" alt="Student image" style="width:120px;height:120px;"> Dayna Blackman<br/>
                      <img src="images/pic2.jpg" alt="Student image" style="width:120px;height:120px;"> Sofia Love<br/>
          
                      </p>
      </div>
      <footer class="w3-container w3-black">
      </footer>
    </div>
  </div> 
                    </div>
                    <!--model4-->
                    <div class="col-md-4 col-sm-6 col-xs-12 mix course3">
                         <img src="images/project4.jpg" alt="">
                        <div align="center" style="color:#24b662"> <button onclick="document.getElementById('id04').style.display='block'" class="w3-button "><b>Project name</b></button></div>

                        <div id="id04" class="w3-modal">
                       <div class="w3-modal-content w3-card-4">
                       <header class="w3-container w3-black"> 
                       <span onclick="document.getElementById('id04').style.display='none'" 
                          class="w3-button w3-display-topright">&times;</span>
                            <h2>Project Name</h2>
                         </header>
                          <div class="w3-container">
                          <p>Course Code:<br/> </p>
                        <p>Project Description:<br/> </p>
                          <p>Group members:<br/>
                       <img src="images/pic2.jpg" alt="Student image" style="width:120px;height:120px;">  Camille Curry<br/>
                      <img src="images/pic2.jpg" alt="Student image" style="width:120px;height:120px;"> Gregory Persad<br/>
                      <img src="images/pic2.jpg" alt="Student image" style="width:120px;height:120px;"> Kayla Brathwaite<br/>
                      <img src="images/pic2.jpg" alt="Student image" style="width:120px;height:120px;"> Hannah Spencer<br/>
          
                      </p>
                     </div>
                    <footer class="w3-container w3-black">
                   </footer>
                    </div>
                    </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
        
        <div class="text-center margin-top-50">
          <a class="button button-style button-style-dark button-style-icon fa fa-long-arrow-right smoth-scroll" href="#contact">Let's Discuss</a>
            </div>
     
     </section>
    <!-- Portfolio End -->
    
    
    
     <!-- Start -->
     <section id="gdisplay" class="gdisplay-section section-space-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>Top Projects.</h2>
                        
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="gdisplay-carousel-list margin-top-20">
                
                    <div class="gdisplay-word text-center">
                    <img src="images/project4.jpg" class="img-responsive" alt="">
                        <h2>Project Name</h2>
                        <p>Course code.</p>
                    </div>
                    
                    <div class="gdisplay-word text-center">
                    <img src="images/project2.jpg" class="img-responsive" alt="">
                        <h2>Project2 Name</h2>
                        <p>Course Code</p>
                    </div>
                    
                    <div class="gdisplay-word text-center">
                    <img src="images/project3.jpg" class="img-responsive" alt="">
                        <h2>Project 3 </h2>
                        <p>Course Code.</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- End -->
    
    
    
      
       
    <!-- Section Social
================================================== -->
<section id="social" class="parallax parallax-image" style="background-image:url(images/uwi.jpg);">
<div class="overlay" style="background:#222;opacity:0.5;">
</div>
<div class="wrapsection">
<div class="container">
	<div class="parallax-content">
		<div class="row wow fadeInLeft">
			<div class="col-md-3">
				<div class="funfacts text-center">
					<div class="icon">
						<a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
					</div>
					<h4>Twitter</h4>
				</div>
			</div>
			<div class="col-md-3">
				<div class="funfacts text-center">
					<div class="icon">
						<a href="https://facebook.com/"><i class="fa fa-facebook"></i></a>
					</div>
					<h4>Facebook</h4>
				</div>
			</div>
			<div class="col-md-3">
				<div class="funfacts text-center">
					<div class="icon">
						<a href="https://www.google.com/"><i class="fa fa-google"></i></a>
					</div>
					<h4>Google</h4>
				</div>
			</div>
			<div class="col-md-3">
				<div class="funfacts text-center">
					<div class="icon">
						<a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
					</div>
					<h4>Instagram</h4>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</section>
<div class="clearfix">
</div>
       
       
    <!-- Contact Start -->
    <section id="contact" class="contact-us section-space-padding">
       <div class="container">
          <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>Contact Me.</h2>
                        
                    </div>
                </div>
            </div>
            
            
           <div class="text-center margin-top-10 margin-bottom-50">
            <div class="row">
            
               <div class="col-md-4 col-sm-4">
                <div class="contact-us-detail">  
                 <i class="fa fa-mobile color-6"></i>
                  <p><a href="tel:+1234567890">+1234 567 890</a></p>
                 </div>
                </div>
               
               <div class="col-md-4 col-sm-4">
                <div class="contact-us-detail">
                 <i class="fa fa-mail-reply color-5"></i>
                  <p><a href="mailto:name@domain.com">name@domain.com</a></p>
                 </div>
                </div>
                 
               <div class="col-md-4 col-sm-4">
                <div class="contact-us-detail">
                 <i class="fa fa-clock-o color-3"></i>
                  <p>Mon - Fri 08:00am – 7:00pm</p>
                 </div>
                </div>
              
               </div>
              </div>
            
         
         <div class="row">
           
           <div class="col-md-6">   
                 
               <div class="row">
                  <form>
                    
					  <div class="col-sm-6">
						<div class="form-group">
						  <input type="text" id="name" class="form-control" placeholder="Your Name">
						 </div>
                        </div>
								
                       <div class="col-sm-6">
					    <div class="form-group">
						 <input type="email" id="email" class="form-control" placeholder="Your Email">
						 </div>
                        </div>
                        
                       
                          
                        <div class="col-sm-6">
						  <div class="form-group">
							<input type="text" id="address" class="form-control" placeholder="Where are You From?">
						   </div>
                          </div>
								
                         
								
                       <div class="col-sm-12">
					    <div class="textarea-message form-group">
					      <textarea id="message" class="textarea-message form-control" placeholder="Your Message" rows="5"></textarea>
						  </div>
                         </div>
                   
                   
                    <div class="text-center">      
		   <button type="submit" class="button button-style button-style-dark button-style-icon fa fa-long-arrow-right text-center">Submit</button>
	                  </div>
                       
                  </form>
                   
				</div>
               </div>
            
            
            <div class="col-md-6">   
              <div id="my-address" class="map space-set">
              <p>Map will not be display without Internet Connection.</p>
            </div>
           </div>
           
        
        </div>
       </div>
       
      
       
     </section>
     <!-- Contact End -->
       
        
        
        
    <!-- Footer Start -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
               
      <div class="col-md-4 text-left">
       <p><span><a href="#about" class="smoth-scroll">About Me</a></span> | <span><a href="#portfolio" class="smoth-scroll">Portfolio</a></span></p>
          </div>
               
            <div class="col-md-4 text-center">
               <p>© Copyright 2017 .</p>
               </div>
              
             
                
             </div>
        </div>
    </footer>
    <!-- Footer End -->
    
    
    <!-- Back to Top Start -->
    <a href="#" class="scroll-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- Back to Top End -->

    <div id="myModal" class="modal">

 

</div>

    
    
    <!-- All Javascript Plugins  -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugin.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyC0HAKwKinpoFKNGUwRBgkrKhF-sIqFUNA"></script>
    
    <!-- Main Javascript File  -->
    <script type="text/javascript" src="js/scripts.js"></script>

    <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var modal1 = document.getElementById('id02');

window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}

var modal2 = document.getElementById('id03');
window.onclick = function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}

var modal3 = document.getElementById('id04');
window.onclick = function(event) {
    if (event.target == modal3) {
        modal3.style.display = "none";
    }
}

</script>




  
  
  </body>
 </html>