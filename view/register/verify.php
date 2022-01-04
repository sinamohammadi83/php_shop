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
            <!--Middle Part Start-->
            <div class="col-sm-9" id="content">
                <h1 class="title">ثبت نام حساب کاربری</h1>
                <p>اگر قبلا حساب کاربریتان را ایجاد کرد اید جهت ورود به <a href="login.html">صفحه لاگین</a> مراجعه کنید.</p>
                <form class="form-horizontal" action="index.php?c=register&a=verify&token=<?php if (isset($_GET['token'])): echo htmlspecialchars($_GET['token']); endif; ?>" method="post">
                    <fieldset id="account">
                        <div class="form-group required">
                            <label for="input-email" class="col-sm-2 control-label">کد یکبار مصرف</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="input-email" placeholder="کد یکبار مصرف" value="" name="code">
                            </div>
                        </div>
                    </fieldset>

                    <?php
                        if (isset($_GET['error']))
                        {
                    ?>
                    <ul class="alert alert-danger">
                        <li>کد وارد شده نادرست است.</li>
                    </ul>
                    <?php
                        }
                    ?>
                    <div class="pull-right">
                        <input type="submit" class="btn btn-primary" value="ادامه" name="btn">
                    </div>
                </form>
                <a href="index.php?c=register&a=verify&token=<?php echo $_GET['token']?>&resend=true">ارسال دوباره کد یکبار مصرف</a>
            </div>
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