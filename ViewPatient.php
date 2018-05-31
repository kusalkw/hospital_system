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
        width:1300px;
        height: auto;
        background-color: rgba(0, 0, 0, 0.15);
        margin-left: 10;
        margin-right: 10;
        margin-top: 10px;
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
    <form method="post" action="ViewPatient.php">
        
        <div class="main-top" >
        <div>
        <?php
            
                $sql4 = "SELECT * FROM patient";

                $result = $conn->query($sql4);
                if ($result->num_rows > 0) {
                    ?>
                <table style="width:100%">
                    <tr>
                        <th width="100">Patient No</th>
                        <th width="100">Name</th>
                        <th width="100">NIC</th>
                        <th width="100">Birth Day</th>
                        <th width="100">Address</th>
                        <th width="100">Addmited Day</th>
                        <th width="150">Discharged Day</th>
                        <th width="100">Ward No</th>
                        <th width="100">Doctor</th>
                        <th width="100">Gender</th>
                     </tr>
                </table>

                <?php
                    while($row = $result->fetch_assoc()) {
                        ?>
                            <table style="width:100%">
                                <tr>
                                    <td width="100"><?php echo $row['pid']?></td>
                                    <td width="100"><?php echo $row['f_name'] ,' ', $row['l_name']?></td>
                                    <td width="100"><?php echo $row['nic']?></td>
                                    <td width="100"><?php echo $row['birth_day']?></td>
                                    <td width="100"><?php echo $row['address']?></td>
                                    <td width="100"><?php echo $row['addmit_date']?></td>
                                    <td width="150"><?php echo $row['discharge_date']?></td>
                                    <td width="100"><?php echo $row['ward_no']?></td>
                                    <td width="100"><?php echo $row['did']?></td>
                                    <td width="100"><?php echo $row['gender']?></td>
                                </tr>
                            </table>


                        <?php
                    }
                } else {
                    echo "0 results";
                }
            
        ?>
        
        </div>
       
    </div>
    </form>
    <p style="color:red; font-size:80%;">©Dinuka Kasun Medis & Kusal Kalhara Weerasuriya</p>
</body>
</html>



