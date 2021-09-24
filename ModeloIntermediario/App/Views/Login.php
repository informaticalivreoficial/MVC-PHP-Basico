<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>

    <!------ Include do css ---------->
    <?php include ('include/head-css.php');?>
    <link rel="stylesheet" type="text/css" href="view/assets/css/style.css"/>
</head>
<body>
    <div class="wrapper fadeInDown mt-5">
        <div id="formContent">            

            <!-- Icon -->
            <div class="fadeIn first p-3">
                <img src="https://informaticalivre.com/media/360x260.png" id="icon" alt="Login" />
            </div>

            <!-- Login Form -->
            <form>
                <input type="text" id="login" class="fadeIn second" name="login" placeholder="login" value="<?= $dados['email'];?>">
                <input type="password" id="password" class="fadeIn third" name="login" value="">
                <input type="submit" class="fadeIn fourth" value="Login">
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href="#">Esqueceu a senha?</a>
            </div>

        </div>
    </div>
    <!------ Include do javascript ---------->
    <?php include ('include/head-css.php');?>
</body>
</html>