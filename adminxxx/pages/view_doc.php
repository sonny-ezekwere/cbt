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
										<li class="active">Upload Document</li>
									</ul>


								</div>
								<!-- END BREADCRUMB -->

								<div class="page-header title">
								<!-- PAGE TITLE ROW -->
									<h1>Dashboard <span class="sub-title">Document Upload</span></h1>
								</div>



							</div><!-- /.col-lg-12 -->
						</div><!-- /.row -->
					<!-- END PAGE HEADING ROW -->
						<div class="row">
							<div class="col-lg-12" >

								<!-- START YOUR CONTENT HERE -->
									<div class="row">
									<!-- //col-lg-9 -->

									<!-- START Responsive table with js -->
										<?php if($_SESSION['ucat'] =='2'){ ?>

										<div class="modal fade" id="ajaxModal" role="basic"
												aria-hidden="true">
												<div class="page-loading page-loading-boxed">
													<img src="loading-spinner-grey.gif" alt="" class="loading">
													<span> &nbsp;&nbsp;Loading... </span>
												</div>

												<div class="modal-dialog">
													<div class="modal-content" id="mydiv"></div>
												</div>
											</div>

								<div class="page-header no-padding-bottom">
									<h4>Uploaded Documents</h4>
								</div>
								<table class="table table-bordered table-striped table-hover tc-table table-primary footable" data-page-size="2">
									<thead>
										<tr>
											<!--<th class="col-small center" data-sort-ignore="true"><label><input type="checkbox" class="tc"><span class="labels"></span></label></th>-->
											<th data-toggle="true">S/N</th>
											<th data-hide="" width="10%">Document Category</th>
											<!--<th data-hide="phone,tablet">Image</th>
											<th class="col-medium center">Action</th>-->
										</tr>
									</thead>
									<tbody>
										<!--<tr>
											<td class="col-small center"><label><input type="checkbox" class="tc"><span class="labels"></span></label></td>
											<td></td>
											<td></td>
											<td></td>
											<td class="col-medium center">
															<div class="btn-group btn-group-xs ">
																<a href="" class="btn btn-inverse"><i class="fa fa-pencil icon-only"></i></a>
																<a href="" class="btn btn-danger"><i class="fa fa-times icon-only"></i></a>
															</div>
														</td>

										</tr>-->
										<?php echo $ActionObj->getAllDoclist(); ?>


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
								</table>
										<?php } ?>
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

	<!--<script src="../assets/js/plugins/footable/footable.init.js"></script>
	<script src="../assets/js/plugins/datatables/datatables.init.js"></script> -->

	<style type="text/css">
.modal-dialog {
	width: 90%;
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

div#display_pdf {
	height: 520px;
	width: 100%;
}
</style>
<script>
        jQuery(document).ready(function() {    //alert('invoking coplist');

					  /* $('#ApplicantTbl').dataTable({
					"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
			   }); */

						   $('body').on('hidden.bs.modal', '.modal', function () {
						$('#ajaxModal').removeData('bs.modal').find('.modal-content').html('');
					});

        });

function callAjaxUpload(){
			//Ajax processing
			var docType = encodeURIComponent(document.getElementById("docType").value);
			var docText = encodeURIComponent(document.getElementById("docType").text);
			//$( "#myselect option:selected" ).text();
			$('#ajaxUpload').html('<img src="../includes/loading.gif" />');
			var param = "Action=getUpload&docType="+docType;
			var param2 = "Action=getUpload&docType="+docText;
			$.ajax({url:"../includes/ajaxaction1.php",data: param, cache: false, success: function(html){
					$('#ajaxUpload').html(''); $("#ajaxUpload").html(html); }
			});
		}
    </script>





