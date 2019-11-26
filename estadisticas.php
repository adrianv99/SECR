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
                    <canvas id="canvas-1"></canvas>
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
                    <canvas id="canvas-2"></canvas>
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
                    <canvas id="canvas-3"></canvas>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header">Radar Chart
                  <div class="card-header-actions">
                    <a class="card-header-action" href="http://www.chartjs.org" target="_blank">
                      <small class="text-muted">docs</small>
                    </a>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart-wrapper">
                    <canvas id="canvas-4"></canvas>
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
                    <canvas id="canvas-5"></canvas>
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
                    <canvas id="canvas-6"></canvas>
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
    
<?php
    
    include 'php/pie.php';
?>