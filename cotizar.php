<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Ts Seguros, cotice</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="./img/LOGO.jpeg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                    Total Seguros
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./cotizar.php">Cotiza</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Compañias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Seguros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contacto</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <form class="formulario" action="./enviar_correo1.php" method="post">
        <i class="form-control img-form"></i>
        <div class="form-floating mb-3 ">
            <input type="text" class="form-control" id="floatingInput" placeholder="">
            <label for="floatingInput">Nombre y Apellido</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="">
            <label for="floatingInput">Correo electrónico</label>
        </div>
        <div class="form-floating mb-3">
            <input type="tel" class="form-control" id="floatingInput" placeholder="">
            <label for="floatingInput">Telefono</label>
        </div>
        <div class="form-floating mb-3">
            <input type="Text" class="form-control" id="floatingInput" placeholder="">
            <label for="floatingInput">Localidad</label>
        </div>

        <div class="form-floating mb-3">
            <label for="formFile" class="form-label"></label>
            <input class="form-control" type="file" id="formFile">
        </div>
        <div class=" mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">¿Qué te gustaría cotizar?</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
        </div>
        <div class=" mb-3">
            <input type="submit" class="form-control" id="floatingInput" >

        </div>

    </form>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>