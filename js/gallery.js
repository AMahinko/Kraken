$(document).ready(function() {
  console.log('gallery.js ready');

  var imageObject;
  var imageUrlArray;
  var offsetValue = 0;



  $('.gallery-button').css('color', 'blue');

  function getPictures() {
    var pictures = null;
    $.ajax({
    url: "http://api.giphy.com/v1/gifs/search?q=audrey+hepburn&api_key=BKnZva5zcGuuBiO0BRi5qezWaMMRt1t3&limit=12&offset="+ offsetValue,
    async: false,
    context: document.body
    }).done(function(response) {
      pictures = response['data'];
      return pictures;
    });
    return pictures;
  }


  function getImageUrl() {
    var urlArray = [];
   for (i = 0; i < imageObject.length; i++) {
    urlArray.push(imageObject[i]['images']['original_still']['url']);
    }
    return urlArray;
  };
  function generateGallery() {

    for (i=0; i<imageUrlArray.length; i++){
      // console.log(i)
      $('.row').append(
        '<div class="gallery-item col-lg-3">' +
          '<img src=' + imageUrlArray[i] + ' class="image">'+
        '</div>'
      )


      // console.log(i);
    }
  }

  function populateGallery() {
  $('.loader').css('display','block');
  imageObject = getPictures();
  imageUrlArray = getImageUrl();
  generateGallery();
  setImageClickFlag();
  setTimeout(function () {
    $('.loader').css('display', 'none');
  }, 20000);
};

  populateGallery();


  //ensuring that scrolling trigger works for certain tablets (scroll function wouldn't fire)
  if (window.innerHeight >= $(document).height()) {

    offsetValue += 12
    populateGallery();

  }

  function setImageClickFlag() {

    $('.image').click(function() {
      var imgurl = $(this).attr('src');
      $('.dimmer').fadeIn(200);
      $('.close').show();
      $('.expanded-image').attr('src', imgurl);
      $('.image-container').slideDown(500);
      $('.close').click(function() {

        $('.dimmer').hide();

      });
    });

  }







  $(window).scroll(function () {
   if ($(window).scrollTop() >= $(document).height() - $(window).height() - 15) {
     offsetValue = offsetValue + 12;
     populateGallery();
     console.log(offsetValue);
   }
});



});
