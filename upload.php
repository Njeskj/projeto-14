<?php
    $titulo = "Upload de Imagens";
    include "./inc/config.php";
if( isset($_FILES["imagem"]) && !empty($_FILES["imagem"]))
{
    move_uploaded_file($_FILES["imagem"]["tmp_name"], "./img/atletas/".$_FILES["imagem"]["name"] );
    echo "Upload realizado com sucesso";
}
?>

<div class="row">
    <div class="col-md-4">
        <form action="./upload.php" method="post" enctype="multipart/form-data">
            <label>Selecione a imagem</label>
            <input type="file" name="imagem" accept="image/*" class="form-control" />
            <button type="submit" class="btn btn-success">
                Enviar imagem
            </button>
        </form>
    </div>
</div>