<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>documento sem título</title>
    </head>

    <body>
        
        <form method="post" action="opem.php"
        id="formlogin" name="formlogin">
            <fieldset id="file">
                <legend>LOGIN</legend><br />
                <label>NOME : </label>
                <!-- o campo "name" dentro do input é
                importante, pois será ele que armazenará
                os dados digitados. -->
                <input type="text" name="login" 
                id="login" /><br />
                <label>SENHA :</label>
                <input type="password" name="senha" 
                id="senha" /><br />
                <input type="submit" value="LOGAR" />
            </fieldset>    
        </form>

    </body>
</html>