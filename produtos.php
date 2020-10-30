<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "fseletro";

$conn = mysqli_connect($servername, $username, $password, $database);
mysqli_set_charset($conn, "utf8");

if (!$conn) {
    die('Conexao com erro ou inexistente' . mysqli_connect_error());
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos | Full Stack Eletro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <?php
    echo '<link rel="stylesheet" type="text/css" href="estilos/estilos.css" >';
    ?>
    <script src="./scripts/functions.js"></script>
</head>

<body>
    <div class="container">
        <!--Menu-->
        <?php
        include_once('menu.html');
        ?>
    </div>
    <main>
        <div class="container">
            <header>
                <h2 class="display-4">Produtos</h2>
                <hr>
            </header>
        </div>

        <div class="container-fluid">
            <section class="categorias">
                <h3>Categorias</h3>
                <ul>
                    <li onclick="exibir_todos()">Todos (12)</li>
                    <li onclick="exibir_categoria('geladeira')">Geladeiras (3)</li>
                    <li onclick="exibir_categoria('fogao')">Fogões (2)</li>
                    <li onclick="exibir_categoria('microondas')">Microondas (3)</li>
                    <li onclick="exibir_categoria('lavaroupas')">Lavadora de roupas (2)</li>
                    <li onclick="exibir_categoria('lavaloucas')">Lava-louças (2)</li>
                </ul>
            </section>
            <section class="produtos bg-white">
                <?php
                $sql = "select * from produtos";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($rows = $result->fetch_assoc()) {

                ?>
                        <div class="box_produto bg-white" id="<?php echo $rows["categoria"] ?>">
                            <img class="itens img-fluid" src="<?php echo $rows["imagem"] ?>" onclick="zoom(this)">
                            <br>
                            <p class="descricao"><?php echo $rows["descricao"] ?></p>
                            <p class="descricao" style="text-decoration: line-through;"><?php echo $rows["precoinicial"] ?></p>
                            <p class="preco text-danger"><?php echo $rows["precofinal"] ?></p>
                            <hr>
                        </div>

                <?php

                    }
                } else {
                    echo "Nenhum produto encontrado.";
                }
                ?>
            </section>
    </main>
    </div>
    <div class="container">
        <footer id="rodape">
            <h4 class="text-danger">Formas de pagamento</h4>
            <img src="./imagens/formas_pagto.png" alt="Formas de pagamento" width="300px">
            <p>&copy; Recode Pro</p>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>