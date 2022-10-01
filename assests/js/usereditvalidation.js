
$(document).ready(function(){


	//global vars
	var form = $("#editusers");
	var name = $("#User");
	var nameInfo = $("#nameInfo");
	var pass1 = $("#inputPassword");
	var pass1Info = $("#pass1Info");
	var pass2 = $("#RetypePassword");
	var pass2Info = $("#pass2Info");
	var state = false;


	//validation functions
		function validateName(){
		//if it's NOT valid
		if(name.val().length <= 4){
			name.removeClass("valid");
			nameInfo.removeClass("valid");
			name.addClass("error");
			nameInfo.addClass("error");
			nameInfo.text("We want names with more than 4 letters!");
			state = false;
		}else{
		if(name.val().length > 4){
				var uname=name.val();
				$.post('validation', {names:uname}, 
				
				function(data){
				if(data!=1){
					name.removeClass('valid');
					nameInfo.removeClass('valid');
					name.addClass("error");
					nameInfo.addClass("error");
					nameInfo.text("This name is Not registered!");
					state = false;
				}else{
					name.removeClass('error');
					nameInfo.removeClass('error');
					name.addClass("valid");
					nameInfo.addClass("valid");
					nameInfo.text("User available");
					state = true;
				}
				});		
		}
		
	}
	return state;
	}
	
	

	
	function validatePass1(){
		

		//it's NOT valid
		if(pass1.val().length <5){
			pass1.removeClass("valid");
			pass1Info.removeClass("valid");
			pass1.addClass("error");
			pass1Info.addClass("error");
			pass1Info.text("Password must have least 5 characters!");
			state = false;
		}
		//it's valid
		else{
			pass1.removeClass("error");
			pass1Info.removeClass("error");
			pass1.addClass("valid");
			pass1Info.addClass("valid");
			pass1Info.text("OK!");
			validatePass2();
			state = true;
		}
		return state;
	}
	
	function validatePass2(){
		
		//are NOT valid
		if( pass1.val() != pass2.val() ){
			pass2.removeClass("valid");
			pass2Info.removeClass("valid");
			pass2.addClass("error");
			pass2Info.addClass("error");
			pass2Info.text("Passwords mismatched!");
			state = false;
		}
		//are valid
		else{
			pass2.removeClass("error");
			pass2Info.removeClass("error");
			pass2.addClass("valid");
			pass2Info.addClass("valid");
			pass2Info.text("Password Confirmed!");
			state = true;
		}
		return state;
	}
	
	name.blur(validateName);
	pass1.keyup(validatePass1);
	pass2.keyup(validatePass2);
	
	$('#submit').click(function(){
	var all = $("form").serialize();
	
	if((validateName() & validatePass1() & validatePass2()) == true){
			$.ajax({
			type: "POST",
			url: "useredit",
			data: all,
			success: function(data){
			if(data==1){
				alert('Successfully Updated!!!');
				Swal.fire(
						  'Good job!',
						  'Successfully Updated!!!',
						  'success'
						);
				}else{
				alert('Errors!');
				}
		}
	});
	}else{
		$("#Info").html("<script>Swal.fire({icon: 'error',title: 'Oops...',text: 'Something went wrong!',footer: '<a href>Why do I have this issue?</a>'});</script>Please Fill the required fields!");
		
	}
});
	
});