<?php  
    include './php/cabe.php';

?>
    <div class="container">
        <div class="row" style="margin-top: 30px; color: grey; margin-bottom: 25px;">
            <div class="center">
                <h4 style="font-size: 50px;">Graficos y Estadisticas</h4>
            </div>
        </div>
        <div class="row" style="margin-top: 30px; color: grey; margin-bottom: 100px;">
            <div class="col-lg-6 col-sm-12">
                <div style="background: #ff4c52; border-radius: 5px; width: 100%; height: 190px; box-shadow: 5px 8px #c5c2c2;">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 style="text-align: center; color: white; font-size: 27px;">Provincia más incidentada</h4>
                        </div>
                    </div>
                    <di class="row" style="margin-top: 15px;">
                        <div class="col-md-12">
                            <h5 style="text-align: center; color: white; font-size: 55px; font-weight: bold;">
                                <?php 
                                    include 'php/mas_incidentada.php';
                                    $query=consultar_provincias_id($provincia_mas_incidentada);
                                    $row= $query->fetch_assoc();
                                    echo($row['nombre']);
                                ?>
                            </h5>
                        </div>
                    </di>
                    <di class="row" style="margin-top: 15px;">
                        <div class="col-sm-6 col-md-12">
                            <h5 style="text-align: center; color: white; font-size: 29px;"><i class="fas fa-chart-pie"></i>   
                            <?php  
                                $query=incidentes_total();
                                $row= $query->fetch_assoc();
                                $total_incidente = $row['COUNT(id_incidente)'];
                                $query=incidentes_x_provincias_x_id($provincia_mas_incidentada);
                                $row= $query->fetch_assoc();
                                $total_incidente_provincia = $row['COUNT(incidente.id_incidente)'];
                                $resultado = ($total_incidente_provincia*100) / $total_incidente;
                                echo($resultado);
                            ?> 
                            %</h5>
                        </div>
                    </di>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div style="background: #3e8ef7; border-radius: 5px; width: 100%; height: 190px; box-shadow: 5px 8px #c5c2c2;">
                    <div class="row">
                            <div class="col-md-12">
                                <h4 style="text-align: center; color: white; font-size: 27px;">Provincia menos incidentada</h4>
                            </div>
                        </div>
                        <di class="row" style="margin-top: 15px;">
                            <div class="col-md-12">
                                <h5 style="text-align: center; color: white; font-size: 55px; font-weight: bold;">
                                    <?php 
                                        include 'php/menos_incidentada.php';
                                        $query=consultar_provincias_id($provincia_menos_incidentada);
                                        $row= $query->fetch_assoc();
                                        echo($row['nombre']);
                                    ?>
                                </h5>
                            </div>
                        </di>
                        <di class="row" style="margin-top: 15px;">
                            <div class="col-sm-6 col-md-12">
                                <h5 style="text-align: center; color: white; font-size: 29px;"><i class="fas fa-chart-pie"></i>   
                                    <?php  
                                        $query=incidentes_total();
                                        $row= $query->fetch_assoc();
                                        $total_incidente = $row['COUNT(id_incidente)'];
                                        $query=incidentes_x_provincias_x_id($provincia_menos_incidentada);
                                        $row= $query->fetch_assoc();
                                        $total_incidente_provincia = $row['COUNT(incidente.id_incidente)'];
                                        $resultado = ($total_incidente_provincia*100) / $total_incidente;
                                        echo($resultado);
                                    ?> %
                                </h5>
                            </div>
                        </di>
                    </div>
            </div>
        </div>
        
    </div>


    <div id="anychart-embed-countries-dominican-republic" class="anychart-embed anychart-embed-countries-dominican-republic">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/proj4js/2.3.15/proj4.js"></script>
        <script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js"></script>
        <script src="https://cdn.anychart.com/releases/v8/js/anychart-map.min.js"></script>
        <script src="https://cdn.anychart.com/releases/v8/js/anychart-exports.min.js"></script>
        <script src="https://cdn.anychart.com/releases/v8/js/anychart-ui.min.js"></script>
        <script src="https://cdn.anychart.com/geodata/2.0.0/countries/dominican_republic/dominican_republic.js"></script>
        <script src="https://cdn.anychart.com/releases/v8/js/anychart-ui.min.js"></script>
            <div id="ac_style_countries-dominican-republic" style="display:none;">
                
            </div>
            <?php 
                include 'php/pais.php';
            ?>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <p style="font-size: 18px;"><img src="img/azul.png" alt="" height="15" width="18">  Provincias más incidentadas  </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <p style="font-size: 18px;"><img src="img/azulll.jpg" alt="" height="15" width="18">  Provincias menos incidentadas  </p>
            </div>
        </div>
    </div>

  <div class="container">
    <div class="col-md-8 col-md-offset-4 col-sm-8 col-sm-offset-4 col-lg-8 col-lg-offset-4 col-xs-12 col-xs-offset-0">
             <div class="form-group">
                <canvas id="lineChart" width="400" height="400"></canvas>
                      <script>
                      var ctx= document.getElementById("lineChart").getContext("2d");
                      var lineChart= new Chart(ctx,{
                          type:"line",
                          data:{
                              labels:[<?php echo cantidadxFecha(1)?>],
                              datasets:[{
                                      label:'Incidentes Registrados por Mes',
                                      data:[<?php echo cantidadxFecha(2)?>],
                                      backgroundColor: "rgba(255,0,0,0.4)",
                                      borderColor:['rgba(255,0,0,0.9)']
                              }]
                          },
                          options:{
                              scales:{
                                  yAxes:[{
                                          ticks:{
                                              beginAtZero:true
                                          }
                                  }]
                              }
                          }
                      });
                      </script>
              </div>
           </div>
          </div>

<?php
    
    include 'php/pie.php';
?>