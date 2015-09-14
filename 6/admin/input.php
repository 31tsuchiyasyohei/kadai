<?php
session_start();
var_dump($_SESSION["name"]);
var_dump($_SESSION["password"]);
if($_SESSION["name"] != "admin" or $_SESSION["password"] != "password"){
  header("Location: login.php");  
}


session_destroy();
?>
<html>
<head>
</head>
<body>
<form action="input_execute.php" method="post">
	タイトル: <input type="text" name="title" value="" />
	詳細: <input type="text" name="detail" value="" />
	作者: <input type="text" name="author" value="" />
	<input type="submit" />
</form>
</body>
</html>