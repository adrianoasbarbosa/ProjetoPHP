<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>Acesso ao sistema</title>

    <!-- Principal CSS do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="../../css/login.css">
</head>

<body class="text-center">
    <div class="container">
        <div class="col-sm-12 col-md-12">
            <form class="form-signin" method="post">
                <h1 class="h3 mb-3 font-weight-normal">Aula PHP - login</h1>
                <label for="inputEmail" class="sr-only">Endereço de email</label>
                <input type="email" id="inputEmail" class="form-control mb-3" placeholder="Seu email" required autofocus name="txtemail">
                <label for="inputPassword" class="sr-only">Senha</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required name="txtsenha">
                <input type="submit" class="btn btn-lg btn-primary btn-block" name="btnlogar" value="Login" />
                <p class="mt-3 text-muted">Não tem conta? <a href="cadastro.php">Criar</a></p>
            </form>
        </div>

</body>

</html>
</div>