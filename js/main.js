$(document).ready(function() {
  console.log('main.js ready');
  $('#menu-burger').click(function() {
    console.log('clicked!');
    $('#mobile-logo').toggle()
    $('#mobile-navlinks').toggle()


    $('.avatar-mobile').toggle(400)
  });






});
