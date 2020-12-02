 
<?php 
include('header.php');
?>


          <!-- / .main-navbar -->
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Página de inicio</span>
                <h3 class="page-title">Estado de cuentas</h3><h4 class="page-title" style=" width: 100%;font-size: 15px;"><?php echo date('l jS \of F Y h:i:s A'); ?></h4>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Small Stats Blocks -->
            <div class="row">
              <div class="col-lg col-md-6 col-sm-6 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                  <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                      <div class="stats-small__data text-center">
                        <span class="stats-small__label text-uppercase">Cartera de:admin</span>
                        <h6 class="stats-small__value count my-3">2,390</h6>
                      </div>
                      <div class="stats-small__data">
                      </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-1"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-lg col-md-6 col-sm-6 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                  <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                      <div class="stats-small__data text-center">
                        <span class="stats-small__label text-uppercase">Cartera de :1</span>
                        <h6 class="stats-small__value count my-3">182</h6>
                      </div>
                      <div class="stats-small__data">
                      </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-2"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-lg col-md-4 col-sm-6 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                  <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                      <div class="stats-small__data text-center">
                        <span class="stats-small__label text-uppercase">Total Cartera</span>
                        <h6 class="stats-small__value count my-3">8,147</h6>
                      </div>
                      <div class="stats-small__data">
                      </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-3"></canvas>
                  </div>
                </div>
              </div>
          
            <!-- End Small Stats Blocks -->
         </div>


          <div class="row">
          <div class="col-lg-6 col-sm-12 mb-4">
                <div class="card card-small card-post card-post--aside card-post--1">
                  <div class="card-post__image" style="background-image: url('images/content-management/5.jpeg');">
                    <a href="#" class="card-post__category badge badge-pill badge-info">Cartera Usuario 1</a>
                    <div class="card-post__author d-flex">
                      <a href="#" class="card-post__author-avatar card-post__author-avatar--small" style="background-image: url('images/avatars/0.jpg');">Written by Anna Ken</a>
                    </div>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">
                      <a class="text-fiord-blue" href="#">Juan alonso</a>
                    </h5>
                    <p class="card-text d-inline-block mb-3">Descripción de nota</p>
                    <span class="text-muted">Saldo : $ 500.000 </span><br>
                    <p class="card-text d-inline-block mb-3">interes :0.3%</p>
                  </div>
                </div>
         </div>
          <div class="col-lg-6 col-sm-12 mb-4">
                <div class="card card-small card-post card-post--aside card-post--1">
                  <div class="card-post__image" style="background-image: url('images/content-management/5.jpeg');">
                    <a href="#" class="card-post__category badge badge-pill badge-info">Cartera Admin</a>
                    <div class="card-post__author d-flex">
                      <a href="#" class="card-post__author-avatar card-post__author-avatar--small" style="background-image: url('images/avatars/0.jpg');">Written by Anna Ken</a>
                    </div>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">
                      <a class="text-fiord-blue" href="#">Antonio ramirez</a>
                    </h5>
                    <p class="card-text d-inline-block mb-3">Descripción de nota</p>
                    <span class="text-muted">Saldo : $ 300.000</span><br> 
                    <p class="card-text d-inline-block mb-3">interes : 1%</p>
                  </div>
                </div>
              </div>
          </div>
          </div>
          
         

          
          <?php
         include('footer.php');
         ?>