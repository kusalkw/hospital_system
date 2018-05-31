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
    <header class="header"><p>Welcome to Hospital Management System | Test</p></header>
    <form method="post" action="SearchTest.php">
        
        <div class="main-top" >
        <dev>
            <label for="testId">Test ID :</label>
            <input type="text" name="testId" placeholder="tXXXX" id="testId" >
        </dev>
        
        <div style="position:relative;left:295px;top:5px;">
            <input type=submit name=search id=search value=Search>
        </div>
        <div>
        <?php
            
            if(isset($_POST['search'])){
                $testId=$_POST['testId'];
                $sql4 = "SELECT * FROM test t,patient p,results r where t.test_id='$testId'";                                              

                $result = $conn->query($sql4);
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc()
                        ?>
                            <table style="width:100%">
                                <tr width="100"><label for="resultId">Test ID :</label><?php echo $row['test_id']?></tr><br><br>
                                <tr width="100"><label for="resultId">Test Name :</label><?php echo $row['test_name']?></tr><br><br>
                                <tr width="100"><label for="resultId">Pateint :</label><?php echo $row['pid'],' : ',$row['f_name'],' ',$row['l_name']?></tr><br><br>
                                <tr width="100"><label for="resultId">Result :</label><?php echo $row['result']?></tr><br><br>
                            </table>


                        <?php
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



