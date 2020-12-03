<!doctype html>
<html class="no-js h-100" lang="es">
<?php 
include('header.php');
?>
          <!-- / .main-navbar -->
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Agregar</span>
                <h3 class="page-title">Nuevo usuario</h3>
              </div>
            </div>
            <div class="row">       
              <div class="col-lg-12">
                <div class="card card-small mb-12">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Información básica</h6>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col-md-12">
                        <form action="modules/creacionUsuario.php" method="post"> 
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feFirstName">Nombre</label>
                                <input type="text" class="form-control" name="feFirstName" placeholder="Ingrese nombre"> </div>
                              <div class="form-group col-md-6">
                                <label for="feLastName">Apellido</label>
                                <input type="text" class="form-control" name="feLastName" placeholder="Ingrese apellido"> </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feEmailAddress">Correo</label>
                                <input type="email" class="form-control" name="feEmailAddress" placeholder="sierra@correo.com"> </div>
                              <div class="form-group col-md-6">
                              <label for="feInputUser">Usuario</label>
                              <input type="text" class="form-control" name="feInputUser" placeholder="Ingrese usuario"> </div>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="feInputCed">Cédula</label>
                              <input type="text" class="form-control" name="feInputCed" placeholder="Ingrese Cédula"> </div>
                            </div>
                            <div class="form-group col-md-6">
                            <div class="form-group">
                              <label for="feInputPass">Contraseña</label>
                              <input type="text" class="form-control" name="feInputPass" placeholder="Ingrese Contraseña"> </div>
                              </div>
                            <button type="submit" id="crearCliente" class="btn btn-accent">Crear cliente</button>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
           
           </form>
          </div>
          <?php
         include('footer.php');
         ?>