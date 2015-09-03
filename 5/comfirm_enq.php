<?php
$name = $_POST["name"]; 
$mail = $_POST["mail"]; 
$age = $_POST["age"]; 
$radiobutton = $_POST["radiobutton"]; 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>POST</title>
</head>
<body>
<p>お名前:<?=$name?></p>
<p>年齢:<?=$age?></p>
<p>MAIL:<?=$mail?></p>
<p>性別:<?=$radiobutton?></p>
<div id="kakunin"><a href="input_finish.php">確認</a></div>
</body>
</html> 