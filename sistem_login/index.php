<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #F7F7F7;
        }
        
        h1 {
            text-align: center;
            color: #333;
        }
        
        form {
            width: 400px;
            margin: 0 auto;
            background-color: #FFF;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
        }
        
        label {
            display: block;
            margin-bottom: 10px;
            color: #666;
        }
        
        input[type="text"], input[type="password"] {
            width: 95%;
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            box-shadow: 0px 0px 5px rgba(0,0,0,0.2);
            font-size: 16px;
        }
        
        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #333;
            color: #FFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        
        input[type="submit"]:hover {
            background-color: #444;
        }
        
        input:focus {
            outline: none;
        }
    </style>
</head>
<body>
    <h1>Login</h1>
    <form action="login.php" method="post">
        <label for="username">Nome de usuário:</label>
        <input type="text" id="username" name="username" required>
        
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required>
        
        <input type="submit" value="Entrar">
    </form>
</body>
</html>
