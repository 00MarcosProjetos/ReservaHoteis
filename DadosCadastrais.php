<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <style>
        body {
            font-family: Verdana, Geneva, sans-serif;
            background-color: #FEFAF6;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        form {
            width: 400px;
            margin: 0 auto;
            background-color: #E3DAC9;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: black;
        }

        input {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            width: calc(100% - 20px);
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background-color: #A67B5B;
            color: #fff;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button[type="submit"]:hover {
            background-color: #6F4E37;
        }
        .botao {
            display: block;
            margin-top: 20px;
            padding: 10px;
            width: 360px; /* largura fixa */
            height: 20px; /* altura fixa */
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
        .error-message {
            color: red;
            margin-top: 10px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <h1>Registro</h1>
    <form action="CadastroRealizado.php" method="post" onsubmit="return validarFormulario()">
        <label for="nome">Nome</label><br>
        <input type="text" id="nome" name="nome"><br>
        <label for="idade">Data de Nascimento</label><br>
        <input type="date" id="idade" name="idade"><br>
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="senha">Senha</label><br>
        <input type="password" id="senha" name="senha"><br>
        <label for="confirmacao_senha">Confirmação da Senha</label><br>
        <input type="password" id="confirmacao_senha" name="confirmacao_senha"><br>
        <span id="erro_campos" class="error-message" style="display: none;">Por favor, preencha todos os campos.</span><br>
        <span id="erro_senha" class="error-message" style="display: none;">As senhas não coincidem.</span><br>
        <button type="submit">Cadastrar</button>
        <a href="Logout.php" class="botao">Sair</a>
    </form>
    <script>
        function validarFormulario() {
            var nome = document.getElementById("nome").value;
            var idade = document.getElementById("idade").value;
            var email = document.getElementById("email").value;
            var senha = document.getElementById("senha").value;
            var confirmacaoSenha = document.getElementById("confirmacao_senha").value;

            if (nome === "" || idade === "" || email === "" || senha === "" || confirmacaoSenha === "") {
                document.getElementById("erro_campos").style.display = "block";
                return false;
            } else {
                document.getElementById("erro_campos").style.display = "none";

                if (senha !== confirmacaoSenha) {
                    document.getElementById("erro_senha").style.display = "block";
                    return false;
                } else {
                    document.getElementById("erro_senha").style.display = "none";
                    return true;
                }
            }
        }
    </script>
</body>
</html>
