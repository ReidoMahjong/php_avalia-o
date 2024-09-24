<?php
    include("bd_connect.php");

    $_SERVER["REQUEST_METHOD"] == "POST";

    $id = $_POST['exclui'];

    $sql = "DELETE FROM produtos WHERE id = $id";

    $excluir = mysqli_query($connect, $sql);

    mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Informática</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="tittle">IGOR</h1>
    <div class="box">
        <li class="line">Produto apagado com sucesso!</li>
    <a class="link" href="index.html"><li class="line">Retornar a página inicial</li></a>
    </div>
    <script src="script.js"></script>
</body>
</html>