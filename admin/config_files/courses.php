<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Form Elements - Ace Admin</title>

		<meta name="description" content="Common form elements and layouts" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="assets/css/jquery-ui.custom.min.css" />
		<link rel="stylesheet" href="assets/css/chosen.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-datepicker3.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-timepicker.min.css" />
		<link rel="stylesheet" href="assets/css/daterangepicker.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-colorpicker.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>
    <!--<body class="no-skin" style="overflow: auto!important;">
    <div class="main-container ace-save-state" id="main-tainer">-->
    <div id="pagecontent">
                    <div class="page-header">
							<h1>
								Manage Courses
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Add/Edit/Remove Courses
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								
								<form class="form-horizontal" role="form" id="modle">
									<!--<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Module Name </label>
                                           <div class="col-sm-9"> 
										<select class="chosen-select" data-placeholder="Module Name" id="modulename" name="modulename">
                                            <option></option>
                                            <?php 
                                           
                                            /*$sql="select * from modules where module_status=1 group by module_name order by module_name";
                                            $ret=select($sql);
                                            while($row=mysqli_fetch_assoc($ret)){*/
                                            ?>
                                          <option><?php //echo $row['module_name'];?></option>
                                            <?php //}?>
                                      </select>
                                        </div>
									</div>-->
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Course Name </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Course name" name="coursename" class="col-xs-10 col-sm-5" />
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Course Code </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Course code" name="coursecode" class="col-xs-10 col-sm-5" />
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">  </label>

										<div class="checkbox">
													<label>
														<input name="form-field-checkbox" type="checkbox" value="1" class="ace" />
														<span class="lbl"> Active</span>
													</label>
												</div>
									</div>
                                           
									
                                    
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">  </label>
										<div class="btn-group">
											<button type="button" class="btn" onclick="showAjax('modle','config_files/save_course.php','res');">Save</button>
											<button type="button" class="btn">Cancel</button>
										</div>
                                    </div>
                               </form>
                                    </div>
                            </div>
        <div id="res" style="width:90%">
            <?php 
             error_reporting(E_ALL & ~E_NOTICE);
            require "dbmysql.php";
            if($_GET['frm']=='edit'){
                $courseid=$_GET['id'];
                $coursename=$_POST['coursenamex'];
                $coursecode=$_POST['coursecodex'];
                $coursestatus=$_POST['coursestatus'];
               $qry="update courses set course_name='$coursename',course_status='$coursestatus',course_code='$coursecode' where course_id='$courseid'";
            $ret=update($qry);
            if($ret==1)
                echo "<div class='alert alert-success fade in'><strong>Success!</strong> Course updated successfully!</div>";
            else
               echo "<div class='alert alert-danger fade in'><strong>Warning!</strong> Course update failed!</div>"; 
            }
            
            if($_GET['frm']=='delete'){
                $courseid=$_GET['id'];
               $qry="delete from courses where course_id='$courseid'";
            $ret=delete($qry);
            if($ret==1)
                echo "<div class='alert alert-warning fade in'><strong>Success!</strong> Course deleted successfully!</div>";
            else
               echo "<div class='alert alert-danger fade in'><strong>Warning!</strong> Course deletion failed!</div>"; 
            }
            require "courses_list.php";?>
        </div>
    </div>
            <!--</div>                           
    </body>-->