<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Combustível</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

<div class="container">
    <h2>Calculadora de Combustível</h2>
    <form method="POST" action="calculo.php">
        <label for="litros">Quantidade de litros:</label>
        <input type="number" name="litros" id="litros" placeholder="Digite a quantidade de litros" required>

        <label for="combustivel">Tipo de Combustível:</label>
        <select name="combustivel" id="combustivel" required>
            <option value="" disabled selected>Escolha o combustível</option>
            <option value="A">Álcool</option>
            <option value="G">Gasolina</option>
        </select>

        <button type="submit">Calcular</button>

     