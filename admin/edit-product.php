<?php include('includes/header.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
                if(isset($_GET['id']))
                {

                    $id = $_GET['id'];
                
                    $product = getByID("products",$id);

                    if(mysqli_num_rows($product) > 0)
                    {
                        $data = mysqli_fetch_array($product);

                        ?>
                            <div class="card">
                                <div class="card-header">
                                    <h4>Edit Product
                                    <a href="products.php" class="btn btn-primary float-end">Back</a>
                                    </h4>
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
                                                                        <option value="<?= $item['id']; ?>" <?= $data['category_id'] == $item['id'] ? 'selected' : ''; ?>><?= $item['name']; ?></option>
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
                                            <input type="hidden" name="product_id" value="<?= $data['id']; ?>">
                                            <div class="col-md-6">
                                                <label class="mb-0" for="">Name</label>
                                                <input type="text" class="form-control mb-2" placeholder="Enter Category Name" name="name" value="<?= $data['name']; ?>" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="mb-0" for="">Slug</label>
                                                <input type="text" class="form-control mb-2" placeholder="Enter Slug" name="slug" value="<?= $data['slug']; ?>" required>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="mb-0" for="">Small Description</label>
                                                <textarea rows="3" class="form-control mb-2" placeholder="Enter Small Description" name="small_description" required> <?= $data['small_description']; ?> </textarea>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="mb-0" for="">Description</label>
                                                <textarea rows="3" class="form-control mb-2" placeholder="Enter Description" name="description" required> <?= $data['description']; ?> </textarea>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="mb-0" for="">Original Price</label>
                                                <input type="text" class="form-control mb-2" placeholder="Enter Original Price" name="original_price" value="<?= $data['original_price']; ?>" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="mb-0" for="">Selling Price</label>
                                                <input type="text" class="form-control mb-2" placeholder="Enter Selling Price" name="selling_price" value="<?= $data['selling_price']; ?>" required>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="mb-0" for="">Upload Image</label>
                                                <input type="hidden" name="old_image" value="<?= $data['image']; ?>">
                                                <input type="file" class="form-control mb-2" name="image" value="<?= $data['image']; ?>">
                                                <label class="mb-0" for="">Current Image</label>
                                                <img src="../uploads/<?= $data['image']; ?>" alt="Product Image" height="50px" width="50px">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="mb-0" for="">Quantity</label>
                                                    <input type="number" class="form-control mb-2" placeholder="Enter Quantity" name="qty" value="<?= $data['qty']; ?>" required>
                                                </div>
                                                <div class="col-md-3">
                                                    <label class="mb-0" for="">Status</label><br>
                                                    <input type="checkbox" name="status" <?= $data['status'] == '0'?'':'checked' ?> >
                                                </div>
                                                <div class="col-md-3">
                                                    <label class="mb-0" for="">Trending</label><br>
                                                    <input type="checkbox" name="trending" <?= $data['trending'] == '0'?'':'checked' ?> >
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="mb-0" for="">Meta Title</label>
                                                <input type="text" class="form-control mb-2" placeholder="Enter meta title" name="meta_title" value="<?= $data['meta_title']; ?>" required>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="mb-0" for="">Meta Description</label>
                                                <textarea rows="3" class="form-control mb-2" placeholder="Enter meta description" name="meta_description" required> <?= $data['meta_description']; ?> </textarea>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="mb-0" for="">Meta Keywords</label>
                                                <textarea rows="3" class="form-control mb-2" placeholder="Enter meta keywords" name="meta_keywords" required> <?= $data['meta_keywords']; ?> </textarea>
                                            </div>
                
                                            <div class="col-md-12">
                                                <button class="btn btn-primary" type="submit" name="update_product_btn">Update</button>
                                            </div>
        
                                        </div>
                                    </form>
        
        
                                </div>
                            </div>
                        <?php 
                    }
                    else
                    {
                        echo "Product not found for given id";
                    }
                }
                else
                {
                    echo "Id missing from url";
                }
                ?>
        </div>
    </div>
</div>



<?php include('includes/footer.php'); ?>