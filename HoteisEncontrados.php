<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Hoteis</title>
    <style>
        body {
            font-family: Verdana, Geneva, sans-serif;
            background-color: #FEFAF6
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .container {
            position: relative;
            background-color: #E3DAC9;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .calendar {
            border-collapse: collapse;
            width: 300px;
            margin: 0 auto;
        }
        .calendar th, .calendar td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        .botao-container {
            display: flex;
            justify-content: space-between;
            padding: 0px;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        .botao {
            padding: 10px 20px;
            background-color: #A67B5B;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
            text-align: center;
        }
        .botao:hover {
            background-color: #6F4E37;
        }
        .botao-reservar {
            position: absolute;
            right: 10px;
            bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Hoteis Encontrados</h1>
    <?php
        $hotel1 = "AbanHotel";
        $datainicio1 = "15/05/2024";
        $datafim1 = "23/05/2024";
    ?>
    <div class="container">
        <label for='hotel'><strong>Hotel</strong></label>
        <label for='nome'><?php echo $hotel1; ?></label>
        <label for='preço'><strong>Valor</strong></label>
        <label for='preço'>R$100,00</label><br>
        <label for='data'><strong>Data Inicio</strong></label>
        <label for='data'><?php echo $datainicio1; ?></label>
        <label for='data'><strong>Data Fim</strong></label>
        <label for='data'><?php echo $datafim1; ?></label>
        <a href="ReservaRealizada.php" class="botao botao-reservar">Reservar</a>
    </div>

    <?php
        $hotel2 = "LotusHotel";
        $datainicio2 = "15/05/2024";
        $datafim2 = "23/05/2024";
    ?>
    <div class="container">
        <label for='hotel'><strong>Hotel</strong></label>
        <label for='nome'><?php echo $hotel2; ?></label>
        <label for='preço'><strong>Valor</strong></label>
        <label for='preço'>R$200,00</label><br>
        <label for='data'><strong>Data Inicio</strong></label>
        <label for='data'><?php echo $datainicio2; ?></label>
        <label for='data'><strong>Data Fim</strong></label>
        <label for='data'><?php echo $datafim2; ?></label>
        <a href="ReservaRealizada.php" class="botao botao-reservar">Reservar</a>
    </div>

    <div class="botao-container">
        <a href="Home.php" class="botao voltar">← Voltar</a>
        <a href="Logout.php" class="botao sair">Sair →</a>
    </div>
</body>
</html>
