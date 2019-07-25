<!DOCTYPE html>
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

    <section>
        <div class="container">
            <div class="tituloPage">
                <label> Galeria de Fotos</label>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">

                <?php
                $pasta = './GL';
                $s = scandir($pasta);

                //ordem decrescente dos diretórios
                ksort($s, SORT_STRING);

                foreach ($s as $k) {

                    if ($k != '.' && $k != '..') {
                        ?>
                        <div class='col-sm-3'>
                            <form action="./GFotos" method="post">
                                <div class='card' style='height: 197px; border:0; border-radius:0;'>
                                    <img src="/./GL/<?php echo $k ?>/1.jpg" class="card-img-top" style='height: 150px; border-radius:0;'>
                                    <button class='btn' name="nome" value="<?php echo $k ?>">
                                        <?php echo $k ?>
                                    </button>
                                </div>
                            </form>
                        </div>

                    <?php
                    }
                }
                ?>

            </div>
            <!--fim row--->
        </div>
        <!--fim container--->
    </section>

</body>
</html>