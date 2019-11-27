<?php 
    session_start();
    $cargo = $_SESSION['cargo'];
    if($cargo == "ADM"){
        include './php/cabe.php';
    }
    else{
        include './php/cabeR.php';
    }
?>

    <div class="row" style="margin-top: 25px;">
        <div class="col-md-12">
            <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel" >
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                    <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox" style="border-radius: 8px;">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/911.jpg"
                        alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/ambulancia2.jpg"
                        alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/ambulancia.jpg"
                        alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                
                </div>
            </div>
      </div>

      <div class="row" style="margin-top: 20px; margin-bottom: 20px;">
        <div class="col-lg-12">
            <hr style="border-style: inset; border-width: 2px; background: rgba(230, 235, 243, 0.74);">
        </div>
    </div>
    <div class="container">
        <div class="row" style="margin-top: 30px; color: grey; margin-bottom: 25px;">
            <div class="col-lg-12">
                <h4 style="font-size: 35px;">Incidentes x provincias</h4>
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


<?php  
    include 'php/pie.php';
?>







