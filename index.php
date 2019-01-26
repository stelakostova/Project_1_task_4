<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="app.css">
	<title>Clock Hand Angle</title>
</head>
<body>
	<h1>Разберете колко градуса показват стрелките на часовника в зависимост от въведеният от Вас час, минута и дори секунда?</h1>
	<form action="" method="post" >
		<input type="text" name="clock" placeholder="Въведете час">
        <input type="text" name="minutes" placeholder="Въведете минути">
		<input type="text" name="sec" placeholder="Въведете секунди">
		<input type="submit" name="submit">		
	</form>
    <pre></pre>
    <div>
    <?php
if (!empty($_POST)) {
    $h = $_POST['clock'];
    $m = $_POST['minutes'];
    $sec = $m*60+$_POST['sec'];
    // var_dump($sec);
    
    $angle = (30*$h)-(360/3600*$sec);
    if ($angle >= 0 ) {
        echo  'Резултатът е  ' . round(360-$angle) . ' градуса' . '.' ;
    }
    elseif ($angle < 0 ) {
         echo 'Този час, който ти избра в момента има следните градуси направени от двете стрелки на часовника  ' .  $degr =  round($angle * (-1)) . '.';
    }
    } 
    ?>
    </div>
    <h3>Нека проврим след колко време, <br></br>стрелките на часовника ще застанат, <br></br>образувайки ъгъл със същата големина както сега....</h3>
    <!-- <p>Нека проверим</p> -->
    <a href="part_2.php?degree=<?= $angle ?>&hour=<?= $h ?>&min=<?= $m ?>&sec=<?= $sec ?>">ПРОВЕРИ</a>

    
</body>
</html>