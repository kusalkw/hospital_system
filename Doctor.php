<!DOCKTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <style>
        select {
        width: 150px;
        padding: 5px 15px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }    
    </style>
</head>
    
<body>
    <header class="header"><p>Welcome to Hospital Management System | Doctor </p></header>
    <form method="post" action="Doctor.php">
    <div class="main-top" >
        <dev>
            <label for="doctorId">Doctor ID :</label>
            <input type="text" name="doctorId" placeholder="dXXXX" id="doctorId" required>
        </dev>
        <dev>
            <label for="fName">First Name :</label>
            <input type="text" name="firstName" id="firstName" >
        </dev>
        <dev>
            <label for="lName">Last Name :</label>
            <input type="text" name="lastName" id="lastName">
        </dev>
        <dev>
            <label for="regNo">Reg No :</label>
            <input type="text" name="regNo" id="regNo">
        </dev>
        <dev>
            <label for="type">Type :</label>
            <input type="text" name="type" id="regNo">
        </dev> 
<!--
        <dev>
            <label for="regNo">Special :</label>
            <input type="text" name="special" id="regNo">
        </dev>
-->
        <div style="position:relative;left:150px;top:5px;">
            <input type=submit name=add id=add value=Add>
            <input type=button name=view id=view value=View onclick="window.location.href='http://localhost/hospital_system/ViewDoctor.php'">
        </div>
    </div>
    </form>
    <p style="color:red; font-size:80%;">©Dinuka Kasun Medis & Kusal Kalhara Weerasuriya</p>
</body>
</html>

<?php
require 'connect.inc.php';
?>

<?php

if(isset($_POST['add'])){
	
	$doctorId = $_POST['doctorId'];
	$f_name = $_POST['firstName'];
	$l_name = $_POST['lastName'];
	$regNo = $_POST['regNo'];
	$type = $_POST['type'];

	$sql = "INSERT INTO `doctor`(`did`, `reg_no`, `f_name`, `l_name`, `type`) VALUES ('$doctorId','$regNo','$f_name','$l_name','$type')";
    
    if($type='Consultant'){
        $sql1 = "INSERT INTO `consultant`(`did`) VALUES ('$doctorId')";
    }else if($type='Specialist'){
        $sql1 = "INSERT INTO `specialist`(`did`) VALUES ('$doctorId')";
    }else if($type='Ex-Physiciant'){
        $sql1 = "INSERT INTO `ex_physician`(`did`) VALUES ('$doctorId')";
    }
    if ($conn->query($sql) === TRUE && $conn->query($sql1) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>