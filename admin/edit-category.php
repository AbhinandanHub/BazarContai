<?php include('includes/header.php');
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
            if(isset($_GET['id']))
            {
                $id = $_GET['id'];
                $category = getByID("categories", $id);

                if(mysqli_num_rows($category) > 0)
                {
                    $data = mysqli_fetch_array($category);
                    ?>
                        <div class="card">
                            <div class="card-header">
                                <h4>Edit Category
                                    <a href="category.php" class="btn btn-primary float-end">Back</a>
                                </h4>
                            </div>
                            <div class="card-body">
                                <form action="code.php" method="POST" enctype="multipart/form-data"> <!--enctype use for image upload-->
                                    <div class="row">
                                        <div class="col-md-6">

                                        <input type="hidden" name="category_id" value="<?= $data['id']?>">

                                            <label for="">Name</label>
                                            <input type="text" class="form-control" placeholder="Enter Category Name" name="name" value="<?= $data['name']?>">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Slug</label>
                                            <input type="text" class="form-control" placeholder="Enter Slug" name="slug" value="<?= $data['slug']?>">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="">Description</label>
                                            <textarea rows="3" class="form-control" placeholder="Enter Description" name="description"><?= $data['description']?></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="">Upload Image</label>
                                            <input type="file" class="form-control" name="image">
                                            <label for="">Current Image</label>
                                            <input type="hidden" name="old_image" value="<?= $data['image']?>"> <!--this line for when any one change the text and then that, then image as it is same -->
                                            <img src="../uploads/<?= $data['image']?>" height="50px" width="50px" alt="" style="padding-top:2px";>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="">Meta Title</label>
                                            <input type="text" class="form-control" placeholder="Enter meta title" name="meta_title" value="<?= $data['meta_title']?>">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="">Meta Description</label>
                                            <textarea rows="3" class="form-control" placeholder="Enter meta description" name="meta_description"><?= $data['meta_description']?></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="">Meta Keywords</label>
                                            <textarea rows="3" class="form-control" placeholder="Enter meta keywords" name="meta_keywords"><?= $data['meta_keywords']?></textarea>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Status</label>
                                            <input type="checkbox" name="status" <?= $data['status'] ? "checked":"" ?>>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Popular</label>
                                            <input type="checkbox" name="popular" <?= $data['popular'] ? "checked":"" ?>>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="btn btn-primary" type="submit" name="update_category_btn">Upadte</button>
                                        </div>

                                    </div>
                                </form>


                            </div>
                        </div>
                    <?php
                }
                else
                {
                    echo "Category Not Found";
                }
            }
            else
            {
                echo "ID missing from url";
            }
                ?>
        </div>

    </div>
</div>



<?php include('includes/footer.php'); ?>