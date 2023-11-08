<?php
$seo_title = "Download Brochure - Pi Datacenters | Explore our Product Portfolio";
$seo_description = "Download the Pi Datacenters' latest brochure and explore everything you need to know about data center services, infrastructure, and management in India. Get to know about our unique solutions and advanced product range. Download the brochure today!";
$seo_keywords = "Product Portfolio, Data Center Services, data center infrastructure, data centers in india";
?>
<?php include('php/inner-header.php'); ?>
<style>
  article.tabs {
    position: relative;
    display: block;
    width: 100%;
    height: 700px;
    margin: 0 auto;
  }

  article.tabs section {
    width: 100%;
    position: absolute;
    display: block;
    top: 1.8em;
    left: 0;
    padding: 10px 20px 50px;
    background-color: transparent;
    border-radius: 5px;
    z-index: 0;
    box-shadow: none;
    max-width: 1110px;
    margin: 0 auto;
    right: 0;
  }

  article.tabs section:first-child {
    z-index: 1;
    background: white;
  }

  article.tabs section h2 {
    position: absolute;
    font-size: 20px;
    font-weight: normal;
    height: 1.8em;
    top: auto;
    left: 10px;
    padding: 0;
    margin: 0;
    border-radius: 5px 5px 0 0;
    height: 50px;
    line-height: 50px;
    width: 50px;
    left: 0;
    right: 0;
    margin: 0 auto;
    bottom: -55px;
  }

  article.tabs section:nth-child(1) h2 {
    left: -65px;
  }

  article.tabs section:nth-child(2) h2 {
    left: 65px;
  }

  article.tabs section:nth-child(3) h2 {
    left: 200px;
    /* bottom: -5px; */
    bottom: -17px;
  }

  article.tabs section:nth-child(4) h2 {
    left: 105px;
  }

  article.tabs section:nth-child(5) h2 {
    left: 240px;
  }

  article.tabs section:nth-child(6) h2 {
    left: 375px;
  }

  article.tabs section h2 a {
    display: block;
    width: 100%;
    line-height: 1.8em;
    text-align: center;
    text-decoration: none;
    color: inherit;
    outline: 0 none;
    background: #acb8c3;
    color: #ffffff;
    width: 50px;
    height: 50px;
    line-height: 50px;
    border-radius: 40px;
    text-align: center;
    padding: 0;
    margin-top: 46px;
  }

  article.tabs section,
  article.tabs section h2 {
    -webkit-transition: all 500ms ease;
    -moz-transition: all 500ms ease;
    -ms-transition: all 500ms ease;
    -o-transition: all 500ms ease;
    transition: all 500ms ease;
  }

  article.tabs section:target,
  article.tabs section:target h2 {
    color: #333;
    background-color: #fff;
    z-index: 2;
  }

  article.tabs section:target h2 a {
    background-color: #2680EB !important;
    color: #ffffff !important;
  }








  @media only screen and (min-width: 1200px) and (max-width: 1350px) {
    article.tabs section:nth-child(3) h2 {
      left: 200px;
      bottom: -55px;
    }
  }
</style>

<!-- main starts here -->
<div class="about-banner">
  <div class="about-banner-blk">
    <img src="images/brochure.jpg" alt="brochure-ban11" width="1920" height="210">
    <h2>Brochure</h2>

  </div>
</div>
<!--<div class="brochure-blk">
               <div class="container">
                 <div class="brochure-main">
                        <h2>Brochure</h2>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dui mauris, vehicula vel commodo at, sollicitudin sed magna. Quisque nec ligula ligula. Ut tincidunt molestie auctor. Morbi in lacus sit amet odio ornare tincidunt ut vitae nunc. Praesent iaculis luctus nisl, quis</p>
                      
                     <div class="testimonial-block">
              <div class="container">
                  <div class="testimonial-block-main">
                          <div class="tabBlock">
                  <ul class="tabBlock-tabs nav-tabs feature-tab  border-bottom-0 d-flex flex-wrap justify-content-center" data-tabs="tabs">
                     <li class="tabBlock-tab is-active animatable fadeInUp">
                        <a class="nav-link" data-toggle="tab">1
                        </a>
                     </li>
                     <li class="tabBlock-tab  animatable fadeInUp">
                        <a class="nav-link" data-toggle="tab">2
                        </a>
                     </li>
                     <li class="tabBlock-tab  animatable fadeInUp">
                        <a class="nav-link" data-toggle="tab">3
                        </a>
                     </li>
                     <li class="tabBlock-tab  animatable fadeInUp">
                        <a class="nav-link" data-toggle="tab">4
                        </a>
                     </li>
                     <li class="tabBlock-tab  animatable fadeInUp">
                        <a class="nav-link" data-toggle="tab">5
                        </a>
                     </li><li class="tabBlock-tab  animatable fadeInUp">
                        <a class="nav-link" data-toggle="tab">6
                        </a>
                     </li>
                  </ul>
                     <div class="tab-content tabBlock-content">
                     <div class="tabBlock-pane">
                         <div class="brochure-main-cnt row row-reverse">
                         <div class="brochure-main-cnt-rt col-md-6">
                                 <img src="images/brochure-img-1.png" alt="brochure-img-1" width="661" height="446">
                            </div>
                         <div class="brochure-main-cnt-lt col-md-6">
                             <h3>Product Portfolio</h3>
                             <p>Are you looking for a reliable and secure datacenter and cloud provider for your business? </p>
                             <p>Look no further than Pi DatacentersÂ®! Our team of experts has put together a comprehensive product portfolio featuring state-of-the-art datacenters and a range of cloud services. From colocation to managed services, we have a solution to fit the needs of your organization.</p>
                             <a href="images/data-center-services-portfolio-2.pdf" target="_blank">Download Brochure</a>
                             
                            </div>
                          
                     </div>
                     </div>
                      <div class="tabBlock-pane">
                             <div class="brochure-main-cnt row row-reverse">
                          <div class="brochure-main-cnt-rt col-md-6">
                                 <img src="images/brochure-img-2.png" alt="brochure-img-1" width="661" height="446">
                            </div>
                         <div class="brochure-main-cnt-lt col-md-6">
                             <h3>Data Center Portfolio</h3>
                             <p>Want to unlock a wealth of options for your business? </p>
                             <p>Find out about Pi DatacentersÂ® Advisory, Colocation, Operator Design, Build, and PMC services. We have a wide range of services to meet the diverse needs of different businesses. Our state-of-the-art data center infrastructure is equipped with advanced technology to ensure zero downtime & comprehensive security needed.</p>
                             <a href="images/corporate-brochure%20-5.pdf" target="_blank">Download Brochure</a>

                            </div>
                          
                     </div>
                       
                     </div>  
                      <div class="tabBlock-pane">
                        <div class="brochure-main-cnt row row-reverse">
                          <div class="brochure-main-cnt-rt col-md-6">
                                 <img src="images/brochure-img-3.png" alt="brochure-img-3" width="661" height="446">
                            </div>
                         <div class="brochure-main-cnt-lt col-md-6">
                             <h3>Healthcare</h3>
                             <p>Creating opportunities for digitization in the healthcare space is the need of the hour for precision diagnostics and accurate treatments, thereby assuring the patients of faster recovery and improved health conditions. Know more about how Pi is powering the paradigm shift in modern healthcare for rural India:</p>
                             <a href="#" target="_blank">Download Brochure</a>
                            </div>
                         
                     </div>
                     </div>  
                     <div class="tabBlock-pane">
                         <div class="brochure-main-cnt row row-reverse">
                          <div class="brochure-main-cnt-rt col-md-6">
                                 <img src="images/brochure-img-4.png" alt="brochure-img-4" width="661" height="446">
                            </div>
                         <div class="brochure-main-cnt-lt col-md-6">
                             <h3>Media & Entertainment</h3>
                             <p>A paradigm shift in the media and entertainment world has started. The world has been rapidly moving towards Over The Top (OTT) entertainment services like Hotstar, Netflix, Amazon Prime Videos and more, from the traditional medium of television. With increasing reach of smartphones and cheaper internet, these OTT services are thriving, and rural India is not behind in following the trend. Cloud services are a major backbone of these on-demand services, and also the reason behind their rapid growth. Know more about how Pi enables sharing of happiness through truly world-class services for on-demand media and entertainment players:</p>
                             <a href="#" target="_blank">Download Brochure</a>
                            </div>
                          
                     </div>
                     </div>   
                     <div class="tabBlock-pane">
                         <div class="brochure-main-cnt row row-reverse">
                         <div class="brochure-main-cnt-rt col-md-6">
                                 <img src="images/brochure-img-5.png" alt="brochure-img-5" width="661" height="446">
                            </div>
                         <div class="brochure-main-cnt-lt col-md-6">
                             <h3>Secure Transactions</h3>
                             <p>As the digital economy is taking strides into rural India, it is necessary to establish a strong infrastructure backbone, to support the digitization wave. The demonetization effect has also resulted in initiatives to strengthen and better the rural digital banking scenarios. Know more about how Pi is powering secure transactions and enabling this transformation, in rural India:
:</p>
                              <a href="#" target="_blank">Download Brochure</a>
                            </div>
                          
                     </div>
                     </div>   
                     <div class="tabBlock-pane">
                       <div class="brochure-main-cnt row row-reverse">
                          <div class="brochure-main-cnt-rt col-md-6">
                                 <img src="images/brochure-img-6.png" alt="brochure-img-6" width="661" height="446">
                            </div>
                         <div class="brochure-main-cnt-lt col-md-6">
                             <h3>Digitizing All Walks of Life</h3>
                             <p>Todayâ€™s fast-paced world has a digital answer and an on-demand solution, for every walk of life, making digitization the way of life. With the recent exponential growth in smartphone penetration and affordable internet services owing to competition in the telecom market. There is a significant increase in the availability and popularity of digital services.</p>
                             <p>Planning your trip â€“ avoiding long queues and dependencies on agents, having a cuisine of choice at the comfort of your home, accessing government records â€“ to take the informed call, booking the doctor appointment â€“ without having to hear the â€˜always busyâ€™ tone on phones, all of these and many more, are today just a click awayâ€¦</p>
                             <a href="#">Download Brochure</a>
                            </div>
                          
                     </div>
                     </div>  
                  </div>
              
                </div>
                        
                      
                  </div>
              </div>
          </div>
                   </div>
                   
            </div> 
          </div>-->
<!--what-is-noc starts here -->
<div class="container">
  <article class="tabs">


    <section id="tab1/title/Product-Portfolio">
      <h2 class="scroll-link"><a href="#tab1/title/Product-Portfolio" onclick="scrollToTop(); return false;">1</a></h2>
      <div class="brochure-main-cnt row row-reverse">
        <div class="brochure-main-cnt-rt col-md-6">
          <img src="images/brochure-img-1.png" alt="brochure-img-1" width="661" height="446">
        </div>
        <div class="brochure-main-cnt-lt col-md-6">
          <h3>Product Portfolio:</h3>
          <p style="color:#242424 !important;">Are you looking for a reliable and secure datacenter and cloud provider for your business? </p>
          <p style="color:#242424 !important;">Look no further than Pi DATACENTERSÂ®! Our team of experts has put together a comprehensive product portfolio featuring state-of-the-art datacenters and a range of cloud services. From colocation to managed services, we have a solution to fit the needs of your organization.</p>
          <a href="images/new-corporate-brochure.pdf" target="_blank">Download Brochure</a>

        </div>

      </div>
    </section>

    <section id="tab2/title/Data-Center-Services-Portfolio">
      <h2><a href="#tab2/title/Data-Center-Services-Portfolio" class="don">2</a></h2>
      <div class="brochure-main-cnt row row-reverse">
        <div class="brochure-main-cnt-rt col-md-6">
          <img src="images/brochure-img-2.png" alt="brochure-img-1" width="661" height="446">
        </div>
        <div class="brochure-main-cnt-lt col-md-6">
          <h3 style="line-height:48px">Data Center Services Portfolio:</h3>
          <p style="color:#242424 !important;">Want to unlock a wealth of options for your business? </p>
          <p style="color:#242424 !important;">Find out about Pi DATACENTERSÂ® Advisory, Colocation, Operator Design, Build, and PMC services. We have a wide range of services to meet the diverse needs of different businesses. Our state-of-the-art data center infrastructure is equipped with advanced technology to ensure zero downtime & comprehensive security needed.</p>
          <a href="images/new-data-center-services-portfolio-2.2.pdf" target="_blank">Download Brochure</a>

        </div>

      </div>
    </section>
    <section id="tab3/title/Ready-to-take-your-business-to-new-heights">
      <h2><a href="#tab3/title/Ready-to-take-your-business-to-new-heights" class="don">3</a></h2>
      <div class="brochure-main-cnt row row-reverse">
        <div class="brochure-main-cnt-rt col-md-6">
          <img src="images/multi-cloud-copy.png" alt="brochure-img-1" width="661" height="446">
        </div>
        <div class="brochure-main-cnt-lt col-md-6">
          <h3 style="line-height:48px">Multi-Cloud Services:</h3>



          <p style="color:#242424 !important;">Ready to take your business to new heights? </p>
          <!-- <h3 style="line-height:48px">Ready to take your business to new heights? </h3> -->
          <p style="color:#242424 !important;">Explore our comprehensive range of cloud services and experience the power of seamless integration, a single pane of glass view, quick time-to-market, flexibility, scalability, resiliency, business continuity, and cost-efficiency without compromising critical security or regulatory compliance with Pi Managed Multi Cloud Ecosystem, Powered by Pi DATACENTERSÂ®!
          </p>
          <p style="color:#242424 !important;">Discover the limitless possibilities for your organization's success. Get started with us today by downloading our brochure to discover more about the individualized multi-cloud solutions we offer.</p>
          <a href="images/new-multi-cloud-brochure-2.pdf" target="_blank">Download Brochure</a>

        </div>

      </div>
    </section>



    <!--<section id="tab3?keyword='fastest-technology'">
    <h2><a href="#tab3?keyword='fastest-technology'">3</a></h2>
    <div class="brochure-main-cnt row row-reverse">
                          <div class="brochure-main-cnt-rt col-md-6">
                                 <img src="images/brochure-img-3.png" alt="brochure-img-3" width="661" height="446">
                            </div>
                         <div class="brochure-main-cnt-lt col-md-6">
                             <h3>Healthcare</h3>
                             <p>Creating opportunities for digitization in the healthcare space is the need of the hour for precision diagnostics and accurate treatments, thereby assuring the patients of faster recovery and improved health conditions. Know more about how Pi is powering the paradigm shift in modern healthcare for rural India:</p>
                             <a href="#" target="_blank">Download Brochure</a>
                            </div>
                         
                     </div>
</section>-->
    <!--<section id="tab4?keyword='helloworld-information'">
    <h2><a href="#tab4?keyword='helloworld-information'">4</a></h2>
 <div class="brochure-main-cnt row row-reverse">
                          <div class="brochure-main-cnt-rt col-md-6">
                                 <img src="images/brochure-img-4.png" alt="brochure-img-4" width="661" height="446">
                            </div>
                         <div class="brochure-main-cnt-lt col-md-6">
                             <h3>Media & Entertainment</h3>
                             <p>A paradigm shift in the media and entertainment world has started. The world has been rapidly moving towards Over The Top (OTT) entertainment services like Hotstar, Netflix, Amazon Prime Videos and more, from the traditional medium of television. With increasing reach of smartphones and cheaper internet, these OTT services are thriving, and rural India is not behind in following the trend. Cloud services are a major backbone of these on-demand services, and also the reason behind their rapid growth. Know more about how Pi enables sharing of happiness through truly world-class services for on-demand media and entertainment players:</p>
                             <a href="#" target="_blank">Download Brochure</a>
                            </div>
                          
                     </div>
</section>

<section id="tab5?keyword='fastest-technology'">
    <h2><a href="#tab5?keyword='fastest-technology'">5</a></h2>
        <div class="brochure-main-cnt row row-reverse">
                         <div class="brochure-main-cnt-rt col-md-6">
                                 <img src="images/brochure-img-5.png" alt="brochure-img-5" width="661" height="446">
                            </div>
                         <div class="brochure-main-cnt-lt col-md-6">
                             <h3>Secure Transactions</h3>
                             <p>As the digital economy is taking strides into rural India, it is necessary to establish a strong infrastructure backbone, to support the digitization wave. The demonetization effect has also resulted in initiatives to strengthen and better the rural digital banking scenarios. Know more about how Pi is powering secure transactions and enabling this transformation, in rural India:
:</p>
                              <a href="#" target="_blank">Download Brochure</a>
                            </div>
                          
                     </div>
</section>
               <section id="tab6?keyword='helloworld-information'">
    <h2><a href="#tab6?keyword='helloworld-information'">6</a></h2>
    <div class="brochure-main-cnt row row-reverse">
                          <div class="brochure-main-cnt-rt col-md-6">
                                 <img src="images/brochure-img-6.png" alt="brochure-img-6" width="661" height="446">
                            </div>
                         <div class="brochure-main-cnt-lt col-md-6">
                             <h3>Digitizing All Walks of Life</h3>
                             <p>Todayâ€™s fast-paced world has a digital answer and an on-demand solution, for every walk of life, making digitization the way of life. With the recent exponential growth in smartphone penetration and affordable internet services owing to competition in the telecom market. There is a significant increase in the availability and popularity of digital services.</p>
                             <p>Planning your trip â€“ avoiding long queues and dependencies on agents, having a cuisine of choice at the comfort of your home, accessing government records â€“ to take the informed call, booking the doctor appointment â€“ without having to hear the â€˜always busyâ€™ tone on phones, all of these and many more, are today just a click awayâ€¦</p>
                             <a href="#">Download Brochure</a>
                            </div>
                          
                     </div>
</section>-->



  </article>
</div>

<?php include('php/footer.php'); ?>

<div id="modal-1" class="modalDialog">
  <div class="fill-your-details">

    <div class="modal-content">
      <div class="modal-container">
        <a href="#close" title="Close" class="close">x</a>
        <div class="modal-body">
          <div class=" row">
            <div class="fill-your-details-cnt">
              <h4>Fill Your Details</h4>
              <form>
                <ul class="row">
                  <li class="col-md-6">
                    <label>Full Name</label>
                    <input type="text">
                  </li>
                  <li class="col-md-6">
                    <label>Company Name</label>
                    <input type="text">
                  </li>
                  <li class="col-md-6">
                    <label>Mobile No</label>
                    <input type="text">
                  </li>
                  <li class="col-md-6">
                    <label>Email Address</label>
                    <input type="text">
                  </li>
                  <li class="col-12">
                    <button>Download Brochure</button>
                  </li>
                </ul>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--footer ends-->
</div>
<!-- wrapper ends -->
<script src="js/wow.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/main-pi.js"></script>
<script>
  $(document).ready(function() {
    $('.slider1').slick({
      slidesToShow: 4,
      dots: true,
      arrows: false,
      //adaptiveHeight: true,
      responsive: [{
          breakpoint: 768,
          settings: {
            arrows: false,
            slidesToShow: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: false,
            slidesToShow: 1
          }
        }
      ]
    });


    //animation
    wow = new WOW({
      animateClass: 'animated',
      offset: 100,
      mobile: true
    });
    wow.init();
  });
</script>
<script>
  $(document).ready(function() {
    $('.slider').slick({
      slidesToShow: 1,
      dots: true,
      arrows: false,
      //adaptiveHeight: true,
      responsive: [{
          breakpoint: 768,
          settings: {
            arrows: false,
            slidesToShow: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: false,
            slidesToShow: 1
          }
        }
      ]
    });


    //animation
    wow = new WOW({
      animateClass: 'animated',
      offset: 100,
      mobile: true
    });
    wow.init();
  });
</script>
<script>
  $(document).ready(function(e) {
    var TabBlock = {
      s: {
        animLen: 200
      },

      init: function() {
        TabBlock.bindUIActions();
        TabBlock.hideInactive();
      },

      bindUIActions: function() {
        $('.tabBlock-tabs').on('click', '.tabBlock-tab', function() {
          TabBlock.switchTab($(this));
        });
      },

      hideInactive: function() {
        var $tabBlocks = $('.tabBlock');

        $tabBlocks.each(function(i) {
          var
            $tabBlock = $($tabBlocks[i]),
            $panes = $tabBlock.find('.tabBlock-pane'),
            $activeTab = $tabBlock.find('.tabBlock-tab.is-active');

          $panes.hide();
          $($panes[$activeTab.index()]).show();
        });
      },

      switchTab: function($tab) {
        var $context = $tab.closest('.tabBlock');

        if (!$tab.hasClass('is-active')) {
          $tab.siblings().removeClass('is-active');
          $tab.addClass('is-active');

          TabBlock.showPane($tab.index(), $context);
        }
      },

      showPane: function(i, $context) {
        var $panes = $context.find('.tabBlock-pane');

        // Normally I'd frown at using jQuery over CSS animations, but we can't transition between unspecified variable heights, right? If you know a better way, I'd love a read it in the comments or on Twitter @johndjameson
        $panes.slideUp(TabBlock.s.animLen);
        $($panes[i]).slideDown(TabBlock.s.animLen);
      }
    };

    $(function() {
      TabBlock.init();
    });
  });
</script>
<script>
  const accordion = document.getElementsByClassName('knowledge-hub-faqs-cnt');

  for (i = 0; i < accordion.length; i++) {
    accordion[i].addEventListener('click', function() {
      this.classList.toggle('active')
    })
  }
</script>
<script>
  const modalBox = document.querySelector(".modal-container");
  const modalBtn = document.querySelector(".modal-btn");
  const closeBtn = document.querySelector(".close-btn");

  modalBtn.addEventListener("click", () => {
    modalBox.style = "display: block;";
  });

  closeBtn.addEventListener("click", () => {
    modalBox.style = "display: none;";
  });

  window.addEventListener("click", (e) => {
    if (e.target == modalBox) {
      modalBox.style = "display: none;";
    }
  });

  $('.tabs').click(function() {
    $.scroll($('.tabs'), 1000);
  });
</script>
<!--<script>
	   // Select all anchor tags with class "scroll-link"

  // Prevent the default behavior of the anchor tag
  e.preventDefault();

  // Get the ID of the element to scroll to from the href attribute
  
  // Use the animate() method to smoothly scroll to the specified element
  $('html, body').animate({
    scrollTop: $("#tab1?title='Product-Portfolio'").offset().top
  }, 2000);


	   </script>-->
<!--<script>
$(document).ready(function() {
	
  $(window).scroll(function() {
    if ($(this).scrollTop() > 0) { // adjust the value as needed
      // scroll the window up by 500 pixels with a duration of 500 milliseconds
      $('html, body').animate({ scrollTop: '-=20px' }, 20);
    }
  });
  var time = 1000; 
   var interval = setInterval(scrollToTop, time);
   $(window).scroll(function() {
        clearInterval(interval);
    });
});

</script>-->
<!--<script>
$(document).ready(function(){
    // Set time in milliseconds
    var time = 60000; // 3 minutes
    
    // Scroll function
    function scrollToTop() {
        $("html, body").animate({ scrollTop: 20 }, "slow");
    }
    
    // Set interval
    var interval = setInterval(scrollToTop, time);
    
    // Stop interval on scroll
    $(window).scroll(function() {
        clearInterval(interval);
    });
});
</script>-->
</body>

</html>