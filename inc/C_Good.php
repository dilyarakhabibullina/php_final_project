<?php
include 'm/Catalog.php';
// include 'inc/C_Base.php';

class C_Catalog extends C_Base
{
    // public function __construct (){
    //     parent::__construct();
    // }

    public function action_show(){
        $this->title .="Каталог товаров";
        // if ($_GET['param']) {
        //     $limit=$_GET['param'];
        // }
        // else {$limit=3;}
        $viewCatalog = new Catalog();   
        $catalog_array=$viewCatalog->getCatalog();  
        //$count = count($catalog_array);  
        //$text = text_get();
        $this->content = $this->Template('theme/catalog.php', ['catalog_array'=>$catalog_array]
        //, ['count'=>$count]
    );
        //print_r($catalog_array);
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
    // $it= new C_Catalog();
    // echo '<pre>';$it->action_show();'</pre>'
