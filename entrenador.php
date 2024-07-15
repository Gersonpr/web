<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GYM AMAZYING BAGUA</title>
    <!-- Enlaces a tus archivos CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/mision y vision.css">
    <style>
        .wow:first-child {
            visibility: hidden;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <img src="images/l1.png" alt="logo no disponible">
            <div class="logo">
                <a href="">EL MEJOR GIMNASIO DE <span>BAGUA</span></a>
            </div>
            <a href="javascript:void(0)" class="ham-burger">
                <span></span>
                <span></span>
            </a>
            <div class="nav">
                <ul>
                    <li><a href="index.php#home">INICIO</a></li>
                    <li><a href="index.php#about">PROGRAMA</a></li>
                    <li><a href="index.php#service">SERVICIOS</a></li>
                    <li><a href="index.php#class">CLASES</a></li>
                    <li><a href="index.php#nosotros">NOSOTROS</a></li>
                    <li><a href="index.php#horarios">HORARIOS</a></li>
                    <li><a href="index.php#price">PRECIOS</a></li>
                    <li><a href="index.php#ubicacion">UBICACION</a></li>
                    <li><a href="index.php#price">INGRESAR</a></li>
                </ul>
            </div>
        </div>
    </header>

    <!-- Sección de inicio -->
    <section class="holaentre wow flash" id="pantallaEntrendor">
        <div class="container">
            <h1 class="wow slideInLeft" data-wow-delay="1s">ENTRENA TU <span>CUERPO</span> CON LOS MEJORES ENTRENADORES</h1>
            <p class="wow slideInRight" data-wow-delay="1s">Trasforma tu cuerpo y cumple tu sueño de ser inigualable y saludable. ¡Regístrate ahora y sé testigo de la increíble transformación que tu cuerpo es capaz!</p>
        </div>
    </section>

    <!-- Sección del entrenador -->
    <section class="entrenador">
        <div class="container">
            <div class="content">
                <div class="box form wow slideInLeft">
                    <img src="images/entrenador2.jpg" alt="imagen no disponible" width="300" height="200" class="small-img">
                </div>
                <div class="box text wow slideInRight">
                    <h2>EXPERIENCIA DE NUESTRO ENTRENADOR</h2>
                    <p class="parrafo">Nuestro entrenador, Luis Balladares, tiene una amplia experiencia en el diseño de programas de entrenamiento personalizados para ayudar a sus clientes a alcanzar sus objetivos de acondicionamiento físico. Con su enfoque centrado en la motivación y el apoyo, Luis trabaja estrechamente con cada cliente para desarrollar planes de ejercicio adaptados a sus necesidades y capacidades individuales. Además, su conocimiento en nutrición y técnicas de entrenamiento le permite ofrecer un enfoque integral para el bienestar de sus clientes. Luis se esfuerza por crear un ambiente de entrenamiento positivo y seguro, donde cada persona se sienta motivada y empoderada para alcanzar su máximo potencial físico.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de clases personalizadas -->
    <section class="entrenador">
        <div class="container">
            <div class="content">
                <div class="box form wow slideInLeft">
                    <div class="hola">
                        <div class="image-row">
                            <div class="image-columns">
                                <img src="images/entrenamientocircuito.jpg" alt="imagen no disponible"  class="small-img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box text wow slideInRight">
                    <h2>CLASES PERSONALIZADAS QUE RECIBIRÁ</h2>
                    <ul class="li1">
                        <li class="parrafo2"><strong>Clase de Entrenamiento Funcional:</strong> Este tipo de clase se enfoca en movimientos que imitan actividades de la vida diaria y puede incluir ejercicios con peso corporal, bandas de resistencia y entrenamiento con pesas.</li>
                        <li class="parrafo2"><strong>Clase de Yoga Personalizada:</strong> Una clase de yoga adaptada a las necesidades individuales de los participantes, con énfasis en la flexibilidad, fuerza y relajación.</li>
                        <li class="parrafo2"><strong>Entrenamiento de Alta Intensidad (HIIT):</strong> Esta clase se centra en intervalos de ejercicio de alta intensidad combinados con períodos de descanso, diseñados para mejorar la resistencia y quemar calorías.</li>
                        <li class="parrafo2"><strong>Clase de Entrenamiento en Circuito:</strong> Una sesión de entrenamiento que incluye estaciones de ejercicio variadas para trabajar diferentes grupos musculares, ofreciendo un enfoque completo para el acondicionamiento físico.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de datos personales del entrenador -->
    <section class="entrenador">
        <div class="container">
            <div class="content">
                <div class="box form wow slideInLeft">
                    <img src="images/price1.jpg" alt="imagen no disponible" class="small-img">
                </div>
                <div class="box text wow slideInRight">
                    <h2>DATOS PERSONALES DE NUESTRO ENTRENADOR</h2>
                    <div class="entrenador-info">
                        <p><strong>Nombre:</strong> Luis Balladares</p>
                        <p><strong>Sexo:</strong> Masculino</p>
                        <p><strong>Edad:</strong> 25 años</p>
                        <p><strong>Especialidad:</strong> Entrenamiento de fuerza y acondicionamiento físico</p>
                        <p><strong>Correo:</strong> LuisFit@gmail.com</p>
                        <p><strong>Teléfono:</strong> 9756123123</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de contacto -->
    <section class="contact">
        <div class="container">
            <div class="content">
                <div class="box form wow slideInLeft">
                    <form action="https://formspree.io/f/xbjvnzqd" method="post">
                        <input type="text" name="nombre" placeholder="Ingrese Nombre" required>
                        <input type="email" name="email" placeholder="Ingrese Email" required>
                        <input type="text" name="telefono" placeholder="Ingrese Telefono" required>
                        <textarea name="mensaje" placeholder="Ingrese su mensaje"></textarea>
                        <button type="submit" value="enviar">Enviar</button>
                    </form>
                </div>
                <div class="box text wow slideInRight">
                    <h2>Conéctate con nosotros AMAZING GYM</h2>
                    <p class="title-p">Somos una empresa amazonense para el servicio del público, evitamos el racismo, bullying y siempre buscamos la mejor calidad de vida, especialmente para el público de Bagua Capital.</p>
                    <div class="info">
                        <ul>
                            <li><span class="fa fa-map-marker"></span> jr.29 de agosto-bagua</li>
                            <li><span class="fa fa-phone"></span> +51 975044442</li>
                            <li><span class="fa fa-envelope"></span> AmazingGym@gmail.com</li>
                        </ul>
                    </div>
                    <div class="social">
                        <a href="https://www.facebook.com/tupagina" target="_blank"><span class="fa fa-facebook"></span></a>
                        <a href="https://www.instagram.com/tuusuario/" target="_blank"><span class="fa fa-instagram"></span></a>
                        <a href="https://twitter.com/tuusuario" target="_blank"><span class="fa fa-twitter"></span></a>
                    </div>
                    <div class="copy">
                        AMZING GYM @ BAGUA_CAPITAL
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".ham-burger, .nav ul li a").click(function () {
                $(".nav").toggleClass("open");
                $(".ham-burger").toggleClass("active");
            });

            $(".accordian-container").click(function () {
                $(".accordian-container").children(".body").slideUp();
                $(".accordian-container").removeClass("active")
                $(".accordian-container").children(".head").children("span").removeClass("fa-angle-down").addClass("fa-angle-up")
                $(this).children(".body").slideDown();
                $(this).addClass("active")
                $(this).children(".head").children("span").removeClass("fa-angle-up").addClass("fa-angle-down")
            });

            $(".nav ul li a, .go-down").click(function (event) {
                var hash = this.hash;
                var target = $(hash);

                if (target.length) {
                    event.preventDefault();

                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 800, function () {
                        window.location.hash = hash;
                    });

                    $(".nav ul li a").removeClass("active");
                    $(this).addClass("active");
                }
            });
        });
        wow = new WOW({
            animateClass: 'animated',
            offset: 0,
        });
        wow.init();
    </script>
</body>
</html>
