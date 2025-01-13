
<?php 

include('includes/header.php'); 
?>



      <main>


         <!-- order area start -->
         <section class="tp-order-area pb-160">
            <div class="container">
               <div class="tp-order-inner">
                  <div class="row gx-0">
                     <div class="col-lg-12">
                        <div class="card">
                        <div class="card-header" style="background-color: rgb(79, 61, 151);">
                            <h4 style="color: white;">Order History
                                <a href="orders.php" class="btn btn-warning float-end">Back</a>
                                </h4>
                        </div>
                        <div class="card-body" id="">
                            <div class="tp-order-details" data-bg-color="#4F3D97">
                            <!-- <div class="tp-order-details-top text-center mb-70">
                                <div class="tp-order-details-icon">
                                    <span>
                                        <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M46 26V51H6V26" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M51 13.5H1V26H51V13.5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M26 51V13.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M26 13.5H14.75C13.0924 13.5 11.5027 12.8415 10.3306 11.6694C9.15848 10.4973 8.5 8.9076 8.5 7.25C8.5 5.5924 9.15848 4.00269 10.3306 2.83058C11.5027 1.65848 13.0924 1 14.75 1C23.5 1 26 13.5 26 13.5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M26 13.5H37.25C38.9076 13.5 40.4973 12.8415 41.6694 11.6694C42.8415 10.4973 43.5 8.9076 43.5 7.25C43.5 5.5924 42.8415 4.00269 41.6694 2.83058C40.4973 1.65848 38.9076 1 37.25 1C28.5 1 26 13.5 26 13.5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                </div>
                                <div class="tp-order-details-content">
                                    <h3 class="tp-order-details-title">Your Order Confirmed</h3>
                                    <p>We will send you a shipping confirmation email as soon <br> as your order ships</p>
                                </div>
                            </div> -->
                            <div class="tp-order-details-item-wrapper">
                                <table class="table table-bordered"> <!--class="table-striped"-->
                                <thead>
                                    <tr style="font-size: 18px; color: var(--tp-common-white); font-weight: 100; text-align:center;">
                                        <th>ID</th>
                                        <th>User</th>
                                        <th>Tracking No</th>
                                        <th>Price</th>
                                        <th>Date</th>
                                        <th>View</th>
                                    </tr>
                                </thead>
                                <tbody style="font-size: 16px; color: var(--tp-common-white); line-height: 1.38; text-align:center;">
                                    <?php 
                                        $orders = getOrderHistory();

                                        if(mysqli_num_rows($orders) > 0)
                                        {
                                        foreach($orders as $item){
                                            ?>
                                                <tr>
                                                    <td> <?=$item['id'];?> </td>
                                                    <td> <?=$item['name'];?> </td>
                                                    <td> <?=$item['tracking_no'];?> </td>
                                                    <td> <?=$item['total_price'];?> </td>
                                                    <td> <?=$item['created_at'];?> </td>
                                                    <td>
                                                    <a href="view-order.php?t=<?=$item['tracking_no'];?>" class="btn btn-primary">View Details</a>
                                                    </td>
                                                </tr>
                                            <?php
                                        }
                                        }else{
                                        ?>
                                        <tr>
                                            <td colspan="5"> No orders Yet </td>
                                        </tr>
                                        <?php
                                        echo "No data available";
                                        }
                                    
                                    ?>
                                </tbody>
                            </table>
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