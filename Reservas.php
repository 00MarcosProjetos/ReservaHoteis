<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Reservas</title>
    <style>
        body {
            font-family: Verdana, Geneva, sans-serif;
            background-color: #FEFAF6;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .container {
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
        .calendar th {
            background-color: #9B7653;
        }
        .highlight {
            background-color: #D1BEA8;
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
    </style>
</head>
<body>
    <h1>Exames Médicos</h1>
    <?php
        $hotel1 = "AmanHotel";
        $data1 = "08/05/2024 - 23/05/2024";

        echo "<div class='container'>";
        echo "<label for='hotel'><strong>Hotel</strong></label>";
        echo "<label for='nome'>$hotel1</label><br>";
        echo "<label for='data'><strong>Data</strong></label>";
        echo "<label for='data'>$data1</label>";
        echo "</div>";
    ?>
    <br><br>
    <table class="calendar">
        <thead>
            <tr>
                <th>D</th>
                <th>S</th>
                <th>T</th>
                <th>Q</th>
                <th>Q</th>
                <th>S</th>
                <th>S</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
            </tr>
            <tr>
                <td>5</td>
                <td>6</td>
                <td>7</td>
                <td class="highlight">8</td>
                <td class="highlight">9</td>
                <td class="highlight">10</td>
                <td class="highlight">11</td>
            </tr>
            <tr>
                <td class="highlight">12</td>
                <td class="highlight">13</td>
                <td class="highlight">14</td>
                <td class="highlight">15</td>
                <td class="highlight">16</td>
                <td class="highlight">17</td>
                <td class="highlight">18</td>
            </tr>
            <tr>
                <td class="highlight">19</td>
                <td class="highlight">20</td>
                <td class="highlight">21</td>
                <td class="highlight">22</td>
                <td class="highlight">23</td>
                <td>24</td>
                <td>25</td>
            </tr>
            <tr>
                <td>26</td>
                <td>27</td>
                <td>28</td>
                <td>29</td>
                <td>30</td>
                <td>31</td>
                <td></td>
            </tr>

        </tbody>
    </table>
    <div class="botao-container">
        <a href="Home.php" class="botao voltar">← Voltar</a>
        <a href="Logout.php" class="botao sair">Sair →</a>
    </div>
</body>
</html>
