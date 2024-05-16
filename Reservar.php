<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Reserva de Hotel</title>
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
            color: #333;
        }

        select,
        input[type="date"],
        input[type="text"],
        input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button[type="submit"]{
              width: calc(100% - 20px);
              padding: 10px;
              border: none;
              border-radius: 5px;
              cursor: pointer;
              background-color: #A67B5B;
              color: #fff;
              font-size: 16px;
              transition: background-color 0.3s;
              text-align: center;
              display: block;
              margin-top: 20px;
              text-decoration: none;
          }
        .botao {
            width: 90%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background-color: #A67B5B;
            color: #fff;
            font-size: 16px;
            transition: background-color 0.3s;
            text-align: center;
            display: block;
            margin-top: 20px;
            text-decoration: none;
        }

        button[type="submit"]:hover,
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
    <h1>Reserve Agora!</h1>
    <form action="HoteisEncontrados.php" method="post" onsubmit="return validarFormulario()">
        <label for="estado">Estado</label><br>
        <select id="estado" name="estado">
            <option value="">Selecione um estado</option>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
        </select><br>

        <label for="inicio">Data de Início</label><br>
        <input type="date" id="inicio" name="inicio"><br>

        <label for="fim">Data do Fim</label><br>
        <input type="date" id="fim" name="fim"><br>

        <label for="limite">Limite a Gastar</label><br>
        <input type="text" id="limite" name="limite" oninput="formatarDinheiro(this)"><br><br>

        <button type="submit">Reservar</button>
        <a href="Logout.php" class="botao">Sair</a>

        <span id="erro_campos" class="error-message" style="display: none;">Por favor, preencha todos os campos.</span><br>
        <span id="erro_senha" class="error-message" style="display: none;">As senhas não coincidem.</span><br>
    </form>

    <script>
        function validarFormulario() {
            var estado = document.getElementById("estado").value;
            var inicio = document.getElementById("inicio").value;
            var fim = document.getElementById("fim").value;
            var limite = document.getElementById("limite").value;

            if (estado === "" || inicio === "" || fim === "" || limite === "") {
                document.getElementById("erro_campos").style.display = "block";
                return false;
            } else {
                document.getElementById("erro_campos").style.display = "none";
                return true;
            }
        }

        function formatarDinheiro(input) {
            var valor = input.value.replace(/\D/g, '');
            valor = (parseInt(valor) / 100).toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
            input.value = valor;
        }

        document.getElementById("inicio").addEventListener("change", function() {
            var hoje = new Date();
            var inicio = new Date(this.value);

            if (inicio < hoje) {
                alert("A data de início não pode ser anterior à data de hoje.");
                this.value = '';
            }
        });

        document.getElementById("fim").addEventListener("change", function() {
            var hoje = new Date();
            var inicio = new Date(document.getElementById("inicio").value);
            var fim = new Date(this.value);

            if (fim < hoje || fim < inicio) {
                alert("A data do fim não pode ser menor que a data de início e a de hoje");
                this.value = '';
            }
        });
    </script>
</body>
</html>
