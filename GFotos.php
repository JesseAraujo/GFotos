<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">

    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./styleMobile.css">

    <title>GALERIA & ÁLBUM</title>

</head>

<body>

    <?php
        $n = $_POST['nome'];
    ?>

    <a href="./index">Voltar</a>

    <section>
        <div class="container gallery-container">

            <?php
                $files = glob('./GL/' . $n . '/{*.jpg,*.jpeg,*.JPG}', GLOB_BRACE); //caminho do diretório das fotos com as extensões que desejo listar
                echo "<div class='tituloPage'>" . basename(__DIR__ . './GL/' . $n . '/') . "</div>"; //Exibir nome do diretório onde as fotos se encontram
            ?>

            <div class="tz-gallery">
                <div class="row">

                    <?php
                        for ($i = 0; $i < count($files); $i++) {
                            $img = $files[$i];
                    ?>

                        <div class="col-md-4">
                            <figure class="figure">
                                <a class="lightbox" href="<?php echo $img ?>">
                                    <img src="<?php echo $img ?>" class="img-thumbnail" />
                                    <!--exibindo imagens dentro do diretório-->
                                </a>
                            </figure>
                        </div>

                    <?php
                    }
                    ?>

                </div>
                <!--fim row--->
            </div>
            <!--fim tz-gallery--->
        </div>
        <!--fim container--->

    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.0/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.tz-gallery');
    </script>

</body>
</html>