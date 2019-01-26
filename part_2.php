<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="app.css">
	<title>Clock Hand Angle2</title>
</head>
<body>
	<h1>ЪГЪЛЪТ НА ЧАСА, КОЙТО НАПИСА ТОКУ ЩО <p></p>ЩЕ СЕ ПОВТОРИ ТОЧНО В:</h1>
<?php

if (!empty($_GET)) {
$deg = $_GET['degree'];
$h = $_GET['hour'];
$s = $_GET['sec'];
$m= $_GET['min'];

// echo $deg;
// echo $h;
$new_h = $h+1;

$new_h_deg = $new_h*30;

$diff = $new_h_deg-$deg;
$stm=$s-($m*60);
$new_m1 = $diff*3600/360/60;
$new_sec = 0.1*($m + $stm/60);
// echo $stm;
// echo $new_h . ':' . round($diff*3600/360/60) . ':' . round($new_sec);
}
?>
<h4><?php echo $new_h . ':' . round($diff*3600/360/60) . ':' . round($new_sec);?></h4>
</body>
</html>