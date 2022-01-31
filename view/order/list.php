<div id="container">
    <div class="container">
        <!-- Breadcrumb Start-->
        <ul class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-home"></i></a></li>
            <li><a href="index.php?c=order&a=list">سفارشات</a></li>
        </ul>
        <!-- Breadcrumb End-->
        <div class="row">
            <!--Middle Part Start-->
            <div id="content" class="col-sm-12">
                <h1 class="title">سفارشات</h1>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <td class="text-center">تصویر</td>
                            <td class="text-left">نام محصول</td>
                            <td class="text-left">برند</td>
                            <td class="text-left">تعداد سفارش</td>
                            <td class="text-right">قیمت واحد</td>
                            <td class="text-right">جمع کل</td>
                            <td class="text-right">وضعیت</td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if ($orders):
                            foreach ($orders as $order):
                                $product = $class_product->showById($order->product_id);
                        ?>
                            <tr>
                                <td class="text-center"><a href="index.php?c=product&product=<?php echo $product->slug ?>"><img src="<?php echo $product->image ?>" width="50" alt="<?php echo $product->name ?>" title="<?php echo $product->name ?>" /></a></td>
                                <td class="text-left"><a href="index.php?c=product&product=<?php echo $product->slug ?>"><?php echo $product->name ?></a></td>
                                <td class="text-left"><?php
                                    $brand = $class_product->show_brand($product->brand_id);

                                    echo $brand->title ?></td>
                                <td class="text-left"> <?php echo $order->cost ?>عدد</td>
                                <td class="text-right"><div class="price"> <?php echo $order->unit_amount ?> تومان </div></td>
                                <td class="text-right"><div class="price"> <?php echo $order->total_amount ?> تومان </div></td>
                                <td class="text-left">
                                    <?php
                                        switch ($order->status){
                                            case 'unknown':
                                            case 'NOK':
                                    ?>
                                        <div class="label label-danger">پرداخت ناموفق</div>
                                    <?php
                                            break;
                                            case 'OK':
                                    ?>
                                        <div class="label label-success">پرداخت شده</div>
                                    <?php
                                            break;
                                            case 'pending':
                                    ?>
                                        <div class="label label-warning">در حال برسی</div>
                                    <?php
                                            break;
                                            case 'ready':
                                    ?>
                                        <div class="label label-primary">آماده برای ارسال</div>
                                    <?php
                                            break;
                                            case 'send':
                                    ?>
                                        <div class="label label-info">ارسال شده</div>
                                    <?php
                                            break;
                                        }
                                    ?>
                                </td>
                            </tr>
                        <?php
                                endforeach;
                            endif;
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--Middle Part End -->
        </div>
    </div>
</div>