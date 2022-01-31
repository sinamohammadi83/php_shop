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
                            <th>ایمیل</th>
                            <th>نقش</th>
                            <th>عکس</th>
                            <th>ویرایش</th>
                            <th>حذف</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($users as $user): ?>
                            <tr>
                                <td><?php echo $user->name ?></td>
                                <td><?php echo $user->email ?></td>
                                <td><?php echo $class_user->role($user->role_id)->title ?></td>
                                <td>
                                    <?php if ($user->image): ?>
                                    <img width="100" src="../<?php echo $user->image ?>" alt="<?php echo $user->name ?>">
                                    <?php endif; ?>
                                </td>
                                <td><a href="index.php?c=user&a=edit&id=<?php echo $user->id ?>" class="btn btn-primary btn-sm">ویرایش</a></td>
                                <td><a href="index.php?c=user&a=delete&id=<?php echo $user->id ?>" class="btn btn-danger btn-sm">حذف</a></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>نام</th>
                            <th>ایمیل</th>
                            <th>نقش</th>
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