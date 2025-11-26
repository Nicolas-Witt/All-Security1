<?php

$nome = $_GET['nome'];
$mensagem = $_GET['mensagem'];

$con = new PDO("mysql:host=localhost;dbname=monitoramento;charset=utf8", 
"root", ""); 

$sql = "INSERT INTO depoimentos (nome, mensagem) 
        VALUES (:nome, :mensagem)";
$qry = $con->prepare($sql);
$qry->bindParam(":nome", $nome, PDO::PARAM_STR);
$qry->bindParam(":mensagem", $mensagem, PDO::PARAM_STR);
$qry->execute();

echo "Depoimento inserido com sucesso!";
