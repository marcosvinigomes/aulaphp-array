<?php
    include "header.php";
    include "dados.php";

    //recuperar o id enviado por GET 
    $id = $_GET["id"] ?? NULL;
    //verificar se o id esta em branco
    if ( empty ($id) ){
        echo "<script>alert('Série não econtrada');history.back();</script>";
        exit;
    }

    $nome = $series[$id]["nome"];
    $imagem = $series[$id]["imagem"];
    $sinopse = $series[$id]["sinopse"];
    
?>
    <main>
        <div class="grid-2">
            <div class="coluna">
                <img src="imagens/<?=$imagem?>">
            </div>
                <div class="coluna">
                    <h2><?$nome?></h2>
                    <p><strong>sinopse</strong></p>
                    <p><?=$sinopse?></p>
                </div>
        </div>
    </main>
<?php include "footer.php"; ?>
