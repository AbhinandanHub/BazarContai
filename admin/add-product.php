<?php include('includes/header.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Product</h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST" enctype="multipart/form-data"> <!--enctype use for image upload-->
                        <div class="row">
                            <div class="col-md-12">
                                <label class="mb-0" for="">Select Category</label>
                                <select name="category_id" class="form-select mb-2">
                                <option selected>Select Category</option>
                                    <?php
                                        $categories = getAll("categories");

                                        if(mysqli_num_rows($categories) > 0)
                                        {
                                            foreach($categories as $item){
                                                ?>
                                                    <option value="<?= $item['id']; ?>">  <?= $item['name']; ?> </option>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "No category available";
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0" for="">Name</label>
                                <input type="text" class="form-control mb-2" placeholder="Enter Category Name" name="name" required>
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0" for="">Slug</label>
                                <input type="text" class="form-control mb-2" placeholder="Enter Slug" name="slug" required>
                            </div>
                            <div class="col-md-12">
                                <label class="mb-0" for="">Small Description</label>
                                <textarea rows="3" class="form-control mb-2" placeholder="Enter Small Description" name="small_description" required></textarea>
                            </div>
                            <div class="col-md-12">
                                <label class="mb-0" for="">Description</label>
                                <textarea rows="3" class="form-control mb-2" placeholder="Enter Description" name="description" required></textarea>
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0" for="">Original Price</label>
                                <input type="text" class="form-control mb-2" placeholder="Enter Original Price" name="original_price" required>
                            </div>
                            <div class="col-md-6">
                                <label class="mb-0" for="">Selling Price</label>
                                <input type="text" class="form-control mb-2" placeholder="Enter Selling Price" name="selling_price" required>
                            </div>
                            <div class="col-md-12">
                                <label class="mb-0" for="">Upload Image</label>
                                <input type="file" class="form-control mb-2" name="image" required>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="mb-0" for="">Quantity</label>
                                    <input type="number" class="form-control mb-2" placeholder="Enter Quantity" name="qty" required>
                                </div>
                                <div class="col-md-3">
                                    <label class="mb-0" for="">Status</label><br>
                                    <input type="checkbox" name="status">
                                </div>
                                <div class="col-md-3">
                                    <label class="mb-0" for="">Trending</label><br>
                                    <input type="checkbox" name="trending">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="mb-0" for="">Meta Title</label>
                                <input type="text" class="form-control mb-2" placeholder="Enter meta title" name="meta_title" required>
                            </div>
                            <div class="col-md-12">
                                <label class="mb-0" for="">Meta Description</label>
                                <textarea rows="3" class="form-control mb-2" placeholder="Enter meta description" name="meta_description" required></textarea>
                            </div>
                            <div class="col-md-12">
                                <label class="mb-0" for="">Meta Keywords</label>
                                <textarea rows="3" class="form-control mb-2" placeholder="Enter meta keywords" name="meta_keywords" required></textarea>
                            </div>
 
                            <div class="col-md-12">
                                <button class="btn btn-primary" type="submit" name="add_product_btn">Save</button>
                            </div>

                        </div>
                    </form>


                </div>
            </div>
        </div>

</div>
</div>



<?php include('includes/footer.php'); ?>