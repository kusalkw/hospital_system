<!DOCKTYPE html>
<?php
require 'connect.inc.php';
?>
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
        margin-top: 20px;
        margin-bottom: auto;
        border-radius: 10px;


    }

    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
    </style>
    <header class="header"><p>Welcome to Hospital Management System | Patient Details </p></header>
    <form method="post" action="MyDetails.php">
        
        <div class="main-top" >
        <dev>
            <label for="resultId">Patient ID :</label>
            <input type="text" name="pid" placeholder="pXXXX" id="pid" >
        </dev>
        
        <div style="position:relative;left:295px;top:5px;">
            <input type=submit name=search id=search value=Search>
        </div>
        <div>
        <?php
            
            if(isset($_POST['search'])){
                $pid=$_POST['pid'];
                $sql4 = "SELECT * FROM patient where pid='$pid'";
                $result2=mysqli_query($conn,$sql4);
                $array2=mysqli_fetch_array($result2);
                $did = $array2['did'];
             
                $result = $conn->query($sql4);
                if ($result->num_rows > 0) {
                    
                    $sql5 = mysqli_query($conn,"Select f_name,l_name from doctor where did='$did'");
                    $row = mysqli_fetch_array($sql5);
                    $name1 = $row['f_name'];
                    $name2 = $row['l_name'];
                    while($row = $result->fetch_assoc()) {
                        ?>
                            <table style="width:100%">
                                <tr width="100"><label for="resultId">Patient ID :</label><?php echo $row['pid']?></tr><br><br>
                                <tr width="100"><label for="resultId">Name :</label><?php echo $row['f_name'] ,' ', $row['l_name']?></tr><br><br>
                                <tr width="100"><label for="resultId">NIC :</label><?php echo $row['nic']?></tr><br><br>
                                <tr width="100"><label for="resultId">Birth Day :</label><?php echo $row['birth_day']?></tr><br><br>
                                <tr width="100"><label for="resultId">Address :</label><?php echo $row['address']?></tr><br><br>
                                <tr width="100"><label for="resultId">Admited Day :</label><?php echo $row['addmit_date']?></tr><br><br>
                                <tr width="150"><label for="resultId">Discharged Day :</label><?php echo $row['discharge_date']?></tr><br><br>
                                <tr width="100"><label for="resultId">Ward No :</label><?php echo $row['ward_no']?></tr><br><br>
                                <tr width="100"><label for="resultId">Doctor :</label><?php echo $name1,' ',$name2?></tr><br><br>
                                <tr width="100"><label for="resultId">Gender :</label><?php echo $row['gender']?></tr><br><br>
                            </table>


                        <?php
                    }
                } else {
                    echo "No results";
                }
            }
        ?>
        
        </div>
       
    </div>
    </form>
    <p style="color:red; font-size:80%;">©Dinuka Kasun Medis & Kusal Kalhara Weerasuriya</p>
</body>
</html>



