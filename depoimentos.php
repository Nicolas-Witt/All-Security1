<?php
$con = new PDO("mysql:host=localhost;dbname=monitoramento;charset=utf8", "root", "");

$sql = "SELECT * FROM depoimentos ORDER BY id DESC";
$qry = $con->query($sql);

while ($d = $qry->fetch(PDO::FETCH_ASSOC)) {
    echo '
        <div class="col-md-4 mb-3">
            <blockquote>"'.$d["mensagem"].'" 
            <footer>- '.$d["nome"].'</footer></blockquote>

            <p>Curtidas: '.$d["curtidas"].'</p>

            <a href="curtir_depoimento.php?id='.$d["id"].'" 
               class="btn btn-sm btn-success">
               Curtir
            </a>
        </div>
    ';
}
?>
