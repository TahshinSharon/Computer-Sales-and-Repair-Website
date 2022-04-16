<?php
include('dbconnection.php');
if(isset($_REQUEST['rsignup'])){
    // Checking for Empty Fields
    if(($_REQUEST['rname'] == "") || ($_REQUEST['rEmail'] == "") || ($_REQUEST['rPassword'] == "")){
        $reqmsg='<div class="alert alert-warning mt-2" role="alert">All Field Must Required</div>';
    }else{
        //Email Already Registered
     $sql = "SELECT r_email FROM requesterlogin_tb WHERE r_email='".$_REQUEST['rEmail']."'";
     $result = $conn->query($sql);
     if($result->num_rows==1){
         $reqmsg = '<div class="alert alert-warning mt-2" role="alert">Email Id Already Registered</div>';
     }else{
         // Assigning Users Values to variavbles
      $rname = $_REQUEST['rname'];
      $rEmail = $_REQUEST['rEmail'];
      $rPassword =$_REQUEST['rPassword'];
      $sql = "INSERT INTO requesterlogin_tb(r_name,r_email,r_password) VALUES('$rname','$rEmail','$rPassword')";
      if($conn->query($sql) == TRUE){
         $reqmsg ='<div class="alert alert-success mt-2" role="alert">Account Successfully Created</div>';
      }else {
        $reqmsg ='<div class="alert alert-danger mt-2" role="alert">Unable To Create Account</div>';
       }
      }
    }
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

    <title>Sign_Up</title>
</head>
<body>
<div class="container pt-5">
    <h2 class="text-center">Create an Account</h2>
    <div class="row mt-4 mb-4">
        <div class="col-md-6 offset-md-3">
            <form action="" class="shadow-lg p-4" method="POST">
                <div class="form-group">
                    <i class="fas fa-user"></i><label for="name" class="font-weight-bold pl-2">Name</label>
                    <input type="text" class="form-control" placeholder="Name" name="rname">
                </div>
                <div class="form-group">
                    <i class="fas fa-user"></i><label for="Email" class="font-weight-bold pl-2">Email</label>
                    <input type="Email" class="form-control" placeholder="Email" name="rEmail">
                    <small class="form-text">Well never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <i class="fas fa-key"></i><label for="pass" class="font-weight-bold pl-2">New Password</label>
                    <input type="Password" class="form-control" placeholder="Password" name="rPassword">
                </div>
                <button type="submit" class="btn btn-danger mt-5 btn-block shadow-sm font-weight-bold" name="rsignup">Sign Up</button>
                <em srtyle="font-size:10px;">By clicking sign up,you are agree to our terms,Data Policy and Cookie Policy</em>
                <?php if(isset($reqmsg)){
                    echo $reqmsg;}
                ?>
            </form>
            <div class="text-center"><a href="Requester/RequesterLogin.php" class="btn btn-danger mt-3 font-weight-bold shadow-sm">ALREADY REGISTERED</a></div>
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