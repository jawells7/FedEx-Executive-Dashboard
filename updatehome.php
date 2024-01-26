<?php

session_start();
include('includes/session_check.inc');
?>

<?php
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
        require('connect_db.php');
        $errors = array() ;

                if(empty( $_POST['EmployeeID']))
                        {$errors[] = 'Enter EmployeeID';}
                else
                        {$e = mysqli_real_escape_string($con,trim($_POST['EmployeeID']));}


                  if(empty($errors))
                        {
                        $q1 = "SELECT EmployeeID FROM Employees WHERE EmployeeID='$e'";

                        $r1 = mysqli_query($con,$q1);

                        if (mysqli_num_rows($r1) == 0 )
                                {$errors[] = 'EmployeeID does not exist. Please change <a href="updatehome.php">Update</a>';}
                        }

                if(empty($errors))
                        {
                        $q2 = "SELECT * FROM Employees WHERE EmployeeID='$e'";

                        $r2 = mysqli_query($con,$q2);

                        while($row = mysqli_fetch_array($r2)) {
                                echo "EmployeeID:" . $row['EmployeeID'] . "<br>";
                                echo "First Name:"  . $row['FirstName'] . "<br>";
                                echo "Last Name:"  . $row['LastName'] ."<br>";
                                echo "Job Code:"  . $row['JobCode'] ."<br>";
                                echo "Pay Band:"  . $row['PayBand'] ."<br>";
                                echo "Tenure:"  . $row['Tenure'] ."<br>";
                                echo "Anniversary:"  . $row['Anniversary'] ."<br>";
                                echo "Birthday:"  . $row['Birthday'] ."<br>";
                                echo "Work Postal Code:"  . $row['WorkPostalCode'] ."<br>";
                                echo "Manager ID:"  . $row['ManagerID'] ."<br>";
                                echo "Director ID:"  . $row['DirID'] ."<br>";
                                echo "Vice President ID:"  . $row['VpID'] ."<br>";
                                echo "Sr. VP ID:" . $row['SvpID'] . "<br><br><br>";

                        }
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

<html>
<head>
<title>Employee Update Form Start</title>

<style>
        form {
				background:#4D148C;
                color:white;
                font-size:24;
                font-family:arial;
                width:90%;
                height:500px;

        }
</style>

<?php include './includes/AdminHeader.css';?>
</head>
<body>
        <div class="header" style="background-color: #4D148C;">
                <div class="menu" style="padding-left:40%;">
                        <div class="submenu">
                                 <button class="dropbtn"><a href="administration.php" style="color:white;">Admin Main</a></button>
                        </div>
                          <div class="submenu">
                                 <button class="dropbtn"><a href="USER_GUIDE.pdf" target="_blank" style="color:white;">Help</a></button>
                        </div>
                        <div class="submenu">
                                 <button class="dropbtn"><a href="logout.php" style="color:white;">Logout</a></button>
                         </div>
               </div>
        </div>

<br>
<form action="updatehandler.php" method="POST">
<br>
<h3 style="color:white">Employee Update Form Start</h3>
<h2 style="color:white">Enter Employee ID of Record Requiring an Update</h2>
<br>
<label for="EmployeeID">Employee ID:</label>
  <input type="text" id="EmployeeID" name="EmployeeID" placeholder="Numeric 5-10 Digits" pattern="[0-9]{5,10}" maximum="10" size="18">

<p><input type="submit" style="background-color:#FF6600; color:white; height:25px; width:70px"></p>


</form>

</body>

<?php include './includes/ExecutiveFooter.css';?>

</html>