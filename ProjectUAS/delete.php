<?php
require_once('config.php');
$Phone = $_GET['Phone'];
$result = mysqli_query($mysqli, "delete from users where id = '$Phone'");
header('Location: index.php');
?>