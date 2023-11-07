<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula de Formulario</title>
    <style>
        .container{
            width: 1000px;
            padding: 20px;
            border: 1px solid black;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 10px auto;
        }
        form {
            display: flex;
            align-items: center;
            flex-direction: row;
        }
        form input {
            padding: 10px;
            margin-top: 10px;
            margin-right: 10px;
        }
        .p {
            margin-right: 20;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Aposta Flix</h1>
        <form action="exercicio8.php" method="post">
            <input type="text" name="timeA" id="timeA" placeholder="TimeA">
            <input type="number" name="golsTimeA" id="golsTimeA" max="2000" step="0.01" placeholder="Gols">
            
            <h1>X</h1>
            
            <input type="text" name="timeB" id="timeB" placeholder="TimeB">
            <input type="number" name="golsTimeB" id="golsTimeB" max="2000" step="0.01" placeholder="Gols">
            
            <input type="submit" value="Ver Resultados">
            <input type="reset" value="Limpar">
        </form>
    </div>
</body>
</html>