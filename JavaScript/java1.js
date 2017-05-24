function validate () {    /*This function allows the Registration form to be submitted only if all the required input fields are valid*/
	var r1 = document.getElementById("r1").value; 
	var r2 = document.getElementById("r2").value;
	var r3 = document.getElementById("r3").value;
	var r4 = document.getElementById("r4").value;
	var r5 = document.getElementById("r5").checked;
    var r6 = document.getElementById("r6").checked;
	var mob = document.getElementById("mob").value;
	
	
	var errMsg1 = "";
	var result1 = true;
	
	//if (r1 == "") {
		//errMsg1 += "The User Name cannot be empty.\n";
	//}
	
	if ((r5 == "")&&(r6 == "")) {       /*Checkes if a gender is selected or not*/
errMsg1 += "A gender must be selected.\n";
}
	
	if (r3 == "") {
		errMsg1 += "The User Email ID cannot be empty.\n";
	}
	
	if (r3.indexOf('@') == 0 ) {         /*checkes if the email is correct*/
errMsg1 += "Email ID cannot start with an @ symbol.\n";
}
if (r3.indexOf('@') < 0 ) {
errMsg1 += "Email ID must contain an @ symbol.\n";
}
    
	if (r2 == "") {
		errMsg1 += "The Password cannot be empty.\n";
	}
	
	if (mob == "")
	{
		errMsg1 += "Please enter your Phone Number.\n";
	}
	
	if (NaN(mob))
	{
		errMsg1 += "Please enter a valid Phone Number.\n";
	}
	
	if (r2.length <= 7) {
		errMsg1 += "The Password must contain atleast 8 characters.\n";
	}
	
	if (r4 == "") {
		errMsg1 += "The Confirm Password cannot be empty.\n";
	}
	
	if (r4 != r2) {          /*Gives an error statement if both the password and Confirm password are not same*/
		errMsg1 += "Passwords do not match.\n";
	}
    
	
	if (errMsg1 != "") {       /*Shows all the error messages through alert*/
		alert(errMsg1);
		result1 = false;
	} 
return result1;
}

function init () {    /*This function is initialised once the window is loaded*/
	var regform = document.getElementById("regform");
	
	regform.onsubmit = validate;
}

window.onload = init;