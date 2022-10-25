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
								Manage Modules
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Add/Edit/Remove Modules
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								
								<form class="form-horizontal" role="form" id="modle">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Module Name </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Module name" name="modulename" class="col-xs-10 col-sm-5" />
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Module Code </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Module code" name="modulecode" class="col-xs-10 col-sm-5" />
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
                                    </form>
                                    
                                    
                                <form id="image_upload_formx" method="post" enctype="multipart/form-data" action='config_files/uploader.php' autocomplete="off">
                                          <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"></label>
                                       
										<div class="col-md-9">
											<div id='preview'></div>
                                            <div class="file_input_container">
                                            <div class="upload_button"><input type="file" name="photo" id="photo" class="file_input" onchange="submitForm()"  /></div>
                                            </div><br clear="all">
										</div> 
									</div>   
                                </form>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">  </label>
										<div class="btn-group">
											<button type="button" class="btn" onclick="showAjax('modle','config_files/save_module.php','res');">Save</button>
											<button type="button" class="btn">Cancel</button>
										</div>
                                    </div>
                               
                                    </div>
                            </div>
        <div id="res" style="width:90%">
            <?php 
            error_reporting(E_ALL & ~E_NOTICE);
            require "dbmysql.php";
            if($_GET['frm']=='edit'){
                $moduleid=$_GET['id'];
                $modulename=$_POST['modulenamex'];
                $modulecode=$_POST['modulecodex'];
                $modulestatus=$_POST['modulestatus'];
               $qry="update modules set module_name='$modulename',module_status='$modulestatus',module_code='$modulecode' where module_id='$moduleid'";
            $ret=update($qry);
            if($ret==1)
                echo "<div class='alert alert-success fade in'><strong>Success!</strong> Module updated successfully!</div>";
            else
               echo "<div class='alert alert-danger fade in'><strong>Warning!</strong> Module update failed!</div>"; 
            }
            
            if($_GET['frm']=='delete'){
                $moduleid=$_GET['id'];
               $qry="delete from modules where module_id='$moduleid'";
            $ret=delete($qry);
            if($ret==1)
                echo "<div class='alert alert-warning fade in'><strong>Success!</strong> Module deleted successfully!</div>";
            else
               echo "<div class='alert alert-danger fade in'><strong>Warning!</strong> Module deletion failed!</div>"; 
            }
            require "modules_list.php";?>
        </div>
    </div>
    <script type="text/javascript">
$("#image_upload_formx").on('submit',function(e)
{
 
    var formObj = $("#image_upload_formx");
    var formURL = formObj.attr("action");
    var formData = new FormData($('#image_upload_formx')[0]);
    formData.append('modulename', $('#form-field-1').val());
        $("#preview").html('');
		$("#preview").html('<img src="../images/loader.gif" alt="Uploading...."/>');
    $.ajax({
        url: formURL,
    type: 'POST',
        data:  formData,
    mimeType:"multipart/form-data",
    contentType: false,
        cache: false,
        processData:false,
    success: function(data, textStatus, jqXHR)
    {
        $('#preview').html(data);
    },
    complete: function(){
        //$('#preview').hide();
      },
     error: function(jqXHR, textStatus, errorThrown) 
     {
         $('#preview').html(errorThrown);
     }          
    });
    e.preventDefault(); //Prevent Default action. 
    e.unbind();
});

function submitForm(){
    //alert('here!!!');
$("#image_upload_formx").submit();
        }
    </script>
            <!--</div>                           
    </body>-->