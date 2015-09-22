<?php include("header.php"); ?> 
<?php
$pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
$sql = "SELECT *FROM news where Category = 経済;
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);   
            
            foreach($results as $row) {

	$view .= "<tr>";
    $view .= "<td>" . $row["create_date"] . "</td>";
	$view .= "<td>" . $row["news_title"] . "</td>";
	$view .= "<td>" . $row["news_detail"] . "</td>";
    $view .= "</tr>";

                };

 $pdo = null;
            ?>
<?php echo $view ?>
<?php include("footer.php"); ?> 