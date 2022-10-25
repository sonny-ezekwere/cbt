<?php
session_start();
require_once ('../../includes/makehtmlchar.php'); //set as relevant to path//
 $ConnObj= createobject("adodb.connection");
 $ConnObj->open($GLOBALS['sConnection']);
require_once ('cinforeslib/CONVERSIONS/common.php');
require_once("../../includes/dbQrys.php");
 $ActionObj = new dbQuery($host, $user, $password, $dbname);
?>



					<!-- BEGIN PAGE HEADING ROW -->

						<div class="row">
							<div class="col-lg-12">
								<!-- BEGIN BREADCRUMB -->
								<div class="breadcrumbs">
									<ul class="breadcrumb">
										<li>
											<a href="#">Home</a>
										</li>
										<li class="active">Dashboard</li>
									</ul>

									<div class="b-right hidden-xs">
										<ul>
											<li><a href="#" title=""><i class="fa fa-signal"></i></a></li>
											<li><a href="#" title=""><i class="fa fa-comments"></i></a></li>
											<li class="dropdown"><a href="#" title="" data-toggle="dropdown"><i class="fa fa-plus"></i><span> Tasks</span></a>
												<ul class="dropdown-menu dropdown-primary dropdown-menu-right">
													<li><a href="#">Add new task</a></li>
													<li><a href="#">Statement</a></li>
													<li><a href="#">Settings</a></li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
								<!-- END BREADCRUMB -->

								<div class="page-header title">
								<!-- PAGE TITLE ROW -->
									<h1>Dashboard <span class="sub-title">Request</span></h1>
								</div>



							</div><!-- /.col-lg-12 -->
						</div><!-- /.row -->
					<!-- END PAGE HEADING ROW -->
						<div class="row">
							<div class="col-lg-12" >

								<!-- START YOUR CONTENT HERE -->
									<div class="row">
									<div class="col-lg-12 col-sm-12">

										<!-- Server Info Charts .morris -->
										<div class="portlet">
											<div class="portlet-heading inverse">
												<div class="portlet-title">
													<h4><i class="fa fa-line-chart"></i> Awardee Requests <a href="#" id="trigger" >Agreement</a> || <a  class="fancybox fancybox.iframe" href="../uploads/app2015020203031022.pdf">fancy box</a> || <a  data-toggle="modal"	href="#modal_1">sample</a></h4>
																						</div>
												<div class="portlet-widgets">
													<a id="daterange" href="javascript:;" class="tooltip-primary" data-placement="top" data-rel="tooltip" title="DateRangePicker"><i class="fa fa-calendar"></i></a>
													<span class="divider"></span>
													<a data-toggle="collapse" data-parent="#accordion" href="#m-charts"><i class="fa fa-chevron-down"></i></a>
												</div>
												<div class="clearfix"></div>
											</div>
											<div id="m-charts" class="panel-collapse collapse in">
												<div class="portlet-body">
													<div class="row">
														<div >
															<!--begin table-->
															<div id="processDiv"></div>
									<form method="post" action="?" id="approveform">
									<div class="well white">
									<!--sample modal-->
												<div role="dialog" tabindex="-1" id="modal_1" class="modal fade" >
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
								<object data="../uploads/app2015020203031022.pdf"
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
									<!-- end sample modal-->
										<div class="modal fade" id="ajaxModal" role="basic" aria-hidden="true">
									<div class="page-loading page-loading-boxed">
										<img src="loading-spinner-grey.gif" alt="" class="loading">
										<span> &nbsp;&nbsp;Loading... </span>
									</div>
									<div class="modal-dialog">
										<div class="modal-content"></div>
									</div>
								</div>

									<!-- end model 2-->
									<table id="ApplicantTbl" class="datatable table table-hover table-striped table-bordered tc-table">
										<thead>
											<tr>
												<th></th>
												<!--<th>App ID</th>-->
												<th data-class="expand">Fullname</th>
												<th data-hide="phone,tablet">Category.</th>
												<th data-hide="phone,tablet">Desc</th>
												<th data-hide="phone,tablet">Amt</th>
												<th>C. Status</th>
												<th>Status</th>
												<th>Comment</th>
												<th>Send to</th>
												<th>Dated</th>
												<th>files</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>

											<?php echo $ActionObj->getAllRequestList('0'); ?>
										</tbody>
									</table>
								</div>
								</form>

								<!--<a href="#" id="btn-multiple" class=" btn btn-primary" onclick="showAjax('awardform','../includes/ajaxaction.php?Action=Award1','processDiv')">Award Multiple</a>-->

														<!--end of table-->
														</div>


													</div>


												</div>
											</div>
										</div>
										<!-- End Server Info Charts .morris -->




									</div><!-- //col-lg-9 -->


								</div>
								<!-- END YOUR CONTENT HERE -->

							</div>
						</div>



				<!-- /#page-wrapper -->
 <script src="../assets/js/main_modal.js"></script>

    <script src="../assets/js/bootstrap.min.js"></script>



	<!-- PAGE LEVEL PLUGINS JS -->
	<script src="../assets/js/plugins/footable/footable.min.js"></script>

	<script src="../assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="../assets/js/plugins/datatables/datatables.js"></script>
	<script src="../assets/js/plugins/datatables/datatables.responsive.js"></script>

	<!--<script src="../assets/js/plugins/footable/footable.init.js"></script> -->
	<!--<script src="../assets/js/plugins/datatables/datatables.init.js"></script> -->
	<!--<script src="../includes/jQryfile.js" type="text/javascript"></script> -->
	<!--<script src="../includes/custom1.js" type="text/javascript"></script>-->


<script src="main_modal.js" type="text/javascript"></script>
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
        jQuery(document).ready(function() {    //alert('invoking coplist');

					   $('#ApplicantTbl').dataTable({
					"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
			   });

			    /*$('.fancybox').click(function(){
						  $(".fancybox").dialog();

						}); */

						$(document.body).on('hidden.bs.modal', function () {
								$('#ajaxModal').removeData('bs.modal').find('.modal-content').html('');
								//$(e.target).removeData('bs.modal').html('');
							});

        });

function openModel(id){ //alert('am working '+id);
						/*$('#trigger'+id).click(function(){
							  $("#dialog"+id).dialog();

							});*/
							 $('.fancybox').fancybox();
							 $("#dialog"+id).fancybox();
		}
    </script>





