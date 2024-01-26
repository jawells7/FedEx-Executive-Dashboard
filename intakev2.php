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

                if(empty( $_POST['FirstName']))
                        {$errors[] = 'Enter First Name';}
                else
                        {$f = mysqli_real_escape_string($con,trim($_POST['FirstName']));}

                if(empty( $_POST['LastName']))
                        {$errors[]='Enter Last Name';}
                else
                        {$l = mysqli_real_escape_string($con,trim($_POST['LastName']));}

                if(empty( $_POST['JobCode']))
                        {$errors[]='Enter Job Code';}
                else
                        {$j = mysqli_real_escape_string($con,trim($_POST['JobCode']));}

                if(empty( $_POST['PayBand']))
                        {$errors[]='Enter Pay Band';}
                else
                        {$p = mysqli_real_escape_string($con,trim($_POST['PayBand']));}

                if(empty( $_POST['Tenure']))
                        {$errors[]='Enter Tenure';}
                else
                        {$t = mysqli_real_escape_string($con,trim($_POST['Tenure']));}

                 if(empty( $_POST['Anniversary']))
                        {$errors[]='Enter Anniversary';}
                else
                        {$a = mysqli_real_escape_string($con,trim($_POST['Anniversary']));}

                 if(empty( $_POST['Birthday']))
                        {$errors[]='Enter Birthday';}
                else
                        {$b = mysqli_real_escape_string($con,trim($_POST['Birthday']));}


                 if(empty( $_POST['WorkPostalCode']))
                        {$errors[]='Enter WorkPostalCode';}
                else
                        {$w = mysqli_real_escape_string($con,trim($_POST['WorkPostalCode']));}

                 if(empty( $_POST['ManagerID']))
                        {$errors[]='Enter ManagerID';}
                else
                        {$m = mysqli_real_escape_string($con,trim($_POST['ManagerID']));}


                if(empty($errors))
                        {
                        $q1 = "SELECT EmployeeID FROM Employees WHERE EmployeeID='$e'";

                        $r1 = mysqli_query($con,$q1);

                        if (mysqli_num_rows($r1) != 0 )
                                {$errors[] = 'EmployeeID exists already. Please change <a href="intakev2.php">Intake</a>';}
                        }

                if(empty($errors))
                        {
                        $q2 = "SELECT Zip FROM ZIPCODES WHERE Zip='$w'";

                        $r2 = mysqli_query($con,$q2);

                        if (mysqli_num_rows($r2) == 0 )
                                {$errors[] = 'The Zip Code does not exist. Please change <a href="intakev2.php">Intake</a>';}
                        }

                  if(empty($errors))
                        {
                        $q3 = "SELECT EmployeeID FROM Employees WHERE EmployeeID='$m'";

                        $r3 = mysqli_query($con,$q3);

                        if (mysqli_num_rows($r3) == 0 )
                                {$errors[] = 'ManagerID does not exist. Please change <a href="intakev2.php">Intake</a>';}
                        }

                if(empty($errors))
                        {
                        $q4 = "SELECT ManagerID,DirID,VpID,SvpID FROM Employees WHERE EmployeeID='$m'";

                        $r4 = mysqli_query($con,$q4);

                        while($row = mysqli_fetch_array($r4)) {
                        $m2 = $row['ManagerID'];
                        $d = $row['DirID'];
                        $v = $row['VpID'] ;
                        $s = $row['SvpID'];
                        }

                        }

                if(empty($errors))
                        {
            $q = "INSERT INTO Employees (EmployeeID,FirstName,LastName,JobCode,PayBand,Tenure,Anniversary,Birthday,WorkPostalCode,ManagerID,DirID,VpID,SvpID) VALUES ('$e','$f','$l','$j','$p','$t','$a','$b','$w','$m','$m2','$v','$s')";

                        $r = mysqli_query($con,$q);

                        if($r)
                                {
                                include('includes/session_check.inc');
                                include './includes/AdminHeader.css';
                                echo "<button><a href='administration.php'>Click Here to Return to Admin Main</a></button><br><br>";
                                echo '<h1>Registered</h1></br>';
                                echo ' <img src="img/Pass.jpg" alt="error" style="width:100px;height:auto;"><br>Employee is registered using the information shown below:<br><br>';
                                echo "EmployeeID: $e <br>";
                                echo "First Name: $f <br>";
                                echo "Last Name: $l <br>";
                                echo "Job Code: $j <br>";
                                echo "Pay Band: $p <br>";
                                echo "Tenure: $t <br>";
                                echo "Anniversary: $a <br>";
                                echo "Birthday: $b <br>";
                                echo "Work Postal Code: $w <br>";
                                echo "Manager ID: $m <br>";
                                echo "Director ID: $m2 <br>";
                                echo "Vice President ID: $v <br>";
                                echo "Sr. VP ID: $s <br><br><br>";
                                include './includes/ExecutiveFooter.css';
                                }

                        }

                if(empty($errors) && ($j=='L2590') OR ($j=='L1790') OR ($j=='L1392') OR ($j=='Z9999') OR ($j=='L6290') OR ($j=='L4085'))
                        {
                        {
            $q20 = "INSERT INTO Logins (EmpID,JobID,Password) VALUES ('$e','$j','FedexPass1')";

                        $r20 = mysqli_query($con,$q20);
                        }



                else
                        {
                        echo' <img src="img/error.jpg" alt="error" style="width:100px;height:auto;"><h1>Error!</h1><p>The following error(s) occurred:<br>';
                        foreach ($errors as $msg)
                                {
                                echo"$msg <br>";
                                }
                        echo '<b>Please try again</b></p>';
                        mysqli_close($con);
                        }
        }
?>



<html>
<head>
<title>New Employee Intake Form</title>

<style>
        form {
                background:#4D148C;
                color:white;
                font-size:18;
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

<h1>New Employee Intake Form</h1>

<form action="intakev2.php" method="POST">

<br><br><br>

<label for="EmployeeID">Employee ID:</label>
  <input type="text" id="EmployeeID" name="EmployeeID"  placeholder="Numeric 5-10 Digits" pattern="[0-9]{5,10}" maximum="10" size="18">

&nbsp;&nbsp;

<label for="FirstName">First name:</label>
  <input type="text" id="FirstName" name="FirstName" pattern="[a-z,A-Z,-~']{1,30}" maximum="30" size="30">

&nbsp;&nbsp;

<label for="LastName">Last name:</label>
  <input type="text" id="LastName" name="LastName" pattern="[a-z,A-Z,-~']{1,40}" maximum="40" size="40">

<br><br><br>


<label for="JobCode">Choose a Job Code:</label>
        <select id="JobCode" name="JobCode">
        <option value="">Select One</option>
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
        <option value="">Select One</option>
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
<input type="text" id="WorkPostalCode" name="WorkPostalCode" placeholder="Numeric 5 Digits Only" pattern="[0-9]{5}" maximum="5" size="15">

<br><br><br>

<label for="ManagerID">ManagerID:</label>
<input type="text" id="ManagerID" name="ManagerID" placeholder="Numeric 5-10 Digits" pattern="[0-9]{5,10}" maximum="10" size="18">

<p><input type="submit" style="background-color:#FF6600; color:white; height:25px; width:70px;"></p>

</form>

</body>

<?php include './includes/ExecutiveFooter.css';?>

</html>