 /*
*Author:Nishant Sharma 103635243
*Target:enquire.html/payment.html
Purpose: booking data validiation and 
created:19/04/2021

Credits;

*/

"use strict";
/*retireve data from part2.js and show read only type*/

function validateCard(){
	var errMsg = "";
	var result = true;
	var type = document.getElementById("type").value;
	var number = document.getElementById("card").value;
	var expiry = document.getElementById("expiry").value;
	var expiryPattern = /^(0[1-9]|1[0-2])\/?([0-9]{2})/;
	var cvv = document.getElementById("cvv").value;
	var cvvPattern = /^[0-9]{3,4}/;
	var numPattern = /^[0-9]{15,16}/;
	var cardNumber = document.getElementById("card").value;
	var yourName = document.getElementById("yourname").value;

if (yourName == "" ){
	errMsg = errMsg + "Please Enter Name\n";
	result = false;
}

	if(document.getElementById("type").value == "none"){
		errMsg = errMsg + "Please Select a Card Type\n";
		result = false;
	}
	var checkCard = cardType(type,number);
	
	if (checkCard != ""){
		errMsg = errMsg + checkCard;
		result = false; 
	}
	if(!(expiry.match(expiryPattern))){
		errMsg = errMsg + "Please Match Date Pattern mm/yy \n";
		result=false;
	}
	if(!(cvv.match(cvvPattern))){
		errMsg = errMsg + "Please Provide 3 or 4 Digit Cvv Number\n";
		result=false;
	}
	if(!(cardNumber.match(numPattern))){
		errMsg = errMsg + "Invalid Length of Card Numbers\n";
		result=false;
	}

	if(errMsg != ""){
		alert(errMsg);
		result = false;
	}




	return result;
}

function getBooking(){
	
	if(sessionStorage.firstName != undefined){    //if sessionStorage for username is not empty
		//confirmation text
		
		document.getElementById("confirm_name").textContent = sessionStorage.firstName + " " + sessionStorage.lastName;
		
		document.getElementById("confirm_mail").textContent =sessionStorage.emailAdd;
		
		document.getElementById("confirm_add").textContent = sessionStorage.stName + " " + sessionStorage.burbName + " " + sessionStorage.state + " " + sessionStorage.postCode;
		
		document.getElementById("confirm_quant").textContent = sessionStorage.getQuantity;
		
		document.getElementById("confirm_total").textContent = sessionStorage.totalCharge;
		document.getElementById("confirm_product").textContent = sessionStorage.myCar;
		
	

		//fill hidden fields
		document.getElementById("firstName").value = sessionStorage.firstName;
		document.getElementById("lastName").value = sessionStorage.lastName;
		document.getElementById("emailAdd").value = sessionStorage.emailAdd;
		document.getElementById("stName").value = sessionStorage.stName;
	
        document.getElementById("burbName").value = sessionStorage.burbName;
        document.getElementById("state").value = sessionStorage.state;
        document.getElementById("postCode").value = sessionStorage.postCode;
		document.getElementById("getQuantity").value = sessionStorage.getQuantity;
		document.getElementById("totalCharge").value = sessionStorage.totalCharge;
		document.getElementById("myCar").value = sessionStorage.myCar;
		document.getElementById("yourname").value=sessionStorage.firstName + " " + sessionStorage.lastName;
        
        
	
		
	}
 
}
//*validate card type with and starting number*//
function cardType(type,number){
	var errMsg = "";
	var visaPattern = /^4[0-9]{12}(?:[0-9]{3})?$/;
	var amExp = /^3[47][0-9]{13}$/;
	var masterCard = /^5[1-5][0-9]{14}$/;
	

	switch(type){
		case "visa":
			if(!(number.match(visaPattern))){
			errMsg = "Visa Cards Must Have 16 Digits and Start with 4\n";
			}
			break;
		
		case "americanexpress":
			if(!(number.match(amExp))){
				errMsg = "America Express Cards Must be 15 Digits and Start With 34 or 37\n";
			}
		break;
		case "mastercard":
			if(!(number.match(masterCard))){
				errMsg = "Master Cards Must be 16 Digits and Start With 51-54\n";
			}
			break;
		}
	return errMsg;
}
//*cancel and return to home page*//
function cancelBooking(){
	window.location = "index.html";
}


 
function init () {
	var regForm = document.getElementById("bookform");
    regForm.onsubmit = validateCard;

	getBooking();

	var returnPage = document.getElementById("cancelButton")
	returnPage.onclick = cancelBooking;

 }
 

window.onload = init;