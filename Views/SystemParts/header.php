<?php  require_once("../../Models/Core.php")?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PASTELITOS FRANCISCO</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
    <link href="your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">

    <link rel="shortcut icon" href="<?=DOMINIO?>Design/img/chef.ico" type="image/x-icon"> <!-- aqui va el icono de la pag-->
    <link rel="stylesheet" href="<?=DOMINIO?>Design/css/styles.css"> 
    <link rel="stylesheet" href="<?=DOMINIO?>Design/css/modal.css"> 

</head>

<body>
    
    <header>
             
        <nav class="sidebar">
            <div class="btn__menu">
            <a class="menu" id="menu" href="javascript:void(0)"><i class="fas fa-bars"></i></a>
            </div>
           <div class="nav" id="nav">
            <a  href="#">Inicio</a>
            <a  href="#">Acerca de</a>
            <a  href="#">Portafolio</a>
            <a  href="#">Servicios</a>
            <a  href="#">Contacto</a>

            <a href="" type="button"  data-toggle="modal" data-target="#exampleModal">Login</a>
                                    <!-- Button trigger modal -->
                       <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="container" >
                                <form class="prra">
                                <div style="margin-bottom: 10px;">
                                <img id="img" src="<?=DOMINIO?>Design/img/cocinero.png" class="img__chef">
                                </div>   
                                    <div class="form-group" >
                                        <label id="label" for="exampleInputEmail1">Correo</label>
                                            <input type="text" class="form-control" onfocusout="validarCorreo()"  id="txtEmail" aria-describedby="emailHelp" placeholder="Enter email">
                                            <span id="spanEmailLogin"></span>
                                    </div>
                                    <div class="form-group">
                                            <label id="label" for="exampleInputPassword1">Contraseña</label>
                                            <input type="password" class="form-control" id="txtPassword" onfocusout="validarPassword()" placeholder="Password">
                                            <span id="spanPassowrdLogin"></span>
                                    </div>
                                    <div class="form-group">
                                    <label id="label" for="exampleInputPassword1">Repetir Contraseña</label>
                                            <input type="password" class="form-control" id="txtPasswordRepeat" onfocusout="validarRepeatPassword()" placeholder="Password">
                                            <span id="spanPassowrdRepeatLogin" ></span>
                                    </div>
                                    
        
                                    </div>
                                    <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" onclick="IniciarSesion()" id="btn-final" class="btn btn-primary">Registrarse</button>
                                </form>
                                </div>                        
                            </div>
                            </div>
                        </div>
                        </div>



            </div>
        </nav>

     
        <section class="textos-header">
            <h1>Pastelitos Francisco</h1>
            <h2>No hay nada como nuestros dulcecitos para alegrarte el dia</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #fff;"></path>
            </svg></div>
    </header>
    