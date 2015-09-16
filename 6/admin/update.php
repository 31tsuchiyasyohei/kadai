<?php
$id = $_GET["news_id"];
$title;
$detail;
$author;
$pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
$sql = "SELECT * FROM news WHERE news_id = " . $id;
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach($results as $row) {
	$title = $row["news_title"];
	$detail = $row["news_detail"];
	$author = $row["author"];
};
$pdo = null;
?>
<html>
<head>
</head>
<body>
<form action="update_execute.php" method="post">
	タイトル: <input type="text" name="title" value="<?php echo $title ?>" />
	詳細: <input type="text" name="detail" value="<?php echo $detail ?>" />
	作者: <input type="text" name="author" value="<?php echo $author ?>" />
	<input type="hidden" name="news_id" value="<?php echo $id ?>" />
	<input type="submit" value="更新" />
</form>
<form action="delete_execute.php" method="post">
	<input type="hidden" name="news_id" value="<?php echo $id ?>" />
	<input type="submit" value="削除" />
</form>
</body>
</html>