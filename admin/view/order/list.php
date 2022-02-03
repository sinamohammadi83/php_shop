
<div class="row">

    <div class="col-12">

        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">سفارشات</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table id="example5" class="table table-bordered table-striped" style="width:100%">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>نام</th>
                            <th>عکس</th>
                            <th>ایمیل</th>
                            <th>آدرس</th>
                            <th>نام محصول</th>
                            <th>عکس محصول</th>
                            <th>قیمت محصول</th>
                            <th>برند محصول</th>
                            <th>دسته بندی محصول</th>
                            <th>مشاهده محصول</th>
                            <th>تعداد سفارش</th>
                            <th>قیمت واحد</th>
                            <th>قیمت کل</th>
                            <th>تغییر وضعیت</th>
                        </tr>
                        </thead>
                        <tbody id="tabel">
                        <?php
                            foreach ($orders as $order):
                            $user = $class_user->show($order->user_id);
                            $product = $class_product->show($order->product_id);
                            ?>
                            <tr>
                            <td><?php echo $order->id ?></td>
                            <td><?php echo $user->name ?></td>
                            <td><img src="../<?php echo $user->image ?>" width="200" alt="<?php echo $user->name ?>"/></td>
                            <td><?php echo $user->email ?></td>
                            <td><?php echo $class_order->order($order->id)->address ?></td>
                            <td><?php echo $product->name ?></td>
                            <td><img src="../<?php echo $product->image ?>" width="100" alt="<?php echo $product->name ?>"/></td>
                            <td><?php echo $class_product->getcostwithDiscountAttribute($product) ?></td>
                            <td><?php echo $class_brand->show($product->brand_id)->title ?></td>
                            <td><?php echo $class_category->show($product->category_id)->title ?></td>
                            <td> <a class="btn btn-warning btn-sm" href="../index.php?c=product&product=<?php echo $product->slug ?>">مشاهده</a> </td>
                            <td><?php echo $order->cost ?></td>
                            <td><?php echo $order->unit_amount ?></td>
                            <td><?php echo $order->total_amount ?></td>
                            <td>
                                <?php
                                    switch ($order->status):
                                        case 'OK':
                                ?>
                                    <button class="btn btn-sm btn-warning" onclick="update(<?php echo $order->id ?>,1)">در حال برسی</button>
                                <?php
                                        break;
                                        case 'pending':
                                ?>
                                    <button class="btn btn-sm btn-primary" onclick="update(<?php echo $order->id ?>,2)">آماده برای ارسال</button>
                                <?php
                                        break;
                                        case 'ready':
                                ?>
                                    <button class="btn btn-sm btn-info" onclick="update(<?php echo $order->id ?>,3)">ارسال شده</button>
                                <?php
                                        break;
                                    endswitch;
                                ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>نام</th>
                            <th>عکس</th>
                            <th>ایمیل</th>
                            <th>آدرس</th>
                            <th>نام محصول</th>
                            <th>عکس محصول</th>
                            <th>قیمت محصول</th>
                            <th>برند محصول</th>
                            <th>دسته بندی محصول</th>
                            <th>مشاهده محصول</th>
                            <th>تعداد سفارش</th>
                            <th>قیمت واحد</th>
                            <th>قیمت کل</th>
                            <th>تغییر وضعیت</th>
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
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
    function update(order_id,status_id){
        let new_status = ''
        switch (status_id){
            case 1:{
                new_status='pending'
                break
            }
            case 2:{
                new_status='ready'
                break
            }
            case 3:{
                new_status='send'
            }
        }
        $.ajax({
            url:'http://localhost/php_shop/admin/index.php?c=order&a=update&response=true',
            method:'post',
            data : {
                status : new_status,
                order:order_id
            },
            success : (response) => {
                const orders = response.data.orders
                let tabel = $('#tabel')
                let value_status = ''
                let class_status = ''
                tabel.html('')
                for (order of orders){
                    switch(order.status){
                        case 'OK':{
                            value_status='در حال برسی'
                            class_status = 'btn btn-sm btn-warning'
                            status=1
                            break
                        }
                        case 'pending':{
                            value_status='آماده برای ارسال'
                            class_status = 'btn btn-sm btn-primary'
                            status=2
                            break
                        }
                        case 'ready':{
                            value_status='ارسال شده'
                            class_status = 'btn btn-sm btn-info'
                            status=3
                            break
                        }
                    }

                    tabel.append('<tr>'
                        +'<td>'+order.user.name+'</td>'
                        +'<td><img src="../'+order.user.image+'" width="200" alt="'+order.user.name+'"/></td>'
                        +'<td>'+order.user.email+'</td>'
                        +'<td>'+order.address+'</td>'
                        +'<td>'+order.product.name+'</td>'
                        +'<td><img src="../'+order.product.image+'" width="100" alt="'+order.product.name+'"/></td>'
                        +'<td>'+order.product.cost_with_discount+'</td>'
                        +'<td>'+order.product.brand.title+'</td>'
                        +'<td>'+order.product.category.title+'</td>'
                        +'<td> <a class="btn btn-warning btn-sm" href="../index.php?c=product&product='+order.product.slug+'">مشاهده</a> </td>'
                        +'<td>'+order.count+'</td>'
                        +'<td>'+order.unit_amount+'</td>'
                        +'<td>'+order.total_amount+'</td>'
                        +'<td><button class="'+class_status+'" onclick="update('+order.id+','+status+')">'+value_status+'</button> </td>'
                        +'</tr>')
                }
            }
        })
    }
</script>