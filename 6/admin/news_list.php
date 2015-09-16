<?php
$pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
$sql = "SELECT * FROM news";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($results as $row) {

$view = "";
	$view .= "<table>";

	$view .= "<tr>";
	$view .= "<td><a href=update.php?id=" . $row["news_id"] . ">" . $row["news_id"] . "</a></td>";
	$view .=  "<td><a href=update.php?id=" . $row["news_title"] . ">" . $row["news_title"] . "</a></td>";
	$view .=  "<td><a href=update.php?id=" . $row["news_detail"] . ">" . $row["news_detail"] . "</a></td>";
    $view .= "</tr>";
    $view .= "</table>";
}

$pdo = null;
?>
<html>
<head>
</head>
<body>
<form action="search_execute.php" method="get">
	ID: <input type="text" name="id" value="" />
	<input type="submit" />
</form>
<?php echo $view ?>
<a href="index.php">index.php</a> 
</body>
</html>

<!--
foreach($results as $row) {
//

}-->
