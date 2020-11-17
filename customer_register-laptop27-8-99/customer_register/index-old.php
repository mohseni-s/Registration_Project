<?php
include 'db.php';

$con = OpenCon();

echo "Connected Successfully";

CloseCon($con);

?>