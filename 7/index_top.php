<?php 
session_start();
include("header.php"); ?> 
<?php
$pdo = new PDO("mysql:host=localhost;dbname=tsuchiya0909_test;charset=utf8", "tsuchiya0909", "test0909");
$sql = "SELECT *FROM news";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);   
            foreach($results as $row) {
                
 	$view .= "<table width=960px>";

	$view .= "<tr>";
    $view .= "<td>" . $row["create_date"] . "</td>";
	$view .= "<td>" . mb_substr($row['news_title'],0,10) . "</td>";
	$view .= "<td>" . mb_substr($row['news_detail'],0,40) . "</td>";
    $view .= "</tr>";
    $view .= "</table>";
                };

 $pdo = null;
            ?>
<?php echo $view ?>
<?php include("footer.php"); ?> 