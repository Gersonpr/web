<?php

session_start();
if(isset($_SESSION["user_data"]))
{
    header("location:./dashboard/admin/");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Amazing GYM</title>
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="./css/style.css"/>
    <link rel="stylesheet" type="text/css" href="./css/entypo.css">
</head>
<body class="page-body login-page login-form-fall background-image">
    <!-- Start Header  -->
    <header>
        <div class="container">
            <!--<div class="imagen">
            </div>-->
            <img src="../images/l1.png" alt="logo no disponible">
            <div class="logo">
                <a href="">EL MEJOR GIMNASIO DE <span>BAGUA</span></a>
            </div>
            <a href="javascript:void(0)" class="ham-burger">
                <span></span>
                <span></span>
            </a>
            <div class="nav">
                <ul>
                    <li><a href="../index.php#home">INICIO</a></li>
                    <li><a href="../index.php#nosotros">NOSOTROS</a></li>
                    <li><a href="../index.php#about">PROGRAMA</a></li>
                    <li><a href="../index.php#service">SERVICIOS</a></li>
                    <li><a href="../index.php#class">CLASES</a></li>
                    <li><a href="../index.php#horarios">HORARIOS</a></li>
                    <li><a href="../index.php#price">PRECIOS</a></li>
                    <li><a href="../index.php#ubicacion">UBICACIÓN</a></li>
                    
                </ul>
            </div>
        </div>
    </header>
    <!-- Header  -->

    <!-- Start inicio -->
    <section class="home wow flash" id="home">
        <div class="container">
            <div id="container">
                <div class="login-container">
                    <div class="login-content">
                        <p class="description">LOGIN</p>
                        <!-- progress bar indicator -->
                        <div class="login-progressbar-indicator">
                            <h3>43%</h3>
                            <span>Ingresar ...</span>
                        </div>
                    </div>
                </div>
                <div class="login-progressbar">
                    <div></div>
                </div>
                <div class="login-form">
                    <div class="login-content">
                        <form action="secure_login.php" method='post' id="bb">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="entypo-user"></i>
                                    </div>
                                    <input type="text" placeholder="Usuario" class="form-control" name="user_id_auth" id="textfield" data-rule-minlength="6" data-rule-required="true" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="entypo-key"></i>
                                    </div>
                                    <input type="password" name="pass_key" id="pwfield" class="form-control" data-rule-required="true" data-rule-minlength="6" placeholder="Contraseña" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="btnLogin" class="btn btn-primary">
                                    Ingresar
                                    <i class="entypo-login"></i>
                                </button>
                            </div>
                        </form>
                        <div class="login-bottom-links">
                            <a href="forgot_password.php" class="link">¿Olvidaste tu contraseña?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".ham-burger, .nav ul li a").click(function(){
                $(".nav").toggleClass("open");
                $(".ham-burger").toggleClass("active");
            });
            $(".accordian-container").click(function(){
                $(".accordian-container").children(".body").slideUp();
                $(".accordian-container").removeClass("active");
                $(".accordian-container").children(".head").children("span").removeClass("fa-angle-down").addClass("fa-angle-up");
                $(this).children(".body").slideDown();
                $(this).addClass("active");
                $(this).children(".head").children("span").removeClass("fa-angle-up").addClass("fa-angle-down");
            });
        });
    </script>
    <script src="js/wow.min.js"></script>
    <script>
        wow = new WOW({
            animateClass: 'animated',
            offset: 0,
        });
        wow.init();
    </script>
</body>
</html>
