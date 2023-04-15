<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Css propio -->
    <link rel="stylesheet" href="./css/style.css">
    <title>Ts seguros</title>
</head>

<body>
    <!-- nav -->
    <nav>
        <div class="nav-wrapper grey">
            <a href="#" class="brand-logo"><img class="imgLogo" src="./img/LOGO.jpeg" alt="" srcset=""></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="#">Cotiza</a></li>
                <li><a href="#">Compañias</a></li>
                <li><a href="#">Nosotros</a></li>
                <li><a href="#">Seguros</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </div>
    </nav>
    <!-- Fin de nav -->

    <!-- Carrousel -->

    <div class="carousel carousel-slider center">
        <div class="carousel-fixed-item center">
            <a class="btn waves-effect white grey-text darken-text-2" href="">Cotiza tu seguro!!</a>
        </div>
        <div class="carousel-item  white-text" href="#one!">
            <img class="responsive-img" src="./img/automor.jpg">
            <!-- <h2>First Panel</h2> -->
            <p class="white-text">This is your first panel</p>
        </div>
        <div class="carousel-item  white-text" href="#two!">
            <img src="./img/moto.jpg">
            <!-- <h2>Second Panel</h2> -->
            <p class="white-text">This is your second panel</p>
        </div>
        <div class="carousel-item  white-text" href="#three!">
            <img src="./img/bicicleta.jpg">
            <!-- <h2>Third Panel</h2> -->
            <p class="white-text">This is your third panel</p>
        </div>
        <div class="carousel-item  white-text" href="#four!">
            <img src="./img/accidente.jpg">
            <!-- <h2>Fourth Panel</h2> -->
            <p class="white-text">This is your fourth panel</p>
        </div>
        <div class="carousel-item  white-text" href="#four!">
            <img src="./img/celular-notebook.jpg">
            <!-- <h2>Fourth Panel</h2> -->
            <p class="white-text">This is your fourth panel</p>
        </div>
        <div class="carousel-item  white-text" href="#four!">
            <img src="./img/incendio.jpg">
            <h2>Fourth Panel</h2>
            <p class="white-text">This is your fourth panel</p>
        </div>
    </div>

    <!-- Fin de carrousel -->

    <!-- Caja de Iconos -->

    <div class="col s12 m8 offset-m2 l6 offset-l3">
        <div class="card-panel grey lighten-5 z-depth-1 flex">
            <div class="row valign-wrapper">
                <div class="col s2">
                    <img src="./img/dinero.png" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
                </div>
                <div class="col s10">
                    <span class="black-text">
                        Cotizá,compará y ahorrá
                    </span>
                </div>
            </div>
            <div class="row valign-wrapper">
                <div class="col s2">
                    <img src="./img/gestion.png" alt="" class="circle responsive-img">
                    <!-- notice the "circle" class -->
                </div>
                <div class="col s10">
                    <span class="black-text">
                        Denuncia tu siniestro y descargà tu documentacion
                    </span>
                </div>
            </div>
            <div class="row valign-wrapper">
                <div class="col s2">
                    <img src="./img/grua.png" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
                </div>
                <div class="col s10">
                    <span class="black-text">
                        Asistencia Personalizada
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Fin caja de Iconos -->

    <!-- Parallax -->


    <div class="parallax-container">
        <div class="parallax"><img class="imgRec" src="./img/family.jpg"></div>
    </div>
    <div class="section white">
        <div class="row container">
            <h2 class="header">Nosotros</h2>
            <p class="grey-text text-darken-3 lighten-3">Somos Productores Asesores de Seguros dedicados a la gestión
                integral de
                seguros con una trayectoria de 20 años en el mercado.
                La calidad, la excelencia en el servicio, la dedicación y el trato personal cotidiano
                forman parte de nuestra misión.
                Entendemos que al momento de un siniestro es cuando ponemos en juego las
                promesas realizadas y la fe que el asegurado depositó en nosotros.</p>
        </div>
    </div>
    <div class="parallax-container">
        <div class="parallax"><img class="imgRec" src="./img/pc2.jpg"></div>
    </div>
    <div class="section white">
        <div class="row container">
            <h2 class="header">Clientes</h2>
            <p class="grey-text text-darken-3 lighten-3">Utilizá nuestra web para denunciar un choque, rotura de
                cristales, o robo de ruedas.
                Ingresá tu pre-denuncia por aquí, y ahorrá tiempo.</p>
        </div>
        <div class="botonForm">
            <a id="1" class="waves-effect waves-light btn blue">CHOQUE</a>
            <a id="2" class="waves-effect waves-light btn blue">ROBO DE RUEDA</a>
            <a id="3" class="waves-effect waves-light btn blue">ROTURA DE CRISTAL</a>
        </div>



        <div class="divider"></div>






        <h2 class="header">Nuestras companias</h2>
        <div id="marcas">
            <img src="./img/147_federacion.jpg" alt="Federacion Patronal">
            <img src="./img/rus.png" alt="Rio Uruguay Seguros">
            <img src="./img/rivadavia.jpg" alt="Rivadavia">
            <img src="./img/hdi-seguros-pandemia-innovacion.png" alt="Hdi seguros">
            <img src="./img/atm.jpg" alt="ATM">

        </div>

        <div class="divider"></div><br><br><br>
        <div class="section container">

            <div class="row">
                <form action="enviar_correo1.php" method="post" class="col s12">
                    <div class="row card-panel">
                        <div class="input-field col s6">
                            <input type="text" id="nombre" class="validate" name="nombre" required>
                            <label for="nombre">Nombre:</label>
                        </div>

                        <div class="input-field col s6">
                            <input type="text" id="apellido" class="validate" name="apellido" required>
                            <label for="apellido">Apellido:</label>
                        </div>

                        <div class="input-field col s6">
                            <input type="email" id="email" class="validate" name="email" required>
                            <label for="email">E-mail:</label>
                        </div>
                        <div class="input-field col s6">

                            <input id="icon_telephone" type="tel" name="telefono" class="validate">
                            <label for="icon_telephone">Telefono</label>
                        </div>

                        <div class="input-field col s12">
                            <textarea id="textarea1" class="materialize-textarea" name="mensaje"></textarea>
                            <label for="textarea1">Su consulta</label>
                        </div>

                        <button class="btn" type="submit">Enviar</button>

                    </div>
                </form>
            </div>
        </div>

        <div class="divider"></div><br><br><br>


       
          

        <footer class="page-footer grey">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Ts seguros</h5>
                        <p class="grey-text text-lighten-4">
                        <p>--------<br>
                            Whatsapp: 11 3562-2157 | <br>
                            E-mail:<a href="mailto:tsproductores@gmail.com"> tsproductores@gmail.com</a> <br>
                            Dirección: San Fernando. Buenos Aires</p>
                        </p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Links</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2023 Copyright
                    <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
                </div>
            </div>
        </footer>












        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

        <script>

            /* autoInit */
            // M.AutoInit();
            /* carrouel */

            document.addEventListener('DOMContentLoaded', function () {
                let elems = document.querySelectorAll('.carousel');
                let instances = M.Carousel.init(elems);
            });
            let instance = M.Carousel.init({
                fullWidth: true,


            });

        </script>

        <script>
            /* Parallax*/
            document.addEventListener('DOMContentLoaded', function () {
                let cosas = document.querySelectorAll('.parallax');
                let instances = M.Parallax.init(cosas);
            });
        </script>



</body>

</html>