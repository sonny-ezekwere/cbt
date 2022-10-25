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
								<a class="btn blue" data-toggle="modal"	href="#modal_html"> PDF Modal in HTML </a>
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
<div class="row">
	<div class="col-md-6">
		<div role="dialog" tabindex="-1" id="modal_html" class="modal fade" >
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button aria-hidden="true" data-dismiss="modal" class="close"
						type="button">
							<i class="fa fa-times"></i>
						</button>
						<h4 class="modal-title">View PDF</h4>
					</div>

					<div class="modal-body">
						<div class="row-fluid">
							<div id="display_pdf">
								<object data="pages/BFJAMBOUTLETS.pdf"
								type="application/pdf" width="100%" height="100%">
									<p>
										It appears your Web browser is not configured to display PDF
										files. No worries, just <a
										href="http://pdfobject.com/pdf/sample.pdf">click here to
										download the PDF file.</a>
									</p>
								</object>
							</div>
							<div>
								<h4 class="text-gray">Let&#39;s Start</h4>
								<div class="note note-success">
									<p>Some text at the bottom of the view PDF modal</p>
								</div>
							</div>
						</div></div>

						<div class="modal-footer no-margin-top">
							<button data-dismiss="modal" class="btn btn-primary" type="button">
								<i class="fa fa-thumbs-up"></i>Ok! Ready
							</button>
						</div>
				</div>
			</div>
		</div>

	</div>
	<!--/span-->
	<div class="col-md-6"></div>
	<!--/span-->
</div>

<style type="text/css">

	.modal-dialog {
	width: 875px;
	margin: 30px auto;
	}

	.modal-body {
	position: relative;
	overflow-y: auto;
	max-height: 500px;
	padding: 15px;
	}


	div#display_pdf {
	height: 300px;
	}
</style>
