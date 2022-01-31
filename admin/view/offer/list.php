<div class="row">

    <div class="col-12">

        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">تخفیف ها</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table id="example5" class="table table-bordered table-striped" style="width:100%">
                        <thead>
                        <tr>
                            <th>کد</th>
                            <th>تاریخ شروع</th>
                            <th>تاریخ پایان</th>
                            <th>ویرایش</th>
                            <th>حذف</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($offers as $offer): ?>
                            <tr>
                                <td><?php echo $offer->code ?></td>
                                <td><?php echo date('y-m-d',strtotime($offer->starts_at))?></td>
                                <td><?php echo date('y-m-d',strtotime($offer->ends_at))?></td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="index.php?c=offer&a=edit&id=<?php echo $offer->id ?>">ویرایش</a>
                                </td>
                                <td>
                                    <a class="btn btn-danger btn-sm" href="index.php?c=offer&a=delete&id=<?php echo $offer->id ?>">حذف</a>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>نام</th>
                            <th>تاریخ شروع</th>
                            <th>تاریخ پایان</th>
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