<?php
$con = new PDO("mysql:host=localhost;dbname=monitoramento;charset=utf8", "root", "");

$sql = "SELECT * FROM servicos ORDER BY id DESC";
$qry = $con->query($sql);

while ($s = $qry->fetch(PDO::FETCH_ASSOC)) {
    echo '
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">'.$s["titulo"].'</h5>
                    <p class="card-text">'.$s["descricao"].'</p>

                    <p>Curtidas: '.$s["curtidas"].'</p>

                    <a href="curtir_servico.php?id='.$s["id"].'" 
                       class="btn btn-sm btn-success mb-2">
                       Curtir
                    </a>

                    <a href="#" class="btn btn-primary">Solicitar Orçamento</a>
                </div>
            </div>
        </div>
    ';
}
?>
