
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://meyerweb.com/eric/tools/css/reset/reset.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/log_cad.css">
    <title>Casa da Colônia - Alterar Senha</title>
</head>
<body>
    <?php
        session_start();
        ob_start();
        
        if (!isset($_SESSION['email']))
            header('location: login.php');
        require_once("head_log.php");
    ?>
    <div class="form-cont">
        <form action="" method="POST" style="height: 600px;">
                <div class="back">
                    <h1 class="login">ALTERAR SENHA</h1>
                    <img src="img/logo.png">

                    <div class="input-box">
                        <i class="fa-solid fa-user"></i>
                        <input type="email" name="email" placeholder="E-mail">
                    </div>
                    <div class="input-box">
                        <i name="teste" class="fa-solid fa-lock"></i>
                        <input type="password" placeholder="Confirme sua Senha" name="confirmacao_senha">
                    </div>
                    <div class="input-box">
                        <i name="teste" class="fa-solid fa-lock"></i>
                        <input type="password" placeholder="Senha" name="senha">
                    </div>
                    <input type="submit" name="alter" class="btn btn-dark login-button" value="Alterar">

                        <?php
                            if(isset($_POST['alter'])){

                                require_once("config.php");

                                $email = mysqli_real_escape_string($con, $_POST['email'] );
                                $senha = mysqli_real_escape_string($con, $_POST['senha'] );
                                $senha2 = mysqli_real_escape_string($con, $_POST['confirmacao_senha'] );
                                $senhac = sha1($senha);

                                if ($email == $_SESSION['email']){

                                    if (empty($senha)){
                                        echo("*Preencha a <b>senha</b> corretamente <br>");
                                    }
                                    else if (empty($senha2)){
                                        echo("*Preencha a <b>senha</b> corretamente <br>");
                                    }
                                    else if ($senha == $senha2){
                                        
                                        $sql = "UPDATE usuarios SET senha = '$senhac' WHERE email = '$email'";
                                
                                        if (mysqli_query($con, $sql)){
                                            echo ("Senha alterada com sucesso");
                                        } else {
                                            echo ("Erro: $sql " . mysqli_error($con) );
                                        }
                                    }else{
                                        echo('*As senha não conferem <br>');
                                    }
                                }else{
                                    echo('*O e-mail informado não é o mesmo da conta');
                                }
                            }
                        ?>
                </div>
        </form>
    </div>
</body>
</html>