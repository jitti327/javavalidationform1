<!DOCTYPE html>
<html>
<head>
	<title>Register form validations</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>  
	<script type="text/javascript">

  // This variable is set to true when confirm password is touched/ changed.

  var cPasswordTouched = false; // Flag

  /*
  function validateName(name){
    console.log('Name called');
    console.log('Name value', name.value);

    var errorElement = document.getElementById('name');
    if(name.value === ""){
       errorElement.innerHTML = "This field is required";
    }
    else{
      errorElement.innerHTML = "";
    }
  }
  function validateEmail(email){
    console.log('Email called');
    console.log('Email value', email.value);
    var errorElement = document.getElementById('email');
    if(email.value ===""){
      errorElement.innerHTML = "This field is required";
    }
    else{
      errorElement.innerHTML = "";
    }
  }
  function validatePass(pass){
    console.log('Password called');
    console.log('Pass value', pass.value);
    var errorElement = document.getElementById('pass');
    if(pass.value ===""){
      errorElement.innerHTML = "This field is required";
    }
    else{
      errorElement.innerHTML = "";
    }
  }
  function validateCpass(cpass){
    console.log('Confirm Password called');
    console.log('Cpass value', cpass.value);
    var errorElement = document.getElementById('cpass');
    if(cpass.value ===""){
      errorElement.innerHTML = "This field is required";
    }
    else{
      errorElement.innerHTML = "";
    }
  }

  */

  /*
   *
   * Parameter : 
   *  input   : Input field on which validation is to be called
   *  errorId : ID of HTML element where we need to show the validation
   *
   * Return   : void
   */
  function validateRequired(input, errorId){
    var errorElement = document.getElementById(errorId);
    errorElement.innerHTML = "";
    
    if(input.value === ""){
      errorElement.innerHTML = "This field is required";
      return;
    }    

    if(input.value.length < 8){
      errorElement.innerHTML = "Min character allowed are 8";
      return;
    }  

    if(input.value.length > 15){
      errorElement.innerHTML = "Max character allowed are 15";
      return;
    }
  }  


  /*
   *
   * Parameter : 
   *  input   : Radio button on which validation is to be called
   *  errorId : ID of HTML element where we need to show the validation
   *
   * Return   : void
   */
  function validateRadioOldRequired(input, errorId){


    var errorElement = document.getElementById(errorId);
    //var fieldInput   = ["input-first", "input-second", "input-third"];
    errorElement.innerHTML = "";
    var firstChecked  = document.getElementById("input-first").checked;
    var secondChecked = document.getElementById("input-second").checked;
    var thirdChecked  = document.getElementById("input-third").checked;

    if( firstChecked == true || secondChecked == true || thirdChecked == true ){
      return;
    }
    
    errorElement.innerHTML = "This field is required";

  }

  // function validateRadioRequired(input, errorId){

  // }

  /*
   *
   * Parameter : 
   *  input     : Input field on which validation is to be called
   *  errorId   : ID of HTML element where we need to show the validation
   *  maxLength : Number of character allowed
   *  type      : Allowed type is 'max' & 'min'
   * 
   *  Return   : void
   */

  function validateLength(input, errorId, length, type = 'max'){
    var errorElement = document.getElementById(errorId);
    errorElement.innerHTML = "";

    //console.log(input, errorId, length, type);

    if(type == "min"){
      console.log('current length', input.value.length, length);
      if(input.value.length < length){
        errorElement.innerHTML = "Min character allowed are "+length;
        return;
      }  
    }else{
      if(input.value.length > length){
        console.log("Max character allowed are "+length);
        errorElement.innerHTML = "Max character allowed are "+length;
        return;
      }      
    }

  }



  /*
   *
   * Parameter : 
   *  value    : Input string+
   * 
   *  Return   : boolean
   *    true  : If it has a single uppercase character
   *    false : If it has no uppercase character
   */
  function findUpperCaseWithCustomMatching(value){

    var upperCaseArray = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];

    //var testString = "ncow uper case A";
    var testString = value;
    var counter = 0;
    var flag = false;

    for(var i= 0 ; i < testString.length; i++){
      // console.log(i, testString[i]);

      for(var y=0; y < upperCaseArray.length; y++){
        
        //console.log(i, y, testString[i], upperCaseArray[y]);
        if(testString[i] == upperCaseArray[y] ){
          console.log('we found one upper case i.e' , upperCaseArray[y] );
          flag = true;
          break;
        }
        counter++;
      }

      if(flag == true){
        break;
      }
    }

    console.log('counter', counter);


    return flag;

  }




  /*
   *
   * Parameter : 
   *  value    : Input string+
   * 
   *  Return   : boolean
   *    true  : If it has a single special character
   *    false : If it has no special character
   */
  function findSpecialCharacterWithCustomMatching(value){

    var specialCharacters = "~!@#$%^&*()_+{}:|<>?";
    for(var i= 0 ; i < value.length; i++){

      if(specialCharacters.indexOf(value[i]) !== -1){
        return true;
      }
    }

    return false;
  }



  function findUpperCaseWithHelperFunction(value){

    if( value.toLowerCase() == value ){
      return false;
    }
    return true;

  }


  function findUpperCaseWithSmallCodeFunction(value){
    return value.toLowerCase() != value;
  }

  function passwordValidation(input, errorId){

    var errorElement = document.getElementById(errorId);
    errorElement.innerHTML = "";
    
    if(input.value === ""){
      errorElement.innerHTML = "This field is required";
      return;
    }    


    // Confirm Password Validation
    if(cPasswordTouched == true){
      conpass();
    }


    if(input.value.length < 8){
      errorElement.innerHTML = "Min character allowed are 8";
      return;
    }  

    if(input.value.length > 15){
      errorElement.innerHTML = "Max character allowed are 15";
      return;
    }  

    if(findUpperCaseWithHelperFunction(input.value) === false){
      errorElement.innerHTML = "At least one Uppercase letter";
      return;
    }


    if(findSpecialCharacterWithCustomMatching(input.value) === false){
      errorElement.innerHTML = "Atleast one special character";
      return;
    }


    
    // if(input.value === ""){
    //   errorElement.innerHTML = "This field is required";
    // }else if(input.value.length < 8){
    //   errorElement.innerHTML = "Min character allowed are 8";
    // }else if(input.value.length > 15){
    //   errorElement.innerHTML = "Max character allowed are 15";
    // }  

  }



  /*
  * Confirm password validation
  * Matching Password and confirm password
  */
  function conpass(){

    cPasswordTouched = true;
    
    var errorElement = document.getElementById('cpass');
    var password     = document.getElementById("Pass-field");
    var cPassword    = document.getElementById("cpass-field");

    errorElement.innerHTML = "";
    if(password.value != cPassword.value)
    {
      errorElement.innerHTML = "Password not match";
    }
  }

  /*function validateMail(mail){
    console.log('Validate mail called');
    console.log('Mail value', mail.value );

    var errorElement = document.getElementById('validation-mail');
    if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail.value)){
       errorElement.innerHTML = "Invalid Email";
    }
    else{
      errorElement.innerHTML = "Invaild Email";
    }

  }

  function validatePass(pass){
    console.log('Validate pass called');
    console.log('Pass value', pass.value );

    var errorElement = document.getElementById('validation-pass');
    if(pass.value === ""){
       errorElement.innerHTML = "This field is required(Password Should be 8-15 character and atleast one uppecase and one special character)";
    }else{
      errorElement.innerHTML = "";
    }
  }

  function validateCpass(cpass){
    console.log('Validate cpass called');
    console.log('Cpass value', cpass.value );

    var errorElement = document.getElementById('validation-cpass');
    if(cpass.value === ""){
       errorElement.innerHTML = "Password Not Matched";
    }else{
      errorElement.innerHTML = "";
    }
  }*/

  function Mail(mail){
    //var mailformat ="/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/";
    // if(mai.value !== "mail-format"){
    //   errorElement.innerHTML = "Invaild Email";
    //   return false;
    // }
  }


  /*
   *
   *
   * Function name :  modifiedNumber 
   * Parmater      : value ( string )
   * return        : boolean
    -- True  -- In case all letters are number 
    -- False -- In case any one letter is not a number
   */

  function modifiedNumber(value){
    
    var allowedCharacter = ["+","-","0","1","2","3","4","5","6","7","8","9"];
    for(var i=0; i< value.length; i++){
     if( allowedCharacter.indexOf(value[i]) == -1  ){
        return false;
     }
    }

    return true;

  }


  /*
  *
  * Check for validation of phone number
  * Parameter : value ; // String
  * Return    :
  *  true  - In case value don't match with "0123456789"
  *  false - In case value match with "0123456789"
  */

  function number(value){


    var numbers = "0123456789";
    for(var i= 0; i < value.length; i++){
      console.log(i);
      if(value !== numbers){
        return true;
      }
    }

    return false;
  }
  

  /*
  * Mobile validation
  * Required
  *Min or max number allowed
  *charachter are not allowed
  */
  function mobile(input, errorId){

    var errorElement = document.getElementById(errorId);
    errorElement.innerHTML = "";
    
    if(input.value === ""){
      errorElement.innerHTML = "This field is required";
      return;
    }    




    if(modifiedNumber(input.value) === false){
      errorElement.innerHTML = "Only numbers are allowed";
      return;
    }

    if(input.value.length < 8){
      errorElement.innerHTML = "Min Numbers allowed are 8";
      return;
    }  

    if(input.value.length > 12){
      errorElement.innerHTML = "Max Numbers allowed are 12";
      return;
    }  
  }
  
  </script>
  <style>
    body{
      background-image: url('register.jpg');
      background-size: cover;
      padding-top: 60px;

    }
    .container{

      text-align: center;
      background-color: #000000;
      opacity: 0.6;
      width: 500px;
      text-overflow: none;
      text-align: center;
      overflow: none;
      padding-top: 30px;
      padding-left: 150px;
    }
  </style>
</head>
<body>
	<div class="container">
	<div class="row">
    <form class="f1" action="" method="POST">
      <div class="form-group">
      <div class="col-sm-6">
        <label><b>Name</b></label>
        <input type="text" 
        onkeyup="validateRequired(this, 'name');" 
        onchange="validateRequired(this, 'name');" 
        onblur="validateRequired(this, 'name');" 
        id="input-field" name="name" 
        placeholder="Enter Your Name Here..." 
        value=""/>
        <span id="name"></span>
      </div>
      </div>
      <div class="form-group">
      <div class="col-sm-6">
        <label><b>Email</b></label>
        <input type="text" 
        onkeyup="Mail('this');validateRequired(this, 'email');" 
        onchange="validateRequired(this, 'email');" 
        onblur="validateRequired(this, 'email');"  
        id="email-field" name="email" 
        placeholder="Enter Your Email Here..." 
        value=""/>
        <span id="email"></span>
      </div>
    	</div>
      <div class="form-group">
      <div class="col-sm-6">
        <label><b>Password</b></label>
        <input type="text" 
          onkeyup="passwordValidation(this, 'pass');" 
          onchange="passwordValidation(this, 'pass');" 
          onblur="passwordValidation(this, 'pass'); " 
          id="Pass-field" 
          name="password" 
          placeholder="********" 
          value=""/>
        <span id="pass"></span>
      </div>
    	</div>
      <div class="form-group">
      <div class="col-sm-6"> 
        <label><b>Confirm Password</b></label>
        <input type="text"  
        onkeyup="validateRequired(this, 'cpass');conpass();" 
        onchange="validateRequired(this, 'cpass');conpass();" 
        onblur="validateRequired(this, 'cpass');conpass();"  
        id="cpass-field" name="cpassword" 
        placeholder="********" value=""/>
        <span id="cpass"></span>
      </div>
      </div>
      <div class="form-group">
      <div class="col-sm-6"> 
        <label><b>Phone Number:</b></label>
        <input type="text"  onkeyup="mobile(this, 'mob');" 
        onchange="mobile(this, 'mob');" 
        onblur="mobile(this, 'mob');"  
        id="mob-field" name="mob" 
        placeholder="Enter Your Mobile number" 
        value=""/>
        <span id="mob"></span>
      </div>
      </div>
      <div class="form-group">
      <div class="col-sm-6">
        <label><b>Gender</b></label>
        <input 
        type="radio" 
        onblur="validateRadioRequired(this, 'gender');" 
        onchange="validateRadioRequired(this, 'gender');" 
        id="input-first"
        name="gender" 
        value="Male"/>Male
        <input 
        type="radio" 
        onblur="validateRadioRequired(this, 'gender');"    
        onchange="validateRadioRequired(this, 'gender');"    
        id="input-second"     
        name="gender" 
        value="Female"/>Female
        <input 
        type="radio"
        id="input-third"         
        onblur="validateRadioRequired(this, 'gender');"         
        onchange="validateRadioRequired(this, 'gender');"         
        name="gender" 
        value="Others"/>Others
        <span id="gender"></span>
      </div>
      </div>
      <div class="form-group">
      <div class="col-sm-6">
        <label><b>Qualification</b></label>
        <select
          onkeyup="validateRequired(this, 'qualification-error');" 
          onchange="validateRequired(this, 'qualification-error');" 
          onblur="validateRequired(this, 'qualification-error');"  
        >
          <option value="">Select</option>
          <option value="">10th</option>
          <option>12th</option>
          <option>Bachelor</option>
          <option>Master</option>
          <option>Phd</option>
        </select>
        <span id="qualification-error"></span>
      </div>
    	</div>
      <div class="form-group">
      <div class="col-sm-6">
        <input type="Submit" name="Signup" value="Signup"/>&nbsp&nbsp<a href="Login.php">Login</a>
    	</div>
    	</div>
  	</form>
    </div>
    </div>
</body>
</html>