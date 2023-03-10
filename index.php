<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
     <!-- Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>
<?php
if(isset($_POST['login'])){
    header('Location: controller/newSession.php?email='.$_POST['email'].'&senha='.$_POST['senha']);
}
//$cript = openssl_encrypt($senha, $algoritmo, $chave, OPENSSL_RAW_DATA, $iv);

?>
<body>
    <div class="container">
        <form method="post">
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Endereço Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Senha</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="senha">
        </div>
            <button type="submit" class="btn btn-primary" name="login">Login</button>
            <button type="submit" class="btn btn-primary" href="../controller/newSession.php" name="criaruser">Criar usuário</button>
        </form>


    </div>
</body>
</html>