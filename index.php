

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- +<link rel="stylesheet" href="src/styles/reset.css"> -->
    <link rel="stylesheet" href="src/styles/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="src/js/ajax/login.js"></script>
    <title>Login</title>
</head>
<body >

    <main >
      
            <div class="login">
                    <h1>Login</h1>
                    <input type="text" id="login"  name="login"   placeholder="Login" class="input-padrao" required>
                    <input type="password" id="password"  name="password" placeholder="Senha" class="input-padrao" required>
                    <input type="submit" value="Entrar" id="botao-login" name="botao-login" onclick="mylogin()" class="botao-login">
                    <div class="erro" id="success" style="display:none;">
                    </div>
            </div>
    
        
    </main>
</body>
</html>