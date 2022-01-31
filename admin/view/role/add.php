


<div class="row">
    <div class="col-sm-12">
        <div class="box">
            <div class="box-header">
                <h4>ایجاد نقش</h4>
            </div>
            <div class="box-body">
                <form method="post" action="index.php?c=role&a=add">
                    <div class="form-group">
                        <label for="title"> نام نقش</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <?php foreach ($permissions as $permission): ?>
                            <input class="m-3" name="permission[]" type="checkbox" style="position: static !important;opacity: 1 !important; right: 0;left: 0;" value="<?php echo $permission->id ?>"><?php echo $permission->label ?>
                        <?php endforeach; ?>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="ایجاد" class="btn btn-info" name="btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>