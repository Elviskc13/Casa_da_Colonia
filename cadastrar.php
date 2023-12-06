<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=4, initial-scale=1.0">
    <link rel="stylesheet" href="https://meyerweb.com/eric/tools/css/reset/reset.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/log_cad.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Casa da Colônia - Cadastro</title>
</head>
<body>
<?php 
    session_start();
    ob_start();
    if (isset($_SESSION['email']))
            header('location: inicio.php');
    require_once("header.php");
?>
    <div class="form-cont">
        <form method="POST">
            <div class="back2">
                <h1>CADASTRE-SE AQUI!</h1>

                <div class="input-box">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" placeholder="Nome completo" name="nome">
                </div>
                <div class="input-box">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" placeholder="E-mail" name="email">
                </div>
                <div class="input-box">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="senha" name="senha">
                </div>
                <div class="input-box">
                    <i class="fa-solid fa-phone"></i>
                    <input type="tel" name="fone" placeholder="(51) 9 9110 6123"> <br>
                </div>
                <div class="input-box">
                    <i class="fa-solid fa-calendar-days"></i>
                    <input type="date" name="data">
                </div>
                <div class="check">
                    <p style="margin-bottom: 4px;">Selecione seu sexo: <br></p>
                    
                    <input type="radio" id="O" name="sexo" value="O" checked>
                    <label for="O">Outro</label>
                    &nbsp;	&nbsp;	
                    
                    <input type="radio" id="M" name="sexo" value="M">
                    <label for="M">Masculino</label>
                    &nbsp;	&nbsp;	
                    
                    <input type="radio" id="F" name="sexo" value="F">
                    <label for="F">Feminino</label>

                </div>
                <input type="submit" name="cadastrar" class="btn btn-dark login-button" id="cad" value="Cadastre-se">
        </form>
               
        
        <?php
            require_once("config.php"); 

            if (isset($_POST['cadastrar'])){

                    $nome = $_POST['nome'];
                    $email = $_POST['email'];
                    $senha = $_POST['senha'];
                    $fone = $_POST['fone'];
                    $data = $_POST['data'];
                    $sexo = $_POST['sexo'];

                    $senhac = sha1($senha);

                    if (empty($nome)){
                        $_SESSION["msg_erro"] = "*Preencha o <b>nome</b> corretamente <br>";
                    } else if (empty($email)){
                        $_SESSION["msg_erro"] .= "*Prrencha o <b>email</b> corretamente <br>";
                    } else if (empty($senha)){
                        $_SESSION["msg_erro"] .= "*Preencha a <b>senha</b> corretamente <br>";
                    } else if (empty($sexo)){
                        $_SESSION["msg_erro"] .= "*Selecione o <b>sexo</b> <br>";
                    } else if (empty($fone)){
                        $_SESSION["msg_erro"] .= '*Preencha o <b>telefone</b> corretamente <br>';
                    } else if (empty($data)){
                        $_SESSION["msg_erro"] .= "*Preencha a <b>data</b>";
                
                    } else {
                        if($conexao){
                            
                            $sql =  "INSERT INTO usuarios(nome, email, senha, telefone, data, sexo) 
                            VALUES ('$nome', '$email', '$senhac', '$fone', '$data', '$sexo') ";

                                if (mysqli_query($conexao, $sql)){                                
                                    header("location: login.php");
                                    exit();
                                } else {
                                    echo ("Erro: $sql " . mysqli_error($conexao) );
                                }
                        }else{
                            $_SESSION["msg_erro"] .= '*Houve um erro conectar com o banco de dados ' . mysqli_connect_error();
                        }
                }
            }

           
            if (isset($_SESSION["msg_erro"]))
                echo ( $_SESSION["msg_erro"]);
        
        ?>

    </div>
</body>
</html>