          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © pidatacenters.com 2021</span>
                          </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->

    <!-- JQuery -->
<!-- Bootstrap tooltips -->
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>

    <script src="assets/js/shared/off-canvas.js"></script>
    <script src="assets/js/shared/misc.js"></script>


    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="assets/js/theme/dashboard.js"></script>
    <script src="assets/js/theme/index-db.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 <script src="assets/js/calender/cal.js"></script>
<script>
$('.factive').click(function(){
    var currentVal = $(this).find('i').attr('title');
    var addCls = 'active1';
    var removeCls = 'deactive';
    var title = 'Active';
    if(currentVal == 'Active'){
      addCls = 'deactive';
      removeCls = 'active';
      title = 'In-Active';
    }
    $(this).find('i').addClass(addCls).removeClass(removeCls);
    $(this).find('i').attr('title',title);
    $(this).find('i').text(title);
	});
	</script>
       

    <!-- End custom js for this page-->
	
	
	
<div id="myModal" class="modal fade" style="width:60%" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="width:160%">
      <div class="modal-body" >
        <div class="row">
		
		<div class="col-md-3" >
		<h6>Use Case Expertise</h6>
		
		</div>
		<div class="col-md-3" >
	<h6>Technology Expertise</h6>
	
		</div>
		<div class="col-md-3" >
	<h6>Professional Services Offered</h6>

		</div>
		<div class="col-md-3" >
		<h6>Interested Services/Products @Pi®</h6>

		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</div>
  </body>
</html>