<?php
/*
session_start();
require_once ('../../includes/makehtmlchar.php'); //set as relevant to path//
 $ConnObj= createobject("adodb.connection");
 $ConnObj->open($GLOBALS['sConnection']);
require_once ('cinforeslib/CONVERSIONS/common.php');
require_once("../../includes/dbQrys.php");
 $ActionObj = new dbQuery($host, $user, $password, $dbname);
 */
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
										<li class="active">Staff Form</li>
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
									<h1>Dashboard <span class="sub-title">Staff Form</span></h1>
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
													<h4><i class="fa fa-line-chart"></i>Staff Form</h4>
												</div>

											</div>
											<div id="m-charts" class="panel-collapse collapse in">
												<div class="portlet-body">
													<div class="row">
														<div >
															<!--begin form-->
															<h3>Staff Bio-Data</h3>
															<hr>
									                 <form class="form-horizontal" role="form" method="post" id="reqForm">
									                 <div class="form-group">
												<label class="col-md-2 control-label">First Name:</label>
												<div class="col-md-6">
													<div class="clearfix">
														<input type="text" id="fname" name="fname" class="form-control">
													</div>
												</div>
											       </div>

											        <div class="form-group">
												<label class="col-md-2 control-label">Other Name:</label>
												<div class="col-md-6">
													<div class="clearfix">
														<input type="text" id="oname" name="oname" class="form-control">
													</div>
												</div>
											       </div>

											        <div class="form-group">
												<label class="col-md-2 control-label">Last Name:</label>
												<div class="col-md-6">
													<div class="clearfix">
														<input type="text" id="lname" name="lname" class="form-control">
													</div>
												</div>
											       </div>
											       <div class="form-group">
												<label class="col-md-2 control-label">Email Address:</label>
												<div class="col-md-6">
													<div class="clearfix">
														<input type="text" id="email" name="email" class="form-control">
													</div>
												</div>
											       </div>

											        <div class="form-group">
												<label class="col-md-2 control-label">Gender:</label>
												<div class="col-md-6">
													<select class="form-control" id="gender" name="gender">
														    <option value="1">Male</option>
															<option value="2">Female</option>
												    </select>
												</div>
											       </div>

											        <div class="form-group">
												<label class="col-md-2 control-label">Address:</label>
												<div class="col-md-6">
													<div class="clearfix">
														<input type="text" id="address" name="address" class="form-control">
													</div>
												</div>
											       </div>

											       <div class="form-group">
												<label class="col-md-2 control-label">Date of Birth:</label>
												<div class="col-md-6">
													<div class="input-group date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
																<span class="input-group-addon">
																	<i class="glyphicon glyphicon-calendar"></i>
																</span>
																<input class="form-control" />
															</div>
															<input type="hidden" id="dtp_input2" value="" /><br/>
												</div>
											       </div>

														<div class="form-group">
															<label class="col-md-2 control-label">Marital Status:</label>
															<div class="col-md-6">
															 <select class="form-control" id="mStatus" name="mStatus">
														    <option value="1">Single</option>
															<option value="2">Married</option>
															<option value="3">Divorced</option>
															<option value="4">Others</option>
												    </select>
															</div>
														</div>

												  <div class="form-group">
												<label class="col-md-2 control-label">State:</label>
												<div class="col-md-6">
													<select class="form-control" id="state" name="state">
														    <option value="1">Rivers</option>
															<option value="2">Imo</option>
												    </select>
												</div>
											       </div>

											        <div class="form-group">
												<label class="col-md-2 control-label">LGA:</label>
												<div class="col-md-6">
													<select class="form-control" id="lga" name="lga">
														    <option value="1">Port Hacourt</option>
															<option value="2">Okrika</option>
												    </select>
												</div>
											       </div>

											       <div class="form-group">
												<label class="col-md-2 control-label">User ID:</label>
												<div class="col-md-6">
													<div class="clearfix">
														<input type="text" id="userID" name="userID" class="form-control">
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
										onclick="showAjax('reqForm','../includes/ajaxaction.php?Action=addStaff','processDiv')"
																	>Save</button>
																	<button type="submit" class="btn btn-primary">Cancel</button>
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
									<h4>Staff Information</h4>
								</div>
								<table class="table table-bordered table-striped table-hover tc-table table-primary footable" data-page-size="2">
									<thead>
										<tr>

											<th data-toggle="true">First Name</th>
											<th >Last Name</th>
											<th >Gender</th>
											<th data-hide="phone,tablet">Date of Birth</th>
											<th data-hide="phone,tablet">Marital Status</th>
											<th>State</th>
											<th>Action</th>
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
										<?php //echo $ActionObj->getAllReqList(); ?>


									</tbody>

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


	<script src="../assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="../assets/js/plugins/datatables/datatables.js"></script>
	<script src="../assets/js/plugins/datatables/datatables.responsive.js"></script>

	<script src="../assets/js/plugins/footable/footable.init.js"></script>
	<script src="../assets/js/plugins/datatables/datatables.init.js"></script>


<!--
<script>
        jQuery(document).ready(function() {    //alert('invoking coplist');

           $('#ApplicantTbl').dataTable({
	    "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
   });

        });
    </script> -->


    <script>
        $(document).ready(function() {
			//Dual listbox examples  for more information and options please visit http://www.virtuosoft.eu/code/bootstrap-duallistbox/
			var demo1 = $('select[name="duallistbox_demo1[]"]').bootstrapDualListbox({infoTextFiltered: '<span class="label label-primary label-lg">Filtered</span>'});
			var container1 = demo1.bootstrapDualListbox('getContainer');

			//Select2 examples
			$("#e1, #e2, #e3").select2({
				width: 175
			});
			$("#e4").select2({
				placeholder: "Select a Option",
				width: 375,
				allowClear: true
			});
			$("#e5").select2({tags:["red", "green", "blue"]});

			//Bootstrap Select enable
			$('.selectpicker').selectpicker('show');

			//Maxilength
			$('input[maxlength]').maxlength();

			$('input.maxL-1').maxlength({
				threshold: 17
			});

			$('input.maxL-2').maxlength({
				alwaysShow: true,
				warningClass: "label label-primary",
				limitReachedClass: "label label-danger",
				separator: ' of ',
				preText: 'You have ',
				postText: ' chars remaining.',
				validate: true,
				threshold: 10
			});

			$('textarea#maxL-3').maxlength({
				alwaysShow: true
			});

			$('input#maxL-4').maxlength({
				alwaysShow: true,
				placement: 'top-left'
			});

			//Masked Input Uses http://digitalbush.com/projects/masked-input-plugin/
			$.mask.definitions['~']='[+-]';
			$('.input-date').mask('99/99/9999');
			$('.input-phone').mask('(999) 999-9999');
			$(".input-key").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});
			$('.input-eyescript').mask('~9.99 ~9.99 999');

			//Bootstrap Datetimepicker
			$('.form_datetime').datetimepicker({
				//language:  'fr',
				weekStart: 1,
				todayBtn:  1,
				autoclose: 1,
				todayHighlight: 1,
				startView: 2,
				forceParse: 0,
				showMeridian: 1
			});
			$('.form_date').datetimepicker({
				weekStart: 1,
				todayBtn:  1,
				autoclose: 1,
				todayHighlight: 1,
				startView: 2,
				minView: 2,
				forceParse: 0
			});
			$('.form_time').datetimepicker({
				weekStart: 1,
				todayBtn:  1,
				autoclose: 1,
				todayHighlight: 1,
				startView: 1,
				minView: 0,
				maxView: 1,
				forceParse: 0
			});

			//Bootstrap Datepicker
			$('.datepicker').datepicker();

			//Wysihtml Editor
			$('#editor1').wysihtml5();

			//Bootstrap Wysiwyg Editor
			$('#editor-2').ek_wysiwyg({
				toolbar:
					[
						'font',
						null,
						'fontSize',
						null,
						'bold',
						'italic',
						'strikethrough',
						'underline',
						null,
						'justifyleft',
						'justifycenter',
						'justifyright',
						null,
						'createLink',
						'unlink',
						null,
						'insertImage',
						null,
						'undo',
						'redo'
					]
				}).prev().addClass('editor-style1 text-center');


			// Spinners
			$('#MySpinner-1').spinner();
			$('#MySpinner-2').spinner({disabled: true});
			$('#MySpinner-3').spinner({value:0, min: 0, max: 10});
			$('#MySpinner-4').spinner({value:0, step: 5, min: 0, max: 200});

			// Touchspinners
			$("#touchspin-demo1").TouchSpin({
				min: 0,
				max: 100,
				step: 1,
				decimals: 0,
				boostat: 5,
				maxboostedstep: 10,
				postfix: '$'
			});

			 $("#touchspin-demo2").TouchSpin({
				min: 0,
				max: 100,
				step: 0.1,
				decimals: 2,
				boostat: 5,
				maxboostedstep: 10,
				buttonup_class: 'btn btn-primary',
				buttondown_class: 'btn btn-primary',
				postfix: '%'
			});

			//jQuery knob for more option/help please visit https://github.com/aterrien/jQuery-Knob
			$(function() {
				$(".knob").knob();
			});

			//Color Picker
			$('#colorpicker1').colorpicker();

			//Custom Color Picker
			$('#ek-colorpicker').ek_colorpicker();
		});
    </script>





