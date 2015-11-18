
<?php

     // error reporting off
     error_reporting(E_ALL^E_NOTICE);
     
     // call rewrite rule from .htaccess
     $p =$_GET['p'];
     
     function VisitorIP()
    { 
    if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $TheIp=$_SERVER['HTTP_X_FORWARDED_FOR'];
    else $TheIp=$_SERVER['REMOTE_ADDR'];
 
    return trim($TheIp);
    }
    
    $ip = VisitorIP(); 

?>

<!DOCTYPE html>

<html lang='en'>

     <head>
     
          <meta charset='utf-8' />
          
          <title>Pavati - Wakeboarding Boats</title>
          
          <link rel='stylesheet' href='../css/styles.css' />
          
          <link rel='stylesheet' href='../css/960.css' />
          
          <link rel='stylesheet' type='text/css' href='../js/slider/themes/carbono/jquery.slider.css' />
          
          <script type='text/javascript' src='../js/jquery.min.js'></script>
          
          <script type='text/javascript' src='../js/slider/jquery.slider.min.js'></script>
          
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
                
                transition : 'squareRandom'
                
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
                    
                    <a href='../boats/'><li id='nav_boats'>boats</li></a>
                    
                    <a style='display:none;' href='../apparel/'><li id='nav_apparel'>apparel</li></a>
                    
                    <a style='display:none;' href='../why/'><li>why</li></a>
                    
                    <a><li id="current_nav">contact</li></a>
                    
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
                    
                         AX-22<br>
                         
                         <p class='boat_desc'>22 ft. Wakeboarding Boat</p>
                    
                    </div>
                    
                 </div>
                 
                 <!-- AX-24 menu item -->

                 <div class='grid_4' id='one_third2'>
                    
                    <div class='boat_menu_item' id='ax-24'>
                    
                         AX-24<br>
                         
                         <p class='boat_desc'>24 ft. Wakeboarding Boat</p>
                    
                    </div>
                    
                 </div>
                 
                 <!-- AX-26 menu item -->
                 
                 <div class='grid_4' id='one_third3'>
                    
                    <div class='boat_menu_item' id='ax-26'>
                    
                         AX-26<br>
                         
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
            
            <!-- contact header -->
            
            <div class='grid_12' id='contact_header'>

               <div class="contact_header_overlay">
               
                    <h1 class="contact_title">operating hours</h1>
                    
                    <p class="contact_info">
                    
                         Monday - 8:00 am to 5:00 pm<br>
                         
                         Tuesday - 8:00 am to 5:00 pm<br>
                         
                         Wednesday - 8:00 am to 5:00 pm<br>
                         
                         Thursday - 8:00 am to 5:00 pm<br>
                         
                         Friday - 8:00 am to 5:00 pm<br>
                         
                         Saturday - Closed<br>
                         
                         Sunday - Closed<br>
                    
                    </p>
               
               </div>
               
            </div>     
            
            <div class='clear'></div>
            
            
            <!-- page breaker -->
            
            <div class='grid_12' id='content_headers'></div>

            <!-- contact form -->  
            
            <div class='grid_9' id='form_area'>

            
               <?php if($_POST['send']){
               
               /// if user submits contact form ///
               
               $name = $_POST['name'];
               $email = $_POST['email'];
               $phone = $_POST['phone'];
               $subject = $_POST['subject'];
               $message = $_POST['message'];
               
               /// if user submits form without filling out all fields, return error ///
               
               if(!$name || !$email || !$phone || !$subject || !$message){
               
         echo "<h1 class='contact_form_title'>Have a question or comment? Send us a message!</h1>
               
               <div style='margin:0 0 20px 0;' class='error'>Please fill out all of the fields below</div>
               
               <form method='post' action='./'>
                    
                    <div class='input_holder'>
                    
                         <label>Your Name</label>
                         <input type='text' class='contact-input' name='name' value='$name' />
                         
                         <label>Email Address</label>
                         <input style='text-transform:none;' type='text' class='contact-input' name='email' value='$email' />
                         
                         <label>Phone Number</label>
                         <input style='text-transform:none; width:144px;' type='text' class='contact-input' name='phone' value='$phone' />
                         
                    </div>
                    
                    <div class='input_holder'>
                    
                         <label>Subject</label>
                         <input style='text-transform:none;' type='text' class='contact-input' name='subject' value='$subject' />
                         
                         <label>Message</label>
                         <textarea class='contact-textarea' name='message'>$message</textarea>
                    
                    </div>
                    
                    <input type='submit' class='contact-button' name='send' value='send us your message' />
               
               </form>";
               
               }else{
               
               if($ip = "46.118.123.135"){
               
               
               echo"<div class='error'>Looks like your IP has been banned for spamming.</div>";
               
               
               }else{
               
               /// if user submits form with all fields filled out, send email ///
               
               echo"<h1 class='contact_form_title'>Your email has been sent!</h1>
               <p class='thanks' style='clear:left; margin:-20px 0 0 0;'>Your email has been successfully sent, and will be read and responded to promptly.<br><br>Thank you,<br>The Pavati Team</p>";
               
               $to = "sebastian@pavati.com";
               
               $subject = "Pavati Contact - $subject";
               
$message = "$name
$phone
$ip

$message";
               
               $from = "$email";
               
               $headers = "From:" . $from;
               
               mail($to,$subject,$message,$headers); 
              
               
               }
               
               }
               
               }else{
               
               /// display contact form ///
               
         echo "<h1 class='contact_form_title'>Have a question or comment? Send us a message!</h1>
               
               <form method='post' action='./'>
                    
                    <div class='input_holder'>
                    
                         <label>Your Name</label>
                         <input type='text' class='contact-input' name='name' />
                         
                         <label>Email Address</label>
                         <input style='text-transform:none;' type='text' class='contact-input' name='email' />
                         
                         <label>Phone Number</label>
                         <input style='text-transform:none; width:144px;' type='text' class='contact-input' name='phone' />
                         
                    </div>
                    
                    <div class='input_holder'>
                    
                         <label>Subject</label>
                         <input style='text-transform:none;' type='text' class='contact-input' name='subject' />
                         
                         <label>Message</label>
                         <textarea class='contact-textarea' name='message'></textarea>
                    
                    </div>
                    
                    <input type='submit' class='contact-button' name='send' value='send us your message' />
               
               </form>";
               
               }?>
               
               
            
            </div>

            <!-- dealer enquiry info -->  
            
            <div class='grid_3' id='dealer_enquiry'>
            
               <h1 class="numeros_title">dealer enquiry</h1>
                    
               <p class="numeros_info">Interested in becoming a Pavati dealer? Please click the link below to fill out the necessary information.</p>
               
               <a href='../dealers/?p=inquire' class='big_button'>become a dealer</a>
            
            </div>
            
            <div class='clear'></div>
            
            <!-- page breaker -->
            
            <div class='grid_12' id='content_headers'></div>  
               
            <!-- google map area -->  
               
            <div class='grid_9' id='map_area'>
            
               <iframe style="float:left;" width="700" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=7905+Agate+Road+White+City,+OR+97523&amp;aq=&amp;sll=44.145447,-120.583402&amp;sspn=5.399964,13.392334&amp;ie=UTF8&amp;hq=&amp;hnear=7905+Agate+Rd,+White+City,+Jackson,+Oregon+97503&amp;t=m&amp;ll=42.440624,-122.854271&amp;spn=0.019002,0.061712&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
            
            </div>  
            
            <!-- contact information -->  
            
            <div class='grid_3'>
            
               <div class="contact_numeros">         
                    
                    <h1 class="numeros_title">corporate office</h1>
                    
                    <p class="numeros_info">7905 Agate Road<br>White City, OR 97523<br>United States</p>
                    
                    <h1 class="numeros_title">contact info</h1>
                    
                    <p class="numeros_info">+ 800 866 5269<br>+ 541 840 4298<br>contact@pavati.com</p>
               
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