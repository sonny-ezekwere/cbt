<?php
/*
session_start();
require_once ('../../includes/makehtmlchar.php'); //set as relevant to path//
 $ConnObj= createobject("adodb.connection");
 $ConnObj->open($GLOBALS['sConnection']);
require_once ('cinforeslib/CONVERSIONS/common.php');
require_once("../../includes/dbQrys.php");
 $ActionObj = new dbQuery($host, $user, $password, $dbname);
 if(isset($_GET['id'])){
 $id = $_GET['id'] ;
 $profile = $ActionObj->getAwardeeProfile($id);
 } else{echo "<script>alert('invalid id');</script>";}
 */
?>
<!-- BEGIN PAGE HEADING ROW -->

<div class="row">
  <div class="col-lg-12">
    <!-- BEGIN BREADCRUMB -->
    <div class="breadcrumbs new">
      <ul class="breadcrumb">
        <li> <a href="#">Home</a> </li>
        <li class="active">Staff Information</li>
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
      <h1>Dashboard <span class="sub-title">Staff Information</span></h1>
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
      <h4>Staff Information</h4>
    </div>
    <div class="clearfix"></div>
  </div>
  <div id="ft-1" class="panel-collapse collapse in">
    <div class="portlet-body">
      <form class="form-horizontal" role="form" method="post">
        <h4>Bio Data</h4>
        <hr>
        <div class="form-group">
          <label class="col-md-4 control-label">First Name: </label>
          <div class="col-md-7">
            <h4><?php //echo $profile[2].' ,'.$profile[3];?></h4>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Last Name: </label>
          <div class="col-md-7">
            <div class="input-group">
              <h4><?php //echo $profile[4];?></h4>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Middle Name: </label>
          <div class="col-md-7">
            <h4><?php //echo $profile[5];?></h4>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Email Address: </label>
          <div class="col-md-7">
            <div class="input-group">
              <h4><?php //echo $profile[6];?></h4>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Gender: </label>
          <div class="col-md-7">
            <h4><?php //echo $profile[7];?></h4>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Address: </label>
          <div class="col-md-7">
            <h4><?php //echo $profile[7];?></h4>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Date of Birth: </label>
          <div class="col-md-7">
            <h4><?php //echo $profile[7];?></h4>
          </div>
        </div>
         <div class="form-group">
          <label class="col-md-4 control-label">Marital Status: </label>
          <div class="col-md-7">
            <h4><?php //echo $profile[7];?></h4>
          </div>
        </div>

         <div class="form-group">
          <label class="col-md-4 control-label">State: </label>
          <div class="col-md-7">
            <h4><?php //echo $profile[7];?></h4>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">LGA: </label>
          <div class="col-md-7">
            <h4><?php //echo $profile[7];?></h4>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Country: </label>
          <div class="col-md-7">
            <h4><?php //echo $profile[7];?></h4>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
