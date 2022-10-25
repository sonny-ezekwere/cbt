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

	  <div id="ft-1" class="panel-collapse collapse in" style="float:left; width:100%">
    <div class="portlet-body">
      <form class="form-horizontal" role="form" method="post">
        <!-- Begin of Bio-Data Mandate -->
        <hr>
        <h4>BIO-DATA</h4>
        <hr>
        <div class="form-group">
          <label class="col-md-4 control-label">First Name: </label>
          <div class="col-md-7">
            <h4><?php //echo $profile[2].' ,'.$profile[3];?><b>First Name Label</b></h4>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Last Name: </label>
          <div class="col-md-7">
            <div class="input-group">
              <h4><?php //echo $profile[4];?><b>Last Name Label</b></h4>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Middle Name: </label>
          <div class="col-md-7">
            <h4><?php //echo $profile[5];?><b>Middle Name Label</b></h4>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Email Address: </label>
          <div class="col-md-7">
            <div class="input-group">
              <h4><?php //echo $profile[6];?><b>Email Address Label</b></h4>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Gender: </label>
          <div class="col-md-7">
            <h4><?php //echo $profile[7];?><b>Gender Label</b></h4>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Address: </label>
          <div class="col-md-7">
            <h4><?php //echo $profile[7];?><b>Address Label</b></h4>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Date of Birth: </label>
          <div class="col-md-7">
            <h4><?php //echo $profile[7];?><b>Date of Birth Label</b></h4>
          </div>
        </div>
         <div class="form-group">
          <label class="col-md-4 control-label">Marital Status: </label>
          <div class="col-md-7">
            <h4><?php //echo $profile[7];?><b>Marital Status Label</b></h4>
          </div>
        </div>

         <div class="form-group">
          <label class="col-md-4 control-label">State: </label>
          <div class="col-md-7">
            <h4><?php //echo $profile[7];?> <b>State Label</b> </h4>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">LGA: </label>
          <div class="col-md-7">
            <h4><?php //echo $profile[7];?><b>LGA Label</b></h4>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Country: </label>
          <div class="col-md-7">
            <h4><?php //echo $profile[7];?><b>Nationality Label</b></h4>
          </div>
        </div>
        <!-- End of Bio-Data Mandate -->


        <!-- Begin of Account Detail -->
        <hr>
        <h4>ACCOUNT DETAIL</h4>
        <hr>
        <div class="form-group">
          <label class="col-md-4 control-label">Bank Name: </label>
          <div class="col-md-7">
            <h4><?php //echo $profile[2].' ,'.$profile[3];?><b>Bank Name Label</b></h4>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Account No: </label>
          <div class="col-md-7">
            <div class="input-group">
              <h4><?php //echo $profile[4];?><b>Account No Label</b></h4>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Account Type: </label>
          <div class="col-md-7">
            <h4><?php //echo $profile[5];?><b>Account Type Label</b></h4>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Account Name: </label>
          <div class="col-md-7">
            <div class="input-group">
              <h4><?php //echo $profile[6];?><b>Account Name Label</b></h4>
            </div>
          </div>
        </div>

        <!-- End of Account Detail -->

        <!-- Begin of Request Detail -->
        <hr>
        <h4>REQUEST</h4>
        <hr>
        <div class="form-group">
          <label class="col-md-4 control-label">Category: </label>
          <div class="col-md-7">
            <h4><?php //echo $profile[2].' ,'.$profile[3];?><b>Category Label</b></h4>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Description: </label>
          <div class="col-md-7">
            <div class="input-group">
              <h4><?php //echo $profile[4];?><b>Description Label</b></h4>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Amount: </label>
          <div class="col-md-7">
            <h4><?php //echo $profile[5];?><b>Amount Label</b></h4>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Status: </label>
          <div class="col-md-7">
            <div class="input-group">
              <h4><?php //echo $profile[6];?><b>Status Label</b></h4>
            </div>
          </div>
        </div>
        <button type="button" class="btn btn-primary">Print</button>
        <br /><br /><br /><br />
     <!-- End of Request Deatil -->
      </form>
    </div>
  </div>



</div>
