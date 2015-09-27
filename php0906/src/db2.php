<?php
$pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
$sql = "SELECT * FROM enq";
//$sql = "SELECT name FROM enq";
// $sql = "SELECT name, email FROM enq";
// $sql = "SELECT * FROM enq where id = 1";
// $sql = "SELECT * FROM enq LIMIT 3";
// $sql = "SELECT * FROM enq ORDER BY id DESC";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump($results);
foreach($results as $row) {
	var_dump($row);
	echo $row["id"];
	echo $row["name"];
	echo $row["email"];
	echo $row["age"];
	echo $row["create_date"];
	echo $row["update_date"];
}
$pdo = null;
?>
