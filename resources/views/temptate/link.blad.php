
<div class="content-wrapper"><!-- Main content -->
		<section class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12"><!-- general form elements -->
						<div class="card card-success mt-2">
							<div class="content-header mt-5">
                          <div class="container-fluid">
                              <div class="row mb-2">
                                  <div class="col-sm-6">
                                      <h1 class="m-0">Dashboard v2</h1>
                                  </div><!-- /.col -->

                              </div><!-- /.row -->
                          </div><!-- /.container-fluid -->
                      </div>
                      <section class="content">
                          <div class="container-fluid">
                          <!-- Info boxes -->
                          <div class="row">
                              <div class="col-12 col-sm-6 col-md-3">
                                  <div class="info-box">
                                      <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cogs"></i></span>

                                      <div class="info-box-content">
                                          <span class="info-box-text"><b>Qte_MAT Tot</b></span>
                                          <span class="info-box-number">
                                          {{ $totalqte }}
                                              <small>Article</small>
                                          </span>
                                          <span class="info-box-text">
                                              <a href="{{url('home/listesmat')}}"><b>Show more</b></a>
                                          </span>
                                      </div>
                                      <!-- /.info-box-content -->
                                  </div>
                              <!-- /.info-box -->
                              </div>
                              <!-- /.col -->
                              <div class="col-12 col-sm-6 col-md-3">
                                  <div class="info-box mb-3">
                                      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
                                      <div class="info-box-content">
                                      <span class="info-box-text"><b>Mats disponible</b></span>
                                      <span class="info-box-number">
                                      {{$qtedisponible}}
                                          <small>Article </small>
                                      </span>
                                      <span class="info-box-text">
                                          <a href="{{url('home/glob')}}"><b>Show more</b></a>
                                      </span>

                                      </div>
                                      <!-- /.info-box-content -->
                                  </div>
                              </div>
                              <!-- /.col -->
                              <div class="col-12 col-sm-6 col-md-3">
                                  <div class="info-box mb-3">
                                      <span class="info-box-icon bg-danger elevation-1"><i class="fas fas fa-recycle"></i></span>

                                      <div class="info-box-content">
                                          <span class="info-box-text"><b>MVT Disponible</b></span>
                                          <span class="info-box-number">
                                              {{ $countmvt }}
                                              <small>Mouvements</small>
                                          </span>
                                          <span class="info-box-text">
                                              <a href="{{url('home/listesmvt')}}"><b>Show more</b></a>
                                          </span>
                                      </div>
                                      <!-- /.info-box-content -->
                                  </div>
                              </div>
                              <!-- /.col -->
                              <div class="col-12 col-sm-6 col-md-3">
                                  <div class="info-box mb-3">
                                      <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
                                      <div class="info-box-content">
                                      <span class="info-box-text"><b>Details MVTS</b></span>
                                      <span class="info-box-number">
                                          {{ $countdet }}
                                          <small>Article en mvt </small>
                                      </span>
                                      <span class="info-box-text">
                                          <a href="{{url('home/glob')}}"><b>Show more</b></a>
                                      </span>
                                      </div>
                                      <!-- /.info-box-content -->
                                  </div>
                              </div>
                              <!-- /.col -->
                          </div>
                          <!-- /.row -->
                          <!-- qte par categ -->
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="card">
                                      <div class="card-header">
                                      <h5 class="card-title">Quantites de materiels par categorie:</h5>
                                      </div>
                                      <div class="card-body">
                                          <div class="row">
                                                  <div class="col-12 col-sm-6 col-md-3">
                                                      <div class="info-box">
                                                          <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
                                                          <div class="info-box-content">
                                                              <span class="info-box-text"><b>Pc Portable</b></span>
                                                              <span class="info-box-number">
                                                              {{ $pc }}
                                                                  <small>Article</small>
                                                              </span>
                                                          </div>
                                                          <!-- /.info-box-content -->
                                                      </div>
                                                  <!-- /.info-box -->
                                                  </div>
                                                  <!-- /.col -->
                                                  <div class="col-12 col-sm-6 col-md-3">
                                                      <div class="info-box mb-3">
                                                          <span class="info-box-icon bg-gradient-primary elevation-1"><i class="fas fas fa-desktop"></i></span>
                                                          <div class="info-box-content">
                                                              <span class="info-box-text"><b>Ordinateur (U.C)</b></span>
                                                              <span class="info-box-number">
                                                                  {{ $ord }}
                                                                  <small>Article</small>
                                                              </span>
                                                          </div>
                                                          <!-- /.info-box-content -->
                                                      </div>
                                                      <!-- /.info-box -->
                                                  </div>

                                                  <div class="col-12 col-sm-6 col-md-3">
                                                      <div class="info-box mb-3">
                                                          <span class="info-box-icon bg-success elevation-1"><i class="fas fa-server"></i></span>
                                                          <div class="info-box-content">
                                                          <span class="info-box-text"><b>Serveur</b></span>
                                                          <span class="info-box-number">
                                                              {{ $serveur }}
                                                              <small>Article</small>
                                                          </span>
                                                          </div>
                                                          <!-- /.info-box-content -->
                                                      </div>
                                                      <!-- /.info-box -->
                                                  </div>
                                                  <!-- /.col -->
                                                  <div class="col-12 col-sm-6 col-md-3">
                                                      <div class="info-box mb-3">
                                                          <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-sitemap"></i></span>
                                                          <div class="info-box-content">
                                                          <span class="info-box-text"><b>Switch reseau</b></span>
                                                          <span class="info-box-number">
                                                              <small>Article</small>
                                                          </span>
                                                          </div>
                                                          <!-- /.info-box-content -->
                                                      </div>
                                                      <!-- /.info-box -->
                                                  </div>
                                              <!-- /.col -->
                                          </div>
                                          <!--part2 -->
                                          <div class="row">
                                              <div class="col-12 col-sm-6 col-md-3">
                                                  <div class="info-box">
                                                      <span class="info-box-icon bg-light elevation-1"><i class="fab fa-intercom"></i></span>

                                                      <div class="info-box-content">
                                                          <span class="info-box-text"><b>Routeur Wi-Fi</b></span>
                                                          <span class="info-box-number">
                                                              <small>Routeur</small>
                                                          </span>
                                                      </div>
                                                      <!-- /.info-box-content -->
                                                  </div>
                                              <!-- /.info-box -->
                                              </div>
                                              <!-- /.col -->
                                              <div class="col-12 col-sm-6 col-md-3">
                                                  <div class="info-box mb-3">
                                                      <span class="info-box-icon bg-secondary elevation-1"><i class="far fa-keyboard"></i></span>
                                                      <div class="info-box-content">
                                                          <span class="info-box-text"><b>Clavier</b></span>
                                                          <span class="info-box-number">
                                                                  {{$clavier}}
                                                              <small>clavier</small>
                                                          </span>
                                                      </div>
                                                      <!-- /.info-box-content -->
                                                  </div>
                                                  <!-- /.info-box -->
                                              </div>

                                              <div class="col-12 col-sm-6 col-md-3">
                                                  <div class="info-box mb-3">
                                                      <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-wifi"></i></span>
                                                      <div class="info-box-content">
                                                          <span class="info-box-text"><b>Modem 4G</b></span>
                                                          <span class="info-box-number">

                                                          <small>Modem</small>
                                                      </span>
                                                      </div>
                                                      <!-- /.info-box-content -->
                                                  </div>
                                                  <!-- /.info-box -->
                                              </div>
                                              <!-- /.col -->
                                              <div class="col-12 col-sm-6 col-md-3">
                                                  <div class="info-box mb-3">
                                                      <span class="info-box-icon bg-gradient-gray-dark elevation-1"><i class="fas fa-mouse"></i></span>
                                                      <div class="info-box-content">
                                                      <span class="info-box-text">Sourie</span>
                                                      <span class="info-box-number">
                                                          <small>Sourie </small>
                                                      </span>
                                                      </div>
                                                      <!-- /.info-box-content -->
                                                  </div>
                                                  <!-- /.info-box -->
                                              </div>
                                          </div>
                                      </div>

                                      <div class="col-md-12">

                                      </div>
                                      <!-- ./card-body -->
                                      <div class="card-footer border border-primar">
                                          <script type="text/javascript">
                                              var ladate=new Date()
                                              document.write("Nous sommes le : ");
                                              document.write(ladate.getDate()+"/"+(ladate.getMonth()+1)+"/"+ladate.getFullYear())
                                              </script>
                                      </div>
                                  </div>
                              </div>
                          </div>
                         </div><!--/. container-fluid -->
                      </section>		  

						</div>
					</div>
				</div>
				<!-- /.row -->
			</div>
		   <!-- /.container-fluid -->

		</section> <!-- /.content -->
  </div>