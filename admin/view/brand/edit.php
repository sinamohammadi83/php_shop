<div class="row">
    <div class="col-sm-12">
        <div class="box">
            <div class="box-header">
                <h4>ایجاد برند</h4>
            </div>
            <div class="box-body">
                <form method="post" action="index.php?c=brand&a=edit&id=<?php echo htmlspecialchars($id); ?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">نام</label>
                        <input type="text" name="title" value="<?php echo $brand->title ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <img src="../<?php echo $brand->image ?>" alt="<?php echo $brand->title ?>" width="150">
                        <br>
                        <label for="title">عکس</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="بروزرسانی" class="btn btn-info" name="btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>