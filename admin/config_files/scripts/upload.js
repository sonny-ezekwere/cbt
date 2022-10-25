$(document).ready(function() {		
	$('#photo').on('change', function()			{ 
		$("#preview").html('');
		$("#preview").html('<img src="../images/loader.gif" alt="Uploading...."/>ttt');
	$("#image_upload_form").ajaxForm({
				target: '#preview'
}).submit();

	});
}); 


