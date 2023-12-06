<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://meyerweb.com/eric/tools/css/reset/reset.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/log_cad.css">
    <title>Casa da Colônia - Login</title>
</head>
<body>
<?php
    session_start();
    ob_start();

    if (isset($_SESSION['email']))
            header('location: index.php');

    require_once("header.php"); 
?>
    <div class="form-cont">
        <form action="" method="POST">
                <div class="back">
                    <h1 class="login">BEM VINDO DE VOLTA!</h1>
                    <img src="img/logo.png">

                    <div class="input-box">
                        <i class="fa-solid fa-user"></i>
                        <input type="email" name="email" placeholder="E-mail">
                    </div>
                    <div class="input-box">
                        <i name="teste" class="fa-solid fa-lock"></i>
                        <input type="password" placeholder="Senha" name="senha">
                    </div>

                    <p>
                        Esqueceu sua senha?<br>
                        Clique <a href="#">aqui!</a><br>
                        <a class="sla" href="cadastrar.php">Cadastre-se aqui!</a>
                    </p>
                    <input type="submit" name="enviar" class="btn btn-dark login-button"  value="Login">
                        <?php
                            if (isset($_SESSION["msg_erro1"]))
                                echo ( $_SESSION["msg_erro1"]);
                        ?>
           
                        <?php
                            if (isset($_POST['enviar'])){

                                require_once("config.php");

                                $email = mysqli_real_escape_string($conexao, $_POST['email'] );
                                $senha = mysqli_real_escape_string($conexao, $_POST['senha'] );
                                $senhac = sha1($senha);

                                if (!empty($email) && !empty($senha) ) {

                                    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senhac' ";
                                    $resultado = mysqli_query($conexao, $sql);

                                    if (mysqli_num_rows($resultado) > 0){
                                        session_start();
                                        ob_start();
                                        $_SESSION["email"] = $email;
                                        header("location: index.php");
                                    } else {
                                        echo("*Usuário ou senha incorretos <br>"); 
                                    }
                                } else {
                                    echo("*Por favor, preencha todos os campos corretamente <br>");
                                }
                            }     
                        ?>
                </div>
        </form>
    </div>
</body>
</html>