<div class="row">
    <div class="col-sm-12">
        <div class="box">
            <div class="box-header">
                <h4> ویرایش گروه مشخصات <?php echo $property_group->title ?></h4>
            </div>
            <div class="box-body">
                <form method="post" action="index.php?c=propertyGroup&a=edit&id=<?php echo htmlspecialchars($id) ?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">عنوان</label>
                        <input type="text" name="title" value="<?php echo $property_group->title ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="بروزرسانی" class="btn btn-info" name="btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>