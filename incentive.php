<?php
                session_start();

                include('includes/session_check.inc');

                ?>

<html>
<head>
<title>Employee Update Form</title>

<style>
        form {
                background:#4D148C;
                color:white;
                font-size:24;
                font-family:arial;
                width:90%;
                height:250px;

        }
</style>


<meta name ="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" text="type/css" href="./css/Index.css">

<?php include './includes/BonusHeader.css';?>
</head>
<body>
 <div class="header" style="background-color: #4D148C;">
                <div class="menu" style="padding-left:28%";>
                        <div class="submenu">
                                 <button class="dropbtn"><a href="executive.php" style="color:white;">Executive Main</a></button></div>
                        <div class="submenu">
                                 <button class="dropbtn"><a href="PersonnelJobTypes.php" style="color:white;">Job Type Chart</a></button></div>
                        <div class="submenu">
                                 <button class="dropbtn"><a href="Severance.php" style="color:white;">Severance Calculator</a></button></div>
                          <div class="submenu">
                                 <button class="dropbtn"><a href="USER_GUIDE.pdf" target="_blank" style="color:white;">Help</a></button>
                        </div>
                        <div class="submenu">
                                <button class="dropbtn"><a href="logout.php" style="color:white;">Logout</a></button>
                        </div>
                </div>
        </div>
        <br><br>

<h1>Employee Bonus Review</h1>
<h2>Notice: Click Submit to Load Current Bonus Allocation Table. Ignore First Error.</h2>
<form action="incentive.php" method="POST">
<h1 style="color:white;">Enter Employee ID to Change Bonus<h1>
<h3>Enter new amount for employee</h3>
<br>
<label for="ID">Employee ID: (Must Enter ID to Update Record)</label>
  <input type="text" id="ID" name="ID" placeholder="Numeric 5-10 Characters" maxlength="10" size="20" pattern="[0-9]{5,10}">

&nbsp;&nbsp;

<label for="Current_Bonus">New Bonus Amount:</label>
  <input type="text" id="Current_Bonus" name="Current_Bonus" placeholder="Use Format ####.##" maxlength="10" size="20" pattern="[0-9,.]{6,10}">

&nbsp;&nbsp;

<p><input type="submit" style="background-color:#FF6600; color:white; height:25px; width:70px"></p>


</body>

<?php include './includes/ExecutiveFooter.css';?>

</html>

<?php
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
        require('connect_db.php');
        $errors = array() ;
                echo"<h1 style='background:#4D148C;color:white;width:50%'>Current Bonus Allocation Table</h1>";
                $query10 ="SELECT* FROM Bonus" ;
                        $result10 = mysqli_query($con, $query10) ;

                        // Table Formatting
                        echo '<style>';
                        echo 'table {border:2px solid black; width: 50%; }';
                        echo 'th, td {border:1px solid black;padding: 12px 15px; text-align:center;font-weight:bold; }';
                        echo 'th {background-color:#F8F8F8;}';
                        echo 'tr:nth-child(even) { background-color: #4D148C; color:white }';
                        echo '</style>';

                        $table_header = '<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Rating</th><th>Bonus Expected</th></tr>';

                        echo '<table>';
                        echo $table_header;

                        while ($row = mysqli_fetch_array($result10))
                        {
                        echo '<tr>';
                        echo '<td>' . $row['ID'] . '</td>';
                        echo '<td>' . $row['FName'] . '</td>';
                        echo '<td>' . $row['LName'] . '</td>';
                        echo '<td>' . $row['FY23Rating'] . '</td>';
                        echo '<td>' . $row['Current_Bonus'] . '</td>';
                        echo '</tr>';
                        }

                        echo '</table>';

                        echo '<br>';


                        $query12 = "SELECT SUM(Current_Bonus) AS count FROM Bonus" ;
                        $duration = $con->query($query12);
                        $record = $duration->fetch_array();
                        $total = $record['count'];
                        $total2 = $total;
                        echo "<h2 style='text-align:left; font-size:32;'>Current Allocated Funds: $ $total2</h2>" ;

                if(empty( $_POST['ID']))
                        {$errors[] = 'Enter EmployeeID';}
                else
                        {$e = mysqli_real_escape_string($con,trim($_POST['ID']));}

                if( isset($_POST['Current_Bonus']))
                        {$b = mysqli_real_escape_string($con,trim($_POST['Current_Bonus']));}
                else {null;}

                if(empty($errors) && !empty($e))
                        {
                        $q3 = "SELECT ID FROM Bonus WHERE ID='$e'";

                        $r3 = mysqli_query($con,$q3);

                        if (mysqli_num_rows($r3) == 0 )
                                {$errors[] = 'EmployeeID does not exist. Please change <a href="incentive.php">Update</a>';}
                        }

                if(empty($errors) && !empty($b)){
                        $q6 = "UPDATE Bonus SET Current_Bonus = '$b' WHERE ID = '$e'";

                        $r6 = mysqli_query($con,$q6);
						}


                        if(empty($errors)){
                        $query4 ="SELECT* FROM Bonus" ;
                        $result4 = mysqli_query($con, $query4) ;

                        // Table Formatting
                        echo "<br><br><br><h1 style='background:#ff6600;color:black;width:50%'>Updated Bonus Allocation Table</h1>";
                        echo '<style>';
                        echo 'table {border: 2px solid black; width: 50%; }';
                        echo 'th, td {border:1px solid black; padding: 12px 15px; text-align:center; font-weight:bold;}';
                        echo 'th { background-color: #F8F8F8; }';
                        echo 'tr:nth-child(even) { background-color: #4D148C; color:white }';
                        echo '</style>';

                        $table_header = '<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Rating</th><th>Bonus Expected</th></tr>';

                        echo '<table>';
                        echo $table_header;

                        while ($row = mysqli_fetch_array($result4))
                        {
                        echo '<tr>';
                        echo '<td>' . $row['ID'] . '</td>';
                        echo '<td>' . $row['FName'] . '</td>';
                        echo '<td>' . $row['LName'] . '</td>';
                        echo '<td>' . $row['FY23Rating'] . '</td>';
                        echo '<td>' . $row['Current_Bonus'] . '</td>';
                        echo '</tr>';
                        }

                        echo '</table>';

                        echo '<br>';


                        $query2 = "SELECT SUM(Current_Bonus) AS count FROM Bonus" ;
                        $duration = $con->query($query2);
                        $record = $duration->fetch_array();
                        $total = $record['count'];
                        $total2 = $total;
                        echo "<h2 style='text-align:left; font-size:32;'>Updated Allocated Funds: $ $total2</h2>" ;
                }
                else
                        {
                        echo'<h1>Error!</h1><p>The following error(s) occurred:<br>';
                        foreach ($errors as $msg)
                                {
                                echo"$msg <br>";
                                }
                        echo 'Please try again</p>';
                        mysqli_close($con);
                        }
        }
?>