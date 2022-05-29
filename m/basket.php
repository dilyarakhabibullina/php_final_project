<?php
include '../config/config.php';

class Basket{

public function addNewOrder($user_id) {
    global $db;
    return $db->query("INSERT INTO `orders` (user_id) VALUES ($user_id)");
}

public function addOrderToUser($user_id, $order_id){
   global $db;
   return $db->exec("UPDATE `users` SET last_id_order = $order_id WHERE (id = $user_id)");
}

public function checkLastOrderUser($user_id) {
    global $db;
    $g = $db->query("SELECT users.last_id_order FROM `users` WHERE id = $user_id");
    $usersorder = $g->fetch();
    return print_r($usersorder);
}

// public function testaddGoodToBasket ($id_good) {
//     global $db;
//     $goodsFound = $db->query("SELECT * FROM `basket` WHERE id_good = $id_good");
//     $row = $goodsFound->fetchAll();
//     return print_r($row);
// }

// public function addGoodToBasket ($id_good, $id_order, $counts) {
//     global $db;
//     $goodsFound = $db->query("SELECT basket.id_basket, basket.id_good, basket.id_order, basket.counts FROM `basket` WHERE id_good = $id_good AND id_order = $id_order");
//     $goodFound = $goodsFound->fetch();
// if ($goodFound) {
//     $newCount = $goodFound['counts'] +$counts;
//     $idbasket = $goodFound['id_basket'];
//     $db->exec("UPDATE `basket` SET counts =$newCount WHERE id_basket = $idbasket AND id_good = $id_good AND id_order = $id_order");
// }
// else {
//     return $db->query("INSERT INTO `basket` (id_good, id_order, counts) VALUES ($id_good, $id_order, $counts)");
// }
//     // $row = $goodsFound->fetchAll();
//     // return print_r($row);
// }

public function getBasket () {
    global $db;
    $allBasketGoods = $db->query("SELECT * FROM `basket`");
    $row1 = $allBasketGoods->fetchAll();
    return print_r($row1)."<hr>";
}

// public function getBasketbyOrder ($id_order) {
//     global $db;
//     $orderBasketGoods = $db->query("SELECT basket.id_basket, goods.title, basket.counts, goods.price 
//     FROM basket INNER JOIN goods ON basket.id_good = goods.id WHERE basket.id_order = $id_order");
//     $row2 = $orderBasketGoods->fetchAll();
//     return print_r($row2);
// }

// public function deleteGoodFromBasket($id_good) {
//     global $db; 
//    return $db->query("DELETE FROM `basket` WHERE id_good=$id_good");

// }
}

//$item = new Basket();
//echo '<pre>';$item->testaddGoodToBasket(1);'</pre>';
// echo '<pre>';$item->addGoodToBasket(221, 331, 3);'</pre>';
// echo '<pre>';$item->getBasket();'</pre>';
// $item->getBasketbyOrder(22);
// $item->deleteGoodFromBasket(222);
// $item->addNewOrder(78);
// $item->addOrderToUser(7, 8);
// $item->checkLastOrderUser(7);

?>