<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 2</title>

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

    <fieldset>

        <legend>Exercício 5: Soma dos Quadrados</legend>

        <form method="POST">

            <input type="number" name="n1" placeholder="Número 1">

            <input type="number" name="n2" placeholder="Número 2">

            <input type="number" name="n3" placeholder="Número 3">

            <button type="submit" name="btn5">
                Calcular
            </button>

        </form>

        <div class="resultado">

        <?php

            if(isset($_POST['btn5'])){

                $n1 = $_POST['n1'];
                $n2 = $_POST['n2'];
                $n3 = $_POST['n3'];

                $soma = pow($n1,2) + pow($n2,2) + pow($n3,2);

                echo "Resultado: $soma";

            }

        ?>

        </div>

    </fieldset>

    <fieldset>

        <legend>Exercício 6: Salário Líquido</legend>

        <form method="POST">

            <input type="number" name="salario" placeholder="Digite o salário">

            <button type="submit" name="btn6">
                Calcular
            </button>

        </form>

        <div class="resultado">

        <?php

            if(isset($_POST['btn6'])){

                $salario = $_POST['salario'];

                $liquido = $salario + ($salario * 0.10) - ($salario * 0.20);

                echo "Salário Líquido: R$ $liquido";

            }

        ?>

        </div>

    </fieldset>

    <fieldset>

        <legend>Exercício 7: Situação do Aluno</legend>

        <form method="POST">

            <input type="number" step="0.1" name="nota1" placeholder="Nota 1">

            <input type="number" step="0.1" name="nota2" placeholder="Nota 2">

            <input type="number" step="0.1" name="nota3" placeholder="Nota 3">

            <input type="number" step="0.1" name="nota4" placeholder="Nota 4">

            <button type="submit" name="btn7">
                Verificar
            </button>

        </form>

        <div class="resultado">

        <?php

            if(isset($_POST['btn7'])){

                $media = (
                    $_POST['nota1'] +
                    $_POST['nota2'] +
                    $_POST['nota3'] +
                    $_POST['nota4']
                ) / 4;

                echo "Média: $media <br>";

                if($media >= 6){

                    echo "Aprovado";

                }
                else if($media < 3){

                    echo "Retido";

                }
                else{

                    echo "Exame";

                }

            }

        ?>

        </div>

    </fieldset>

    <fieldset>

        <legend>Exercício 8: Maior e Menor Número</legend>

        <form method="POST">

            <input type="number" name="m1" placeholder="Número 1">

            <input type="number" name="m2" placeholder="Número 2">

            <input type="number" name="m3" placeholder="Número 3">

            <button type="submit" name="btn8">
                Verificar
            </button>

        </form>

        <div class="resultado">

        <?php

            if(isset($_POST['btn8'])){

                $m1 = $_POST['m1'];
                $m2 = $_POST['m2'];
                $m3 = $_POST['m3'];

                echo "Maior: " . max($m1, $m2, $m3) . "<br>";

                echo "Menor: " . min($m1, $m2, $m3);

            }

        ?>

        </div>

    </fieldset>

    <fieldset>

        <legend>Exercício 9: Soma dos Ímpares</legend>

        <form method="POST">

            <input type="number" name="inicio" placeholder="Início">

            <input type="number" name="fim" placeholder="Fim">

            <button type="submit" name="btn9">
                Somar
            </button>

        </form>

        <div class="resultado">

        <?php

            if(isset($_POST['btn9'])){

                $inicio = $_POST['inicio'];
                $fim = $_POST['fim'];

                $soma = 0;

                for($i = $inicio; $i <= $fim; $i++){

                    if($i % 2 != 0){

                        $soma += $i;

                    }

                }

                echo "Soma dos ímpares: $soma";

            }

        ?>
        <div class="botoesTopo">

    <a href="index.php" class="voltar">
        ← Voltar
    </a>

    <a href="pagina3.php" class="proximo">
        Próxima Página →
    </a>

</div>

        </div>

    </fieldset>

</main>

</body>
</html>