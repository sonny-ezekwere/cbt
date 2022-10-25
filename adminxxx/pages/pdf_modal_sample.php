<!-- BEGIN PAGE HEADING ROW -->
<div class="row">
	<div class="col-lg-12">
		<!-- BEGIN BREADCRUMB -->
		<div class="breadcrumbs">
			<ul class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li><a href="#">Components</a></li>
				<li class="active">PDF Modal Test</li>
			</ul>

			<div class="b-right hidden-xs">
				<ul>
					<li><a href="#" title=""><i class="fa fa-signal"></i></a></li>
					<li><a href="#" title=""><i class="fa fa-comments"></i></a></li>
					<li class="dropdown"><a href="#" title="" data-toggle="dropdown"><i
					class="fa fa-plus"></i><span> Tasks</span></a>
					<ul class="dropdown-menu dropdown-primary dropdown-menu-right">
						<li><a href="#">Add new task</a></li>
						<li><a href="#">Statement</a></li>
						<li><a href="#">Settings</a></li>
					</ul></li>
				</ul>
			</div>
		</div>
		<!-- END BREADCRUMB -->

		<div class="page-header title">
			<!-- PAGE TITLE ROW -->
			<h1>
				Elements <span class="sub-title">Common UI Features & Elements</span>
			</h1>
		</div>


	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<!-- END PAGE HEADING ROW -->
<div class="row space-2x">
	<div class="col-lg-12">

		<!-- START YOUR CONTENT HERE -->
		<div class="row">
			<div class="col-md-12">

				<div class="portlet">
					<div class="portlet-heading dark">
						<div class="portlet-title">
							<h4>
								<i class="fa fa-gears"></i> View PDF Modal Sample <small>(Bootbox.js)</small>
							</h4>
						</div>
						<div class="portlet-widgets">
							<a data-toggle="collapse" data-parent="#accordion" href="#modals"><i
							class="fa fa-chevron-down"></i></a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div id="modals" class="panel-collapse collapse in">
						<div class="portlet-body btn-margin-bottom-5">
							<p>
								<a class="btn" href="pages/pdf_modal_sample_call.php?uid=2" data-target="#ajaxModal" data-toggle="modal">Ajax Modal</a>
								<a href="#" id="bb-reguler" class="bb-trigger btn btn-primary">Regular</a>
								<a href="#" id="bb-confirm" class="bb-trigger btn btn-inverse">Confirm</a>
								<a href="#" id="bb-options" class="bb-trigger btn btn-danger">More</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END YOUR CONTENT HERE -->

	</div>
</div>
<div class="modal fade" id="ajaxModal" role="basic" aria-hidden="true" >
	<div class="page-loading page-loading-boxed">
		<img src="loading-spinner-grey.gif" alt="" class="loading">
		<span> &nbsp;&nbsp;Loading... </span>
	</div>
	<div class="modal-dialog">
		<div class="modal-content"></div>
	</div>
</div>


<style type="text/css">

	.modal-dialog {
		width: 90%;
		//width: 1100px;
		margin: 10px auto;
	}

	.modal-body {
		position: relative;
		overflow-y: auto;
		//max-height: 500px;
		padding: 15px;
		width: 100%;
	}


	div#display_pdf {
		height: 520px;
		width: 100%;
	}
</style>
<script>
	jQuery(document).ready(function() {
		$(document.body).on('hidden.bs.modal', function () {
			$('#ajaxModal').removeData('bs.modal').find('.modal-content').html('');
			//$(e.target).removeData('bs.modal').html('');
		});
	});
</script>
