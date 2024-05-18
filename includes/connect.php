<?php
$con=mysqli_connect('localhost','root','','categories');
if($con){
    echo "connection successful";
}else{
    die(mysqli_error($con));
}

?>