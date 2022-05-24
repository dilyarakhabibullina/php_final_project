<?php
include 'Controller.php';
include_once 'm/User.php';

class C_Base extends Controller {
protected $title;
protected $content;

public function __construct (){
    $this->title = 'Название сайта';
    $this->content ='';
}

public function render () {

$get_user = new User();
if ($_SESSION['user_id']) {
    $user_info = $get_user->get($_SESSION['user_id']);
}
else {$user_info = false;};

$vars = array ('title' => $this->title, 'content'=>$this->content, 'user'=>$user_info['name']);
$page = $this->Template('theme/v_main.php', $vars);
echo $page;
}

}

?>