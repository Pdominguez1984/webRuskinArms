<!DOCTYPE html>
<html lang="es">

<head>
    <!-- seo -->
    <meta charset="UTF-8">
    <title>Contacto : Ruskin Arms- Mensaje Enviado</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 , user-scalable=no , maximun-scale=1 , minimun-scale=1">
    <meta name="description" content="Formulario de contacto para comunicarte con Ruskin Arms" />
    <meta name="keywords" content="Contact Form , Formulario de contacto, Ruskin Arms , Córdoba,Argentina " />
    <meta name="author" content="Ruskin Arms-Cba-Arg" />
    <meta name="copyright" content="Ruskin Arms-Cba-Arg" />
    <!-- seo-fin -->
    <!-- bs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/59fd389b8b.js" crossorigin="anonymous"></script>

</head>

<body>
    <!-- nav-bar-comienzo -->
    <header>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Ruskin Arms</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ">
                    <li class="nav-item active">
                        <a class="nav-link" href="../index.html">Inicio <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="./biografia-ruskin-arms.html">Biografia</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="./contenido-multimedia-ruskin-arms.html">Multimedia </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="./informacion-recitales-ruskin-arms.html">Tours </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link " href="./contacto-ruskin-arms.html">Contacto</a>
                    </li>
                </ul>
            </div>
        </nav>



    </header>
    <!-- nav-bar-fin -->

    <!-- contenido-formulario-de-contacto-comienzo -->

    <div class="form-container">
        <div>
            <img src="../media/ruskinarms-cba-fondo-600x600.jpg" alt="">
        </div>
        <div>
            <center>
            <h1> <b>Contacto</b> </h1>
            <?php 
            $myemail = 'tonowebs.xyz@gmail.com';
            $name = $_POST['nombre'];
            $email = $_POST['email'];
            $message = $_POST['mensaje'];

            $to = $myemail;
            $email_subject = "Nuevo mensaje: $subject";
            $email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Mensaje: \n $message";
            $headers = "From: $email";

            mail($to, $email_subject, $email_body, $headers);
            echo "El mensaje se ha enviado correctamente";
            ?>
                <form method="post" action="enviar.php" class="formulario">
                <br>
                <input type="text" name="nombre" placeholder="NOMBRE" size="40">
                <br>
                <input type="email" name="email" placeholder="CORREO" size="40">
                <br>
                <br>
                <textarea type="text" name="mensaje" placeholder="MENSAJE" style="resize: none;" cols="42" rows="10"></textarea><br>
                <br>
                <input type="submit" value="ENVIAR" id="btnenviar">
                <br>

                </form>
            </center>
           
        </div>
        <div>
            <img src="../media/cd-fuerte-guerrero-ruskin-arms.jpg" alt="">
        </div>
    </div>




    <!-- contenido-formulario-de-contacto-fin -->


    <!-- footer-comienzo -->
    <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/ruskin.arms/" role="button">
                    <i class="fab fa-facebook-f"></i
            ></a>
                <!-- youtube -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.youtube.com/channel/UCosIN88bXrZ9lSynxVNiKPA" role="button">
                    <i class="fab fa-youtube"></i>
                </a>

                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/officialruskin" role="button"><i class="fab fa-twitter"></i
            ></a>



                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/ruskin.arms.oficial/?utm_medium=copy_link" role="button"><i class="fab fa-instagram"></i
            ></a>


            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright:
            <a class="footer-enlace-web" href="#">www.ruskin-arms-metal.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- footer-fin -->
    <!-- bs-js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- bs-js -->
</body>

</html>