function showDeliveryAddress () {    /*This function shows the Delivery Address fieldset once Delivery address is checked*/
    var delivery = document.getElementById("delivery");
    var baddress = document.getElementById("baddress");

    delivery.style.display = "block";
    baddress.style.display = "block";	
}

function hideDeliveryAddress () {       /*This function hides the delivery address fieldset once Pick up is checked*/
	 var delivery = document.getElementById("delivery");
     var baddress = document.getElementById("baddress");

    delivery.style.display = "none";
	baddress.style.display = "none";
}
function showOnlinePayment () {          /*This function shows the Online Payment once the customer checks the Online radio button as payment method*/
	var onlinePayment = document.getElementById("onlinePayment");
	
	onlinePayment.style.display = "block";
	
	
}
function hideOnlinePayment () {       /*This function shides the Online Payment once the customer checks the Pay on pickup radio button as payment method*/
	var onlinePayment = document.getElementById("onlinePayment");
	
	onlinePayment.style.display = "none";
}
function copyInput () {           /*This function is to copy the delivery address in the billing address once the user checks the same as Delivery address checkbox provided in the Billing Address fieldset*/
	var houseno1 = document.getElementById("houseno1");
	var houseno2 = document.getElementById("houseno2");
	var street1 = document.getElementById("street1");
	var street2 = document.getElementById("street2");
	var city1 = document.getElementById("city1");
	var city2 = document.getElementById("city2");
	var state1 = document.getElementById("state1");
	var state2 = document.getElementById("state2");
	var postcode1 = document.getElementById("postcode1");
	var v3 = document.getElementById("v3");
	
	var pattern1 = /^[a-zA-Z ]+$/;
	
	
	if (houseno1.value == "") {
		alert("The Unit/House Number cannot be empty");
	}
	else if (street1.value == "") {
		alert("The Street Name cannot be empty");
	}
	else if (! street1.value.match (pattern1)) {
		alert("The Street Name contains Symbols or Digits");
	}
	else if (city1.value == "") {
		alert("The City Name cannot be empty");
	}
	else if (! city1.value.match (pattern1)) {
		alert("The City Name contains Symbols or Digits");
	}
	else if (postcode1.value == "") {
		alert("The Postcode cannot be empty");
	}
	
	else if (isNaN(postcode1.value)) {
		alert(postcode1.value + " is not a valid Postcode");
	}
	
	else{          /*Copies the address only if all the input fields in delivery address are valid*/
	houseno2.value = houseno1.value;
	street2.value = street1.value;
	city2.value = city1.value;
	state2.value = state1.value;
	v3.value = postcode1.value;
	}
		
	
}
function cardtype1 () {    /*This function is to set the length of the Card Number input field once the corresponding cardtype is selected*/
var cardtype = document.getElementById("cardtype").value;
	var cardNumber = document.getElementById("cardNumber");	
	
	if (cardtype == "visa") {
		cardNumber.maxLength = 16;
	}
	else if (cardtype == "master") {
		cardNumber.maxLength = 16;
	}
	else if (cardtype == "amex") {
		cardNumber.maxLength = 15;
	}
}


function showSun () {          /*This function is to show the quantity input field of corresponding pizzas once the checkbox is checked*/
	var q1 = document.getElementById("q1");
	
	q1.style.display = "block";
}
function showHaw () {
	var q2 = document.getElementById("q2");
	
	q2.style.display = "block";
}
function showRich () {
	var q3 = document.getElementById("q3");
	
	q3.style.display = "block";
}
function showCol () {
	var q4 = document.getElementById("q4");
	
	q4.style.display = "block";
}
function showPark () {
	var q5 = document.getElementById("q5");
	
	q5.style.display = "block";
}
function showKew () {
	var q6 = document.getElementById("q6");
	
	q6.style.display = "block";
}
function showFoot () {
	var q7 = document.getElementById("q7");
	
	q7.style.display = "block";
}function showBruno () {
	var q8 = document.getElementById("q8");
	
	q8.style.display = "block";
}
function Bill () {      /*This function is to calculate the total bill of the user*/
	var total = document.getElementById("total");
	var answer = document.getElementById("answer");
	var q1 = document.getElementById("q1");
	var q2 = document.getElementById("q2");
	var q3 = document.getElementById("q3");
	var q4 = document.getElementById("q4");
	var q5 = document.getElementById("q5");
	var q6 = document.getElementById("q6");
	var q7 = document.getElementById("q7");
	var q8 = document.getElementById("q8");
	var sun = document.getElementById("sun");
	var haw = document.getElementById("haw");
	var rich = document.getElementById("rich");
	var col = document.getElementById("col");
	var park = document.getElementById("park");
	var kew = document.getElementById("kew");
	var foot = document.getElementById("foot");
	var bruno = document.getElementById("bruno");
	var array1 = [sun,haw,rich,col,park,kew,foot,bruno];
	var array2 = [q1,q2,q3,q4,q5,q6,q7,q8];
	var array3 = [13.60,13.85,13.50,14.10,13.90,14.55,12.90,15.00];
	var a = 0.00;
	
	
	total.style.display = "block";
	for (var i=0; i<8; i++) {              /*This function calculates the total bill of the customer*/
	if (array1[i].checked) {
	a += array2[i].value*array3[i];
	}
	}
   answer.value = "$"+a;	
}
function validation () {      /*This function is to validate the form in the order page. Shows the alert statements for the empty or invalid fields*/
	var v1 = document.getElementById("v1").value;
	var v2 = document.getElementById("v2").value;
	var v3 = document.getElementById("v3").value;
	var payPickup = document.getElementById("payPickup").checked;
	var payonline = document.getElementById("payonline").checked;
	var houseno2 = document.getElementById("houseno2").value;
	var street2 = document.getElementById("street2").value;
	var payonline = document.getElementById("payonline");
	var o1 = document.getElementById("o1").value;
	var cardNumber = document.getElementById("cardNumber").value;
	var cardtype = document.getElementById("cardtype").value;

	var arr1 = [o1,cardNumber];
	var arr2 = ["Name on Card","Card Number"];
	
	var errMsg = "";
	var result = true;
	var pattern = /^[0-9]+$/;
	
	
	
	if (v2 == "") {
		errMsg += "The Customer Name cannot be empty.\n";
	}
	
	if (v1 == "") {
		errMsg += "The Mobile Number cannot be empty.\n";
	}
	
	if (! v1.match (pattern)) {
		errMsg += "Please provide a valid Mobile Number.\n";
	}
	
	if (houseno2 == "") {
		errMsg += "The House Number cannot be empty.\n";
	}
	
	if (street2 == "") {
		errMsg += "The Street Name cannot be empty.\n";
	}
	
	if (v3 == "") {
		errMsg += "The Postcode cannot be empty.\n";
	}
	
	if (! v3.match (pattern)) {
		errMsg += "The Postcode you provided is invalid.\n";
	}
	
	if (v3.length != 4) {
		errMsg += "The Postcode must be 4 digits long.\n";
	}
	
	if ((payPickup == "")&&(payonline == "")) {
        errMsg += "A Payment Method must be selected.\n";
    }
	
	if (payonline.checked == true) {    /*Shows all the errors only if the payonline radio button is checked bu the values inputed in the fieldsets are invalid or empty*/
		
		for (var i=0; i<2; i++) {
			if (arr1[i] == "") {
				errMsg += "The "+arr2[i]+" cannot be empty.\n";
			}
		}
		if (isNaN(cardNumber)) {
			errMsg += "Please enter a valid Card Number.\n";
		}
		if ((cardtype == "visa") && (cardNumber.length != 16)) {
		    errMsg += "Your Visa Card Number must be of 16 Digits.\n";
	    }
		if ((cardtype == "master") && (cardNumber.length != 16)) {
		    errMsg += "Your MasterCard Number must be of 16 Digits.\n";
	    }
		if ((cardtype == "amex") && (cardNumber.length != 15)) {
		    errMsg += "Your American Express Card Number must be of 15 Digits.\n";
	    }
	}
	
	
	if (errMsg != "") {   /*shows all the error messages through alert statement*/
		alert(errMsg);
		result = false;
	} 
return result;
}



function init () {     /*This is the initialisation function which is automatically called when the window is loaded*/

	 
	var showDelivery = document.getElementById("showDelivery");
	var pickup = document.getElementById("pickup");
	var payonline = document.getElementById("payonline");
    var payPickup = document.getElementById("payPickup");
    var copyAddress	= document.getElementById("copyAddress");
	var sun = document.getElementById("sun");
	var haw = document.getElementById("haw");
	var rich = document.getElementById("rich");
	var col = document.getElementById("col");
	var park = document.getElementById("park");
	var kew = document.getElementById("kew");
	var foot = document.getElementById("foot");
	var bruno = document.getElementById("bruno");
	var showBill = document.getElementById("showBill");
	var cardtype = document.getElementById("cardtype");
	var order = document.getElementById("order");
	
	
	   
	showDelivery.onclick = showDeliveryAddress;
	pickup.onclick = hideDeliveryAddress;
	payonline.onclick = showOnlinePayment;
	payPickup.onclick = hideOnlinePayment;
	copyAddress.onclick = copyInput;
	sun.onclick = showSun;
	haw.onclick = showHaw;
	rich.onclick = showRich;
	col.onclick = showCol;
	park.onclick = showPark;
	kew.onclick = showKew;
	foot.onclick = showFoot;
	bruno.onclick = showBruno;
	showBill.onclick = Bill;
	cardtype.onblur = cardtype1;
	order.onsubmit = validation;
}


window.onload = init;