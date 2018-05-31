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
    <header class="header"><p>Welcome to Hospital Management System | Test Details </p></header>
    <form method="post" action="ViewTest.php">
        
        <div class="main-top" >
        <div>
        <?php
            
                $sql4 = "SELECT * FROM `test`";

                $result = $conn->query($sql4);
                if ($result->num_rows > 0) {
                    ?>
                <table style="width:100%">
                    <tr>
                        <th width="100">Test ID</th>
                        <th width="100">Test Name</th>
                        
                     </tr>
                </table>

                <?php
                    while($row = $result->fetch_assoc()) {
                        ?>
                            <table style="width:100%">
                                <tr>
                                    <td width="100"><?php echo $row['test_id']?></td>
                                    <td width="100"><?php echo $row['test_name']?></td>
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



