<?php
    if( isset($_FILES["imagem"]) && !empty($_FILES["imagem"]))
    {
        move_uploaded_file($_FILES["ïmagem"]["tmp_name"], "./img/". $_FILES["imagem"]["name"] );
        echo "Update realizado com sucesso";
    }
?>
<div>
    <form action=".upload.php" method="post" enctype="multipart/form-data">
        <label>Selecione a imagem</label>
        <input type="file" name="imagem" accept="image/*" class="form-control">
        <button type="submit" class="btn btn-success">
                Enviar imagem
        </button>
    </form>
</div>