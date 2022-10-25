<?php
	session_start();
	require_once ('../../includes/makehtmlchar.php'); //set as relevant to path//
	$ConnObj= createobject("adodb.connection");
	$ConnObj->open($GLOBALS['sConnection']);
	require_once ('cinforeslib/CONVERSIONS/common.php');
	require_once("../../includes/dbQrys.php");
	$ActionObj = new dbQuery($host, $user, $password, $dbname);
?>

<style type="text/css">
	/*
	.modal-dialog {
	width: 35%;
	//width: 1100px;
	margin: 10px auto;
	border-style: solid;
	border-width: 10px;
	border-color: #ccc;
	//border-radius: 20px;
	}
	*/




	.modal-dialog {
	width: auto;
	height: auto !important;
	margin: 10px auto;
	border-style: solid;
	overflow: scroll !important;
	border-width: 10px;
	border-color: #ccc;

	}



	@media print {

	/*.scroller { height:1300px !important; width: 1200px !important; padding: 20px;} */
	.modal-dialog {height: 100% !important; margin-left: 3em; margin-right: 3em; width: 700px !important;  padding: 10px; border-width: 0px !important; border-color: #ccc; }

	.modal-content {height: 100% !important; margin-left: 3em; margin-right: 3em; width: 700px !important;  padding: 10px; border-width: 2px !important; border-color: #ccc;}
	.butPrint {display: none !important;}
	.page-loading { display: none !important; }
	/*.close { display: none !important;} */
	.margin-control .invisible .margin-control-top {
	display: none !important;
	}
	/*
	@page
	{
    size: 11.0in 17.0in;

	}
	*/

	}

</style>



<div class="modal-header">
	<button aria-hidden="true" data-dismiss="modal" class="close"
	type="button" id="closeP" onclick="window.location.href('request_listB.php');">
		<i class="fa fa-times"></i>
	</button>
	<h4 class="modal-title">View Comments</h4>
</div>

<div class="modal-body scroller" style="height: auto; max-height:500px;" data-always-visible="1" data-rail-visible1="1" id="div_to_print">
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
	<!--<p>Sample comments here</p>-->
	<p><?php echo $ActionObj->getCommentsByID($_GET['id']); ?></p>


</div>
<div class="modal-footer">
	<input type="button" value="Print Comment" class="btn btn-primary butPrint" id="printxxx"/>

</div>

<style type="text/css">
	.modal-dialog {
	width: 70%;
	/*width: 1100px;*/
	margin: 10px auto;
	border-style: solid;
	border-width: 10px;
	border-color: #ccc; //
	border-radius: 20px;
	}

	.modal-body {
	position: relative;
	overflow-y: auto;
	/*max-height: 500px;*/
	padding: 15px;
	width: 100%;
	}


</style>

<script type="text/javascript">
	$(document).ready(function(){

		jQuery('#printxxx').on('click', function (elem) {
			elem.preventDefault();
			Popup($('#div_to_print').html());

		});

		function Popup(data) {
			var mywindow = window.open('', 'Comments', 'height=1100,width=1100 ');
			mywindow.document.write('<html><head><title>my div</title>');
			/*optional stylesheet*/ //mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
			mywindow.document.write('</head><body >');
			mywindow.document.write(data);
			mywindow.document.write('</body></html>');

			mywindow.document.close(); // necessary for IE >= 10
			mywindow.focus(); // necessary for IE >= 10

			mywindow.print();
			mywindow.close();

			return true;
		}






		// function PrintElem(elem){
		// Popup($(elem).html());
		// }

		function Popup(data) {
			var mywindow = window.open('', 'my div', 'height=1100,width=1100 ');
			mywindow.document.write('<html><head><title>my div</title>');
			/*optional stylesheet*/ //mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
			mywindow.document.write('</head><body >');
			mywindow.document.write(data);
			mywindow.document.write('</body></html>');

			mywindow.document.close(); // necessary for IE >= 10
			mywindow.focus(); // necessary for IE >= 10

			mywindow.print();
			mywindow.close();

			return true;
		}
	});
</script>
