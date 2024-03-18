<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: #999999;
        }
        div{
            background-color: #002966;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 60px;
            border-radius: 15px;
            color: #fff;         
        }
        input{
            padding: 10px;
            width: 300px;
            border: none;
            outline: none;
            font-size: 15px;            
        }
        .inputSubmit{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
        }
        inputSubmit:hover{
            background-color: $ff6600;
            cursor: pointer;
        }
        .buttom {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
            border-radius: 4px;
            padding-left: 20px;
            padding-right: 20px;
            padding-top: 5px;
            padding-bottom: 5px;
            color: #ffffff;
            background-color: dodgerblue;
            outline: none;
            border: none;
            cursor: pointer;
            display: inline-block;
            text-decoration: none;
            transition: .4s;
        }
        .buttom:hover {
            color: #ffffff;
            background-color: #ff6600;
        }
    </style>    
</head>
<body>
    <div>

        <h1>Login</h1>

        <form action="testlogin.php" method="POST">
            <input type="text" name="email" placeholder="EMAIL">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
            <br><br>
            <a href="index.php" class="buttom">Voltar</a>
        </form>

    </div>
    
</body>
</html>