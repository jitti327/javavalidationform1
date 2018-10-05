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

    });

    window.onload = function(){
      console.log('First on load');
    }

    window.onload = function(){
      console.log('Second on load');
    }

  </script>
</head>
<body>

<div class="container">
  <h2>Stacked form</h2>

  <form id="validation-form">

    <div class="form-group row">
      <label for="inputEmail" class="col-sm-2 col-form-label text-success">Email</label>
      <div class="col-sm-7">
        <input type="email" class="form-control is-valid" id="inputEmail" placeholder="Email">
      </div>
    </div>

    <div class="form-group row">
      <label for="inputPassword" class="col-sm-2 col-form-label text-danger">Password</label>
      <div class="col-sm-7">
        <input type="password" class="form-control is-invalid" id="inputPassword" placeholder="Password">
      </div>
      <div class="col-sm-3">
        <small id="passwordHelp" class="text-danger">
          Must be 8-20 characters long.
        </small>      
      </div>
    </div>



    <div class="form-group">
      <label for="exampleFormControlInput1">Email address</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Example select</label>
      <select class="form-control" id="exampleFormControlSelect1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect2">Example multiple select</label>
      <select multiple class="form-control" id="exampleFormControlSelect2">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Example textarea</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
  </form>
</div>

</body>
</html>
