
/*
*Author:Nishant Sharma 103635243
*Target:clickme.html
Purpose:xx
created:19/04/2021
Last Update:
Credits;

*/

"use strict";
/* validate data from use input using js */
function validate(){
var errMsg = "";
var result = true;
var myPattern = /^[a-zA-z]+$/;
var mailformat = /^[^\s@]+@[^\s@]+$/;
var phoneFormat = /^[0-9]{2}-[0-9]{4}-[0-9]{4}/;
var postCode = document.getElementById("code").value;
var state = document.getElementById("state").value;
var totalCharge = 0;
var postPattern = /[0-9]{4}/;


var getQuantity = document.getElementById("nocars").value;

var firstName = document.getElementById("fname").value;
if(!firstName.match(myPattern)){
errMsg = errMsg + "Your First Name must only contain alphabets\n";
result = false;
}
var lastName = document.getElementById("lname").value;
if(!lastName.match(myPattern)){
errMsg = errMsg + "your Last name must only contain alphabets\n";
result = false;
}
var emailAdd = document.getElementById("mail").value;
if(!emailAdd.match(mailformat)){
errMsg = errMsg + "Please provide valid e-amil\n";
result = false;
}
var phoneNum = document.getElementById("phone").value;
if(!phoneNum.match(phoneFormat)){
errMsg = errMsg + "Please follow phone foramt\n";
result = false;
}


var stName = document.getElementById("stad").value;
if(stName == ""){
    errMsg = `${errMsg}Please Enter Street Name
`;
    result = false;
}
var burbName = document.getElementById("burb").value;
if(burbName == ""){
    errMsg = `${errMsg}Please Enter A Suburb Name
`;
    result = false;
}
if(state == ""){
    
    errMsg = errMsg + "Select A State\n";
    result = false;
}

if(!(postCode.match(postPattern))){
    errMsg += "Please Enter 4 Digit Postcode\n";
    result = false;
}
var myCar = getCar();
if(myCar == "none"){
    errMsg = errMsg + "Select a Product\n"
    result = false;
}




var getSpecs = getPref();
if (getSpecs == "none"){
    errMsg = errMsg + "Select Method of Communication\n";
    result = false;
}



var checkState = validateState(state,postCode);
if (checkState != ""){
    errMsg = errMsg + checkState;
    result = false; 
}
if (getQuantity <= 0 || getQuantity >= 4){
    
    errMsg = errMsg + "Input Quanity Between 1 and 3\n";
    result = false;
}
totalCharge = totalCost(getQuantity);
if(errMsg != ""){
    alert(errMsg);
    result = false;
}
if(result){
    storeConfirmation (firstName,lastName,emailAdd,stName,burbName,state,postCode,getQuantity,totalCharge,myCar);
   
   
}


return result;

}
/* get prefer communication type */
function getPref(){
    var prefName = "none";
    var prefArray = document.getElementById("choice").getElementsByTagName("input");
     for(var i = 0; i < prefArray.length; i++ ){
         if(prefArray[i].checked){
         prefName = prefArray[i].value;
         }
     }
        return prefName;
   } 
/* get car type */
function getCar(){
    var carName = "none";
    var carArray = document.getElementById("cars").getElementsByTagName("input");
    for(var m = 0; m < carArray.length; m++){
        if(carArray[m].checked){
            carName=carArray[m].value;
        }
    }
    return carName; 
}

/* validate state and post code number */
function validateState(x,y){
    var errMsg = "";
   

    switch(x){
        case "VIC":
            if(!(y[0] == 3 || y[0] == 8)){
            errMsg = "VIC Post Code Starts with 3 or 8\n";
            }
            break;
        case "NSW":
            if(!(y[0] == 1 || y[0] == 2)){
            errMsg = "NSW Post Code Starts with 1 or 2\n";
        }
            break;
        case "QLD":
            if(!(y[0] == 4 || y[0] == 9)){
            errMsg = "QLD Post Code Starts with 4 or 9\n";
    }
            break;
        case "NT":
            if(!(y[0] == 0)){
            errMsg = "NT Post Code Starts with 0\n";
            }
            break;
        case "WA":
            if(!(y[0] == 6)){
            errMsg = "WA Post Code Starts with 6\n";
            }
            break;
        case "ACT":
            if(!(y[0] == 0)){
            errMsg = "ACT Post Code Starts with 0\n";
            }
            break;
        case "SA":
            if(!(y[0] == 5)){
            errMsg = "SA Post Code Starts with 5\n";
            }
        break;

        case "TAS":
            if(!(y[0] == 7)){
            errMsg = "TAS Post Code Starts with 7\n";
            }
            break;
                }

    return errMsg;
}
/* use sessionstorage to retrive user info to tranfer to payment.html as read only*/
function storeConfirmation (firstName,lastName,emailAdd,stName,burbName,state,postCode,getQuantity,totalCharge,myCar){
 
    
    sessionStorage.firstName=firstName;
    sessionStorage.lastName=lastName;
    sessionStorage.emailAdd=emailAdd;
    sessionStorage.stName=stName;
    sessionStorage.burbName=burbName;
    sessionStorage.state=state;
    sessionStorage.postCode=postCode;
    sessionStorage.getQuantity=getQuantity;
    sessionStorage.totalCharge=totalCharge;
    sessionStorage.myCar=myCar;

}
/* calculate total cost of product*/
function totalCost(getQuantity){
    var price = 0;
    var total = 0;
    var carType = getCar();
    switch(carType){
        case "Mazda":
            price = 20000;
            break;
        case "Camry":
            price = 15000;
            break; 
        case "Porsche":
            price = 40000;
            break;
    }
    total = getQuantity*price;
    return total ;
}




function init(){
    var regForm = document.getElementById("myform");
    regForm.onsubmit = validate;


}

window.onload=init; 