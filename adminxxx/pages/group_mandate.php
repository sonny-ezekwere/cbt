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
				<li> <a href="#">Home</a> </li>
				<li class="active">Multiple Mandate</li>
			</ul>

		</div>
		<!-- END BREADCRUMB -->

		<div class="page-header title">
			<!-- PAGE TITLE ROW -->
			<h1>Dashboard <span class="sub-title">Multiple Mandate</span></h1>
		</div>
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<!-- END PAGE HEADING ROW -->

<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
<div class="form-group">
	<label class="col-sm-2 control-label">Search for Batch:</label>
	<div class="col-sm-2">
		<input type="search" class="form-input" name="search" placeholder="Search Using Batch No" />
	</div>
	<div class="col-sm-1">
		<div class="btn btn-primary" >Search</div>
	</div>
</div>
<br /><br />
<div class="portlet">
	<div class="portlet-heading dark">
		<div class="portlet-title">
			<h4>Multiple Mandate Request</h4>
		</div>
		<div class="clearfix"></div>
	</div>
	<br />

	<div class="PrintArea area2 all" style="width:100%"><!-- Start of Print Div -->
		<div>
			<span style="float:left; padding-left:10px"><img src="pages/logo.png" alt="Logo" /></span>

			<span style="float:right; padding-right:10px">Port Harcourt Crescent <br />
				Off Gimbiya Street P.M.B 564 Area 11,<br />
			Garki, Abuja, Nigeria</span></div>
			<div style="margin-top:1.5em;">
				<br /><br />
				<h2><center>National Information Technology Development Agency (NITDA)</center></h2>

			</div>
			<br />

			<div class="portlet"><!-- /Portlet -->
				<div class="portlet-heading dark">
					<div class="portlet-title">
						<h4>MANDATE</h4>
					</div>
					<div class="portlet-widgets">
						<a data-toggle="collapse" data-parent="#accordion" href="#basic"><i class="fa fa-chevron-down"></i></a>
						<span class="divider"></span>
						<a href="#" class="box-close"><i class="fa fa-times"></i></a>
					</div>
					<div class="clearfix"></div>
				</div>


				<div class="modal fade" id="ajaxModal" role="basic"
				aria-hidden="true">
					<div class="page-loading page-loading-boxed">

					</div>

					<div class="modal-dialog">
						<div class="modal-content" id="mydiv"></div>



					</div>


				</div>
				<div id="basic" class="panel-collapse collapse in">
					<div class="portlet-body no-padding">
						<table class="table table-bordered table-hover tc-table">
							<thead>
								<tr>
									<!--<th class="col-small"><label><input type="checkbox" class="tc"><span class="labels"></span></label></th>-->
									<th>BatchNo</th>
									<th>Full Name</th>
									<th class="hidden-xs">Bank Name</th>
									<th class="hidden-xs">Account No</th>
									<!--<th class="hidden-xs">Account Type</th>-->
									<th class="hidden-xs">Account Name</th>
									<th class="hidden-xs">Category</th>
									<th class="hidden-xs">Description</th>
									<th class="hidden-xs">Amount</th>
									<th class="hidden-xs">Status</th>
									<th class="col-medium">Action</th>
								</tr>
							</thead>
							<tbody>
								<!--<tr>
									<td class="col-small center"><label><input type="checkbox" class="tc"><span class="labels"></span></label></td>
									<td>Full Name Label
									</td>
									<td class="hidden-xs">Bank Name Label</td>
									<td class="hidden-xs">Acc No Label</td>
									<td class="hidden-xs">Acc Type Label</td>
									<td class="hidden-xs">Acc Name Label</td>
									<td class="hidden-xs">Category</td>
									<td class="hidden-xs">Description</td>
									<td class="hidden-xs">Amount</td>
									<td class="hidden-xs"><span class="label label-pending arrowed-in-right arrowed-in">Approve</span></td>
									<td class="col-medium center">
									<div class="btn-group btn-group-xs ">
									<a href="" class="btn btn-inverse"><i class="fa fa-pencil icon-only"></i></a>
									<a href="" class="btn btn-danger"><i class="fa fa-times icon-only"></i></a>
									</div>
									</td>

								</tr>-->
								<?php echo $ActionObj->getAllMandate('0'); ?>

								<!--<tr><td colspan="14"><button onclick="window.print()" type="button" class="btn btn-primary">Print</button></td></tr>-->
							</tbody>

						</table>
					</div>
				</div><!-- /Portlet -->
				<!-- End of Bio-Data Table -->


			</div><!-- End of Print Div -->
			<div class="clearfix"></div><br /><br />
			<div style="margin-left:1em;">
				<span style="float:left;">...............................<br />
					<span style="font-weight:bold">DG Signature</span>

				</span>
				<span style="float:left; margin-left:20em;">...............................<br />
					<span style="font-weight:bold">ACN Signature</span>

				</span>

				<span style="float:right; margin-right:1em;">...............................<br />
					<span style="font-weight:bold">DFA Signature</span>

				</span>

			</div>

	</div>
	<div class="clearfix"></div><br />
	<div style="margin-left:20px; margin-bottom:10px;" class="buttonBar">
		<div class="b1 btn btn-primary" >Print</div>
	</div>


	<div style="display:none" class="SettingsBox">
		<div style="width: 400px; padding: 20px;">


			<div style="font-weight: bold; border-top: solid 1px #999fff; padding-top: 10px;">Settings</div>
			<table>
				<tbody>

					<tr>
						<td><input value="popup" name="mode" id="popup" checked="" type="radio"> Popup</td>
					</tr>
					<!--
						<tr>
						<td style="padding-left: 20px;"><input value="popup" name="popup" id="closePop" type="checkbox"> Close popup</td>
						</tr>
						<tr>
						<td><input value="iframe" name="mode" id="iFrame" type="radio"> IFrame</td>
						</tr>
						<tr>
						<td>Extra css: <input type="text" name="extraCss" size="50" /></td>
						</tr>
					-->
					<tr>
						<td><div class="settingName">Print area:</div>
							<div class="settingVals">
								<input type="checkbox" class="selPA" value="area1" checked /> <br>

								<input type="checkbox" class="selPA" value="area2" checked /><br>
								<input type="checkbox" class="selPA" value="area3" checked /> <br>

							</div>
						</td>
					</tr>

					<tr>
						<td><div class="settingName">Retain Attributes:</div>
							<div class="settingVals">
								<input type="checkbox" checked name="retainCss"   id="retainCss" class="chkAttr" value="class" /> Class
								<br>
								<input type="checkbox" checked name="retainId"    id="retainId"  class="chkAttr" value="id" /> ID
								<br>
								<input type="checkbox" checked name="retainStyle" id="retainId"  class="chkAttr" value="style" /> Style
							</div>
						</td>
					</tr>


					<!--
						<tr>
						<td><div style="padding: 3px; border: solid 1px #ddd;">Add to head :
						<input type="checkbox" checked name="addElements" id="addElements" class="chkAttr" />
						<pre>&lt;meta charset="utf-8" /&gt;<br>&lt;http-equiv="X-UA-Compatible" content="IE=edge"/&gt;</pre>
						</div>
						</td>
						</tr>
					-->
				</tbody></table>
		</div>
	</div>

	<script src="../assets/js/jquery.PrintArea.js" type="text/JavaScript" language="javascript"></script>

	<script>
		$(document).ready(function(){
			function PrintElem(elem)
			{
				Popup($(elem).html());
			}

			function Popup(data)
			{
				var mywindow = window.open('', 'my div', 'height=1100,width=1100 ');
				mywindow.document.write('<html><head><title>my div</title>');
				/*optional stylesheet*/ //mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
				mywindow.document.write('</head><body >');
				mywindow.document.write(data);
				mywindow.document.write('</body></html>');

				mywindow.document.close(); // necessary for IE >= 10
				mywindow.focus(); // necessary for IE >= 10

				mywindow.print();
				mywindow.close();

				return true;
			}

			$('body').on('hidden.bs.modal', '.modal', function () {
				$('#ajaxModal').removeData('bs.modal').find('.modal-content').html('');
			});


			var dialog = $("div.testDialog").dialog({position : { my : "left top", at : "left bottom+50", of : ".SettingsBox" }, width: "1100", title: "Print Dialog Box Contents"});

			$(".toggleDialog").click(function(){
				dialog.dialog("open");
			});

			$("div.b1").click(function(){

				var mode = $("input[name='mode']:checked").val();
				var close = mode == "popup" && $("input#closePop").is(":checked");
				var extraCss = $("input[name='extraCss']").val();

				var print = "";
				$("input.selPA:checked").each(function(){
					print += (print.length > 0 ? "," : "") + "div.PrintArea." + $(this).val();
				});

				var keepAttr = [];
				$(".chkAttr").each(function(){
					if ($(this).is(":checked") == false )
                    return;

					keepAttr.push( $(this).val() );
				});

				var headElements = $("input#addElements").is(":checked") ? '<meta charset="utf-8" />,<meta http-equiv="X-UA-Compatible" content="IE=edge"/>' : '';

				var options = { mode : mode, popClose : close, extraCss : extraCss, retainAttr : keepAttr, extraHead : headElements };

				$( print ).printArea( options );
			});

			$("input[name='mode']").click(function(){
				if ( $(this).val() == "iframe" ) $("#closePop").attr( "checked", false );
			});
		});

	</script>

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
