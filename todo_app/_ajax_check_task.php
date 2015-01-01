<?php

require_once('config.php');
require_once('functions.php');

$dbh = connectDb();

$sql = "UPDATE tasks SET type = if(type='done', 'notyet', 'done'), modified=now() WHERE id = :id";
$stmt = $dbh->prepare($sql);
$stmt->execute(array(":id"=> (int)$_POST['id']));
