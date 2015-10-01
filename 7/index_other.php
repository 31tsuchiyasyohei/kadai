<?php 
session_start();
ini_set('display_errors', 'On'); 
error_reporting(E_ALL);

?>
<?php include("header.php"); ?> 

<?php

echo "<br />hello";

$pdo = new PDO("mysql:host=mysql518.db.sakura.ne.jp;dbname=tsuchiya0909_test;charset=utf8", "tsuchiya0909", "test0909");
//echo $pdo;
$category='その他';
//var_dump($_POST["category"])
/*
if(isset($_POST["category"])){
$category=$_POST["category"];
}
*/
$sql = "SELECT * FROM news where category='".$category."'";
//echo "hello2";

$stmt = $pdo->prepare($sql);
$stmt->execute();
//echo "hello3";
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($results);
//echo "oop";
$view = "";
foreach($results as $row) {
    $view .= "<table>";
	$view .= "<tr>";
    $view .= "<td>" . $row["create_date"] . "</td>";
	$view .= "<td><a href=detail.php?id=".$row["news_id"].">" . mb_substr($row['news_title'],0,10) . "</td>";
//	$view .= "<td>" . $row["news_detail"] . "</td>";
    $view .= "</tr>"; 
    $view .= "</table>";
                };
 $pdo = null; 
?>
<?php echo $view ?>
<?php include("footer.php"); ?>