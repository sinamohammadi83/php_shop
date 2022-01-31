<div class="row">

    <div class="col-12">

        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">مشخصات</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table id="example5" class="table table-bordered table-striped" style="width:100%">
                        <thead>
                        <tr>
                            <th>نام</th>
                            <th>گروه مشخصات</th>
                            <th>ویرایش</th>
                            <th>حذف</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($properties as $property): ?>
                            <tr>
                                <td><?php echo $property->title ?></td>
                                <td>
                                    <?php
                                        $parent = $class_property_group->show($property->property_group_id);
                                        echo $parent->title;
                                    ?>
                                </td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="index.php?c=property&a=edit&id=<?php echo $property->id ?>">ویرایش</a>
                                </td>
                                <td>
                                    <a class="btn btn-danger btn-sm" href="index.php?c=property&a=delete&id=<?php echo $property->id ?>">حذف</a>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>نام</th>
                            <th>گروه مشخصات</th>
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