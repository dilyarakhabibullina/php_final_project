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
            $basket_array=$viewBasket->getBasket($_SESSION['order_id']);
        }
        else{
        $text = "Корзина пуста";}
        $this->content = $this->Template('theme/cart.php', ['text' =>$text]);
        
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