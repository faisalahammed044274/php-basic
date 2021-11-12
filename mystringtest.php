<?php
 
$alert_class='alert-warning';
$alert_msg = 'Please fill the form';
 
//if the form is submitted
if ($_POST) {
  //get the input values
  $str1 = $_POST['first_string'];
  $str2 = $_POST['second_string'];
    
  //let's compare the strings
  if ( $str1 === $str2 ) {
    $alert_class = 'alert-success';
    $alert_msg = 'Both the strings are equal!';
  } else {
    $alert_class = 'alert-danger';
    $alert_msg = 'Both the strings are not equal!';
  }
}
 
?>
 
<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP program to compare Two Strings!</title>
 
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
 
  </head>
  <body>
    <div class="container">
      <h1 class="text-center">PHP program to compare Two Strings!</h1>
      <!-- Output -->
      <div id="msg">        
        <div class="alert <?=$alert_class;?>">
          <div id="result"><?=$alert_msg;?></div>
        </div>
      </div>
 
      <!-- our form -->
      <form action="" method="POST" role="form">
      
        <div class="form-group">
          <label for="first_string">First string:</label>
          <input type="text" class="form-control" name="first_string" id="first_string" value="<?=(isset($_POST['first_string'])) ? $_POST['first_string'] : '';?>">
        </div>
      
        <div class="form-group">
          <label for="second_string">Second string:</label>
          <input type="text" class="form-control" name="second_string" id="second_string" value="<?=(isset($_POST['second_string'])) ? $_POST['second_string']: '';?>">
        </div>
 
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </body>
</html>