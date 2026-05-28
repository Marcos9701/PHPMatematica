<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 3</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

 <aside class="sidebar">

        <h2>Exercícios</h2>

        <a href="#ex1">1 - Tabuada</a>
        <a href="#ex2">2 - Desconto</a>
        <a href="#ex3">3 - Média</a>
        <a href="#ex5">5 - Quadrados</a>
        <a href="#ex6">6 - Salário</a>
        <a href="#ex7">7 - Situação</a>
        <a href="#ex8">8 - Maior/Menor</a>
        <a href="#ex9">9 - Ímpares</a>
        <a href="#ex10">10 - Par ou Ímpar</a>
        <a href="#ex11">11 - Calculadora</a>

    </aside>

<main class="conteudo">

    <!-- EXERCÍCIO 10 -->
    <fieldset>

        <legend>Exercício 10: Par ou Ímpar</legend>

        <form method="POST">

            <input type="number" name="numero">

            <button type="submit" name="btn10">
                Verificar
            </button>

        </form>

        <div class="resultado">

        <?php

            if(isset($_POST['btn10'])){

                $numero = $_POST['numero'];

                if($numero % 2 == 0){

                    echo "Número Par";

                }else{

                    echo "Número Ímpar";

                }

            }

        ?>

        </div>

    </fieldset>

    <!-- EXERCÍCIO 11 -->
    <fieldset>

        <legend>Exercício 11: Calculadora</legend>

        <form method="POST">

            <input type="number" name="c1" placeholder="Número 1">

            <input type="number" name="c2" placeholder="Número 2">

            <input type="text" name="operador" placeholder="+ - * /">

            <button type="submit" name="btn11">
                Calcular
            </button>

        </form>

        <div class="resultado">

        <?php

            if(isset($_POST['btn11'])){

                $c1 = $_POST['c1'];
                $c2 = $_POST['c2'];
                $operador = $_POST['operador'];

                switch($operador){

                    case "+":
                        echo $c1 + $c2;
                        break;

                    case "-":
                        echo $c1 - $c2;
                        break;

                    case "*":
                        echo $c1 * $c2;
                        break;

                    case "/":
                        echo $c1 / $c2;
                        break;

                    default:
                        echo "Operador inválido";

                }

            }

        ?>

        </div>

    </fieldset>
        <div class="botoesTopo">
    <a href="pagina2.php" class="voltar">
        ← Voltar
    </a>
</div>
        </div>
    </fieldset>
</main>
</body>
</html>