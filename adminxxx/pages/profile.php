<?php
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
?>
<!-- BEGIN PAGE HEADING ROW -->

<div class="row">
  <div class="col-lg-12">
    <!-- BEGIN BREADCRUMB -->
    <div class="breadcrumbs new">
      <ul class="breadcrumb">
        <li> <a href="#">Home</a> </li>
        <li class="active">Profile</li>
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
      <h1>Dashboard <span class="sub-title">Profile</span></h1>
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
      <h4>Profile</h4>
    </div>
    <div class="clearfix"></div>
  </div>
  <div id="ft-1" class="panel-collapse collapse in">
    <div class="portlet-body">
      <form class="form-horizontal" role="form" method="post">
        <h4>Bio Data</h4>
        <hr>
        <div class="form-group">
          <label class="col-md-4 control-label">Name: </label>
          <div class="col-md-7">
            <h4><?php echo $profile[2].' ,'.$profile[3];?></h4>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Address: </label>
          <div class="col-md-7">
            <div class="input-group">
              <h4><?php echo $profile[4];?></h4>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Phone: </label>
          <div class="col-md-7">
            <h4><?php echo $profile[5];?></h4>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Email: </label>
          <div class="col-md-7">
            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
              <h4><?php echo $profile[6];?></h4>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Gender: </label>
          <div class="col-md-7">
            <h4><?php echo $profile[7];?></h4>
          </div>
        </div>
        <hr>
        <h4>Admission Date</h4>
        <div class="form-group">
          <label class="col-md-4 control-label">School: </label>
          <div class="col-md-7">
            <h4>Some text here</h4>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Course: </label>
          <div class="col-md-7">
            <div class="input-group">
              <h4>Some text here</h4>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Duration: </label>
          <div class="col-md-7">
            <h4>Some text here</h4>
          </div>
        </div>
        <hr>
        <h4>Request</h4>
        <div class="portlet-body">
          <table class="table table-bordered table-hover tc-table">
            <thead>
              <tr>
                <th class="col-small center">SN</th>
                <th class="hidden-xs">Fullname</th>
                <th class="hidden-xs">Description</th>
                <th class="hidden-xs">Amount</th>
                <th class="hidden-xs">Status</th>
				<th class="hidden-xs">Date</th>
				<th class="hidden-xs">Action</th>
              </tr>
            </thead>
            <tbody>
              <!--<tr>

                <td>Mark </td>
                <td class="hidden-xs">35</td>
                <td class="hidden-xs">387</td>
                <td class="hidden-xs">$70</td>
                <td class="hidden-xs"><span class="label label-paid arrowed-in-right arrowed-in">Paid</span></td>
              </tr>-->

              <?php echo $ActionObj->getAllRequest($profile[1]); ?>
            </tbody>
          </table>
        </div>
        <hr>
        <h4>Documents</h4>
        <div class="col-md-2">
          <div class="btn-margin-bottom-5"> <a class="btn btn-app"><i class="fa fa-file-pdf-o"></i>View</a></div>
          <h6  style="margin-left: 7px;">The file name</h6>
        </div>
        <div class="col-md-2">
          <div class="btn-margin-bottom-5"> <a class="btn btn-app"><i class="fa fa-file-pdf-o"></i>View</a> </div>
          <h6  style="margin-left: 7px;">The file name</h6>
        </div>
        <div class="col-md-2">
          <div class="btn-margin-bottom-5"> <a class="btn btn-app"><i class="fa fa-file-pdf-o"></i>View</a> </div>
          <h6  style="margin-left: 7px;">The file name</h6>
        </div>
        <div class="col-md-2">
          <div class="btn-margin-bottom-5"> <a class="btn btn-app"><i class="fa fa-file-pdf-o"></i>View</a> </div>
          <h6  style="margin-left: 7px;">The file name</h6>
        </div>
        <div class="col-md-2">
          <div class="btn-margin-bottom-5"> <a class="btn btn-app"><i class="fa fa-file-pdf-o"></i>View</a> </div>
          <h6  style="margin-left: 7px;">The file name</h6>
        </div>
        <div class="col-md-2">
          <div class="btn-margin-bottom-5"> <a class="btn btn-app"><i class="fa fa-file-pdf-o"></i>View</a> </div>
          <h6 style="margin-left: 7px;">The file name</h6>
        </div>
		<?php //echo $ActionObj->getAllDoc($profile[1]); ?>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
      </form>
    </div>
  </div>
</div>
