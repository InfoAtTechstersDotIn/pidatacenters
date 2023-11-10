<?php include('php/inner-header.php'); ?>
<!-- main starts here -->

<div class="about-banner">
   <div class="container">
      <div id="paypal-button-container"></div>
      <input type="text" />
      <input type="button" onclick="initializePaypal()" value="Buy" />
   </div>
</div>
<!--what-is-noc starts here -->
<div class="what-is-noc">
   <?php include('php/footer.php'); ?>
   <!--footer ends-->
</div>
<!-- wrapper ends -->
<script src="js/wow.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="https://www.paypal.com/sdk/js?client-id=AVTLcBqr3e4jtdQ-exPQUIYpNOwHb4FgH93eqclJ-s6w0Lkd7rIzdyc5kDQ91dS7RgLPyuCMdIL1XEgi&currency=USD"></script>

<script>
   function initializePaypal() {
      paypal.Buttons({
         createOrder() {
            var formdata = new FormData();
            formdata.append("amount", "1");
            formdata.append("currency", "USD");

            var requestOptions = {
               method: 'POST',
               body: formdata
            };

            return fetch("https://pidatacenters.com/paypal/create_order.php", requestOptions)
               .then((response) => response.json())
               .then((order) => order.id);
         },

         onApprove(data) {
            var formdata = new FormData();
            formdata.append("orderID", data.orderID);

            var requestOptions = {
               method: 'POST',
               body: formdata
            };

            return fetch("https://pidatacenters.com/paypal/capture_payment.php", requestOptions)
               .then((response) => response.json())
               .then((orderData) => {
                  // Successful capture! For dev/demo purposes:
                  alert('Capture result', orderData, JSON.stringify(orderData, null, 2));
                  const transaction = orderData.purchase_units[0].payments.captures[0];
                  alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
                  // When ready to go live, remove the alert and show a success message within this page. For example:
                  // const element = document.getElementById('paypal-button-container');
                  // element.innerHTML = '<h3>Thank you for your payment!</h3>';
                  // Or go to another URL:  window.location.href = 'thank_you.html';
               });
         }
      }).render('#paypal-button-container');
   }
</script>
</body>


</html>