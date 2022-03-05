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
    <div class="content bg-primary">
        <div class="flex-shrink-0 p-3 bg-white" style="width: 25%;">
            <a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
                <i class="bi bi-basket2-fill me-2"></i>
                <span class="fs-5 fw-bold">Marketplace - LIS</span>
            </a>
            <ul class="list-unstyled ps-0">
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                        data-bs-target="#home-collapse" aria-expanded="false">
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
                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                        data-bs-target="#dashboard-collapse" aria-expanded="false">
                        <i class="bi bi-stars me-2"></i>Top categorías
                    </button>
                    <div class="collapse" id="dashboard-collapse" style="">
                        <ul class="btn-toggle-nav list-group list-group-flush list-unstyled fw-normal pb-1 small">
                            <li><a href="#" class="list-group-item link-dark border-0 mt-1 ms-4">Vehículos <span
                                        class="badge bg-dark ms-4">53</span></a></li>
                            <li><a href="#" class="list-group-item link-dark border-0 mt-1 ms-4">Ropa de mujer <span
                                        class="badge bg-dark ms-4">200</span></a></li>
                            <li><a href="#" class="list-group-item link-dark border-0 mt-1 ms-4">Ropa de hombre <span
                                        class="badge bg-dark ms-4">25</span></a></li>
                            <li><a href="#" class="list-group-item link-dark border-0 mt-1 ms-4">Muebles <span
                                        class="badge bg-dark ms-4">25</span></a></li>
                            <li><a href="#" class="list-group-item link-dark border-0 mt-1 ms-4">Electrónicos <span
                                        class="badge bg-dark ms-4">25</span></a></li>
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                        data-bs-target="#orders-collapse" aria-expanded="false">
                        <i class="bi bi-grid-fill me-2"></i>Categorías
                    </button>
                    <div class="collapse" id="orders-collapse" style="">
                        <ul class="btn-toggle-nav list-group list-group-flush list-unstyled fw-normal pb-1 small">
                            <li><a href="#" class="list-group-item link-dark border-0 mt-1 ms-4">Antiguedades <span
                                        class="badge bg-dark ms-4">53</span></a></li>
                            <li><a href="#" class="list-group-item link-dark border-0 mt-1 ms-4">Accesorios <span
                                        class="badge bg-dark ms-4">200</span></a></li>
                            <li><a href="#" class="list-group-item link-dark border-0 mt-1 ms-4">Arte <span
                                        class="badge bg-dark ms-4">25</span></a></li>
                            <li><a href="#" class="list-group-item link-dark border-0 mt-1 ms-4">Bebés <span
                                        class="badge bg-dark ms-4">25</span></a></li>
                            <li><a href="#" class="list-group-item link-dark border-0 mt-1 ms-4">Electrónicos <span
                                        class="badge bg-dark ms-4">25</span></a></li>
                            <li><a href="#" class="list-group-item link-dark border-0 mt-1 ms-4">Cuidado personal <span
                                        class="badge bg-dark ms-4">25</span></a></li>
                            <li><a href="#" class="list-group-item link-dark border-0 mt-1 ms-4">Ropa de mujer <span
                                        class="badge bg-dark ms-4">25</span></a></li>
                            <li><a href="#" class="list-group-item link-dark border-0 mt-1 ms-4">Ropa de hombre <span
                                        class="badge bg-dark ms-4">25</span></a></li>
                            <li><a href="#" class="list-group-item link-dark border-0 mt-1 ms-4">Muebles <span
                                        class="badge bg-dark ms-4">25</span></a></li>
                            <li><a href="#" class="list-group-item link-dark border-0 mt-1 ms-4">Vehículos <span
                                        class="badge bg-dark ms-4">25</span></a></li>
                        </ul>
                    </div>
                </li>
                <li class="border-top my-3"></li>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                        data-bs-target="#account-collapse" aria-expanded="false">
                        Account
                    </button>
                    <div class="collapse" id="account-collapse" style="">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#" class="link-dark rounded">New...</a></li>
                            <li><a href="#" class="link-dark rounded">Profile</a></li>
                            <li><a href="#" class="link-dark rounded">Settings</a></li>
                            <li><a href="#" class="link-dark rounded">Sign out</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>