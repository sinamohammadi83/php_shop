<div id="container">
    <div class="container">
        <!-- Breadcrumb Start-->
        <ul class="breadcrumb">
            <li><a href="index.html"><i class="fa fa-home"></i></a></li>
            <li><a href="cart.html">سبد خرید</a></li>
            <li><a href="checkout.html">تسویه حساب</a></li>
        </ul>
        <!-- Breadcrumb End-->
        <div class="row">
            <!--Middle Part Start-->
            <div id="content" class="col-sm-12">
                <h1 class="title">تسویه حساب</h1>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><i class="fa fa-shopping-cart"></i> سبد خرید</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <td class="text-center">تصویر</td>
                                                    <td class="text-left">نام محصول</td>
                                                    <td class="text-left">تعداد</td>
                                                    <td class="text-right">قیمت واحد</td>
                                                    <td class="text-right">کل</td>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php if ($items): foreach ($items as $item): ?>
                                                <tr>
                                                    <td class="text-center"><a href="index.php?c=product&product=<?php echo $item['product']->slug ?>"><img width="50" src="<?php echo $item['product']->image ?>" alt="<?php echo $item['product']->name ?>" title="<?php echo $item['product']->name ?>" class="img-thumbnail"></a></td>
                                                    <td class="text-left"><a href="index.php?c=product&product=<?php echo $item['product']->slug ?>"><?php echo $item['product']->name ?></a></td>
                                                    <td class="text-left"><div class="input-group btn-block" style="max-width: 200px;">
                                                            <input type="text" name="quantity" value="<?php echo $item['quantity'] ?>" size="1" class="form-control">
                                                            <span class="input-group-btn">
                                                    <button type="submit" data-toggle="tooltip" title="بروزرسانی" class="btn btn-primary"><i class="fa fa-refresh"></i></button>
                                                    <button type="button" data-toggle="tooltip" title="حذف" class="btn btn-danger" onClick=""><i class="fa fa-times-circle"></i></button>
                                                    </span></div></td>
                                                    <td class="text-right"><?php echo $item['discount'] ?> تومان</td>
                                                    <td class="text-right"><?php echo $item['discount'] * $item['quantity'] ?> تومان</td>
                                                </tr>
                                                <?php endforeach; endif; ?>
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <td class="text-right" colspan="4"><strong>جمع کل:</strong></td>
                                                    <td class="text-right">75000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right" colspan="4"><strong>هزینه ارسال ثابت :</strong></td>
                                                    <td class="text-right">5000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right" colspan="4"><strong>کسر هدیه:</strong></td>
                                                    <td class="text-right">4000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right" colspan="4"><strong>مالیات:</strong></td>
                                                    <td class="text-right">15100 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right" colspan="4"><strong>کل :</strong></td>
                                                    <td class="text-right">91000 تومان</td>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <form action="index.php?c=order&a=add" method="post">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title"><i class="fa fa-pencil"></i> افزودن توضیح برای سفارش.</h4>
                                        </div>
                                        <div class="panel-body">
                                            <textarea rows="4" class="form-control" id="confirm_comment" name="address"></textarea>
                                            <br>
                                            <label class="control-label" for="confirm_agree">
                                                <input type="checkbox" checked="checked" value="1" required="" class="validate required" id="confirm_agree" name="confirm agree">
                                                <span><a class="agree" href="#"><b>شرایط و قوانین</b></a> را خوانده ام و با آنها موافق هستم.</span> </label>
                                            <div class="buttons">
                                                <div class="pull-right">
                                                    <input type="submit" name="btn" class="btn btn-primary" id="button-confirm" value="تایید سفارش">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Middle Part End -->
        </div>
    </div>
</div>