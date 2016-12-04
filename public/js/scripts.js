
$(document).ready(function() {

    $( ".date" ).datepicker({
      changeMonth: true,
      changeYear: true,
      dateFormat: "dd/mm/yy"
    });

    $( ".year" ).datepicker({
      changeMonth: true,
      changeYear: true,
      dateFormat: "yy"
    });

    $( "#month" ).datepicker({
      changeMonth: true,
      changeYear: true,
      dateFormat: "mm/yy"
    });


 

	var gender = $('input[name=gender]:checked').val();
	console.log("GENDER = ", gender);

	/*$('#lastname').blur(validateFields());
    $('#email').blur(validateFields());

    $('#password').keyup(validateFields());
    $('#password-confirm').keyup(validateFields());*/
   // $('#terms').change(validateFields());




	isChecked = function(){
		if($("#terms").is(':checked')){
	 		$('input[name=terms]:checked').val();
	 		$("#terms").val("1");
			console.log("CHECKED");
		}else{
			$("#terms").val('0');
			//alert("please accept terms of use");
		}
	 //console.log("Terms checked = ", checked);
		
	}
	//$( "input[type=checkbox]" ).on( "click", isChecked );
	//isChecked();

});

function validateFields(){
	var isValid = true,

		email = $("#email").val(),

		password      = $("#password").val(),
		password_confirm = $("#password-confirm").val(),

		status  = ['single', 'married', 'divorced','widow'],
		selected_status = $('input[name=maritalStatus]:selected').val(),
		lastname = $('#lastname').val(),
		terms = $('#terms').val();

		 console.log('isValid before = ',isValid);


	if (lastname === '' || email === '' || password === '' || password_confirm === '') {
            isValid = false;
    }

	/*else if(password !== password_confirm) {
		isValid = false;
	}
	else {
		isValid= true;
	}*/

/*
	if(!(isInArray(status, selected_status))){
		isValid = false;
	}

	if(!($('#terms').is(':checked'))) {
		isValid = false;
	}*/

	if (isValid) {
         $('#reg_submit[type="submit"]').prop('disabled', false);
    } else {
         $('#reg_submit[type="submit"]').prop('disabled', true);
     }
     console.log('isValid after= ',isValid);

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