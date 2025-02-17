<?php
if (isset($_GET['id'])) {
include("connect.php");
$id = $_GET['id'];
$sql = "DELETE FROM computers WHERE id='$id'";
if(mysqli_query($conn,$sql)){
    session_start();
    $_SESSION["delete"] = "Computer Deleted Successfully!";
    header("Location:list.php");
}else{
    die("Something went wrong");
}
}else{
    echo "Computer does not exist";
}
?>