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
	total.style.display = "block";
   answer.value = calculateTotal(array2,array3);	
}

function calculateTotal(quant, price)
{
	var a = 0.00;
	
	for (var i=0; i<8; i++) {              /*This function calculates the total bill of the customer*/
		a += quant[i].value*price[i];
	}
	return "$"+a;
}

/*Online payment feature*/

/*This function shows the Online Payment once the customer checks the Online radio button as payment method*/
function showOnlinePayment () {          
	var onlinePayment = document.getElementById("onlinePayment");
	
	onlinePayment.style.display = "block";
	
	
}
/*This function hides the Online Payment once the customer checks the Pay on pickup radio button as payment method*/
function hideOnlinePayment () {       
	var onlinePayment = document.getElementById("onlinePayment");
	
	onlinePayment.style.display = "none";
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
	
	sun.onclick = showSun;
	haw.onclick = showHaw;
	rich.onclick = showRich;
	col.onclick = showCol;
	park.onclick = showPark;
	kew.onclick = showKew;
	foot.onclick = showFoot;
	bruno.onclick = showBruno;
	showBill.onclick = Bill;
	payonline.onclick = showOnlinePayment;
	payPickup.onclick = hideOnlinePayment;
}

window.onload = init;