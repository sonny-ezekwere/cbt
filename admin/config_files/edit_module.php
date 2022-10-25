
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Module Name</h4>
        </div>
          <form method="POST" id="contact_form">
      <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Module Name </label>

          <div class="col-sm-9">
              <input type="text" placeholder="Module name" name="modulenamex" id="modulenamex" value="<?php echo $_GET['modulenm'];?>" class="col-xs-10 col-sm-5" />
				</div>
          </div>
          <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Module Code </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Module code" value="<?php echo $_GET['modulecd'];?>" name="modulecodex" id="modulecodex" class="col-xs-10 col-sm-5" />
										</div>
									</div>
          <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Module Status </label>

          <div class="col-sm-9">
              <select class="chosen-select" data-placeholder="Module Status" id="modulestatus" name="modulestatus">
                  <option><?php echo $_GET['modulestat'];?></option>
                  <option>0</option>
                  <option>1</option>
              </select>
				</div>
          </div>
          </form>
          <form id="image_upload_formxx" method="post" enctype="multipart/form-data" action='config_files/uploader.php' autocomplete="off">
                                          <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Module Image </label>
                                       
										<div class="col-md-9">
											<div id='preview2'></div>
                                            <div class="file_input_container">
                                            <div class="upload_button"><input type="file" name="photo" id="photo" class="file_input" onchange="submitFormx()"  /></div>
                                            </div><br clear="all">
										</div> 
									</div>   
                                </form>
        <div class="modal-footer">
            <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">  </label>
										<div class="btn-group">
											<!--<button type="button" class="btn" onclick="showAjax('modle2','config_files/save_module.php?frm=edit&id=<?php echo $_GET['id'];?>','res');return false;">Update</button>--><button type="button" class="btn" id="submitForm" onclick="DoCall();return false;">Update</button>&nbsp;&nbsp;
											<button type="button" class="btn" data-dismiss="modal">Close</button>
										</div>
                                    </div>
          
        </div>
          
      </div>
      
    </div>
<script type="text/javascript">
function DoCall(){
        var postData = $("#contact_form").serialize();
        var formURL = 'config_files/module.php?frm=edit&id=<?php echo $_GET['id'];?>';
        $.ajax({
            url: formURL,
            type: "POST",
            data: postData,
            success: function(data, textStatus, jqXHR) {
                $('#pagecontent').html(data);
                $('.modal-backdrop').remove();
                $('body').removeClass('modal-open');
                //$("#submitForm").remove();
            },
            error: function(jqXHR, status, error) {
                console.log(status + ": " + error);
            }
        });
        e.preventDefault();
    
     
    //$("#submitForm").on('click', function() {
       // $("#contact_form").submit();
    //});
    }
    
    $("#image_upload_formxx").on('submit',function(e)
{
 
    var formObj = $("#image_upload_formxx");
    var formURL = formObj.attr("action");
    var formData = new FormData($('#image_upload_formxx')[0]);
    formData.append('modulename', $('#modulenamex').val());
        //formData.append('modulecode', $('#modulecodex').val());
        $("#preview2").html('');
		$("#preview2").html('<img src="../images/loader.gif" alt="Uploading...."/>');
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
        $('#preview2').html(data);
    },
    complete: function(){
        //$('#preview2').hide();
      },
     error: function(jqXHR, textStatus, errorThrown) 
     {
         $('#preview2').html(errorThrown);
     }          
    });
    e.preventDefault(); //Prevent Default action. 
    e.unbind();
});

function submitFormx(){
    //alert('here!!!');
$("#image_upload_formxx").submit();
        }
</script>