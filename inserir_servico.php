<?php

$titulo = $_GET['titulo'];
$descricao = $_GET['descricao'];
$preco = $_GET['preco'];
$imagem = $_GET['imagem']; 

$con = new PDO("mysql:host=localhost;dbname=monitoramento;charset=utf8", 
"root", ""); 

$sql = "INSERT INTO servicos (titulo, descricao, preco, imagem) 
        VALUES (:titulo, :descricao, :preco, :imagem)";
$qry = $con->prepare($sql);
$qry->bindParam(":titulo", $titulo, PDO::PARAM_STR);
$qry->bindParam(":descricao", $descricao, PDO::PARAM_STR);
$qry->bindParam(":preco", $preco, PDO::PARAM_STR);
$qry->bindParam(":imagem", $imagem, PDO::PARAM_STR);
$qry->execute();

echo "Serviço inserido com sucesso!";
