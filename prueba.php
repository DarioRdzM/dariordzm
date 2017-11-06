<?php
include_once 'app/conexion.inc.php';
include_once 'app/RepositorioUsuario.inc.php';
$titulo="Sitio web Univa";

include_once 'plantillas/documento-cierre.inc.php';
include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';

?>
 <!-- Incluir los archivos JS, los que estan al final de body, HTML es estructurado o secuencial  -->
        <!-- Barra de navegacion, HTML etiqueta nav -->
           
        <div class="container">
            <div class="jumbotron">
                <h1> DALIA </h1>
                <p>
                    Sistemas computacionales
                </p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                 <div class="col-md-4">
                     <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Búsqueda
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <input type="search" class="form-control" placeholder="¿Que buscas?">
                                    </div>
                                    <button class="form-control">Buscar</Button>
                                </div>
                            </div>
                        </div>
                     </div>
                     <div class="row">
                     <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <span class="glyphicon glyphicon-filter" aria-hidden="true"></span> Filtro
                                </div>
                            <div class="panel-body">
                                
                                </div>
                            </div>
                         </div>
                     </div>
                    
                     <div class="row">
                     <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Calendar
                                </div>
                            <div class="panel-body">
                                
                                </div>
                            </div>
                         </div>
                    </div>
                 </div>
                     <div class="col-md-8">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <span class="glyphicon glyphicon-time" aria-hidden="true"></span> Ultima entrada
                                </div>
                            <div class="panel-body">
                                <?php
                                include_once 'app/conexion.inc.php';
                                
                                conexion :: abrir_conexion();
                                conexion:: cerrar_conexion();
                                ?>
                                <p>Todavia no hay entradas que mostrar</p>
                                </div>
                            </div>
                         </div>
                    </div>
                     
                     
        </div>
           
