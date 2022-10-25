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
								Upload Candidates
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Upload candidates for exam
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								
								<form class="form-horizontal" role="form" id="modle">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Module Name </label>
                                           <div class="col-sm-9"> 
										<select class="chosen-select" data-placeholder="Module Name" id="form-field-1" name="modulename">
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
                                    </form>
                                    
                                    
                               
                                         <!-- <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"></label>
                                       
										<div class="col-md-9">
											<div id='preview'></div>
                                            <div class="file_input_container">
                                            <div class="upload_button"><input type="file" name="photo" id="photo" class="file_input" onchange="submitForm()"  /></div>
                                            </div><br clear="all">
										</div> 
									</div> -->  
                                
                                     <form id="image_upload_formx" method="post" enctype="multipart/form-data" action='config_files/import_candidates.php' autocomplete="off">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">  </label>
										<div class="btn-group"><div id="preview"></div>
											<input type="file" class="btn" name="photo" id="photo" value="Upload" onchange="submitForm()">
											<button type="button" class="btn">Cancel</button>
										</div>
                                    </div>
                                    </form>
                               
                                    </div>
                            </div>
        <div id="res" style="width:90%">
            
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