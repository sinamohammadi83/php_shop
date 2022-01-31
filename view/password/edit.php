<div id="container">
    <div class="container">
        <!-- Breadcrumb Start-->
        <ul class="breadcrumb">
            <li><a href="index.html"><i class="fa fa-home"></i></a></li>
            <li><a href="login.html">حساب کاربری</a></li>
            <li><a href="register.html">ثبت نام</a></li>
        </ul>
        <!-- Breadcrumb End-->
        <div class="row">
            <?php if (!isset($_GET['change']) && !$expire): ?>
                <!--Middle Part Start-->
                <div class="col-sm-9" id="content">
                    <h1 class="title">فراموشی رمز عبور</h1>
                    <form class="form-horizontal" action="index.php?c=password&a=edit&token=<?php echo htmlspecialchars($token) ?>" method="post">
                        <fieldset id="account">
                            <div class="form-group required">
                                <label for="input-email" class="col-sm-2 control-label">رمز عبور</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="input-email" value="" name="password">
                                </div>
                            </div>
                            <div class="form-group required">
                                <label for="input-email" class="col-sm-2 control-label">تکرار رمز عبور</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="input-email" value="" name="repassword">
                                </div>
                            </div>
                        </fieldset>
                        <div class="pull-right">
                            <input type="submit" class="btn btn-primary" value="ادامه" name="btn">
                        </div>
                    </form>
                </div>
            <?php elseif(isset($_GET['change'])): ?>
                <div class="alert alert-success">
                    <i class="fa fa-check-circle"></i>رمز عبور با موفقیت تغییر کرد.
                </div>
            <?php else: ?>
                <div class="alert alert-danger">
                    <i class="fa fa-exclamation-circle"></i>این لینک منقضی شده است.
                </div>
            <?php endif; ?>
        </div>
        <!--Middle Part End -->
        <!--Right Part Start -->
        <aside id="column-right" class="col-sm-3 hidden-xs">
            <h3 class="subtitle">حساب کاربری</h3>
            <div class="list-group">
                <ul class="list-item">
                    <li><a href="login.html">ورود</a></li>
                    <li><a href="register.html">ثبت نام</a></li>
                    <li><a href="#">فراموشی رمز عبور</a></li>
                    <li><a href="#">حساب کاربری</a></li>
                    <li><a href="#">لیست آدرس ها</a></li>
                    <li><a href="wishlist.html">لیست علاقه مندی</a></li>
                    <li><a href="#">تاریخچه سفارشات</a></li>
                    <li><a href="#">دانلود ها</a></li>
                    <li><a href="#">امتیازات خرید</a></li>
                    <li><a href="#">بازگشت</a></li>
                    <li><a href="#">تراکنش ها</a></li>
                    <li><a href="#">خبرنامه</a></li>
                    <li><a href="#">پرداخت های تکرار شونده</a></li>
                </ul>
            </div>
        </aside>
        <!--Right Part End -->
    </div>
</div>
</div>