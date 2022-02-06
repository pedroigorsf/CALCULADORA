<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Calculadora</title>
</head>

<body>

    <nav>
        <div class="nav-wrapper teal darken-3">
            <a href="#" class="brand-logo center">Calculadora</a>
        </div>
    </nav>

    <!-- INTERFACE GRÁFICA DA CALCULADORA -->
    <div class="row teal lighten-3" align="center">

        </br>
        <p>
            <button class="waves-effect waves-light btn teal darken-1" onclick="clean()">Limpar</button>
            <button class="waves-effect waves-light btn teal darken-1" onclick="back()">Voltar</button>
        </p>

        <p>
            <button class="waves-effect waves-light btn" onclick="insert('7')">7</button>
            <button class="waves-effect waves-light btn" onclick="insert('8')">8</button>
            <button class="waves-effect waves-light btn" onclick="insert('9')">9</button>
            <button class="waves-effect waves-light btn teal darken-1" onclick="insert('+')">+</button>
        </p>

        <p>
            <button class="waves-effect waves-light btn" onclick="insert('4')">4</button>
            <button class="waves-effect waves-light btn" onclick="insert('5')">5</button>
            <button class="waves-effect waves-light btn" onclick="insert('6')">6</button>
            <button class="waves-effect waves-light btn teal darken-1" onclick="insert('-')">-</button>
        </p>

        <p>
            <button class="waves-effect waves-light btn" onclick="insert('1')">1</button>
            <button class="waves-effect waves-light btn" onclick="insert('2')">2</button>
            <button class="waves-effect waves-light btn" onclick="insert('3')">3</button>
            <button class="waves-effect waves-dark btn teal darken-1" onclick="insert('*')">*</button>
        </p>

        <p>
            <button class="waves-effect waves-light btn" onclick="insert('0')">0</button>
            <button class="waves-effect waves-light btn" onclick="insert('.')">,</button>
            <button class="waves-effect waves-light btn teal darken-4" onclick="calcular()">=</button>
            <a class="waves-effect waves-light btn teal darken-1" onclick="insert('/')">/</a>
    </div>


    <!-- RESULTADO DOS CALCULOS -->
    <nav>
        <div class="nav-wrapper teal darken-3">
            <a href="sass.html">
                <div id="resultado" align="center" style="font-size:30px;">
            </a>
        </div>
    </nav>

    <!-- COMO É FEITO AS AÇÕES E OPERAÇÕES DO LAYOUT -->
    <script>
        function insert(num) {
            var numero = document.getElementById('resultado').innerHTML;
            document.getElementById('resultado').innerHTML = numero + num;
        }

        function clean() {
            document.getElementById('resultado').innerHTML = "";
        }

        function back() {
            var resultado = document.getElementById('resultado').innerHTML;
            document.getElementById('resultado').innerHTML = resultado.substring(0, resultado.length - 1)
        }

        function calcular() {
            var resultado = document.getElementById('resultado').innerHTML;
            if (resultado) {
                document.getElementById('resultado').innerHTML = eval(resultado);
            } else {
                document.getElementById('resultado').innerHTML = "Sem dados para calcular"
            }
        }
    </script>

</body>

</html>