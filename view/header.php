<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="image/favicon.png" rel="icon" />
    <title>مارکت شاپ - قالب HTML فروشگاهی</title>
    <meta name="description" content="Responsive and clean html template design for any kind of ecommerce webshop">
    <!-- CSS Part Start-->
    <link rel="stylesheet" type="text/css" href="/php_shop/public/js/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/php_shop/public/js/bootstrap/css/bootstrap-rtl.min.css" />
    <link rel="stylesheet" type="text/css" href="/php_shop/public/css/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="/php_shop/public/css/stylesheet.css" />
    <link rel="stylesheet" type="text/css" href="/php_shop/public/css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="/php_shop/public/css/owl.transitions.css" />
    <link rel="stylesheet" type="text/css" href="/php_shop/public/css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="/php_shop/public/css/stylesheet-rtl.css" />
    <link rel="stylesheet" type="text/css" href="/php_shop/public/css/responsive-rtl.css" />
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans' type='text/css'>

    <link rel="stylesheet" type="text/css" href="public/js/swipebox/src/css/swipebox.min.css">

    <style>
        .red{
            color: red;
        }
        .comparison{
            color: green;
        }
    </style>
    <!-- CSS Part End-->
</head>
<body>
<div class="wrapper-wide">
    <div id="header">
        <!-- Top Bar Start-->
        <nav id="top" class="htop">
            <div class="container">
                <div class="row"> <span class="drop-icon visible-sm visible-xs"><i class="fa fa-align-justify"></i></span>
                    <div class="pull-left flip left-top">
                        <div class="links">
                            <ul>
                                <li class="mobile"><i class="fa fa-phone"></i>+21 9898777656</li>
                                <li class="email"><a href="mailto:info@marketshop.com"><i class="fa fa-envelope"></i>info@marketshop.com</a></li>
                                <li class="wrap_custom_block hidden-sm hidden-xs"><a>بلاک سفارشی<b></b></a>
                                    <div class="dropdown-menu custom_block">
                                        <ul>
                                            <li>
                                                <table>
                                                    <tbody>
                                                    <tr>
                                                        <td><img alt="" src="public/image/banner/cms-block.jpg"></td>
                                                        <td><img alt="" src="public/image/banner/responsive.jpg"></td>
                                                    </tr>
                                                    <tr>
                                                        <td><h4>بلاک های محتوا</h4></td>
                                                        <td><h4>قالب واکنش گرا</h4></td>
                                                    </tr>
                                                    <tr>
                                                        <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید.</td>
                                                        <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید.</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong><a class="btn btn-default btn-sm" href="#">ادامه مطلب</a></strong></td>
                                                        <td><strong><a class="btn btn-default btn-sm" href="#">ادامه مطلب</a></strong></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <?php if (isset($_SESSION['user_id'])): ?>
                                    <li><a href="index.php?c=like&a=list">لیست علاقه مندی (<?php echo $count_like ?>)</a></li>
                                    <li><a href="index.php?c=order&a=list">سفارشات</a></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <div id="language" class="btn-group">
                            <button class="btn-link dropdown-toggle" data-toggle="dropdown"> <span> <img src="public/image/flags/gb.png" alt="انگلیسی" title="انگلیسی">انگلیسی <i class="fa fa-caret-down"></i></span></button>
                            <ul class="dropdown-menu">
                                <li>
                                    <button class="btn btn-link btn-block language-select" type="button" name="GB"><img src="public/image/flags/gb.png" alt="انگلیسی" title="انگلیسی" /> انگلیسی</button>
                                </li>
                                <li>
                                    <button class="btn btn-link btn-block language-select" type="button" name="GB"><img src="public/image/flags/ar.png" alt="عربی" title="عربی" /> عربی</button>
                                </li>
                            </ul>
                        </div>
                        <div id="currency" class="btn-group">
                            <button class="btn-link dropdown-toggle" data-toggle="dropdown"> <span> تومان <i class="fa fa-caret-down"></i></span></button>
                            <ul class="dropdown-menu">
                                <li>
                                    <button class="currency-select btn btn-link btn-block" type="button" name="EUR">€ Euro</button>
                                </li>
                                <li>
                                    <button class="currency-select btn btn-link btn-block" type="button" name="GBP">£ Pound Sterling</button>
                                </li>
                                <li>
                                    <button class="currency-select btn btn-link btn-block" type="button" name="USD">$ USD</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="top-links" class="nav pull-right flip">
                        <ul>
                            <?php
                                if (!isset($_SESSION['user_id'])):
                            ?>
                            <li><a href="index.php?c=login&a=login">ورود</a></li>
                            <li><a href="index.php?c=register&a=register">ثبت نام</a></li>

                            <?php
                                else:
                            ?>
                            <li>
                                <form method="post" action="index.php?c=login&a=logout">
                                    <input type="submit" value="خروج" class="btn btn-sm btn-danger">
                                </form>
                            </li>
                            <li>
                                <a href="index.php?c=profile&a=profile">پروفایل</a>
                            </li>
                               <?php if ($class_middleware->gate('admin-dashboard')): ?>
                            <li>
                                <a href="<?php echo $directoryAdmin->directory ?>/index.php">پنل مدیریت</a>
                            </li>
                                <?php
                                endif;
                                endif;
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Top Bar End-->
        <!-- Header Start-->
        <header class="header-row">
            <div class="container">
                <div class="table-container">
                    <!-- Logo Start -->
                    <div class="col-table-cell col-lg-6 col-md-6 col-sm-12 col-xs-12 inner">
                        <div id="logo"><a href="index.php"><img class="img-responsive" src="public/image/logo.png" title="MarketShop" alt="MarketShop" /></a></div>
                    </div>
                    <!-- Logo End -->
                    <!-- Mini Cart Start-->
                    <div class="col-table-cell col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div id="cart">
                            <button type="button" data-toggle="dropdown" data-loading-text="Loading..." class="heading dropdown-toggle">
                                <span class="cart-icon pull-left flip"></span>
                                <span id="total-items"><?php echo Cart::totalItems() ?></span>آیتم-<span id="total-amount"> <?php echo Cart::totalAmount() ?></span>تومان</button>
                            <ul class="dropdown-menu">
                                <li>
                                    <table class="table">
                                        <tbody id="cart-table-body">
                                        <?php
                                            if (Cart::getItems()):
                                                foreach (Cart::getItems() as $item):

                                                    $product = $item['product'] ;
                                                    $quantity = $item['quantity'];
                                                    $discount = $item['discount'];
                                        ?>
                                        <tr id="cart-<?php echo $product->id ?>">
                                            <td class="text-center"><a href="index.php?c=product&product=<?php echo $product->slug ?>"><img width="50" class="img-thumbnail" title="<?php echo $product->name ?>" alt="<?php echo $product->name ?>" src="<?php echo $product->image ?>"></a></td>
                                            <td class="text-left"><a href="index.php?c=product&product=<?php echo $product->slug ?>"><?php echo $product->name ?></a></td>
                                            <td class="text-right">x <?php echo $quantity ?></td>
                                            <td class="text-right"><?php echo $class_product->getcostwithDiscountAttribute($product) * $quantity ?> تومان</td>
                                            <td class="text-center"><button class="btn btn-danger btn-xs remove" title="حذف" onClick="removecart(<?php echo $product->id ?>)" type="button"><i class="fa fa-times"></i></button></td>
                                        </tr>
                                        <?php
                                                endforeach;
                                            endif;
                                        ?>
                                        </tbody>
                                    </table>
                                </li>
                                <li>
                                    <div>
                                        <table class="table table-bordered">
                                            <tbody>
                                            <tr>
                                                <td class="text-right"><strong>جمع کل</strong></td>
                                                <td class="text-right" id="all-cost"><?php echo Cart::totalAmount() ?> تومان</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>کسر هدیه</strong></td>
                                                <td class="text-right">0 تومان</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>مالیات</strong></td>
                                                <td class="text-right">0 تومان</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>قابل پرداخت</strong></td>
                                                <td class="text-right" id="all-cost1"><?php echo Cart::totalAmount() ?>  تومان</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <p class="checkout"><a href="" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> مشاهده سبد</a>&nbsp;&nbsp;&nbsp;<a href="index.php?c=order&a=add" class="btn btn-primary"><i class="fa fa-share"></i>ثبت سفارش</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Mini Cart End-->
                    <!-- جستجو Start-->
                    <div class="col-table-cell col-lg-3 col-md-3 col-sm-6 col-xs-12 inner">
                        <div id="search" class="input-group">
                            <input id="filter_name" type="text" name="search" value="" placeholder="جستجو" class="form-control input-lg" />
                            <button type="button" class="button-search"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <!-- جستجو End-->
                </div>
            </div>
        </header>
        <!-- Header End-->
        <!-- Main آقایانu Start-->
        <div class="container">
            <nav id="menu" class="navbar">
                <div class="navbar-header"> <span class="visible-xs visible-sm"> منو <b></b></span></div>
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li><a class="home_link" title="خانه" href="index.php"><span>خانه</span></a></li>
                        <li class="mega-menu dropdown"><a>دسته ها</a>
                            <div class="dropdown-menu">
                                <?php foreach ($categories as $category): ?>
                                <div class="column col-lg-2 col-md-3"><a href="index.php?c=category&category=<?php echo $category->title ?>"><?php echo $category->title ?></a>
                                    <div>
                                        <ul>
                                            <?php foreach ($class_index->subcategories($category->id) as $subccategory): ?>
                                            <li><a href="index.php?c=category&category=<?php echo $subccategory->title ?>"><?php echo $subccategory->title;if ($class_index->subcategories($subccategory->id)): ?> <span>&rsaquo;</span> <?php endif; ?></a>
                                                <?php
                                                    if ($class_index->subcategories($subccategory->id)):
                                                ?>
                                                    <div class="dropdown-menu">
                                                        <ul>
                                                            <?php  foreach ($class_index->subcategories($subccategory->id) as $parent): ?>
                                                                <li><a href="index.php?c=category&category=<?php echo $parent->title ?>"><?php echo $parent->title ?></a></li>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    </div>
                                                <?php
                                                    endif;
                                                ?>
                                            </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </li>
                        <li class="menu_brands dropdown"><a href="#">برند ها</a>
                            <div class="dropdown-menu">
                                <?php foreach ($brands as $brand): ?>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6">
                                    <a href="index.php?c=brand&a=show&brand=<?php echo $brand->title ?>">
                                        <img width="50" src="<?php echo $brand->image ?>" title="<?php echo $brand->title ?>" alt="<?php echo $brand->title ?>" />
                                    </a>
                                    <a href="index.php?c=brand&a=show&brand=<?php echo $brand->title ?>"><?php echo $brand->title ?></a>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </li>
                        <li class="custom-link"><a href="#">لینک های دلخواه</a></li>
                        <li class="dropdown wrap_custom_block hidden-sm hidden-xs"><a>بلاک سفارشی</a>
                            <div class="dropdown-menu custom_block">
                                <ul>
                                    <li>
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td><img alt="" src="public/image/banner/cms-block.jpg"></td>
                                                <td><img alt="" src="public/image/banner/responsive.jpg"></td>
                                                <td><img alt="" src="public/image/banner/cms-block.jpg"></td>
                                            </tr>
                                            <tr>
                                                <td><h4>بلاک های محتوا</h4></td>
                                                <td><h4>قالب واکنش گرا</h4></td>
                                                <td><h4>پشتیبانی ویژه</h4></td>
                                            </tr>
                                            <tr>
                                                <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید.</td>
                                                <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید.</td>
                                                <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید.</td>
                                            </tr>
                                            <tr>
                                                <td><strong><a class="btn btn-primary btn-sm" href="#">ادامه مطلب</a></strong></td>
                                                <td><strong><a class="btn btn-primary btn-sm" href="#">ادامه مطلب</a></strong></td>
                                                <td><strong><a class="btn btn-primary btn-sm" href="#">ادامه مطلب</a></strong></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown information-link"><a>برگه ها</a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a href="login.html">ورود</a></li>
                                    <li><a href="register.html">ثبت نام</a></li>
                                    <li><a href="category.html">دسته بندی (شبکه/لیست)</a></li>
                                    <li><a href="product.html">محصولات</a></li>
                                    <li><a href="cart.html">سبد خرید</a></li>
                                    <li><a href="checkout.html">تسویه حساب</a></li>
                                    <li><a href="compare.html">مقایسه</a></li>
                                    <li><a href="wishlist.html">لیست آرزو</a></li>
                                    <li><a href="search.html">جستجو</a></li>
                                </ul>
                                <ul>
                                    <li><a href="about-us.html">درباره ما</a></li>
                                    <li><a href="404.html">404</a></li>
                                    <li><a href="elements.html">عناصر</a></li>
                                    <li><a href="faq.html">سوالات متداول</a></li>
                                    <li><a href="sitemap.html">نقشه سایت</a></li>
                                    <li><a href="contact-us.html">تماس با ما</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="contact-link"><a href="contact-us.html">تماس با ما</a></li>
                        <li class="custom-link-right"><a href="#" target="_blank"> همین حالا بخرید!</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- Main آقایانu End-->
    </div>