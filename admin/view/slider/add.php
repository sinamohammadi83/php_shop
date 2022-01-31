<div class="row">
    <div class="col-sm-12">
        <div class="box">
            <div class="box-header">
                <h4>ایجاد اسلایدر</h4>
            </div>
            <div class="box-body">
                <form method="post" action="index.php?c=slider&a=add" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">عنوان</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="title">لینک</label>
                        <input type="text" name="url" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="title">عکس</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="ایجاد" class="btn btn-info" name="btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>