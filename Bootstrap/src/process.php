<?php
session_start();
include("connect.php");
if(isset($_POST["create"])){
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $ip = mysqli_real_escape_string($conn, $_POST["ip"]);
    $ram = mysqli_real_escape_string($conn, $_POST["ram"]);
    $storage = mysqli_real_escape_string($conn, $_POST["storage"]);
    $os = mysqli_real_escape_string($conn, $_POST["os"]);
    $department = mysqli_real_escape_string($conn, $_POST["department"]);
    $sql = "INSERT INTO computers (name, ip, ram, storage, os, department) VALUES ('$name', '$ip', '$ram', '$storage', '$os', '$department')";
    if(mysqli_query($conn, $sql)){
        $_SESSION['status'] = "Data inserted Successfully!";
        header('location: list.php');
    }else{
        die("Something went wrong");
    }

}
if(isset($_POST["edit"])){
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $ip = mysqli_real_escape_string($conn, $_POST["ip"]);
    $ram = mysqli_real_escape_string($conn, $_POST["ram"]);
    $storage = mysqli_real_escape_string($conn, $_POST["storage"]);
    $os = mysqli_real_escape_string($conn, $_POST["os"]);
    $department = mysqli_real_escape_string($conn, $_POST["department"]);
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $sql = "UPDATE computers SET name = '$name', ip = '$ip', ram = '$ram', storage = '$storage', os = '$os', department = '$department' WHERE id=$id";
    if(mysqli_query($conn, $sql)){
        $_SESSION['status'] = "Data updated Successfully!";
        header('location: list.php');
    }else{
        die("Something went wrong");
    }

}
?>