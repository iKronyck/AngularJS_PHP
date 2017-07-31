<?php 
    header('Content-Type: text/html; charset=UTF-8'); 
    /*include "model/Class.Personaje.php";
    include "config/Class.Conexion.php";*/
?>

<!DOCTYPE html>
<html lang="es" ng-app="Personajes">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta content="Personajes" name="description" />
	<meta content="Israel Hernandez" name="author" />
    <title>Hola prueba</title>
    <link rel="stylesheet" href="assets/css/materialize.min.css" media="screen,projection"/>
    <link rel="stylesheet" href="assets/css/sweetalert.css" media="screen,projection"/>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <nav class=" blue darken-1">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo center">AngularJS y PHP</a>
        </div>
    </nav>
    <div class="row">
        <div class="col s12 m2 l3"><p></p></div>
        <div class="col s12 m8 l6">
            <h2 class="center">CRUD de Personajes</h2>
            <br>

            <table class="centered">
                <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                </tr>
                </thead>
                <tbody>
                    <!--Datos AQUI -->
                    <?php
                        include 'view/Table.Personaje.php';
                    ?>
                </tbody>
            </table>

            <div class="fixed-action-btn horizontal click-to-toggle">
                <a class="btn-floating btn-large  blue darken-1">
                    <i class="material-icons" data-target="modal1">add</i>
                </a>
            </div>

            <!-- modal agregar-->
            <div id="modal1" class="modal modal-fixed-footer" ng-controller="RegistrarCtrl">
                <form role="form" ng-submit="registrar()">
                    <div class="modal-content">
                        <h4>Agregar Personaje</h4>
                        <hr>
                        <div class="container">
                            <div class="input-field col s12">
                                <input id="last_name" ng-model="txtNomb1" type="text" class="validate" ng-required="requeridoNombre" required="">
                                <label for="last_name">Nombre Personaje</label>
                            </div>
                            <div class="input-field col s12">
                                <textarea id="textarea1" ng-model="txtDesc1" class="materialize-textarea"></textarea>
                                <label for="textarea1">Descripción</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <center>
                            <input type="submit" class="modal-action modal-close waves-effect waves-white btn-flat " value="Registrar" values="Registrar"/>
                            <!---<a href="#!" class="modal-action waves-effect waves-white btn-flat ">Registrar</a>-->
                            <a href="#!"  class="modal-action modal-close waves-effect waves-red btn-flat red white-text">Cerrar</a>
                        </center>
                    </div>
                </form>
            </div>
            <!--Termina modal-->
        </div>
        <div class="col s12 m2 l3"><p></p></div>
        <div></div>
    </div>
    <script type="text/javascript" src="assets/js//jquery1.10.2-min.js"></script>
    <script type="text/javascript" src="assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="assets/js/angular.min.js"></script>
    <script type="text/javascript" src="assets/js/sweetalert.min.js"></script>
    <script type="text/javascript" src="controller/PersonajeCtrl.js"></script>
    <script>
        $(document).ready(function(){
            // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
            $('.modal').modal();
        });
    </script>
</body>
</html>