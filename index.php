<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <title>Marketplace</title>
</head>

<body>
    <div class="container-fluid m-0">
        <div class="row d-flex">
            <?php
                include 'views/menu.php';
            ?>
            <div class="flex-fill m-0 col-8">
                <?php
                    include 'views/buscador.php';
                ?>
                <p class="fs-1 text text-center mt-5">!Todo lo que buscas en un solo lugar!</p>

                

                <div class="card m-3 mt-5">
                    <img src="assets/img/antiguedades.jpeg" class="card-img img-fit-card" alt="...">
                    <div class="card-img-overlay d-flex overflow-hidden align-items-center justify-content-center">
                        <h2 class="card-title">Antigüedades</h2>
                    </div>
                </div>
                <div class="card m-3">
                    <img src="assets/img/accesorios.png" class="card-img img-fit-card" alt="...">
                    <div class="card-img-overlay d-flex overflow-hidden align-items-center justify-content-center">
                        <h2 class="card-title">Accesorios</h2>
                    </div>
                </div>
                <div class="card m-3">
                    <img src="assets/img/arte.jpg" class="card-img img-fit-card" alt="...">
                    <div class="card-img-overlay d-flex overflow-hidden align-items-center justify-content-center">
                        <h2 class="card-title">Arte</h2>
                    </div>
                </div>
                <div class="card m-3">
                    <img src="assets/img/antiguedades.jpeg" class="card-img img-fit-card" alt="...">
                    <div class="card-img-overlay d-flex overflow-hidden align-items-center justify-content-center">
                        <h2 class="card-title">Bebés</h2>
                    </div>
                </div>
                <div class="card m-3">
                    <img src="assets/img/antiguedades.jpeg" class="card-img img-fit-card" alt="...">
                    <div class="card-img-overlay d-flex overflow-hidden align-items-center justify-content-center">
                        <h2 class="card-title">Electrónicos</h2>
                    </div>
                </div>
                <div class="card m-3">
                    <img src="assets/img/antiguedades.jpeg" class="card-img img-fit-card" alt="...">
                    <div class="card-img-overlay d-flex overflow-hidden align-items-center justify-content-center">
                        <h2 class="card-title">Cuidado personal</h2>
                    </div>
                </div>
                <div class="card m-3">
                    <img src="assets/img/antiguedades.jpeg" class="card-img img-fit-card" alt="...">
                    <div class="card-img-overlay d-flex overflow-hidden align-items-center justify-content-center">
                        <h2 class="card-title">Ropa de mujer</h2>
                    </div>
                </div>
                <div class="card m-3">
                    <img src="assets/img/antiguedades.jpeg" class="card-img img-fit-card" alt="...">
                    <div class="card-img-overlay d-flex overflow-hidden align-items-center justify-content-center">
                        <h2 class="card-title">Ropa de hombre</h2>
                    </div>
                </div>
                <div class="card m-3">
                    <img src="assets/img/antiguedades.jpeg" class="card-img img-fit-card" alt="...">
                    <div class="card-img-overlay d-flex overflow-hidden align-items-center justify-content-center">
                        <h2 class="card-title">Muebles</h2>
                    </div>
                </div>
                <div class="card m-3">
                    <img src="assets/img/vehiculos.webp" class="card-img img-fit-card" alt="...">
                    <div class="card-img-overlay d-flex overflow-hidden align-items-center justify-content-center">
                        <h2 class="card-title">Vehículos</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>


</html>