
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
<script>
function getData()
{
 var get_staffid = specify.options[specify.selectedIndex].value;
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
    var display = document.getElementById('display');
    display.innerHTML += opt.value + ', ';
}

// anonymous function onchange for select list with id demoSel
document.getElementById('specify').onchange = function(e) {
    // get reference to display textarea
    var display = document.getElementById('display');
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
									<ul class="breadcrumb">
										<li>
											<a href="#">Home</a>
										</li>
										<li class="active">Settings</li>
										<li class="active">Roles and Privileges</li>
									</ul>


								</div>
								<!-- END BREADCRUMB -->

								<div class="page-header title">
								<!-- PAGE TITLE ROW -->
									<h1>Settings<span class="sub-title">Privileges</span></h1>
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
										<a href="#tab_0" data-toggle="tab">Assign Privileges</a>
									</li>
									<li>
										<a href="#tab_1" data-toggle="tab">Add New Privileges</a>
									</li>


								</ul>
								<div class="tab-content">
				<div class="tab-pane active" id="tab_0">
					 <form class="form-horizontal" role="form" method="post" id="assignForm">
								<div class="portlet box blue">
							<div class="portlet box blue">
						<div class="portlet-heading inverse">
						<div class="portlet-title">
								<i class="fa fa-cogs"></i>Configure Privileges
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
<label class="control-label col-md-3">Staff's Name<font color=red> *</font></label>
															<div class="col-md-9" id="lgaDiv">
													<select class="form-control"  name="staffid" id="staffid"
													onchange="showAjax('assignForm','../includes/ajaxaction.php?Action=getPriv','listPrivDiv')">
																<option value=""> Select Staff </option>
								                        <?php
														    $ActionObj->getStaffDrop();
														 ?>
																</select>
															</div>
														<!--end dept-->

														</div>
													</div>
													<!--/span-->
										<div class="col-md-6">

	                                 <input type="hidden" name="displayid" id="displayid" value=""/>

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
												<label class="control-label col-md-3">Privileges <font color=red> *</font></label>
												<div class="radio-list">
												<div class="col-md-9" id="listPrivDiv">
						   <!--<label ><input type="checkbox" value="Manage Staff" name="Privilege[]">Manage Staff</label>
						   <div><label><input type="checkbox" value="Set Requisition" name="Privilege[]">Set Requisition</label></div>
						   <label><input type="checkbox" value="Manage Requisition" name="Privilege[]">Manage Requisition</label>
						   <label><input type="checkbox" value="Approve Leave" name="Privilege[]">Make Requisition</label>
						   <div><label><input type="checkbox" value="Approve Leave" name="Privilege[]">Approve Leave</label><br/></div>
					       <label><input type="checkbox" value="Approve Requisition(GM)" name="Privilege[]">Approve Requisition(GM)</label>
						   <label><input type="checkbox" value="Approve Requisition(DI)" name="Privilege[]">Approve Requisition(DIR)</label>
                           <label><input type="checkbox" value="Approve Requisition(MD)" name="Privilege[]">Approve Requisition(MD)</label>
                           <label><input type="checkbox" value="Manage Settings" name="Privilege[]">Manage Settings</label> -->
						   <?php  $ActionObj->getAllPrivilegeList(''); ?>
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


													<!--/span-->

													</div>
													<!--/span-->
												</div>

												</div>



												<!--/row-->

												<!--/row-->
											</div>
									<div id="processDiv"></div>
 								<div class="form-actions fluid">
												<div class="row">

													<input type="button" name="action_assign" id="action_assign" class="btn btn-primary" value="Assign"
															onclick="showAjax('assignForm','../includes/ajaxaction.php?Action=assignPriv','processDiv')"

														/>

													<button type="button" class="btn default"
													onclick="showAjax('assignForm','../includes/ajaxaction1.php?Action=cancelPriv','processDiv')"
													>Cancel</button>


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
					 <form class="form-horizontal" role="form" method="post" id="addPrivForm">
										<div class="portlet box blue">
										    <div class="portlet box blue">
						<div class="portlet-heading inverse">
						<div class="portlet-title">
								<i class="fa fa-cogs"></i>Add New Privileges
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

													<div class="form-body">

													<div class="row">

								</div>
													<!-- sample table -->
													<div class="col-md-6">
					<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet box blue">
						<div class="portlet-heading inverse">
						<div class="portlet-title">
								<i class="fa fa-cogs"></i>Existing Privileges
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

									<th>Privilege Name </th>
									<th>Description</th>
									<th></th>
								</tr>
								</thead>
								<tbody>
					<div id="delete_role">
								<?php
		     	$ActionObj->getAllPrivileges();

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
															<label class="col-md-3 control-label">Privilege<font color=red> *</font></label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="type privilege" id="privilege_name" name="privilege_name">
																<span class="help-block"></span>

															</div>


															</div>

												<div class="col-md-6">
															<label class="col-md-3 control-label">Description<font color=red> *</font></label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="type description" id="priv_description" name="priv_description">
																<span class="help-block"></span>
		<input type="button"  value="Add Privilege" class="btn btn-primary"
		onclick="showAjax('addPrivForm','../includes/ajaxaction1.php?Action=addPrivProcess','addNewPriv')">
															</div>
															</div>
											<div id="addNewPriv"><div>
														</div>

														<div class="form-actions fluid">
														<div class="row">
															<div class="col-md-6">
																<div class="col-md-offset-3 col-md-9">
																	<div id="ajaxDivRoleAdd"></div>
																	<!--<button type="button" class="btn green" onClick="callAjaxAddRole()">
																		Add
																	</button>-->
																</div>
															</div>
															<div class="col-md-6"></div>
														</div>
													</div>
													</div>
												<!-- END FORM-->
											</div>
										</div>



									</div>

								</div>
						</form>
							</div>
						</div>
					</div>
					<!-- END PAGE CONTENT-->
<script>
function callAjaxState(){
			//Ajax processing
			var dept = encodeURIComponent(document.getElementById("deptid").value);

			$('#lgaDiv').html('<img src="../../includes/loading.gif" />');
			var param = "ProcessAJax=getlga&dept="+dept;
			$.ajax({url:"../../includes/ajaxcall2.php",data: param, cache: false, success: function(html){

					$('#lgaDiv').html(''); $("#lgaDiv").html(html); }
			});
		}

function chngDisp(v){
$('#displayid').val(v);
ShowPage('includes/ajaxcall.php?ProcessAJax=getPriv&id='+v,null,'listPrivDiv');
}



</script>
