
    <div id="container">
        <div class="container">
            <!-- Breadcrumb Start-->
            <ul class="breadcrumb">
                <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                <li><a href="compare.html">مقایسه محصولات</a></li>
            </ul>
            <!-- Breadcrumb End-->
            <div class="row">
                <!--Middle Part Start-->
                <div id="content" class="col-sm-12">
                    <h1 class="title">مقایسه محصولات</h1>
                    <?php if (isset($_SESSION['comparisons']) && !empty($_SESSION['comparisons'])): ?>
                        <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <td colspan="4"><strong>جزئیات محصول</strong></td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>محصولات</td>
                                <?php foreach ($comparisons as $comparison): ?>
                                    <td><a href="index.php?c=product&product=<?php echo $comparison['slug'] ?>"><strong><?php echo $comparison['name'] ?></strong></a></td>
                                <?php endforeach; ?>
                            </tr>
                            <tr>
                                <td>تصویر</td>
                                <?php foreach ($comparisons as $comparison): ?>
                                <td class="text-center"><img class="img-thumbnail" title="لپ تاپ ایلین ور" alt="لپ تاپ ایلین ور" src="<?php echo $comparison['image'] ?>"></td>
                                <?php endforeach; ?>
                            </tr>
                            <tr>
                                <td>قیمت</td>
                                <?php foreach ($comparisons as $comparison): ?>
                                <td>
                                    <?php if ($comparison['discount']): ?>
                                        <span class="price-old"><?php echo $comparison['cost']?> تومان</span>
                                    <?php endif; ?>
                                    <span class="price-new"><?php echo $comparison['cost'] - $comparison['cost'] * $comparison['discount'] / 100  ?> تومان</span>
                                </td>
                                <?php endforeach; ?>
                            </tr>
                            <tr>
                                <td>برند</td>
                                <?php foreach ($comparisons as $comparison): ?>
                                    <td><?php echo $comparison['brand']?></td>
                                <?php endforeach; ?>
                            </tr>
                            <tr>
                                <td>وضعیت موجودی</td>
                                <?php foreach ($comparisons as $comparison): ?>
                                    <td>
                                        -
                                    </td>
                                <?php endforeach; ?>
                            </tr>
                            <!--<tr>
                                <td>رتبه</td>
                                <td class="rating"><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <br>
                                    بر اساس 0 بررسی</td>
                                <td class="rating"><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <br>
                                    بر اساس 0 بررسی</td>
                                <td class="rating"><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <br>
                                    بر اساس 1 بررسی.</td>
                            </tr>-->
                            <tr>
                                <td>خلاصه</td>
                                <?php foreach ($comparisons as $comparison): ?>
                                <td class="description"><?php echo $comparison['description']?>...</td>
                                <?php endforeach; ?>
                            </tr>
                            <!--<tr>
                                <td>وزن</td>
                                <td>1.50kg</td>
                                <td>1.80kg</td>
                                <td>2.00kg</td>
                            </tr>
                            <tr>
                                <td>ابعاد (طول - عرض - ارتفاع)</td>
                                <td>0.00mm x 0.00mm x 0.00mm</td>
                                <td>0.00mm x 0.00mm x 0.00mm</td>
                                <td>0.00cm x 0.00cm x 0.00cm</td>
                            </tr>-->
                            </tbody>
                            <tbody>
                                <tr>
                                <td></td>
                                <?php foreach ($comparisons as $comparison): ?>
                                    <?php
                                    $property_groups = $class_product->property_groups($comparison['category_id']);
                                    ?>
                                    <td>
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
                                                            <td><?php echo $class_product->getvalueforproperty($comparison['id'],$property->id) ?></td>
                                                        </tr>
                                                        </tbody>
                                                    <?php endforeach; ?>
                                                </table>
                                            <?php endforeach; endif;?>
                                        </div>
                                    </td>
                                <?php endforeach; ?>
                            </tr>
                            </tbody>
                            <tbody>
                            <tr>
                                <td></td>
                                <?php foreach ($comparisons as $comparison): ?>
                                    <td><input type="button" onClick="" class="btn btn-primary btn-block" value="افزودن به سبد">
                                        <a class="btn btn-danger btn-block" href="index.php?c=comparison&a=delete&product=<?php echo $comparison['slug']?>">حذف</a></td>
                                <?php endforeach; ?>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <?php endif; ?>
                </div>
                <!--Middle Part End -->
            </div>
        </div>
    </div>
