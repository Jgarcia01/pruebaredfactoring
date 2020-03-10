<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'assets/templates/required.php';?>
    <title>RED FACTORING 100</title>
</head>
<body>
    
    <?php include 'assets/templates/nav.php';?>

    <!--Carrousel-->
    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="container-fluid">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
            </div>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active" style="background-image: url('assets/img/cedente.jpg')">
                    <div class="carousel-caption d-none d-md-block mb-3">
                        <h2>
                            ¡La forma correcta y sencilla de generar tu complemento de pago
                            para factoraje!
                        </h2>
                        <button type="button" class="btn btn-carousel">
                            Comprar Ahora
                        </button>
                    </div>
                </div>
                <div class="carousel-item"
                    style="background-image: url('assets/img/rugp.jpeg'); background-size:100% 100%">
                    <a href="assets/pages/cedente-principal.html">
                        <div class="imagen-link"></div>
                    </a>
                    <div class="carousel-caption d-none d-md-block mb-3"></div>
                </div>
                <div class="carousel-item"
                    style="background-image: url('assets/img/tercera.jpg'); background-size:100% 100%">
                    <div class="carousel-caption d-none d-md-block mb-3">
                        <h1>Optimiza tu tiempo y evita errores de emisión</h1>
                        <h2>
                            Conozca las ventajas de
                            <span class="logo-f-2">Red Factoring 100</span>
                        </h2>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url('assets/img/cuarta.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="carousel-caption d-none d-md-block mb-0">
                            <h2>
                                ¡RF100 la plataforma donde Factoraje, Cedente y Deudor están
                                sincronizados!
                            </h2>
                            <button type="button" class="btn btn-carousel">
                                Comprar Ahora
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--ELECCION-->
    <div class="container-fluid">
        <div class="row row-seleccion mt-4">
            <div class="col cedente-sec pr-0 pl-0">
                <figure class="seleccion">
                    <img class="cedente-img" src="assets/img/cedente.jpg" />
                    <span class="cedente-span"><a href="assets/pages/cedente-principal.html">CEDENTE</a></span>
                </figure>
            </div>
            <div class="col factoraje-sec pl-0 pr-0">
                <figure class="seleccion">
                    <img class="factoraje-img" src="assets/img/factoraje.jpg" />
                    <span class="factoraje-span"><a href="assets/pages/factoraje-principal.html">
                            FACTORAJE</a></span>
                </figure>
            </div>
        </div>
    </div>
    <!--Titulo de eleccion-->
    <div class="container-fluid">
        <div class="row mt-3   mb-3">
            <div class="col text-center mb-1">
                <h2>¡LA FORMA MÁS SENCILLA DE GENERAR TU COMPLEMENTO DE PAGO!</h2>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col text-center mb-3">
                <h4>
                    Red Factoring 100 es la plataforma digital que ayuda en los procesos
                    de generación de complementos de pagos para empresas de factoraje.
                </h4>
            </div>
        </div>
    </div>
    <!--Video-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-6 mr-0 ml-0 pl-4 pr-4 pt-2 texto-video">
                <!--Ventajas-->
                <h4>¿Por qué usar Red Factoring 100?</h4>
                <br />
                <ul>
                    <li>
                        <h6>
                            Elimina la complejidad de generar el complemento de pago y la
                            reduce a un clic.
                        </h6>
                    </li>
                    <li>
                        <h6>
                            Timbra y envía complementos de pago directamente con su
                            receptor.
                        </h6>
                    </li>
                    <li>
                        <h6>
                            Validación de estructura conforme a los requerimientos del SAT y
                            la Financiera.
                        </h6>
                    </li>
                    <li>
                        <h6>
                            Evita la necesidad de capturar manualmente el folio fiscal UUID.
                        </h6>
                    </li>
                    <li>
                        <h6>
                            Evita el tener que asociar manualmente el detalle de las
                            cesiones operadas con montos, intereses y comisiones.
                        </h6>
                    </li>
                    <li>
                        <h6>Se consideran operaciones NAFIN.</h6>
                    </li>
                    <li>
                        <h6>
                            Contempla la operación de otros documentos no basados en
                            facturas.
                        </h6>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-lg-6 mb-2 mr-0 d-flex pl-0 pr-0">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/h3XQMv8RP5M" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>

    <?php include 'assets/templates/footer.php';?>

</body>
