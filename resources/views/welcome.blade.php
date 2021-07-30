<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Cristofer Lopez">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="assets/css/styles.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600" rel="stylesheet">

    <!-- Ionic icons-->
    <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/public/images/favicon.png" />

    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-a11y="true" ></script>


    <title>Tesis - Metalicas Fuel </title>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <img src="assets/images/logo-dark.svg" class="logo-brand" alt="logo">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <img src="assets/public/images/menu.svg">
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#hero">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Trabajos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Acerca de Nosotros</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#testimonial">Testimonios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contactos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}"> Ingresar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="hero">
        <div class="container">
            <div class="content-center">
                <h1 class="mt-5">Trabajos de Construcción en Metal</h1>
                <p>Somos una compañía metalmecánica, que cuenta con maquinaria industrial especializada y herramientas
                    para proveer servicios al sector metalmecánico con trabajos a medida y a la industria en general.</p>
            </div>
        </div>
    </section>

    <section id="portfolio">
        <div class="container-fluid ">
            <div class="content-center">
                <h2>Trabajamos con personas especializadas, <b>trabajos de primera.</b></h2>
                <p>Metalicas Fuel, establece como política de calidad fomentar la satisfacción de las necesidades de
                nuestros clientes, mediante la fabricación de productos y prestación de servicios, de acuerdo
                a sus requerimientos técnicos y plazos deentrega establecidos con altos estandares de calidad.</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="portfolio-container">
                        <div class="portfolio-details">
                            <a href="#">
                                <h2>Estructura de Puentes</h2>
                            </a>

                        </div>
                        <img src="assets/images/portfolio-01.jpg" class="img-fluid" alt="Portfolio 01">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="portfolio-container">
                        <div class="portfolio-details">
                            <a href="#">
                                <h2>Cubiertas</h2>
                            </a>

                        </div>
                        <img src="assets/images/portfolio-02.jpg" class="img-fluid" alt="Portfolio 02">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="portfolio-container">
                        <div class="portfolio-details">
                            <a href="#">
                                <h2>Puentes Peatonales</h2>
                            </a>

                        </div>
                        <img src="assets/images/portfolio-03.jpg" class="img-fluid" alt="Portfolio 03">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="portfolio-container">
                        <div class="portfolio-details">
                            <a href="#">
                                <h2>Pedidos personalizados</h2>
                            </a>

                        </div>
                        <img src="assets/images/portfolio-04.jpg" class="img-fluid" alt="Portfolio 04">
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <p class="">Muchas cosas más... </p>
                <a href="#" class="text-dark"><b>Pregunta por nuestro catalogo de productos.</b></a>
            </div>
        </div>
    </section>

    <section id="team" class="bgLightGrey">
        <div class="container p-3 mb-2 bg-light text-dark">
            <div class="content-center">
                <h2>Tranquilo, <b>estas en buenas manos...</b></h2>
                <p>Experiencia, tecnología e innovación continua, ayudan en nuestra calidad de trabajo
                    para otorgar las mejores garantías de nuestro producto.
                </p>
            </div>
            <div class="row">
                <div class="col-md-4 rounded mx-auto d-block">
                    <div class="member-container">
                        <div class="member-details">
                            <h5>Fernando Fuel</h5>
                            <span>Gerente Propietario</span>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="#"><img src="assets/images/instagram.svg" class="img-fluid rounded mx-auto d-block"></a></li>
                                <li class="list-inline-item"><a href="#"><img src="assets/images/facebook.svg" class="img-fluid rounded mx-auto d-block"></a></li>
                            </ul>
                        </div>
                        <img src="assets/images/member-03.jpg" class="img-fluid rounded mx-auto d-block" >
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="testimonial" class="divider">
        <div class="container">
            <div class="content-center">
                <h2>Algunas palabras de <b>nuestros clientes...</b></h2>
                <p>Todos nuestros clientes han dejado un pequeño comentario de la
                    calidad de nuestro trabajo, como organización, al entregar
                    todas las obras en las fechas específicas, cumpliendo siempre
                    los plazos asignados y presupuestos previstos.</p>
            </div>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="carousel-container">
                            <p>Un trabajo impecable, al momento de la entrega con el tiempo previsto muy cumplidos, una excelente organización.
                            </p>
                            <div class="rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                </ul>
                            </div>
                            <div class="testimonial-user">
                                <div class="row">
                                    <div class="col-md-3 col-3">
                                        <img src="assets/images/member-01.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-md-9 col-9">
                                        <h6>Marissa Arévalo</h6>
                                        <span>Magap</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-container">
                            <p>Un equipo bastante pequeño pero eficaz, al hacer un trabajo tan grande para
                                el cambio de una estructura bastante rápidos en su trabajo.</p>
                            <div class="rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                </ul>
                            </div>
                            <div class="testimonial-user">
                                <div class="row">
                                    <div class="col-md-3 col-3">
                                        <img src="assets/images/member-02.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-md-9 col-9">
                                        <h6>Mary Ibarra</h6>
                                        <span>Imbauto</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-container">
                            <p>He tenido muchos inconvenientes con los plazos y presupuestos establecidos,
                                pero al momento de entregar la estructura se cumplieron todas mis expectativas.</p>
                            <div class="rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                    <li class="list-inline-item"><i class="icon ion-md-star"></i></li>
                                </ul>
                            </div>
                            <div class="testimonial-user">
                                <div class="row">
                                    <div class="col-md-3 col-3">
                                        <img src="assets/mages/member-03.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-md-9 col-9">
                                        <h6>Oscar Troya</h6>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <div class="control-button">
                        <img src="assets/images/arrow-borderless-left.svg" class="img-fluid">
                    </div>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <div class="control-button">
                        <img src="assets/images/arrow-borderless-right.svg" class="img-fluid">
                    </div>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>



    <section id="contact" class="mt-24">
        <h1 class="text-black text-center text-3xl mb-6">CONTACTO</h1>
        <div class="container p-3 mb-2 bg-light text-dark">
            <div class="row">
                <div class="col-md-6 mt-4">
                    <h3>¿Listo para concretar tu proyecto? <b>háganoslo saber.</b></h3>
                    <p>Contactos al cel: 0988513893. </p>
                    <p> metalicas_fuel@gmail.com </p>
                    <p>Teléfono convencional 06 2987-717. </p>
                    <p>Calles Juan José Flores via al Aeropuerto</p>
                    <p>Tulcán - Ecuador. </p>
                    <p>Contactos en whatsapp.</p>
                    <a target="_blank" href="https://api.whatsapp.com/send?phone=[+593][0969399664]&text=Deseo%20información%20acerca%20de">
                        <i class="fab fa-whatsapp fa-3x" style="color: green">
                        </i>
                    </a>


                </div>
                <div class="col-md-6 mt-4">
                    @if (Session::has('message_sent'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('message_sent')}}
                        </div>
                    @endif
                    <form method="POST" action="{{route('sendemail')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="numero" id="numero" placeholder="Número">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="msg" id="msg" class="form-control" placeholder="Mensaje"></textarea>
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary full-width">Contactar</button>
                                    {{-- <a href="" class="btn btn-primary full-width">Contactar para ventas</a> --}}
                                </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <footer class="bgDark">
        <div class="container">
            <img src="assets/images/logo-light.svg" class="logo-brand rounded mx-auto d-block" alt="logo">
            <a class="font-weight-bold" target="_blank" rel="noopener">Metálicas Fuel</a>
            <ul class="list-inline">
                <li class="list-inline-item footer-menu"><a href="#hero">Inicio</a></li>
                <li class="list-inline-item footer-menu"><a href="#portfolio">Trabajos</a></li>
                <li class="list-inline-item footer-menu"><a href="#testimonial">Acerca de Nosotros</a></li>
                <li class="list-inline-item footer-menu"><a href="#contact">Contactos</a></li>
            </ul>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#"><img src="assets/images/instagram.svg" class="img-fluid"></a></li>
                <li class="list-inline-item"><a href="#"><img src="assets/images/twitter.svg" class="img-fluid"></a></li>
                <li class="list-inline-item"><a href="#"><img src="assets/images/facebook.svg" class="img-fluid"></a></li>
            </ul>
            <small>©2021 Todos los derechos reservados. Creado por <a class="font-weight-bold" target="_blank"
            rel="noopener">Cristofer López</a></small>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>


