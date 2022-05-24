<?php
include_once 'm/User.php';
//include 'inc/C_Base.php';

class C_User extends C_Base {
    public function __construct (){
        parent::__construct();
    }

    // public function action_info() {
    //     $get_user = new User();
    //     $user_info = $get_user->get($_SESSION['user_id']);
    //     $this->title .=":: Личный кабинет". $user_info['name']; 
    //   $this->content = $this->Template('theme/u_info.php', ['username' => $user_info['name'],'userlogin' => $user_info['login']]);
    //   //$this->content = $this->Template('theme/u_info.php', array('username' => $user_info['name'], 'userlogin' => $user_info['login']));
    
    // }
    public function action_info() {
			
        $get_user = new User();
        //$_SESSION['user_id'] = $user['id'];
        $user_info = $get_user->get($_SESSION['user_id']);
        $this->title .= '::' . $user_info['name'];
        $this->content = $this->Template('theme/u_info.php', array('username' => $user_info['name'], 'userlogin' => $user_info['login']
        //, ['text' => $user_info]
        ));
    }
    
    public function action_reg(){
        $this->title .="Регистрация";
        $this->content = $this->Template('theme/u_reg.php', []);
             
        if($this->isPost()){
        $new_user = new User();
        $result=$new_user->newR($_POST['name'], $_POST['login'], $_POST['password']);
        $this->content = $this->Template('theme/u_reg.php', ['text' =>$result]);
        }
    } 

    public function action_login(){
    $this->title.=':: Вход';
    $this->content = $this->Template('theme/u_login.php', []);
    if ($this->isPost()) {
        $login = new User();
        $result = $login->login($_POST['login'], $_POST['password']);
        $this->content = $this->Template('theme/u_login.php', ['text' => $result]);
}
}

public function action_logout() {
    $logout = new User();
    $result = $logout->logout();
}
}
        
?>