<?php session_start();
include('verifica_session/verifica_session.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/src/js/socket/webSoket.js"></script>
    <link rel="stylesheet" href="/src/styles/style.css">
    <title>websocket</title>
</head>
<body>
 <?php $nlogin = $_SESSION['login'];?>
 <h1>Bem-vindo <?php echo($nlogin)?></h1>
  
  <div class="char_ini">
    <output></output>
    <input class="nlogin" type="text" style="display:none;" value="<?php echo($nlogin)?>" >
    <input class="chat" type="text">
  </div>
</body>
</html>