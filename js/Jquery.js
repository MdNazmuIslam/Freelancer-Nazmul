jQuery(document).ready(function () {
  
  // // navbar
  // $(".navbar-nav .nav-item").click(function(){
  //   $(this).addClass("active")
  // });
  try{
    $(".min-box .box").hover(
      function () {
        $(".content_right .market_place").css({
          transform: "translateY(-100px)",
          opacity: "0",
        });
      },
      function () {
        $(" .content_right .market_place").css({
          transform: "translateY(0px)",
          opacity: "1",
        });
      }
    );
}catch(error){

}

try{
  /* jquery plugins 1*/
  var typed = new Typed(".type", {
    strings: ["Web designer", "Web Developer ", "Email template designer"],
    typeSpeed: 60,
    backSpeed: 60,
    loop: true,
  });

}catch(error){

}
 
try{
 /* jquery plugins 1*/
 var typed = new Typed(".profession", {
  strings: ["Web designer", "Web Developer ", "Email template designer"],
  typeSpeed: 60,
  backSpeed: 60,
  loop: true,
});
}catch(error){

}
try{
  // jQuery Plugin 2
  var mixer = mixitup(".Portfolio_item");
}catch(error){

}
 /*
try{

  var goScrolling = function(elem){
   var docViewTop = $(window).scrollTop(1000);
   var docViewBottom = docViewTop + $(window).height();
   var elemTop = elem.offset().top;
   var elemBottom = elemTop + elem.height();
   return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
  };


  $('.progress_box .progress-bar').data( 'width', $(this).width()).css({
    with:0,
  });

  $(window).scroll(function(){
    $('.progress_box .progress-bar').each(function(){
      if(goScrolling($(this))){
        $(this).css({
          width : $(this).attr('data-value') + '%',
         
        });
      }
    })
  })

}catch(error){

}
*/


  


});
