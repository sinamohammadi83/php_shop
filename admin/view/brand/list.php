<div class="row">

    <div class="col-12">

        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">برند ها</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table id="example5" class="table table-bordered table-striped" style="width:100%">
                        <thead>
                        <tr>
                            <th>نام</th>
                            <th>عکس</th>
                            <th>ویرایش</th>
                            <th>حذف</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($brands as $brand): ?>
                                <tr>
                                <td><?php echo $brand->title ?></td>
                                <td><img width="50" src="../<?php echo $brand->image ?>"></td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="index.php?c=brand&a=edit&id=<?php echo $brand->id ?>">ویرایش</a>
                                </td>
                                <td>
                                    <a class="btn btn-danger btn-sm" href="index.php?c=brand&a=delete&id=<?php echo $brand->id ?>">حذف</a>
                                </td>

                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>نام</th>
                            <th>عکس</th>
                            <th>ویرایش</th>
                            <th>حذف</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>

    <!-- /.col -->
</div>