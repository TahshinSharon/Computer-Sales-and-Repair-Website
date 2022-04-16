<?php
define('TITLE','Update Product');
define('PAGE','assets');
include('includes/header.php');
include('../dbconnection.php');
session_start();
if(isset($_SESSION['is_adminlogin'])){
    $aEmail = $_SESSION['aEmail'];
}
else{
    echo "<script> location.href= 'login.php'</script>";
}
?>
<!-- Start 2nd Column -->
<div class="col-sm-6 mt-5  mx-3 jumbotron">
    <h3 class="text-center">Update Product Details</h3>
    <?php
    if(isset($_REQUEST['edit'])){
        $sql="SELECT * FROM assets_tb WHERE pid={$_REQUEST['id']}";
        $result=$conn->query($sql);
        $row=$result->fetch_assoc();
    }
    if(isset($_REQUEST['pupdate'])){
        // Checking for ety Fields
        if(($_REQUEST['pname'] == "") || ($_REQUEST['pava'] == "") || ($_REQUEST['pdop'] == "") || ($_REQUEST['ptotal'] == "") || ($_REQUEST['poriginalcost'] == "") || ($_REQUEST['psellingcost'] == "")){
            $msg='<div class="alert alert-warning mt-2" role="alert">All Field Must Required</div>';
        }else{
             // Assigning Users Values to variavbles
          $pid=$_REQUEST['pid'];
          $pname = $_REQUEST['pname'];
          $pava = $_REQUEST['pava'];
          $pdop = $_REQUEST['pdop'];
          $ptotal =$_REQUEST['ptotal'];
          $poriginalcost =$_REQUEST['poriginalcost'];
          $psellingcost =$_REQUEST['psellingcost'];
          $sql="UPDATE assets_tb SET pid='$pid',pname='$pname',pdop='$pdop',pava='$pava',ptotal='$ptotal',poriginalcost='$poriginalcost',psellingcost='$psellingcost' WHERE pid='$pid'";
          if($conn->query($sql) == TRUE){
             $msg ='<div class="alert alert-success mt-2" role="alert">Update Successfully</div>';
          }else {
            $msg ='<div class="alert alert-danger mt-2" role="alert">Unable To Update</div>';
           }
          }
    }
    ?>
    <form action=""method="POST">
    <div class="form-group">
            <lebel for="pid">Product ID</lebel>
            <input type="text" class="form-control" id="pid" name="pid" value="<?php if(isset($row['pid'])){echo $row['pid'];}?>">
        </div>
        <div class="form-group">
            <lebel for="pname">Product Name</lebel>
            <input type="text" class="form-control" id="pname" name="pname" value="<?php if(isset($row['pname'])){echo $row['pname'];}?>">
        </div>
        <div class="form-group">
            <label for="pdop">Date of Purchase</label>
            <input type="date" class="form-control" id="pdop" name="pdop" value="<?php if(isset($row['pdop'])){echo $row['pdop'];}?>">
        </div>
        <div class="form-group">
            <label for="pva">Available</label>
            <input type="text" class="form-control" id="pava" name="pava" value="<?php if(isset($row['pava'])){echo $row['pava'];}?>">
        </div>
        <div class="form-group">
            <label for="ptotal">Total</label>
            <input type="text" class="form-control" id="ptotal" name="ptotal" value="<?php if(isset($row['ptotal'])){echo $row['ptotal'];}?>">
        </div>
        <div class="form-group">
            <label for="poriginalcost">Original Price</label>
            <input type="text" class="form-control" id="poriginalcost" name="poriginalcost" value="<?php if(isset($row['poriginalcost'])){echo $row['poriginalcost'];}?>">
        </div>
        <div class="form-group">
            <label for="psellingcost">Selling Price</label>
            <input type="text" class="form-control" id="psellingcost" name="psellingcost" value="<?php if(isset($row['psellingcost'])){echo $row['psellingcost'];}?>">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="pupdate" name="pupdate">Update</button>
            <a href="assets.php" class="btn btn-secondary">Close</a>
        </div>
        <?php if(isset($msg)){echo $msg;} ?>
    </form>
</div>
<?php
include('includes/footer.php');
?>