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

                <p class="fs-1 text text-center mt-5">antiguedades</p>

                <div class="producto rounded p-4 mb-4" style="background-color: rgb(90, 90, 209);">
                    <div class="row">
                        <img src="assets/img/anti1.jpg" style=" height:250px " alt="" class="col-4 align-self-center rounded">
                        <div class="row col-8">
                            <p class="fs-3 fw-bold text text-center text-white">aparato musical</p>
                            <p class="fs-5 text text-center text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla voluptatem quasi quis ipsum commodi voluptatum recusandae similique. Earum commodi consectetur tenetur sunt necessitatibus tempore, dolorum porro, officiis quod quis quisquam.</p>
                            <p class="fs-2 text text-center text-white">$25.49</p>
                            <button style="border-radius: 50px;" class="btn btn-dark ms-2 text-white">
                                 <i class="bi bi-cart4 me-1"></i>Agregar el Carrito
                        </div>
                    </div>
                </div>
                <div class="producto rounded p-4 mb-4" style="background-color: rgb(90, 90, 209);">
                    <div class="row">
                        <img src="assets/img/anti2.jpg" alt="" class="col-4 align-self-center rounded">
                        <div class="row col-8">
                            <p class="fs-3 fw-bold text text-center text-white">Reloj de mano</p>
                            <p class="fs-5 text text-center text-white ">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla voluptatem quasi quis ipsum commodi voluptatum recusandae similique. Earum commodi consectetur tenetur sunt necessitatibus tempore, dolorum porro, officiis quod quis quisquam.</p>
                            <p class="fs-2 text text-center text-white">$15.48</p>
                            <button style="border-radius: 50px;" class="btn btn-dark ms-2 text-white">
                                 <i class="bi bi-cart4 me-1"></i>Agregar el Carrito
                        </div>
                    </div>
                </div>
                <div class="producto rounded p-4 mb-4" style="background-color: rgb(90, 90, 209);">
                    <div class="row">
                        <img src="assets/img/anti3.jpg" alt="" height="60%" class="col-4 align-self-center rounded">
                        <div class="row col-8">
                            <p class="fs-3 fw-bold text text-center text-white">Reloj</p>
                            <p class="fs-5 text text-center text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla voluptatem quasi quis ipsum commodi voluptatum recusandae similique. Earum commodi consectetur tenetur sunt necessitatibus tempore, dolorum porro, officiis quod quis quisquam.</p>
                            <p class="fs-2 text text-center text-white">$48.99</p>
                            <button style="border-radius: 50px;" class="btn btn-dark ms-2 text-white">
                                 <i class="bi bi-cart4 me-1"></i>Agregar el Carrito
                        </div>
                    </div>
                </div>
                <div class="producto rounded p-4 mb-4" style="background-color: rgb(90, 90, 209);">
                    <div class="row">
                        <img src="assets/img/anti4.jpg" style="height: 225px;" alt="" height="60%" class="col-4 align-self-center rounded">
                        <div class="row col-8">
                            <p class="fs-3 fw-bold text text-center text-white">Saco de Vestir</p>
                            <p class="fs-5 text text-center text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla voluptatem quasi quis ipsum commodi voluptatum recusandae similique. Earum commodi consectetur tenetur sunt necessitatibus tempore, dolorum porro, officiis quod quis quisquam.</p>
                            <p class="fs-2 text text-center text-white">$45.99</p>
                            <button style="border-radius: 50px;" class="btn btn-dark ms-2 text-white">
                                 <i class="bi bi-cart4 me-1"></i>Agregar el Carrito
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>


</html>