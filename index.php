<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <title>Login</title>
    <style>
    .login-card {
        align-items: center;
        text-align: center;
        padding: 20px;
        margin: auto;
        margin-top: 200px;
        border-radius: 15px;
        border: 1px solid grey;
        max-width: 40ch;
    }
    .title {
        color:black;
    }
    .input { 
        text-align:center;
    }

    .btn { 
        background-color: rgba(230, 230, 230, 0.5);
        color: black;
        margin-top: 20px;
        border-radius: 10px;
    }

    .btn:hover {
        background-color: rgba(0, 0, 0);
        color: white;
    }
    .footer {
        text-align: center;
        margin-top: 100px;
    }
    </style>
</head>

<body class="container">
    <div class="login-card">
        <h1 class="title">Login</h1>
        <div>
            <form action="config/auth.php" METHOD="POST">
                <input type="text" name="email" placeholder="Digite seu e-mail"  class="input" maxlength="50" required>
                <input type="password" name="password" placeholder="Digite sua senha"  class="input" maxlength="20" required>
                <input type="submit" value="Iniciar Sessão" class="btn">
            </form>
        </div>
    </div>
    <footer class="footer">
        <h6>Criado por @baratadomal @ 2023</h4>
    </footer>
</body>

</html>