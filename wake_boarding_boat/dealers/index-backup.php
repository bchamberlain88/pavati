
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
          
          <!-- show showroom input options if showroom is available -->
          
          <script type='text/javascript'>
          
          function showform(element){
              
              var ele = document.getElementById("show_form");
               
			if(ele.style.display == "block") {
					ele.style.display = "none";
			}
			else {
				ele.style.display = "block";
			}
              
          }
          
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
                    
                    <a href='../contact/'><li>contact</li></a>
                    
                    <a><li id="current_nav">dealers</li></a>
                    
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
            
            
            <?php if($p == "inquire"){ 

               /// dealer enquiry page ///
               
               
               if($_POST['submit']){
               
               /// user has submitted enquiry form ///
               
               $name = $_POST['name'];
               $email = $_POST['email'];
               $business = $_POST['business'];
               $phone = $_POST['phone'];
               $website = $_POST['website'];
               $locations = $_POST['locations'];
               $years = $_POST['years'];
               $showroom = $_POST['showroom'];
               $sqfeet = $_POST['sqfeet'];
               $servicedept = $_POST['servicedept'];
               $willing = $_POST['willing'];
               
               if($showroom = "no"){
               
               if(!$name || !$email || !$business || !$phone || !$website || !$years){ 
               
               /// if user did not enter in all fields, return error ///
               
               /// show enquiry form with users entered data, if any ///
               
               echo"<div class='grid_9'>
               
               <h1 class='contact_form_title'>fill out our application to become a pavati dealer</h1>
               
               <div class='error' style='margin:0 0 30px 0; text-align:left;'>Please be sure to fill out all of the fields below.</div>
               
               <form method='post' action='./?p=inquire'>
                    
                    <div class='input_holder'>
                    
                         <label>Your Name</label>
                         <input type='text' class='contact-input' name='name' value='$name' />
                         
                         <label>Your Email Address</label>
                         <input type='text' class='contact-input' name='email' value='$email' />
                         
                         <label>Dealer / Business Name</label>
                         <input style='text-transform:none;' type='text' class='contact-input' name='business' value='$business' />
                         
                         <label>Phone Number</label>
                         <input style='text-transform:none; width:144px;' type='text' class='contact-input' name='phone' value='$phone' />
                         
                         <label>Business Web Address</label>
                         <input style='text-transform:none;' type='text' class='contact-input' name='website' value='$website' />
                         
                         <label>How Many Locations?</label>
                         <select style='width:163px; margin-top:0;' name='locations'>
                              <option selected='selected' value='$locations'>$locations</option>
                              <option value='1'>1</option>
                              <option value='2'>2</option>
                              <option value='3'>3</option>
                              <option value='4'>4</option>
                              <option value='5'>5</option>
                              <option value='6'>6</option>
                              <option value='7'>7</option>
                              <option value='8'>8</option>
                              <option value='9'>9</option>
                              <option value='10'>10</option>
                         </select>         

                    </div>
                    
                    <div class='input_holder'>
                    
                         <label>Years In Business</label>
                         <input style='text-transform:none; width:144px;' type='text' class='contact-input' name='years' value='$years' />
                    
                         <label>Do You Have A Showroom?</label>
                         <select onchange='showform(this.value);' style='width:163px; margin-top:0;' name='showroom'>
                              <option value='no' selected='selected'>No</option>
                              <option value='yes'>Yes</option>
                         </select>
                         
                         
                         <div class='showroom_inputs' id='show_form' style='display:none;'>
                         
                              <label>Approximate Sq. Ft.</label>
                              <input style='text-transform:none; width:144px;' type='text' class='contact-input' name='sqfeet' />
                              
                              <label>Service Department?</label>
                              <select style='width:163px; margin-top:0;' name='servicedept'>
                                   <option value='Yes' selected='selected'>Yes</option>
                                   <option value='No'>No</option>
                              </select>
                              
                              <label>Willing To Showcase Our Boats?</label>
                              <select style='width:163px; margin-top:0;' name='willing'>
                                   <option value='Yes' selected='selected'>Yes</option>
                                   <option value='No'>No</option>
                              </select>
                         
                         </div>
                         
                    
                    </div>
                         
                    <input type='submit' class='contact-button' name='submit' value='submit application' />
               
               </form>
               
               </div>";
               
               }else{
               
               /// if user did enter in all fields, send email ///
            
               $to = "sebastian@pavati.com";
               
               $subject = "Dealer Application - $business";
               
               $message = "$name has submitted a dealer application for your approval.
               
$business
$website
$phone
$locations Location(s)
$years Year(s) in business
Has a show room : $showroom";
               
               $from = "$email";
               
               $headers = "From:" . $from;
               
               mail($to,$subject,$message,$headers);              
            
               echo "<div class='grid_9'>
               
               <h1 class='contact_form_title' style='margin-bottom:0;'>Thanks for your interest in becoming a Pavati dealer</h1>
               
               <p class='thanks'>Your application has been successfully submitted, and is awaiting approval.<br>Once we review your application, we will contact you with more information.<br><br>Thank you,<br>The Pavati Team</p>
               
               </div>";
               

               }
               
               }else{     
               
               if(!$name || !$email || !$business || !$phone || !$website || !$years || !$sqfeet){ 
               
               /// if user did not enter in all fields, return error ///
               
               /// show enquiry form with users entered data, if any ///
               
               echo"<div class='grid_9'>
               
               <h1 class='contact_form_title'>fill out our application to become a pavati dealer</h1>
               
               <div class='error' style='margin:0 0 30px 0; text-align:left;'>Please be sure to fill out all of the fields below.</div>
               
               <form method='post' action='./?p=inquire'>
                    
                    <div class='input_holder'>
                    
                         <label>Your Name</label>
                         <input type='text' class='contact-input' name='name' value='$name' />
                         
                         <label>Your Email Address</label>
                         <input type='text' class='contact-input' name='email' value='$email' />
                         
                         <label>Dealer / Business Name</label>
                         <input style='text-transform:none;' type='text' class='contact-input' name='business' value='$business' />
                         
                         <label>Phone Number</label>
                         <input style='text-transform:none; width:144px;' type='text' class='contact-input' name='phone' value='$phone' />
                         
                         <label>Business Web Address</label>
                         <input style='text-transform:none;' type='text' class='contact-input' name='website' value='$website' />
                         
                         <label>How Many Locations?</label>
                         <select style='width:163px; margin-top:0;' name='locations'>
                              <option selected='selected' value='$locations'>$locations</option>
                              <option value='1'>1</option>
                              <option value='2'>2</option>
                              <option value='3'>3</option>
                              <option value='4'>4</option>
                              <option value='5'>5</option>
                              <option value='6'>6</option>
                              <option value='7'>7</option>
                              <option value='8'>8</option>
                              <option value='9'>9</option>
                              <option value='10'>10</option>
                         </select>

                    </div>
                    
                    <div class='input_holder'>
                    
                         <label>Years In Business</label>
                         <input style='text-transform:none; width:144px;' type='text' class='contact-input' name='years' value='$years' />
                    
                         <label>Do You Have A Showroom?</label>
                         <select onchange='showform(this.value);' style='width:163px; margin-top:0;' name='showroom'>
                              <option value='no'>No</option>
                              <option value='yes' selected='selected'>Yes</option>
                         </select>
                         
                         
                         <div class='showroom_inputs' id='show_form' style='display:block;'>
                         
                              <label>Approximate Sq. Ft.</label>
                              <input style='text-transform:none; width:144px;' type='text' class='contact-input' name='sqfeet' value='$sqfeet' />
                              
                              <label>Service Department?</label>
                              <select style='width:163px; margin-top:0;' name='servicedept'>
                                   <option selected='selected' value='$servicedept'>$servicedept</option>
                                   <option value='Yes'>Yes</option>
                                   <option value='No'>No</option>
                              </select>
                              
                              <label>Willing To Showcase Our Boats?</label>
                              <select style='width:163px; margin-top:0;' name='willing'>
                                   <option selected='selected' value='$willing'>$willing</option>
                                   <option value='Yes'>Yes</option>
                                   <option value='No'>No</option>
                              </select>
                         
                         </div>
                         
                    
                    </div>
                         
                    <input type='submit' class='contact-button' name='submit' value='submit application' />
               
               </form>
               
               </div>";
               
               }else{
               
               /// if user did enter in all fields, send email ///

               $to = "chuck@pavatimarine.com";
               
               $subject = "Dealer Application - $business";
               
               $message = "$name has submitted a dealer application for your approval.
               
$business
$website
$phone
$locations Location(s)
$years Year(s) in business
Has a show room : $showroom
Show room is approximately $sqfeet Sq. Feet
Has a service department : $servicedept
Is willing to showcase our boats : $willing";
               
               $from = "$email";
               
               $headers = "From:" . $from;
               
               mail($to,$subject,$message,$headers);              
            
               echo "<div class='grid_9'>
               
               <h1 class='contact_form_title' style='margin-bottom:0;'>Thanks for your interest in becoming a Pavati dealer</h1>
               
               <p class='thanks'>Your application has been successfully submitted, and is awaiting approval.<br>Once we review your application, we will contact you with more information.<br><br>Thank you,<br>The Pavati Team</p>
               
               </div>";
               
               }
               
               }
               
               }else{
               
               /// show enquiry form ///
               
               echo"<div class='grid_9'>
               
               <h1 class='contact_form_title'>fill out our application to become a pavati dealer</h1>
               
               <form method='post' action='./?p=inquire'>
                    
                    <div class='input_holder'>
                    
                         <label>Your Name</label>
                         <input type='text' class='contact-input' name='name' />
                         
                         <label>Your Email Address</label>
                         <input type='text' class='contact-input' name='email' />
                         
                         <label>Dealer / Business Name</label>
                         <input style='text-transform:none;' type='text' class='contact-input' name='business' />
                         
                         <label>Phone Number</label>
                         <input style='text-transform:none; width:144px;' type='text' class='contact-input' name='phone' />
                         
                         <label>Business Web Address</label>
                         <input style='text-transform:none;' type='text' class='contact-input' name='website' />
                         
                         <label>How Many Locations?</label>
                         <select style='width:163px; margin-top:0;' name='locations'>
                              <option value='1'>1</option>
                              <option value='2'>2</option>
                              <option value='3'>3</option>
                              <option value='4'>4</option>
                              <option value='5'>5</option>
                              <option value='6'>6</option>
                              <option value='7'>7</option>
                              <option value='8'>8</option>
                              <option value='9'>9</option>
                              <option value='10'>10</option>
                         </select>   

                    </div>
                    
                    <div class='input_holder'>
                    
                         <label>Years In Business</label>
                         <input style='text-transform:none; width:144px;' type='text' class='contact-input' name='years' />
                    
                         <label>Do You Have A Showroom?</label>
                         <select onchange='showform(this.value);' style='width:163px; margin-top:0;' name='showroom'>
                              <option value='no'>No</option>
                              <option value='yes'>Yes</option>
                         </select>
                         
                         
                         <div class='showroom_inputs' id='show_form' style='display:none;'>
                         
                              <label>Approximate Sq. Ft.</label>
                              <input style='text-transform:none; width:144px;' type='text' class='contact-input' name='sqfeet' />
                              
                              <label>Service Department?</label>
                              <select style='width:163px; margin-top:0;' name='servicedept'>
                                   <option value='Yes'>Yes</option>
                                   <option value='No'>No</option>
                              </select>
                              
                              <label>Willing To Showcase Our Boats?</label>
                              <select style='width:163px; margin-top:0;' name='willing'>
                                   <option value='Yes'>Yes</option>
                                   <option value='No'>No</option>
                              </select>
                         
                         </div>
                         
                    
                    </div>
                         
                    <input type='submit' class='contact-button' name='submit' value='submit application' />
               
               </form>
               
               </div>";
               
               }
               
          echo"<div class='grid_3' id='dealer_enquiry'>
            
                    <h1 class='numeros_title'>why become a pavati dealer?</h1>
                    <img src='../img/dealers.jpg' />
                    <p class='numeros_info'>Unlike Fiberglass boat companies that are bound by molds, Pavati Wakeboard Boats are engineered by welding heavy gauge aluminum together. This process allows our team to design and develop elegant V-Drive boats that are 40% lighter and 80% stronger than conventional fiberglass boats.</p>                      
                      
               </div>";
            
            }else{ 
               
               /// find a dealer near you ///
               
               /// display search inputs ///
               
               echo "<div class='grid_9' id='find_dealer_area'>
                         
                         <h1 class='contact_form_title' style='margin-bottom:10px;'>find a pavati dealer near you</h1>
                         
                         <form method='post' action='./'>
                         
                              <select name='states'>
                              
                                   <option value='Select a state' selected='selected'>Select a state</option>
                                   
                                   <option value='Alabama'>Alabama</option>
                                   
                                   <option value='Alaska'>Alaska</option>
                                   
                                   <option value='Arizona'>Arizona</option>
                                   
                                   <option value='Arkansas'>Arkansas</option>
                                   
                                   <option value='California'>California</option>
                                   
                                   <option value='Colorado'>Colorado</option>
                                   
                                   <option value='Connecticut'>Connecticut</option>
                                   
                                   <option value='Delaware'>Delaware</option>
                                   
                                   <option value='Florida'>Florida</option>
                                   
                                   <option value='Georgia'>Georgia</option>
                                   
                                   <option value='Hawaii'>Hawaii</option>
                                   
                                   <option value='Idaho'>Idaho</option>
                                   
                                   <option value='Illinois'>Illinois</option>
                                   
                                   <option value='Indiana'>Indiana</option>
                                   
                                   <option value='Iowa'>Iowa</option>
                                   
                                   <option value='Kansas'>Kansas</option>
                                   
                                   <option value='Kentucky'>Kentucky</option>
                                   
                                   <option value='Louisiana'>Louisiana</option>
                                   
                                   <option value='Maine'>Maine</option>
                                   
                                   <option value='Maryland'>Maryland</option>
                                   
                                   <option value='Massachusetts'>Massachusetts</option>
                                   
                                   <option value='Michigan'>Michigan</option>
                                   
                                   <option value='Minnesota'>Minnesota</option>
                                   
                                   <option value='Mississippi'>Mississippi</option>
                                   
                                   <option value='Missouri'>Missouri</option>
                                   
                                   <option value='Montana'>Montana</option>
                                   
                                   <option value='Nebraska'>Nebraska</option>
                                   
                                   <option value='Nevada'>Nevada</option>
                                   
                                   <option value='New Hampshire'>New Hampshire</option>
                                   
                                   <option value='New Jersey'>New Jersey</option>
                                   
                                   <option value='New Mexico'>New Mexico</option>
                                   
                                   <option value='New York'>New York</option>
                                   
                                   <option value='North Carolina'>North Carolina</option>
                                   
                                   <option value='North Dakota'>North Dakota</option>
                                   
                                   <option value='Ohio'>Ohio</option>
                                   
                                   <option value='Oklahoma'>Oklahoma</option>
                                   
                                   <option value='Oregon'>Oregon</option>
                                   
                                   <option value='Pennsylvania'>Pennsylvania</option>
                                   
                                   <option value='Rhode Island'>Rhode Island</option>
                                   
                                   <option value='South Carolina'>South Carolina</option>
                                   
                                   <option value='South Dakota'>South Dakota</option>
                                   
                                   <option value='Tennessee'>Tennessee</option>
                                   
                                   <option value='Texas'>Texas</option>
                                   
                                   <option value='Utah'>Utah</option>
                                   
                                   <option value='Vermont'>Vermont</option>
                                   
                                   <option value='Virginia'>Virginia</option>
                                   
                                   <option value='Washington'>Washington</option>
                                   
                                   <option value='West Virginia'>West Virginia</option>
                                   
                                   <option value='Wisconsin'>Wisconsin</option>
                                   
                                   <option value='Wyoming'>Wyoming</option>
                              
                              </select>
                              
                              <input type='submit' class='search-button' value='Find Dealers' name='find' />
                         
                         </form>
               
                     </div>
                     
                     <div class='grid_3' id='dealer_enquiry'>
            
                         <h1 class='numeros_title'>dealer enquiry</h1>
                              
                         <p class='numeros_info'>Interested in becoming a Pavati dealer? Please click the link below to fill out the necessary information.</p>
                         
                         <a href='../dealers/?p=inquire' class='big_button'>become a dealer</a>
                      
                     </div>
                     
                     <div class='clear'></div>";
               
               if($_POST['find']){
               
               /// search for dealers ///
               
               $state = $_POST['states'];
               
               if(!$state || $state == "Select a state"){
               
               /// if user submits form without state selected, return error ///
               
               echo "<div class='grid_9' id='search_results'>
               
               <div class='error'>Please select a state to search for dealers.</div>
               
               </div>";
               
               }else{
               
               /// if user selected state with a dealer, display dealers ///
               
               if($state == "Arkansas"){
               
               echo "<div class='grid_9' id='search_results'>
               
               <p><b>S&G Xtreme Marine & Pro Shop</b><br>8008 Warden Rd.<br>Sherwood, AR 72120<br><br>+ 501 392 0315<br><a target='new' href='http://www.xtrememarineinc.com'>www.xtrememarineinc.com</a></p>
               
               </div>";
               
               }else{
               
               /// if user selected state without a dealer, show message ///
               
               echo "<div class='grid_9' id='search_results'>
               
               <h1>Sorry, we currently don't have any dealers in $state. Please call <b>+ 800 866 5269</b> for immediate assistance.</h1>
               
               </div>";
               
               }
               
               }

               }else{
               
               

            }}?>
            
            
            <!-- begin page footer -->
          
          <div class='clear'></div>
          
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