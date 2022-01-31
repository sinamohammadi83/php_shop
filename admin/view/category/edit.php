<div class="row">
    <div class="col-sm-12">
        <div class="box">
            <div class="box-header">
                <h4> ویرایش دسته بندی <?php echo $category->title ?> </h4>
            </div>
            <div class="box-body">
                <form method="post" action="index.php?c=category&a=edit&id=<?php echo htmlspecialchars($_GET['id']) ?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">نام</label>
                        <input type="text" name="title" value="<?php echo $category->title ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="title">دسته والد</label>
                        <select name="category_id" id="" class="form-control">
                            <option selected disabled> دسته والد خود را انتخاب کنید</option>
                            <option value="" <?php if (!$category->category_id){echo 'selected';} ?>> بدون دسته والد</option>
                            <?php foreach ($categories as $categorys):?>
                                <option value="<?php echo $categorys->id ?>" <?php if ($categorys->id == $category->category_id){echo 'selected';} ?> ><?php echo $categorys->title?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <?php foreach ($property_groups as $property_group): ?>
                            <input
                            <?php if ($class_category->haspropertygroup($property_group->id,$category->id)): ?>
                                checked
                            <?php endif; ?>
                            class="m-3" name="property_groups[]" type="checkbox" style="position: static !important;opacity: 1 !important; right: 0;left: 0;" value="<?php echo $property_group->id ?>"><?php echo $property_group->title ?>
                        <?php endforeach; ?>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="بروزرسانی" class="btn btn-info" name="btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>