<?php
$id = $_POST["news_id"];
$title = $_POST["title"];
$detail = $_POST["detail"];
$author = $_POST["author"];

$pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
$sql = "UPDATE news set news_title = '" . $title . "', news_detail = '" . $detail . "', author = " . $author . ", update_date = sysdate() " . "WHERE news_id = " . $id;
$stmt = $pdo->prepare($sql);
$result = $stmt->execute();

if($result) {
	echo "データが更新できました";
	echo "<a href=news_list.php>一覧へ</a>";
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