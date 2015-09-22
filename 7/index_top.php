<?php include("header.php"); ?> 
<?php
$pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
$sql = "SELECT *FROM news";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);   
            foreach($results as $row) {
                
 	$view .= "<table width=960px>";

	$view .= "<tr>";
    $view .= "<td>" . $row["create_date"] . "</td>";
	$view .= "<td>" . $row["news_title"] . "</td>";
	$view .= "<td>" . $row["news_detail"] . "</td>";
    $view .= "</tr>";
    $view .= "</table>";
                };

 $pdo = null;
            ?>
<?php echo $view ?>
<?php include("footer.php"); ?> 