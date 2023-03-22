$(".mobile-btn").click(function(){
  $(".responsive-menu").toggleClass("active");
  $(".blank-div").toggleClass("active");    
});
$(".blank-div").click(function(){
  $(".responsive-menu").removeClass("active");
  $(this).removeClass("active")
});

// header include 
// function includeHTML() {
//   var z, i, elmnt, file, xhttp;
//   /* Loop through a collection of all HTML elements: */
//   z = document.getElementsByTagName("*");
//   for (i = 0; i < z.length; i++) {
//     elmnt = z[i];
//     /*search for elements with a certain atrribute:*/
//     file = elmnt.getAttribute("w3-include-html");
//     if (file) {
//       /* Make an HTTP request using the attribute value as the file name: */
//       xhttp = new XMLHttpRequest();
//       xhttp.onreadystatechange = function() {
//         if (this.readyState == 4) {
//           if (this.status == 200) {elmnt.innerHTML = this.responseText;}
//           if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
//           /* Remove the attribute, and call this function once more: */
//           elmnt.removeAttribute("w3-include-html");
//           includeHTML();
//         }
//       }
//       xhttp.open("GET", file, true);
//       xhttp.send();
//       /* Exit the function: */
//       return;
//     }
//   }
// }
// includeHTML()

// header include end 


// service like active 
$('.like').on('click',function(){
    $(this).toggleClass('color-change')
})


// service slider active 
$('.active-service').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    nextArrow: "<button class='slick-prev pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
    prevArrow: "<button class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
});


// testimonial active 
$('.active-testimoni').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    nextArrow: "<button class='slick-prev pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
    prevArrow: "<button class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
});


// odometer 
if ($(".odometer").length) {
    $('.odometer').appear();
    $(document.body).on('appear', '.odometer', function (e) {
        var odo = $(".odometer");
        odo.each(function () {
            var countNumber = $(this).attr("data-count");
            $(this).html(countNumber);
        });
    });
}
// odometer end 


// Brand active 
$('.brand-active').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
});

//pagination active

$('.pagination-list a').on('click',function(){
  $('.pagination-list a').removeClass('active');
  $(this).addClass('active')
})

// appointment button click
$('#mine_btn').on('click',function(){
  $('#other_btn').removeClass('active')
  $(this).addClass('active')
  $('.for-others').addClass('d-none')
})

$('#other_btn').on('click',function(){
  $('#mine_btn').removeClass('active')
  $(this).addClass('active')
  $('.for-others').addClass('d-block').removeClass('d-none')

})
