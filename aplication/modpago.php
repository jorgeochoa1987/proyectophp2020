<!doctype html>
<html class="no-js h-100" lang="en">
<?php 
include('header.php');
?>
<style>
  #display_area {
  width: 90%;
  padding-top: 15px;
  margin: 10px auto;
}


.alert {
  padding: 15px;
  margin-bottom: 20px;
  border: 1px solid #eed3d7;
  border-radius: 4px;
  position: absolute;
  bottom: 0px;
  right: 21px;
  /* Each alert has its own width */
  float: right;
  clear: right;
  background-color: white;
}

.alert-red {
  color: white;
  background-color: #DA4453;
}
.alert-green {
  color: white;
  background-color: #37BC9B;
}
.alert-blue {
  color: white;
  background-color: #4A89DC;
}
.alert-yellow {
  color: white;
  background-color: #F6BB42;
}
.alert-orange {
  color:white;
  background-color: #E9573F;
}
  </style>
  <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Edición </span>
                <h3 class="page-title">Usuario  <?php   $id = $_GET['id']; echo $id; ?></h3>


               </div>
            </div>
            <form>
            <div class="row">
              <div class="col-lg-7">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Información</h6>
                    <div class="custom-control custom-checkbox mb-1">
                              <input type="checkbox" class="custom-control-input" id="formsCheckboxDefault">
                              <label class="custom-control-label" for="formsCheckboxDefault">Favorito</label>
                            </div>
                    <div id="Respuesta"></div>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                          <form>
                            <div class="form-row">
                            <?php 
                          require('../conex/conexion.php');
                          $id = $_GET['id']; 
                          $query1="SELECT * FROM cliente  where id = $id ";
                          $answer1 = $conexion -> query($query1);
                          while ($row1=$answer1->fetch_assoc()){
                          ?>
 <div class="form-group col-md-6">
                                <label for="feFirstName">Nombre</label>
                                <input type="text" class="form-control" id="feFirstName" placeholder="Ingrese nombre" value="<?php echo $row1['nombre']; ?>"> </div>
                              <div class="form-group col-md-6">
                                <label for="feLastName">Apellido</label>
                                <input type="text" class="form-control" id="feLastName" placeholder="Ingrese apellido" value="<?php echo $row1['apellido']; ?>"> </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feEmailAddress">Correo</label>
                                <input type="email" class="form-control" id="feEmailAddress" placeholder="Ingrese correo" value="<?php echo $row1['correo']; ?>"> </div>
                              <div class="form-group col-md-6">
                              <label for="feInputAddress">Teléfono</label>
                              <input type="text" class="form-control" id="fePhone" placeholder="Ingrese teléfono" value="<?php echo $row1['telefono']; ?>"> </div>
                            </div>
                            <div class="form-row">
                              
                              <div class="form-group col-md-6">
                                <label for="feInputCity">Ciudad</label>
                                <input type="text" class="form-control" id="feInputCity" value="<?php echo $row1['ciudad']; ?>"> </div>

                                <div class="form-group col-md-6">
                                <label for="feInputCity">Cédula</label>
                                <input type="number" class="form-control" id="feNumber" value="<?php echo $row1['cedula']; ?>" > </div>
                             
                             </div>    
                            <div class="form-group">
                              <label for="feInputAddress">Dirección</label>
                              <input type="text" class="form-control" id="feInputAddress" placeholder="Ingrese dirección" value="<?php echo $row1['direccion']; ?>"> </div>
                                              
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <label for="feDescription">Notas adicionales</label>
                                <textarea class="form-control" name="fenotas" id="fenotas" rows="5"><?php echo $row1['notas']; ?></textarea>
                              </div>
                              <button type="submit" id="editarCartera" class="btn btn-accent">Actualizar cliente</button>
                            </div>


                       
                          <?php 
                          }
                          ?>
                             
                    
                          </form>
                          
                        </div>
                        
                      </div>
                      
                    </li>
                  </ul>
                  
                </div>
                
              </div>
              <div class='card card-small col-lg-5'>
              <div class="card-header border-bottom">
                    <h6 class="m-0">Saldos pagados</h6></div>
                    <div class="card-body p-0 pb-3 bg-white text-center">
                    <table class="table table-white mb-0">
                      <thead class="thead-white">
                        <tr>
                        <th scope="col" class="border-0">#</th>
                           <th scope="col" class="border-0">Valor</th>
                          <th scope="col" class="border-0">Cartera</th>
                          <th scope="col" class="border-0">Fecha</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
                          require('../conex/conexion.php');
                          $id = $_GET['id']; 
                          $query="SELECT pg.id as id, pg.valor as valor, pg.id_cartera as cartera, pg.fechaPago as fechaPago, cr.nombre as ncartera FROM pago as pg join cartera as cr on pg.id_cartera = cr.id  where pg.id_cliente = $id ";
                          $answer = $conexion -> query($query);
                          while ($row=$answer->fetch_assoc()){
                          ?>
                          <tr>
                              <td> <?php echo $row['id']; ?></td>
                              <td> <?php echo $row['valor']; ?></td>
                              <td> <?php echo $row['ncartera']; ?></td>
                              <td> <?php echo $row['fechaPago']; ?></td>
                              </tr>
                          <?php 
                          }
                          ?>
                      </tbody>
                    </table>
                  </div>
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Cuentas pendientes</h6></div>
                    <div class="card-body p-0 pb-3 bg-white text-center">
                    <table class="table table-white mb-0">
                      <thead class="thead-white">
                        <tr>
                        <th scope="col" class="border-0">#</th>
                           <th scope="col" class="border-0">Valor</th>
                          <th scope="col" class="border-0">interes</th>
                          <th scope="col" class="border-0">Cartera</th>
                          <th scope="col" class="border-0">Pago</th>

                        </tr>
                      </thead>
                      <tbody>
                      <?php 
                          require('../conex/conexion.php');
                          $id = $_GET['id']; 
                          $query="SELECT ct.id as id, ct.prestamo as prestamo, ct.interes as interes, cr.nombre as nombre FROM cuenta  as ct join cartera as cr on ct.id_prestamista = cr.id  where id_cliente = $id ";
                          $answer = $conexion -> query($query);
                          while ($row=$answer->fetch_assoc()){
                          ?>
                          <tr>
                              <td> <?php echo $row['id']; ?></td>
                              <td> <?php echo $row['prestamo']; ?></td>
                              <td> <?php echo $row['interes']; ?></td>
                              <td> <?php echo $row['nombre']; ?></td>
                              <td> <a class="btn btn-sm btn-success mr-1" href="#?id=<?php echo $row2 ['idcliente'];?>">Pagar </a></td>
 
                              </tr>
                          <?php 
                          }
                          ?>
                      </tbody>
                    </table>
                  </div>
              
              </div>
                 
                
                  
               
                 
            
            
            <!-- End Page Header -->
           
          </div>
          
          <?php
         include('footer.php');
         ?>