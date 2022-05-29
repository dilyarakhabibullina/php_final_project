<?php
// include 'inc/Model.php';
// include 'inc/C_Base.php';

class C_Catalog extends C_Base {
    // public function __construct (){
    //     parent::__construct();
    // }

    public function action_show(){
        $this->title .="Каталог товаров";
        //$text = text_get();
        $this->content = $this->Template('theme/catalog.php', ['text' =>$text]);
        
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