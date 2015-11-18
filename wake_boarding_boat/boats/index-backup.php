
<?php

     // error reporting off
     error_reporting(E_ALL^E_NOTICE);
     
     // call rewrite rule from .htaccess
     $p =$_GET['p'];

?>

<!DOCTYPE html>

<html lang='en'>

     <head>
     
          <meta charset='utf-8' />
          
          <title>Pavati - Wakeboarding Boats</title>
          
          <link rel='stylesheet' href='../css/styles.css' />
          
          <link rel='stylesheet' href='../css/960.css' />
          
          <link rel='stylesheet' type='text/css' href='../js/slider/themes/carbono/jquery.slider.css' />
          
          <link rel="stylesheet" type="text/css" href="../css/jquery.fancybox.css?v=2.1.4" media="screen" />
          
          <script type='text/javascript' src='../js/jquery.min.js'></script>
          
          <script type='text/javascript' src='../js/slider/jquery.slider.min.js'></script>
          
          <script type="text/javascript" src="../js/jquery.fancybox.js"></script>

          <script type="text/javascript" src="../js/jquery.fancybox-media.js"></script>   
          
          <script language='javascript'>
          
          $(document).ready(function(){
                   $("#main_content").hide(0).delay(200).fadeIn(1000)
                   $(".static_bg").hide(0).delay(200).fadeIn(1000)
               }); 
          
          </script>
          
          <!-- slide down the boats drop menu -->
          
          <script language='javascript'> 

               function slidedownboats() {

               var ele1 = document.getElementById('boats_menu');
               
               var ele2 = document.getElementById('apparel_menu');
               
               var nav1 = document.getElementById('nav_boats');
               
               var nav2 = document.getElementById('nav_apparel');
               
               var close_top = document.getElementById('menu_close_top');
               
               var close_bottom = document.getElementById('menu_close_bottom');

               $(nav1).css('border-bottom','2px solid #788E1E');
               
               $(nav2).css('border-bottom','none');
               
               close_top.style.display = 'block';
               
               close_bottom.style.display = 'block';
               
               $(ele2).slideUp(); $(ele1).slideDown();} 
          
          </script>
          
          <!-- slide down the apparel drop menu -->
          
          <script language='javascript'> 

               function slidedownapparel() {

               var ele1 = document.getElementById('apparel_menu');
               
               var ele2 = document.getElementById('boats_menu');
               
               var nav1 = document.getElementById('nav_apparel');
               
               var nav2 = document.getElementById('nav_boats');
               
               var close_top = document.getElementById('menu_close_top');
               
               var close_bottom = document.getElementById('menu_close_bottom');

               $(nav1).css('border-bottom','2px solid #788E1E');
               
               $(nav2).css('border-bottom','none');
               
               close_top.style.display = 'block';
               
               close_bottom.style.display = 'block';
               
               $(ele2).slideUp(); $(ele1).slideDown();} 
          
          </script>
          
          <!-- close any drop menus that are open -->
          
          <script language='javascript'> 

               function closemenus() {

               var ele1 = document.getElementById('boats_menu');
               
               var ele2 = document.getElementById('apparel_menu');
               
               var nav1 = document.getElementById('nav_boats');
               
               var nav2 = document.getElementById('nav_apparel');
               
               var close_top = document.getElementById('menu_close_top');
               
               var close_bottom = document.getElementById('menu_close_bottom');

               $(nav1).css('border-bottom','none');
               
               $(nav2).css('border-bottom','none');
               
               close_top.style.display = 'none';
               
               close_bottom.style.display = 'none';

               $(ele1).slideUp(); $(ele2).slideUp();} 
          
          </script>
          
          <!-- image slider settings -->
          
          <script type='text/javascript'>
          
            jQuery(document).ready(function($) {
            
              $('.slider').slideshow({
              
                width      : 940,
                
                height     : 400,
                
                delay      : 6000,
                
                transition : 'fade'
                
              });
              
            });
            
          </script>
          
          <!-- fancybox gallery settings -->
          
          <script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>

  <script>
    $(document).ready(function(){
      $(".update-dropper").delay(1500).animate({marginTop: "-35px"}, 250);
    });
    </script>
          
     </head>

     <body>    
          
          <!-- auto-scaling static background image -->
          
          <div class='static_bg' style='display:none;'><img src='http://pavati.com/al24/assets/images/pavati-bkg-lights-on.jpg' /></div>
          
          <!-- call function to close any open drop menus -->
          
          <div id='menu_close_top' onmouseover='javascript:closemenus();'></div>
          
          <!-- begin main container -->
          
          <div class='container_12' id='main_content' style='display:none;'>

            <div class="update-dropper">
              Get on the list for exclusive pre-launch access to 2014 AL-24 Series photos and specs!
              <a href="http://pavati.com/al24/">Get Started</a>
            </div>
          
            <!-- begin page header -->

            <div class='grid_8' id='main_header'>
            
               <!-- top logo -->
               
               <a href='../' class='logo'></a>
               
               <!-- main navigation -->
               
               <ul class='nav_links'>                     
                    
                    <a href='../'><li>home</li></a>
                    
                    <a><li id='current_nav'>boats</li></a>
                    
                    <a style='display:none;' href='../apparel/'><li id='nav_apparel'>apparel</li></a>
                    
                    <a style='display:none;' href='../why/'><li>why</li></a>
                    
                    <a href='../contact'><li>contact</li></a>
                    
                    <a href='../dealers/'><li>dealers</li></a>
                    
               </ul>
               
            </div> 
            
            <!-- social icons and phone number -->
            
            <div class='grid_4' id='top_social'>
               
               <a class='social_icon' id='youtube' href='http://www.youtube.com/user/pavatwakeboarding'>
               
               </a>
            
               <a class='social_icon' id='twitter' href='https://twitter.com/PavatiWakeboard'>
               
               </a>
               
               <a class='social_icon' id='facebook' href='https://www.facebook.com/PavatiWakeboardingBoats'>
               
               </a>
               
               <p class='call_us'>Call Us + 800 866 5269</p>
               
               
            </div>
            
            <!-- end page header -->
            
            <div class='clear'></div>
            
            <!-- begin boats drop menu - display:none -->
            
            <div id='boats_menu'>
            
                 <!-- AX-22 menu item -->

                 <div class='grid_4' id='one_third1'>
                    
                    <div class='boat_menu_item' id='ax-22'>
                    
                         AL-22<br>
                         
                         <p class='boat_desc'>22 ft. Wakeboarding Boat</p>
                    
                    </div>
                    
                 </div>
                 
                 <!-- AX-24 menu item -->

                 <div class='grid_4' id='one_third2'>
                    
                    <div class='boat_menu_item' id='ax-24'>
                    
                         AL-24<br>
                         
                         <p class='boat_desc'>24 ft. Wakeboarding Boat</p>
                    
                    </div>
                    
                 </div>
                 
                 <!-- AX-26 menu item -->
                 
                 <div class='grid_4' id='one_third3'>
                    
                    <div class='boat_menu_item' id='ax-26'>
                    
                         AL-26<br>
                         
                         <p class='boat_desc'>26 ft. Wakeboarding Boat</p>
                    
                    </div>
                    
                 </div>
            
            </div>
            
            <!-- end boats menu -->
            
            <!-- begin apparel drop menu - display:none -->
            
            <div id='apparel_menu'>
            
                 <!-- AX-22 menu item -->

                 <div class='grid_4' id='one_third1'>
                    
                    
                    
                 </div>
                 
                 <!-- AX-24 menu item -->

                 <div class='grid_4' id='one_third2'>
                    
                    
                    
                 </div>
                 
                 <!-- AX-26 menu item -->
                 
                 <div class='grid_4' id='one_third3'>
                    
                    
                    
                 </div>
            
            </div>
            
            <!-- end apparel menu -->
            
            <!-- call function to close any open drop menus -->
            
            <div id='menu_close_bottom' onmouseover='javascript:closemenus();'></div>
            
            <div class='clear'></div>
            
            <!-- begin main image slider -->
            
            <div class='grid_12' id='main_slider'>

               <div class='slider'>
               
                    <div><img src='../img/slider/boat_slide1.jpg' alt=''/></div>
                    
                    <div><img src='../img/slider/boat_slide2.jpg' alt=''/></div>
                    
                    <div><img src='../img/slider/boat_slide3.jpg' alt=''/></div>
                    
                    <div><img src='../img/slider/boat_slide4.jpg' alt=''/></div>
                    
                    <div><img src='../img/slider/boat_slide5.jpg' alt=''/></div>
                    
                    <div><img src='../img/slider/boat_slide6.jpg' alt=''/></div>
                    
               </div>
            
            </div>
            
            <div class='grid_9' id='boats_main_image'></div>
            
            <div class='grid_3' id='boats_main_info'>
            
               <h1>Specifications</h1>

               <p><b>AL Prototype:</b><br>

               22ft / 3,950 lbs<br>

               24ft / 4,175 lbs<br>

               26ft / 4,525 lbs<br>

               Ballast: 3,020 lbs<br>

               Engine Types: Indmar LS3 or LSA</p>
            
            </div>
            
            <!-- page breaker -->
            
            <div class='grid_12' id='content_headers'></div> 

<div class='grid_12' id='boats_main_text'>
            
               <h1>Wakeboard Boat Models</h1>
               
               <p>The future of wakeboarding and watersports is here. The very first all aluminum V-Drive wakeboarding boat. Finally a superior alternative to the old-school fiberglass boats. Until now fiberglass has been the only practical way to make curvaceous good looking ski boats.<br><br>
               
               From top to bottom this boat is 100% marine grade aluminum. Other manufacturers brag about their towers or dash accents being aluminum- our whole boat is aluminum. Stronger, Lighter, Faster. Look close at the design and construction of this combination: wakeboarding, wake surfing, and ski boat. You will clearly see the difference.</p>
            
            </div>
            
            <!-- page breaker -->
            
            <div class='grid_12' id='content_headers'></div>            
            
            <div class='grid_6' id='boat_infographic1'>
            
               <!-- comfortable seating grid -->
               
               <div class='gallery_small_boats'>
               
                    <a class="fancybox" href="../img/boats_gallery/comf_seating/1.jpg" data-fancybox-group="gallery_seating"><div class='gallery_image_small'><img style='margin:-3px 0 0 -3px;' src='../img/boats_gallery/comf_seating/1_thumb.png' /></div></a>
                    
                    <a class="fancybox" href="../img/boats_gallery/comf_seating/2.jpg" data-fancybox-group="gallery_seating"><div class='gallery_image_small'><img style='margin:-3px 0 0 -3px;' src='../img/boats_gallery/comf_seating/2_thumb.png' /></div></a>
                    
                    <a class="fancybox" href="../img/boats_gallery/comf_seating/3.jpg" data-fancybox-group="gallery_seating"><div class='gallery_image_small'><img style='margin:-3px 0 0 -3px;' src='../img/boats_gallery/comf_seating/3_thumb.png' /></div></a>
                    
                    <a class="fancybox" href="../img/boats_gallery/comf_seating/4.jpg" data-fancybox-group="gallery_seating"><div class='gallery_image_small' style='margin-right:0;'><img style='margin:-3px 0 0 -3px;' src='../img/boats_gallery/comf_seating/4_thumb.png' /></div></a>
                               
               </div>
            
            
            </div>
            
            <!-- open bow grid -->
            
            <div class='grid_6' id='boat_infographic2'>
            
               <div class='gallery_small_boats'>
               
                    <a class="fancybox" href="../img/boats_gallery/open_bow/open_bow1.jpg" data-fancybox-group="gallery_bow"><div class='gallery_image_small'><img style='margin:-3px 0 0 -3px;' src='../img/boats_gallery/open_bow/open_bow1_thumb.jpg' /></div></a>
                    
                    <a class="fancybox" href="../img/boats_gallery/open_bow/open_bow2.jpg" data-fancybox-group="gallery_bow"><div class='gallery_image_small'><img style='margin:-3px 0 0 -3px;' src='../img/boats_gallery/open_bow/open_bow2_thumb.jpg' /></div></a>
                    
                    <a class="fancybox" href="../img/boats_gallery/open_bow/open_bow3.jpg" data-fancybox-group="gallery_bow"><div class='gallery_image_small'><img style='margin:-3px 0 0 -3px;' src='../img/boats_gallery/open_bow/open_bow3_thumb.jpg' /></div></a>
                    
                    <a class="fancybox" href="../img/boats_gallery/open_bow/open_bow4.jpg" data-fancybox-group="gallery_bow"><div class='gallery_image_small' style='margin-right:0;'><img style='margin:-3px 0 0 -3px;' src='../img/boats_gallery/open_bow/open_bow4_thumb.jpg' /></div></a>
                               
               </div>
            
            </div>
            
            <!-- swim deck grid -->
            
            <div class='grid_6' id='boat_infographic3'>
            
               <div class='gallery_small_boats'>
               
                    <a class="fancybox" href="../img/boats_gallery/swim_deck/swim_deck_seat1.jpg" data-fancybox-group="gallery_deck"><div class='gallery_image_small'><img style='margin:-3px 0 0 -3px;' src='../img/boats_gallery/swim_deck/swim_deck_seat1_thumb.jpg' /></div></a>
                    
                    <a class="fancybox" href="../img/boats_gallery/swim_deck/swim_deck_seat2.jpg" data-fancybox-group="gallery_deck"><div class='gallery_image_small'><img style='margin:-3px 0 0 -3px;' src='../img/boats_gallery/swim_deck/swim_deck_seat2_thumb.jpg' /></div></a>
                    
                    <a class="fancybox" href="../img/boats_gallery/swim_deck/swim_deck_seat3.jpg" data-fancybox-group="gallery_deck"><div class='gallery_image_small'><img style='margin:-3px 0 0 -3px;' src='../img/boats_gallery/swim_deck/swim_deck_seat3_thumb.jpg' /></div></a>
                    
                    <a class="fancybox" href="../img/boats_gallery/swim_deck/swim_deck_seat4.jpg" data-fancybox-group="gallery_deck"><div class='gallery_image_small' style='margin-right:0;'><img style='margin:-3px 0 0 -3px;' src='../img/boats_gallery/swim_deck/swim_deck_seat4_thumb.jpg' /></div></a>
                                
               </div>
            
            </div>
            
            <!-- tower grid -->
            
            <div class='grid_6' id='boat_infographic4'>
            
               <div class='gallery_small_boats'>
               
                    <a class="fancybox" href="../img/boats_gallery/tower/1.jpg" data-fancybox-group="gallery_tower"><div class='gallery_image_small'><img style='margin:-3px 0 0 -3px;' src='../img/boats_gallery/tower/1_thumb.png' /></div></a>
                    
                    <a class="fancybox" href="../img/boats_gallery/tower/2.jpg" data-fancybox-group="gallery_tower"><div class='gallery_image_small'><img style='margin:-3px 0 0 -3px;' src='../img/boats_gallery/tower/2_thumb.png' /></div></a>
                    
                    <a class="fancybox" href="../img/boats_gallery/tower/3.jpg" data-fancybox-group="gallery_tower"><div class='gallery_image_small'><img style='margin:-3px 0 0 -3px;' src='../img/boats_gallery/tower/3_thumb.png' /></div></a>
                    
                    <a class="fancybox" href="../img/boats_gallery/tower/4.jpg" data-fancybox-group="gallery_tower"><div class='gallery_image_small' style='margin-right:0;'><img style='margin:-3px 0 0 -3px;' src='../img/boats_gallery/tower/4_thumb.png' /></div></a>
                               
               </div>
            
            </div>
            
            
            <!-- begin page footer -->
          
          <div class='grid_12' id='footer'>
          
               <div class='grid_3' id='footer_one_fourth1'>
                    
                    <a href='./' class='logo_footer'></a>
                    
                    <p class='about_small'>PAVATI, Founded in 2009, set out to be the first boat manufacturer to design and build an all aluminum wakeboard boat that would go toe to toe with the best wakeboard boats on the market.</p>
                    
               </div>
            
               <div class='grid_3' id='footer_one_fourth2' style='display:none;'>
                    
                    <h1 class='footer-title'>useful links</h1>
                    
                    <a href='' class='useful-link'>help desk</a>
                    
                    <a href='' class='useful-link'>terms of use</a>
                    
                    <a href='' class='useful-link'>privacy policy</a>
                    
                    <a href='' class='useful-link'>store locator</a>
                    
                    <a href='' class='useful-link'>dealer inquiry</a>              
                    
               </div>
            
               <div class='grid_3' id='footer_one_fourth3' style='display:none;'>

                    <h1 class='footer-title'>latest tweets</h1>
               
               </div>
            
               <div class='grid_3' id='footer_one_fourth4' style='float:right;'>

                    <h1 class='footer-title'>get in touch</h1>
                    
                    <p class='about_small' style='margin:0;'>7905 Agate Road<br>White City, OR 97523<br><br>contact@pavati.com<br><br>+ 800 866 5269<br>+ 541 840 4928</p>
               
               </div>
               
               <div class='clear'></div>
               
               <div class='grid_12' id='copyright'>
                    
                    Copyright © 2013 <a href='./'>Pavati</a>. All rights reserved.
                    
                    <a href='#' class='to_top'></a>
                    
               </div>
          
          </div>
          
          <!-- end page footer -->
            
            
          </div>
          
          <!-- end main container -->
          
     </body>
     
</html>