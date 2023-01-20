<!-- partial:../../partials/_footer.html -->

						<!-- partial -->
				</div>
				<!-- main-panel ends -->
		</div>
		<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- inject:js -->
<script src="<?=URL?>dashboard/dist/js/vendor.base.js"></script>
<script src="<?=URL?>dashboard/dist/js/vendor.bundle.js"></script>
<!-- endinject -->
<!-- ChartJS - Text inside Circle -->
<script src="<?=URL?>dashboard/dist/js/vendor-override/chartjs-doughnut.js"></script>
<!-- ChartJS End -->
<!-- Custom js for this page-->
<script src="<?=URL?>dashboard/dist/js/components/dark-theme/dark-dashboard-msb.js"></script>
<script src="<?=URL?>dashboard/dist/js/components/dark-theme/common-msb.js"></script>
<script src="<?=URL?>dashboard/dist/js/vendor-override/tooltip.js"></script>
   <!-----config csrf---->
   <!-- <script src="<?php //URL?>dashboard/dist/js/csrf-config.js"> </script> -->
 <!-----config csrf---->
<script>

$(document).ready(function() {
    $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
   });
    });
   </script>

 <!-----config csrf---->

 <?= $this->element('dashboard/custom_edtior');?>
