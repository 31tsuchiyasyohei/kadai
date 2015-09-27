<?php 
session_start();
ini_set('display_errors', 'On'); 
error_reporting(E_ALL);

?>
<?php include("header.php"); ?> 

<?php
if(isset($_GET["id"])){
$news_id = $_GET["id"];
echo $news_id;


if(isset($_SESSION["register_id"])){
$register_id = $_SESSION["register_id"];

$pdo = new PDO("mysql:host=mysql518.db.sakura.ne.jp;dbname=tsuchiya0909_test;charset=utf8", "tsuchiya0909", "test0909");
$sql = "INSERT INTO `log`(`register_id`, `news_id`, `create_date`, `create_time`) VALUES (".$register_id." ,".$news_id.",'".date("Y-m-d")."', '".date("h:i:s")."')";
//echo $sql;
$stmt = $pdo->prepare($sql);
$result = $stmt->execute();
//var_dump($result);
/*
if($result) {
	echo "データが登録できました";
	echo "<a href=select.php>一覧へ</a>";
} else {
	echo "データの登録に失敗しました";
}
*/
 $pdo = null; 

}



$pdo = new PDO("mysql:host=mysql518.db.sakura.ne.jp;dbname=tsuchiya0909_test;charset=utf8", "tsuchiya0909", "test0909");

$sql = "SELECT * FROM news where news_id=".$news_id."";

//echo $sql;

$stmt = $pdo->prepare($sql);
$stmt->execute();
//echo "hello3";
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($results);
//echo "oop";
$view = $results[0]["news_detail"];



 $pdo = null; 

 echo $view;


}else{
echo "記事が選択されておりません。";
//header("location: ./");
}
//echo "<br />hello";

?>
<?php include("footer.php"); ?>