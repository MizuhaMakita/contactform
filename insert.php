<?php
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");

$pdo->exec("insert into contactform(name,mail,age,comment)
values('".$_POST['name']."','".$_POST['mail']."','".$_POST['age']."','".$_POST['comments']."');");
?>

<!DOCTYPE HTML>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>お問合せフォームを作る</title>
  <link rel="stylesheet" type="text/css" href="styles2.css">
</head>

<body>
  <h1>お問合わせフォーム</h1>
<div class ="confirm">
  <p>お問合せ有難うございました。<br>3営業日以内に担当者よりご連絡差し上げます。
  </p>
</div>

</body>
</html>