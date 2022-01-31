<div class="row">
    <div class="col-sm-12">
        <div class="box">
            <div class="box-header">
                <h4>ایجاد کد تخفیف</h4>
            </div>
            <div class="box-body">
                <form method="post" action="index.php?c=offer&a=add">
                    <div class="form-group">
                        <label for="title">کد</label>
                        <input type="text" name="code" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="title">محصول</label>
                        <select type="text" name="product" class="form-control">
                            <option selected disabled>محصول موردنظر را انتخاب کنید</option>
                            <?php foreach ($products as $product): ?>
                                <option value="<?php echo $product->id ?>"><?php echo $product->name ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">تاریخ شروع</label>
                        <input type="date" name="starts_at" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="title">تاریخ پایان</label>
                        <input type="date" name="ends_at" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="ایجاد" class="btn btn-info" name="btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>