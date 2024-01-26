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

                if( isset($_POST['FirstName']))
                        {$f = mysqli_real_escape_string($con,trim($_POST['FirstName']));}
                else {null;}

                if( isset($_POST['LastName']))
                        {$l = mysqli_real_escape_string($con,trim($_POST['LastName']));}
                else {null;}

                if( isset($_POST['JobCode']))
                        {$j = mysqli_real_escape_string($con,trim($_POST['JobCode']));}
                else {null;}

                if( isset($_POST['PayBand']))
                        {$p = mysqli_real_escape_string($con,trim($_POST['PayBand']));}
                else {null;}

                if( isset($_POST['Tenure']))
                        {$t = mysqli_real_escape_string($con,trim($_POST['Tenure']));}
                else {null;}

                 if( isset($_POST['Anniversary']))
                        {$a = mysqli_real_escape_string($con,trim($_POST['Anniversary']));}
                else {null;}

                 if( isset($_POST['Birthday']))
                        {$b = mysqli_real_escape_string($con,trim($_POST['Birthday']));}
                else {null;}


                 if( isset($_POST['WorkPostalCode']))
                        {$w = mysqli_real_escape_string($con,trim($_POST['WorkPostalCode']));}
                else {null;}

                 if( isset($_POST['ManagerID']))
                        {$m = mysqli_real_escape_string($con,trim($_POST['ManagerID']));}
                else {null;}


                if(empty($errors) && !empty($w))
                        {
                        $q2 = "SELECT Zip FROM ZIPCODES WHERE Zip='$w'";

                        $r2 = mysqli_query($con,$q2);

                        if (mysqli_num_rows($r2) == 0 )
                                {$errors[] = 'The Zip Code does not exist. Please change <a href="updatehandler.php">Update</a>';}
                        }

                  if(empty($errors) && !empty($m))
                        {
                        $q3 = "SELECT EmployeeID FROM Employees WHERE EmployeeID='$m'";

                        $r3 = mysqli_query($con,$q3);

                        if (mysqli_num_rows($r3) == 0 )
                                {$errors[] = 'ManagerID does not exist. Please change <a href="updatehandler.php">Update</a>';}
                        }

                if(empty($errors) && !empty($f)){
                        $q4 = "UPDATE Employees SET FirstName = '$f' WHERE EmployeeID = '$e'";

                        $r4 = mysqli_query($con,$q4);
                        }

                if(empty($errors) && !empty($l)){
                        $q5 = "UPDATE Employees SET LastName = '$l' WHERE EmployeeID = '$e'";

                        $r5 = mysqli_query($con,$q5);
                        }

                if(empty($errors) && !empty($j)){
                        $q6 = "UPDATE Employees SET JobCode = '$j' WHERE EmployeeID = '$e'";

                        $r6 = mysqli_query($con,$q6);
                        }
                if(empty($errors) && !empty($p)){
                        $q7 = "UPDATE Employees SET PayBand = '$p' WHERE EmployeeID = '$e'";

                        $r7 = mysqli_query($con,$q7);
                        }
                if(empty($errors) && !empty($t)){
                        $q8 = "UPDATE Employees SET Tenure = '$t' WHERE EmployeeID = '$e'";

                        $r8 = mysqli_query($con,$q8);
                        }
                if(empty($errors) && !empty($a)){
                        $q9 = "UPDATE Employees SET Anniversary = '$a' WHERE EmployeeID = '$e'";

                        $r9 = mysqli_query($con,$q9);
                        }
                if(empty($errors) && !empty($b)){
                        $q10 = "UPDATE Employees SET Birthday = '$b' WHERE EmployeeID = '$e'";

                        $r10 = mysqli_query($con,$q10);
                        }


                if(empty($errors) && !empty($w)){
                        $q11 = "UPDATE Employees SET WorkPostalCode = '$w' WHERE EmployeeID = '$e'";

                        $r11 = mysqli_query($con,$q11);
                        }
                if(empty($errors) && !empty($m)){
                        $q12 = "UPDATE Employees SET ManagerID = '$m' WHERE EmployeeID = '$e'";

                        $r12 = mysqli_query($con,$q12);
                        }



                 if(empty($errors) && !empty($m))
                        {
                        $q13 = "SELECT ManagerID,DirID,VpID,SvpID FROM Employees WHERE EmployeeID='$m'";

                        $r13 = mysqli_query($con,$q13);

                        while($row = mysqli_fetch_array($r13)) {
                        $m2 = $row['ManagerID'];
                        $d = $row['DirID'];
                        $v = $row['VpID'] ;
                        $s = $row['SvpID'];
                        }
						}

                if(empty($errors) && !empty($m)){
                        $q14 = "UPDATE Employees SET DirID = '$m2' WHERE EmployeeID = '$e'";

                        $r14 = mysqli_query($con,$q14);
                        }

                if(empty($errors) && !empty($m)){
                        $q15 = "UPDATE Employees SET VpID = '$v' WHERE EmployeeID = '$e'";

                        $r15 = mysqli_query($con,$q15);
                        }

                if(empty($errors) && !empty($m)){
                        $q16 = "UPDATE Employees SET SvpID = '$s' WHERE EmployeeID = '$e'";

                        $r16 = mysqli_query($con,$q16);
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
<title>Employee Update Form</title>

<style>
        form {
                background:#4D148C;
                color:white;
                font-size:24;
                font-family:arial;
                width:90%;
                height:700px;

        }
</style>

<?php include './includes/AdminHeader.css';?>
</head>
<body>
        <div class="header" style="background-color: #4D148C; padding-left:35%">
                <div class="menu">
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

<h1>Employee Update Form</h1>
<?php
        require('connect_db.php');
		
        $e = $_POST['EmployeeID'];

                        $q3 = "SELECT * FROM Employees WHERE EmployeeID='$e'";

                        $r3 = mysqli_query($con,$q3);

                        while($row = mysqli_fetch_array($r3)) {
                                echo "Below is the Employee's Current Data On File<br><br>";
                                echo "EmployeeID:   " . $row['EmployeeID'] . "<br>";
                                echo "First Name:   "  . $row['FirstName'] . "<br>";
                                echo "Last Name:   "  . $row['LastName'] ."<br>";
                                echo "Job Code:   "  . $row['JobCode'] ."<br>";
                                echo "Pay Band:   "  . $row['PayBand'] ."<br>";
                                echo "Tenure:   "  . $row['Tenure'] ."<br>";
                                echo "Anniversary:   "  . $row['Anniversary'] ."<br>";
                                echo "Birthday:   "  . $row['Birthday'] ."<br>";
                                echo "Work Postal Code:   "  . $row['WorkPostalCode'] ."<br>";
                                echo "Manager ID:   "  . $row['ManagerID'] ."<br>";
                                echo "Director ID:   "  . $row['DirID'] ."<br>";
                                echo "Vice President ID:   "  . $row['VpID'] ."<br>";
                                echo "Sr. VP ID:   " . $row['SvpID'] . "<br><br><br>";
                       }

?>


<form action="updatehandler.php" method="POST">
<h1 style="color:white;">Important: Must Reenter the Employee ID to Verify Changing Correct Employee Data<h1>
<br>
<h3>Make Changes Only to the Fields Requiring Changes. No Need to Reenter Correct Info</h3>
<br>
<label for="EmployeeID">Employee ID: (Must Enter ID to Update Record)</label>
  <input type="text" id="EmployeeID" name="EmployeeID" placeholder="Numeric 5-10 Digits" pattern="[0-9]{5,10}" maximum="10" size="15">
<br><br>
&nbsp;&nbsp;

<label for="FirstName">First name:</label>
  <input type="text" id="FirstName" name="FirstName" pattern="[a-z,A-Z,-~']{1,30}" maximum="30" size="30">

&nbsp;&nbsp;

<label for="LastName">Last name:</label>
  <input type="text" id="LastName" name="LastName" pattern="[a-z,A-Z,-~']{1,40}" maximum="40" size="40">

<br><br><br>


<label for="JobCode">Select a Job Code:</label>
        <select id="JobCode" name="JobCode">
        <option value="">Select Only to Update</option>
        <option value="L0085">L0085 Software Developer I</option>
        <option value="L0185">L0185 Software Developer II</option>
        <option value="L0285">L0285 Software Developer III</option>
        <option value="L0385">L0385 Software Developer Advisor</option>
        <option value="L0485">L0485 Software Engineering Principal</option>
        <option value="L1190">L1190 Business Apllications Advisor</option>
        <option value="L1290">L1290 Business Apllications Analyst</option>
        <option value="L1291">L1291 Technical Principal</option>
        <option value="L1385">L1385 Scrum Master II</option>
        <option value="L1392">L1392 Technical Director</option>
        <option value="L1485">L1485 Scrum Master II</option>
        <option value="L1585">L1585 Scrum Master Advisor</option>
        <option value="L1790">L1790 Director IT</option>
        <option value="L1990">L1990 Solutions Architect</option>
        <option value="L2590">L2590 Manager IT</option>
        <option value="L2782">L2782 Project Management Analyst</option>
        <option value="L2890">L2890 Project/Process Analyst</option>
        <option value="L2894">L2894 Project Management Advisor</option>
        <option value="L2998">L2998 Domain Architect</option>
        <option value="L3082">L3082 Program Management Advisor</option>
		<option value="L3190">L3190 Sr. Business Applications Analyst</option>
        <option value="L3490">L3490 Sr, Engineering Specialist</option>
        <option value="L4085">L4085 Systems Administrator</option>
        <option value="L4090">L4090 Sr. Project/ Process Analyst</option>
        <option value="L4185">L4185 Sr. Systems Administrator</option>
        <option value="L4198">L4198 Full Stack Developer I</option>
        <option value="L4285">L4285 Systems Administrator Advisor</option>
        <option value="L4298">L4298 Full Stack Developer II</option>
        <option value="L4390">L4390 Sr. Solutions Architect</option>
        <option value="L4690">L4690 Sr. Technical Analyst</option>
        <option value="L5290">L5290 Sr. Vice President Admin</option>
        <option value="L5590">L5590 Systems Programmer</option>
        <option value="L5598">L5598 Full Stack Developer III</option>
        <option value="L5698">L5698 Full Stack Developer Advisor</option>
        <option value="L5790">L5790 Technical Analyst</option>
        <option value="L5890">L5890 Technical Fellow</option>
        <option value="L6290">L6290 Vice President IT</option>
        <option value="L6390">L6390 Business Applications Principal</option>
        <option value="L6790">L6790 Technical Advisor</option>
        <option value="L7090">L7090 Project/Process Advisor</option>
        <option value="L7093">L7093 Software Engineer I</option>
        <option value="L7190">L7190 Project Management Principal</option>
        <option value="L7293">L7293 Software Engineer II</option>
        <option value="L7393">L7393 Software Engineer III</option>
        <option value="L7493">L7493 Software Engineer Advisor</option>
        <option value="L8190">L8190 Associate Programmer Analyst</option>
        <option value="L8490">L8490 Technical Qualioty Specialist</option>
        <option value="L8590">L8590 Sr. Technical Quality Specialist</option>
        <option value="L8690">L8690 Technical Quality Advisor</option>
        <option value="L8790">L8790 Quality Architect Principal</option>
        <option value="L8985">L8985 Data Architect</option>
        <option value="L8990">L8990 DBA Principal</option>
        <option value="L9199">L9199 Reverse Train Engineer</option>
        <option value="L9581">L9581 Associate Data Analyst</option>
        <option value="L9781">L9781 Sr. Data Analyst</option>
        <option value="L9881">L9881 Data Analyst</option>
        <option value="P1690">P1690 Director Administrative Assistant</option>
        <option value="Z9999">Z9999 SVP</option>
        </select>

&nbsp;&nbsp;

<label for="PayBand">Choose a Pay Band:</label>
        <select id="PayBand" name="PayBand">
        <option value="">Select Only to Update</option>
        <option value="DC">DC</option>
        <option value="T2">T2</option>
        <option value="T4">T4</option>
        <option value="T5">T5</option>
		<option value="T6">T6</option>
        <option value="TE">TE</option>
        <option value="TI">TI</option>
        <option value="TJ">TJ</option>
        <option value="TK">TK</option>
        <option value="TL">TL</option>
        <option value="TM">TM</option>
        <option value="TN">TN</option>
        </select>

&nbsp;&nbsp;

<label for="Tenure">Tenure:</label>
  <input type="text" id="Tenure" name="Tenure" placeholder="Numeric 1-2 Digits" pattern="[0-9]{1,2}" maximum="2" size="15">

<br><br><br>

<label for="Anniversary">Anniversary:</label>
<input type="date" id="Anniversary" name="Anniversary" min="1973-04-05">

&nbsp;&nbsp;

<label for="Birthday">Birthday:</label>
<input type="date" id="Birthday" name="Birthday" min="1943-01-01" max="2005-12-31">

&nbsp;&nbsp;

<label for="WorkPostalCode">Work Postal Code:</label>
<input type="text" id="WorkPostalCode" name="WorkPostalCode" placeholder="Numeric 5 Digits" pattern="[0-9]{5}" maximum="5" size="10">

<br><br><br>

<label for="ManagerID">ManagerID:</label>
<input type="text" id="ManagerID" name="ManagerID" placeholder="Numeric 5-10 Digits" pattern="[0-9]{5,10}" maximum="10" size="15">

<p><input type="submit" style="background-color: #FF6600; color: white; height:25px; width:70px;"></p>


</body>

<?php include './includes/ExecutiveFooter.css';?>

</html>