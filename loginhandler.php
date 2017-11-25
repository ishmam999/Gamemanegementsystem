<?php
    $con = mysqli_connect("localhost","root","","test");
    
    if(!$con){
        die("Connection failed: ".mysqli_connect_error());
    }
    echo "Connected Successfully";

    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];

    $sqli = "select username, password from lab";
    $result = mysqli_query($con,$sqli)or die (mysqli_error($con));
    
    $row = mysqli_fetch_array($result);

    if($row["username"]==$username && $row["password"]==$password){
        echo "Your username is :".$row["username"]." "."and"."Password: ".$row["password"];
    }
    else
        echo "Username or password is invalid";
    
?>