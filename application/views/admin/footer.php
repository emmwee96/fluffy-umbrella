</div>
<!-- /.content-wrapper -->

<!-- <footer class="main-footer">
            </footer> -->

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?= base_url() ?>js/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url() ?>js/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
	$.widget.bridge('uibutton', $.ui.button);

</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url() ?>js/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?= base_url() ?>js/bower_components/raphael/raphael.min.js"></script>
<script src="<?= base_url() ?>js/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url() ?>js/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?= base_url() ?>js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?= base_url() ?>js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url() ?>js/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url() ?>js/bower_components/moment/min/moment.min.js"></script>
<script src="<?= base_url() ?>js/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?= base_url() ?>js/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?= base_url() ?>js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?= base_url() ?>js/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url() ?>js/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url() ?>js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() ?>js/demo.js"></script>
<!-- IonIcon -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.0.0-7/collection/icon/icon.js"></script>

<script>
	$(document).ready(function(){
		$(".datepicker").datepicker({
			format: 'dd-mm-yyyy'
		});
	});

	$(document).on("click", ".delete-button", function (e) {
		e.preventDefault();

		var delete_record = confirm("Are you sure you want to delete this record?");
        var path = $(this).attr("href");
        
		if (delete_record === true) {
            window.location.replace(path);
		}
	});
</script>
</body>

</html>
