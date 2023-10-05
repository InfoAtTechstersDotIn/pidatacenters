<?php
  require_once('./config/constants.php') ; 
	include_once('includes/header.php');
?>


<div class="container-fluid page-body-wrapper dashboard-page">
<?php
	include_once('includes/sidebar.php');
?>


<div class="main-panel">
  <div class="content-wrapper">
    <!-- Page Title Header Starts-->
    <div class="row page-title-header">
      <div class="col-12">
        <div class="page-header">
          <h4 class="page-title">Dashboard <span style="font-size:12px;">( All values are in Crores )</span></h4>
        </div>
      </div>
      <div class="col-md-12">
        <div class="dates-wrapper">
          <div class="date-control-wrapper">
            <label for="startdate">From</label>
            <input type="date" class="form-control" id="startdate" name="startdate"  />
          </div>

          <div class="date-control-wrapper" style="margin-left:15px;">
            <label for="enddate">To</label>
            <input type="date" class="form-control" id="enddate" name="enddate" />
          </div>

          <div class="date-control-wrapper" >
            <button type="button" class="form-control btn btn-secondary btn-getdashboard" >Get Data</button>
          </div>

        </div>
      </div>
    </div>
    <!-- Page Title Header Ends-->
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="card card-charges-n-contracts">
          <div class="card-body">
            <div class="row">
              <div class="col">
                <div class="d-flex">
                  <div class="wrapper mrc-wrapper">
                    <h3 class="mb-10 font-weight-semibold">0</h3>
                    <h5 class="mb-10 font-weight-medium text-primary" style="font-size: 26px">MRC</h5>
                    <p class="mb-0 text-muted">+0(+0%)</p>
                  </div>
                  <div class="wrapper my-auto ml-auto ml-lg-2">
                    <canvas height="30" width="80" id="stats-line-graph-1"></canvas>
                  </div>
                </div>
              </div>
              <div class="col mt-md-0 mt-4">
                <div class="d-flex">
                  <div class="wrapper arc-wrapper">
                    <h3 class="mb-10 font-weight-semibold">0</h3>
                    <h5 class="mb-10 font-weight-medium text-primary" style="font-size: 26px">ARC</h5>
                    <p class="mb-0 text-muted">+0(+0%)</p>
                  </div>
                  <div class="wrapper my-auto ml-auto ml-lg-2">
                  <canvas height="30" width="80" id="stats-line-graph-2"></canvas>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="d-flex">
                  <div class="wrapper otc-wrapper">
                    <h3 class="mb-10 font-weight-semibold">0</h3>
                    <h5 class="mb-10 font-weight-medium text-primary" style="font-size: 26px">OTC</h5>
                    <p class="mb-0 text-muted">+0(+0%)</p>
                  </div>
                  <div class="wrapper my-auto ml-auto ml-lg-2">
                    <canvas height="30" width="80" id="stats-line-graph-3"></canvas>
                  </div>
                </div>
              </div>
              <div class="col mt-md-0 mt-4">
                <div class="d-flex">
                  <div class="wrapper otc-wrapper">
                    <h3 class="mb-10 font-weight-semibold">0</h3>
                    <h5 class="mb-10 font-weight-medium text-primary" style="font-size: 26px">ACV</h5>
                    <p class="mb-0 text-muted">+0(+0%)</p>
                  </div>
                  <div class="wrapper my-auto ml-auto ml-lg-2">
                    <canvas height="30" width="80" id="stats-line-graph-4"></canvas>
                  </div>
                </div>
              </div>
              <div class="col mt-md-0 mt-4">
                <div class="d-flex">
                  <div class="wrapper acv-wrapper">
                    <h3 class="mb-10 font-weight-semibold">0</h3>
                    <h5 class="mb-10  font-weight-medium text-primary" style="font-size: 26px">TCV</h5>
                    <p class="mb-0 text-muted">+0(+0%)</p>
                  </div>
                  <div class="wrapper my-auto ml-auto ml-lg-2">
                    <canvas height="30" width="80" id="stats-line-graph-5"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-xs-12 col-md-6 grid-margin">
        <div class="card">
          <div class="card-body d-flex flex-column">
            <div class="wrapper">
              <h4 class="card-title mb-0">Pipelines By Stage</h4>
              <div class="mb-4" id="net-profit-legend"></div>
            </div>
            <canvas class="my-auto mx-auto" height="150" id="pipe-by-stage"></canvas>
            <!-- <div id="legend"></div> -->
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-md-6 grid-margin">
        <div class="card">
          <div class="card-body d-flex flex-column">
            <div class="wrapper">
              <h4 class="card-title mb-0">Pipelines By Customer Type</h4>
              <div class="mb-4" id="net-profit-legend"></div>
            </div>
            <canvas class="my-auto mx-auto" height="150" id="pipe-by-cust"></canvas>
            <!-- <div id="legend"></div> -->
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      
      <div class="col-xs-12 col-md-6 grid-margin">
        <div class="card">
          <div class="card-body d-flex flex-column">
            <div class="wrapper">
              <h4 class="card-title mb-0">Pipelines By Industry</h4>
              <div class="mb-4" id="net-profit-legend"></div>
            </div>
            <canvas class="my-auto mx-auto" height="150" id="pipe-by-industry"></canvas>
            <!-- <div id="legend"></div> -->
          </div>
        </div>
      </div>

	<div class="col-xs-12 col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title mb-0">Pipelines by SBU</h4>
            <canvas class="mt-5" height="120" id="sbu-doughnut-graph"></canvas>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12 col-sm-12 grid-margin">
        <div class="card" id="by-rating-funnel-wrap">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-6 col-md-4"  >
                <div class="wrapper mb-5" style="position:relative;">
                  <h4 class="card-title mb-1">Pipelines By Rating</h4>
                  <div id="funnel" class="mt-5"></div>
                </div>
                <div class="funnel-click-wrapper hide" style="position:absolute; left:0;top:0; padding:5px 10px; border:1px solid #ccc;margin-bottom:20px;margin-right:20px;">
                </div>
              </div>
              <div class="col-sm-6 col-md-8">
                <div class="wrapper table-responsive mt-5 mb-5 pl-5 pr-5">
                  <table class="table table-bordered tbl-label">
                    <thead><tr><th>Rating</th><th>Total Pipelines</th><th>Total MRC</th><th>Total OTC</th><th>Total ACV</th></tr></thead>
                    <tbody> </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- <div class="row">
      <div class="col-xs-12 col-md-8 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title mb-0">Pipeline By Customer Type</h4>
            <div class="d-flex flex-column flex-lg-row">
              <div class="ml-lg-auto" id="cust-type-line-legend"></div>
            </div> 
            <canvas class="mt-5" height="120" id="cust-type-line-graph"></canvas>
          </div>
        </div>
      </div>
      <div class="col-md-4 grid-margin stretch-card">
        
      </div>
    </div> -->


    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <!-- <h4 class="card-title mb-0">Revenue Pipeline Projection</h4> -->
            <h4 class="card-title mb-0">Revenue Pipeline Projection</h4>
            <div class="d-flex flex-column flex-lg-row" style="margin-top: 15px; margin-bottom:15px; font-size:14px; ">
              <div class="data-wrapper d-flex mt-2 mt-lg-0">
                <div class="wrapper pr-5">
                  <h5 class="mb-0" style="font-size:14px;">Total Revenue for FY</h5>
                  <div class="d-flex align-items-center">
                    <h4 class="font-weight-semibold mb-0" style="font-size:14px;" id="total_fy_rev"></h4>
                   
                  </div>
                </div>
                <div class="wrapper">
                  <h5 class="mb-0" style="font-size:14px;">Total Annualized Revenue</h5>
                  <div class="d-flex align-items-center">
                    <h4 class="font-weight-semibold mb-0" style="font-size:14px;" id="total_annualized_rev"></h4>
                    <!-- <small class="ml-2 text-gray d-none d-lg-block"><b>10.5%</b> of 20,000 Total</small> -->
                  </div>
                </div>
              </div>
              <div class="ml-lg-auto" id="revenue-pipeline-projection-legend"></div> 
            </div> 
            <canvas class="mt-5" height="200" id="revenue-pipeline-projection"></canvas>
          </div>
        </div>
      </div>
      <div class="col-md-4 grid-margin stretch-card">
        
      </div>
    </div>

    <!-- <div class="row">
      <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title mb-0">Sales Statistics Overview</h4>
            <div class="d-flex flex-column flex-lg-row">
              <p>Lorem ipsum is placeholder text commonly used</p>
              <ul class="nav nav-tabs sales-mini-tabs ml-lg-auto mb-4 mb-md-0" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="sales-statistics_switch_1" data-toggle="tab" role="tab" aria-selected="true">1D</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="sales-statistics_switch_2" data-toggle="tab" role="tab" aria-selected="false">5D</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="sales-statistics_switch_3" data-toggle="tab" role="tab" aria-selected="false">1M</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="sales-statistics_switch_4" data-toggle="tab" role="tab" aria-selected="false">1Y</a>
                </li>
              </ul>
            </div>
            <div class="d-flex flex-column flex-lg-row">
              <div class="data-wrapper d-flex mt-2 mt-lg-0">
                <div class="wrapper pr-5">
                  <h5 class="mb-0">Total Cost</h5>
                  <div class="d-flex align-items-center">
                    <h4 class="font-weight-semibold mb-0">15,263</h4>
                    <small class="ml-2 text-gray d-none d-lg-block"><b>89.5%</b> of 20,000 Total</small>
                  </div>
                </div>
                <div class="wrapper">
                  <h5 class="mb-0">Total Revenue</h5>
                  <div class="d-flex align-items-center">
                    <h4 class="font-weight-semibold mb-0">$753,098</h4>
                    <small class="ml-2 text-gray d-none d-lg-block"><b>10.5%</b> of 20,000 Total</small>
                  </div>
                </div>
              </div>
              <div class="ml-lg-auto" id="sales-statistics-legend"></div>
            </div>
            <canvas class="mt-5" height="120" id="sales-statistics-overview"></canvas>
          </div>
        </div>
      </div>
      <div class="col-md-4 grid-margin stretch-card">
        
      </div>
    </div> -->
    
<?php
  include_once('includes/footer.php');
?>

<script>
document.addEventListener('DOMContentLoaded', function(event) {
  //alert('hi from registration');
  //alert('the event occurred');
  initDashboard();
  
});
 

</script>	


  </body>
</html>