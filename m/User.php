<?php
include 'config/config.php';

class User {

    public $user_id, $user_login, $user_name, $user_password;
    private $connect;

    public function __construct () {
        $this->connect = $this->connecting();
    }

    public function pass ($name, $password) {
        return strrev(md5($name)) . md5($password);
    }

    public function connecting () {
        return new PDO(DB_DRIVER . ':host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
    }
    // public function get ($id) {
    //     return $this->connect->query("SELECT * FROM users WHERE id = '" . $id . "'")->fetch();
    // }

    public function get ($id) {
       return  $this->connect->query("SELECT * FROM users WHERE id = '" . $id . "'")->fetch();
    }


    public function newR ($name, $login, $password) {
        $user = $this->connect->query("SELECT * from users WHERE login = '" . $login . "' ")->fetch();
        if (!$user) {
            if($this->connect->exec("INSERT INTO users VALUES (null, '" . $name . "', '" . $login . "', '" . $password . "')")){
                return "Ты зарегистрировался";

            }     }
            else {
            return "Такой пользователь есть";
            //print_r($user);
            }
    }
    public function login ($login, $password) {
        $user = $this->connect->query("SELECT * from users WHERE login = '" . $login . "' ")->fetch();
        
        if ($user) {
            if ($user['password'] == $password) {
            // pass($user['name'], strip_tags($password))
            $_SESSION['user_id'] = $user['id'];
               // $_SESSION['user_id'] = $user['id'];
                return 'Добро пожаловать в систему, ' . $user['name'] . $user['id'] .$_SESSION['user_id']. print_r($_SESSION).'!';
            } else {
                return 'Пароль не верный!';}
            } else {
                return 'Пользователь с таким логином не зарегистрирован!';
            }
            }
        // public function login ($login, $password) {
		// 	$user = $this->connect->query("SELECT * FROM users WHERE login = '" . $login . "'")->fetch();
		// 	if ($user) {
		// 		if ($user['password'] == $password) {
    	// 			$_SESSION['user_id'] = $user['id'];
    	// 			return 'Добро пожаловать в систему, ' . $user['name'] . '!';
		// 		} else {
		// 			return 'Пароль не верный!';
		// 		}
		// 	} else {
		// 		return 'Пользователь с таким логином не зарегистрирован!';
		// 	}
		// }

    
        public function logout () {
            if ($_SESSION["user_id"]) {
                $_SESSION["user_id"]=null;
                session_destroy();
                return true;
            }
            return false;
        }
        }
        
?>