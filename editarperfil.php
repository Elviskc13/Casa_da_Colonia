<?php 
 require_once("header.php");
 require_once("config.php");

 $sql = "SELECT * FROM dados_loja";

 $results = $conexao->query($sql);

 if ($results->num_rows > 1) {
    $row = $results->fetch_assoc();

    echo '<div id="Container_Info">';
        echo '<div class="Mostrar_Info_Perfil">';
            echo '<div id="Imagens">';
            echo '<img src="img/perfil.png" alt="" id="Img_Perfil">';
            echo '<img src="img/back.png" alt="" id="Img_Background"><br><br>';
        echo '</div>';
        echo '<div id="Txt_Info">';
            echo '<label for="Nome">Nome: ' . $row["Nome_Loja_1"] . '</label><br><br>';
            echo '<label for="Contato">Contato: ' . $row["Contato_Loja_1"] . '</label><br><br>';
            echo '<label for="Local">Local: ' . $row["Local_Loja_1"] . '</label><br><br>';
            echo '<label for="Horario">Horario: ' . $row["Horario_Loja_1"] . '</label><br><br>';
        echo '</div>';
    echo '</div>';

    echo '<div id="Container_Input">';
        echo '<h2>Informações Pessoais</h2>';

        echo '<form action="atualizar_info_pessoal.php" method="post">';
            echo '<div class="decoration_input">';
                echo '<label class="Txt_Input" for="nome">Nome:</label>';
                echo '<input type="text" id="Nome" name="Nome" value="' . $row["Nome_Proprietario"] . '" placeholder="Seu nome" required><br><br>';
            echo '</div>';
            
            echo '<div class="decoration_input">';
                echo '<label class="Txt_Input" for="email">E-mail:</label>';
                echo '<input type="email" id="Email" name="email" value="' . $row["Email_Proprietario"] . '" placeholder="Seu Email" required><br><br>';
            echo '</div>';

            echo '<div class="decoration_input">';
                echo '<label class="Txt_Input" for="cpf">CPF:</label>';
                echo '<input type="text" id="Cpf" name="cpf" value="' . $row["CPF_Proprietario"] . '" placeholder="001.002.003-04" required><br><br>';
            echo '</div>';

            echo '<div class="decoration_input">';
                echo '<label class="Txt_Input" for="phone">Telefone:</label>';
                echo '<input type="text" id="Contato" name="Contato" value="' . $row["Telefone_Proprietario"] . '" placeholder="(51) 987654321" required><br><br>';
            echo '</div>';
        echo '<form>';

        echo '<h2>Informações da Loja</h2>';

        echo '<form action="atualizar_info_pessoal.php" method="post">';

        echo '<div class="decoration_input">';
            echo '<label class="Txt_Input" for="Nome_Loja">Nome da Loja:</label>';
            echo ' <input type="text" id="Nome_Loja" name="Nome_Loja" value="' . $row["Nome_Loja_1"] . '" placeholder="Nome da Loja"><br><br>';
        echo '</div';

        echo '<div class="decoration_input">';
            echo '<label class="Txt_Input" for="Desc_Loja">Descricao da loja:</label>';
            echo '<input type="text" id="Desc_Loja" name="Desc_Loja" value="' . $row["Desc_Loja_1"] . '" placeholder="Breve descricao da loja" ><br><br>';
        echo '</div>';
        
        echo '<div class="decoration_input">';
            echo '<label class="Txt_Input" for="Local">Localidade:</label>';
            echo '<input type="text" id="Local" name="Local" value="' . $row["Local_Loja_1"] . '"placeholder="Localizacao da Loja"><br><br>';
        echo '</div>';

        echo '<div class="decoration_input">';
            echo '<label class="Txt_Input" for="Contato_Loja">Telefone da Loja:</label>';
            echo '<input type="text" id="Contato_Loja" name="Contato_Loja" value="' . $row["Contato_Loja_1"] . '" placeholder="Telefone de contato da loja"><br><br>';
        echo '</div>';

        echo '<div class="decoration_input">';
            echo '<label class="Txt_Input" for="Email_Loja">E-mail da Loja:</label>';
            echo '<input type="email" id="Email_Loja" name="Email_Loja" value="' . $row["Email_Loja_1"] . '"placeholder="Email da Loja"><br><br>';
        echo '</div>';

        echo '<div class="decoration_input">';
            echo '<label class="Txt_Input" for="Horario_Loja">Horário de Funcionamento:</label>';
            echo '<input type="text" id="Horario_Loja" name="Horario_Loja" value="' . $row["Horario_Loja_1"] . '"placeholder="Horario de Funcionamento da loja"><br><br>';
        echo '</div>';

        echo '</form>';

        echo '<h2>Substituir Imagem</h2>';

        echo '<form action="atualizar_info_pessoal.php" method="post">';
            echo '<label for="Img_Perfil_Loja">Escolha uma nova foto para seu perfil</label><br>';
            echo '<input type="file" id="Update_Img_Perfil"';

            echo '<label for="Img_Background_Loja">Escolha uma nova foto para seu plano de fundo</label><br>';
            echo '<input type="file" id="Update_Img_Background" name="Update_Img_Background"><br><br>';

        echo '<form>';

        echo '<h2>Altere sua senha <a id="Txt_Alterar_Senha" href="#">aqui!</a></h2>';
        
        echo '<input type="submit" value="Salvar Alterações" class="botao"><br>';
        echo '<input type="reset" value="Cancelar" class="botao">';

    echo '</div>';
echo '</div>';
    }
?>