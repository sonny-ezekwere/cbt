
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Subjects</h4>
        </div>
          <form method="POST" id="contact_form">
      <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Subject Name </label>

          <div class="col-sm-9">
              <input type="text" id="form-field-1" placeholder="Course name" name="subjectnamex" id="subjectnamex" value="<?php echo $_GET['subjectnm'];?>" class="col-xs-10 col-sm-5" />
				</div>
          </div>
          <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Subject Code </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Subject code" value="<?php echo $_GET['subjectcd'];?>" name="subjectcodex" id="subjectcodex" class="col-xs-10 col-sm-5" />
										</div>
									</div>
          <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Subject Status </label>

          <div class="col-sm-9">
              <select class="chosen-select" data-placeholder="Module Status" id="subjectstatus" name="subjectstatus">
                  <option><?php echo $_GET['subjectstat'];?></option>
                  <option>0</option>
                  <option>1</option>
              </select>
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
        var formURL = 'config_files/subjects.php?frm=edit&id=<?php echo $_GET['id'];?>';
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
</script>