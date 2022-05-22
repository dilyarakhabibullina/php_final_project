<?php
include 'Controller.php';

class C_Base extends Controller {
protected $title;
protected $content;

public function __construct (){
    $this->title = 'Название сайта';
    $this->content ='';
}

public function render () {
    
$vars = array ('title' => $this->title, 'content'=>$this->content);
$page = $this->Template('theme/v_main.php', $vars);
echo $page;
}

}

?>