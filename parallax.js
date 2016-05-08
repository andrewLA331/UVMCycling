$( document ).ready(function() {
  var ypos, elements, pinner, dw, d, y, ypos2;
  elements = $(".parallax");
  pinner = $(".slide");
 /* d = $("#d-back.parallax");
  dw = $('#description.slide');*/
  $( window ).scroll(function(){
    ypos = window.pageYOffset;
  /*  y = $('div#description-wrap').offset().top;
    ypos2 = $("#d-back.parallax").offset().y; */
    elements.css({"-ms-transform":"translate3d(0, " + ypos * .4 + "px, 0)","-webkit-transform": "translate3d(0, " + ypos * .4 + "px, 0)","transform": "translate3d(0, " + ypos * .4 + "px, 0)"});
    pinner.css({"-ms-transform":"translate3d(0, " + ypos * -.35 + "px, 0)","-webkit-transform": "translate3d(0, " + ypos * -.35 + "px, 0))","transform": "translate3d(0, " + ypos * -.35 + "px, 0)"});
  /*  d.css({"-ms-transform": "translate3d(0, " + ypos2 * .4 + "px, 0)","-webkit-transform": "translate3d(0, " + ypos2 * .4  + "px, 0)","transform": "translate3d(0, " + ypos2 * .4 + "px, 0)"});
    dw.css({"-ms-transform": "skewX(30deg) translate3d(0, " + ypos2 * -.25 + "px, 0)","-webkit-transform": "skewX(30deg) translate3d(0, " + ypos2 * -.25 + "px, 0)","transform": "skewX(30deg)!important translate3d(0, " + ypos2 * -.25 + "px, 0)"});*/
  });
});