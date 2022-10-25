<!-- BEGIN PAGE HEADING ROW -->

<div class="row">
  <div class="col-lg-12">
    <!-- BEGIN BREADCRUMB -->
    <div class="breadcrumbs new">
      <ul class="breadcrumb">
        <li> <a href="#">Home</a> </li>
        <li class="active">Approval</li>
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
      <h1>Dashboard <span class="sub-title">Approve Request</span></h1>
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
            <h4>Some text here</h4>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Address: </label>
          <div class="col-md-7">
            <div class="input-group">
              <h4>Some text here</h4>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Phone: </label>
          <div class="col-md-7">
            <h4>Some text here</h4>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Email: </label>
          <div class="col-md-7">
            <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
              <h4>Some text here</h4>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Gender: </label>
          <div class="col-md-7">
            <h4>Some text here</h4>
          </div>
        </div>
        <hr>
        <h4>Request</h4>
        <div class="form-group">
          <label class="col-md-4 control-label">Request: </label>
          <div class="col-md-7">
            <h4>Some text here</h4>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Amount: </label>
          <div class="col-md-7">
            <div class="input-group">
              <h4>Some text here</h4>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Status: </label>
          <div class="col-md-7">
            <h4>Some text here</h4>
          </div>
        </div>
		 <div class="form-group">
          <label class="col-md-4 control-label">Date: </label>
          <div class="col-md-7">
            <h4>Some text here</h4>
          </div>
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

    <hr>
        <h4><font color="white">The</font></h4>
       		<div class="portlet">
											<div class="portlet-heading inverse">
												<div class="portlet-title">
													<h4><i class="fa fa-line-chart"></i>Approval and Comment</h4>
												</div>

											</div>
											<div id="m-charts" class="panel-collapse collapse in">
												<div class="portlet-body">
													<div class="row">
														<div >
															<!--begin form-->
									                 <form class="form-horizontal" role="form" method="post" id="reqForm">
														<div class="form-group">
															<label class="col-md-2 control-label">Action:</label>
															<div class="col-md-6">
														<select class="form-control" id="action" name="action">
														    <option value="Approved">Approve</option>
															<option value="Disapproved">Disapprove</option>
															<option value="Pending">Pending</option>
														</select>	</div>
														</div>


														<div class="form-group">
															<label class="col-md-2 control-label">Minute:</label>
															<div class="col-md-6">
															<div class="clearfix">
																	<textarea class="form-control input-xxlarge" name="minute" id="minute" rows="3"></textarea>
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
																	<button type="button" class="btn btn-primary">Post</button>
																	<button type="submit" class="btn">Cancel</button>
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
        </div>



        <br/>
      </form>
    </div>
  </div>
</div>
