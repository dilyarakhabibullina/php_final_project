<?php
include 'm/Order.php';
// include 'inc/C_Base.php';

class C_Order extends C_Base
{
    // public function __construct (){
    //     parent::__construct();
    // }

    public function action_add(){
        $this->title .="::Подтверждение заказа";
        if ($_SESSION['order_id']) {
            $sumPriceGood = 0;
            $viewOrder=new Order();
            $order_array = $viewOrder->getOrder($_SESSION['order_id']);
        
       
        $text .= "<h2>Спасибо за покупку! Ваш Заказ № ".$_SESSION['order_id']." оформлен. Ждите звонка менеджера.</h2>";
        $text .= "<table class='table'><thead><tr><th scope='col'>Товар</th><th scope='col'>Количество</th><th scope='col'>Цена</th></tr></thead><tbody>";
        foreach ($order_array as $id) {
            $text .= "<tr><th scope='row'>".$id['title']."</th><td>".$id['counts']."</td><td>".$id['price']."</td></tr>";
            $sumpricegood += $id['counts'] * $id['price'];
        }
        $text .= "</tbody></table><div class='col-9'>Общая стоимость: <b>".$sumpricegood."</b></div></div>";
        $text .= "<br><p>Заказ оформлен на ".$_POST['username']." Емеил: ".$_POST['useremail']." Телефон ".$_POST['usertel']."<br>";
        $text .= "Доставка по адресу страна:  ".$_POST['usercity']." область: ".$_POST['userstate']." индекс:  ".$_POST['userpostcode']." </p><div class='col-auto'><br><form method='post' action='index.php'><button type='submit' class='btn btn-primary mb-2' name='idorder'>Перейти на главную страницу.</button></div></form>";

    } else{

        $text = "<div class='row'>Корзина пуста.</div>";
    
    }

    $this->content = $this->Template('theme/v_order.php', array('text' => $text));	
    $_SESSION['order_id'] = null;
    $updatuseridorder = new Order();
    $updatuseridorder->orderClose($_SESSION['user_id']);
}
}