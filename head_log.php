<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://meyerweb.com/eric/tools/css/reset/reset.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Germania+One&display=swap');
        header nav{
            background-color: #EFEFEF;
            font-family: 'Germania One', cursive;
            align-items: center;
            display: flex;
            justify-content: space-between;
            height: 100px;
            width: 100%;
        }

        header .img{
            height: 100px;
            width: 170px;
            display: flex;
            align-items: center;
            margin-left: 100px;
        
        }
        header img{
            height: 70px;
            width: 70px;
            border: 2px solid black;
        }

        header a{
            padding-right: 25px;
            padding-left: 25px;
            font-size: 20px;
            color: #4B3621;
            text-decoration: none;
        }

        header .login-button1{
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-right: 100px;
            height: 100px;
            width: 170px;
        }

        body{
            background-color: #EFEFEF;
        }

        .mobile-menu-icon {
            display: none;
        }

        .mobile-menu {
            display: none;
        }

        .mobile-logo{
            display: none;
        }

        @media screen and (max-width: 730px) {
            nav .img{
                display: none;
            }

            .mobile-logo{
                display: flex;
            }

            .mobile-menu-icon{
                justify-content: space-between;
                width: 100%;
                height: 100%;
            }

            nav .login-button1{
                display: none;
            }


            .login-button button {
                border: none;
                padding: 10px 15px;
                border-radius: 5px;
                background-color: black;  
            }

            .login-button button a {
                text-decoration: none;
                color: #fff;
                font-weight: 500;
                font-size: 1.1rem;
            }

            .icon {
                border: none;
            }

            .nav-bar {
                padding: 1.5rem 4rem;
            }
            nav .nav-item {
                display: none;
            }
            nav .login-button {
                display: none;
            }

            .mobile-menu-icon {
                display: flex;
            }

            .mobile-menu-icon button {
                background-color: transparent;
                border: none;
                cursor: pointer;
            }

            .mobile-menu ul {
                display: flex;
                flex-direction: column;
                text-align: center;
                padding-bottom: 1rem;
            }
            .mobile-menu .nav-item {
                display: block;
                align-items: center;
                padding-top: 1.2rem;
            }
            .mobile-menu .login-button {
                display: block;
                padding: 1rem 2rem;
            }
            .mobile-menu .login-button button {
                width: 100%;
            }
            .open {
                display: block;
            }
        }
    </style>

    <title>Casa da Colônia</title>
</head>
<body>
    <header>
        <nav class="nav-bar">
            <div class="img">
                <img src="img/logo.png">
            </div>
            <div class="nav-list">
                <ul class="nav">
                    <li class="nav-item"><a href="#">Sobre</a></li>
                    <li class="nav-item"><a href="index.php">Início</a></li>
                    <li class="nav-item"><a href="catalogolojas.php">Lojas</a></li>
                </ul>
            </div>
            <div class="login-button1">
                <a href="#" style="color: black;">
                    <i class="fa-solid fa-heart" style="font-size: 23px;"></i>
                </a> 
                <a href="editarperfil.php" style="color: black;">
                    <i class="fa-solid fa-user" style="font-size: 23px; margin-left: -30px; margin-right:-30px;"></i>
                </a>
                <a href="desl.php">
                    <input type="submit" name="sair" class="btn btn-dark" value="Sair" style="width: 90px; margin-left: -35px;">
                </a>
            </div>
            <div class="mobile-menu-icon">

                <div class="mobile-logo">
                    <img src="img/logo.png">
                </div>

            <button onclick="menuShow()"><img src="img/menu_icon.png" class="icon"></button>
        </div>
        </nav>
        
        <div class="mobile-menu">
            <ul class="nav">
                <li><a href="#">Sobre</a></li>
                <li><a href="index.php">Início</a></li>
                <li><a href="catalogolojas.php">Lojas</a></li>
            </ul>

            <div class="login-button"> 
                <button onclick="window.location.href = 'desl.php'" class="btn btn-dark">Sair</button>
            </div>
        </div>
    </header>
    <script src="js/home.js"></script>
    <div style="border-top: 2px solid black; width: 90%; margin: 0 auto;"></div>
</body>
</html>