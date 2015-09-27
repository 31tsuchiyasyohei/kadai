<?php 
session_start();
ini_set('display_errors','On');
define('DEBUG', true); 
error_reporting(-1);


$name = $_POST["name"];
$password = $_POST["password"];
$pdo = new PDO("mysql:host=mysql518.db.sakura.ne.jp;dbname=tsuchiya0909_test;charset=utf8", "tsuchiya0909", "test0909");
$sql = "SELECT id FROM register WHERE password='".$password."' and username='".$name."'";

//var_dump($sql);
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($result);
var_dump($_SESSION);
echo "<hr>";
if($result) {
	$_SESSION["register_id"] = $result[0]['id'];
echo "your ID:".$result[0]['id'] . "<br>";
	echo "ログインできました";
	echo "<a href=index_top.php>一覧へ</a>";
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