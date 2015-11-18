/* scroll to top of page button */
function scroll_to_top(){ jQuery(".scroll-up").click(function(){
jQuery("html, body").delay(200).animate({scrollTop: 0}, 500); }); }

function home_vimeo(){ var window_x = jQuery(window).width();
if( jQuery(".home-vimeo").length > 0 ){ var video = jQuery(".home-vimeo"),
video_x = video.width(), video_y = video_x*1/2.4;
video.attr("height",Math.ceil(video_y)); }else{}}

function about_vimeo(){ var window_x = jQuery(window).width();
if( jQuery(".about-vimeo").length > 0 ){ var video = jQuery(".about-vimeo"),
video_x = video.width(), video_y = video_x*6/10.65;
video.attr("height",Math.ceil(video_y)); }else{}}

function model_vimeo(){ var window_x = jQuery(window).width();
if( jQuery(".model-vimeo").length > 0 ){ var video = jQuery(".model-vimeo"),
video_x = video.width(), video_y = video_x*1/2.4;
video.attr("height",Math.ceil(video_y)); }else{}}

function testimonial_slide(){ var currTest = 0;
var totalTest = jQuery(".testimonials-widget").length;
jQuery(".testimonials-widget").each(function(){ currTest++;
jQuery(".testimonial-slides").append("<div class='testimonial-control' id='testControl-"+currTest+"'></div>");
jQuery(this).addClass("testimonial-"+currTest); });
jQuery(".testimonial-1").show(); jQuery("#testControl-1").addClass("current-testimonial");
jQuery(".testimonial-control").click(function(){ jQuery(".testimonial-control").removeClass("current-testimonial");
jQuery(this).addClass("current-testimonial"); var control = jQuery(this).attr("id").replace("testControl-","");
jQuery(".testimonials-widget").hide(); jQuery(".testimonial-"+control).fadeIn(300); }); }

function boat_model_tabs(){  var slider_height = jQuery(".metaslider").height();
if( jQuery(".model-tabs").css("display") == "block" ){ var tabs_height = jQuery(".model-tabs").height() + 20;
}else{ var tabs_height = 0; }

if( jQuery(".model-tab").length > 0 ){ jQuery(window).scroll(function(){
if( jQuery(window).scrollTop() >= (slider_height - tabs_height) ){ if( jQuery(".model-side-tabs").length > 0 ){}else{
jQuery("body").append("<div class='model-side-tabs'><div class='container'></div></div>"); jQuery(".model-side-tabs").fadeIn(300);
jQuery(".model-tab").each(function(){ var id = jQuery(this).attr("id").replace("model-tab-","");
jQuery(".model-side-tabs .container").append( "<div class='side-tab' id='side-tab-"+id+"'>"+jQuery(this).html()+"</div>" ); });
jQuery(".side-tab").click(function(){ var tab = jQuery(this).attr("id").replace("side-tab-","");
var block = (jQuery("#block-"+tab).offset().top - 160); jQuery("body,html").delay(300).animate({scrollTop: block+"px"}, 600);});
}}else{ jQuery(".model-side-tabs").fadeOut(100, function(){ jQuery(this).remove(); }); }
jQuery(".model-block").each(function(){ var blockTop = (jQuery(this).offset().top - 160);
var blockBottom = blockTop + jQuery(this).height(); var block = jQuery(this).attr("id").replace("block-","");
if( jQuery(window).scrollTop() >= blockTop || jQuery(window).scrollTop <= blockBottom ){
jQuery(".side-tab").removeClass("current-side-tab"); jQuery("#side-tab-"+block).addClass("current-side-tab");
jQuery(".model-tab").removeClass("current-tab"); jQuery("#model-tab-"+block).addClass("current-tab"); } }); });
jQuery(".model-tab").click(function(){ var tab = jQuery(this).attr("id").replace("model-tab-","");
var block = (jQuery("#block-"+tab).offset().top - 160); jQuery(".model-tab").removeClass("current-tab");
jQuery(this).addClass("current-tab"); jQuery("body,html").delay(300).animate({scrollTop: block+"px"}, 600); });
}else{}}

function mobile_menu(){ jQuery(".mobile-toggle").click(function(){
if( jQuery(".mobile-menu").css("right") == "0px" ){
jQuery(".mobile-menu").animate({right: "-100%"}, 300); }else{
jQuery(".mobile-menu").animate({right: "0px"}, 300); } }); }

function close_form_return(){
jQuery(".form-return").delay(5000).animate({top: 0},300, function(){
jQuery(this).remove(); }); }

function closePopup(){ var shadow = jQuery(".shadow"), popup = jQuery(".popup");
window.location.hash = ''; popup.delay(100).fadeOut(300, function(){
shadow.delay(100).fadeOut(300, function(){ jQuery(shadow).remove();
jQuery(popup).remove(); }); }); }

function check_email(email){
var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
return regex.test(email); }

function popup_error(string){ if( jQuery(".popup-error").length > 0 ){
jQuery(".popup-error").empty().html(string+"<button class='close-popup-error'><i class='icon-remove'></i></button>");
}else{ jQuery(".popup").append("<div class='popup-error'/>");
jQuery(".popup-error").empty().hide().html(string+"<button class='close-popup-error'><i class='icon-remove'></i></button>").fadeIn(300); }
jQuery(".close-popup-error").click(function(){ jQuery(".popup-error").delay(100).fadeOut(300, function(){ jQuery(".popup-error").remove(); }); }); }

function popup_form(){ var popup_form = jQuery(".popup-form"),
popup_input = jQuery(".popup-input"), input_max = popup_input.length;
popup_form.submit(function(e){ var input_val = 0;
popup_input.each(function(){ var form_val = jQuery(this).val();
if(form_val == ""){}else{ input_val++; } }); if(input_val == input_max){
if(check_email(jQuery("#input-email").val()) == false){
e.preventDefault(); popup_error("Please enter a valid email address.");
}else{}}else{ e.preventDefault();
popup_error("Please fill out all fields before submitting your message.");
} }); }

function dealer_inquiry(){ window.location.hash = 'dealer-inquiry';
if( jQuery(".shadow").length > 0 ){}else{ jQuery("body").append("<div class='shadow'/>");
jQuery("body").append("<div class='popup'/>");
jQuery(".popup").load("http://pavati.com/wake/wp-content/themes/twentytwelve/dealer-inquiry.php", function(){
jQuery(".shadow").hide().fadeIn(300, function(){ jQuery(".popup").hide().delay(100).fadeIn(300, function(){  
popup_form(); jQuery(".shadow, .close-popup").click(function(){ closePopup(); }); }); }); }); } }

function contact(){ window.location.hash = 'contact';
if( jQuery(".shadow").length > 0 ){}else{ jQuery("body").append("<div class='shadow'/>");
jQuery("body").append("<div class='popup'/>");
jQuery(".popup").load("http://pavati.com/wake/wp-content/themes/twentytwelve/contact.php", function(){
jQuery(".shadow").hide().fadeIn(300, function(){ jQuery(".popup").hide().delay(100).fadeIn(300, function(){  
popup_form(); jQuery(".shadow, .close-popup").click(function(){ closePopup(); }); }); }); }); } }

function footer_links(){ jQuery(".footer-link").click(function(e){
var link = jQuery(this).attr("id").replace("footer-","");
if(link == "contact"){ e.preventDefault(); contact(); } }); }

function close_menu(){

    var menu = jQuery(".drop-menu"),
        menu_y = menu.height();

    menu.css("top","-"+menu_y+"px");
    jQuery(".menu-closer").remove();

}

function drop_menu(){

    var menu = jQuery(".drop-menu"),
        menu_y = menu.height(),
        closer = jQuery(".menu-closer");

    if(menu.css("top") == "71px"){

    }else{

        menu.css("top","71px");
        jQuery("body").append("<div class='menu-closer'/>");

    }

    jQuery(".menu-closer, .site-logo").mouseover(function(){

        close_menu();

    });

}

function header_links(){ jQuery(".menu-item").click(function(e){
var link = jQuery(this).children().html().toLowerCase();
if(link == "dealer inquiry"){ e.preventDefault(); dealer_inquiry(); } }); 
jQuery(".menu-item").mouseover(function(){
var hovered = jQuery(this).children().html().toLowerCase();
if(hovered == "boat models"){ drop_menu(); }else{ close_menu(); } }); }

jQuery(document).ready(function() { testimonial_slide(); boat_model_tabs();
scroll_to_top(); mobile_menu(); home_vimeo(); about_vimeo(); footer_links();
close_form_return(); header_links(); model_vimeo();

jQuery("#addressInput").attr("placeholder","Search for Pavati dealers by location...");
jQuery("#map").attr("style","").css("position","fixed").css("height", (jQuery(window).height() - 70) );
jQuery("#searchForm").append("<button class='contact-button' id='contact-submit'>Find Dealer Locations</button>");
jQuery(".slp_result_directions a").css("background","red");

});

jQuery(window).load(function(){
if(window.location.href.indexOf("contact") > 0){ contact(); }
if(window.location.href.indexOf("dealer-inquiry") > 0){ dealer_inquiry(); } });

jQuery(window).resize(function(){ home_vimeo(); about_vimeo();
jQuery("#map").attr("style","").css("position","fixed").css("height", (jQuery(window).height() - 70) ); });

/* show scroll to top when screen is scrolled past 100% height */
jQuery(window).scroll(function(){ if( jQuery(window).scrollTop() >= jQuery(window).height() ){
jQuery(".scroll-up").css("bottom",0); }else{ jQuery(".scroll-up").css("bottom","-60px"); } });