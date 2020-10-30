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

    if (isset($_POST['nome']) && isset($_POST['msg'])) {
        $nome = $_POST['nome'];
        $msg = $_POST['msg'];

        $sql = "insert into comentarios (nome, msg) values ('$nome','$msg')";
        $result = $conn->query($sql);
    }
    ?>
 <!DOCTYPE html>
 <html lang="pt-br">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Contatos | Full Stack Eletro</title>
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
                 <h2 class="display-4">Contatos</h2>
             </header>
             <hr>
     </div>
     <div class="container">
         <div class="container_contatos row">
             <div class="zap col text-center">
                 <img src="./imagens/whatsapp_icon.png.png" alt="">
                 <p>(11) 99999-9999</p>
             </div>
             <div class="email col text-center">
                 <img src="./imagens/email.png.png" alt="">
                 <p>contato@fullstackeletro.com</p>
             </div>
         </div>
     </div>

     <div class="container">
         <form method="post" style="width: 500px; margin: 50px auto 60px auto;">
             <div class="form-group mx-5 text-center ">
                 <p>Nome: </p>
                 <input class="nome form-control" type="text" name="nome" style="width: 400px">
                 <p>Mensagem:</p>
                 <input class="area_texto form-control" type="textarea" name="msg" style="width: 400px; height:50px;"><br>
                 <input class="enviar bg-light mt-1 btn-lg" type="submit">
             </div>
         </form>
     </div>
     </main>
     <hr>
     <div class="container">
         <div style="text-align: center; margin-top: 10px;">
             <?php
                $sql = "select * from comentarios";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($rows = $result->fetch_assoc()) {
                        echo "Data: ", $rows['data'], "<br>";
                        echo "Nome: ", $rows['nome'], "<br>";
                        echo "Mensagem: ", $rows['msg'], "<br>";
                        echo "<hr>";
                    }
                } else {
                    echo "Nenhum produto encontrado.";
                }
                ?>
         </div>
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