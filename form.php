
<!DOCTYPE html>
<html>
<head>
  <title>Form2</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.min.js">
    <link rel="stylesheet" href="jquery.min.js">
  <script type="text/javascript">
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
    }
  }



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
      }
    }else{
      if(input.value.length > length){
        errorElement.innerHTML = "Max character allowed are "+length;
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


  function passwordValidation(input, errorId){

    var errorElement = document.getElementById(errorId);
    errorElement.innerHTML = "";
    
    console.log('input', input.value);
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

    if(findUpperCaseWithHelperFunction(input.value) === false){
      errorElement.innerHTML = "At least one Uppercase letter";
      return;
    }


    if(findSpecialCharacterWithCustomMatching(input.value) === false){
      errorElement.innerHTML = "Atleast one special character";
      return;
    }
  }



  /*
  *
  * Emial Validation
  *
  */
function checkEmail(email){
    var specialCharacter ="@.";
  email.value = "gjjh";
  for(i=0; i < email.length; i++){
    if(email.value.indexof(i)==specialCharacter){
        console.log('Please enter the first character word');
    }
    
  }
}


  </script>
</head>
<body>
  <div class="container"><!--container start-->
  <div class="row"><!--Row start-->
  <form class="f1" action="" method="POST"><!--form start-->
   <h1 class="heading">Create Your Account</h1>
    <div class="form-group"><!--for name-->
    <div class="row">
    <div class="col-sm-9">
      <label class="name"><b>Name</b></label>
      <input type="text" onkeydown="validateLength(this, 'name', 50,'max');validateRequired(this, 'name');" onchange="validateRequired(this, 'name');" onblur="validateRequired(this, 'name');" id="input-field" name="name" placeholder="Enter Your Name Here..." value=""/>
      <span id="name"></span>
    </div>
    </div>
    </div>
    <div class="form-group"><!--for email-->
    <div class="row">
    <div class="col-sm-9">
      <label class="email"><b>Email</b></label>
      <input type="text" 
        onkeydown="//validateRequired(this, 'email');" 
        onchange="//validateRequired(this, 'email');" 
        onblur="//validateRequired(this, 'email');"  
        onkeyup="checkEmail(this)" 
        id="email-field" name="email" placeholder="Enter Your Email Here..." value=""/>
      <span id="email"></span>
    </div>
    </div>
    </div>
    <div class="form-group"><!--for Pass-->
    <div class="row">
    <div class="col-sm-9">
      <label class="pass"><b>Password</b></label>
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
    </div>
    <div class="form-group"><!--for ConPass-->
    <div class="row">
    <div class="col-sm-9"> 
      <label class="cpass"><b>Confirm Password</b></label>
      <input type="text"  onkeydown="validateRequired(this, 'cpass');" onchange="validateRequired(this, 'cpass');" onblur="validateRequired(this, 'cpass');"  id="cpass-field" name="cpassword" placeholder="********" value=""/>
      <span id="cpass"></span>
    </div>
    </div>
    </div>
    <div class="form-group"><!--for gender-->
    <div class="row">
    <div class="col-sm-9">
             <label class="gender">Gender:</label>
    </div>
       
    <div class="col-xs-4 male">   
             <input type="radio" name="gender"  id="gender" value="boy">Male</input>
    </div>
         
    <div class="col-xs-4 female">
      <input type="radio"  name="gender" id="gender" value="girl" >Female</input>
    </div>
      
         </div>
      <label class="gender"><b>Gender</b></label>
      <input type="radio" onkeydown="validateRequired(this, 'gender');" onblur="" ="" name="gender" value=""/>Male
      <input type="radio" name="gender" value=""/>Female
      <input type="radio" name="gender" value=""/>Others
      <span id="gender"></span>
    </div>
    </div>
    </div>
    <div class="form-group"><!--for qualification-->
    <div class="row">
    <div class="col-sm-9">
      <label class="quali"><b>Qualification</b></label>
      <select>
        <option>Select</option>
        <option>10th</option>
        <option>12th</option>
        <option>Bachelor</option>
        <option>Master</option>
        <option>Phd</option>
      </select>
    </div>
    </div>
    </div>
      <input type="Submit" name="Signup" value="Signup"/>&nbsp&nbsp<a href="Login.php">Login</a>
  </form><!--end form-->
  </div><!--end row-->
  </div><!--end container-->
</body>
</html>