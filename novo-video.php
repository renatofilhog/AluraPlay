<?php

$dbPath = "./banco.sqlite";
$pdo = new PDO("sqlite:$dbPath");

$sql = "INSERT INTO videos(url, title) VALUES (?,?);";
$sql = $pdo->prepare($sql);
$sql->bindValue(1, $_POST['url']);
$sql->bindValue(2, $_POST['titulo']);

if($sql->execute()) {
    header('Location: index.php?success=1');
} else {
    header('Location: index.php?success=0');
}