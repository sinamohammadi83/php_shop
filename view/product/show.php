

<div id="container">
    <div class="container">
        <!-- Breadcrumb Start-->
        <ul class="breadcrumb">
            <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="index.html" itemprop="url"><span itemprop="title"><i class="fa fa-home"></i></span></a></li>
            <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="category.html" itemprop="url"><span itemprop="title">الکترونیکی</span></a></li>
            <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="product.html" itemprop="url"><span itemprop="title">لپ تاپ ایلین ور</span></a></li>
        </ul>
        <!-- Breadcrumb End-->
        <div class="row">
            <!--Middle Part Start-->
            <div id="content" class="col-sm-9">
                <div itemscope itemtype="http://schema.org/محصولات">
                    <h3 class="title" itemprop="name"><?php echo $product->name ?></h3>
                    <div class="row product-info">
                        <div class="col-sm-6">
                            <div class="image"><img class="img-responsive" itemprop="image" id="zoom_01" src="<?php echo $product->image ?>" title="<?php echo $product->name ?>" alt="<?php echo $product->name ?>" data-zoom-image="<?php echo $product->image ?>" /> </div>
                            <div class="center-block text-center"><span class="zoom-gallery"><i class="fa fa-search"></i> برای مشاهده گالری روی تصویر کلیک کنید</span></div>
                            <div class="image-additional" id="gallery_01">
                                <a class="thumbnail" href="#" data-zoom-image="<?php echo $product->image ?>" data-image="<?php echo $product->image ?>" title="لپ تاپ ایلین ور">
                                    <img src="<?php echo $product->image ?>" title="لپ تاپ ایلین ور" alt = "لپ تاپ ایلین ور"/>
                                </a>
                                <?php foreach ($class_product->picture($product->id) as $picture): ?>
                                    <a class="thumbnail" href="#" data-zoom-image="<?php echo $picture->path ?>" data-image="<?php echo $picture->path ?>" title="لپ تاپ ایلین ور">
                                        <img src="<?php echo $picture->path ?>" title="لپ تاپ ایلین ور" alt = "لپ تاپ ایلین ور"/>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <ul class="list-unstyled description">
                                <li><b>برند :</b> <a href="#"><span itemprop="brand"><?php echo $brand->title ?></span></a></li>
                                <li><b>کد محصول :</b> <span itemprop="mpn"><?php echo $product->id ?></span></li>
                                <li><b>امتیازات خرید:</b> 700</li>
                                <li><b>وضعیت موجودی :</b> <span class="instock">موجود</span></li>
                            </ul>
                            <ul class="price-box">
                                <li class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                    <?php
                                        if ($discount):
                                    ?>
                                    <span class="price-old"><?php echo $product->cost ?> میلیون تومان</span>
                                    <?php
                                        endif;
                                    ?>
                                    <span itemprop="price"><?php echo $class_product->getcostwithDiscountAttribute($product)?> میلیون تومان
                                        <span itemprop="availability" content="موجود"></span>
                                    </span>
                                </li>
                                <li></li>
                                <li>بدون مالیات : 9 میلیون تومان</li>
                            </ul>
                            <div id="product">
                                <h3 class="subtitle">انتخاب های در دسترس</h3>
                                <div class="form-group required">
                                    <label class="control-label">رنگ</label>
                                    <select class="form-control" id="input-option200" name="option[200]">
                                        <option value=""> --- لطفا انتخاب کنید --- </option>
                                        <option value="4">مشکی </option>
                                        <option value="3">نقره ای </option>
                                        <option value="1">سبز </option>
                                        <option value="2">آبی </option>
                                    </select>
                                </div>
                                <div class="cart">
                                    <div>
                                        <div class="qty">
                                            <label class="control-label" for="input-quantity">تعداد</label>
                                            <input type="text" name="quantity" value="1" size="2" id="input-quantity" class="form-control" />
                                            <a class="qtyBtn plus" href="javascript:void(0);">+</a><br />
                                            <a class="qtyBtn mines" href="javascript:void(0);">-</a>
                                            <div class="clear"></div>
                                        </div>
                                        <button type="button" id="button-cart" class="btn btn-primary btn-lg" onclick="addtocart('<?php echo $product->slug ?>',<?php echo $product->id ?>)">افزودن به سبد</button>
                                    </div>
                                    <div>
                                        <?php if (isset($_SESSION['user_id'])): ?>
                                            <button id="like-<?php echo $product->slug ?>" type="button" class="wishlist" onClick="like('<?php echo $product->slug ?>')"><i class="fa fa-heart <?php if ($class_like->exists($product->id,$_SESSION['user_id'])){echo 'red';} ?>"></i> افزودن به علاقه مندی ها</button>
                                        <?php endif; ?>
                                        <br />
                                        <button id="comparison-<?php echo $product->slug ?>" type="button" class="wishlist" onClick="comparison('<?php echo $product->slug ?>')"><i class="fa fa-exchange <?php if (isset($_SESSION['comparisons'])){if (array_key_exists($product->id,$_SESSION['comparisons'])){echo 'comparison';}} ?>"></i> مقایسه این محصول</button>
                                    </div>
                                </div>
                            </div>
                            <div class="rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                                <meta itemprop="ratingValue" content="0" />
                                <p><span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span> <a onClick="$('a[href=\'#tab-review\']').trigger('click'); return false;" href=""><span itemprop="reviewCount">1 بررسی</span></a> / <a onClick="$('a[href=\'#tab-review\']').trigger('click'); return false;" href="">یک بررسی بنویسید</a></p>
                            </div>
                            <hr>
                            <!-- AddThis Button BEGIN -->
                            <div class="addthis_toolbox addthis_default_style"> <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_google_plusone" g:plusone:size="medium"></a> <a class="addthis_button_pinterest_pinit" pi:pinit:layout="horizontal" pi:pinit:url="http://www.addthis.com/features/pinterest" pi:pinit:media="http://www.addthis.com/cms-content/images/features/pinterest-lg.png"></a> <a class="addthis_counter addthis_pill_style"></a> </div>
                            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-514863386b357649"></script>
                            <!-- AddThis Button END -->
                        </div>
                    </div>
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab-description" data-toggle="tab">توضیحات</a></li>
                        <li><a href="#tab-specification" data-toggle="tab">مشخصات</a></li>
                        <li><a href="#tab-review" data-toggle="tab">بررسی (<?php echo count($class_product->comment($product->id)) ?>)</a></li>
                    </ul>
                    <div class="tab-content">
                        <div itemprop="description" id="tab-description" class="tab-pane active">
                            <div>
                                <p><?php echo $product->description ?></p>
                            </div>
                        </div>
                        <div id="tab-specification" class="tab-pane">
                            <?php if ($property_groups): foreach ($property_groups as $property_group): ?>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <td colspan="2"><strong><?php echo $property_group->title ?></strong></td>
                                </tr>
                                </thead>
                                <?php foreach ($class_product->properties($property_group->id) as $property): ?>
                                <tbody>
                                <tr>
                                    <td><?php echo $property->title ?></td>
                                    <td><?php echo $class_product->getvalueforproperty($product->id,$property->id) ?></td>
                                </tr>
                                </tbody>
                                <?php endforeach; ?>
                            </table>
                            <?php endforeach; endif;?>
                        </div>
                        <div id="tab-review" class="tab-pane">
                            <form class="form-horizontal" method="post" action="index.php?c=comment&a=add&product=<?php echo $product->slug ?>">
                                <h2>یک بررسی بنویسید</h2>
                                <div class="form-group required">
                                    <div class="col-sm-12">
                                        <label for="input-review" class="control-label">بررسی شما</label>
                                        <textarea class="form-control" id="input-review" rows="5" name="content"></textarea>
                                    </div>
                                </div>

                                <div class="buttons">
                                    <div class="pull-right">
                                        <button class="btn btn-primary" id="button-review" type="submit">ثبت</button>
                                    </div>
                                </div>
                            </form>
                            <div id="review">
                                <div>
                                    <?php foreach ($class_product->comment($product->id) as $comment): ?>
                                        <table class="table table-striped table-bordered" id="comment-<?php echo $comment->id?>">
                                            <tbody>
                                            <tr>
                                                <td style="width: 50%;"><strong><span><?php echo $class_user->showById($comment->user_id)->name ?></span></strong>
                                                    <?php if (isset($_SESSION['user_id'])): if ($class_middleware->gate('delete-comment')): ?>
                                                        <button class="btn btn-danger" title="" data-toggle="tooltip" href="" onclick="remove_comment(<?php echo $comment->id?>)" ><i class="fa fa-times"></i></button>
                                                    <?php endif; endif;  ?>
                                                </td>
                                                <td class="text-right"><span> ایجاد:<?php echo date('h:i Y-m-d',strtotime($comment->created_at)); ?></span>
                                                    <?php if ($comment->created_at!=$comment->updated_at): ?>
                                                        <span style="">ویرایش شده:<?php echo date('h:i Y-m-d',strtotime($comment->updated_at)); ?></span>
                                                    <?php endif;?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><p><?php echo $comment->content ?></p></td>
                                            </tr>
                                            <?php
                                                if (isset($_SESSION['user_id'])):
                                                    if ($class_middleware->gate('update-comment')):
                                            ?>
                                            <tr>
                                                <td colspan="2">
                                                    <form id="edit-comment-<?php echo $comment->id?>" class="form-horizontal hidden" method="post" action="index.php?c=comment&a=edit&comment=<?php echo $comment->id ?>&product=<?php echo $product->slug ?>">
                                                        <!--<h2>یک بررسی بنویسید</h2>-->
                                                        <div class="form-group required">
                                                            <div class="col-sm-12">
                                                                <label for="input-review" class="control-label">بررسی شما</label>
                                                                <textarea class="form-control" id="input-review" rows="5" name="content"><?php echo $comment->content ?></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="buttons">
                                                            <div class="pull-right">
                                                                <button class="btn btn-primary" id="button-review" type="submit">ثبت</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <button type="button" onclick="edit(<?php echo $comment->id?>)" id="btn-edit-<?php echo $comment->id ?>" class="btn btn-secondary">ویرایش</button>
                                                </td>
                                            </tr>
                                            <?php
                                                    endif;
                                                endif;
                                            ?>
                                            </tbody>
                                        </table>
                                    <?php endforeach; ?>
                                </div>
                                <div class="text-right"></div>
                            </div>
                        </div>
                    </div>
                    <h3 class="subtitle">محصولات مرتبط</h3>
                    <div class="owl-carousel related_pro">
                        <div class="product-thumb">
                            <div class="image"><a href="product.html"><img src="image/product/samsung_tab_1-200x200.jpg" alt="تبلت ایسر" title="تبلت ایسر" class="img-responsive" /></a></div>
                            <div class="caption">
                                <h4><a href="product.html">تبلت ایسر</a></h4>
                                <p class="price"> <span class="price-new">98000 تومان</span> <span class="price-old">240000 تومان</span> <span class="saving">-5%</span> </p>
                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                            </div>
                            <div class="button-group">
                                <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                                <div class="add-to-links">
                                    <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                    <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="product-thumb">
                            <div class="image"><a href="product.html"><img src="image/product/macbook_pro_1-200x200.jpg" alt=" کتاب آموزش باغبانی " title=" کتاب آموزش باغبانی " class="img-responsive" /></a></div>
                            <div class="caption">
                                <h4><a href="product.html"> کتاب آموزش باغبانی </a></h4>
                                <p class="price"> <span class="price-new">98000 تومان</span> <span class="price-old">120000 تومان</span> <span class="saving">-26%</span> </p>
                            </div>
                            <div class="button-group">
                                <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                                <div class="add-to-links">
                                    <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                    <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="product-thumb">
                            <div class="image"><a href="product.html"><img src="image/product/macbook_1-200x200.jpg" alt="آیدیا پد یوگا" title="آیدیا پد یوگا" class="img-responsive" /></a></div>
                            <div class="caption">
                                <h4><a href="product.html">آیدیا پد یوگا</a></h4>
                                <p class="price"> 900000 تومان </p>
                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                            </div>
                            <div class="button-group">
                                <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                                <div class="add-to-links">
                                    <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                    <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="product-thumb">
                            <div class="image"><a href="product.html"><img src="image/product/ipod_shuffle_1-200x200.jpg" alt="لپ تاپ hp پاویلیون" title="لپ تاپ hp پاویلیون" class="img-responsive" /></a></div>
                            <div class="caption">
                                <h4><a href="product.html">لپ تاپ hp پاویلیون</a></h4>
                                <p class="price"> 122000 تومان </p>
                            </div>
                            <div class="button-group">
                                <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                                <div class="add-to-links">
                                    <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                    <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="product-thumb">
                            <div class="image"><a href="product.html"><img src="image/product/ipod_touch_1-200x200.jpg" alt="سامسونگ گلکسی s7" title="سامسونگ گلکسی s7" class="img-responsive" /></a></div>
                            <div class="caption">
                                <h4><a href="product.html">سامسونگ گلکسی s7</a></h4>
                                <p class="price"> <span class="price-new">62000 تومان</span> <span class="price-old">122000 تومان</span> <span class="saving">-50%</span> </p>
                            </div>
                            <div class="button-group">
                                <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                                <div class="add-to-links">
                                    <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                    <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="product-thumb">
                            <div class="image"><a href="product.html"><img src="image/product/ipod_shuffle_1-200x200.jpg" alt="لپ تاپ hp پاویلیون" title="لپ تاپ hp پاویلیون" class="img-responsive" /></a></div>
                            <div class="caption">
                                <h4><a href="product.html">لپ تاپ hp پاویلیون</a></h4>
                                <p class="price"> 122000 تومان </p>
                            </div>
                            <div class="button-group">
                                <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                                <div class="add-to-links">
                                    <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                    <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Middle Part End -->
            <!--Right Part Start -->
            <aside id="column-right" class="col-sm-3 hidden-xs">
                <h3 class="subtitle">پرفروش ها</h3>
                <div class="side-item">
                    <div class="product-thumb clearfix">
                        <div class="image"><a href="product.html"><img src="image/product/apple_cinema_30-50x50.jpg" alt="تی شرت کتان مردانه" title="تی شرت کتان مردانه" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">تی شرت کتان مردانه</a></h4>
                            <p class="price"><span class="price-new">110000 تومان</span> <span class="price-old">122000 تومان</span> <span class="saving">-10%</span></p>
                        </div>
                    </div>
                    <div class="product-thumb clearfix">
                        <div class="image"><a href="product.html"><img src="image/product/iphone_1-50x50.jpg" alt="آیفون 7" title="آیفون 7" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">آیفون 7</a></h4>
                            <p class="price"> 2200000 تومان </p>
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span></div>
                        </div>
                    </div>
                    <div class="product-thumb clearfix">
                        <div class="image"><a href="product.html"><img src="image/product/macbook_1-50x50.jpg" alt="آیدیا پد یوگا" title="آیدیا پد یوگا" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">آیدیا پد یوگا</a></h4>
                            <p class="price"> 900000 تومان </p>
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                        </div>
                    </div>
                    <div class="product-thumb clearfix">
                        <div class="image"><a href="product.html"><img src="image/product/sony_vaio_1-50x50.jpg" alt="کفش راحتی مردانه" title="کفش راحتی مردانه" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">کفش راحتی مردانه</a></h4>
                            <p class="price"> <span class="price-new">32000 تومان</span> <span class="price-old">12 میلیون تومان</span> <span class="saving">-25%</span> </p>
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                        </div>
                    </div>
                    <div class="product-thumb clearfix">
                        <div class="image"><a href="product.html"><img src="image/product/FinePix-Long-Zoom-Camera-50x50.jpg" alt="دوربین فاین پیکس" title="دوربین فاین پیکس" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">دوربین فاین پیکس</a></h4>
                            <p class="price">122000 تومان</p>
                        </div>
                    </div>
                </div>
                <div class="list-group">
                    <h3 class="subtitle">محتوای سفارشی</h3>
                    <p>این یک بلاک محتواست. هر نوع محتوایی شامل html، نوشته یا تصویر را میتوانید در آن قرار دهید. </p>
                    <p> در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد. </p>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                </div>
                <h3 class="subtitle">ویژه</h3>
                <div class="side-item">
                    <div class="product-thumb clearfix">
                        <div class="image"><a href="product.html"><img src="image/product/macbook_pro_1-50x50.jpg" alt=" کتاب آموزش باغبانی " title=" کتاب آموزش باغبانی " class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">کتاب آموزش باغبانی</a></h4>
                            <p class="price"> <span class="price-new">98000 تومان</span> <span class="price-old">120000 تومان</span> <span class="saving">-26%</span> </p>
                        </div>
                    </div>
                    <div class="product-thumb clearfix">
                        <div class="image"><a href="product.html"><img src="image/product/samsung_tab_1-50x50.jpg" alt="تبلت ایسر" title="تبلت ایسر" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">تبلت ایسر</a></h4>
                            <p class="price"> <span class="price-new">98000 تومان</span> <span class="price-old">240000 تومان</span> <span class="saving">-5%</span> </p>
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                        </div>
                    </div>
                    <div class="product-thumb clearfix">
                        <div class="image"><a href="product.html"><img src="image/product/apple_cinema_30-50x50.jpg" alt="تی شرت کتان مردانه" title="تی شرت کتان مردانه" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="http://demo.harnishdesign.net/opencart/marketshop/v1/index.php?route=product/product&amp;product_id=42">تی شرت کتان مردانه</a></h4>
                            <p class="price"> <span class="price-new">110000 تومان</span> <span class="price-old">122000 تومان</span> <span class="saving">-10%</span> </p>
                        </div>
                    </div>
                    <div class="product-thumb clearfix">
                        <div class="image"><a href="product.html"><img src="image/product/nikon_d300_1-50x50.jpg" alt="دوربین دیجیتال حرفه ای" title="دوربین دیجیتال حرفه ای" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">دوربین دیجیتال حرفه ای</a></h4>
                            <p class="price"> <span class="price-new">92000 تومان</span> <span class="price-old">98000 تومان</span> <span class="saving">-6%</span> </p>
                        </div>
                    </div>
                    <div class="product-thumb clearfix">
                        <div class="image"><a href="product.html"><img src="image/product/nikon_d300_5-50x50.jpg" alt="محصولات مراقبت از مو" title="محصولات مراقبت از مو" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">محصولات مراقبت از مو</a></h4>
                            <p class="price"> <span class="price-new">66000 تومان</span> <span class="price-old">90000 تومان</span> <span class="saving">-27%</span> </p>
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                        </div>
                    </div>
                    <div class="product-thumb clearfix">
                        <div class="image"><a href="product.html"><img src="image/product/macbook_air_1-50x50.jpg" alt="لپ تاپ ایلین ور" title="لپ تاپ ایلین ور" class="img-responsive" /></a></div>
                        <div class="caption">
                            <h4><a href="product.html">لپ تاپ ایلین ور</a></h4>
                            <p class="price"> <span class="price-new">10 میلیون تومان</span> <span class="price-old">12 میلیون تومان</span> <span class="saving">-5%</span> </p>
                        </div>
                    </div>
                </div>
            </aside>
            <!--Right Part End -->
        </div>
    </div>
</div>



<a id="btn-comparison" href="index.php?c=comparison&a=list" class="<?php if (empty($_SESSION['comparisons'])){echo 'hidden';} ?>" style="position: fixed;top:320px;margin-right: 25px;color: black;border: 1px solid black;border-radius: 10px;padding: 10px">مشاهده مقایسه</a>
<?php
    if (isset($_SESSION['user_id'])):
        if ($class_middleware->gate('update-comment')):
?>
<script>
    function edit(id){
        let edit_comment = $('#edit-comment-'+id)
        let btn_edit_comment = $('#btn-edit-'+id)
        if (edit_comment.hasClass('hidden'))
        {
            btn_edit_comment.text('بستن')
            edit_comment.removeClass('hidden')
        }else{
            btn_edit_comment.text('ویرایش')
            edit_comment.addClass('hidden')
        }
    }
</script>
<?php

        if ($class_middleware->gate('delete-comment')):
?>
<script>
    function remove_comment(comment)
    {
        $.ajax({
            url:'index.php?c=comment&a=delete&response=true',
            method:'post',
            data : {
                comment : comment
            },
            success : () => {
                $('#comment-'+comment).remove()
            }
        })
    }
</script>
<?php
        endif;
    endif;
endif;