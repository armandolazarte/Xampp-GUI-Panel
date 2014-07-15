$("#addhost").submit(function(){
	domain = $("#domain").val();
	ip = $("#ip").val();
	apiUrl = '../../api/addDomain.php?ip='+ip+'&domain='+domain+'';
	 $.getJSON(apiUrl, function(data){
	 	if(data.output == 'Success'){
	 		$("#p-info").empty();
	 		$("#p-info").append('Success');
	 		$("#modal-info").modal('show');
	 	}
	 	else{
	 		$("#p-info").empty();
	 		$("#p-info").append('Failed');
	 		$("#modal-info").modal('show');
	 	}
	 })

	event.preventDefault();
});