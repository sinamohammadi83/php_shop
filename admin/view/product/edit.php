<div class="row">
    <div class="col-sm-12">
        <div class="box">
            <div class="box-header">
                <h4>ایجاد محصول جدید</h4>
            </div>
            <div class="box-body">
                <form method="post" action="index.php?c=product&a=edit&id=<?php echo htmlspecialchars($_GET['id'])?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">نام</label>
                        <input type="text" name="name" value="<?php echo $product->name ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="title">قیمت</label>
                        <input type="number" name="cost" value="<?php echo $product->cost ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <img src="../<?php echo $product->image ?>" width="150" alt="<?php echo $product->name ?>">
                        <br>
                        <label for="title">عکس</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="title">دسته بندی</label>
                        <select name="category_id" id="" class="form-control">
                            <option selected disabled>دسته بندی خود را انتخاب کنید</option>
                            <?php foreach ($categories as $category):?>
                                <option value="<?php echo $category->id ?>" <?php if ($category->id == $product->category_id){echo 'selected';} ?>><?php echo $category->title?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">برند</label>
                        <select name="brand_id" id="" class="form-control">
                            <option selected disabled>برند خود را انتخاب کنید</option>
                            <?php foreach ($brands as $brand):?>
                                <option value="<?php echo $brand->id ?>" <?php if ($brand->id == $product->brand_id){echo 'selected';} ?>><?php echo $brand->title?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">وضعیت</label>
                        فعال<input type="radio" style="position: static !important;opacity: 1 !important; right: 0;left: 0;" name="is_published" value="1" <?php if ($product->is_published == 1){echo 'checked';} ?>>
                        غیر فعال<input type="radio" style="position: static !important;opacity: 1 !important; right: 0;left: 0;" name="is_published" value="0" <?php if ($product->is_published == 0){echo 'checked';} ?>>
                    </div>
                    <div class="form-group">
                        <label for="description">متن توضیحات</label>
                        <textarea name="description" class="form-control" rows="8"><?php echo $product->description ?></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="بروزرسانی" class="btn btn-info" name="btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>