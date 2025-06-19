<?php

echo "<h1>Hello world !</h1>";

require_once('mysql_connect.php');

$sql = 'SELECT * FROM members';

$query = $pdo->query($sql);

echo '<pre>';
var_dump($query->fetchAll());
echo '</pre>';

phpinfo();
