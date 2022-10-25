<?php
/*session_start();
require_once ('../../includes/makehtmlchar.php'); //set as relevant to path//
 $ConnObj= createobject("adodb.connection");
 $ConnObj->open($GLOBALS['sConnection']);
require_once ('cinforeslib/CONVERSIONS/common.php');
require_once("../../includes/dbQrys.php");
 $ActionObj = new dbQuery($host, $user, $password, $dbname);
 */
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Cinfores eSMS</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/fonts.css">
	<link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">

	<!-- PAGE LEVEL PLUGINS STYLES -->
	<link href="../assets/css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">
	<link href="../assets/css/plugins/morris/morris.css" rel="stylesheet">
	<link rel="stylesheet" href="../assets/css/plugins/bootstrap-datepicker/datepicker.css">
	<!-- REQUIRE FOR SPEECH COMMANDS -->
	<link rel="stylesheet" type="text/css" href="../assets/css/plugins/gritter/jquery.gritter.css" />

    <!-- Tc core CSS -->
	<link id="qstyle" rel="stylesheet" href="../assets/css/themes/style.css">


    <!-- Add custom CSS here -->
	<link rel="stylesheet" href="../assets/css/only-for-demos.css">
	<link rel="stylesheet" href="../assets/css/custom.css">
	<!--<link href="../includes/custom1.css" rel="stylesheet"> -->
		<link rel="stylesheet" href="source/jquery.fancybox.css?v=2.1.5">


	<!-- End custom CSS here -->

    <!--[if lt IE 9]>
    <script src="../assets/js/html5shiv.js"></script>
    <script src="../assets/js/respond.min.js"></script>
    <![endif]-->

	<!--[if lte IE 8]>
	<script src="../assets/js/plugins/easypiechart/easypiechart.ie-fix.js"></script>
	<![endif]-->

  </head>


<body>
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
													<h4><i class="fa fa-line-chart"></i> Awardee Requests <a href="#" id="trigger" >Agreement</a> || <a  class="fancybox fancybox.iframe" href="../uploads/app2015020203031022.pdf">fancy box</a></h4>
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
												<div id="dialog" style="display:none; width:800px;">
												<div style="width:800px; height:400px;">
												<h2>PDF VIEW</h2>
										<iframe style="width:800px; height:400px;" src="../uploads/app2015020203031022.pdf"></iframe>
												</div>
											</div>
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

</body></html>

				<!-- /#page-wrapper -->
    <script src="modal.js"></script>

    	<!--<script src="../assets/js/plugins/footable/footable.init.js"></script> -->
	<!--<script src="../assets/js/plugins/datatables/datatables.init.js"></script> -->
	<!--<script src="../includes/jQryfile.js" type="text/javascript"></script> -->
	<!--<script src="../includes/custom1.js" type="text/javascript"></script>-->



<script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.5"></script>
	<script type="text/javascript">
		$(document).ready(function() {

			$('.fancybox').fancybox();

		});
	</script>




