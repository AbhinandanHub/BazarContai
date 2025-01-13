<?php include('includes/header.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Category</h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST" enctype="multipart/form-data"> <!--enctype use for image upload-->
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Name</label>
                                <input type="text" class="form-control" placeholder="Enter Category Name" name="name">
                            </div>
                            <div class="col-md-6">
                                <label for="">Slug</label>
                                <input type="text" class="form-control" placeholder="Enter Slug" name="slug">
                            </div>
                            <div class="col-md-12">
                                <label for="">Description</label>
                                <textarea rows="3" class="form-control" placeholder="Enter Description" name="description"></textarea>
                            </div>
                            <div class="col-md-12">
                                <label for="">Upload Image</label>
                                <input type="file" class="form-control" name="image">
                            </div>
                            <div class="col-md-12">
                                <label for="">Meta Title</label>
                                <input type="text" class="form-control" placeholder="Enter meta title" name="meta_title">
                            </div>
                            <div class="col-md-12">
                                <label for="">Meta Description</label>
                                <textarea rows="3" class="form-control" placeholder="Enter meta description" name="meta_description"></textarea>
                            </div>
                            <div class="col-md-12">
                                <label for="">Meta Keywords</label>
                                <textarea rows="3" class="form-control" placeholder="Enter meta keywords" name="meta_keywords"></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="">Status</label>
                                <input type="checkbox" name="status">
                            </div>
                            <div class="col-md-6">
                                <label for="">Popular</label>
                                <input type="checkbox" name="popular">
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-primary" type="submit" name="add_category_btn">Save</button>
                            </div>

                        </div>
                    </form>


                </div>
            </div>
        </div>

</div>
</div>



<?php include('includes/footer.php'); ?>