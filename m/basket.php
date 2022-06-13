<?php
include_once 'DB.php';

// define('DB_DRIVER','mysql');
// define('DB_HOST','localhost');
// define('DB_NAME','myShop');
// define('DB_USER','root');
// define('DB_PASS','root');

// $connect_str = DB_DRIVER . ':host='. DB_HOST . ';dbname=' . DB_NAME;
// 	$db = new PDO($connect_str,DB_USER,DB_PASS);
	

class Basket{

    public function getBasket ($id_order) {
         return DB::instance()->query("SELECT basket.id_basket, basket.id_good, basket.id_order, goods.title, basket.counts, goods.price, goods.image 
         FROM basket INNER JOIN goods ON basket.id_good = goods.id WHERE basket.id_order = $id_order")->fetchAll();
     }

public function addNewOrder($iduser) {
    //global $db;
    return DB::Insert('INSERT INTO orders (`user_id`)  VALUES (:idusers)', ['idusers' => $iduser]);
}



public function addOrderToUser($iduser, $idorder){
    DB::Update('UPDATE users SET last_id_order = :last_id_order WHERE (id = :id)',['last_id_order' => $idorder, 'id' => $iduser]);
}


public function checkLastOrderUser($iduser){
    return DB::GetRow('SELECT users.last_id_order FROM users WHERE id = :id', ['id' => $iduser]);
}

// public function addOrderToUser($user_id, $order_id){
//    //global $db;
//    DB::instance()->query("UPDATE `users` SET last_id_order = $order_id WHERE id = $user_id");
// }

// public function checkLastOrderUser($user_id) {
//     //global $db;
//     return DB::instance()->query("SELECT users.last_id_order FROM `users` WHERE id = $user_id")->fetch();
//     // $usersorder = $g->fetch();
//     // return print_r($usersorder);
// }

// public function testaddGoodToBasket ($id_good) {
//     global $db;
//     $goodsFound = $db->query("SELECT * FROM `basket` WHERE id_good = $id_good");
//     $row = $goodsFound->fetchAll();
//     return print_r($row);
// }

public function addGoodToBasket ($id_good, $id_order, $counts) {
    $goodFound =  DB::GetRow("SELECT basket.id_basket, basket.id_good, basket.id_order, basket.counts FROM `basket` WHERE id_good = $id_good AND id_order = $id_order");
  //  $goodFound = $goodsFound->fetch();
if ($goodFound) {
    $newCount = $goodFound['counts'] +$counts;
    $idbasket = $goodFound['id_basket'];
    DB::Update("UPDATE `basket` SET counts =$newCount WHERE id_basket = $idbasket AND id_good = $id_good AND id_order = $id_order");
}
else {
    return DB::Insert("INSERT INTO `basket` (id_good, id_order, counts) VALUES ($id_good, $id_order, $counts)");
}
    // $row = $goodsFound->fetchAll();
    // return print_r($row);
}

// public function getBasket () {
//     global $db;
//     $allBasketGoods = $db->query("SELECT * FROM `basket`");
//     $row1 = $allBasketGoods->fetchAll();
//     return $row1;
// }

// public function getBasketbyOrder ($id_order) {
//     global $db;
//     $orderBasketGoods = $db->query("SELECT basket.id_basket, goods.title, basket.counts, goods.price 
//     FROM basket INNER JOIN goods ON basket.id_good = goods.id WHERE basket.id_order = $id_order");
//     $row2 = $orderBasketGoods->fetchAll();
//     return print_r($row2);
// }

public function deleteGoodFromBasket($id_basket) {
    
   return DB::instance()->query("DELETE FROM `basket` WHERE id_basket = $id_basket");

}
}
//$item->getBasket();
// $item = new Basket();
// $item->getBasket();
//echo '<pre>';$item->testaddGoodToBasket(1);'</pre>';
// echo '<pre>';$item->addGoodToBasket(221, 331, 3);'</pre>';
//echo '<pre>';$item->getBasket();'</pre>';
// $item->getBasketbyOrder(22);
// $item->deleteGoodFromBasket(222);
// $item->addNewOrder(78);
// $item->addOrderToUser(7, 8);
// $item->checkLastOrderUser(7);
