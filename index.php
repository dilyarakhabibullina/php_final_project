<?php
include_once ('inc/C_Page.php');
include_once ('inc/C_User.php');

$action="action_";
$action.= ($_GET['act'])?$_GET['act']:'index';

switch ($_GET['contr']){
    case 'edit':
        $controller = new C_Page();
        break;
    case 'user':
        $controller = new C_User();
        break;
    default:
    $controller= new C_Page();
}


$controller->$action();
$controller->render();



?>