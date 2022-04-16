<?php
include('../dbconnection.php');
session_start();
if(!isset($_SESSION['is_login'])){
 if(isset($_REQUEST['rEmail'])){
  $rEmail= mysqli_real_escape_string($conn,trim($_REQUEST['rEmail']));
  $rPassword=mysqli_real_escape_string($conn,trim($_REQUEST['rPassword']));
  $sql ="SELECT r_email,r_password FROM requesterlogin_tb WHERE r_email='".$rEmail."' AND r_password ='".$rPassword."' limit 1";
  $result=$conn->query($sql);
  if($result->num_rows == 1){
   $_SESSION['is_login']=true;
   $_SESSION['rEmail'] = $rEmail;
   echo "<script> location.href='RequesterProfile.php';</script>";
   exit;
  }else{
    $msg ='<div class="alert alert-warning mt-2">Password or Email Not Match</div>';
  }
}
}else{
  echo "<script> location.href='RequesterProfile.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Font Awesome CSS -->
    <link real="stylesheet" href="../css/all.min.css">

    <title>Login</title>
</head>
<body>
<div class="mt-5 text-center" style="font-size: 50px;">
<i class="fas fa-stethoscope"></i>
<span>Computer Sales And Repair</span>
</div>
<p class="text-center" style="font-size: 20px;"><i class="fas fa-user-secret text-danger"></i>Requester Area</p>

<div class="container-fluid">
<div class="row justify-content-center">
<div class="col-sm-6 col-md-4">
<form action="" class="shadow-lg p-5" method="POST">
<div class="form-group">
<i class="fas fa-user"></i>
<label for="email" class="font-weight-bold p1-2">Email</label>
<input type="email" class="form-control" placeholder="Email" name="rEmail">
</div>
<div class="form-group">
<i class="fas fa-key"></i>
<label for="pass" class="font-weight-bold p1-2">Password</label>
<input type="password" class="form-control" placeholder="Password" name="rPassword">
</div>
<button type="submit" class="btn btn-outline-danger mt-3 font-weight-bold btn-block shadow-sm">Login</button>
<?php if(isset($msg)){echo $msg;} ?>
</form>
<div class="text-center"><a href="../index.php" class="btn btn-info mt-3 font-weight-bold shadow-sm">Home</a></div>
</div>
</div>
</div>
<!--javascript Files -->
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min,js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/all.min.js"></script>
</body>
</html>