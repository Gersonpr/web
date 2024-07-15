<!DOCTYPE html>
<html lang="es">
<head>
	<title>GYM AMAZYING BAGUA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type ="text/css" href="css/formulario.css">
  <style>
    .wow:first-child {
      visibility: hidden;
    }
  </style>
  
</head>
<body>
 
 <!-- Start Header  -->
 <header>
 	 <div class="container">
		<!--<div class="imagen">
		</div>-->
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
 <!-- Header  -->
  <!-- Start inicio -->
  <section class="formulario1 wow flash" id="pantallaEntrendor">
  	 <div class="container">
  	 	  <h1 class="wow slideInLeft" data-wow-delay="1s">REALIZA TUS <span>PAGOS</span> DE MANERA SEGURA Y CONFIABLE</h1>
  	 </div>


  </section>
<!--section pago-->
   <section class="entrenador" style="color:black;">
      
    <div class="contenedor">

        <h1 class="logo">PLAN DE<span> S/.90</span></h1>

        <div class="contacto animated bounceInUp">
            <div class="contactos_forma">
                <h3> <img src="images/visa.png" alt="no disponible" style="width: 10%; height: 10%;"> </h3>
                <form action="ticketDePago.php" method="post">
                    <p>
                        <label>NOMBRE</label>
                        <input type="text" name="nombre" placeholder="Ingrese su nombre" required>
                    </p>
                    <p>
                        <label>NUMERO DE TARJETA</label>
                        <input type="tel" name="numeroTarjeta" placeholder="Ingrese su número de tarjeta" required>
                    </p>
                    <p>
                        <label>CVV</label>
                        <input type="tel" name="cvv" placeholder="Ingrese su CVV" required>
                    </p>
                    <p>
                        <label>FECHA DE VENCIMIENTO</label>
                        <input type="text" name="fechaVencimiento" placeholder="Ingrese la fecha de vencimiento" required>
                    </p>
                     <p class="block">
                        <label>MENSAJE</label> 
                        <textarea name="mensaje" placeholder="Ingrese su mensaje" rows="3" required></textarea>
                    </p>
                    <p class="block">
                        <button type="submit" value="enviar">
                            <input type="hidden" name="monto" value="90">
                            Pagar
                        </button>
                    </p>
                </form>
            </div>
              <p style="color:black;">somos el mejor GYM de bagua capital donde así como depositas tus pagos también depositas confianza, gracias por la gratitud y amabilidad</p>
        </div>
    </div>
   </section>

  <!--section contacto-->
  <section class="contact">
    <div class="container">
       <div class="content">
           <div class="box form wow slideInLeft">
            <form action="https://formspree.io/f/xbjvnzqd" method="post">
                <input type="text" name="nombre" placeholder="Ingrese Nombre" required>
                <input type="email" name="email" placeholder="Ingrese Email" required>
                <input type="text" name="telefono" placeholder="Ingrese Telefono" required>
                <textarea name="mensaje" placeholder="Ingrese su mensaje" required></textarea>
                <button type="submit" value="enviar">Enviar</button>
                </form>
           </div>
           <div class="box text wow slideInRight">
                <h2>Conéctate con nosotros AMAZING GYM</h2>
                 <p class="title-p">Somos una empresa amazonense para el servicio del público, evitamos el racismo, bulling y siempre buscamos la mejor calidad de tu vida en especial para el publico de bagua capital</p>
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
                       AMAZING GYM @ BAGUA_CAPITAL
                 </div>
           </div>
       </div>
    </div>
 </section>
<!---elementos de java-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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

  
  </script>
  <script src="js/wow.min.js"></script>
  <script>
      wow = new WOW(
        {
          animateClass: 'animated',
          offset:       0,
        }
      );
      wow.init();
    </script>
</body>
</html>