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

                <p class="fs-1 text text-center mt-5">Videojuegos</p>

                <div class="producto rounded p-4 mb-4" style="background-color: rgb(90, 90, 209);">
                    <div class="row">
                        <img src="assets/img/4.jpg" alt="" class="col-4 align-self-center rounded">
                        <div class="row col-8">
                            <p class="fs-3 fw-bold text text-center text-white">CALL OF DUTY</p>
                            <p class="fs-5 text text-center text-white">Call of Duty (en español: «La llamada del deber») es una serie de videojuegos de disparos en primera persona, de estilo bélico, desarrollada principal e inicialmente por Infinity Ward, Treyarch, Sledgehammer Games y en menor proporción Raven Software y distribuida por Activision. La franquicia comenzó para computadora personal y posteriormente fue expandiéndose hacia videoconsolas de sexta y séptima generación, tanto de sobremesa como portátiles, llegando así, a lanzar varios juegos derivados de forma paulatina con la serie principal. La serie inicialmente se ambientaba en la Segunda Guerra Mundial, relatando personajes y combates acaecidos durante dicho conflicto bélico. Esto fue cambiando hasta la actualidad, donde los argumentos suceden en ambientes contemporáneos y ficticios, como se puede ver en Call of Duty: Black Ops y Call of Duty: Black Ops Cold War, en la Guerra Fría, como se ve en Call of Duty: Modern Warfare, Call of Duty: Modern Warfare 2 y Call of Duty: Modern Warfare 3 en la Tercera Guerra Mundial, y en los futuros tecnológicos en Call of Duty: Black Ops 2, Call of Duty: Advanced Warfare, Call of Duty: Black Ops 3, Call of Duty: Infinite Warfare y Call of Duty: Black Ops 4. Desde Call of Duty 4: Modern Warfare hasta Call of Duty: Advanced Warfare los DLCs de las distintas entregas se lanzaban con unos meses de adelanto en las plataformas Xbox 360 y Xbox One.</p>
                            <p class="fs-2 text text-center text-white">$199.99</p>
                        </div>
                    </div>
                </div>
                <div class="producto rounded p-4 mb-4" style="background-color: rgb(90, 90, 209);">
                    <div class="row">
                        <img src="assets/img/1.jpg" alt="" class="col-4 align-self-center rounded">
                        <div class="row col-8">
                            <p class="fs-3 fw-bold text text-center text-white">MARIO KARTS</p>
                            <p class="fs-5 text text-center text-white ">■¡Compite con jugadores de todo el mundo en el modo multijugador!
Puedes competir con hasta 7 jugadores, ya sean amigos registrados en el juego, jugadores cercanos o gente de todo el mundo.

Las reglas de las carreras multijugador se pueden personalizar, de modo que podrás jugar con equipos, modificar la velocidad o cambiar el número de ranuras de objetos. ¡Puedes jugar de la manera que más te guste!

■ ¡Mario Kart da la vuelta al mundo!
Mario y compañía participarán en pistas inspiradas en distintas ciudades del mundo en esta nueva entrega de la serie Mario Kart. Pasarán una temporada (dos semanas) en cada sitio recorriendo pistas nuevas y clásicas. Además de pistas basadas en lugares icónicos del mundo real, en este juego habrá personajes temáticos que estarán relacionados con las ciudades de cada temporada.</p>
                            <p class="fs-2 text text-center text-white">$99.99</p>
                        </div>
                    </div>
                </div>
                <div class="producto rounded p-4 mb-4" style="background-color: rgb(90, 90, 209);">
                    <div class="row">
                        <img src="assets/img/2.jpg" alt="" height="60%" class="col-4 align-self-center rounded">
                        <div class="row col-8">
                            <p class="fs-3 fw-bold text text-center text-white">PUGB</p>
                            <p class="fs-5 text text-center text-white">Una obra maestra épica del género battle royale
Tienes muchos eventos para explorar
Sube a la cima en PUBG MOBILE y dispara a discreción. PUBG MOBILE es un juego móvil de battle royale original y uno de los mejores juegos de disparos móviles.

Batallas extremas en partidas de 10 minutos
Prepara tus armas de fuego, responde al llamado de la batalla en PUBG MOBILE y dispara a discreción.
Muchísimos mapas y batallas
PUBG MOBILE tiene muchos mapas y mecánicas de juego que te brindan una emocionante experiencia de supervivencia. Encuentra a tus amigos y disfruten juntos de los nuevos modos. ¡Juega como quieras y dispara a discreción!
</p>
                            <p class="fs-2 text text-center text-white">$129.99</p>
                        </div>
                    </div>
                </div>
                <div class="producto rounded p-4 mb-4" style="background-color: rgb(90, 90, 209);">
                    <div class="row">
                        <img src="assets/img/4.jpg" alt="" height="60%" class="col-4 align-self-center rounded">
                        <div class="row col-8">
                            <p class="fs-3 fw-bold text text-center text-white">NEED FOR SPEED</p>
                            <p class="fs-5 text text-center text-white">Need for Speed (NFS) es una franquicia de videojuegos de carreras publicada por Electronic Arts y actualmente desarrollada por Criterion Games. La serie se centra en las carreras callejeras ilícitas y, en general, les da el papel a los jugadores de completar varios tipos de carreras, infringiendo en más de una ocasión la ley local en persecuciones policiales. La serie lanzó su primer título, The Need for Speed en 1994. El título proviene de una famosa cita de la película de 1986 Top Gun. Desde Need for Speed: High Stakes, la serie también ha integrado la personalización de los vehículos en el juego.</p>
                            <p class="fs-2 text text-center text-white">$129.99</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>


</html>