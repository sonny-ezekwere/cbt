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
        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>
    <!--<body class="no-skin" style="overflow: auto!important;">
    <div class="main-container ace-save-state" id="main-tainer">-->
      <?php 
         
                    error_reporting(E_ALL & ~E_NOTICE);
                    require "dbmysql.php";
            if($_GET['frm']=='delete'){
                $sno=$_GET['id'];
                $tbl=$_GET['tbl'];
               $qry="delete from ".$tbl." where qid='$sno'";
            $ret=delete($qry);
            if($ret==1)
                echo "<div class='alert alert-warning fade in'><strong>Success!</strong> Question deleted successfully!</div>";
            else
               echo "<div class='alert alert-danger fade in'><strong>Warning!</strong> Question deletion failed!</div>"; 
                exit();
            }
            //require "question_list.php";?>
    <div id="pagecontent">
        <div class="form-horizontal" role="form">
       <!-- <form class="form-horizontal" role="form" method="post" id="modlex" name="modlex">-->
                    <div class="page-header">
							<h1>
								Setup Exam Questions
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Add Questions
								</small>
							</h1>
						</div><!-- /.page-header -->
                    <?php
                   
                        if($_GET['frm']=='edit'){
                            $btn_caption="Update";
                             //$modulenamex=$_POST['modulename'];
                              //$subjectnamex=$_POST['subjectname'];
                        $qry="select * from ".$_GET['tbl']." where qid=".$_GET['id'];
                        $ret=select($qry);
                             if($row=mysqli_fetch_assoc($ret)){
                              $instructionx=$row['q_instruction'];
                                 $correctx=$row['q_answer'];
                                 $questionx=(strpos($row['question'],'<img')!==false)?str_replace('quiz/','../',$row['question']):$row['question'];
                                                $optionax=(strpos($row['optiona'],'<img')!==false)?str_replace('quiz/','../',$row['optiona']):$row['optiona'];
                                                $optionbx=(strpos($row['optionb'],'<img')!==false)?str_replace('quiz/','../',$row['optionb']):$row['optionb'];
                                                $optioncx=(strpos($row['optionc'],'<img')!==false)?str_replace('quiz/','../',$row['optionc']):$row['optionc'];
                                                $optiondx=(strpos($row['optiond'],'<img')!==false)?str_replace('quiz/','../',$row['optiond']):$row['optiond'];
                                                $optionex=(strpos($row['optione'],'<img')!==false)?str_replace('quiz/','../',$row['optione']):$row['optione'];
                                 
                             }
                        }
        else
           $btn_caption="Save"; 
                    ?>
						<div class="row">
							<div class="col-xs-12">
								
								
                                    <input type="hidden" name="frm" id="frm" value="<?php echo $_GET['frm'];?>">
                                    <input type="hidden" name="qid" id="qid" value="<?php echo $_GET['id'];?>">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Module Name </label>
                                           <div class="col-sm-9"> 
										<select class="chosen-select" data-placeholder="Module Name" id="modulename" name="modulename">
                                            <option><?php echo $_GET['mdname'];?></option>
                                            <?php 
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
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Subject </label>
                                           <div class="col-sm-9"> 
										<select class="chosen-select" data-placeholder="Subject Name" id="subjectname" name="subjectname">
                                            <option><?php echo $_GET['subjname'];?></option>
                                            <?php 
                                            $sql="select * from subjects where subject_status=1 group by subject_name order by subject_name";
                                            $ret=select($sql);
                                            while($row=mysqli_fetch_assoc($ret)){
                                            ?>
                                          <option><?php echo $row['subject_name'];?></option>
                                            <?php }?>
                                      </select>
                                        </div>
									</div>
                                    
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Instruction </label>
                                           <div class="col-sm-6"> 
										
                                               <textarea cols="40" rows="5" id="instruction" name="instruction"> 
                                                   <?php echo $instructionx;?>
      </textarea>
      <script type="text/javascript">
        CKEDITOR.replace( 'instruction' );
      </script>
                                        </div>
									</div>
                                    
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Question </label>
                                           <div class="col-sm-6"> 
										
                                               <textarea cols="40" rows="5" id="question" name="question"> 
                                                   <?php echo $questionx;?>
      </textarea>
      <script type="text/javascript">
        CKEDITOR.replace( 'question', {
              width:500,
              height:150
        });
      </script>
                                               <div><form id="question_form" method="post" enctype="multipart/form-data" action='config_files/uploader2.php' autocomplete="off">
                                          
										<div class="col-md-9">
											<div id='preview_question'></div>
                                            <div class="file_input_container">
                                            <div class="upload_button"><input type="file" name="question_img" id="question_img" class="file_input"  /></div>
                                            </div>
										</div> 
									  
                                </form></div>
                                        </div>
									</div>
                                    
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Option A </label>
                                           <div class="col-sm-6"> 
										
                                               <textarea cols="40" rows="5" id="optiona" name="optiona"> 
                                                   <?php echo $optionax;?>
      </textarea>
      <script type="text/javascript">
        CKEDITOR.replace( 'optiona' );
      </script>
                                               <div><form id="optiona_form" method="post" enctype="multipart/form-data" action='config_files/uploader2.php' autocomplete="off">
                                          
										<div class="col-md-9">
											<div id='preview'></div>
                                            <div class="file_input_container">
                                            <div class="upload_button"><input type="file" name="optiona_img" id="optiona_img" class="file_input"  /></div>
                                            </div>
										</div> 
									  
                                </form></div>
                                        </div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Option B </label>
                                           <div class="col-sm-6"> 
										
                                               <textarea cols="40" rows="5" id="optionb" name="optionb"> 
                                                   <?php echo $optionbx;?>
      </textarea>
      <script type="text/javascript">
        CKEDITOR.replace( 'optionb' );
      </script>
                                               <div><form id="optionb_form" method="post" enctype="multipart/form-data" action='config_files/uploader2.php' autocomplete="off">
                                          
										<div class="col-md-9">
											<div id='preview'></div>
                                            <div class="file_input_container">
                                            <div class="upload_button"><input type="file" name="optionb_img" id="optionb_img" class="file_input"  /></div>
                                            </div>
										</div> 
									  
                                </form></div>
                                        </div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Option C </label>
                                           <div class="col-sm-6"> 
										
                                               <textarea cols="40" rows="5" id="optionc" name="optionc"> 
                                                   <?php echo $optioncx;?>
      </textarea>
      <script type="text/javascript">
        CKEDITOR.replace( 'optionc' );
      </script>
                                               <div><form id="optionc_form" method="post" enctype="multipart/form-data" action='config_files/uploader2.php' autocomplete="off">
                                          
										<div class="col-md-9">
											<div id='preview'></div>
                                            <div class="file_input_container">
                                            <div class="upload_button"><input type="file" name="optionc_img" id="optionc_img" class="file_input"  /></div>
                                            </div>
										</div> 
									  
                                </form></div>
                                        </div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Option D </label>
                                           <div class="col-sm-6"> 
										
                                               <textarea cols="40" rows="5" id="optiond" name="optiond"> 
                                                   <?php echo $optiondx;?>
      </textarea>
      <script type="text/javascript">
        CKEDITOR.replace( 'optiond' );
      </script>
                                               <div><form id="optiond_form" method="post" enctype="multipart/form-data" action='config_files/uploader2.php' autocomplete="off">
                                          
										<div class="col-md-9">
											<div id='preview'></div>
                                            <div class="file_input_container">
                                            <div class="upload_button"><input type="file" name="optiond_img" id="optiond_img" class="file_input"   /></div>
                                            </div>
										</div> 
									  
                                </form></div>
                                        </div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Option E </label>
                                           <div class="col-sm-6"> 
										
                                               <textarea cols="40" rows="5" id="optione" name="optione"> 
                                                   <?php echo $optionex;?>
      </textarea>
      <script type="text/javascript">
        CKEDITOR.replace( 'optione' );
      </script>
                                               <div><form id="optione_form" method="post" enctype="multipart/form-data" action='config_files/uploader2.php' autocomplete="off">
                                          
										<div class="col-md-9">
											<div id='preview'></div>
                                            <div class="file_input_container">
                                            <div class="upload_button"><input type="file" name="optione_img" id="optione_img" class="file_input"  /></div>
                                            </div>
										</div> 
									  
                                </form></div>
                                        </div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Correct Option </label>
                                           <div class="col-sm-9"> 
										<select class="chosen-select" data-placeholder="Correct" id="correct" name="correct">
                                            <option><?php echo $correctx;?></option>
                                            <option>A</option>
                                            <option>B</option>
                                            <option>C</option>
                                            <option>D</option>
                                            <option>E</option>
                                      </select>
                                        </div>
									</div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">  </label>
										<div class="btn-group">
											<!--<button type="button" class="btn" onclick="showAjax('modle','config_files/save_question.php','res');" id="btn">Save</button>-->
                                            <button type="button" class="btn" id="btn"><?php echo $btn_caption;?></button>
											<button type="button" class="btn" onclick="showAjax('','config_files/question_setup.php','pagecontent');">Reset</button>
										</div>
                                    </div>
                               
                                    </div>
                            </div>
        <div id="res" style="width:90%">
            <?php 
         
            
            if($_GET['frm']=='delete'){
                $sno=$_GET['id'];
                $tbl=$_GET['tbl'];
               $qry="delete from ".$tbl." where qid='$sno'";
            $ret=delete($qry);
            if($ret==1)
                echo "<div class='alert alert-warning fade in'><strong>Success!</strong> Question deleted successfully!</div>";
            else
               echo "<div class='alert alert-danger fade in'><strong>Warning!</strong> Question deletion failed!</div>"; 
            }
            //require "question_list.php";?>
        </div>
        </div>
            <!--</form>-->
    </div>
    
    <script type="text/javascript">
    //$(function(){
        $("#btn").on("click", function(event) {
            //event.preventDefault();

            var formData = {
                'instruction': CKEDITOR.instances.instruction.getData(),
                'question': CKEDITOR.instances.question.getData(),
                'optiona': CKEDITOR.instances.optiona.getData(),
                'optionb': CKEDITOR.instances.optionb.getData(),
                'optionc': CKEDITOR.instances.optionc.getData(),
                'optiond': CKEDITOR.instances.optiond.getData(),
                'optione': CKEDITOR.instances.optione.getData(),
                'modulename':$('#modulename').val(),
                'subjectname':$('#subjectname').val(),
                'correct':$('#correct').val(),
                'frm':$('#frm').val(),
                'qid':$('#qid').val()
            };
            //console.log(formData);

            $.ajax({
                url: "config_files/save_question.php",
                type: "post",
                data: formData,
                success: function(data) {
                    $('#res').html(data);
                    CKEDITOR.instances.instruction.setData('');
                CKEDITOR.instances.question.setData('');
                CKEDITOR.instances.optiona.setData('');
                CKEDITOR.instances.optionb.setData('');
                CKEDITOR.instances.optionc.setData('');
                CKEDITOR.instances.optiond.setData('');
                CKEDITOR.instances.optione.setData('');
                }
            });
        });
        
        $("#subjectname").on("change", function(event) {
            $.ajax({
                url: "config_files/save_question.php",
                type: "post",
                data: {modulename:$('#modulename').val(),subjectname:$('#subjectname').val()},
                success: function(data) {
                    $('#res').html(data);
                }
            });
        });
    //})
        
        $('#question_img').on('change',function(e){
            $('#question_form').submit();
        })
        
        $('#question_form').on('submit',function(e){
            DoSubmit(e,'question_form','question','question_img');
        })
        
        $('#optiona_img').on('change',function(e){
            $('#optiona_form').submit();
        })
        
        $('#optiona_form').on('submit',function(e){
            DoSubmit(e,'optiona_form','optiona','optiona_img');
        })
        
        $('#optionb_img').on('change',function(e){
            $('#optionb_form').submit();
        })
        
        $('#optionb_form').on('submit',function(e){
            DoSubmit(e,'optionb_form','optionb','optionb_img');
        })
        
        $('#optionc_img').on('change',function(e){
            $('#optionc_form').submit();
        })
        
        $('#optionc_form').on('submit',function(e){
            DoSubmit(e,'optionc_form','optionc','optionc_img');
        })
        
         $('#optiond_img').on('change',function(e){
            $('#optiond_form').submit();
        })
        
        $('#optiond_form').on('submit',function(e){
            DoSubmit(e,'optiond_form','optiond','optiond_img');
        })
        
         $('#optione_img').on('change',function(e){
            $('#optione_form').submit();
        })
        
        $('#optione_form').on('submit',function(e){
            DoSubmit(e,'optione_form','optione','optione_img');
        })
        
        /*
        function submitForm2(idx){
            var chkid=idx;
            if(chkid==1){
                //alert('chkid=' + chkid);
                $('#question_form').submit();
            }
            if(chkid==2)
                $('#optiona_form').submit();
            if(chkid==3)
                $('#optionb_form').submit();
            if(chkid==4)
                $('#optionc_form').submit();
            if(chkid==5)
                $('#optiond_form').submit();
            if(chkid==6)
                $('#optione_form').submit();
        }
        
        
    $('#question_form').on('submit',function(e){
        
    var formObj = $('#question_form');
    var formURL = formObj.attr("action");
    var formData = new FormData($('#question_form')[0]);
    formData.append('modulename', $('#modulename').val());
    formData.append('fileid', 'question_img');
        
        //$("#"+txtarea).html('');
		//$("#preview").html('<img src="../images/loader.gif" alt="Uploading...."/>');
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
        //ex.preventDefault();
        //$('#preview_question').html(data);
        CKEDITOR.instances.question.setData(data);
        
    },
    complete: function(){
        //$('#preview').hide();
      },
     error: function(jqXHR, textStatus, errorThrown) 
     {
         $('#preview_question').html(errorThrown);
     }          
    });
        e.preventDefault();
        e.unbind();
        
        })
        */
        
    function DoSubmit(ex,formid,txtarea,fileid){
        //ex.preventDefault();
    var formObj = $('#' + formid );
    var formURL = formObj.attr("action");
    var formData = new FormData($('#' + formid)[0]);
    formData.append('modulename', $('#modulename').val());
    formData.append('subjectname', $('#subjectname').val());
    formData.append('fileid', fileid);
        //$("#"+txtarea).html('');
		//$("#preview").html('<img src="../images/loader.gif" alt="Uploading...."/>');
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
        //ex.preventDefault();
        //$("'"+txtarea+"'").html(data);
        //CKEDITOR.instances[txtarea].setData(data);
        CKEDITOR.instances[txtarea].insertHtml(data);
        
    },
    complete: function(){
        //$('#preview').hide();
      },
     error: function(jqXHR, textStatus, errorThrown) 
     {
         $('#preview').html(errorThrown);
     }          
    });
    ex.preventDefault();
    //ex.unbind();
 }
        
        function submitForm(formid,txtarea,fileid){
            
            $(formid)[0].submit(function(e){
              //alert('formid='+formid); 
    var formObj = $(formid)[0];
    var formURL = formObj.attr("action");
    var formData = new FormData($(formid)[0]);
    formData.append('modulename', $('#modulename').val());
    formData.append('subjectname', $('#subjectname').val());
    formData.append('fileid', fileid);
        //$("#"+txtarea).html('');
		//$("#preview").html('<img src="../images/loader.gif" alt="Uploading...."/>');
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
        $(txtarea).html(data);
        
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
                //return false;
                             });
        //$(formid).on('submit',function(e)
        //{
 
    
//});

        }
    </script>
            <!--</div>                           
    </body>-->