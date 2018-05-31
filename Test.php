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
    <header class="header"><p>Welcome to Hospital Management System | Test</p></header>
    <form method="post" action="Test.php">
    <div class="main-top" >
        
        
        <dev>
            <label for="testId">Test ID :</label>
            <input type="text" name="testId" placeholder="tXXXX" id="testId" required>
        </dev>
        
        <dev>
            <label for="testName">Test Name :</label>
            <input type="text" name="testName" id="testName">
        </dev>
        
        <dev>
            <label for="patientName">Patient ID :</label>
            <input type="text" name="patientName" id="patientName">
        </dev>
         
        <dev>
            <label for="result">Result :</label>
            <input type="text" name="resultId" id="resultId">
        </dev>
                        
        <div style="position:relative;left:10px;top:5px;">
            <input type=button name=view id=view value=View onclick="window.location.href='http://localhost/hospital_system/ViewTest.php'">
            <input type=submit name=add id=add value=Add>
            <input type=submit name=delete id=delete value=Delete>
            <input type=button name=submitt id=add value='Search'onclick="window.location.href='http://localhost/hospital_system/SearchTest.php'">
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
	
	$test_id = $_POST['testId'];
	$test_name = $_POST['testName'];
	$patient_name = $_POST['patientName'];
	$result_id = $_POST['resultId'];
	$sql = "INSERT INTO `test`(`test_id`, `test_name`) VALUES ('$test_id','$test_name')";
    $sql2 = "INSERT INTO `undergo`(`test _id`, `pid`) VALUES ('$test_id','$patient_name')";
    
    if ($conn->query($sql) === TRUE && $conn->query($sql2) === TRUE) {
        ?>
        <script type='text/javascript'>alert('New record created successfully')</script>
<?php
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if(isset($_POST['delete'])){
	$test_id = $_POST['testId'];

	$sql2 = "DELETE FROM `test` WHERE test_id='$test_id'";
	
	if($conn->query($sql2)===TRUE){
        ?>
		<script type='text/javascript'>alert('Record deleted successfully')</script>
<?php
	}else{
		echo "Error: " . $sql2 . "<br>" . $conn->error;
	}
}


$conn->close();
?>
