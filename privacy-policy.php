<?php
$seo_title = "Your Privacy Matters: Read Our Privacy Policy";
$seo_description = "Read and understand the terms and conditions governing the use of services provided by Pi Datacenters.";
$seo_keywords = "terms and conditions, service terms, legal terms, usage policy, terms";
?>

<?php include('php/includes-techsters/header.php'); ?>

<head>
   <style>
      #myBtn2,
      #reach-btn {
         display: none;
      }
   </style>
</head>
<!-- main starts here -->

<div class="about-banner">
   <div class="about-banner-blk">
      <img src="images/privacy-policy.png" alt="privacy-policy" width="1920" height="210">
      <h1 class="text-center">Privacy Policy</h1>

   </div>
</div>
<!--what-is-noc starts here -->
<div class="privacy-policy-blk">
   <div class="container">
      <div class="privacy-policy-main">
         <h2>Privacy Policy</h2>
         <p>Pi Data Centers Private Limited, its subsidiaries, and affiliated companies (hereinafter referred to as "Pi", "us", "we," or "our") are committed to respecting your privacy and complying with applicable data protection and privacy laws. You can visit https://pidatacenters.com without disclosing any personally identifiable information about yourself.</p>
         <p>We have provided this privacy policy statement ("Privacy Policy") to help you understand how we collect, use, and protect your information when you visit the website or mobile application. Please take a moment to read the sections below and learn how we may use your personal information so that you can make informed decisions.</p>
         <p>You should read this notice in conjunction with the terms and conditions of use for this website and the mobile application.</p>
         <h3>Acceptance</h3>
         <p>By using this website or the mobile application, you signify your agreement to the Pi's Privacy Policy. If you do not agree with this Privacy Policy, please do not use this website or the mobile application. Your continued use of Pi's website or mobile application following the posting of changes to these Privacy Policy terms will mean you accept those changes.</p>
         <h2>My Information</h2>
         <h3> What kind of information is collected?</h3>
         <h4>Anonymous Information</h4>
         <p>Anonymous information cannot be tied directly to personally identifiable information. We use this information to improve our website and mobile application. This information helps us focus our resources on the features that are most popular with our customers. We may collect information regarding your IP address, browser type, domain name, and access time. This information is used for our own research purposes and is separate from any personally identifiable information that you may submit via this website or mobile application. We do not link IP addresses to any personal information. In rare instances, IP addresses may be used to assist in deterring and/or preventing abusive or criminal activity on the website and mobile app.</p>
         <h4>Personally Identifiable Information: <span style="color: #707070;font-weight:400;line-height: 30px;">The following forms on https://pidatacenters.com collect Personally Identifiable Information:</span></h4>
         <h5>(i) Registration Form for Downloading Knowledge Materials</h5>
         <p>Information in this form will be used to capture the basics.</p>
         <h5>(ii) Contact Us Form</h5>
         <p>Information provided through this form will be used solely to respond to customer inquiries and/or service requests.</p>
         <h5>(iii) Site Feedback Form</h5>
         <p>Information provided through this form will be used solely to provide enhancements to pidatacenters.com.</p>
         <h5>(iv) Registration Form for Online Purchase</h5>
         <p>Information provided in this form will be used for recording purchase information, excluding any details about the payment.</p>
         <h3>Who will use this information?</h3>
         <p>As a general rule, Pi will not disclose any specific personal information that you submit to us about you ("Personal Information") in a manner that connects you with the Personal Information, except when we have your explicit permission or under special circumstances, such as when we believe in good faith that the law requires it or under the circumstances described below.</p>

         <h3>How can I control my information?</h3>
         <p>In case you change your mind or some Personal Information changes (such as your mailing address or e-mail address), we will try to provide a way to correct, update, or remove the Personal Information that you have provided us. Additionally, if a customer wishes to update Personal Information, email us at marcom@pidatacenters.com.</p>
      </div>

   </div>


   <!--footer block starts -->



   <?php include('php/includes-techsters/footer.php'); ?>

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
</body>

</html>