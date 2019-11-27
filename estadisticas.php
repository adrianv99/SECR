<?php  
    include './php/cabe.php';

?>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    
    <
      <main class="main">
        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="card-columns cols-2">
              <div class="card">
                <div class="card-header">Line Chart
                  <div class="card-header-actions">
                    <a class="card-header-action" href="http://www.chartjs.org" target="_blank">
                      <small class="text-muted">docs</small>
                    </a>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart-wrapper">
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
             <div class="card">
                <div class="card-header">Bar Chart
                  <div class="card-header-actions">
                    <a class="card-header-action" href="http://www.chartjs.org" target="_blank">
                      <small class="text-muted">docs</small>
                    </a>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart-wrapper">
                  <canvas id="barChart" width="400" height="400"></canvas>
                    <script>
                      var ctx= document.getElementById("barChart").getContext("2d");
                      var barChart= new Chart(ctx,{
                          type:"bar",
                          data:{
                              labels:[
                                <?php echo cantidadxTipos(1)?>
                              ],
                              datasets:[{
                                      label: 'Cantidad de incidentes',
                                      data:[
                                        <?php echo cantidadxTipos(2)?>
                                      ],
                                      backgroundColor: "rgba(255,0,0,0.7)",//version >2 useus background color
                                      //strokeColor: "blue",
                                      borderWidth: 1
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
              <div class="card">
                <div class="card-header">Doughnut Chart
                  <div class="card-header-actions">
                    <a class="card-header-action" href="http://www.chartjs.org" target="_blank">
                      <small class="text-muted">docs</small>
                    </a>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart-wrapper">
                  <canvas id="doughnutChart" width="400" height="400"></canvas>
                    <script type="text/javascript" src="js/chartjs/doughnut.js"></script>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header">Pie Chart
                  <div class="card-header-actions">
                    <a class="card-header-action" href="http://www.chartjs.org" target="_blank">
                      <small class="text-muted">docs</small>
                    </a>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart-wrapper">
                  <canvas id="pieChart" width="400" height="400"></canvas>
                    <script>
                      var ctx= document.getElementById("pieChart").getContext("2d");
                      var pieChart= new Chart(ctx,{
                          type:"pie",
                          data:{
                              labels:[
                                <?php echo cantidadxTipos(1)?>
                              ],
                              datasets:[{
                                      label:'Num datos',
                                      data:[
                                        <?php echo cantidadxTipos(2)?>
                                      ],
                                      backgroundColor:"rgba(255,0,0,0.8)"
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
              <div class="card">
                <div class="card-header">Polar Area Chart
                  <div class="card-header-actions">
                    <a class="card-header-action" href="http://www.chartjs.org" target="_blank">
                      <small class="text-muted">docs</small>
                    </a>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart-wrapper">
                  <canvas id="polarChart" width="400" height="400"></canvas>
                    <script type="text/javascript" src="js/chartjs/polar.js"></script>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
      <aside class="aside-menu">
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab">
              <i class="icon-list"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#messages" role="tab">
              <i class="icon-speech"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#settings" role="tab">
              <i class="icon-settings"></i>
            </a>
          </li>
        </ul>
<html>
</html>
<?php
    
    include 'php/pie.php';
?>