$(document).on("click", "#bb-confirm", function(e) {
	bootbox.confirm("Are you sure?", function(result) {
	//console.log("");

	});
});
$(document).on("click", "#bb-reguler", function(e) {
	bootbox.prompt("What is your name?", function(result) {
		if (result === null) {
			//Example: console.log("");
			} else {
			//Example: console.log("");
		}
	});
});
$(document).on("click", "#bb-options", function(e) {
    var modal = $('<div role="dialog" tabindex="-1" id="mod-speech" class="modal fade"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button aria-hidden="true" data-dismiss="modal" class="close" type="button"><i class="fa fa-times"></i></button><h4 class="modal-title">View PDF</h4></div><div class="modal-body"><div id="display_pdf"><object data="http://academy.cinfores.com/nitda/assets/sample.pdf" type="application/pdf" width="100%" height="100%"><p>It appears your Web browser is not configured to display PDF files. No worries, just <a href="http://pdfobject.com/pdf/sample.pdf">click here to download the PDF file.</a></p></object></div><div><h4 class="text-gray">Let&#39;s Start</h4><div class="note note-success"><p>Some text at the bottom of the view PDF modal</p></div></div></div><div class="modal-footer no-margin-top"><button data-dismiss="modal" class="btn btn-primary" type="button"><i class="fa fa-thumbs-up"></i>Ok! Ready</button></div></div></div></div>');
    modal.appendTo("body");
    $('#mod-speech').modal();
    $('#mod-speech').on('hidden.bs.modal', function () {
        $(this).removeData('bs.modal');
        $(this).remove();
    });
});
