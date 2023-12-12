<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    .title{
        display: flex;
        font-size: 50px;
        font-weight: 600;
        align-items: center;
        justify-content: center;
        margin-bottom: 80px;
    }
    .form-group{
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 15px;
    }
    .form-group > label{
        padding-left: 220px;
    }
</style>
<body>
<form class="form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<fieldset>

<?php
$usernameErr = $passwordErr = $loginErr = "";
$uname = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $usernameErr = "Username is required";
  } else {
    $uname = test_input($_POST["username"]);
  }

  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
  }

  // Memanggil fungsi otentikasi
  if (!empty($uname) && !empty($password)) {
    if (!otentikasi($uname, $password)) {
      $loginErr = "Invalid username or password";
    }
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function otentikasi($uname, $pass){
    // user admin, password 12345
    if($uname == "admin" && $pass == "123456"){
        return true;
    } else {
        return false;
    }
}
?>

<!-- Form Name -->
<legend class="title">Login Form</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="username">Username</label>  
  <div class="col-md-4">
  <input id="username" name="username" type="text" placeholder="" class="form-control input-md">
  <span class="error">* <?php echo $usernameErr;?></span>
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password</label>
  <div class="col-md-4">
    <input id="password" name="password" type="password" placeholder="" class="form-control input-md">
    <span class="error">* <?php echo $passwordErr;?></span>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Login</button>
  </div>
</div>
<span class="text-danger"><?php echo $loginErr; ?></span>

</fieldset>
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

if (otentikasi($uname, $password)) {
  echo "<p class='text-success'>Login successful!</p>";
}
}
?>
</body>
</html>
