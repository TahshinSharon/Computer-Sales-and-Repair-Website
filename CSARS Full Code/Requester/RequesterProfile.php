<?php
include('includes/header.php');
include('../dbconnection.php');
session_start();
if($_SESSION['is_login']){
    $rEmail=$_SESSION['rEmail'];
}else{
    echo "<script>location.href='RequesterLogin.php'</script>";
}
$sql="SELECT r_name,r_email FROM requesterlogin_tb WHERE r_email='$rEmail'";
$result = $conn->query($sql);
if($result->num_rows == 1){
    $row = $result->fetch_assoc();
    $rName = $row['r_name'];
}

if(isset($_REQUEST['nameupdate'])){
    if($_REQUEST['rName'] ==""){
        $passmsg='<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Fields</div>';
    }else{
        $rName=$_REQUEST['rName'];
        $sql="UPDATE requesterlogin_tb SET r_name = '$rName'WHERE r_email='$rEmail'";
        if($conn->query($sql)==TRUE){
            $passmsg='<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Updated Successfullly</div>';
        }else{
            $passmsg='<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable To Updated</div>';
        }
    }
}
?>

    <div class="col-sm-6 mt-5">   <!-- Start Profile Area 2nd Column -->
    <form action="" method="POST">
    <div class="form-group">
    <lebel for="rEmail">Email</lebel>
    <input type="email" class="form-control" name="rEmail" id="rEmail" value="<?php echo $rEmail ?>" readonly>
    </div>
    <div class="form-group">
    <lebel for="rName">Name</lebel>
    <input type="Name" class="form-control" name="rName" id="rName" value="<?php echo $rName ?>">
    </div>
    <button type="submit" class="btn btn-danger" name="nameupdate">Update</button>
    <?php if(isset($passmsg)){echo $passmsg;} ?>
    </form>
    </div>  <!-- End Profile Area 2nd Column --> 
<?php
include('includes/foter.php');
?>