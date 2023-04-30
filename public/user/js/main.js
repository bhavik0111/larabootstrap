/*-----animation-start-------*/

function aos_init() {
    AOS.init({
       duration: 1000,
       easing: "ease-in-out",
       once: true,
       mirror: false
    });
 }
 window.addEventListener('load', () => {
    aos_init();
 });

 /*-----animation-end-------*/

/*-----sticky-header-start-------*/

$(document).ready(function() {
    if ($(window).width() <= 991) {
      $('.navesticky').removeClass('sticky');
  } else {
      $('.navesticky').addClass('sticky');
      $('.sticky').stickMe(); 
  }
 });

/*-----sticky-header-end-------*/

/*-----menu-start-------*/

jQuery(document).ready(function(){
    jQuery("#menu-button").bind('touchstart mousedown', function(event){
       event.preventDefault();
       if (jQuery("#menu-button").hasClass("menu-opened"))
       {
       jQuery("#menu-button").removeClass("menu-opened");
       }
       else{
        jQuery("#menu-button").addClass("menu-opened");
       }
    });
});

/*-----menu-end-------*/

/*-----language-dropdown-start-------*/

$(document).ready(function(){
    $(".usertrgr").click(function(){
        $(".userdropdown").toggleClass('show-userdropdown')  
      });
      $('body').click(function(evt){    
        if($(evt.target).closest('.usertrgr,.tpuser-sec').length)
        return;
        $(".userdropdown").removeClass("show-userdropdown");
      });
   });

/*-----language-dropdown-end-------*/
