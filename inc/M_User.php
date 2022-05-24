<?php

//$data = ["aaa"=>123, "bbb"=>321]

class M_User {
    function auth ($login, $pass) {
        if ($login='aaa' &&$pass=123){
            header:"location: Cabinet.php";
        }
    else: echo "Нет такого пользователя";
    }
}

?>