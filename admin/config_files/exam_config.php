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
								Configure Exam
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Add/Edit/Remove Exam Configuration
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								
								<form class="form-horizontal" role="form" id="modle">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Module Name </label>
                                           <div class="col-sm-9"> 
										<select class="chosen-select" data-placeholder="Module Name" id="modulename" name="modulename">
                                            <option></option>
                                            <?php 
                                            error_reporting(E_ALL & ~E_NOTICE);
                                            require "dbmysql.php";
                                            $sql="select * from modules where module_status=1 group by module_name order by module_name";
                                            $ret=select($sql);
                                            while($row=mysqli_fetch_assoc($ret)){
                                            ?>
                                          <option><?php echo $row['module_name'];?></option>
                                            <?php }?>
                                      </select>
                                        </div>
									</div>
                                    
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Course Name </label>
                                           <div class="col-sm-9"> 
										<select class="chosen-select" data-placeholder="Course Name" id="coursename" name="coursename">
                                            <option></option>
                                            <?php 
                                            $sql="select * from courses where course_status=1 group by course_name order by course_name";
                                            $ret=select($sql);
                                            while($row=mysqli_fetch_assoc($ret)){
                                            ?>
                                          <option><?php echo $row['course_name'];?></option>
                                            <?php }?>
                                      </select>
                                        </div>
									</div>
                                    
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Exam Duration (in minutes) </label>
                                           <div class="col-sm-9"> 
										<select class="chosen-select" data-placeholder="Duration" id="duration" name="duration">
                                            <option></option>
                                            <?php 
                                            for($n=5;$n<=240;$n++){
                                            ?>
                                          <option value="<?php echo $n;?>"><?php echo $n;?></option>
                                            <?php }?>
                                      </select>
                                        </div>
									</div>
                                    
                                    <div class="form-group">
                                        <div class="col-md-8">
                                                    <div class="col-md-6">
                                                <label class="col-md-6 control-label ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
												<div class="checkbox" class="col-md-3">
													<label>
														<strong>Subjects</strong>
													</label>
												</div>
                                            </div><div class="col-md-6"><label class="col-sm-9 control-label no-padding-right" for="form-field-1"> <strong>Number Of Questions </strong></label></div>
                                                </div>
                                    </div>
                                    
                                    
											<div class="form-group">
												
                                                <?php 
                                            $sql="select * from subjects where subject_status=1 group by subject_name order by subject_name";
                                            $ret=select($sql);
                                                $k=0;
                                            while($row=mysqli_fetch_assoc($ret)){
                                                ++$k;
                                            ?>
                                                <div class="col-md-8">
                                                    <div class="col-md-6">
                                                <label class="col-md-6 control-label ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
												<div class="checkbox" class="col-md-3">
													<label>
														<input name="form-field-checkbox[]" id="subj<?php echo $k;?>" type="checkbox" value="<?php echo $row['subject_name'];?>" class="ace" onclick="if($(this).is(':checked')) {
            $('#questno<?php echo $k;?>').removeAttr('disabled');
        } else {
        $('#questno<?php echo $k;?>').attr('disabled', 'disabled');
            
        }" />
														<span class="lbl"> <?php echo $row['subject_name'];?></span>
													</label>
												</div>
                                                    </div><div class="col-md-6"><label class="col-sm-9 control-label no-padding-right" for="form-field-1"> <select class="chosen-select" data-placeholder="Number Of Question" id="questno<?php echo $k;?>" name="questno[]" disabled>
                                                    <option></option>
                                                    <?php
                                                    for($i=1;$i<=100;$i++){
                                                    ?>
                                                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                                    <?php }?>
                                                    </select> </label></div>
                                                </div>
                                                <?php
                                                }
                                                ?>
											</div>
										
                                    
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">  </label>
										<div class="btn-group">
											<button type="button" class="btn" onclick="showAjax('modle','config_files/save_config.php','res');">Save</button>
											<button type="button" class="btn">Cancel</button>
										</div>
                                    </div>
                               </form>
                                    </div>
                            </div>
        <div id="res" style="width:90%">
            <?php 
            
            if($_GET['frm']=='edit'){
                $courseid=$_GET['id'];
                $coursename=$_POST['coursenamex'];
                $coursestatus=$_POST['coursestatus'];
               $qry="update courses set course_name='$coursename',course_status='$coursestatus' where course_id='$courseid'";
            $ret=update($qry);
            if($ret==1)
                echo "<div class='alert alert-success fade in'><strong>Success!</strong> Course updated successfully!</div>";
            else
               echo "<div class='alert alert-danger fade in'><strong>Warning!</strong> Course update failed!</div>"; 
            }
            
            if($_GET['frm']=='delete'){
                $sno=$_GET['id'];
               $qry="delete from exam_config where sno='$sno'";
            $ret=delete($qry);
            if($ret==1)
                echo "<div class='alert alert-warning fade in'><strong>Success!</strong> Exam config deleted successfully!</div>";
            else
               echo "<div class='alert alert-danger fade in'><strong>Warning!</strong> Exam config deletion failed!</div>"; 
            }
            require "config_list.php";?>
        </div>
    </div>
            <!--</div>                           
    </body>-->