<?php

class comparison{
    public function store($product,$discount,$brand)
    {
        if ($discount)
        {
            $discounts = $discount->value;
        }else{
            $discounts = false;
        }
        if (isset($_SESSION['comparisons'])):
            if (!array_key_exists($product->id,$_SESSION['comparisons'])) {
                $products = [
                    'id' => $product->id,
                    'name' => $product->name,
                    'image' => $product->image,
                    'cost' => $product->cost,
                    'is_published' => $product->is_published,
                    'slug' => $product->slug,
                    'discount' => $discounts,
                    'brand' => $brand,
                    'category_id' => $product->category_id,
                    'description' => substr($product->description,'0','300')
                ];
                $_SESSION['comparisons'][$product->id] = $products;
            }else{
                unset($_SESSION['comparisons'][$product->id]);
            }
        else:
            $products = [
                'id' => $product->id,
                'name' => $product->name,
                'image' => $product->image,
                'cost' => $product->cost,
                'is_published' => $product->is_published,
                'slug' => $product->slug,
                'discount' => $discounts,
                'brand' => $brand,
                'category_id' => $product->category_id,
                'description' => substr($product->description,'0','300')
            ];
            $_SESSION['comparisons'][$product->id] = $products;
        endif;
    }

    public function delete($product)
    {
        unset($_SESSION['comparisons'][$product->id]);
    }
}