
<?php 
session_start();
include('includes/header.php'); 
?>
<?php include('includes/navbar.php'); 
include('functions/userfunctions.php');
include('authencticate.php');
?>




      <main>

         <!-- breadcrumb area start -->
         <section class="breadcrumb__area include-bg pt-95 pb-50" data-bg-color="#EFF1F5">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="breadcrumb__content p-relative z-index-1">
                        <h3 class="breadcrumb__title">Checkout</h3>
                        <div class="breadcrumb__list">
                           <span><a href="#">Home</a></span>
                           <span>Checkout</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- breadcrumb area end -->

         <!-- checkout area start -->
         <section class="tp-checkout-area pb-120" data-bg-color="#EFF1F5">
            <div class="container">
            <form action="functions/placeorder.php" method="POST">
                  <div class="row">
                     <div class="col-xl-7 col-lg-7">
                        <div class="tp-checkout-verify">
                           <div class="tp-checkout-verify-item">
                              <p class="tp-checkout-verify-reveal">Returning customer? <button type="button" class="tp-checkout-login-form-reveal-btn">Click here to login</button></p>

                              <div id="tpReturnCustomerLoginForm" class="tp-return-customer">
                                 <!-- <form action="#">
                                    
                                    <div class="tp-return-customer-input">
                                       <label>Email</label>
                                       <input type="text" placeholder="Your Email">
                                    </div>
                                    <div class="tp-return-customer-input">
                                       <label>Password</label>
                                       <input type="password" placeholder="Password">
                                    </div>

                                    <div class="tp-return-customer-suggetions d-sm-flex align-items-center justify-content-between mb-20">
                                       <div class="tp-return-customer-remeber">
                                          <input id="remeber" type="checkbox">
                                          <label for="remeber">Remember me</label>
                                       </div>
                                       <div class="tp-return-customer-forgot">
                                          <a href="forgot.html">Forgot Password?</a>
                                       </div>
                                    </div>
                                    <button type="submit" class="tp-return-customer-btn tp-checkout-btn">Login</button>
                                 </form> -->
                              </div>
                           </div>
                           <div class="tp-checkout-verify-item">
                              <p class="tp-checkout-verify-reveal">Have a coupon? <button type="button" class="tp-checkout-coupon-form-reveal-btn">Click here to enter your code</button></p>

                              <div id="tpCheckoutCouponForm" class="tp-return-customer">
                                 <!-- <form action="#">
                                    <div class="tp-return-customer-input">
                                       <label>Coupon Code :</label>
                                       <input type="text" placeholder="Coupon">
                                    </div>
                                    <button type="submit" class="tp-return-customer-btn tp-checkout-btn">Apply</button>
                                 </form> -->
                              </div>
                           </div>
                        </div>
                     </div>
                  
                     <div class="col-lg-7">
                        <div class="tp-checkout-bill-area">
                           <h3 class="tp-checkout-bill-title">Billing Details</h3>

                           <div class="tp-checkout-bill-form">
                              <form action="#">
                                 <div class="tp-checkout-bill-inner">
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="tp-checkout-input">
                                             <label>Name <span>*</span></label>
                                             <input type="text" placeholder="Full Name" name="name" required>
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="tp-checkout-input">
                                             <label>Company name (optional)</label>
                                             <input type="text" placeholder="Example LTD.">
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="tp-checkout-input">
                                             <label>Country / Region </label>
                                             <input type="text" placeholder="United States (US)">
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="tp-checkout-input">
                                             <label>Street address <span>*</span></label>
                                             <input type="text" placeholder="House number and street name" name="address" required>
                                          </div>

                                          <div class="tp-checkout-input">
                                             <input type="text" placeholder="Apartment, suite, unit, etc. (optional)">
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="tp-checkout-input">
                                             <label>Town / City</label>
                                             <input type="text" placeholder="">
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="tp-checkout-input">
                                             <label>State / County</label>
                                             <select>
                                                <option>India</option>
                                                <option>Berlin Germany</option>
                                                <option>Paris France</option>
                                                <option>Tokiyo Japan</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="tp-checkout-input">
                                             <label>Postcode ZIP <span>*</span></label>
                                             <input type="text" placeholder="" name="pincode" required>
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="tp-checkout-input">
                                             <label>Phone <span>*</span></label>
                                             <input type="text" placeholder="" name="phone" required>
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="tp-checkout-input">
                                             <label>Email address <span>*</span></label>
                                             <input type="email" placeholder="" name="email" required>
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="tp-checkout-option-wrapper">
                                             <div class="tp-checkout-option">
                                                <input id="create_free_account" type="checkbox">
                                                <label for="create_free_account">Create an account?</label>
                                             </div>
                                             <div class="tp-checkout-option">
                                                <input id="ship_to_diff_address" type="checkbox">
                                                <label for="ship_to_diff_address">Ship to a different address?</label>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="tp-checkout-input">
                                             <label>Order notes (optional)</label>
                                             <textarea placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-5">
                        <!-- checkout place order -->
                        <div class="tp-checkout-place white-bg">
                           <h3 class="tp-checkout-place-title">Your Order</h3>

                           <div class="tp-order-info-list">
                              <ul>

                                 <!-- ----------- -->
                                 <table class="table">
                              <thead>
                              <tr>
                                 <th colspan="2" class="tp-cart-header-product">Product</th>
                                 <th class="tp-cart-header-price">Price</th>
                                 <th class="tp-cart-header-quantity">Quantity</th>
                              </tr>
                              </thead>
                              
                                 
                                 
                                 <?php $items = getCartItems();
                                    // Start: it more than 2 words then autometically arise 'read more' after the words
                                    if (!function_exists('limitWords')) {
                                       function limitWords($text, $limit = 2) {
                                          $words = explode(' ', $text);
                                          if (count($words) > $limit) {
                                             return implode(' ', array_slice($words, 0, $limit)) . '... <a href="product-details.html">read more</a>';
                                          }
                                          return $text;
                                       }
                                    }
                                    // End: it more than 2 words then autometically arise 'read more' after the words

                                 $totalPrice = 0;
                                 foreach ($items as $citem){
                                 ?>   
                                 
                           

                                    <tbody>  
                                       <tr class="product_data">  <!-- "product_data" is used for inc and dec the quantity btn (like as product-view.php page we are done it)  -->
                                          <!-- img -->
                                          <td class="tp-cart-img"><a href="product-details.html"> <img src="uploads/<?= $citem['image'] ?>" alt="Image"></a></td>
                                          <!-- title -->
                                          <td class="tp-cart-title"><a href="product-details.html"> <?= limitWords($citem['name']) ?> </a></td>
                                          <!-- price -->
                                          <td class="tp-cart-price">Rs <span><?= $citem['selling_price'] ?></span></td>
                                          <!-- Qoantity -->
                                          <td class="tp-cart-title"><a href="product-details.html"> x <?= $citem['prod_qty'] ?> </a></td>
                                          
                                       </tr>
                                    </tbody>
                                       
                                 <?php
                                 $totalPrice += $citem['selling_price'] * $citem['prod_qty'];
                                 }
                                 ?>
                                 
                              
                           </table>
                                 <!-- -------------- -->

                                 <!-- subtotal -->
                                 <li class="tp-order-info-list-subtotal">
                                    <span>Subtotal</span>
                                    <span><?= $totalPrice ?></span>
                                 </li>

                                 <!-- shipping -->
                                 <li class="tp-order-info-list-shipping">
                                    <span>Shipping</span>
                                    <div class="tp-order-info-list-shipping-item d-flex flex-column align-items-end">
                                       <!-- <span>
                                          <input id="flat_rate" type="radio" name="shipping">
                                          <label for="flat_rate">Flat rate: <span>$20.00</span></label>
                                       </span>
                                       <span>
                                          <input id="local_pickup" type="radio" name="shipping">
                                          <label for="local_pickup">Local pickup: <span>$25.00</span></label>
                                       </span> -->
                                       <span>
                                          <input id="free_shipping" type="radio" name="shipping" checked>
                                          <label for="free_shipping">Free shipping</label>
                                       </span>
                                    </div>
                                 </li>

                                 <!-- total -->
                                 <li class="tp-order-info-list-total">
                                    <span>Total Price</span>
                                    <span><?= $totalPrice ?></span>
                                 </li>
                              </ul>
                           </div>
                           <div class="tp-checkout-payment">
                           <div class="tp-checkout-payment-item">
                                 <!-- <input type="radio" id="cod" name="payment"> -->
                                 <input type="radio" id="cod" name="payment_mode" value="COD" required>
                                 <label for="cod">Cash on Delivery</label>
                                 <div class="tp-checkout-payment-desc cash-on-delivery">
                                    <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                                 </div>
                              </div>
                              <div class="tp-checkout-payment-item">
                                 <input type="radio" id="back_transfer" name="payment_mode" value="Bank Transfer" required>
                                 <label for="back_transfer" data-bs-toggle="direct-bank-transfer">Direct Bank Transfer</label>
                                 <div class="tp-checkout-payment-desc direct-bank-transfer">
                                    <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                                 </div>
                              </div>
                              <!-- <div class="tp-checkout-payment-item">
                                 <input type="radio" id="cheque_payment" name="payment_mode" value="b" required>
                                 <label for="cheque_payment">Cheque Payment</label>
                                 <div class="tp-checkout-payment-desc cheque-payment">
                                    <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                                 </div>
                              </div> -->
                              <div class="tp-checkout-payment-item paypal-payment">
                                 <input type="radio" id="paypal" name="payment_mode" value="Paid by Paypal" required>
                                 <label for="paypal">PayPal <img src="assets/img/icon/payment-option.png" alt=""> <a href="https:/paypal.com">What is PayPal?</a></label>
                              </div>
                           </div>
                           <div class="tp-checkout-agree">
                              <div class="tp-checkout-option">
                                 <input id="read_all" type="checkbox">
                                 <label for="read_all">I have read and agree to the website.</label>
                              </div>
                           </div> 
                           <div class="tp-checkout-btn-wrapper">
                              <!-- <input type="hidden" name="payment_mode" value=""> -->
                              <button type="submit" name="placeOrderBtn" class="tp-checkout-btn w-100">Place Order</button>
                              <div id="paypal-button-container"></div>
                           </div>
                           <hr>

                        </div>
                     </div>
                     
                  </div>
                  </form>
            </div>
         </section>
         <!-- checkout area end -->


      </main>



      

      <?php include('includes/footer.php'); ?>

<!--Paypal-->
<!-- Initialize the JS-SDK -->
<!-- <script
   src="https://www.paypal.com/sdk/js?client-id=  &buyer-country=US&currency=USD&components=buttons&enable-funding=venmo,paylater,card"
   data-sdk-integration-source="developer-studio"> -->
   <!-- </script> -->



<!-- <script>
   paypal.Buttons({
  createOrder: function(data, actions) {
    return actions.order.create({
      purchase_units: [{
        amount: {
          value: '<?= $totalPrice ?>' // Replace with the actual amount
        }
      }]
    });
  },
  onApprove: function(data, actions) {
    return actions.order.capture().then(function(details) {
      alert('Transaction completed by ' + details.payer.name.given_name);
      // Optionally, redirect the user or update the backend
    });
  }
}).render('#paypal-button-container');

</script> -->