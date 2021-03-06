<!--footer -->
      <footer class="py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <div class="row ">
               <div class="dance-agile-info col-lg-3 col-md-6 col-sm-6 ">
                  <h4 class="pb-lg-3 pb-3"><a href="index.html">Sway</a></h4>
                  <div class="bottom-para pb-sm-3 pb-2">
                     <p>ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla</p>
                  </div>
                  <div class="bottom-social pt-2">
                     <ul>
                        <li>
                           <a href="#">
                           <span class="fab fa-facebook-f"></span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <span class="fab fa-google-plus-g"></span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <span class="fab fa-twitter"></span>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class=" col-lg-3 col-md-6 col-sm-6 dance-agile-info">
                  <h4 class="pb-lg-3 pb-3">Usefull Links</h4>
                  <nav class="border-line">
                     <ul class="nav flex-column">
                        <li class="nav-item active">
                           <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                           <a href="about.html" class="nav-link ">About</a>
                        </li>
                        <li class="nav-item">
                           <a href="class.html" class="nav-link">Class</a>
                        </li>
                        <li class="nav-item">
                           <a href="gallery.html" class="nav-link">Gallery</a>
                        </li>
                        <li class="nav-item">
                           <a href="contact.html" class="nav-link">Contact</a>
                        </li>
                     </ul>
                  </nav>
               </div>
               <div class="dance-agile-info col-lg-3 col-md-6 col-sm-6 ">
                  <h4 class="pb-lg-3 pb-3">Twitter Us</h4>
                  <div class="bottom-para pb-3">
                     <p>ultricies nec, pellentesque eu, pretium quis,</p>
                  </div>
                  <div class="bottom-para">
                     <p>ultricies nec, pellentesque eu, pretium quis</p>
                  </div>
               </div>
               <div class="dance-agile-info col-lg-3 col-md-6 col-sm-6">
                  <h4 class="pb-lg-3 pb-3">Our Posts</h4>
                  <div class="footer-post d-flex mb-2">
                     <div class="agileinfo_footer_grid1 mr-2">
                        <a href="class.html">
                        <img src="{{ asset('frontEnd') }}/images/f1.jpg" alt=" " class="img-fluid">
                        </a>
                     </div>
                     <div class="agileinfo_footer_grid1 mr-2">
                        <a href="#">
                        <img src="{{ asset('frontEnd') }}/images/f2.jpg" alt=" " class="img-fluid">
                        </a>
                     </div>
                     <div class="agileinfo_footer_grid1">
                        <a href="class.html">
                        <img src="{{ asset('frontEnd') }}/images/f3.jpg" alt=" " class="img-fluid">
                        </a>
                     </div>
                  </div>
                  <div class="footer-post d-flex">
                     <div class="agileinfo_footer_grid1 mr-2">
                        <a href="class.html">
                        <img src="{{ asset('frontEnd') }}/images/f4.jpg" alt=" " class="img-fluid">
                        </a>
                     </div>
                     <div class="agileinfo_footer_grid1 mr-2">
                        <a href="class.html">
                        <img src="{{ asset('frontEnd') }}/images/f5.jpg" alt=" " class="img-fluid">
                        </a>
                     </div>
                     <div class="agileinfo_footer_grid1">
                        <a href="class.html">
                        <img src="{{ asset('frontEnd') }}/images/f6.jpg" alt=" " class="img-fluid">
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="copy-agile-right text-center text-white py-2">
            <p> 
               © 2018 Sway. All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a>
            </p>
         </div>
      </footer>
      <!--//footer-->
      
      <!--js working-->
      <script src='{{ asset('frontEnd') }}/js/jquery-2.2.3.min.js'></script>
      <!--//js working-->
      <!--responsiveslides banner-->
      <script src="{{ asset('frontEnd') }}/js/responsiveslides.min.js"></script>
      <script>
         // You can also use "$(window).load(function() {"
         $(function () {
         	// Slideshow 4
         	$("#slider4").responsiveSlides({
         		auto: true,
         		pager:false,
         		nav: true,
         		speed: 900,
         		namespace: "callbacks",
         		before: function () {
         			$('.events').append("<li>before event fired.</li>");
         		},
         		after: function () {
         			$('.events').append("<li>after event fired.</li>");
         		}
         	});
         
         });
      </script>
      <!--// responsiveslides banner-->	  
      
      <!--About OnScroll-Number-Increase-JavaScript -->
      <script src="{{ asset('frontEnd') }}/js/jquery.waypoints.min.js"></script>
      <script src="{{ asset('frontEnd') }}/js/jquery.countup.js"></script>
      <script>
         $('.counter').countUp();
      </script>
      <!-- //OnScroll-Number-Increase-JavaScript -->
      
      <!--slider flexisel -->
      <script src="{{ asset('frontEnd') }}/js/jquery.flexisel.js"></script>
      <script>
         $(window).load(function() {
         	$("#flexiselDemo1").flexisel({
         		visibleItems: 4,
         		animationSpeed: 3000,
         		autoPlay:true,
         		autoPlaySpeed: 2000,    		
         		pauseOnHover: true,
         		enableResponsiveBreakpoints: true,
         		responsiveBreakpoints: { 
         			portrait: { 
         				changePoint:480,
         				visibleItems: 1
         			}, 
         			landscape: { 
         				changePoint:640,
         				visibleItems:2
         			},
         			tablet: { 
         				changePoint:768,
         				visibleItems: 3
         			}
         		}
         	});
         	
         });
      </script>
      <!-- //slider flexisel -->
      
      <!-- slider-pop-up -->
      <script src="{{ asset('frontEnd') }}/js/lsb.min.js"></script>
      <script>
         $(window).load(function() {
         	  $.fn.lightspeedBox();
         	});
      </script>
      <!-- //slider-pop-up -->
      
      <!-- start-smoth-scrolling -->
      <script src="{{ asset('frontEnd') }}/js/move-top.js"></script>
      <script src="{{ asset('frontEnd') }}/js/easing.js"></script>
      <script>
         jQuery(document).ready(function ($) {
         	$(".scroll").click(function (event) {
         		event.preventDefault();
         		$('html,body').animate({
         			scrollTop: $(this.hash).offset().top
         		}, 900);
         	});
         });
      </script>
      <!-- start-smoth-scrolling -->
      
      <!-- here stars scrolling icon -->
      <script>
         $(document).ready(function () {
         
         	var defaults = {
         		containerID: 'toTop', // fading element id
         		containerHoverID: 'toTopHover', // fading element hover id
         		scrollSpeed: 1200,
         		easingType: 'linear'
         	};
         	$().UItoTop({
         		easingType: 'easeOutQuart'
         	});
         
         });
      </script>
      <!-- //here ends scrolling icon -->
      
      <!--bootstrap working-->
      <script src="{{ asset('frontEnd') }}/js/bootstrap.min.js"></script>
      <!-- //bootstrap working-->
