 $(document).ready(function() {
      
         $('nav').clone().appendTo('.side_bar');
         $('#nav-icon').click(function(e){
             $('body').toggleClass('open');
          });
          $('.side_bar ul li a').click(function(e) {
               if( $(window).width() < 768 )
                   {
               $(this).parent().find('.drop_down').slideToggle();
             $(this).parent().siblings().find('.drop_down').slideUp();
               $(this).parent().toggleClass("active");
               $(this).parent().siblings().removeClass("active");
               }
           });
            
             $('.slider5').slick({
                 dots: true,
                 arrows: false,
                 slidesToShow: 1,
                 slidesToScroll: 1,
                 autoplay: true,
                 autoplaySpeed: 12000,
                 vertical: true,
                 verticalSwiping: true,
                 pauseOnHover:false,
                 customPaging : function(slider, i) {
                    var thumb = $(slider.$slides[i]).data();
                    return '<a class="dot">'+i+'</a>';}
                   
             });
            
             $('.slider-in').slick({
                dots: true,
                arrows: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 6000,
                swipeToSlide: true,
                pauseOnHover:false,
                customPaging : function(slider, i) {
                   var thumb = $(slider.$slides[i]).data();
                   return '<a class="dot">'+i+'</a>';}
                  
            });



             $('.center-slider').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                centerMode: true,
                arrows: false,
                dots: false,
                speed: 100,
                centerPadding: '20px',
                infinite: true,
                autoplaySpeed: 1500,
                autoplay: true,
                responsive: [
                  {
                  breakpoint: 1300,
                  settings: {
                  slidesToShow: 3,
                  slidesToScroll: 1
                  }
                  },
                  {
                  breakpoint: 768,
                  settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
                  }
                  }
                  ]
              });
     
//     $('.nav-menu').each(function(e) => {
//            // window.loca
//            var path = '';
//            if (path == '/aoub') {
//         $(e).a
//     }
//     }
                         
     
     //
     
    });
         
		 

	