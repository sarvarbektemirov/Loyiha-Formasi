<?php
$a = htmlspecialchars($_POST['a'], ENT_QUOTES);
// $b = htmlspecialchars($_POST['b'], ENT_QUOTES);
$c = htmlspecialchars($_POST['c'], ENT_QUOTES);
$d = htmlspecialchars($_POST['d'], ENT_QUOTES);
$e = htmlspecialchars($_POST['e'], ENT_QUOTES);

echo " Familiaysi: " . $a . "<br> Ismi " ." <br>Jinsi: " . $c . "<br> " . $d . "<br> " . $e;
?>