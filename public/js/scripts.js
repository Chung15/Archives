
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

	/*addInputField = function () {
	console.log('i am there');
	var input ='<div class="row" id="author_data">\
						<div  class="col-md-10">\
							<div class = "form-group control-panel">\
 								{{ Form:: text("name", null, ["class"=> "form-control"]) }} \
							 </div>\
						 </div>\
						<div  class="col-md-2">\
						      <button type="button" class="btn btn-primary fa fa-minus-circle pull-right" onclick="removeInputField()"> </button>\						        			 
						</div>\
					</div>';



	$(input).insertAfter('.author_data');*/
//}
	
	//$("#addBtn").on('click', addInputField());


	 //$('.removebtn').click(function () {
       // $(this).remove();   
 	//});

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

var counter = 0;

function addInputField() {
	console.log('i am there');
	var button_id ="removebtn"+counter; 
	console.log('Button ID = ', button_id);

	var re = /(\d$)/g;
	var id = button_id.match(re);
	
	var input ='<br id="author_br"/> <div class="row author_data'+counter+'">'+
						'<div  class="col-md-10">'+
							'<div class = "form-group control-panel">'+
 								'<input type="text" name = "authors[]" class = "form-control" id="author-name'+counter+'"/>'+
							 '</div>'+
						 '</div>'+
						'<div  class="col-md-2">'+
						      '<button type="button" class="btn btn-primary fa fa-minus-circle pull-right removebtn" id="'+button_id+'" onclick="removeInputField(this)"> </button>'+						        			 
						'</div>'+
					'</div>';
	if(counter <= 0){
		$(input).insertAfter('.author_data'); 
	}else{
		$(input).insertAfter('.author_data'+(counter - 1));
	}				

	 counter++;
}

//
function removeInputField(element) {

	var button_id = $(element).attr("id");
	var re = /(\d$)/g;
	var id = parseInt(button_id.match(re));
	
	
		$('.author_data'+id).remove();
		$('#author_br').remove();
		counter--;
	
    
}


