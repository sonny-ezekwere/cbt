<?php include '../../includes/makehtmlchar.php';
$filename=urldecode($_GET['filename']);
?>
<div class="modal-header">
	<button aria-hidden="true" data-dismiss="modal" class="close"
	type="button">
		<i class="fa fa-times"></i>
	</button>
    <h4 class="modal-title"><?php if($filename==''){echo "View Document";} else {echo $filename;}?></h4>
</div>

<div class="modal-body">
	<div id="display_pdf">
		<!--<object data="<?php //echo  "../../pics/applpics/". $_GET['path'];?>"
		type="application/pdf" width="100%" height="100%" view="Fit">-->
        <object data="<?php echo $_GET['path'];?>"
		type="application/pdf" width="100%" height="100%" view="Fit">
			<p>
				It appears your Web browser is not configured to display PDF
				files. No worries, just <a
				href="http://pdfobject.com/pdf/sample.pdf">click here to
				download the PDF file.</a>
			</p>
		</object>
	</div>
</div>
<style type="text/css">
			.modal-dialog {
			width: 70%;
			/*width: 1100px;*/
			margin: 10px auto;
			border-style: solid;
			border-width: 10px;
			border-color: #ccc; //
			border-radius: 20px;
			}

			.modal-body {
			position: relative;
			overflow-y: auto;
			/*max-height: 500px;*/
			padding: 15px;
			width: 100%;
			}


		</style>
		<script>
			jQuery(document).ready(function() {
				$('body').on('hidden.bs.modal', '.modal', function () {
					$('#ajaxModal').removeData('bs.modal').find('.modal-content').html('');
				});
			});

		</script>
