<?php
session_start();
require_once ('../../includes/makehtmlchar.php'); //set as relevant to path//
include '../../includes/connection.php';
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
								<div class="breadcrumbs new">
									<ul class="breadcrumb">
										<li>
											<a href="#">Home</a>
										</li>
										<li class="active">Request Form</li>
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
									<h1>Dashboard <span class="sub-title">Fund Request Form</span></h1>
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
													<h4><i class="fa fa-line-chart"></i>Fund Request Form</h4>
												</div>

											</div>
											<div id="m-charts" class="panel-collapse collapse in">
												<div class="portlet-body">
													<div class="row">
														<div >
															<!--begin form-->
									                 <form class="form-horizontal" role="form" method="post" id="reqForm">
														<div class="form-group">
															<label class="col-md-2 control-label">Request Category:</label>
															<div class="col-md-6">
														<select class="form-control" id="reqCat" name="reqCat" onchange="callAjaxUpload()">

															  <option>Select Request</option>
									                     <?php

													            //$ActionObj->getAllRequest();
																$ActionObj->getAllRequestDrop();
													    ?>
														</select> 															</div>
														</div>
														<div class="form-group">
												<label class="col-md-2 control-label">Amount:</label>
												<div class="col-md-6">
													<div class="clearfix">
														<input type="text" id="reqAmt" name="reqAmt" class="form-control">
													</div>
												</div>
											</div>

														<div class="form-group">
															<label class="col-md-2 control-label">Description:</label>
															<div class="col-md-6">
															<div class="clearfix">
																	<textarea class="form-control input-xxlarge" name="reqDesc" id="reqDesc" rows="3"></textarea>
																</div>
															</div>
														</div>
														<div class="form-group">
															<label class="col-md-2 control-label"></label>
 														<div class="col-md-6">

																	<h5 style="color:red !important; font-size:8pt !important">The following Documents are required, Upload only PDF Files (Size Should not Exceed 80kb)</h5>

															</div>
														</div>


														<div class="form-group">
												<label class="col-md-2 control-label">Upload:</label>
												<div class="col-md-6">
													<div class="clearfix" id="ajaxUpload">
														<!--<input type="file" id="fileUpload" name="fileUpload" class="form-control">
														<iframe src="../includes/docupload.php" width="350" height="40" frameborder="0" scrolling="no"></iframe>-->
													</div>
												</div>
											</div>
														<!--
														<div class="form-group">
															<label class="col-md-2 control-label">Title:</label>
															<div class="col-md-6">
															<div class="clearfix">
																	<input type="text" id="title" name="title" class="form-control">
																</div>
															</div>
														</div> -->
												<div class="form-actions">
												<div id="processDiv"></div>
															<div class="form-group">
																<div class="col-sm-offset-2 col-sm-10">
																	<button type="button" class="btn btn-primary"
									onclick="showAjax('reqForm','../includes/ajaxaction.php?Action=addReq','processDiv')"
																	>Post</button>
																	<!--<button type="submit" class="btn btn-primary">Save</button>-->
																</div>
															</div>
														</div>
													</form>


														<!--end of form-->
														</div>


													</div>


												</div>
											</div>
										</div>
										<!-- End Server Info Charts .morris -->




									</div><!-- //col-lg-9 -->

									<!-- START Responsive table with js -->
								<div class="page-header no-padding-bottom">
									<h4>My Request</h4>
								</div>
								<table class="table table-bordered table-striped table-hover tc-table table-primary footable" data-page-size="5">
									<thead>
										<tr>

											<th data-toggle="true">S/N</th>
											<th >Fullname</th>
											<th >Request</th>
											<th data-hide="phone,tablet">Amount</th>
											<th data-hide="phone,tablet">Status</th>
											<th>Date</th>
										</tr>
									</thead>
									<tbody>
										<!--<tr>
											<td class="col-small center"><label><input type="checkbox" class="tc"><span class="labels"></span></label></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>

										</tr>-->
										<?php echo $ActionObj->getAllReqList($_SESSION ['user']); ?>


									</tbody>
									<tfoot>
										<tr>
											<td colspan="7">
												<!--<div class="btn-group btn-group-sm pull-left">
													<button class="btn btn-primary dropdown-toggle hidden-xs" data-toggle="dropdown">
														with Selected <span class="caret"></span>
													</button>
													<button class="btn btn-primary dropdown-toggle visible-xs" data-toggle="dropdown">
														<i class="fa fa-cog icon-only"></i>
													</button>
													<ul class="dropdown-menu dropdown-primary" role="menu">
														<li><a href="#">Action</a></li>
														<li><a href="#">Another action</a></li>
														<li class="divider"></li>
														<li><a href="#">Separated link</a></li>
													</ul>
												</div>-->
												<ul class="hide-if-no-paging pagination pagination-centered pull-right"></ul>
												<div class="clearfix"></div>
											</td>
										</tr>
									</tfoot>
								</table>
								<!-- END Responsive table with js -->


								</div>
								<!-- END YOUR CONTENT HERE -->

							</div>
						</div>

				<!-- /#page-wrapper -->
 <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>


	<!-- PAGE LEVEL PLUGINS JS -->
	<script src="../assets/js/plugins/footable/footable.min.js"></script>

	<!--<script src="../assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="../assets/js/plugins/datatables/datatables.js"></script>
	<script src="../assets/js/plugins/datatables/datatables.responsive.js"></script>-->

	<script src="../assets/js/plugins/footable/footable.init.js"></script>
	<!--<script src="../assets/js/plugins/datatables/datatables.init.js"></script> -->
<script>
        jQuery(document).ready(function() {    //alert('invoking coplist');

					 /*  $('#ApplicantTbl').dataTable({
					"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
			   }); */

        });

function callAjaxUpload(){
			//Ajax processing
			var reqCat = encodeURIComponent(document.getElementById("reqCat").value);
			var docText = encodeURIComponent(document.getElementById("reqCat").text);
			//$( "#myselect option:selected" ).text();
			$('#ajaxUpload').html('<img src="../includes/loading.gif" />');
			var param = "Action=getUpload2&reqCat="+reqCat;
			var param2 = "Action=getUpload&docType="+docText;
			$.ajax({url:"../includes/ajaxaction1.php",data: param, cache: false, success: function(html){
					$('#ajaxUpload').html(''); $("#ajaxUpload").html(html); }
			});
		}
    </script>





