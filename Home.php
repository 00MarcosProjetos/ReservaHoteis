<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Perfil</title>
    <style>
        body {
            font-family: Verdana, Geneva, sans-serif;
            background-color: #FEFAF6;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .perfil {
            display: flex;
            align-items: center;
        }

        img {
            border-radius: 50%;
        }

        .dados {
            margin-left: 20px;
        }

        .dados p {
            margin: 5px 0;
        }

        .botao {
            display: block;
            margin-top: 20px;
            padding: 10px 20px;
            width: 200px; /* largura fixa */
            height: 40px; /* altura fixa */
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
    <h1>LetsGo</h1>
    <div class="perfil">
        <img src="Profile.jpg" alt="Minha Imagem" width="100" height="100">
        <div class="dados">
            <?php
                echo "<p><strong>Nome:</strong> Cliente</p>";
                echo "<p><strong>Email:</strong> cliente@exemplo.com</p>";
            ?>
        </div>
    </div>
    <a href="Reservar.php" class="botao">Faça uma Reserva</a>
    <a href="Reservas.php" class="botao">Reservas Feitas</a>
    <a href="Logout.php" class="botao">Sair</a>
</body>
</html>
