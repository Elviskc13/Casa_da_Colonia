<?php
    require_once("header.php");
    require_once("config.php");

    $sql = "SELECT Nome_Loja_1, Desc_Loja_1, Img_Perfil_Loja_1, Img_Back_Loja_1 from dados_loja";

    $results = $conexao->query($sql);

    if ($results->num_rows > 0) {

        echo '<p id="txt_lojas">LOJAS</p>';
        echo '<div class="flexcatalogo">';

        while ($row = $results->fetch_assoc()) {

                echo '<div class="flexperfil">';
                echo '<img src="data:image/jpeg;base64,' . base64_encode($row["Img_Perfil_Loja_1"]) . '"class="perfil_img_loja">';
                echo '<img src="data:image/jpeg;base64,' . base64_encode($row["Img_Back_Loja_1"]) . '"class="perfil_background_loja">';
                echo '<p class="nome_loja">' . $row["Nome_Loja_1"] . '</p>';
                echo '<p class="desc_loja">' . $row["Desc_Loja_1"] . '</p>';
                echo '</div>';       
        }
        echo '</div>';
    } else {
        echo "Nenhuma loja encontrada";
    }

?>