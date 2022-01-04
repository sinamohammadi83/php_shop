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
                            <th>دسته والد</th>
                            <th>ویرایش</th>
                            <th>حذف</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($categories as $category): ?>
                            <tr>
                                <td><?php echo $category->title ?></td>
                                <td>
                                    <?php
                                    if ($category->category_id!=null) {
                                        $parent = $class_category->show($category->category_id);
                                        echo $parent->title;
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="index.php?c=category&a=edit&id=<?php echo $category->id ?>">ویرایش</a>
                                </td>
                                <td>
                                    <a class="btn btn-danger btn-sm" href="index.php?c=category&a=delete&id=<?php echo $category->id ?>">حذف</a>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>نام</th>
                            <th>دسته والد</th>
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