<?php
session_start();
session_destroy();
include('includes/foter.php');
echo "<script> location.href='../index.php';</script>"
?>