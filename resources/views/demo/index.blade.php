<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Jesús Zamora Jiménez</title>

    <!-- Favicon-->
	<link rel="shortcut icon" href="{{ asset('theme/img/favicon.png') }}" >

    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('theme/lib/magnific-popup/magnific-popup.css') }} ">
    <link rel="stylesheet" href="{{ asset('theme/lib/owl-carousel/owl.carousel.css') }} ">
    <link rel="stylesheet" href="{{ asset('theme/lib/owl-carousel/owl.theme.css') }} ">
    <link rel="stylesheet" href="{{ asset('theme/css/style.css') }} ">
    <link rel="stylesheet" href="{{ asset('theme/css/responsive.css') }} ">

    <!-- Modernizr -->
    <script src="{{ asset('theme/js/modernizr.js') }}"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

  <!-- Preloader --> 
    <div id="preloader">
      <div class="loader"></div>    
    </div><!--preloader end-->

    <div class="page-container">

        <!-- Profile Page -->
            <div class="single-page">

                <!-- Profile Page Title-->
                <div class="page-title">
                    <span><i class="fa fa-user fa-3x"></i></span>
                    <h2>Perfil</h2>
                    <p class="menu-desc">Sobre mi</p>
                </div>
                <!-- .page-title -->

		    <!-- Profile Page Contents-->
                <div class="page-info container-fluid">
                 <!-- about me -->
                    <div class="row about-me">
                        <div class="col-sm-5 col-sm-offset-1 profile-image">
                            <div class="pp-container">
                                <img src="{{ asset('theme/img/avatar.png') }}" alt="">
                            </div>
                            <h2><span>Jesús</span><span id="espaciado">Zamora Jiménez</span></h2>
                            <h3>Informático &amp; desarrollador web</h3>
                        
                        </div>
                        <!--.Profile image end-->

                        <!-- bio-->
                        <div class="col-sm-6 bio">
                            <div class="bio-inner">
                                <div class="col-md-10">
                                    <h3>¡Hola!</h3>
                                    <p>Mi nombre es Jesús y vivo en Sevilla. Desde joven, entendí la importancia de la informatica, la tecnología está presente en nuestro día a día haciendonos la vida más fácil. Por ello, estudié un grado medio de informática de Sistemas Microinformáticos y Redes que me permitió realizar 3 meses de provechosas prácticas en Heineken S.A. España, donde tuve la oportunidad de llevar a cabo tareas de reparación de diferentes equipos informáticos, mantenimiento en centro de procesamiento de datos y administración de redes y servidores en entornos Linux y Windows.</p>
                                    
                                    <p>Tras esto, me encuentro cursando el segundo año de un grado superior ASIR, Administración de Sistemas Informáticos en Red. Con él, espero adquirir las capacidades necesarias para poder administrar, configurar e implantar redes y sistemas que sigan permitiendo hacernos la vida más fácil.</p>

                                    <div class="buttons">
                                        <a href="mailto:jsus365@gmail.com" class="btn hire-me">Escríbeme</a>
                                        <a href="{{ asset('theme/curriculum.pdf') }}" target="_blank" class="btn download-resume">Descargar curriculum</a>
                                    </div>

                                </div>
                                </div>
                        </div>
                        <!-- .bio End -->
                    </div>
                    <!-- .about-me end-->

                    <!-- services-->
                    <div class="row services">
                        <div class="over-div"></div>
                        <div class="sec-divider"></div>
                        <h2 class="section-title">Habilidades</h2>

                        <div class="container service-list">

                            <div class="row">
                                <div class="col-sm-6 col-md-3 service">
                                    <span><i class="fa fa-lightbulb-o fa-3x"></i></span>
                                    <h3>Diseño web</h3>
                                    <p>Maquetación de las ideas, imágenes o información para desarrollar un sitio web.</p>
                                </div> <!--single service -->

                                <div class="col-sm-6 col-md-3 service">
                                    <span><i class="fa fa-code fa-3x"></i></span>
                                    <h3>Web Development</h3>
                                    <p>Desarrollo de sitios webs a medida mediante Boopstrap o edición de código de pequeñas aplicaciones.</p>
                                </div><!--single service -->

                                <div class="col-sm-6 col-md-3 service">
                                    <span><i class="fa fa-database fa-3x"></i></span>
                                    <h3>Bases de datos</h3>
                                    <p>Gestión y administración de bases de datos en entornos MySQL y Oracle.</p>
                                </div><!--single service -->

                                <div class="col-sm-6 col-md-3 service">
                                    <span><i class="fa fa-wordpress fa-3x"></i></span>
                                    <h3>WordPress</h3>
                                    <p>Conocimiento medio-alto para la implementación y edición de temas, plugins, copias de seguridad y migraciones.</p>
                                </div><!--single service -->
                            </div> <!-- row of services -->
                            
                            
                            
                            <!--Añado otra fila igual -->
                             <!-- row of services -->
                        </div> <!-- service list-->

                    </div>
                    
                    <!-- #Services end-->
                    

                    <div class="row fun-facts">
                        
                        <ul>
                            <li>
                                <h3><i class="fa fa-android"></i></h3>
                                <h5>Informática</h5>
                            </li>
                            <li>
                                <h3><i class="fa fa-plane"></i></h3>
                                <h5>Viajar</h5>
                            </li>
                            <li>
                                <h3><i class="fa fa-music"></i></h3>
                                <h5>Música</h5>
                            </li>
                            <li>
                                <h3><i class="fa fa-picture-o"></i></h3>
                                <h5>Arte</h5>
                            </li>
                            <li>
                                <h3><i class="fa fa-film"></i></h3>
                                <h5>Cine y series</h5>
                            </li>
                        </ul>
                    </div>
                    <!-- Fun facts end-->

                    <div class="row footer">
                        <a href="{{ asset('theme/https://kramery.github.io/') }}">Jesús Zamora </a> <span>Copyright &copy; </span>
                    </div>
                    <!--footer end-->

                </div>
                <!-- .page-info -->
            </div> <!-- Single Page end -->


            <!-- Resume Page -->

            <div class="single-page">
                <div class="page-title">
                    <span><i class="fa fa-file-text fa-3x"></i></span>
                    <h2>Currículum</h2>
                    <p class="menu-desc">Cualificaciones académicas y experiencia</p>
                </div>
                <!-- .page-title -->

			<!-- Resume Page Contents-->
                <div class="page-info container-fluid">
                    <div class="row resume">
                        <div class="over-div"></div>
                        <div class="container">
                            <div class="col-xs-6 education">
                                <h2>- Educación -</h2>

                                <ul class="edu-list">
                                    <li>
                                        <h3>C.F.G.S Administración de Sistemas Informáticos en Red</h3>
                                        <h4>IES Triana, Sevilla</h4>
                                        <span>2015 - Actualidad</span>
                                        
                                    </li>
                                    
                                    <li>
                                        <h3>C.F.G.M Sistemas Microinformáticos y Redes</h3>
                                        <h4>IES Ramón del Valle-Inclán, Sevilla</h4>
                                        <span>2010 - 2012</span>
                                       
                                    </li>
                                    
                                    <li>
                                        <h3>Educación Secundaria Obligatoria</h3>
                                        <h4>IES Bellavista, Sevilla</h4>
                                        <span>2006 - 2010</span>
                                        
                                    </li>
                                    
                                    
                                </ul>
                            </div>

                            <div class="col-xs-6 employment">
                                <h2>- Experiencia -</h2>

                                <ul class="employment-list">
                                    <li>
                                        <h3>La Cara Digital</h3>
                                        <h4>Desarrollador web y soporte técnico</h4>
                                        <span>Junio 2016 - Mayo 2017</span>
                                        <p>Desarrollando y diseñando sitios webs mediante gestores de
contenidos WordPress y a medida, cumpliendo con los estándares de posicionamiento en motores de búsqueda y adaptabilidad web. También dando soporte técnico a clientes.</p>
                                    </li>
                                    <li>
                                        <h3>Heineken S.A.</h3>
                                        <h4>Departamento de Microinformática</h4>
                                        <span>Abril - Julio 2012</span>
                                        <p>Llevando a cabo las tareas de reparación de diferentes equipos informáticos, mantenimiento en centro de procesamiento de datos y administración de redes y servidores en entornos Linux y Windows.</p>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div> <!-- .container-->
                    </div>
                    <!-- Resume section end -->

                    <div class="row skills">
                        <div class="over-div"></div>
                        <div class="sec-divider"></div>
                        <h2 class="section-title">My Key Skills</h2>

                            <div class='skill-container container'>
                                <div class='row'>
                                    <div class='col-xs-6 col-sm-4 skill'>
                                        <figure>
                                            <canvas height='150' id='html_css' width='150'></canvas>
                                            <figcaption>
                                                Semantic HTML5 &amp; CSS3
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class='col-xs-6 col-sm-4 skill'>
                                        <figure>
                                            <canvas height='150' id='sass' width='150'></canvas>
                                            <figcaption>
                                                Sass
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class='col-xs-6 col-sm-4 skill'>
                                        <figure>
                                            <canvas height='150' id='jquery' width='150'></canvas>
                                            <figcaption>
                                                jQuery
                                            </figcaption>
                                        </figure>
                                    </div>

                                    <div class='col-xs-6 col-sm-4 skill'>
                                        <figure>
                                            <canvas height='150' id='rails' width='150'></canvas>
                                            <figcaption>
                                                Ruby on Rails
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class='col-xs-6 col-sm-4 skill'>
                                        <figure>
                                            <canvas height='150' id='backbone' width='150'></canvas>
                                            <figcaption>
                                                Backbone.js
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class='col-xs-6 col-sm-4 skill'>
                                        <figure>
                                            <canvas height='150' id='photoshop' width='150'></canvas>
                                            <figcaption>
                                                Photoshop
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div> <!-- row end--> 
                            </div> <!-- Skill container -->
                    </div>
                    <!-- Skills Section end -->

                    <div class="row recognition">
                        <div class="col-sm-6 rec-desc">
                            <div class="rec-inner">
                                <h2>Recognition</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum. </p>
                            </div>
                        </div>
                        <div class="col-sm-6 rec-list">
                            <ul>
                                <li>
                                    <span class="fa fa-trophy fa-5x pull-left fa-fw"></span>
                                    <h3>App Development Contest</h3>
                                    <h5>Winner</h5>
                                    <h4>Dhaka, Bangladesh</h4>
                                </li>

                                <li>
                                    <span class="fa fa-trophy fa-5x pull-left fa-fw"></span>
                                    <h3>Best Front-End Developers Award</h3>
                                    <h5>Top Front-End Developer</h5>
                                    <h4>San Fransisco, USA</h4>
                                </li>

                                <li>
                                    <span class="fa fa-trophy fa-5x pull-left fa-fw"></span>
                                    <h3>Awesome UI/UX Designers Award</h3>
                                    <h5>Best UI/UX Designer</h5>
                                    <h4>New York, USA</h4>
                                </li>

                                <li>
                                    <span class="fa fa-microphone fa-5x pull-left fa-fw"></span>
                                    <h3>UX Conference</h3>
                                    <h5>Speaker</h5>
                                    <h4>Dhaka, Bangladesh</h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Recognition section end -->

                    <div class="row footer">
                        <a href="https://kramery.github.io/">Jesús Zamora </a> <span>Copyright &copy; </span>
                    </div>
                    <!--footer end-->

                </div>
                <!-- .page-info -->
            </div><!-- Single Page end -->


            <!-- Portfolio Page -->

            <div class="single-page">
                <div class="page-title">
                    <span><i class="fa fa-briefcase fa-3x"></i></span>
                    <h2>Portfolio</h2>
                    <p class="menu-desc">Acerca de mi trabajo</p>
                </div>
                <!-- .page-title -->

			<!-- Portfolio Page Contents-->
                <div class="page-info container-fluid">
                    <div class="row portfolios">
                        <div class="portfolio-container">

                            <div class="controls">
                                <button class="filter" data-filter="all">All</button>
                                <button class="filter" data-filter=".category-1">Web Design</button>
                                <button class="filter" data-filter=".category-2">App Development</button>
                                <button class="filter" data-filter=".category-3">Gaphic Design</button>
                            </div>

                            <div id="portfolio" class="portfolio-items">

                                <!--Single portfolio item -->
                                <div class="col-sm-6 col-md-4 mix category-1" data-myorder="Web Design">
                                    <figure class="effect-roxy">
                                        <img src="{{ asset('theme/img/portfolio/thumb/p-1.jpg') }}" alt="" />
                                        <figcaption>
                                            <h2>Project <span>Title</span></h2>
                                            <p>Your Awesome Project Description</p>
                                            <a href="#portfolio9" class="open-portfolio" >Explore</a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <!-- Popup content -->
                                <div id="portfolio9" class="white-popup mfp-hide">
                                    <img src="{{ asset('theme/img/portfolio/p-1.jpg') }}" alt="Portfolio Image">
                                    <h2 class="project-title">Awesome Project Title</h2>
                                    <p class="project-desc">Lorem ipsum dolor sit amet, quo ut reque putent. Per saperet torquatos temporibus te. Nam nulla fabellas similique id, eruditi accusamus sit ex. Modo aliquid elaboraret nam id, in vel illud numquam. Evertitur consetetur voluptatum pri id, in scaevola vulputate cum. Ea vis mazim accusam, vix ea tale appareat.</p>
                                    <a class="project-url btn" href="#">See Live</a>
                                </div>
                                <!--.Single item end-->

                                <!--Single portfolio item -->
                                <div class="col-sm-6 col-md-4 mix category-2" data-myorder="App Development">
                                    <figure class="effect-roxy">
                                        <img src="{{ asset('theme/img/portfolio/thumb/p-2.jpg') }}" alt="" />
                                        <figcaption>
                                            <h2>Project <span>Title</span></h2>
                                            <p>Your Awesome Project Description</p>
                                            <a href="#portfolio2" class="open-portfolio" >Explore</a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <!-- Popup content -->
                                <div id="portfolio2" class="white-popup mfp-hide">
                                    <img src="{{ asset('theme/img/portfolio/p-2.jpg') }}" alt="Portfolio Image">
                                    <h2 class="project-title">Awesome Project Title</h2>
                                    <p class="project-desc">Lorem ipsum dolor sit amet, quo ut reque putent. Per saperet torquatos temporibus te. Nam nulla fabellas similique id, eruditi accusamus sit ex. Modo aliquid elaboraret nam id, in vel illud numquam. Evertitur consetetur voluptatum pri id, in scaevola vulputate cum. Ea vis mazim accusam, vix ea tale appareat.</p>
                                    <a class="project-url btn" href="#">See Live</a>
                                </div>
                                <!--.Single item end-->

                                <!--Single portfolio item -->
                                <div class="col-sm-6 col-md-4 mix category-3" data-myorder="Graphic Design">
                                    <figure class="effect-roxy">
                                        <img src="{{ asset('theme/img/portfolio/thumb/p-3.jpg') }}" alt="" />
                                        <figcaption>
                                            <h2>Project <span>Title</span></h2>
                                            <p>Your Awesome Project Description</p>
                                            <a href="#portfolio3" class="open-portfolio" >Explore</a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <!-- Popup content -->
                                <div id="portfolio3" class="white-popup mfp-hide">
                                    <img src="{{ asset('theme/img/portfolio/p-3.jpg') }}" alt="Portfolio Image">
                                    <h2 class="project-title">Awesome Project Title</h2>
                                    <p class="project-desc">Lorem ipsum dolor sit amet, quo ut reque putent. Per saperet torquatos temporibus te. Nam nulla fabellas similique id, eruditi accusamus sit ex. Modo aliquid elaboraret nam id, in vel illud numquam. Evertitur consetetur voluptatum pri id, in scaevola vulputate cum. Ea vis mazim accusam, vix ea tale appareat.</p>
                                    <a class="project-url btn" href="#">See Live</a>
                                </div>
                                <!--.Single item end-->

                                <!--Single portfolio item -->
                                <div class="col-sm-6 col-md-4 mix category-1" data-myorder="Web Design">
                                    <figure class="effect-roxy">
                                        <img src="{{ asset('theme/img/portfolio/thumb/p-4.jpg') }}" alt="" />
                                        <figcaption>
                                            <h2>Project <span>Title</span></h2>
                                            <p>Your Awesome Project Description</p>
                                            <a href="#portfolio4" class="open-portfolio" >Explore</a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <!-- Popup content -->
                                <div id="portfolio4" class="white-popup mfp-hide">
                                    <img src="{{ asset('theme/img/portfolio/p-4.jpg') }}" alt="Portfolio Image">
                                    <h2 class="project-title">Awesome Project Title</h2>
                                    <p class="project-desc">Lorem ipsum dolor sit amet, quo ut reque putent. Per saperet torquatos temporibus te. Nam nulla fabellas similique id, eruditi accusamus sit ex. Modo aliquid elaboraret nam id, in vel illud numquam. Evertitur consetetur voluptatum pri id, in scaevola vulputate cum. Ea vis mazim accusam, vix ea tale appareat.</p>
                                    <a class="project-url btn" href="#">See Live</a>
                                </div>
                                <!--.Single item end-->

                                <!--Single portfolio item -->
                                <div class="col-sm-6 col-md-4 mix category-2" data-myorder="App Development">
                                    <figure class="effect-roxy">
                                        <img src="{{ asset('theme/img/portfolio/thumb/p-5.jpg') }}" alt="" />
                                        <figcaption>
                                            <h2>Project <span>Title</span></h2>
                                            <p>Your Awesome Project Description</p>
                                            <a href="#portfolio5" class="open-portfolio" >Explore</a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <!-- Popup content -->
                                <div id="portfolio5" class="white-popup mfp-hide">
                                    <img src="{{ asset('theme/img/portfolio/p-5.jpg') }}" alt="Portfolio Image">
                                    <h2 class="project-title">Awesome Project Title</h2>
                                    <p class="project-desc">Lorem ipsum dolor sit amet, quo ut reque putent. Per saperet torquatos temporibus te. Nam nulla fabellas similique id, eruditi accusamus sit ex. Modo aliquid elaboraret nam id, in vel illud numquam. Evertitur consetetur voluptatum pri id, in scaevola vulputate cum. Ea vis mazim accusam, vix ea tale appareat.</p>
                                    <a class="project-url btn" href="#">See Live</a>
                                </div>
                                <!--.Single item end-->

                                <!--Single portfolio item -->
                                <div class="col-sm-6 col-md-4 mix category-3" data-myorder="Graphic Design">
                                    <figure class="effect-roxy">
                                        <img src="{{ asset('theme/img/portfolio/thumb/p-6.jpg') }}" alt="" />
                                        <figcaption>
                                            <h2>Project <span>Title</span></h2>
                                            <p>Your Awesome Project Description</p>
                                            <a href="#portfolio6" class="open-portfolio" >Explore</a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <!-- Popup content -->
                                <div id="portfolio6" class="white-popup mfp-hide">
                                    <img src="{{ asset('theme/img/portfolio/p-6.jpg') }}" alt="Portfolio Image">
                                    <h2 class="project-title">Awesome Project Title</h2>
                                    <p class="project-desc">Lorem ipsum dolor sit amet, quo ut reque putent. Per saperet torquatos temporibus te. Nam nulla fabellas similique id, eruditi accusamus sit ex. Modo aliquid elaboraret nam id, in vel illud numquam. Evertitur consetetur voluptatum pri id, in scaevola vulputate cum. Ea vis mazim accusam, vix ea tale appareat.</p>
                                    <a class="project-url btn" href="#">See Live</a>
                                </div>
                                <!--.Single item end-->

                                <!--Single portfolio item -->
                                <div class="col-sm-6 col-md-4 mix category-1" data-myorder="Graphic Design">
                                    <figure class="effect-roxy">
                                        <img src="{{ asset('theme/img/portfolio/thumb/p-7.jpg') }}" alt="" />
                                        <figcaption>
                                            <h2>Project <span>Title</span></h2>
                                            <p>Your Awesome Project Description</p>
                                            <a href="#portfolio7" class="open-portfolio" >Explore</a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <!-- Popup content -->
                                <div id="portfolio7" class="white-popup mfp-hide">
                                    <img src="{{ asset('theme/img/portfolio/p-7.jpg') }}" alt="Portfolio Image">
                                    <h2 class="project-title">Awesome Project Title</h2>
                                    <p class="project-desc">Lorem ipsum dolor sit amet, quo ut reque putent. Per saperet torquatos temporibus te. Nam nulla fabellas similique id, eruditi accusamus sit ex. Modo aliquid elaboraret nam id, in vel illud numquam. Evertitur consetetur voluptatum pri id, in scaevola vulputate cum. Ea vis mazim accusam, vix ea tale appareat.</p>
                                    <a class="project-url btn" href="#">See Live</a>
                                </div>
                                <!--.Single item end-->

                                <!--Single portfolio item -->
                                <div class="col-sm-6 col-md-4 mix category-2" data-myorder="Graphic Design">
                                    <figure class="effect-roxy">
                                        <img src="{{ asset('theme/img/portfolio/thumb/p-8.jpg') }}" alt="" />
                                        <figcaption>
                                            <h2>Project <span>Title</span></h2>
                                            <p>Your Awesome Project Description</p>
                                            <a href="#portfolio8" class="open-portfolio" >Explore</a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <!-- Popup content -->
                                <div id="portfolio8" class="white-popup mfp-hide">
                                    <img src="{{ asset('theme/img/portfolio/p-8.jpg') }}" alt="Portfolio Image">
                                    <h2 class="project-title">Awesome Project Title</h2>
                                    <p class="project-desc">Lorem ipsum dolor sit amet, quo ut reque putent. Per saperet torquatos temporibus te. Nam nulla fabellas similique id, eruditi accusamus sit ex. Modo aliquid elaboraret nam id, in vel illud numquam. Evertitur consetetur voluptatum pri id, in scaevola vulputate cum. Ea vis mazim accusam, vix ea tale appareat.</p>
                                    <a class="project-url btn" href="#">See Live</a>
                                </div>
                                <!--.Single item end-->
                                
                                <!--Single portfolio item -->
                                <div class="col-sm-6 col-md-4 mix category-1" data-myorder="Web Design">
                                    <figure class="effect-roxy">
                                        <img src="{{ asset('theme/img/portfolio/thumb/p-1.jpg') }}" alt="" />
                                        <figcaption>
                                            <h2>Project <span>Title</span></h2>
                                            <p>Your Awesome Project Description</p>
                                            <a href="#portfolio1" class="open-portfolio" >Explore</a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <!-- Popup content -->
                                <div id="portfolio1" class="white-popup mfp-hide">
                                    <img src="{{ asset('theme/img/portfolio/p-1.jpg') }}" alt="Portfolio Image">
                                    <h2 class="project-title">Awesome Project Title</h2>
                                    <p class="project-desc">Lorem ipsum dolor sit amet, quo ut reque putent. Per saperet torquatos temporibus te. Nam nulla fabellas similique id, eruditi accusamus sit ex. Modo aliquid elaboraret nam id, in vel illud numquam. Evertitur consetetur voluptatum pri id, in scaevola vulputate cum. Ea vis mazim accusam, vix ea tale appareat.</p>
                                    <a class="project-url btn" href="#">See Live</a>
                                </div>
                                <!--.Single item end-->
                            </div>

                        </div>
                        <!-- .portfolio-container -->
                    </div>
                    <!-- portfolio section end-->


                    <!-- Testimonials Section
			   ================================================== -->
                    <div class="row testimonials">
                        <div class="over-div"></div>
                        <div class="sec-divider"></div>
                        <h2 class="section-title">Some of my happy clients</h2>

                        <div class="col-md-8 col-md-offset-2 text-container">
                            <div id="testimonial-slides" class="owl-carousel">
                                <div>
                                    <blockquote>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</p>
                                        <cite> Jonathan Doe</cite>
                                    </blockquote>
                                </div>
                                <!-- Single testimonial -->

                                <div>
                                    <blockquote>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</p>
                                        <cite> Jane Doe</cite>
                                    </blockquote>
                                </div>
                                <!-- Single testimonial -->

                                <div>
                                    <blockquote>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</p>
                                        <cite> John Doe</cite>
                                    </blockquote>
                                </div>
                                <!-- Single testimonial -->

                            </div>
                            <!-- Owl Carousel End -->
                        </div>
                        <!-- text-container ends -->

                    </div>
                    <!-- Testimonials Section End-->


                    <div class="row fun-facts">
                        <ul>
                            <li>
                                <h3>50+</h3>
                                <h5>Happy Clients</h5>
                            </li>
                            <li>
                                <h3> <i class="fa fa-bicycle"></i> </h3>
                                <h5>Cyclist</h5>
                            </li>
                            <li>
                                <h3>100+</h3>
                                <h5>Projects Done</h5>
                            </li>
                            <li>
                                <h3> <i class="fa fa-camera-retro"></i> </h3>
                                <h5>Photographer</h5>
                            </li>
                            <li>
                                <h3>200+</h3>
                                <h5>Coffee Cups</h5>
                            </li>
                        </ul>
                    </div>
                    <!-- Fun facts end-->

                    <div class="row footer">
                        <a href="https://kramery.github.io/">Jesús Zamora</a> <span>Copyright &copy; 2017 </span>
                    </div>
                </div>
                <!-- .page-info -->
            </div><!-- Single Page end -->


            <!-- Contact Page-->

            <div class="single-page">
                <div class="page-title">
                    <span><i class="fa fa-paper-plane fa-3x"></i></span>
                    <h2>Contacto</h2>
                    <p class="menu-desc">¡Escríbeme!</p>
                </div>
                <!-- .page-title -->

			<!-- Contact Page Contents-->
                <div class="page-info container-fluid">
                    <div class="row contact">
                        <div class="over-div"></div>
                        <div class="sec-divider"></div>
                        <h2 class="section-title">Drop me a line</h2>

                        <!-- form -->
                        <div class="row"> 
                            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 form-container">
                                <form action="#" id="contactForm" method="post" name="contactForm">
                                    <fieldset>
                                        <div>
                                            <input id="contactName" name="contactName" placeholder="Name_" size="35" type="text" value="">
                                        </div>

                                        <div>
                                            <input id="contactEmail" name="contactEmail" placeholder="Email_" size="35" type="email" value="">
                                        </div>

                                        <div>
                                            <textarea cols="5" id="contactMessage" name="contactMessage" placeholder="Message_" rows="5"></textarea>
                                        </div>

                                        <div>
                                            <!-- contact-warning -->

                                            <div id="message-warning">
                                                Error boy
                                            </div>
                                            <button class="submit">Send <i class="fa fa-angle-right"></i>
                                            </button>
                                            <span id="image-loader"><img alt="" src="{{ asset('theme/img/svg-loaders/mail-loader.svg') }}"></span>
                                        </div>
                                    </fieldset>
                                </form>
                                <!-- Form End -->
                                <!-- contact-success -->

                                <div id="message-success">
                                    <i class="fa fa-check"></i>Your message was sent, thank you!
                                    <br>
                                </div>
                            </div>
                       </div>
                        <!-- Form Container End -->


                        <div class="row social">
                            <div class="col-md-6 address">
                                <div class="row location">
                                    <div class="col-md-12 col-lg-10 col-lg-offset-1">
                                        <ul>
                                            <li>
                                                <img src="{{ asset('theme/img/icons/location-map.svg') }}" alt="">
                                                <h4>Dhaka, Bangladesh</h4>
                                            </li>
                                            <li>
                                                <img src="{{ asset('theme/img/icons/phone-icon.svg') }}" alt="">
                                                <h4>+880 123 456 789</h4>
                                            </li>
                                            <li>
                                                <img src="{{ asset('theme/img/icons/email-icon.svg') }}" alt="">
                                                <h4>mail@rupok.me</h4>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="row social-profiles">
                                    <div class="col-md-12 col-lg-9 col-lg-offset-2">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook fa-2x"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-google-plus fa-2x"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-github fa-2x"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-dribbble fa-2x"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-slideshare fa-2x"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 map-container">
                                <div id="map"></div>
                            </div>

                        </div>
                        <!--Social End-->
                    </div>
                    <!--Contact End-->
                    <div class="row footer">
                        <a href="https://kramery.github.io/">Jesús Zamora </a> <span>Copyright &copy; </span>
                    </div>

                </div>
                <!-- .page-info -->
            </div><!-- Single Page end -->

        <a href="#" class="page-close">Close</a>
        <a href="#" class="page-scroll">Scroll</a>
    </div>
    <!-- .page-container -->

    <!-- JavaScripts -->
    <script src="{{ asset('theme/js/jquery-2.1.1.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&AMP;sensor=false"></script>
    <script src="{{ asset('theme/js/gmaps.js') }}"></script>
    <script src="{{ asset('theme/lib/magnific-popup/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('theme/lib/mixitup/jquery.mixitup.js') }}"></script>
    <script src="{{ asset('theme/lib/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/0.2.0/Chart.min.js"></script>
    <script src="{{ asset('theme/js/scripts.js') }}"></script>
</body>

</html>