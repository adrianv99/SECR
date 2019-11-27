<?php  
    include './php/cabe.php';

?>
<div class="container" style="background: white;">
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
                                <?php echo cantidadxDiagnostico(1)?>
                              ],
                              datasets:[{
                                      label:'Num datos',
                                      data:[
                                        <?php echo cantidadxDiagnostico(2)?>
                                      ],
                                      backgroundColor:[
                                                'rgba(51,51,255,0.6)',
                                                'rgba(255,0,0,0.6)',
                                                
                                                'rgba(51,153,51,0.6)',
                                                
                                                'rgba(204,204,51,0.6)',
                                                'rgba(85,85,85,0.6)'
                                            ]
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

</div
<html>
</html>
<?php
    
    include 'php/pie.php';
?>