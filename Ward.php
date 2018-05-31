<!DOCKTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <style>
    input[type=submit]{
        width: 100px;
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
    <header class="header"><p>Welcome to Hospital Management System | Ward Details</p></header>
    <form method="post" action="Ward.php">
    <div class="main-top" >
        
        
        <dev>
            <label for="wardNo">Ward No :</label>
            <input type="text" name="wardNo"  placeholder="wXXXX" id="wardNo" required>
        </dev>
        
        <dev>
            <label for="wardName">Ward Name :</label>
            <input type="text" name="wardName" id="wardName" >
        </dev>
                  
        <div style="position:relative;left:30px;top:5px;">
            <input type=submit name=add id=add value=Add>
            <input type=submit name=update id=update value=Update>
            <input type=submit name=delete id=delete value=Delete>
            <input type=button name=view id=view value=View
                   onclick="window.location.href='http://localhost/hospital_system/ViewWard.php'">
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
	$wardNo = $_POST['wardNo'];
	$wardName = $_POST['wardName'];
	
	$sql1 = "INSERT INTO ward(`ward_no`, `ward_name`) VALUES ('$wardNo','$wardName')";
	
	if($conn->query($sql1)===TRUE){
		echo "new record created successfully...";
	}else{
		echo "Error: " . $sql1 . "<br>" . $conn->error;
	}
}
if(isset($_POST['update'])){
	$wardNo = $_POST['wardNo'];
	$wardName = $_POST['wardName'];
	
	$sql3 = "UPDATE `ward` SET `ward_name`='$wardName' WHERE `ward_no`='$wardNo'";
	
	if($conn->query($sql3)===TRUE){
		echo "'$wardNo' updated successfully...";
	}else{
		echo "Error: " . $sql3 . "<br>" . $conn->error;
	}
}

if(isset($_POST['view'])){
	$wardNo = $_POST['wardNo'];
	$wardName = $_POST['wardName'];
	
	$sql4 = "SELECT * FROM ward";
	
	$result = $conn->query($sql4);
if ($result->num_rows > 0) {
    ?>
<table>
    <tr>
    <th>Ward No</th>
    <th>Ward Name</th>
  </tr>
</table>
    
<?php
    while($row = $result->fetch_assoc()) {
        ?>
            <table>
                <tr>
                    <td><?php echo $row['ward_no']?></td>
                    <td><?php echo $row['ward_name']?></td>
                </tr>
            </table>
            
        
        <?php
    }
} else {
    echo "0 results";
}
}

if(isset($_POST['delete'])){
	$wardNo = $_POST['wardNo'];
	$wardName = $_POST['wardName'];
	
	$sql2 = "DELETE FROM `ward` WHERE ward_no='$wardNo'";
	
	if($conn->query($sql2)===TRUE){
		echo "'$wardNo' deleted successfully...";
	}else{
		echo "Error: " . $sql2 . "<br>" . $conn->error;
	}
}



$conn->close();
?>
