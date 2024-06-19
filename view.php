<?php
    if ($_SERVER["REQUEST_METHOD"] === 'GET') {
        // $msg = ""; 
    } else if ($_SERVER["REQUEST_METHOD"] === 'POST') {
        $turmaFormulario = $_POST["turmaRecebida"];
        $turmaFormulario = strtoupper($turmaFormulario);

        $msg = "";

        $turmas = array(
            "3DSD" => array(
                "16117" => "Amanda Oliveira Santos",
                "16557" => "Bruno Penteado Carrara",
                "16563" => "Cibele Souza de Almeida",
                "16119" => "Danilo Rafhael",
                "16121" => "Érika Cavalcanti"
            ),
            "2CTI" => array(
                "17427" => "Diogo Vinicius Oliveira",
                "17428" => "Douglas José Figueiredo",
                "17429" => "Emily Da Silva Farias"
            ),
            "3DSN" => array(
                "16227" => "Andre Ricardo Martins",
                "16573" => "Andre Schinor Mena Peres",
                "16228" => "Beatriz Santos de Mello",
                "16229" => "Caio Ramos Ballarin",
                "16231" => "Carlos Eduardo Lima"
            )
        );

         //confere se a chave do array existe
        //se o que foi informado corresponde a o que está em turmas
        if (array_key_exists($turmaFormulario, $turmas)) {
            $msg = "<h1>Turma $turmaFormulario</h1><ul>";
            /*vai até o array turmas e procura por qual foi informado pelo turmaFormulario;
            chamamos de ra o primeiro item desse array, assim como o nome é o nome dado a posição 1 do array*/
            foreach ($turmas[$turmaFormulario] as $ra => $nome) {
                $msg .= "<li>$ra: $nome</li>";
            }
            $msg .= "</ul>";
        } else {
            $msg = '<div class="error">A turma não existe! Digite uma turma cadastrada!</div>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Turmas Cadastradas</title>
</head>
<body>
    
    <div class="container">
        <div class="formulario">
            <?= $msg ?>
            <br>
            <button onclick="goBack()">Voltar</button>
        </div>
    </div>

    <script>
    function goBack() {
        window.history.back();
    }
    </script>
    
</body>
</html>
