<?php
session_start();
require_once ('../../includes/makehtmlchar.php'); //set as relevant to path//
include '../../includes/connection.php';
 $ConnObj= createobject("adodb.connection");
 $ConnObj->open($GLOBALS['sConnection']);
require_once ('cinforeslib/CONVERSIONS/common.php');
require_once("../../includes/dbQrys1.php");
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
										<li class="active">Account Information Form</li>
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
									<h1>Dashboard <span class="sub-title">Account Information Form</span></h1>
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
													<h4><i class="fa fa-line-chart"></i>Account Information</h4>
												</div>

											</div>
											<div id="m-charts" class="panel-collapse collapse in">
												<div class="portlet-body">
													<div class="row">
														<div >
															<!--begin form-->
									                 <form class="form-horizontal" role="form" method="post" id="bankDetailForm">
														<div class="form-group">
												<label class="col-sm-2 control-label">Account Name:</label>
												<div class="col-sm-4">
													<div class="clearfix">
														<input type="text" id="accname" name="accname" class="form-control">
													</div>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Account Number:</label>
												<div class="col-sm-4">
													<div class="clearfix">
														<input type="text" id="accnos" name="accnos" class="form-control">
													</div>
												</div>
											</div>

                                           <div class="form-group">
												<label class="col-sm-2 control-label">SortCode:</label>
												<div class="col-sm-4">
													<div class="clearfix">
														<input type="text" id="sortcode" name="sortcode" class="form-control">
													</div>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Bank:</label>
												<div class="col-sm-4">
													<div class="clearfix">
														<input type="text" id="bank" name="bank" class="form-control" >
													</div>
												</div>
											</div>


														<div class="form-group">
															<label class="col-sm-2 control-label">Account Type:</label>
															<div class="col-sm-4">
														<select class="form-control" id="acctype" name="acctype">
														    <option value="Current">Current Account</option>
															<option value="Savings">Savings Account</option>
															<option value="Domiciliary">Domiciliary Account</option>
														</select>
														</div>
														</div>
												<div class="form-group">
												<label class="col-sm-2 control-label">School:</label>
												<div class="col-sm-4">
													<div class="clearfix">
														<input type="text" id="school" name="school" class="form-control">
													</div>
												</div>
											    </div>

												<div class="form-group">
												<label class="col-sm-2 control-label">Course:</label>
												<div class="col-sm-4">
													<div class="clearfix">
														<input type="text" id="course" name="course" class="form-control">
													</div>
												</div>
											    </div>

											    <div class="form-group">
												<label class="col-sm-2 control-label">Foreign Email:</label>
												<div class="col-sm-4">
													<div class="clearfix">
														<input type="text" id="femail" name="femail" class="form-control">
													</div>
												</div>
											    </div>

												<div id="processDiv"></div>
												<div class="form-actions">
															<div class="form-group">
										<div class="col-sm-offset-2 col-sm-10">
		<button type="button" class="btn btn-primary" onclick="showAjax('bankDetailForm','../includes/ajaxaction.php?Action=processBank','processDiv')"
		>Save</button>
		<button type="button" class="btn btn-primary">Cancel</button>
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
								<!--<div class="page-header no-padding-bottom">
									<h4>View Account Details</h4>
								</div>
								<table class="table table-bordered table-striped table-hover tc-table table-primary footable" data-page-size="2">
									<thead>
										<tr>
											<th class="col-small center" data-sort-ignore="true"><label><input type="checkbox" class="tc"><span class="labels"></span></label></th>
											<th data-toggle="true">S/N</th>
											<th data-hide="phone,tablet">Request</th>
											<th data-hide="phone,tablet">Amount</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="col-small center"><label><input type="checkbox" class="tc"><span class="labels"></span></label></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>

										</tr>


									</tbody>
									<tfoot>
										<tr>
											<td colspan="7">
												<div class="btn-group btn-group-sm pull-left">
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
												</div>
												<ul class="hide-if-no-paging pagination pagination-centered pull-right"></ul>
												<div class="clearfix"></div>
											</td>
										</tr>
									</tfoot>
								</table>-->
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

	<script src="../assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="../assets/js/plugins/datatables/datatables.js"></script>
	<script src="../assets/js/plugins/datatables/datatables.responsive.js"></script>

	<script src="../assets/js/plugins/footable/footable.init.js"></script>
	<script src="../assets/js/plugins/datatables/datatables.init.js"></script>
<script>
        jQuery(document).ready(function() {    //alert('invoking coplist');

           $('#ApplicantTbl').dataTable({
	    "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
   });

        });
    </script>





