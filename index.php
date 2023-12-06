<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casa da Colônia - Início</title>
    <link rel="stylesheet" href="https://meyerweb.com/eric/tools/css/reset/reset.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
    session_start();
    ob_start();
    
    if (!isset($_SESSION['email'])){
        require_once("header.php");
    }else{
        require_once("head_log.php");
    }
?>
<h1 class="testo">PRODUTOS</h1>
<div class="box">
    <div class="ft">
        <img src="img/queijo.png" alt="Queijo">
        <h2>Queijo</h2>
    </div>
    <div class="ft">
        <img src="img/suco-uva.png" alt="Suco">
        <h2>Suco</h2>
  </div>
  <div class="ft">
      <img src="img/chimia.png" alt="Chimia">
      <h2>Chimia</h2>
  </div>
  <div class="ft">
      <img src="img/peixe.png" alt="Peixe">
      <h2>Peixe</h2>
  </div>
</div>

<div class="img-ind" id="img-ind">
  <img src="img/teste1.png" alt="">
</div>

<div style="border-top: 2px solid black; width: 90%; margin: 0 auto; margin-top: 30px;"></div>
<div class="footer">
    
    <div></div>
    <div class="icon">
        <i class="fa-solid fa-circle-exclamation"></i>
    </div>
    <div class="cont">
        <p>FALE CONOSCO <br>
            Celular: 51 9 4002-8922 <br>
            Fone: 51 9 4002-8922</p>
    </div>
    <div class="icon">
        <i class="fa-solid fa-house"></i>
    </div>
    <div class="cont">
        <p>HORÁRIO DE ATENDIMENTO <br>
            segunda à sexta feira <br>
            das 8h às 11:30h</p>
    </div>
    <div class="icon">
        <i class="fa-solid fa-location-dot"></i>
    </div>
    <div class="cont">
        <p>LOCALIZAÇÃO <br>
            Rua ABC, 354. Rolante-RS</p>
    </div>
    <div class="icon">
        <i class="fa-brands fa-square-instagram"></i> <br>
        <i class="fa-brands fa-square-facebook"></i>
    </div>
    <div class="cont">
        <p>@CasaColoniaRolante <br>
            @CasaColoniaRolante
        </p>
    </div>
    
</div>
</body>
</html>