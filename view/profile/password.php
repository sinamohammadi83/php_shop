<div class="row">
    <div class="container">
        <h1>تغییر رمز عبور</h1>
        <div class="col-12 col-sm-5">
            <form action="index.php?c=profile&a=password" method="post">
                <div class="form-group">
                    <label for="">رمز عبور فعلی:</label>
                    <input type="password" name="oldpassword" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">رمز عبور جدید:</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">تکرار رمز عبور جدید:</label>
                    <input type="password" name="repassword" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" value="ثبت" name="btn" class="btn btn-primary">
                </div>
            </form>
            <?php if (isset($_GET['oldpassword'])): ?>
                <ul class="alert alert-danger">
                    <li>رمز عبور فعلی اشتباه است.</li>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</div>