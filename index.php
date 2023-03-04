<?php 
    session_start();
    if(isset($_SESSION['id'])){header("location:view/dashboard.php");} 
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
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