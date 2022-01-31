<div class="row">
    <div class="col-sm-12">
        <div class="box">
            <div class="box-header">
                <h4>ایجاد اسلایدر</h4>
            </div>
            <div class="box-body">
                <form method="post" action="index.php?c=slider&a=edit&id=<?php echo $id ?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">عنوان</label>
                        <input type="text" name="title" value="<?php echo $slider->title ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="title">لینک</label>
                        <input type="text" name="url" value="<?php echo $slider->url ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <img src="../<?php echo $slider->image ?>" width="200" alt="<?php echo $slider->title ?>">
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