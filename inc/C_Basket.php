<?php
include 'm/Basket.php';
//include 'inc/C_Base.php';
 
class C_Basket extends C_Base {
    // public function __construct (){
    //     parent::__construct();
    // }
    
    public function action_view(){
        $this->title .="Корзина";
        if($_SESSION['order_id']){
            $viewBasket = new Basket();
            $basket_array=$viewBasket->getBasket(
                //25
                $_SESSION['order_id']
            );
        }
        else
       {
       $text = "Корзина пуста";
    }
    // foreach ($basket_array as $item){
    // $basketSum=$item['counts']*$item['price'];    
    // }
    $this->content = $this->Template('theme/cart.php', ['basket_array'=>$basket_array], ['basketSum'=>$basketSum]);
        
    }


    public function action_add(){
        if(is_null($_SESSION['user_id'])){
            $_SESSION['user_id'] = 0;
        }
        $this->title .= '::Корзина: Добавление товара';
        $lastorder = new Basket();
        //возвращает последний заказ конкретного юзера
        $last_id_order = $lastorder->checkLastOrderUser($_SESSION['user_id']);
       
        if($last_id_order){
            $_SESSION['order_id'] = $last_id_order['last_id_order'];
        }

        if(is_null($_SESSION['order_id'])){
			$order = new Basket();
			$lastorder = $order->checkLastOrderUser(!$_SESSION['user_id']);
			$_SESSION['order_id'] = $order->addNewOrder($_SESSION['user_id']);			
			$order->addOrderToUser($_SESSION['user_id'], $_SESSION['order_id']);
		}


        
        
        $goodAddBasket = new Basket();
        $goodAddBasket->addGoodToBasket($_POST['id_good'], $_SESSION['order_id'], $_POST['counts']);
        $text .= "<div class='col-12'>Товар добавлен в корзину</div>";
		$this->content = $this->Template('theme/cart.php', array('text' => $text), array('session' => $_SESSION['order_id']));	 

    }

    public function action_del(){
        $this->title .="  Корзина: Удаление товара";
        $delGoodFromBasket = new Basket();
        $delGoodFromBasket->deleteGoodFromBasket($_POST['id_basket']);
        //header("Location: index.php?contr=basket&act=view");
        // if($delGoodFromBasket->deleteGoodFromBasket($_POST['id_basket']
        //     )){
        $text="Товар удален из корзины <br> <div class='shop__cart-button'>
        <button><a href='index.php?contr=basket&act=view'> BACK TO THE CART </a></button></div><br>";
        // }
        $this->content = $this->Template('theme/cart.php', ['text'=>$text], ['button'=>$button]);

    }

// public function action_edit(){
//     $this->title .="Edit";
//     if($_POST['text']){
//         $text=$_POST['text'];
//         text_set($text);
//         header("location:index.php");
//         exit();
//     }
//         $text = text_get();
//         $this->content = $this->Template('theme/v_edit.php', ['text' =>$text]);
// }

    }

?>