<?php
$id = $_GET['id'];

$con = new PDO("mysql:host=localhost;dbname=monitoramento;charset=utf8", "root", "");

$sql = "UPDATE depoimentos 
        SET curtidas = curtidas + 1 
        WHERE id = :id";

$q = $con->prepare($sql);
$q->bindParam(":id", $id, PDO::PARAM_INT);
$q->execute();

header("Location: index.php#depoimentos");
exit;
?>
