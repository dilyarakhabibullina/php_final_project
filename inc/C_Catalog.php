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
        
        $viewCatalog = new Catalog();   
        $catalog_array=$viewCatalog->getCatalog();  
        
        $this->content = $this->Template('theme/catalog.php', ['catalog_array'=>$catalog_array]
        
    );
        //print_r($catalog_array);
    }
    public function action_showGood(){
        
       // print_r($good_array);
        
        
        $viewGood = new Catalog();   
        $good_array=$viewGood->getGood($_GET["id_good"]); 
        // $text .= "<h2>".$good_array['title']."</h2>";
       // $g = $good_array['price']; 
        $this->title .="::Товар: ".$good_array['title'];
        $this->content = $this->Template("theme/product.php", ["good_array" => $good_array])     
        ;
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
