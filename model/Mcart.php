<?php
class cart{
    protected static $db;
    public function __construct()
    {
        global $db;
        self::$db = $db;
    }

    public function store($product,$quantity)
    {
        if (isset($_SESSION['cart']))
        {
            $cart = self::getItem();
        }

        $cart[$product->id] = [
            'quantity' => $quantity,
            'product' => $product,
            'discount' => $this->cost_with_Discount($product)
        ];

        $_SESSION['cart'] = $cart;

        $cart['total_amount'] = $this->totalAmount();
        $cart['total_items'] = $this->totalItems();


        $_SESSION['cart'] = $cart;
        return $_SESSION['cart'];
    }

    public static function getItem()
    {
        if (!isset($_SESSION['cart']))
        {
            return null;
        }


        return $_SESSION['cart'];
    }

    public static function totalAmount()
    {
        $totalAmount = 0;
        if (self::getItem())
        {
            foreach (self::getItem() as $cartItem)
            {
                if (is_array($cartItem) && array_key_exists('product',$cartItem) && array_key_exists('quantity',$cartItem)) {
                    $totalAmount += self::cost_with_Discount($cartItem['product']) * $cartItem['quantity'];
                }
            }
        }
        return $totalAmount;
    }

    public static function getItems()
    {
        if (self::getItem()):
            return array_filter(self::getItem(),function ($item){
                return is_array($item);
            });
        else:
            return null;
        endif;
    }

    public static function totalItems()
    {
        if (self::getItem()):
        $items =  array_filter(self::getItem(),function ($item){
             return is_array($item);
        });
        return count($items);
        else:
            return 0;
        endif;
    }

    public static function cost_with_Discount($product)
    {
        $sql = self::$db->query("SELECT * FROM discounts WHERE product_id='$product->id'")->fetch(PDO::FETCH_OBJ);
        if (!$sql) {
            return $product->cost;
        }else{
            return $product->cost - $product->cost * $sql->value / 100 ;
        }
    }


    public function delete($product_id)
    {
        unset($_SESSION['cart'][$product_id]);

        $cart = self::getItem();

        $cart['total_amount'] = $this->totalAmount();
        $cart['total_items'] = $this->totalItems();

        $_SESSION['cart'] = $cart;

    }

    public function deleteAll()
    {
        unset($_SESSION['cart']);

    }
}