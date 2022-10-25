<!DOCTYPE html>

    <!-- BEGIN PAGE HEADING ROW -->

<div class="row">
  <div class="col-lg-12">
    <!-- BEGIN BREADCRUMB -->
    <div class="breadcrumbs new">
      <ul class="breadcrumb">
        <li> <a href="#">Home</a> </li>
        <li class="active">Multiple Mandate</li>
      </ul>
      <div class="b-right hidden-xs">
        <ul>
          <li><a href="#" title=""><i class="fa fa-signal"></i></a></li>
          <li><a href="#" title=""><i class="fa fa-comments"></i></a></li>
          <li class="dropdown"><a href="#" title="" data-toggle="dropdown"><i class="fa fa-plus"></i><span> Item</span></a>
            <ul class="dropdown-menu dropdown-primary dropdown-menu-right">
              <li><a href="#">Item</a></li>
              <li><a href="#">Item</a></li>
              <li><a href="#">Item</a></li>
            </ul>
          </li>
        </ul>
      </div>
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

<div class="portlet">
  <div class="portlet-heading dark">
    <div class="portlet-title">
      <h4>Multiple Mandate Request</h4>
    </div>
    <div class="clearfix"></div>
  </div>
  <br />



  <div class="PrintArea area2 all" style="width:100%">
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
									<div id="basic" class="panel-collapse collapse in">
										<div class="portlet-body no-padding">
											<table class="table table-bordered table-hover tc-table">
												<thead>
													<tr>
														<th class="col-small center"><label><input type="checkbox" class="tc"><span class="labels"></span></label></th>
														<th>Full Name</th>
														<th class="hidden-xs">Bank Name</th>
														<th class="hidden-xs">Account No</th>
														<th class="hidden-xs">Account Type</th>
														<th class="hidden-xs">Account Name</th>
														<th class="hidden-xs">Category</th>
														<th class="hidden-xs">Description</th>
														<th class="hidden-xs">Amount</th>
														<th class="hidden-xs">Status</th>
														<th class="col-medium center">Action</th>
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
													<?php //echo $ActionObj->getAllMandate('0'); ?>

													<!--<tr><td colspan="14"><button onclick="window.print()" type="button" class="btn btn-primary">Print</button></td></tr>-->
												</tbody>

											</table>
									</div>
								</div><!-- /Portlet -->


								<!-- End of Bio-Data Table -->



</div>
  </div>
  <div style="padding: 0 10px 10px;" class="buttonBar">
          <div class="b1 btn btn-primary" >Print</div>
								</div>




   <!--
    <div class="PrintArea area2 all" style="border-color: #999; width:1000px;">
        <div>PRINT DEMO</div>
        <h1>
        PRINT ALL THIS AREA
        </h1>    </div>
  </div>
   -->





<!--
  <div class="testDialog">
    <div class="PrintArea area3 all">
        This is Print Area 3
    </div>
  </div>
  -->

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

        <script src="../assets/js/jquery-1.10.2.js" type="text/JavaScript" language="javascript"></script>
        <script src="../assets/js/jquery-ui-1.10.4.custom.js"></script>
        <script src="../assets/js/jquery.PrintArea.js" type="text/JavaScript" language="javascript"></script>

  <script>
    $(document).ready(function(){

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
</body>
</html>
