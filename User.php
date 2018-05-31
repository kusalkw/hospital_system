<!DOCKTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <style>
    input[type=submit],input[type=button]{
        width: 120px;
        padding: 5px 15px;
        margin: 5px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        text-align: center;
        background-color:#3396FF;
        color:rgb(255, 255, 255);
    }        
    </style>
</head>
    
<body>
    <header class="header"><p>Welcome to Hospital Management System | User</p></header>
    <form method="post" action="User.php">
    <div class="main-top" >
        
        
        <dev>
            <label for="userId">User ID :</label>
            <input type="text" name="userId" placeholder="uXXXX" id="userId" required>
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
            <label for="nic">NIC :</label>
            <input type="text" name="nic" id="nic">
        </dev>
        
        <dev>
            <label for="contactNo">Contact No :</label>
            <input type="text" name="tele" id="tele">
        </dev>
        
        <dev>
            <label for="email">Email :</label>
            <input type="text" name="email" id="email">
        </dev>
        
        <dev>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password">
        </dev>
        
        <dev>
            <label for="rePassword">Confirm  :</label>
            <input type="password" name="rePassword" id="rePassword">
        </dev>
        
        <dev>
            <label for="type">Type :</label>
            <select name="type" id="type">
                <option value="admin">admin</option>
                <option value="doctor">doctor</option>
            </select><br>
        </dev>
          
        <div style="position:relative;left:10px;top:5px;">
            <input type=submit name=add id=add value=Add>
            <input type=submit name=update id=update value=Update>
            <input type=submit name=delete id=delete value=Delete>
            <input type=button name=view id=view value=View onclick="window.location.href='http://localhost/hospital_system/ViewUser.php'">
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
	
	$user_id = $_POST['userId'];
    $password = $_POST['password'];
    $type = $_POST['type'];
	$f_name = $_POST['firstName'];
	$l_name = $_POST['lastName'];
	$nic = $_POST['nic'];
	$tele = $_POST['tele'];
    $email = $_POST['email'];
	
	$sql = "INSERT INTO `userlog`(`user_id`, `password`, `type`, `f_name`, `l_name`, `nic`, `tele`, `email`) VALUES ('$user_id','$password','$type','$f_name','$l_name','$nic','$tele','$email')";
    if ($conn->query($sql) === TRUE) {
        ?>
        echo "<script type='text/javascript'>alert('New record created successfully')</script>"
<?php
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if(isset($_POST['update'])){
	
	$user_id = $_POST['userId'];
    $password = $_POST['password'];
    $type = $_POST['type'];
	$f_name = $_POST['firstName'];
	$l_name = $_POST['lastName'];
	$nic = $_POST['nic'];
	$tele = $_POST['tele'];
    $email = $_POST['email'];
	
	$sql = "UPDATE `userlog` SET `password`='$password',`type`='$type',`f_name`='$f_name',`l_name`='$l_name',`nic`='$nic',`tele`='$tele',`email`='$email' WHERE `user_id`='$user_id'";
    if ($conn->query($sql) === TRUE) {
        ?>
        echo "<script type='text/javascript'>alert('Record updated successfully')</script>"
<?php
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if(isset($_POST['delete'])){
	$user_id = $_POST['userId'];
	
	
	$sql2 = "DELETE FROM `userlog` WHERE user_id='$user_id'";
	
	if($conn->query($sql2)===TRUE){
        ?>
		echo "<script type='text/javascript'>alert('Record deleted successfully')</script>"
<?php
	}else{
		echo "Error: " . $sql2 . "<br>" . $conn->error;
	}
}


$conn->close();
?>
