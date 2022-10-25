<div class="modal-header">
	<button aria-hidden="true" data-dismiss="modal" class="close"
	type="button">
		<i class="fa fa-times"></i>
	</button>
	<h4 class="modal-title">View Mandate</h4>
</div>

<div class="modal-body scroller" style="height:500px">
	<!--<div id="display_pdf">
		<object data="sample.pdf"
		type="application/pdf" width="100%" height="100%" view="Fit">
			<p>
				It appears your Web browser is not configured to display PDF
				files. No worries, just <a
				href="http://pdfobject.com/pdf/sample.pdf">click here to
				download the PDF file.</a>
			</p>
		</object>
	</div>-->
    <div>
	<span style="float:left;"><img src="pages/logo.png" alt="Logo" /></span>

	<span style="float:right;">Port Harcourt Crescent <br />
	 Off Gimbiya Street P.M.B 564 Area 11,<br />
	  Garki, Abuja, Nigeria</span></div>
	  <div style="float:left;">
	  <br />
	<h2 style="margin-left:3em;">National Information Technology Development Agency (NITDA)</h2>

	  </div>
	  <br />
	   <div id="ft-1" class="panel-collapse collapse in" style="float:left; width:100%">
    <div class="portlet-body">
      <form class="form-horizontal" role="form" method="post">
        <!-- Begin of Bio-Data Mandate -->
        <hr>
        <h4>BIO-DATA</h4>
        <hr>
        <div class="form-group">
          <label class="col-md-4 control-label">First Name: </label>
          <div class="col-md-7">
            <h4><?php //echo $profile[2].' ,'.$profile[3];?><b>First Name Label</b></h4>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Last Name: </label>
          <div class="col-md-7">
            <div class="input-group">
              <h4><?php //echo $profile[4];?><b>Last Name Label</b></h4>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Middle Name: </label>
          <div class="col-md-7">
            <h4><?php //echo $profile[5];?><b>Middle Name Label</b></h4>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Email Address: </label>
          <div class="col-md-7">
            <div class="input-group">
              <h4><?php //echo $profile[6];?><b>Email Address Label</b></h4>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Gender: </label>
          <div class="col-md-7">
            <h4><?php //echo $profile[7];?><b>Gender Label</b></h4>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Address: </label>
          <div class="col-md-7">
            <h4><?php //echo $profile[7];?><b>Address Label</b></h4>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Date of Birth: </label>
          <div class="col-md-7">
            <h4><?php //echo $profile[7];?><b>Date of Birth Label</b></h4>
          </div>
        </div>
         <div class="form-group">
          <label class="col-md-4 control-label">Marital Status: </label>
          <div class="col-md-7">
            <h4><?php //echo $profile[7];?><b>Marital Status Label</b></h4>
          </div>
        </div>

         <div class="form-group">
          <label class="col-md-4 control-label">State: </label>
          <div class="col-md-7">
            <h4><?php //echo $profile[7];?> <b>State Label</b> </h4>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">LGA: </label>
          <div class="col-md-7">
            <h4><?php //echo $profile[7];?><b>LGA Label</b></h4>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Country: </label>
          <div class="col-md-7">
            <h4><?php //echo $profile[7];?><b>Nationality Label</b></h4>
          </div>
        </div>
        <!-- End of Bio-Data Mandate -->


        <!-- Begin of Account Detail -->
        <div style="width:100%; float:left">
        <hr>
        <h4>ACCOUNT DETAIL</h4>
        <hr>
        <div class="form-group">
          <label class="col-md-4 control-label">Bank Name: </label>
          <div class="col-md-7">
            <h4><?php //echo $profile[2].' ,'.$profile[3];?><b>Bank Name Label</b></h4>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Account No: </label>
          <div class="col-md-7">
            <div class="input-group">
              <h4><?php //echo $profile[4];?><b>Account No Label</b></h4>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Account Type: </label>
          <div class="col-md-7">
            <h4><?php //echo $profile[5];?><b>Account Type Label</b></h4>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Account Name: </label>
          <div class="col-md-7">
            <div class="input-group">
              <h4><?php //echo $profile[6];?><b>Account Name Label</b></h4>
            </div>
          </div>
        </div>
        </div>

        <!-- End of Account Detail -->

        <!-- Begin of Request Detail -->
        <div style="width:100%; float:left">
        <hr>
        <h4>REQUEST</h4>
        <hr>
        <div class="form-group">
          <label class="col-md-4 control-label">Category: </label>
          <div class="col-md-7">
            <h4><?php //echo $profile[2].' ,'.$profile[3];?><b>Category Label</b></h4>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Description: </label>
          <div class="col-md-7">
            <div class="input-group">
              <h4><?php //echo $profile[4];?><b>Description Label</b></h4>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Amount: </label>
          <div class="col-md-7">
            <h4><?php //echo $profile[5];?><b>Amount Label</b></h4>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Status: </label>
          <div class="col-md-7">
            <div class="input-group">
              <h4><?php //echo $profile[6];?><b>Status Label</b></h4>
            </div>
          </div>
        </div>
        </div>
     <!-- End of Request Deatil -->
      </form>
    </div>
  </div>


</div>
