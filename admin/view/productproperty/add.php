<div class="row">
    <div class="col-sm-12">
        <div class="box">
            <div class="box-header">
                <h4>ویژگی های محصول <?php echo $product->name?></h4>
            </div>
            <div class="box-body">
                <form method="post" action="index.php?c=productproperty&a=add&product=<?php echo htmlspecialchars($product_id) ?>" enctype="multipart/form-data">
                    <?php if ($property_groups): foreach ($property_groups as $property_group): ?>
                        <h3><?php echo $property_group->title ?></h3>
                        <?php foreach ($class_productproperty->properties($property_group->id) as $property): ?>
                        <div class="form-group col-sm-8">
                            <div class="row">
                                <div class="col-sm-1">
                                    <label for="title"><?php echo $property->title ?></label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" name="properties[<?php echo $property->id?>][value]" value="<?php echo $class_productproperty->product_property($product_id,$property->id) ?>" class="form-control">
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    <?php endforeach; endif; ?>
                    <div class="form-group">
                        <input type="submit" value="ثبت" name="btn" class="btn btn-info">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>