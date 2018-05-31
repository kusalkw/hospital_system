<!DOCKTYPE html>
<?php
require 'connect.inc.php';
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
    
<body>
    <header class="header"><p>Welcome to Hospital Management System | Results </p></header>
    <form method="post" action="Results.php">
    <div class="main-top" >
        <dev>
            <label for="resultId">Result ID :</label>
            <input type="text" name="resultId" placeholder="rXXXX" id="resultId" >
        </dev>
        
        <div style="position:relative;left:295px;top:5px;">
            <input type=submit name=view id=view value=View>
        </div>
        
        <dev>
            <?php
                $result_id=$_POST['resultId'];
                if(isset($_POST['view'])){
                    $sql4 = "SELECT * FROM results where result_id='$result_id'";

                    $result = $conn->query($sql4);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            ?>
                                <table>
                                        <tr><label for="resultId">Result :</label><?php echo $row['result']?></tr>
                                </table>


                            <?php
                        }
                    } else {
                        echo "0 results";
                    }
                }
            ?>
        </dev>
    </div>
    </form>
    <p style="color:red; font-size:80%;">©Dinuka Kasun Medis & Kusal Kalhara Weerasuriya</p>
</body>
</html>


