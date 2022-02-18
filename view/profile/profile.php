<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<div class="row">
    <div class="container">
        <?php if (isset($_GET['changepassword'])): ?>
            <ul class="alert alert-success" style="margin-top: 25px;list-style: none">
                <li>رمز عبور با موفقیت تغییر کرد</li>
            </ul>
        <?php endif; ?>
        <h1>پروفایل</h1>
        <div class="col-12 col-sm-5">
            <form action="index.php?c=profile&a=profile" method="post">
                <?php if ($user->image): ?>
                    <img class="img-circle" width="150" src="<?php echo $user->image ?>" alt="<?php echo $user->name ?>">
                    <sapn id="upload-image" style="position: absolute;left: 300px;"><img style="background-color: rgba(252,252,252,0.57)" src="public/image/61-611898_camera-png-icon-camera-line-icon-png-clipart.png" width="40" alt=""></sapn>
                <?php endif; ?>
                <div class="form-group">
                    <label for="">نام:</label>
                    <input type="text" value="<?php echo $user->name ?>" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">ایمیل:</label>
                    <input type="email" value="<?php echo $user->email ?>" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" value="ثبت" name="btn" class="btn btn-primary">
                </div>
            </form>
            <a href="index.php?c=profile&a=password" class="" >تغییر رمز عبور</a>
        </div>
    </div>
</div>
<form hidden action="index.php?c=profile&a=image" method="post" id="form-upload" enctype="multipart/form-data">
    <input type="file" name="image" id="file_upload" onchange="upload()">
</form>
<script>
     $('#upload-image').click(function (){
         $('#file_upload').trigger('click');
     })
     function upload(){
         $('#form-upload').submit()
     }
</script>