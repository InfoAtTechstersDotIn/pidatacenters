<?php
  require_once('./config/constants.php') ; 
  include_once('includes/header.php');

  $filter1="";
  $filter2="";
  if (isset($_GET['f1'])) {
    $filter1 = $_GET['f1'];
  }
  if (isset($_GET['f2'])) {
    $filter2 = $_GET['f2'];
  }
  if (isset($_GET['f3'])) {
    $startdate = explode("=", $_GET['f3'])[1];
  }
  if (isset($_GET['f4'])) {
    $enddate = explode("=", $_GET['f4'])[1];
  }

  // echo $filter2 . "------------";
  // echo $_GET['f3'] . "------------";
  // echo $_GET['f4'];
  // die();
?>
<div class="container-fluid page-body-wrapper" id="page-pipeline-filter">
<?php
  include_once('includes/sidebar.php');
?>

<div class="main-panel">
  <div class="content-wrapper">

        <!-- start -->         
    <div class="row page-title-header">
      <div class="col-12">
        <div class="page-header">
          <h4 class="page-title">Pipelines</h4>
        </div>
      </div>
    </div>

    <div class="row  col-md-12 col-sm-12 col-12 grid-margin">
      <div class="card" style="width:100%;">
        <div class="card-body">
          <div class="row">
            <div class="col-sm-12 col-md-12">
            <button type="button" class="btn btn-success btn-export mb-2">Export</button>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 col-12 table-responsive">
              <table id="tbl-pipelines-export" class="table table table-hover table-bordered table2excel" width="100%">
                <thead>
                  <tr class="table-row">
                    <th class="th-sm">Potential ID
                    </th>
                    <th class="th-sm">RBP Name
                    </th>
                    <th class="th-sm">Customer Name
                    </th>
                    <th class="th-sm">SBU - Product
                    </th>
                    <th class="th-sm">Stage
                    </th>
                    <th class="th-sm">Monthly Recurring <br/>Charges (MRC)
                    </th>
                    <th class="th-sm">One Time <br>Charges (OTC)
                    </th>
                    <th class="th-sm">Annual Recurring <br>Charges (ARC)
                    </th>
                    <th class="th-sm">Annual Contract <br>Value (ACV)
                    </th>
              
                    <th class="th-sm">Total Contract <br>Value (TCV)
                    </th>
                    <th class="th-sm">Contract Period<br> (In Months)
                    </th>
                    <th class="th-sm">Closing Date
                    </th>
                    <th class="th-sm">Customer Type
                    </th>
                    <th class="th-sm">Projected <br/>Commission
                    </th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>            
          </div>
          <div class="row">
            <div class="col-sm-12 col-md-12">
              <button type="button" class="btn btn-success btn-export mt-2">Export</button>
            </div>
          </div>
        </div>    
      </div>
    </div>
</div>
 
  
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="<?=BASE_URL?>assets/js/jquery.table2excel.js"></script> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="<?=BASE_URL?>assets/js/jquery.table2excel.js"></script>
    <!-- <script src="<?=BASE_URL?>assets/js/tableexport-master/dist/tableexport.js"></script> -->

    <script src="<?=BASE_URL?>assets/js/theme/index-db.js"></script>
<?php
 // include_once('includes/footer.php');
?>
<script>

    document.addEventListener('DOMContentLoaded', function(event) {
      let formData = new FormData();
      formData.append("fc1", "<?=$filter1?>");
      formData.append("fc2", "<?=$filter2?>");
      formData.append("startdate", "<?=$startdate?>");
      formData.append("enddate", "<?=$enddate?>");
      initPipelineFilter(formData);
    });


</script>

  </body>
</html>
