<div class="row">
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <form enctype="multipart/form-data" method="post" action="index.php?c=picture&a=list&product=<?php echo htmlspecialchars($_GET['product']) ?>" >
                    <div class="form-group">
                        <input class="form-control" type="file" name="image">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="آپلود" class="btn btn-info" name="btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php foreach ($pictures as $picture): ?>
        <div class="col-md-12 col-lg-3">
            <div class="card">
                <img class="card-img-top img-responsive" src="../<?php echo $picture->path ?>" alt="Card image cap">
                <div class="card-body">
                    <a href="index.php?c=picture&a=delete&product=<?php echo htmlspecialchars($_GET['product']) ?>&picture=<?php echo $picture->id ?>" class="btn btn-danger btn-sm">حذف</a>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    <?php endforeach; ?>
</div>