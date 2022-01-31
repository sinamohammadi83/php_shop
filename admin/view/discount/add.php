<div class="row">
    <div class="col-sm-12">
        <div class="box">
            <div class="box-header">
                <h4>ایجاد  تخفیف</h4>
            </div>
            <div class="box-body">
                <form method="post" action="index.php?c=discount&a=add&product=<?php echo htmlspecialchars($_GET['product'])?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">مقدار</label>
                        <input type="number" name="value" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="ایجاد" class="btn btn-info" name="btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>