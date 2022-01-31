


<div class="row">
    <div class="col-sm-12">
        <div class="box">
            <div class="box-header">
                <h4>ویرایش کاربر <?php echo $user->name ?></h4>
            </div>
            <div class="box-body">
                <form method="post" action="index.php?c=user&a=edit&id=<?php echo htmlspecialchars($_GET['id']) ?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title"> نام</label>
                        <input type="text" name="name" value="<?php echo $user->name ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="title"> ایمیل</label>
                        <input type="text" name="email" value="<?php echo $user->email ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <?php if ($user->image): ?>
                            <img src="../<?php echo $user->image ?>" width="250" alt="<?php echo $user->name ?>">
                        <?php endif; ?>
                        <label for="title"> عکس</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="title"> نقش</label>
                        <select name="role_id" class="form-control">
                            <option disabled>نقش کاربر را انتخاب کنید</option>
                            <?php foreach ($roles as $role): ?>
                                <option
                                       <?php
                                            if ($role->id == $user->role_id):
                                                echo 'selected';
                                            endif;
                                       ?>
                                        value="<?php echo $role->id ?>"><?php echo $role->title ?></option>
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
                        <input type="submit" value="بروزرسانی" class="btn btn-info" name="btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>