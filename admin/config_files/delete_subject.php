
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Delete Subject</h4>
        </div>
          <form method="POST" id="contact_form">
          
          <div class="form-group">
              <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> </label>
          Are you sure you wish to delete this record?
          </div>
          </form>
        <div class="modal-footer">
            <div class="form-group">
                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">  </label>
										<div class="btn-group">
											<!--<button type="button" class="btn" onclick="showAjax('modle2','config_files/save_module.php?frm=edit&id=<?php echo $_GET['id'];?>','res');return false;">Update</button>--><button type="button" class="btn" id="submitForm" onclick="DoCall();return false;">Delete</button>&nbsp;&nbsp;
											<button type="button" class="btn" data-dismiss="modal">Close</button>
										</div>
                                    </div>
          
        </div>
          
      </div>
      
    </div>
<script type="text/javascript">
function DoCall(){
        var postData = $("#contact_form").serialize();
        var formURL = 'config_files/subjects.php?frm=delete&id=<?php echo $_GET['id'];?>';
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