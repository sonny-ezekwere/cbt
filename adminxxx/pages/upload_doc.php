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
										<li class="active">upload</li>
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
									<h1>Dashboard <span class="sub-title">Awardee Upload</span></h1>
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
													<h4><i class="fa fa-line-chart"></i> Awardee Document Upload</h4>
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
									<form method="post" action="?" id="awardform">
									<div class="well white">
									form content here
								</div>
								</form>


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





