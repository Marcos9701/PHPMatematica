<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios PHP</title>

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

        <h1>Exercícios PHP - Aulas 1 a 10</h1>

        <fieldset id="ex1">

            <legend>Exercício 1: Tabuada</legend>

            <form method="POST">

                <label>Número:</label>
                <input type="number" name="numero1">

                <button type="submit" name="btn1">
                    Calcular
                </button>

            </form>

            <div class="resultado">

            <?php

                if(isset($_POST['btn1'])){

                    $numero = $_POST['numero1'];

                    for($i = 1; $i <= 10; $i++){

                        echo "$numero x $i = " . ($numero * $i) . "<br>";

                    }

                }

            ?>

            </div>

        </fieldset>

        <fieldset id="ex2">

            <legend>Exercício 2: Desconto</legend>

            <form method="POST">

                <label>Preço:</label>
                <input type="number" name="preco">

                <label>Desconto (%):</label>
                <input type="number" name="desconto">

                <button type="submit" name="btn2">
                    Calcular
                </button>

            </form>

            <div class="resultado">

            <?php

                if(isset($_POST['btn2'])){

                    $preco = $_POST['preco'];
                    $desconto = $_POST['desconto'];

                    $valorFinal = $preco - (($preco * $desconto) / 100);

                    echo "Valor final: R$ $valorFinal";

                }

            ?>

            </div>

        </fieldset>

        <fieldset id="ex3">

            <legend>Exercício 3: Média</legend>

            <form method="POST">

                <label>Nota 1:</label>
                <input type="number" step="0.1" name="n1">

                <label>Nota 2:</label>
                <input type="number" step="0.1" name="n2">

                <label>Nota 3:</label>
                <input type="number" step="0.1" name="n3">

                <label>Nota 4:</label>
                <input type="number" step="0.1" name="n4">

                <button type="submit" name="btn3">
                    Verificar
                </button>

            </form>

            <div class="resultado">

            <?php

                if(isset($_POST['btn3'])){

                    $media = ($_POST['n1'] + $_POST['n2'] + $_POST['n3'] + $_POST['n4']) / 4;

                    echo "Média: $media <br>";

                    if($media >= 5){

                        echo "Aprovado";

                    }else{

                        echo "Reprovado";

                    }

                }

            ?>

            </div>

        </fieldset>

    <div class="navegacao">

    <a href="pagina2.php">
        Próxima Página →
    </a>
    </div>
            </div>
        </fieldset>
    </main>
</body>
</html>