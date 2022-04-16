<?php
define('TITLE','Status');
define('PAGE','CheckStatus');
include('includes/header.php');
include('../dbconnection.php');
session_start();
if($_SESSION['is_login']){
    $rEmail=$_SESSION['rEmail'];    
}else{
    echo"<script>location.href='RequesterLogin.php';</script>";
}
?>
<!--Start 2nd column-->
<div class="col-sm-6 mt-5 mx-3">
    <form action=""method="post" class="form-inline">
        <div class="form-group mr-3">
            <label for="checkid">Enter Request Id:</label>
            <input type="text" class="form-control" name="checkid" id="checkid">
        </div>
        <button type="sibmit" class="btn btn-danger">Search</button>
    </form>
    <?php
    if(isset($_REQUEST['checkid'])){
        $sql="SELECT * FROM assignwork_tb WHERE request_id={$_REQUEST['checkid']}";
        $result=$conn->query($sql);
        $row=$result->fetch_assoc();
        if(($row['request_id']==$_REQUEST['checkid'])){?>
    <h3 class="text-center mt-5">Assigned Work Details</h3>
    <table class="table table-bordered">
         <tbody>
            <tr>
                <td>Request ID</td>
                <td><?php if(isset($row['request_id'])){echo $row['request_id'];}?></td>
            </tr>
            <tr>
                <td>Request info</td>
                <td><?php if(isset($row['request_info'])){echo $row['request_info'];}?></td>
            </tr>
            <tr>
                <td>Request desc</td>
                <td><?php if(isset($row['request_desc'])){echo $row['request_desc'];}?></td>
            </tr>
            <tr>
                <td>Requester name</td>
                <td><?php if(isset($row['requester_name'])){echo $row['requester_name'];}?></td>
            </tr>
            <tr>
                <td>Requester address1</td>
                <td><?php if(isset($row['requester_ad1'])){echo $row['requester_ad1'];}?></td>
            </tr>
            <tr>
                <td>Requester address2</td>
                <td><?php if(isset($row['requester_ad2'])){echo $row['requester_ad2'];}?></td>
            </tr>
            <tr>
                <td>Requester city</td>
                <td><?php if(isset($row['requester_city'])){echo $row['requester_city'];}?></td>
            </tr>
            <tr>
                <td>Requester state</td>
                <td><?php if(isset($row['requester_state'])){echo $row['requester_state'];}?></td>
            </tr>
            <tr>
                <td>Requester zip</td>
                <td><?php if(isset($row['requester_zip'])){echo $row['requester_zip'];}?></td>
            </tr>
            <tr>
                <td>Requester email</td>
                <td><?php if(isset($row['requester_email'])){echo $row['requester_email'];}?></td>
            </tr>
            <tr>
                <td>Requester mobile</td>
                <td><?php if(isset($row['requester_mobile'])){echo $row['requester_mobile'];}?></td>
            </tr>
            <tr>
                <td>Assigned date</td>
                <td><?php if(isset($row['assign_date'])){echo $row['assign_date'];}?></td>
            </tr>
            <tr>
                <td>Technician Name</td>
                <td><?php if(isset($row['assign_tech'])){echo $row['assign_tech'];}?></td>
            </tr>
            <tr>
                <td>Customer Sign</td>
            </tr>
            <tr>
                <td>Technician Sign</td>
            </tr>
        </tbody>
    </table>
    <div class="text-center">
        <form action="" class="mr-3">
            <input class="btn btn-danger" type="submit" value="Print" onClick="window.print()">
            <input class="btn btn-secondary" type="submit" value="clase">
        </form>
    </div>
    <?php }else{
        echo '<div class="alert alert-warning mt-4">Your Request is Still Pending </div>';
    }
    }?> 
</div><!--End 2nd column -->
<?php
include('includes/foter.php');
?>