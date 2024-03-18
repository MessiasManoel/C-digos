<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #999;
            color: yellow;
            text-align: center;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #002966;
            padding: 100px;
            border-radius: 10px;
        }
        a{
            text-decoration: none;
            color: white;
            border: 3px solid #ff6600;
            border-radius: 10px;
        }
        a:hover{
            background-color: #ff6600;
        }
    </style>
</head>
<body>
    <div class="box">
        <h1>LOGIN DE ACESSO</h1>
        <br>
        <a href="login.php">Login</a>
        <a href="formulario.php">Cadastre-se</a>
    </div>
</body>
</html>