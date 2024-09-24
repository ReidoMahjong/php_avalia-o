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
        <?php
            include("bd_connect.php");

            $_SERVER["REQUEST_METHOD"] == "POST";
            
            $nome = $_POST['nome'];
            $desc = $_POST['desc'];
            $price = $_POST['price'];
            $qt = $_POST['qt'];

            $sql = "INSERT INTO produtos (Nome, Descrição, Preço, Quantidade) VALUES ('$nome','$desc','$price','$qt')";
            $enviar = mysqli_query($connect, $sql);
            $i = 1;
            $qp = 0;
            $info = "SELECT * FROM produtos";
            $dados = mysqli_query($connect, $info);
            while ($table = mysqli_fetch_array($dados)){
                $qp = $qp + 1;
                $p_id = $table['id'];
                $p_nome = $table['Nome'];
                $p_desc = $table['Descrição'];
                $p_price = $table['Preço'];
                $p_qt = $table['Quantidade'];
                echo '<table border="1">';
                echo "<tr>";
                echo "<td>" . $p_id . "</td>";
                echo "<td>" . $p_nome . "</td>";
                echo "<td>" . $p_desc . "</td>";
                echo "<td>" . $p_price . "</td>";
                echo "<td>" . $p_qt . "</td>";
                echo "</tr>";
                echo "</table>";
            }

            echo '<li class="line">' . $qp .'</li>';

            mysqli_close($connect);
        ?>
        <form method="post" action="excluir.php">
            <li class="line">
                <label for="exlui">Se desaja excluir algo, digite o ID:</label>
                <input class="txt" type="text" name="exclui" id="exclui">
            </li>
            <input type="submit" value="Excluir!" class="button">
        </form>
        <a style="text-decoration: none;" class="link" href="index.html"><li class="line">Retornar a página inicial</li></a>
    </div>
    <script src="script.js"></script>
</body>
</html>