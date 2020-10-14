<?php
/*Pásztor Zsolt
 * Feladat 0322
 * */
include('../Templates/head.tpl');

echo '<hr>';
$voltgombnyomas = $_GET['Szamol'];

var_dump($voltgombnyomas);
echo '<hr>';
var_dump($_GET);

echo '<hr>';

include('../Templates/Body.tpl');

include('../Templates/foot.tpl');

?>
