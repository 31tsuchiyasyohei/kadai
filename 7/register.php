<?php
session_start();

?>


<html>
<head>
</head>
<body>
<form action="register_execute.php" method="post">
<table id="table">
    <tr>
	<td>ユーザー名: <input type="text" name="name" value="" /></td>
        </tr>
    <tr>
	<td>パスワード: <input type="password" name="password" value="" /></td>
</tr>
    <tr>
	<td>性別: <input type="text" name="gender" value="" /></td>
        </tr>
    <tr>
	<td>年齢: <input type="password" name="age" value="" /></td>
</tr>
    </table>
	<input type="submit" value="新規登録"/>
</form>
</body>
</html>