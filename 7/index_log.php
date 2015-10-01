<?php 
session_start();
include("header.php"); ?> 
<?php
$pdo = new PDO("mysql:host=mysql518.db.sakura.ne.jp;dbname=tsuchiya0909_test;charset=utf8", "tsuchiya0909", "test0909");
$register_id = $_SESSION["register_id"];
$sql = "SELECT *FROM log where register_id = '".$register_id."'";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);  
               $view .= "";
            foreach($results as $row) {
                
 	$view .= "<table width=960px>";

	$view .= "<tr>";
    $view .= "<td>" . $row["create_date"] . "</td>";
	$view .= "<td><a href=detail.php?id=".$row["news_id"].">" . mb_substr($row['news_title'],0,10) . "</td>";

    $view .= "</tr>";
    $view .= "</table>";
                };

 $pdo = null;
            ?>
<?php echo $view ?>
<?php include("footer.php"); ?> 