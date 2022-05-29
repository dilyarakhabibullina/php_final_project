<?php
// include_once ('inc/C_Page.php');
// include_once ('inc/C_User.php');

// function __autoload($classname){
// 	include_once("inc/$classname.php");
// }
spl_autoload_register("NewStandarAutoloader");
function NewStandarAutoloader ($className)
{
	$dirs=['inc',
		   'm',
		   'lib'];
	$found=false;
    foreach($dirs as $dir)
		{
		$filename=__DIR__ .'/'.$dir.'/'.$className.'.php';
		//echo $filename."<br>";
		if (is_file($filename))
			{
			require_once ($filename);
			$found=true;
			}
	
		}
	if (!$found)
		{	
			throw new Exception('Class did not loaded'.$className);
	}	
	return true;	
}

$action="action_";
$action.= ($_GET['act'])?$_GET['act']:'index';

switch ($_GET['contr']){
    case 'edit':
        $controller = new C_Page();
        break;
    case 'user':
        $controller = new C_User();
        break;
    case 'catalog':
        $controller = new C_Catalog();
            break;
	case 'basket':
		$controller = new C_Basket();
			break;
    default:
    $controller= new C_Page();
}


$controller->$action();
$controller->render();



?>