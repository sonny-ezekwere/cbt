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
								<div class="breadcrumbs new">
									<ul class="breadcrumb">
										<li>
											<a href="#">Home</a>
										</li>
										<li class="active">Dashboard</li>
									</ul>


								</div>
								<!-- END BREADCRUMB -->

								<div class="page-header title">
								<!-- PAGE TITLE ROW -->
									<h1>Dashboard <span class="sub-title">List Applicant</span></h1>
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
													<h4><i class="fa fa-line-chart"></i> List of Applicant</h4>
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
															<div class="well white">
									<table id="ApplicantTbl" class="datatable table table-hover table-striped table-bordered tc-table">
										<thead>
											<tr>
												<th>Sn</th>
												<th>App ID</th>
												<th data-class="expand">Fullname</th>
												<th data-hide="phone,tablet">Address(s)</th>
												<th data-hide="phone,tablet">Phone</th>
												<th data-hide="phone,tablet">Email</th>
												<th>Gender</th>
												<th>State</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<!--<tr>
												<td>1</td>
												<td>APP001</td>
												<td>Eddidion Bassy</td>
												<td>No 4.0 Aba road</td>
												<td>0907464545</td>
												<td>eddy@yaho.com</td>
												<td>male</td>
												<td>RV</td>
												<td>none</td>
												<td>view</td>
											</tr> -->
											<?php echo $ActionObj->getAllApplicant('0'); ?>
										</tbody>
									</table>
								</div>

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





