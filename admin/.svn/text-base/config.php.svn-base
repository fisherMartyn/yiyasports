<?php

/*define server's path*/
define('BASE_PATH', $_SERVER['DOCUMENT_ROOT']);
//define smarty path
define('SMARTY_PATH',dirname($_SERVER['SCRIPT_NAME']).'/Smarty/');

//add smarty library
require BASE_PATH.SMARTY_PATH.'Smarty.class.php';

//create smarty object
$smarty=new Smarty;

//define path
$smarty->template_dir=BASE_PATH.SMARTY_PATH.'templates/';
$smarty->compile_dir=BASE_PATH.SMARTY_PATH.'templates_c/';
$smarty->config_dir=BASE_PATH.SMARTY_PATH.'configs/';
$smarty->cache_dir=BASE_PATH.SMARTY_PATH.'cache/';

//define the begin/end symbol

$smarty->left_delimiter='{%';
$smarty->right_delimiter='%}';

//close cache
$smarty->caching= false;

//close debugging
$smarty->debugging=false;

?>


