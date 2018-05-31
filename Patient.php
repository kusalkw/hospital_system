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
    <header class="header"><p>Welcome to Hospital Management Syhospital_system | Patient</p></header>
    <form method="post" action="Patient.php">
    <div class="main-top" >
        <dev>
            <label for="patientId">Patient ID :</label>
            <input type="text" name="patientId" placeholder="pXXXX" id="patientId" required >
        </dev>
        <dev>
            <label for="fName">First Name :</label>
            <input type="text" name="firstName" id="firstName" >
        </dev>
        <dev>
            <label for="lName">Last Name :</label>
            <input type="text" name="lastName" id="lastName" >
        </dev>
        <dev>
            <label for="gender">Gender :</label>
            <select name="gender" id="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select><br>
        </dev>
        
        <dev>
            <label for="nic">NIC :</label>
            <input type="text" name="nic" id="nic" >
        </dev>
        
        <dev>
            <label for="birthDay">Birth Day :</label>
            <input type="date" name="birthDay" id="birthDay" pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))"  maxlength="10">
        </dev>
        
        <dev>
            <label for="address">Address :</label>
            <input type="text" name="address" id="address" >
        </dev>
        
        <dev>
            <label for="addDate">Addmited Date :</label>
            <input type="date" name="addDate" id="addDate" >
        </dev>
        
        <dev>
            <label for="disDate">Discharged Date :</label>
            <input type="date" name="disDate" id="disDate" >
        </dev>
        
        <dev>
            <label for="wardNo">Ward No :</label>
            <input type="text" name="wardNo" id="wardNo" >
        </dev>
        
        <dev>
            <label for="doctor">Doctor :</label>
            <input type="text" name="doctor" id="doctor" >
        </dev>
        
        <dev>
            <label for="tele">Tele :</label>
            <input type="text" name="tele" id="tele" >
        </dev>
                
        <div style="position:relative;left:10px;top:5px;">
            <input type=submit name=add id=add value=Add>
            <input type=submit name=delete id=delete value=Delete>
            <input type=button name=view id=view value=View onclick="window.location.href='http://localhost/hospital_syhospital_system/ViewPatient.php'">
            <input type=button name=submitt id=add value='Search'onclick="window.location.href='http://localhost/hospital_syhospital_system/MyDetails.php'">
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


if(isset($_POST['veiw'])){
$sql1 = "SELECT*FROM patient";
$result = $conn->query($sql1);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["pid"]. " - Name: " . $row["f_name"]. " " . $row["l_name"]. " Nic :" . $row["nic"]."birth Day: " . $row["birth_day"]."Address: " . $row["address"]."Add date: " . $row["addmit_date"]."discharge date: " . $row["discharge_date"]. "Ward no: " . $row["ward_no"]."did: " . $row["did"]." Gender: " . $row["gender"]." Tele: " . $row["tele"]."<br>";
        }
    } else {
        echo "0 results";
    }
}
if(isset($_POST['add'])){
	
	$patient_id = $_POST['patientId'];
	$f_name = $_POST['firstName'];
	$l_name = $_POST['lastName'];
	$nic = $_POST['nic'];
	$birth_day = $_POST['birthDay'];
	$address = $_POST['address'];
	$add_date = $_POST['addDate'];
	$dis_date = $_POST['disDate'];
	$ward_no = $_POST['wardNo'];
	$doctor = $_POST['doctor'];
	$gender = $_POST['gender'];
	$tele = $_POST['tele'];
	
	$sql = "INSERT INTO `patient`(`pid`, `f_name`, `l_name`, `nic`, `birth_day`, `address`, `addmit_date`, `discharge_date`, `ward_no`, `did`, `gender`, `tele`) VALUES ('$patient_id','$f_name','$l_name','$nic','$birth_day','$address','$add_date','$dis_date','$ward_no','$doctor','$gender','$tele')";
    if ($conn->query($sql) === TRUE) {
        ?>
        echo "<script type='text/javascript'>alert('New record created successfully')</script>"
<?php
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if(isset($_POST['delete'])){
	$patient_id = $_POST['patientId'];
	
	
	$sql2 = "DELETE FROM `patient` WHERE pid='$patient_id'";
	
	if($conn->query($sql2)===TRUE){
        ?>
		echo "<script type='text/javascript'>alert('Record deleted successfully')</script>"echo "'$patient_id' deleted successfully...";
<?php
	}else{
		echo "Error: " . $sql2 . "<br>" . $conn->error;
	}
}


$conn->close();
?>
