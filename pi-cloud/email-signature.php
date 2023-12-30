<!DOCTYPE html>
<html>

<head>
   <title>Email Signature</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="edit or add new signature from your email id ">
   <style type="text/css">
      body {
         font-family: 'Century gothic', sans-serif
      }

      *,
      :focus {
         outline: 0
      }

      * {
         padding: 0;
         margin: 0
      }

      span {
         display: block
      }

      .fstyle {
         font-family: 'Century gothic', sans-serif
      }

      img {
         vertical-align: middle;
         display: inline-block
      }

      .container {
         margin: 0 auto;
         position: relative
      }

      @media only screen and (max-width:992px) {
         .container {
            padding: 0 12px
         }
      }

      @media(min-width:992px) {
         .container {
            width: 970px
         }
      }

      a>img {
         padding: 6px;
         background-color: #fff;
         border-radius: 6px;
      }

      @media only screen and (min-width:1200px) {
         .container {
            width: 1200px
         }
      }

      ::-webkit-scrollbar {
         width: 6px;
         height: 6px;
         border-radius: 20px
      }

      ::-webkit-scrollbar-button {
         display: none
      }

      ::-webkit-scrollbar-track {
         background-color: #ccc
      }

      ::-webkit-scrollbar-track-piece {
         background-color: #ccc
      }

      ::-webkit-scrollbar-thumb {
         background-color: #2f1dac
      }

      ::-webkit-scrollbar-thumb:hover {
         background-color: #2f1dac
      }

      ::-webkit-scrollbar-corner {
         display: none
      }

      ::-webkit-resizer {
         display: none
      }

      .signaturePart {
         position: relative;
         font-size: 0;
         margin: 100px auto 0
      }

      .left-signature,
      .right-data {
         position: relative;
         display: inline-block;
         width: 50%;
         vertical-align: middle;
         font-size: 14px
      }

      .form-group input {
         width: 60%;
         height: 36px;
         line-height: 36px;
         border: 1px solid #ccc;
         padding: 0 12px;
         color: #545454;
         font-family: 'Century gothic', sans-serif
      }

      .form-group+.form-group {
         margin-top: 16px
      }

      .form-group label {
         margin-bottom: 10px;
         font-weight: 700;
         font-size: 14px;
         display: block
      }

      input:active,
      input:focus,
      input:visited {
         border: 2px solid #6a6adc
      }

      .ConformDiv {
         position: fixed;
         left: 0;
         right: 0;
         margin: -150px auto;
         top: 50%;
         transform: scale(0);
         opacity: 0;
         transition: .5s;
         z-index: 999999;
         width: 500px;
         height: 300px;
         background-color: #2f1dac;
         border-radius: 10px
      }

      .ConformDiv.open {
         opacity: 1 !important;
         transform: scale(1) !important
      }

      #overlay {
         position: absolute;
         top: 0;
         bottom: 0;
         background: #2f1daccc;
         width: 100%;
         height: 100%;
         opacity: .67;
         display: none;
         z-index: 99;
         transition: all 1s ease
      }

      #overlay.active {
         display: block
      }

      .popD {
         text-align: center;
         position: absolute;
         left: 0;
         right: 0;
         margin: 0 auto;
         vertical-align: middle;
         padding: 36px;
         top: 50%;
         transform: translateY(-50%);
         color: #fff
      }

      .popD h1 {
         margin-bottom: 12px
      }

      .closepop {
         margin: 6px auto;
         display: block;
         margin-top: 18px;
         border: none;
         font-size: 14px;
         background-color: #fff;
         color: #2f1dac;
         padding: 9px 24px;
         font-weight: 700;
         cursor: pointer;
         border-radius: 6px
      }

      #copytest {
         width: 65%;
         height: 36px;
         line-height: 36px;
         color: #fff;
         background-color: #2f1dac;
         border: none;
         border-radius: 6px;
         text-align: center;
         margin-top: 24px
      }

      .form-group-label {
         margin: 24px auto;
      }

      .form-group-label>label>input {
         vertical-align: middle;
      }

      .form-group-label>label>span {
         vertical-align: middle;
         padding-left: 8px;
         display: inline-block;
         font-weight: bold;
      }

      .none {
         display: none;
      }

      .mobile {
         display: none;
      }

      @media (max-width: 767px) {
         .signaturePart {
            display: none;
         }

         .mobile {
            display: block;
            position: fixed;
            width: 100%;
            height: 100%;
            background-color: #6a6adc
         }

         .mobile h2 {
            text-align: center;
            color: #fff;
            top: 50%;
            position: absolute;
            left: 0;
            right: 0;
            margin: -20px auto;
         }
      }
   </style>
</head>

<body>
   <div class="container">
      <div class="signaturePart">
         <div class="left-signature">
            <form method="post">
               <div class="form-group"> <label>Name</label> <input type="text" name="name" placeholder=" Your Name" required="" autocomplete="off" class="empName"> </div>
               <div class="form-group"> <label>Designation:</label> <input type="name" name="name" placeholder=" Your Designation" required="" autocomplete="off" class="empDes"> </div>
               <div class="form-group"> <label>Email</label> <input type="email" name="name" placeholder="yourname@pidatacenters.com" required="" autocomplete="off" class="EmpEmail"> </div>
               <div class="form-group"> <label>Phone Number</label> <input type="number" name="name" placeholder="9999999999" minlength="10" maxlength="10" required="" class="EmpNum" autocomplete="off"> </div>
               <div class="form-group-label"> <label class="radio-inline"> <input type="radio" name="smccheck" value="smc"><span>SMC</span> </label> <label class="radio-inline" style="margin-left: 36px;"> <input type="radio" name="smccheck" value="nonsmc" checked><span>Non SMC</span> </label> </div>
               <div class="form-group none"> <label>Linkedin</label> <input type="email" name="name" placeholder="https://www.linkedin.com/company/6437312/admin/" required="" autocomplete="off" class="smclinkedin"> </div> <!--https://www.linkedin.com/in/sivakrishna-maridu/-->
               <div class="form-group none"> <label>Twitter</label> <input type="text" name="twitter" placeholder="https://twitter.com/Pi_DATACENTERS" required="" class="smctwitter" autocomplete="off"> </div>
               <div class="form-group none"> <label>Facebook</label> <input type="text" name="facebook" placeholder="https://www.facebook.com/PiDATACENTERS/" required="" class="smcfacebook" autocomplete="off"> </div>
               <div class="form-group none"> <label>Youtube</label> <input type="text" name="youtube" placeholder="https://www.youtube.com/channel/UCcrUri8y8maUmz3P_9uCeJg" required="" class="smcyoutube" autocomplete="off"> </div>
               <div class="form-group none"> <label>WhatsApp</label> <input type="text" name="whatsapp" placeholder="https://api.whatsapp.com/" required="" class="smcwhatsapp" autocomplete="off"> </div>
            </form>
            <button id="copytest" onclick="CopyToClipboard()">Copy Your Signature</button>

         </div>
         <div class="right-data" id="EmpInfo">
            <table cellpadding="0" cellspacing="0">
               <tr>
                  <td style="width: 280pt;"> <!-- width 240pt -->
                     <p class="fstyle" style="font-size:10pt; display:block;font-family: 'Century gothic', sans-serif; color:rgb(146, 208, 80); font-weight: bold"> Warm Regards</p>

                     <p class="fstyle yourname" style="font-size:10pt;display:block;padding:2pt 0; font-family: 'Century gothic', sans-serif; color: rgb(0, 102, 0); font-weight: bold">Your Name</p>

                     <p class="fstyle descr" style="font-size:10pt; font-family: 'Century gothic', sans-serif; color:rgb(146, 208, 80); font-weight: bold">Your Designation</p>
                     <table>
                        <tbody>
                           <tr>
                              <td>&nbsp;</td>
                           </tr>
                        </tbody>
                     </table>
                     <p class="fstyle " style="font-size:10pt; display:block;font-family: 'Century gothic', sans-serif;color: rgb(50,62,79); font-style: normal; font-weight:normal ;white-space:nowrap;display:block;"><b>M:</b> +91 <span class="enumber" style="display: inline-block;">9999999999</span></p>

                  </td>
                  <td>
                     <table>
                        <tr>
                           <td style=""><a href='https://pidatacenters.com/' target="_blank" style="width:auto;height:auto"><img src="https://res.cloudinary.com/siva5456/image/upload/v1619594019/pi.png" width="130" style="" height="100" style="width: 60pt;display: inline-block; vertical-align: middle;"></a></td>
                           <td><a href="https://pi-cloud.in" style="display: inline-block;width:auto;height:auto"><!--<img src="images/main-logo.png"  width="120" height="60" style="width:auto;display: inline-block;vertical-align: middle;">--></a> </td>
                        </tr>
                     </table>
                  </td>
               </tr>
               <tr>
                  <td> <span class="fstyle emailid" style="font-size:10pt;padding-top: 3pt; font-family: 'Century gothic', sans-serif;color:rgb(17,85,204); font-style: normal; font-weight: normal;">yourname@pidatacenters.com</span></td>
               </tr>

               <tr>
                  <table>
                     <tr>
                        <td style="padding-top: 10pt"> <span><a href="../certifications.php" target="_blank"><img src="images/signature-2.png" width="552px" style="display: block;"></a></span> </td>
                     </tr>
                  </table>
               </tr>
               <table cellpadding="0" cellspacing="0" style="padding-top: 8pt;">
                  <tr style="background-color: #2f1dac;border-radius: 6pt;padding: 4px;">
                     <td style="font-family: 'Century gothic',sans-serif;color: #fff;font-size: 7.5pt;padding: 6px ">Vijayawada | Hyderabad | Kochi | Mumbai | Delhi | Bengaluru | Chennai </td>
                     <td style="padding-left: 6pt;padding-right: 6px;padding: 6px">
                        <table>
                           <h6 style="text-align: center; padding: 6px 0; color: #fff; font-size: 12px;">Follow Us On</h6>
                           <tr>
                              <td style="padding:0px 2pt"> <a href="https://www.linkedin.com/company/6437312/admin/" target="_blank" class="smc-link" style="display: inline-block;text-align: center; vertical-align: middle;"> <img src="images/menu-icons/linkedin_ico.png" height="15" width="15"> </a> </td>

                              <td><a href="https://twitter.com/Pi_DATACENTERS" class="smctwi" target="_blank" style="display: inline-block;text-align: center; vertical-align: middle;"> <img src="images/menu-icons/twitter_ico.png" height="15" width="15"> </a></td>

                              <td style="padding:0px 2pt"><a href="https://www.facebook.com/PiDATACENTERS/" class="smcfac" target="_blank" style="display: inline-block;text-align: center; vertical-align: middle;"> <img src="images/menu-icons/facebook_ico.png" height="15" width="15"> </a> </td>

                              <td><a href="https://www.youtube.com/channel/UCcrUri8y8maUmz3P_9uCeJg" class="smcytube" target="_blank" style="display: inline-block;text-align: center; vertical-align: middle;"> <img src="images/menu-icons/youtube_ico.png" height="15" width="15"> </a></td>


                              <td style="padding:0px 2pt"><a href="https://api.whatsapp.com/send?phone=+918712630334&text=Hi, I need more information on Pidatacenters" class="smcwtsapp" target="_blank" style="display: inline-block;text-align: center; vertical-align: middle;"> <img src="images/menu-icons/Whatsapp_ico.png" height="15" width="15"> </a></td>
                           </tr>
                        </table>
                     </td>
                  </tr>

               </table>
               <tr>
                  <table>
                     <tr>
                        <td style="font-family: 'Century gothic',sans-serif;font-size: 7.5pt;padding: 5px 44px 0px 0px;text-align:justify"> Confidentiality Notice & Disclaimer:<br>
                           "The information and attachments (if any) included in this email, may contain privileged, confidential or proprietary information and is intended solely for the use of the individual or entity to whom it is addressed and others authorized to receive it. If you are not the intended recipient(s) or you have received this communication in error, please notify the sender immediately by responding to this email, and then delete and destroy all copies of the original message including the attachments (if any). Any unauthorized use, disclosure, dissemination, copying, distribution, forwarding, printing or any other action taken on this email is strictly prohibited and may be unlawful. Pi Data Centers Private Limited has put efforts into ensuring that this message is free from errors and viruses. Despite our efforts, you should always scan all emails and attachments for any threats with proper software, as the sender does not accept liability for any damage inflicted by viewing the content of this email and attachments. If this is a personal email, any opinions or representations do not necessarily reflect the views of Pi Data Centers Private Limited." </td>
                     </tr>
                  </table>
               </tr>
            </table>
         </div>
      </div>
   </div>
   <div class="ConformDiv">
      <div class="popD">
         <h1>Hi <b class="yourname">Guest</b></h1>
         <p><b style="display: block;margin-bottom: 4px;">Your email signature has been copied!</b>Please add/modify the new signature to your email </p>
         <button class="closepop">Close</button>
      </div>
   </div>
   <div id="overlay"></div>
   <div class="mobile">

      <h2 class="share">Sorry, We are working on mobile view</h2>
   </div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script type="text/javascript">
      $('document').ready(function() {
         $('.closepop ,  #overlay').click(function() {
            location.reload()

         })
         $('.empName').keyup(function() {
            let name = $(this).val();
            $('.yourname').text(name)
         })
         $('.empDes').keyup(function() {
            let desc = $(this).val();
            $('.descr').text(desc)
         })
         $('.EmpNum').keyup(function() {
            let numb = $(this).val();
            $('.enumber').text(numb)
         })
         $('.EmpEmail').keyup(function() {
            let email = $(this).val();
            $('.emailid').text(email)
         })
         $('.smclinkedin').keyup(function() {
            let Slink = $(this).val();
            $('.smc-link').prop("href", Slink)
         })
         $('.smctwitter').keyup(function() {
            let Stwi = $(this).val();
            $('.smctwi').prop("href", Stwi)
         })

         $('.smcfacebook').keyup(function() {
            let Stfac = $(this).val();
            $('.smcfac').prop("href", Stfac)
         })
         $('.smcyoutube').keyup(function() {
            let Stytube = $(this).val();
            $('.smcytube').prop("href", Stytube)
         })
         $('.smcwhatsapp').keyup(function() {
            let Stwtsapp = $(this).val();
            $('.smcwtsapp').prop("href", Stwtsapp)
         })
         $('input[type=radio][name=smccheck]').change(function() {
            if (this.value == 'smc') {
               $('.none').css('display', 'block')
            } else {
               $('.none').css('display', 'none');
               $('.smc-link').prop("href", 'https://www.linkedin.com/company/pidatacenters/');
               $('.smctwi').prop("href", 'https://twitter.com/Pi_DATACENTERS')
               $('.smcfac').prop("href", 'https://www.facebook.com/PiDATACENTERS/')
               $('.smcytube').prop("href", 'https://www.youtube.com/channel/UCcrUri8y8maUmz3P_9uCeJg')
               $('.smcwtsapp').prop("href", 'https://api.whatsapp.com/send?phone=+918712630334&text=Hi, I need more information on Pidatacenters')
            }
         });
      })

      function CopyToClipboard() {

         let empdata = {
            "name": $('.empName').val(),
            "desc": $('.empDes').val(),
            "number": $('.EmpNum').val(),
            "email": $('.EmpEmail').val(),
            "smccheck": $('input[type=radio][name=smccheck]:checked').val(),
            "linked": $('.smclinkedin').val(),
            "twitter": $('.smctwitter').val(),
            "facebook": $('.smcfacebook').val(),
            "youtube": $('.smcyoutube').val(),
            "whatsapp": $('.smcwhatsapp').val(),
            "date": new Date().toString()
         };
         $.ajax({
            url: "https://signature-data-default-rtdb.firebaseio.com/new_empdata.json",
            type: "POST",
            data: JSON.stringify(empdata),
            crossDomain: true,
            headers: {
               'Access-Control-Allow-Origin': '*'
            },

            dataType: 'json',
            ContentType: 'application/json; charset=utf-8',
            success: function(data) {


            },

         });
         var range = document.createRange();
         range.selectNode(document.getElementById("EmpInfo"));
         window.getSelection().removeAllRanges();
         window.getSelection().addRange(range);
         document.execCommand("copy");
         $('#overlay').addClass('active');
         $('.ConformDiv').addClass('open');
      }
      $('.closepop ,  #overlay').click(function() {
         location.reload()

      })
   </script>



</body>

</html>