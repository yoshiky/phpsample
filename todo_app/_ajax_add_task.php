<?php

require_once('config.php');
require_once('functions.php');

$dbh = connectDb();

$sql = "SELECT max(seq)+1 FROM tasks WHERE type != 'deleted'";
$seq = $dbh->query($sql)->fetchColumn();

$sql = "INSERT INTO tasks(seq, title, created, modified)
        VALUES(:seq, :title, now(), now())";

$stmt = $dbh->prepare($sql);
$stmt->execute(array(
  ":seq" => $seq,
  ":title" => $_POST['title']
));

echo $dbh->lastInsertId();
