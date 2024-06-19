<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Consulta de Classes</title>
</head>
<body>
    <div class="formulario">
        <form action="view.php" method="post">
            <h3>Bem-vindo! Digite uma turma para a busca:</h3>
            <br>
            <i class="bi bi-search"></i> Turma: <br><br>
            <input type="text" name="turmaRecebida" required>

            <br><br>

            <input type="submit" value="Buscar">
        </form>
    </div>
    
</body>
</html>