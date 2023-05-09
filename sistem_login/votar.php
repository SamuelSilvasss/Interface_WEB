<!DOCTYPE html>
<html>
<head>

    <title> Votar</title>
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
            width: 100%;
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
        
        .resultados {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <h1> Votação </h1>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="radio" name="opcao" value="opcao1">Opção 1<br>
        <input type="radio" name="opcao" value="opcao2">Opção 2<br>
        <input type="radio" name="opcao" value="opcao3">Opção 3<br>
        <br>
        <input type="submit" value="Votar">
    </form>


    <h1>Resultados</h1>
    <div class="resultados">
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $opcao = $_POST['opcao'];
        $arquivo = 'votos.txt';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $opcao = $_POST['opcao'];
    $votos = [];

    if (file_exists($arquivo)) {
        $votos = unserialize(file_get_contents($arquivo));
    }

    if (array_key_exists($opcao, $votos)) {
        $votos[$opcao]++;
    } else {
        $votos[$opcao] = 1;
    }

    file_put_contents($arquivo, serialize($votos));
}

if (file_exists($arquivo)) {
    $votos = unserialize(file_get_contents($arquivo));
    if (empty($votos)) {
        echo "Nenhum voto foi registrado.";
    } else {
        foreach ($votos as $opcao => $quantidade) {
            $numero_opcao = substr($opcao, 5); // extrai o número da opção
            echo "Opção {$numero_opcao}: {$quantidade} votos<br>";
        }
    }
}
    }