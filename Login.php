<!DOCKTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    
</head>
    
<body>
    <style>
        
        .main-top{
        padding:20px 20px 10px 20px;
        width:500px;
        height: auto;
        background-color: rgba(0, 0, 0, 0.15);
        margin-left: auto;
        margin-right: auto;
        margin-top: 150px;
        margin-bottom: auto;
        border-radius: 10px;


    }
    
    </style>
<header class="header"><p>Welcome to Hospital Management System | Login</p></header>
    <form id="form1" name="form1" method="post" action="Login.php">
    <div class="main-top" >
        
        
        <dev>
            <label for="user_name">User Name :</label>
            <input type="text" name="username" id="user_name" required>
        </dev>
        
        <dev>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password" required>
        </dev>
        
        <div style="position:relative;left:140px;top:5px;">
            <input type=button name=submit id=add value='Patient'onclick="window.location.href='http://localhost/hospital_system/PatientMain.php'">
            <input type=submit name=login id=login value=Login>
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

if(isset($_POST['login'])){
	$username=$_POST['username'];
	$passowrd=$_POST['password'];
	$sql = "Select * from userlog where f_name='$username' and password='$passowrd'";
	
	$result = $conn->query($sql);
	if($result ->num_rows > 0){
		$sql1 = mysqli_query($conn,"Select type from userlog where f_name='$username'");
		$row = mysqli_fetch_array($sql1);
		$name = $row['type'];
		echo $name;
		if($name=="admin"){
			header("Location:http://localhost/hospital_system/AdminMain.php");
            exit();
		}elseif($name=="doctor"){
			header("Location:http://localhost/hospital_system/DoctorMain.php");
		}else{
			header("Location:http://localhost/hospital_system/PatientMain.php");
		}
	}else{
		echo "<script type='text/javascript'>alert('Wrong Details!')</script>";
	}
	
}
$conn->close();
?>
