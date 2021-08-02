
<?php
$errmsg = "";
$firstname = "";
if (isset($_POST['fname'])){
    $firstname = $_POST['fname'];
}
if ($firstname == ""){
    $errmsg .= "<p> You must enter your first name.</p>";
} else if (!preg_match("/^[a-zA-Z-' ]*$/", $firstname)) {
    $errmsg .= "<p> Only alpha letters allowed in your first name.</p>";
    
}
$lastname = "";
if (isset($_POST['lname'])){
    $lastname = $_POST['lname'];
}
if ($lastname == ""){
    $errmsg .= "<p> You must enter your last name.</p>";
} else if (!preg_match("/^[a-zA-Z-' ]*$/", $lastname)) {
    $errmsg .= "<p> Only alpha letters allowed in your last name.</p>";
    
}
//echo $errmsg;
if (isset($_POST['mail'])){
    $email = $_POST['mail'];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    $errmsg .= "<p>Invalid email format.<p>";
  }

if (isset($_POST['phone'])){
    $phone = $_POST['phone'];
}
if(empty($phone)){
    $errmsg .= "<p>Please enter a Phone number.<p>";
}

if (isset($_POST['stad'])){
    $street = $_POST['stad'];
}
if(empty($street)){
    $errmsg .= "<p>Please Enter Street.<p>";
}
if (isset($_POST['burb'])){
    $suburb = $_POST['burb'];
}
if(empty($suburb)){
    $errmsg .= "<p>Please Enter Suburb.<p>";
}
// if(isset($_POST['State'])){
//     $state = $_POST['State'];
//     echo "<p>$state</p>" ;
// }else if ($state == "none"){
//     $errmsg .= "<p>Please Enter Suburb.<p>";
// }

if (isset($_POST['State'])){
    $state = $_POST['State'];

if ($state == "none")
    $errmsg .= "<p>Please Select State.<p>";
}

if(isset($_POST['pcode'])){
$postCode = $_POST['pcode'];
}

if(empty($postCode)){
    $errmsg .= "<p>Please Enter Post Code.<p>";
} elseif(!preg_match("/[0-9]{4}/", $postCode)) {
    $errmsg .= "<p> Post Code must be 4 digits.</p>";
}
 
if (isset($_POST['choice'])){
    $communciation = $_POST['choice'];
}else {
    $communciation = "unknown";
}
if($communciation == "unknown"){
    $errmsg .= "<p> you must select a method of communication.</p>";
}


if (isset($_POST['cars'])){
    $product = $_POST['cars'];
}else {
    $product = "unknown";
}
if($product == "unknown"){
    $errmsg .= "<p> you must select a product.</p>";
}

if (isset($_POST["nocar"])){
    $quantity = $_POST["nocar"];
	

if (is_numeric($quantity) == False)
    $errmsg .= "<p> Only numbers allowed in age field.</p>";


if (($quantity <= 0 || $quantity >= 4))
    $errmsg .= "<p> Your quantity must be beetween 1 and 3.</p>";
}












if (isset($_POST['cname'])){
    $name = $_POST['cname'];

if ($name == "") 
    $errmsg .= "<p> You must enter your name like on card.</p>";
if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) 
    $errmsg .= "<p> Only alpha letters allowed like on card.</p>";
}

$cardtype = "";
if(isset($_POST['ctype'])){
    $cardtype = $_POST['ctype'];

if ($cardtype == "none")
    $errmsg .= "<p>Please Select card.<p>";
}
$cardnum = "";
if(isset($_POST['cardNumber'])){
    $cardnum = $_POST['cardNumber'];
    //echo $cardnum ;

    if(empty($cardnum))
    $errmsg .= "<p>Please Enter Card Number.<p>";
    if(is_numeric($cardnum)== false)
    $errmsg .= "<p>Card number must be only Digits.<p>";
}
$carvalidate = validateCard($cardtype,$cardnum);
if ($carvalidate != ''){
    $errmsg .= $carvalidate;
    
    //echo "<p>$errmsg</p>";
}
if ($errmsg != "") {
	// header ("location: fix_order.php");
    echo $errmsg;
    
}


// if ($cardnum == "") {
//     $errmsg .= "<p> You must enter your card number.</p>";}
// else if (!preg_match("/^4[0-9]{12}(?:[0-9]{3})?$/", $cardnum)) {
//     $errmsg .= "<p> Number must be 16 digits and starting with 4.</p>";
// }
// echo $errmsg;


?>

<?php
function validateCard($cardtype,$cardnum){
$errmsg = "";
switch ($cardtype){
    case "visa":
        if(!preg_match("/^4[0-9]{12}(?:[0-9]{3})?$/", $cardnum)){
            $errmsg .= "<p>match the pattern for visa</p>";}
            break;

        
    case "mastercard":
        if(!preg_match("/^5[1-4][0-9]{14}$/", $cardnum)){
            $errmsg .= "<p>match the pattern for mastercard </p>";}
            break;
    
    case "americanexpress":
        if(!preg_match("/^3[47][0-9]{13}$/", $cardnum)){
            $errmsg .= "<p>match the pattern for amexp </p>";}
            break;
         //echo $errmsg;
}
return $errmsg; 
}
?>