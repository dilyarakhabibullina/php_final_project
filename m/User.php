<?php
include 'config/db.php';

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
        return new PDO(DRIVER . ':host=' . SERVER . ';dbname=' . DB, USERNAME, PASSWORD);
    }
    public function get ($id) {
        return $this->connect->query("SELECT * FROM users WHERE id = '" . $id . "'")->fetch();
    }
    public function newR ($name, $login, $password) {
        $user = $this->connect->query("SELECT * from users WHERE login = '" . $login . "' ")->fetch();
        if (!$user) {
            if($this->connect->exec("INSERT INTO users VALUES (null, '" . $name . "', '" . $login . "', '" . $password . "')")){
                return "Ты зарегистрировался";

            }     }
            else {
                return "Такой логин уже есть";
            }
    }
    public function login ($login, $password) {
        $user = $this->connect->query("SELECT * from users WHERE login = '" . $login . "' ")->fetch();
        
        if ($user) {
            if ($user['password'] == $password
            // pass($user['name'], strip_tags($password))
            ) {
               // $_SESSION['user_id'] = $user['id'];
                return 'Добро пожаловать в систему, ' . $user['name'] . '!';
            } else {
                return 'Пароль не верный!';}
            } else {
                return 'Пользователь с таким логином не зарегистрирован!';
            }
            }
        
    
        public function logout () {
            if ($_SESSION["user_id"]) {
                $_SESSION["user_id"]=null;
                session_destroy();
                return true;
            }
            return false;
        }
        }
        //print_r ($user);
?>