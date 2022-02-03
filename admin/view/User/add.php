


<div class="row">
    <div class="col-sm-12">
        <div class="box">
            <div class="box-header">
                <h4>ایجاد کاربر </h4>
            </div>
            <div class="box-body">
                <form method="post" action="index.php?c=user&a=add" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title"> نام</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="title"> ایمیل</label>
                        <input type="text" name="email"  class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="title"> عکس</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="title"> نقش</label>
                        <select name="role_id" class="form-control">
                            <option disabled>نقش کاربر را انتخاب کنید</option>
                            <?php foreach ($roles as $role): ?>
                                <option value="<?php echo $role->id ?>"><?php echo $role->title ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title"> رمز عبور</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="title"> تکرار رمز عبور</label>
                        <input type="password" name="repassword" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="ثبت" class="btn btn-info" name="btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>