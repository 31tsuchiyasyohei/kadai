<?php
session_start();

?>


<html>
<head>
</head>
<body>
<form action="login_execute.php" method="post">
<table id="table">
    <tr>
	<td>ログイン名: <input type="text" name="name" value="" /></td>
        </tr>
    <tr>
	<td>パスワード: <input type="password" name="password" value="" /></td>
</tr>
    </table>
	<input type="submit" value="ログイン"/>
</form>
</body>
</html>