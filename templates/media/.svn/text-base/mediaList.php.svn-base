<?php
require_once('yiyaclass/MediaDB.php');
function mediaListFn($params, &$smarty)
{
    extract($params);
    $m = new MediaDB();
    $m->showThumbnail($scontent,$limit);
    $m->close();
}
$smarty->registerPlugin('function','mediaListFn', 'mediaListFn');
$smarty->assign("root",".");
?>

