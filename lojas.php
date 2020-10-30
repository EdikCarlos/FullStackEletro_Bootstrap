<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nossas Lojas | Full Stack Eletro</title>
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
        <main>
            <header>
                <h2 class="display-4">Nossas Lojas</h2>
            </header>
            <hr>
    </div>
    <div class="container">
        <div class="row">
            <div class="container_lojas">
                <div class="lojas">
                    <h3>Rio de Janeiro</h3>
                    <p>Avenida Presidente Vargas, 5000</p>
                    <p>10 &ordm; andar</p>
                    <p>Centro</p>
                    <p>(21) 3333-3333</p>
                </div>

                <div class="lojas">
                    <h3>São Paulo</h3>
                    <p>Avenida Paulista, 985</p>
                    <p>3 &ordm; andar</p>
                    <p>Jardins</p>
                    <p>(11) 4444-4444</p>
                </div>

                <div class="lojas">
                    <h3>Santa Catarina</h3>
                    <p>Rua Major Ávila, 370</p>
                    <p>Vila Mariana</p>
                    <p>(47) 5555-5555</p>
                    <p>&nbsp;</p>
                </div>
            </div>
        </div>
    </div>
    </main>

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