<?php
require_once 'model/Morder.php';
require_once 'model/Morder_detail.php';
require_once 'model/Mcart.php';
require_once 'model/Muser.php';
require_once 'model/Mproduct.php';
$class_product = new product();
$class_user = new user();
$class_cart = new cart();
$class_order = new order();
$class_order_detail = new order_detail();


switch ($a)
{
    case 'add':
        $class_middleware->middleware_auth();
        $items = Cart::getItems();
        if (isset($_POST['btn']))
        {
            $random = rand(00000,1010101010);
            $address = $_POST['address'];
            $cart = $_SESSION['cart'];
            $order = $class_order->store($cart['total_amount'],$address,$random,date('Y-m-d h:i:s'));
            foreach (Cart::getItems() as $item)
            {
                $class_order_detail->store($_SESSION['user_id'],$item['product']->id,$order->id,$item['discount'],$item['quantity']*$item['discount'],$item['quantity'],date('Y-m-d h:i:s'));
            }
            $class_cart->deleteAll();
            /*
             * ZarinPal Advanced Class
             *
             * version 	: 1.0
             * link 	: https://vrl.ir/zpc
             *
             * author 	: milad maldar
             * e-mail 	: miladworkshop@gmail.com
             * website 	: https://miladworkshop.ir
            */

            require_once("public/include/zarinpal_function.php");

            $MerchantID = "00";
            $Amount = $cart['total_amount'];
            $Description = "تراکنش زرین پال";
            $Email = "";
            $Mobile = "";
            $CallbackURL = "http://localhost/php_shop/index.php?c=order&a=update";
            $ZarinGate = false;
            $SandBox = true;

            $zp = new zarinpal();
            $result = $zp->request($MerchantID, $Amount, $Description, $Email, $Mobile, $CallbackURL, $SandBox, $ZarinGate);

            if (isset($result["Status"]) && $result["Status"] == 100) {
                // Success and redirect to pay
                $class_order->update_transaction_id($result['Authority'],$order->id);
                $zp->redirect($result["StartPay"]);
            } else {
                // error
                echo "خطا در ایجاد تراکنش";
                echo "<br />کد خطا : " . $result["Status"];
                echo "<br />تفسیر و علت خطا : " . $result["Message"];
            }

        }
    break;
    case 'update':
       $Authority = $_GET['Authority'];
       $Status = $_GET['Status'];
       $order = $class_order->showByTransaction_id($Authority);
       $class_order->update($Status,$order->id);
       foreach ($class_order_detail->order($order->id) as $order_detail)
       {
           $class_order_detail->update($Status,$order->id);
       }
       header("location:index.php?c=order&a=show&order=$order->random");
    break;
    case 'show':
        $order_random = $_GET['order'];
        $order = $class_order->show($order_random);
        if (!$order)
        {
            header('location:404.php');
        }
    break;
    case 'list':
        $user_id = $_SESSION['user_id'];
        $orders = $class_user->order_detail($user_id);
    break;
}

include_once 'view/order/'.$a.'.php';