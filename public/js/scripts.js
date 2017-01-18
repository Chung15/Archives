
$(document).ready(function() {
	 /**
	     * show different date formats
	     */

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

    /**
        * we can implement a function for this: otherField().
        *
        * @param  \Illuminate\Http\Request  
        * @return 
        */
   	$('select[name=leave_type]').change(function() { 
   		if($(this).val() === 'other') {
   			$('.otherField').removeClass('hidden');
   		} 
   		else{
   			$('.otherField').addClass('hidden');
   			}
   });

   //edit user password;
   	$('#updatePassword').on('click', function () {
  	$('#myModal').focus();
   	});

    $('#passport_number').click(function() {
	$('#passport_number').notify('добавьте серия и номер паспорта', 'info', {position: 'top'});
	});

    // uploaad img by click on camera icon
   	$("#uploadImg").click(function() {
    $("input[type='file']").click();
	});

	// Show form form upload image
   	$("input[type='file']").click(function(){
    	$('#imgUploadBtn').removeClass('hidden');

	   var img = $("input[type='file']").val();
    });


   $('.fa-times').hover(function (){
   		$('.fa-times').removeClass('hidden'),
   		 function() {$('.fa-times').addClass('hover')}, 
   		 function(){$('.fa-times').removeClass('hover')};
   });


	// Add other field when other option selected

   $('select[name=diploma_type]').change(function() { 
   	if($(this).val() === 'other') {
   		$('.otherDiploma').removeClass('hidden');
   	} 
   	else{
   		$('.otherDiploma').addClass('hidden');
   	}
   });

	var gender = $('input[name=gender]:checked').val();

	isChecked = function(){
		if($("#terms").is(':checked')){
	 		$('input[name=terms]:checked').val();
	 		$("#terms").val("1");
			console.log("CHECKED");
		}else{
			$("#terms").val('0');
			
		}
		
	}

});

// Validation for email and password
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


/*-----------------------------------------Further implementation------------------------------------------------------------------------------*/
var counter = 0;

 /**
     * add a new input field on click on the button +.
     *
     
     */
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

 /**
     * remove field on click on btn - .
     *
     */

function removeInputField(element) {

	var button_id = $(element).attr("id");
	var re = /(\d$)/g;
	var id = parseInt(button_id.match(re));
	
	
		$('.author_data'+id).remove();
		$('#author_br').remove();
		counter--;
    
}

// hide and show edit view on click on editbtn.using the same view 
 function editUserProfile() {
 	var editBtn = $('#editProfile'),
 		contentView = $('#userProfileInfo'),
 		editView = $('#userProfileEdit');
 	editBtn.clik( function() {
 		
 		contentView.addClass('hidden');
 		editView.removeClass('hidden');
 	});
 }
/*----------------------------------------------------------------------------------------------------------------------------------------------*/

