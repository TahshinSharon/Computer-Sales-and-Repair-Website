<?php
include('includes/header.php');
include('../dbconnection.php');
session_start();
if($_SESSION['is_login']){
    $rEmail=$_SESSION['rEmail'];
}else{
    echo "<script>location.href='RequesterLogin.php'</script>";
}
$rEmail=$_SESSION['rEmail'];
if(isset($_REQUEST['passupdate'])){
    if($_REQUEST['rPassword']==""){
        $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">All Field Required</div>';
    }
    else{
        $rpass=$_REQUEST['rPassword'];
$sql="UPDATE requesterlogin_tb SET r_password='$rpass' WHERE r_email='$rEmail'";
if($conn->query($sql)==TRUE){
    $passmsg='<div class="alert alert-sucess col-sm-6 ml-5 mt-2">Update Successfull</div>';
}else{
    $passmsg='<div class="alert alert-sucess col-sm-6 ml-5 mt-2">Unable to Update</div>';
}
    }
}
?>
<div class="col-sm-9 col-md-10"> <!--Start usr change password form-->
<form class="mt-5 mx-5" action=""method="POST">
<div class="form-group">
    <label for="inputEmail">Email</label>
    <input type="email" class="form-control" id="inputEmail" value="<?php echo $rEmail;?>" readonly>
</div>
<div class="form-group">
    <label for="inputnewpassword">New Password</label>
    <input type="password" class="form-control" id="inputnewpassword" placeholder="New Password" name="rPassword">
</div>
<button type="submit" class="btn btn-danger mr-4 mt-4" name="passupdate">Update</button>
<button type="reset" class="btn btn-success mr-4 mt-4">Reset</button>
<?php
if(isset($passmsg)){
    echo $passmsg;
}
?>
</form>
</div><!--End usr change pass form-->
<?php
include('includes/foter.php');
?>