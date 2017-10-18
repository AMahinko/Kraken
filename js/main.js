$(document).ready(function() {
  console.log('main.js ready');
  $('#menu-burger').click(function() {
    console.log('clicked!');
    $('#mobile-logo').toggle(400);
    $('#mobile-navlinks').toggle(400);
    $('.avatar-mobile').toggle(400);
  });




});
