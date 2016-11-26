
$(document).ready(function() {

	var gender = $('input[name=gender]:checked').val();
	console.log("GENDER = ", gender);

	//$('#reg_username').blur(validateFields);
    //$('#reg_email').blur(validateFields);

    $('#password').keyup(validateFields());
    $('#password-confirm').keyup(validateFields());
    $('#terms').change(validateFields());




	isChecked = function(){
		if($("#terms").is(':checked')){
	 		$('input[name=terms]:checked').val();
	 		$("#terms").val("1");
			console.log("CHECKED");
		}else{
			$("#terms").val("0");
			//alert("please accept terms of use");
		}
	 //console.log("Terms checked = ", checked);
		
	}
	//$( "input[type=checkbox]" ).on( "click", isChecked );
	//isChecked();

});

validateFields = function(){
	var isValid = true;

	var email = $("#email").val();

	var password      = $("#password").val();
	var password_confirm = $("#password-confirm").val();

	if(password !== $password_confirm){
		isValid = false;
	}

	if (!($('#terms').is(':checked'))) {
		isValid = false;
	}

	var status  = ['single', 'married', 'divorced','widow'];
	var selected_status = $('input[name=maritalStatus]:selected').val();
	if(!(isInArray(status, selected_status))){
		isValid = false;
	}

	if (isValid) {
         $('#reg_submit[type="submit"]').prop('disabled', false);
        } else {
         $('#reg_submit[type="submit"]').prop('disabled', true);
     }

}


isInArray = function (itemList, item){
	var found = true;
	for (i=0; i<itemList.length; i++) {
		if(item === itemList[i]) {
			found = true;
			break;
		}else {
			found = false;
		}
	}
	return found;
}