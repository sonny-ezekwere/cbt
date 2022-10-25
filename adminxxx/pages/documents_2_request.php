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
<script>
	function getData()
	{
		var get_staffid = dept.options[specify.selectedIndex].value;
		alert(get_staffid);
	}

	// arguments: reference to select list, callback function (optional)
	function getSelectedOptions(sel, fn) {
		var opts = [], opt;

		// loop through options in select list
		for (var i=0, len=sel.options.length; i<len; i++) {
			opt = sel.options[i];

			// check if selected
			if ( opt.selected ) {
				// add to array of option elements to return from this function
				opts.push(opt);

				// invoke optional callback function if provided
				if (fn) {
					fn(opt);
				}
			}
		}

		// return array containing references to selected option elements
		return opts;
	}

	// example callback function (selected options passed one by one)
	function callback(opt) {
		// can access properties of opt, such as...
		//alert( opt.value )
		//alert( opt.text )
		//alert( opt.form )

		// display in textarea for this example
		var display = document.getElementById('doc_id');
		display.innerHTML += opt.value + ', ';
	}

	// anonymous function onchange for select list with id demoSel
	document.getElementById('dept').onchange = function(e){
		// get reference to display textarea
		var display = document.getElementById('doc_id');
		display.innerHTML = ''; // reset

		// callback fn handles selected options
		getSelectedOptions(this, callback);

		// remove ', ' at end of string
		var str = display.innerHTML.slice(0, -2);
		display.innerHTML = str;
	};

	// Tracking role_id
	function getSelectedRole(sel, fn) {
		var opts = [], opt;

		// loop through options in select list
		for (var i=0, len=sel.options.length; i<len; i++) {
			opt = sel.options[i];

			// check if selected
			if ( opt.selected ) {
				// add to array of option elements to return from this function
				opts.push(opt);

				// invoke optional callback function if provided
				if (fn) {
					fn(opt);
				}
			}
		}

		// return array containing references to selected option elements
		return opts;
	}

	// example callback function (selected options passed one by one)
	function callback1(opt) {
		// can access properties of opt, such as...
		//alert( opt.value )
		//alert( opt.text )
		//alert( opt.form )

		// display in textarea for this example
		var displays = document.getElementById('displays');
		displays.innerHTML += opt.value + ', ';
	}

	// anonymous function onchange for select list with id demoSel
	document.getElementById('select_role').onchange = function(e) {
		// get reference to display textarea
		var displays = document.getElementById('displays');
		displays.innerHTML = ''; // reset

		// callback fn handles selected options
		getSelectedRole(this, callback1);

		// remove ', ' at end of string
		var str = displays.innerHTML.slice(0, -2);
		displays.innerHTML = str;
	};


	// Tracking staff_id
	function getSelectedStaff(sel, fn) {
		var opts = [], opt;

		// loop through options in select list
		for (var i=0, len=sel.options.length; i<len; i++) {
			opt = sel.options[i];

			// check if selected
			if ( opt.selected ) {
				// add to array of option elements to return from this function
				opts.push(opt);

				// invoke optional callback function if provided
				if (fn) {
					fn(opt);
				}
			}
		}

		// return array containing references to selected option elements
		return opts;
	}

	// example callback function (selected options passed one by one)
	function callback2(opt) {
		// can access properties of opt, such as...
		//alert( opt.value )
		//alert( opt.text )
		//alert( opt.form )

		// display in textarea for this example
		var priv_id = document.getElementById('priv_id');
		priv_id.innerHTML += opt.value + ', ';
	}

	// anonymous function onchange for select list with id demoSel
	document.getElementById('privilege').onchange = function(e) {
		// get reference to display textarea
		var priv_id = document.getElementById('priv_id');
		priv_id.innerHTML = ''; // reset

		// callback fn handles selected options
		getSelectedStaff(this, callback2);

		// remove ', ' at end of string
		var str = priv_id.innerHTML.slice(0, -2);
		priv_id.innerHTML = str;
	};

	// Tracking staff_id
	function getSelectedPriv(sel, fn) {
		var opts = [], opt;

		// loop through options in select list
		for (var i=0, len=sel.options.length; i<len; i++) {
			opt = sel.options[i];

			// check if selected
			if ( opt.selected ) {
				// add to array of option elements to return from this function
				opts.push(opt);

				// invoke optional callback function if provided
				if (fn) {
					fn(opt);
				}
			}
		}

		// return array containing references to selected option elements
		return opts;
	}

	// example callback function (selected options passed one by one)
	function callback3(opt) {
		// can access properties of opt, such as...
		//alert( opt.value )
		//alert( opt.text )
		//alert( opt.form )

		// display in textarea for this example
		var staff_id = document.getElementById('staff_id');
		staff_id.innerHTML += opt.value + ', ';
	}

	// anonymous function onchange for select list with id demoSel
	document.getElementById('staff_name').onchange = function(e) {
		// get reference to display textarea
		var staff_id = document.getElementById('staff_id');
		staff_id.innerHTML = ''; // reset

		// callback fn handles selected options
		getSelectedPriv(this, callback3);

		// remove ', ' at end of string
		var str = staff_id.innerHTML.slice(0, -2);
		staff_id.innerHTML = str;
	};

</script>


</script>
<script type="text/javascript">
	function CheckForm(){
		var checked=false;
		var elements = document.getElementsByName("Privilege[]");
		for(var i=0; i < elements.length; i++){
			if(elements[i].checked) {
				checked = true;
			}
		}
		if (!checked) {
			alert('You must select at least one privilege');
		}
		return checked;
	}
</script>


<link rel="stylesheet" type="text/css"
href="../../assets/global/plugins/select2/select2.css" />
<div class="row">
	<div class="col-lg-12">
		<!-- BEGIN BREADCRUMB -->
		<div class="breadcrumbs new">
			<ul class="breadcrumb new">
				<li>
					<a href="#">Home</a>
				</li>
				<li class="active">Settings</li>
				<li class="active">Attaching Documents to a request</li>
			</ul>
		</div>
		<!-- END BREADCRUMB -->

		<div class="page-header title">
			<!-- PAGE TITLE ROW -->
			<h1>Settings<span class="sub-title">Tie Documents to request </span></h1>
		</div>



	</div><!-- /.col-lg-12 -->
</div><!-- /.row -->		<!-- /.modal -->
<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
<!-- BEGIN STYLE CUSTOMIZER -->

<!-- END STYLE CUSTOMIZER -->
<!-- BEGIN PAGE HEADER-->
<div class="row">

</div>
<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
<div class="row">
	<div class="col-md-12">
		<div class="tabbable tabbable-custom boxless tabbable-reversed">
			<ul class="nav nav-tabs">
				<li class="active">
					<a href="#tab_0" data-toggle="tab">Assign Required Documents to a Request</a>
				</li>
				<li>
					<a href="#tab_1" data-toggle="tab">Create List of Request</a>
				</li>
				<li>
					<a href="#tab_2" data-toggle="tab">Create list of Documents</a>
				</li>


			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="tab_0">
					<div class="portlet box blue">

							<div class="caption">
							<div class="portlet-heading inverse">
												<div class="portlet-title">
								<h4><i class="fa fa-line-chart">Assign  Documents</i></h4> <?php //print_r ($_SESSION['privList']); echo '-'.$_SESSION['id']; ?>
								</div>
												<div class="portlet-widgets">
													<a id="daterange" href="javascript:;" class="tooltip-primary" data-placement="top" data-rel="tooltip" title="DateRangePicker"><i class="fa fa-calendar"></i></a>
													<span class="divider"></span>
													<a data-toggle="collapse" data-parent="#accordion" href="#m-charts"><i class="fa fa-chevron-down"></i></a>
												</div>
												<div class="clearfix"></div>
											</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
<form class="form-horizontal" role="form" method="post" id="assignDetailForm">
							<div class="form-body" >

								<div class="row">

									<!--/span-->

									<!--/span-->
								</div>
								<!--/row-->
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">

											<!--start dept-->
											<label class="control-label col-md-3">Request<font color=red> *</font></label>
											<div class="col-md-9" id="lgaDiv">
												<select class="form-control" name="request"  id="request" onchange="callAjaxState();">
													<option>-- Select Request --</option>
													<?php
													$ActionObj->getAllRequest();
													?>
												</select>
											</div>
											<!--end dept-->

										</div>
									</div>
									<!--/span-->
									<div class="col-md-6">

					<textarea name="doc_id" id="doc_id" style="display:none"></textarea

										<!--/span-->
									</div>
									<!--/row-->
									<div class="row">
										<div class="col-md-6">

										</div>
										<!--/span-->

									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label col-md-3">Documents<font color=red> *</font></label>
											<div class="radio-list">
												<div class="col-md-9" id="listPrivDiv">

													<?php $ActionObj->getAllDocumentList(''); ?>
												</div>

											</div>
											<!--/span-->


										</div>
										<!--/span-->
									</div>
									<!--/span-->
								</div>

								<!--/row-->
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label col-md-3"></label>
											<div class="checkbox-list">
												<div class="col-md-9">
													<label class="checkbox-inline">


													</div>

												</div>
												<!--/span-->

											</div>
											<!--/span-->
										</div>

									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label col-md-3"></label>

											<!--/span-->

										</div>
										<!--/span-->
									</div>

									<!--/row-->

									<!--/row-->
								</div>
								<div  id="processDiv" ></div>
 								<div class="form-actions fluid">
									<div class="row">

										<input type="button" name="action_assign" id="action_assign" class="btn btn-primary" value="Assign"
										onclick="showAjax('assignDetailForm','../includes/ajaxaction1.php?Action=processDocuments','processDiv')"

										/>

										<button type="button" class="btn default">Cancel</button>


										<div class="col-md-6">
										</div>
									</div>
								</div>


								<!-- END FORM-->
							</div>

						</div>
					</form>
					</div>






					<div class="tab-pane" id="tab_1">

						<div class="portlet box blue">
							<div class="portlet-heading inverse">
												<div class="portlet-title">
								<h4><i class="fa fa-line-chart">List Of Requests</i></h4> <?php //print_r ($_SESSION['privList']); echo '-'.$_SESSION['id']; ?>
								</div>
												<div class="portlet-widgets">
													<a id="daterange" href="javascript:;" class="tooltip-primary" data-placement="top" data-rel="tooltip" title="DateRangePicker"><i class="fa fa-calendar"></i></a>
													<span class="divider"></span>
													<a data-toggle="collapse" data-parent="#accordion" href="#m-charts"><i class="fa fa-chevron-down"></i></a>
												</div>
												<div class="clearfix"></div>
								</div>
							<div class="portlet-body form" id="displayContent">
								<!-- BEGIN FORM-->

								<div class="form-body">


									<!-- sample table -->
									<div class="col-md-6">
										<!-- BEGIN SAMPLE TABLE PORTLET-->
										<div class="portlet box blue">
											<div class="portlet-heading inverse">
												<div class="portlet-title">
													<i class="fa fa-cogs"></i>Existing Request
												</div>
												<div class="portlet-widgets">
													<a id="daterange" href="javascript:;" class="tooltip-primary" data-placement="top" data-rel="tooltip" title="DateRangePicker"><i class="fa fa-calendar"></i></a>
													<span class="divider"></span>
													<a data-toggle="collapse" data-parent="#accordion" href="#m-charts"><i class="fa fa-chevron-down"></i></a>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>

										<div class="portlet-body">
											<div class="table-scrollable">
												<table class="table table-hover">
													<thead>
														<tr>

															<th>Request ID</th>
															<th>Request Name</th>
															<th></th>
														</tr>
													</thead>
													<tbody>
														<div id="delete_role">
															<?php
																$ActionObj->getAllRequests2();
															?>
														</div>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<!-- END SAMPLE TABLE PORTLET-->
								</div>
								<!-- end table -->

<form class="form-horizontal" role="form" method="post" id="requestDetailForm">
								<div class="form-group">
									<div class="col-md-6">
										<label class="col-md-3 control-label">Request<font color=red> *</font></label>
										<div class="col-md-9">
											<input type="text" class="form-control" placeholder="type request name" id="request" name="request">
											<span class="help-block"></span>
											<div  id="processReq" ></div>
										<input type="button" value="Add New" name="add_priv" class="btn btn-primary"
											onclick="showAjax('requestDetailForm','../includes/ajaxaction1.php?Action=processRequest','processReq')">
										</div>
									</div>
								</div>

						</form>
					</div>

							<!-- END FORM-->
						</div>

					</div>



						<div class="tab-pane" id="tab_2">
							<div class="portlet box blue">
							<div class="portlet-heading inverse">
												<div class="portlet-title">
								<h4><i class="fa fa-line-chart">List Of Documents</i></h4> <?php //print_r ($_SESSION['privList']); echo '-'.$_SESSION['id']; ?>
								</div>
												<div class="portlet-widgets">
													<a id="daterange" href="javascript:;" class="tooltip-primary" data-placement="top" data-rel="tooltip" title="DateRangePicker"><i class="fa fa-calendar"></i></a>
													<span class="divider"></span>
													<a data-toggle="collapse" data-parent="#accordion" href="#m-charts"><i class="fa fa-chevron-down"></i></a>
												</div>
												<div class="clearfix"></div>
								</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->

								<div class="form-body">

									<!-- sample table -->
									<div class="col-md-6">
										<!-- BEGIN SAMPLE TABLE PORTLET-->
										<div class="portlet box blue">
											<div class="portlet-heading inverse">
												<div class="portlet-title">
													<i class="fa fa-cogs"></i>Existing Documents
												</div>
												<div class="portlet-widgets">
													<a id="daterange" href="javascript:;" class="tooltip-primary" data-placement="top" data-rel="tooltip" title="DateRangePicker"><i class="fa fa-calendar"></i></a>
													<span class="divider"></span>
													<a data-toggle="collapse" data-parent="#accordion" href="#m-charts"><i class="fa fa-chevron-down"></i></a>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>

										<div class="portlet-body">
											<div class="table-scrollable">
												<table class="table table-hover">
													<thead>
														<tr>

															<th>Document ID </th>
															<th>Document Name</th>
															<th></th>
														</tr>
													</thead>
													<tbody>
														<div id="delete_role">
															<?php
																$ActionObj->getAllDocuments2();
															?>
														</div>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<!-- END SAMPLE TABLE PORTLET-->
								</div>
								<!-- end table -->
								<div class="form-group">
									<div class="col-md-6">

										<div class="col-md-9">
											<div id="add_privilege"></div>
											<span class="help-block"></span>

										</div>
									</div>
								</div>
<form class="form-horizontal" role="form" method="post" id="documentDetailForm">

								<div class="form-group">
									<div class="col-md-6">
										<label class="col-md-3 control-label">Document<font color=red> *</font></label>
										<div class="col-md-9">
											<input type="text" class="form-control" placeholder="type document name" id="document" name="document">
											<span class="help-block"></span>
						             <div  id="processDoc" ></div>
											<input type="button" value="Add New" name="add_priv" class="btn btn-primary"
											onclick="showAjax('documentDetailForm','../includes/ajaxaction1.php?Action=addDocument','processDoc')">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-6">
										<div class="col-md-9">
											<span class="help-block"></span>

										</div>
									</div>
								</div>


	</form>

							</div>
							<!-- END FORM-->
						</div>
					</div>


				</div>






			</div>
		</div>
	</div>
</div>
<!-- END PAGE CONTENT-->
<script>
	function callAjaxState(){
	  var request = encodeURIComponent(document.getElementById("request").value);
		$('#listPrivDiv').html('<img src="../includes/loading.gif" />');
	//	var param = "Action=getPriv&request="+request;
	//	$.ajax({url:"../../includes/ajaxaction1.php",data: param, cache: false, success: function(html){
	//   showAjax('','includes/ajaxaction1.php?Action=getPriv&id='+v,null,'listPrivDiv');
		$('#listPrivDiv').html(''); $("#listPrivDiv").html(html); }
	//});
	}


	$('#dept').on('change',function(){
		$('#doc_id').val($(this).val());
	})


	$('#staff_name').on('change',function(){
		$('#staff_id').val($(this).val());
	})
	function chngDisp2(v){
		$('#staff_id').val(v);
	}
</script>
