<?php
header("Location: " . $_SERVER['HTTP_REFERER']);
session_start();
$starting = microtime(true);
date_default_timezone_set('Europe/Moscow');
$time = date("d.m.y H:i");
$X = $_GET['X'];
$Y = $_GET['Y'];
$R = $_GET['R'];
$DELETE = $_GET['des'];
var_dump($_GET);

if ($DELETE == "Очистить сессию") {
    session_destroy();
}



if ($X == "" || !is_numeric($X) || floatval($X) > 3 || floatval($X) < -3) return;

if (!in_array($Y, array("-4", "-3", "-2", "-1", "0", "1", "2", "3", "4"))) {
    return;
}
if (!in_array($R, array("1", "1.5", "2", "2.5", "3"))) {
    return;
}


$X = floatval($X);
$Y = intval($Y);
$R = floatval($R);

if (
    ($X >= 0 && $Y >= 0 && $Y <= ($R / 2) && $X <= $R) ||
    ($X <= 0 && $Y >= 0 && ($X * $X + $Y * $Y) <= ($R / 2) * ($R / 2)) ||
    ($X >= 0 && $Y <= 0 && $Y >= $X - $R)
    )
    $RES = "Точка попадает";
    else
    $RES = "Точка не попадает";

$finishing = microtime(true);
$timeWork = $finishing - $starting;
$timeWork = round($timeWork, 7);
if (!isset($_SESSION["data"])) {
    $_SESSION["data"] = array();
}

$se = "<tr>    
<td> $X </td>
<td> $Y </td>
<td> $R </td>
<td> $RES 
<td> $time </td>
<td> $timeWork </td>
</tr>";
array_push($_SESSION["data"], $se);



