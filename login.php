<?php
require_once('include/conexion.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/styles_login.css">  

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet"
    />
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'><!--REFERENCIA A LINK ICONOS-->
</head>
<body> 
     
    <div class="main">
                
            <nav class="navigation-menu-1">
                    <div class="c__logo">
                        <img class="logo1" src="./assets/img/cruzrojajuventudManagua.jpg" alt="logo" width=70 height=65> 
                    </div>
                    <div class="c__btn">
                    <a href="index.php" class="btn--book">   <img src="./assets/img/right arrow.svg" alt=""> Regresar</a>
                    </div>
                </nav> 
            
        
                <div class="container">
                    <div class="screen">
                        <div class="screen__content">
                            <img class="logo" src="./assets/img/cruzrojajuventudManagua.jpg" width="100" height="100" alt="">
                            <form class="login" method="post" action="./include/validarRol.php">
                                <div class="login__field">
                                    <i class="login__icon bx bxs-user"></i>
                                    <input name="usuario" type="text" class="login__input" placeholder="User name / Email">
                                </div>
                                <div class="login__field">
                                    <i class="login__icon bx bxs-lock-alt"></i>
                                    <input name="contrasena" type="password" class="login__input" placeholder="Password">
                                </div>
                                <button action="./include/validarRol.php" type="submit" class="button login__submit">
                                    <span class="button__text">Login</span>
                                    <i class="button__icon fas fa-chevron-right"></i>
                                </button>				
                            </form>
                            <div class="social-login">
                                <h3>Log in with</h3>
                                <div class="social-icons">
                                    <a href="#" class="social-login__icon fab fa-instagram"> <i class='bx bxl-instagram'></i></a>
                                    <a href="#" class="social-login__icon fab fa-facebook"><i class='bx bxl-facebook'></i></a>
                                    <a href="#" class="social-login__icon fab fa-twitter"> <i class='bx bxl-twitter'></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="screen__background">
                            <span class="screen__background__shape screen__background__shape4"></span>
                            <span class="screen__background__shape screen__background__shape3"></span>		
                            <span class="screen__background__shape screen__background__shape2"></span>
                            <span class="screen__background__shape screen__background__shape1"></span>
                        </div>		
                    </div>
                </div>

                
                <nav class="navigation-menu">
                    <div class="nav--link">
                        
                        <div class="info--terms"> 
                            <p>Cruz Roja Juventud Managua ©2023 - All  rights reserved</p> 
                        </div>
                        <div class="line">
                            <img src="./assets/img/Line footer.svg" alt="line footer" width="1073" height="2">
                        </div>
                                
                        </div> <div class="nav--link_social"> 
                    </div>  
                </nav> 
    </div>  
</body>
</html>