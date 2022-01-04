<div class="row">
    <div class="col-sm-12">
        <div class="box">
            <div class="box-header">
                <h4>ایجاد برند</h4>
            </div>
            <div class="box-body">
                <form method="post" action="index.php?c=setting&a=admin" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">نام پنل ادمین</label>
                        <input type="text" name="directory" class="form-control" id="directory" value="<?php echo $admin->directory ?>">
                        <button onclick="random()" type="button" class="btn btn-warning btn-sm mt-20">کلمه تصادفی</button>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="ثبت" class="btn btn-info" name="btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function random()
    {
        var directory = document.getElementById('directory');
        directory.value = 'admin' + Math.random().toString(36).replace(0,'').replace('.','')
    }

</script>