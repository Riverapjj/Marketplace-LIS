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
                include 'menu.php'
            ?>
            <div class="flex-fill m-0 col-8">
                <?php
                    include 'buscador.php'
                ?>

                <p class="fs-1 text text-center mt-5">Herramientas</p>

                <div class="producto rounded p-4 mb-4" style="background-color: rgb(90, 90, 209);">
                    <div class="row">
                        <img src="assets/img/hr1.jpg" alt="" class="col-4 align-self-center rounded">
                        <div class="row col-8">
                            <p class="fs-3 fw-bold text text-center text-white">Pack de Herramientas Da Matt</p>
                            <p class="fs-5 text text-center text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla voluptatem quasi quis ipsum commodi voluptatum recusandae similique. Earum commodi consectetur tenetur sunt necessitatibus tempore, dolorum porro, officiis quod quis quisquam.</p>
                            <p class="fs-2 text text-center text-white">$10.49</p>
                        </div>
                    </div>
                </div>
                <div class="producto rounded p-4 mb-4" style="background-color: rgb(90, 90, 209);">
                    <div class="row">
                        <img src="assets/img/hr2.jpg" alt="" class="col-4 align-self-center rounded">
                        <div class="row col-8">
                            <p class="fs-3 fw-bold text text-center text-white">First Rate</p>
                            <p class="fs-5 text text-center text-white ">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla voluptatem quasi quis ipsum commodi voluptatum recusandae similique. Earum commodi consectetur tenetur sunt necessitatibus tempore, dolorum porro, officiis quod quis quisquam.</p>
                            <p class="fs-2 text text-center text-white">$25.48</p>
                        </div>
                    </div>
                </div>
                <div class="producto rounded p-4 mb-4" style="background-color: rgb(90, 90, 209);">
                    <div class="row">
                        <img src="assets/img/hr3.jpg" alt="" height="60%" class="col-4 align-self-center rounded">
                        <div class="row col-8">
                            <p class="fs-3 fw-bold text text-center text-white">Pack Makita</p>
                            <p class="fs-5 text text-center text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla voluptatem quasi quis ipsum commodi voluptatum recusandae similique. Earum commodi consectetur tenetur sunt necessitatibus tempore, dolorum porro, officiis quod quis quisquam.</p>
                            <p class="fs-2 text text-center text-white">$110.99</p>
                        </div>
                    </div>
                </div>
                <div class="producto rounded p-4 mb-4" style="background-color: rgb(90, 90, 209);">
                    <div class="row">
                        <img src="assets/img/hr4.jpg" alt="" height="60%" class="col-4 align-self-center rounded">
                        <div class="row col-8">
                            <p class="fs-3 fw-bold text text-center text-white">Black and Decker</p>
                            <p class="fs-5 text text-center text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla voluptatem quasi quis ipsum commodi voluptatum recusandae similique. Earum commodi consectetur tenetur sunt necessitatibus tempore, dolorum porro, officiis quod quis quisquam.</p>
                            <p class="fs-2 text text-center text-white">$49.99</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>


</html>