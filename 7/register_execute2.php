<?php
$name = $_POST["name"];
$password = $_POST["password"];
$gender = $_POST["gender"];
$age = $_POST["age"];
$pdo = new PDO("mysql:host=mysql518.db.sakura.ne.jp;dbname=tsuchiya0909_test;charset=utf8", "tsuchiya0909", "test0909");
$sql = "INSERT INTO `register`(`username`, `password`, `gender`, `age`) VALUES ('".$name."' ,'".$password."','".$gender."', ".$age.")";

var_dump($sql);
$stmt = $pdo->prepare($sql);
$result = $stmt->execute();
var_dump($result);
if($result) {
	echo "データが登録できました";
	echo "<a href=select.php>一覧へ</a>";
} else {
	echo "データの登録に失敗しました";
}
$pdo = null;
?>
<html>
<head>
</head>
<body>
</body>
</html>