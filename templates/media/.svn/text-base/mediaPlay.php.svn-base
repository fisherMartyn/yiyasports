<?php
require_once('yiyaclass/MediaDB.php');
function mediaFn($params, &$smarty)
{
    extract($params);
    if(!(isset($mid)&&is_numeric($mid)))$mid=0;
    $c = new MediaDB();
    if($fn == "showCommentList")
        $c->showComment($mid,0,10);
    else if($fn == "showPlayOne")
        $c->showPlayOne($mid);
    else if($fn == "showPlayMany")
	$c->showPlayMany($mid);
    $c->close();
}
$smarty->registerPlugin('function','mediaFn', 'mediaFn');
$smarty->assign("root",".");
?>
