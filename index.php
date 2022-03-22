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
            <div class="flex-shrink-0 p-3 bg-white col-2">
                <a href="/"
                    class="d-flex w-100 justify-content-center align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
                    <i class="bi bi-basket2-fill me-2"></i>
                    <span class="fs-5 fw-bold">Marketplace - LIS</span>
                </a>
                <ul class="list-unstyled ps-0">
                    <li class="mb-1">
                        <button class="btn btn-toggle form-control align-items-center rounded collapsed"
                            data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                            <i class="bi bi-house-fill me-2"></i>Home
                        </button>
                        <!--
                    <div class="collapse" id="home-collapse" style="">
                    <ul class="btn-toggle-nav list-group list-group-flush list-unstyled fw-normal pb-1 small">
                        <li><a href="#" class="list-group-item link-dark border-0 mt-1 ms-4">Overview</a></li>
                        <li><a href="#" class="list-group-item link-dark border-0 mt-1 ms-4">Overview</a></li>
                        <li><a href="#" class="list-group-item link-dark border-0 mt-1 ms-4">Overview</a></li>
                    </ul>
                </div>
                -->
                    </li>
                    <li class="mb-1">
                        <button class="btn btn-toggle form-control align-items-center rounded collapsed"
                            data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                            <i class="bi bi-stars me-2"></i>Top categorías
                        </button>
                        <div class="collapse" id="dashboard-collapse" style="">
                            <ul class="btn-toggle-nav list-group list-group-flush list-unstyled fw-normal pb-1 small">
                                <li><a href="#" class="list-group-item link-dark border-0 mt-1 ms-4">Vehículos <span
                                            class="badge bg-dark ms-4">53</span></a></li>
                                <li><a href="#" class="list-group-item link-dark border-0 mt-1 ms-4">Ropa de mujer <span
                                            class="badge bg-dark ms-4">200</span></a></li>
                                <li><a href="#" class="list-group-item link-dark border-0 mt-1 ms-4">Ropa de hombre
                                        <span class="badge bg-dark ms-4">25</span></a></li>
                                <li><a href="#" class="list-group-item link-dark border-0 mt-1 ms-4">Muebles <span
                                            class="badge bg-dark ms-4">25</span></a></li>
                                <li><a href="#" class="list-group-item link-dark border-0 mt-1 ms-4">Electrónicos <span
                                            class="badge bg-dark ms-4">25</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="mb-1">
                        <button class="btn btn-toggle form-control align-self-strart rounded collapsed"
                            data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                            <i class="bi bi-grid-fill me-2"></i>Categorías
                        </button>
                        <div class="collapse" id="orders-collapse" style="">
                            <ul class="btn-toggle-nav list-group list-group-flush list-unstyled fw-normal pb-1 small">
                                <li><a href="#" class="list-group-item link-dark border-0 mt-1 ms-4">Antigüedades <span
                                            class="badge bg-dark ms-4">53</span></a></li>
                                <li><a href="#" class="list-group-item link-dark border-0 mt-1 ms-4">Accesorios <span
                                            class="badge bg-dark ms-4">200</span></a></li>
                                <li><a href="#" class="list-group-item link-dark border-0 mt-1 ms-4">Arte <span
                                            class="badge bg-dark ms-4">25</span></a></li>
                                <li><a href="#" class="list-group-item link-dark border-0 mt-1 ms-4">Bebés <span
                                            class="badge bg-dark ms-4">25</span></a></li>
                                <li><a href="#" class="list-group-item link-dark border-0 mt-1 ms-4">Electrónicos <span
                                            class="badge bg-dark ms-4">25</span></a></li>
                                <li><a href="#" class="list-group-item link-dark border-0 mt-1 ms-4">Cuidado personal
                                        <span class="badge bg-dark ms-4">25</span></a></li>
                                <li><a href="#" class="list-group-item link-dark border-0 mt-1 ms-4">Ropa de mujer <span
                                            class="badge bg-dark ms-4">25</span></a></li>
                                <li><a href="#" class="list-group-item link-dark border-0 mt-1 ms-4">Ropa de hombre
                                        <span class="badge bg-dark ms-4">25</span></a></li>
                                <li><a href="#" class="list-group-item link-dark border-0 mt-1 ms-4">Muebles <span
                                            class="badge bg-dark ms-4">25</span></a></li>
                                <li><a href="#" class="list-group-item link-dark border-0 mt-1 ms-4">Vehículos <span
                                            class="badge bg-dark ms-4">25</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="border-top my-3"></li>
                    <li class="mb-1">
                        <div class="dropdown">
                            <a class="btn btn-dark form-control ms-2" href="#" role="button" id="dropdownMenuLink"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle me-2"></i> Josué Rivera
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Perfil</a></li>
                                <li><a class="dropdown-item" href="#">Cerrar sesión</a></li>
                            </ul>

                        </div>
                    </li>
                </ul>
            </div>
            <div class="flex-fill col-8">
                <div class="p-2 mt-1">
                    <div class="input-group">
                        <i class="bi bi-search input-group-text" id="basic-addon1"></i>
                        <input type="text" class="form-control" list="datalistOptions" placeholder="Busca aquí..."
                            aria-label="Busca aquí..." aria-describedby="basic-addon1">
                        <datalist id="datalistOptions">
                            <option value="San Francisco">
                            <option value="New York">
                            <option value="Seattle">
                            <option value="Los Angeles">
                            <option value="Chicago">
                        </datalist>

                        <button class="btn btn-dark ms-2 text-white">
                            <i class="bi bi-cart4 me-1"></i>Carrito
                            <span
                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning text-black">
                                99+
                                <span class="visually-hidden">unread messages</span>
                            </span>
                        </button>
                    </div>
                </div>
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