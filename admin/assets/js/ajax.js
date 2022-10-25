function showAjax(formid, webpage,resultDiv){

	if(webpage==null || resultDiv == ''){alert('invalid parameters');}else{
		if(formid==null || formid ==''){
			$('#'+resultDiv).html('<img src="loading.gif" />');
			$.post(webpage, function(data) {
									$('#'+resultDiv).html(''); $('#'+resultDiv).html(data);
								});

			}else{
					$('#'+resultDiv).html('<img src="loading.gif" />');
					$.post(webpage, $("#"+formid).serialize(), function(data) {
									$('#'+resultDiv).html(''); $('#'+resultDiv).html(data);
								});
					}

	}
}