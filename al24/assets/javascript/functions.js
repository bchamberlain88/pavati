// LOAD THE DOCUMENT
$(document).ready(function(){ 
    $(function(){
        $.preload(["../images/pavati-bkg-lights-off.jpg", "../images/pavati-bkg-lights-on.jpg", "../images/pavati-logo.png", "../images/al24.png"]);
        tabOpen = 0; abt_y = $(".about-page").height() + 55;
        $(".about-page").css("bottom", "-"+abt_y+"px");
        if($.cookie("loaded") == "true"){
        // COOKIE EXISTS - SHOW ELEMENTS
        $(".boat, .lights, .slogan, .subscribe-form, .logo, .al24, .countdown, .about-page, .fb-like").show();
        $(".about-tab").delay(500).animate({top: "-35px"},500);
        }else{ // COOKIE DOESNT EXIST - FADE IN ELEMENTS
        $.cookie("loaded","true", { expires: 2, path: "/" });
        $(".loading").delay(2000).fadeOut(250, function(){
        // FADE IN THE ELEMENTS
        $(".slogan").delay(500).fadeIn(500); $(".boat").delay(1000).fadeIn(2000);
        $(".lights, .subscribe-form, .logo, .al24, .countdown, .fb-like").hide().delay(3000).fadeIn(500);
        $(".about-tab").delay(3000).animate({top: "-35px"},500); }); }
        // VALIDATE EMAIL ADDRESS
        function checkEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email); }
        // COUNTDOWN TIMER
        $(".countdown").jCountdown({
        timeText:"2014/01/01 11:00:00", timeZone:-8, style:"metal", color:"black", width:0, textGroupSpace:20, textSpace:0,
        reflection:false, dayTextNumber:2, displayDay:true, displayHour:true, displayMinute:true, displaySecond:true,
        displayLabel:true, onFinish:function(){ 
        // WHAT TO DO WHEN COUNTDOWN IS FINISHED
        alert("finish"); }});
        // APPEND INPUT TO AWEBER FORM
        $(".input").keyup(function(e){ var key = e.keyCode || e.which;
        if(key == 13){ $(".button").click(); }else{
        $("input[name='email']").val(this.value); }});
        // CLICK THE SUBSCRIBE BUTTON
        $(".button").click(function(){ $(".form-return").slideUp(250, function(){ $(this).remove() });
        if( $(".input").val() == "" ){ // EMAIL FIELD IS EMPTY - ERROR
        $(".subscribe-form").prepend("<div class='form-return' />");
        $(".form-return").html("<div class='top-stripes' /><i class='warning fa fa-warning'></i>Please enter a valid email address, and we'll email you when the new site is ready.").slideDown(250);
        }else{ // EMAIL ADDRESS IS NOT VALID FORMAT - ERROR
        if( checkEmail($(".input").val()) == false ){
        $(".subscribe-form").prepend("<div class='form-return' />");
        $(".form-return").html("<div class='top-stripes' /><i class='warning fa fa-warning'></i>Please enter a valid email address, and we'll email you when the new site is ready.").slideDown(250);
        }else{ // EMAIL ADDRESS IS VALID FORMAT - SUBSCRIBE
            
        $(".submit").click();  // SEND INPUT DATA TO AWEBER
        
        }} $(".form-return").click(function(){
        $(".form-return").slideUp(250,function(){ $(this).remove(); }); }); });
        // CLICK THE MORE INFO TAB
        $(".about-tab").click(function(){
        if(tabOpen == 0){ tabOpen = 1;
        $("body").append("<div class='shadow' />");
        $(".shadow").delay(200).fadeIn(350);
        $(".about-page").delay(200).animate({bottom: 0}, 350, function(){
        $(".about-tab").html("Less Info<i class='info-icon fa fa-minus'></i>");
        $(this).animate({bottom: "-15px"}, 200); });
        }else{ $("body").append("<div class='shadow' />");
        $(".shadow").fadeOut(350, function(){ $(this).remove(); }); tabOpen = 0; 
        $(".about-page").animate({bottom: 0}, 200, function(){
        $(".about-tab").html("More Info<i class='info-icon fa fa-plus'></i>");
        $(this).animate({bottom: "-" + abt_y + "px"}, 350); }); }});
    }); // END PRELOADING FUNCTION
}); // END DOCUMENT READY