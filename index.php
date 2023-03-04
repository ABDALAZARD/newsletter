<?php if(isset($_SESSION['iduser'])){header("location:view/dashboard.php");} ?>
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
        border-radius: 15px;
        border: 1px solid grey;
        max-width: 40ch;
    }
    .title {
        text-align: center;
    }
    .message {
        margin-top: 150px;
    }
    .warning {
        color: red;
        text-align: center;
    }
    .login-title {
        color:black;
    }
    .input { 
        text-align:center;
    }

    .btn { 
        color: white;
        background-color: rgba(0, 0, 0);
        margin-top: 20px;
        border-radius: 10px;
    }

    .btn:hover {
        background-color: rgba(230, 230, 230, 0.5);
        color: black;
    }
    .footer {
        text-align: center;
        margin-top: 100px;
    }
    </style>
</head>

<body class="container">
    <div class="title">
        <h1>
            MyNewsletter
        </h1>

    </div>
    <?php if(isset($_GET['msg'])) {?>
        <div class="message">
            <h6 class="warning"><?php echo $_GET['msg'] ?></h6>
        </div>
    <?php } ?>

    <div class="login-card">
        <h1 class="login-title">Login</h1>
        <div>
            <form action="Routes/Login.php" METHOD="POST">
                <input type="text" name="email" placeholder="Digite seu e-mail"  class="input" maxlength="50" required>
                <input type="password" name="password" placeholder="Digite sua senha"  class="input" maxlength="20" required>
                <input type="submit" value="Iniciar Sessão" class="btn">
            </form>
        </div>
    </div>
    <footer class="footer">
        <h6>Criado por @baratadomal 2023</h4>
    </footer>
</body>

</html>