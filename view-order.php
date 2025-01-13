
<?php 
session_start();
include('includes/header.php'); 
include('functions/userfunctions.php');
include('includes/navbar.php'); 
include('authencticate.php');
?>

<!-- Start: get tracking number in view-order.php from my-orders.php -->
<?php 

if(isset($_GET['t']))
{
    $tracking_no = $_GET['t'];

    $orderData = checkTrackingNoValid($tracking_no);
    if(mysqli_num_rows($orderData) < 0)
    {
        ?>
            <h4>Something went wrong</h4>
        <?php
        die();
    }

}
else{
    ?>
        <h4>Something went wrong</h4>
    <?php
    die();
}

$data = mysqli_fetch_array($orderData);
?>
<!-- End: get tracking number in  view-order.php from my-orders.php -->

<!-- Start: for only this page custom-container  -->
<head><style> .custom-container { padding: 20px !important; margin: 10px !important; } </style></head>
<!-- End: for only this page custom-container  -->

      <main>

         <!-- breadcrumb area start -->
         <section class="breadcrumb__area include-bg pt-95 pb-90">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="breadcrumb__content p-relative z-index-1">
                        <h3 class="breadcrumb__title">Track your order</h3>
                        <div class="breadcrumb__list">
                           <span><a href="index.php">Home</a></span>
                           <span><a href="my-orders.php">Track your order</a></span>
                           <span><a href="#">View order</a></span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- breadcrumb area end -->

         <!-- order area start -->
         <section class="tp-order-area pb-160">
            <div class="custom-container">  <!--for make custom container-->
               <div class="tp-order-inner">
                  <div class="row gx-0">
                     <div class="col-lg-12">
                        <div class="tp-order-info-wrapper">
                            <div class="card">
                            <div class="card-header" style="background-color: rgb(79, 61, 151);">
                                <h4 class="tp-order-info-title" style="color: var(--tp-common-white);">Order Details
                                <a href="my-orders.php" class="btn btn-warning float-end"> <i class="fa fa-reply"></i> Back</a>
                                </h4>
                                
                            </div>
                            <div class="card-body">
                           <div class="tp-order-info-list">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>Delivery Details</h4>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12 mb-2">
                                                <label class="fw-bold">Name</label>
                                                <div class="border p-1">
                                                <?= $data['name'];?>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label class="fw-bold">Email</label>
                                                <div class="border p-1">
                                                <?= $data['email'];?>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label class="fw-bold">Phone</label>
                                                <div class="border p-1">
                                                <?= $data['phone'];?>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label class="fw-bold">Tracking No.</label>
                                                <div class="border p-1">
                                                <?= $data['tracking_no'];?>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label class="fw-bold">Address</label>
                                                <div class="border p-1">
                                                <?= $data['address'];?>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label class="fw-bold">Pincode</label>
                                                <div class="border p-1">
                                                <?= $data['pincode'];?>
                                                </div>
                                            </div>
                                        </div>

                                       
                                        
                                        
                                    </div>

                                    <div class="col-md-6">
                                            <h4>Order Details</h4>
                                            <hr>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>Price</th>
                                                        <th>Quantity</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                    $userId = $_SESSION['auth_user']['user_id'];

                                                    $order_query= "SELECT o.id as oid, o.tracking_no, o.user_id, oi.*, oi.qty as orderqty, p.* FROM orders o, order_items oi, 
                                                    products p WHERE o.user_id='$userId' AND oi.order_id=o.id AND p.id=oi.prod_id 
                                                    AND o.tracking_no='$tracking_no' ";
                                                    $order_query_run =mysqli_query($con, $order_query);
                                                    
                                                    if(mysqli_num_rows($order_query_run) > 0)
                                                    {
                                                        foreach ($order_query_run as $item) {
                                                            ?>
                                                                <tr>
                                                                    <td class="align-middle">
                                                                        <img src="uploads/<?=$item['image'];?>" width="50px" height="60px" alt="<?=$item['name'];?>">
                                                                        <?= $item['name']; ?>
                                                                    </td>
                                                                    <td class="align-middle">
                                                                        <?= $item['price']; ?>
                                                                    </td>
                                                                    <td class="align-middle">
                                                                        <?= $item['orderqty']; ?>
                                                                    </td>
                                                                </tr>
                                                            <?php
                                                        }
                                                    }

                                                ?>
                                            </tbody>
                                            </table>

                                            <hr>

                                            <h4>Total Price : <span class="float-end"> <?= $data['total_price']; ?> </span></h4>

                                            <hr>
                                            
                                            <label class="fw-bold">Payment Mode</label>
                                            <div class="border p-1 mb-3">
                                            <?= $data['payment_mode']; ?>
                                            </div>
                                            
                                            <label class="fw-bold">Status</label>
                                            <div class="border p-1 mb-3">
                                            <?php
                                            if($data['status'] == 0)
                                            {
                                                echo "Under Process";
                                            }
                                            else if($data['status'] == 1)
                                            {
                                                echo "Compleated";
                                            }
                                            elseif($data['status'] == 2)
                                            {
                                                echo "Cancelled";
                                            }
                                            ?>
                                            </div>
                                        </div>
                                </div>
                            
                              <!-- <ul> -->

                                 <!-- header -->
                                 <!-- <li class="tp-order-info-list-header">
                                    <h4>Product</h4>
                                    <h4>Total</h4>
                                 </li> -->

                                 <!-- item list -->
                                 <!-- <li class="tp-order-info-list-desc">
                                    <p>Xiaomi Redmi Note 9 Global V. <span> x 2</span></p>
                                    <span>$274:00</span>
                                 </li>
                                 <li class="tp-order-info-list-desc">
                                    <p>Office Chair Multifun <span> x 1</span></p>
                                    <span>$74:00</span>
                                 </li>
                                 <li class="tp-order-info-list-desc">
                                    <p>Apple Watch Series 6 Stainless  <span> x 3</span></p>
                                    <span>$362:00</span>
                                 </li>
                                 <li class="tp-order-info-list-desc">
                                    <p>Body Works Mens Collection <span> x 1</span></p>
                                    <span>$145:00</span>
                                 </li> -->

                                 <!-- subtotal -->
                                 <!-- <li class="tp-order-info-list-subtotal">
                                    <span>Subtotal</span>
                                    <span>$507.00</span>
                                 </li> -->

                                 <!-- shipping -->
                              <!-- shipping -->
                              <!-- <li class="tp-order-info-list-shipping">
                                 <span>Shipping</span>
                                 <div class="tp-order-info-list-shipping-item d-flex flex-column align-items-end">
                                    <span>
                                       <input id="shipping_info" type="checkbox">
                                       <label for="shipping_info">Flat rate: <span>$20.00</span></label>
                                    </span>
                                 </div>
                              </li> -->

                                 <!-- total -->
                                 <!-- <li class="tp-order-info-list-total">
                                    <span>Total</span>
                                    <span>$1,476.00</span>
                                 </li>
                              </ul> -->
                           </div>
                           </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- order area end -->

      </main>
      
      <?php include('includes/footer.php'); ?>