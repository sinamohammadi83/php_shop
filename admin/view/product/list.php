
<div class="row">

    <div class="col-12">

        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">محصولات</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table id="example5" class="table table-bordered table-striped" style="width:100%">
                        <thead>
                        <tr>
                            <th>نام</th>
                            <th>عکس</th>
                            <th>قیمت</th>
                            <th>برند</th>
                            <th>دسته بندی</th>
                            <th>فعال</th>
                            <th>گالری</th>
                            <th>تخفیف</th>
                            <th>ویژگی</th>
                            <th>ویرایش</th>
                            <th>حذف</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($products as $product): ?>
                            <tr>
                                <td><?php echo $product->name ?></td>
                                <td><img width="50" src="../<?php echo $product->image ?>"></td>
                                <td><?php echo $product->cost ?></td>
                                <td><?php echo $class_product->brand($product->brand_id)->title ?></td>
                                <td><?php echo $class_product->category($product->category_id)->title ?></td>
                                <td>
                                    <?php
                                        if ($product->is_published):
                                    ?>
                                        <span class="label label-success">فعال</span>
                                    <?php
                                        else:
                                    ?>
                                        <span class="label label-danger">غیر فعال</span>
                                    <?php
                                        endif;
                                    ?>
                                </td>
                                <td>
                                    <a class="btn btn-warning btn-sm" href="index.php?c=picture&a=list&product=<?php echo $product->id ?>">گالری</a>
                                </td>
                                <td>
                                    <?php
                                        $discount = $class_product->discount($product->id);
                                        if (!$discount):
                                    ?>
                                        <a class="btn btn-success btn-sm" href="index.php?c=discount&a=add&product=<?php echo $product->id ?>">ایجاد تخفیف</a>
                                    <?php
                                        else:
                                    ?>
                                        <label for="" class="btn btn-sm mt-5 btn-info">%<?php echo $discount->value ?>
                                            <a class="btn btn-danger btn-sm" href="index.php?c=discount&a=delete&id=<?php echo $discount->id ?>">حذف تخفیف</a>
                                        </label>
                                    <?php
                                        endif;
                                    ?>
                                </td>
                                <td>
                                    <a class="btn btn-secondary btn-sm" href="index.php?c=productproperty&a=add&product=<?php echo $product->id ?>">ویژگی</a>
                                </td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="index.php?c=product&a=edit&id=<?php echo $product->id ?>">ویرایش</a>
                                </td>
                                <td>
                                    <a class="btn btn-danger btn-sm" href="index.php?c=product&a=delete&id=<?php echo $product->id ?>">حذف</a>
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