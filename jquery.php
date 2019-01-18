<!DOCTYPE html>
<html lang="en">
<head>
  <title>jQuery validation learning</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript">

    $(document).ready(function(){
      
      // Name required validations
      $("#inputname").val();

      var inputValidationFunction = function(){

        $('#inputNm').html("");

        // Message
        $(this).removeClass('is-invalid');
        $(this).addClass("is-valid");

        //Label
        $("#label-name").removeClass('text-danger');
        $("#label-name").addClass("text-success");        

        if( $(this).val() == ""){

          $('#inputNm').html(" **Name is required");

          $(this).removeClass('is-valid');
          $(this).addClass("is-invalid");

          $("#label-name").removeClass('text-success');
          $("#label-name").addClass("text-danger"); 
          return; 

        }        

        if( $(this).val().length < 6){

          $('#inputNm').html(" **Minimum 6 characters are required");

          $(this).removeClass('is-valid');
          $(this).addClass("is-invalid");

          $("#label-name").removeClass('text-success');
          $("#label-name").addClass("text-danger");
          return;  

        }        

        if( $(this).val().length > 12){

          $('#inputNm').html(" **Maximum 12 characters are allowed");

          $(this).removeClass('is-valid');
          $(this).addClass("is-invalid");

          $("#label-name").removeClass('text-success');
          $("#label-name").addClass("text-danger");
          return;  


        }


       var Characters = "~!@#$%^&*()_+{}:|<>?";

       for(var i= 0 ; i < $(this).val().length; i++){

       console.log("var");

      //if(Characters.indexOf(val[i] == -1){
      if(Characters.indexOf($(this).val()[i]) == -1){
        console.log("here we are");

          $('#inputNm').html(" **Only characters are allowed");

          $(this).removeClass('is-valid');
          $(this).addClass("is-invalid");

          $("#label-name").removeClass('text-success');
          $("#label-name").addClass("text-danger");
          return; 
      }
    }


      }

      $('#inputname').change(inputValidationFunction);

      $('#inputname').blur(inputValidationFunction);

      $('#inputname').keyup(inputValidationFunction);


      // Email required validations

      $("#inputEmail").val();
      var validationmail = function(){

        $('#inputHelp').html("");

        // Message
        $(this).removeClass('is-invalid');
        $(this).addClass("is-valid");

        //Label
        $("#label-input").removeClass('text-danger');
        $("#label-input").addClass("text-success");        

        if( $(this).val() == ""){

          $('#inputHelp').html(" **Email is required");

          $(this).removeClass('is-valid');
          $(this).addClass("is-invalid");

          $("#label-input").removeClass('text-success');
          $("#label-input").addClass("text-danger");  

        }

      }

      $('#inputEmail').change(validationmail);

      $('#inputEmail').blur(validationmail);

      $('#inputEmail').keyup(validationmail);


      // Password required validations

      $("#inputpass").val();

      var validationpass = function(){

        $('#inputPas').html("");

        // Message
        $(this).removeClass('is-invalid');
        $(this).addClass("is-valid");

        //Label
        $("#label-pass").removeClass('text-danger');
        $("#label-pass").addClass("text-success");        

        if( $(this).val() == ""){

          $('#inputPas').html(" **Password is required");

          $(this).removeClass('is-valid');
          $(this).addClass("is-invalid");

          $("#label-pass").removeClass('text-success');
          $("#label-pass").addClass("text-danger");  
          return;

        }        

        if( $(this).val().length < 8){

          $('#inputPas').html(" **At Least 8 characters are allowed");

          $(this).removeClass('is-valid');
          $(this).addClass("is-invalid");

          $("#label-pass").removeClass('text-success');
          $("#label-pass").addClass("text-danger");
          return;  

        }        

        if( $(this).val().length > 15){

          $('#inputPas').html(" **Maximum 15 characters are allowed");

          $(this).removeClass('is-valid');
          $(this).addClass("is-invalid");

          $("#label-pass").removeClass('text-success');
          $("#label-pass").addClass("text-danger");
          return;  

        }

      }

      $('#inputpass').change(validationpass);

      $('#inputpass').blur(validationpass);

      $('#inputpass').keyup(validationpass);


      // Confirm Password required validations
      $("#inputcpass").val();

      var validationcpass = function(){

        $('#inputCpas').html("");

        // Message
        $(this).removeClass('is-invalid');
        $(this).addClass("is-valid");

        //Label
        $("#label-cpass").removeClass('text-danger');
        $("#label-cpass").addClass("text-success");        

        if( $(this).val() == ""){

          $('#inputCpas').html(" **Confirm Password is required");

          $(this).removeClass('is-valid');
          $(this).addClass("is-invalid");

          $("#label-cpass").removeClass('text-success');
          $("#label-cpass").addClass("text-danger");  

        }

      }

      $('#inputcpass').change(validationcpass);

      $('#inputcpass').blur(validationcpass);

      $('#inputcpass').keyup(validationcpass);


      // Confirm Password required validations
      $("#inputnum").val();

      var validationnum = function(){

        $('#inputNum').html("");

        // Message
        $(this).removeClass('is-invalid');
        $(this).addClass("is-valid");

        //Label
        $("#label-num").removeClass('text-danger');
        $("#label-num").addClass("text-success");        

        if( $(this).val() == ""){

          $('#inputNum').html(" **Phone is required");

          $(this).removeClass('is-valid');
          $(this).addClass("is-invalid");

          $("#label-num").removeClass('text-success');
          $("#label-num").addClass("text-danger");  

        }

      }

      $('#inputnum').change(validationnum);

      $('#inputnum').blur(validationnum);

      $('#inputnum').keyup(validationnum);


    });



  </script>
</head>
<body>

<div class="container">
  <h2>Registration form</h2>

  <form id="validation-form">

    <div class="form-group row">
      <label for="inputname" id="label-name" class="col-sm-2 col-form-label">Name</label>
      <div class="col-sm-7">
        <input type="name" class="form-control is-valid" id="inputname" placeholder="Enter Your Name Here...">          
      </div>
      <div class="col-sm-3">
        <small id="inputNm" class="text-danger"></small>      
      </div>

    </div>

    <div class="form-group row">
      <label for="inputEmail" id="label-input" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-7">
        <input type="email" class="form-control is-valid" id="inputEmail" placeholder="Email">          
      </div>
      <div class="col-sm-3">
        <small id="inputHelp" class="text-danger"></small>      
      </div>

    </div>

    <div class="form-group row">
      <label for="inputpass" id="label-pass" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-7">
        <input type="pass" class="form-control is-valid" id="inputpass" placeholder="Enter Your Password Here...">          
      </div>
      <div class="col-sm-3">
        <small id="inputPas" class="text-danger"></small>      
      </div>

    </div>

    <div class="form-group row">
      <label for="inputcpass" id="label-cpass" class="col-sm-2 col-form-label">Confirm Password</label>
      <div class="col-sm-7">
        <input type="cpass" class="form-control is-valid" id="inputcpass" placeholder="Re-enter Your Password Here...">          
      </div>
      <div class="col-sm-3">
        <small id="inputCpas" class="text-danger"></small>      
      </div>

    </div>

    <div class="form-group row">
      <label for="inputnum" id="label-num" class="col-sm-2 col-form-label">Phone Number</label>
      <div class="col-sm-7">
        <input type="number" class="form-control is-valid" id="inputnum" placeholder="Enter Your Phone NumberHere...">          
      </div>
      <div class="col-sm-3">
        <small id="inputNum" class="text-danger"></small>      
      </div>

    </div>

    </div>
  </form>
</div>

</body>
</html>
