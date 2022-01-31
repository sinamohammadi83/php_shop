<div class="row">
    <div class="col-sm-12">
        <div class="box">
            <div class="box-header">
                <h4>ایجاد مشخصات</h4>
            </div>
            <div class="box-body">
                <form method="post" action="index.php?c=property&a=add" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">عنوان</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="title">گروه مشخصات</label>
                        <select name="property_group_id" id="" class="form-control">
                            <option selected disabled> گروه مشخصات خود را انتخاب کنید</option>
                            <?php foreach ($property_groups as $property_group):?>
                                <option value="<?php echo $property_group->id ?>"><?php echo $property_group->title?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="ایجاد" class="btn btn-info" name="btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>