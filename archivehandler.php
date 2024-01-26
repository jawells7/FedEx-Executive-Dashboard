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

                if(isset( $_POST['mgranswer']))
                        {$ma = mysqli_real_escape_string($con,trim($_POST['mgranswer']));}
                else
                        {null;}

                if(isset( $_POST['replacement']))
                        {$rp = mysqli_real_escape_string($con,trim($_POST['replacement']));}
                else
                        {null;}

                if(isset( $_POST['ManagerID']))
                         {$m1 = mysqli_real_escape_string($con,trim($_POST['ManagerID']));}
                else
                        {null;}

                if(empty($errors) && ($ma=='N'))
                {
                        $q1 = "SELECT * FROM Employees WHERE EmployeeID='$e'";

                        $r1 = mysqli_query($con,$q1);

                        while($row = mysqli_fetch_array($r1))
                        {
                        $e = $row['EmployeeID'];
                        $f = $row['FirstName'] ;
                        $l = $row['LastName'];
                        $j = $row['JobCode'];
                        $p = $row['PayBand'];
                        $t = $row['Tenure'] ;
                        $a = $row['Anniversary'];
                        $b = $row['Birthday'];
                        $w = $row['WorkPostalCode'] ;
                        $m = $row['ManagerID'];
                        $d = $row['DirID'];
                        $v = $row['VpID'] ;
                        $s = $row['SvpID'];
                        }

                        if(($j=='L2590') OR ($j=='L1790') OR ($j=='L1392') OR ($j=='Z9999') OR ($j=='L6290') OR ($j=='L4085'))
                        {
                        $errors[]="This Employee is a manager. Please Select Y";
                        echo "<h1>This Employee is a Manager. Please select Y for Manager</h1>";
                        header('refresh:3; archivehome.php');
                        exit;
                        }

                        $q2 = "INSERT INTO Archives VALUES ('$e','$f','$l','$j','$p','$t','$a','$b','$w','$m','$d','$v','$s')";
                        $r2 = mysqli_query($con,$q2);
						
					    if($r2)
                                {
                                echo "Employee is archived using the information shown below:<br><br>";
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
                                echo "Director ID: $d <br>";
                                echo "Vice President ID: $v <br>";
                                echo "Sr. VP ID: $s <br><br><br>";
                               }

                        $q40 = "DELETE FROM Employees WHERE EmployeeID= '$e'";
                        $r40 = mysqli_query($con,$q40);

                }

                 if(empty($errors) && ($ma=='Y') && ($rp=='Y') && isset($m1))
                {
                        $q4 = "SELECT * FROM Employees WHERE EmployeeID='$e'";

                        $r4 = mysqli_query($con,$q4);

                        while($row = mysqli_fetch_array($r4))
                        {
                        $e = $row['EmployeeID'];
                        $f = $row['FirstName'] ;
                        $l = $row['LastName'];
                        $j = $row['JobCode'];
                        $p = $row['PayBand'];
                        $t = $row['Tenure'] ;
                        $a = $row['Anniversary'];
                        $b = $row['Birthday'];
                        $w = $row['WorkPostalCode'] ;
                        $m = $row['ManagerID'];
                        $d = $row['DirID'];
                        $v = $row['VpID'] ;
                        $s = $row['SvpID'];
                        }

                        $q5 = "UPDATE Employees SET ManagerID = '$m1' WHERE ManagerID = '$e'";

                        $r5 = mysqli_query($con,$q5);


                        $q6 = "SELECT DirID,VpID,SvpID FROM Employees WHERE EmployeeID='$m1'";

                        $r6 = mysqli_query($con,$q6);

                                while($row = mysqli_fetch_array($r6))
                                {
                                $d1 = $row['DirID'];
                                $v1 = $row['VpID'] ;
                                $s1 = $row['SvpID'];
                                }

                        $q7 = "UPDATE Employees SET DirID = '$d1' WHERE ManagerID = '$m1'";

                        $r7 = mysqli_query($con,$q7);

                        $q8 = "UPDATE Employees SET VpID = '$v1' WHERE ManagerID = '$m1'";

                        $r8 = mysqli_query($con,$q8);
						
                        $q9 = "UPDATE Employees SET SvpID = '$s1' WHERE EmployeeID = '$m1'";

                        $r9 = mysqli_query($con,$q9);


                        $q10 = "INSERT INTO Archives VALUES ('$e','$f','$l','$j','$p','$t','$a','$b','$w','$m','$d','$v','$s')";
                        $r10 = mysqli_query($con,$q10);

                        if($r10)
                                {
                                echo "Employee is archived using the information shown below:<br><br>";
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
                                echo "Director ID: $d <br>";
                                echo "Vice President ID: $v <br>";
                                echo "Sr. VP ID: $s <br><br><br>";
                               }

                        $q11 = "DELETE FROM Employees WHERE EmployeeID = '$e'";
                        $r11 = mysqli_query($con,$q11);

                        $q30 = "DELETE FROM Logins WHERE EmpID = '$e'";
                        $r30 = mysqli_query($con,$q30);
                }

                 if(empty($errors) && ($ma=='Y') && ($rp=='N') && empty($m1))
                {
                        $q12 = "SELECT * FROM Employees WHERE EmployeeID='$e'";

                        $r12 = mysqli_query($con,$q12);

                        while($row = mysqli_fetch_array($r12))
                        {
                        $e = $row['EmployeeID'];
                        $f = $row['FirstName'] ;
                        $l = $row['LastName'];
                        $j = $row['JobCode'];
                        $p = $row['PayBand'];
                        $t = $row['Tenure'] ;
                        $a = $row['Anniversary'];
                        $b = $row['Birthday'];
                        $w = $row['WorkPostalCode'] ;
                        $m = $row['ManagerID'];
                        $d = $row['DirID'];
                        $v = $row['VpID'] ;
                        $s = $row['SvpID'];
                        }

                        $q13 = "SELECT ManagerID FROM Employees WHERE EmployeeID='$e'";

                        $r13 = mysqli_query($con,$q13);

                                while($row = mysqli_fetch_array($r13))
                                {
                                $d2 = $row['ManagerID'];
                                }


                        $q14 = "UPDATE Employees SET ManagerID = '$d2' WHERE ManagerID = '$e'";

                        $r14 = mysqli_query($con,$q14);
						
                        $q15 = "SELECT DirID,VpID,SvpID FROM Employees WHERE EmployeeID='$d2'";

                        $r15 = mysqli_query($con,$q15);

                                while($row = mysqli_fetch_array($r15))
                                {
                                $d3 = $row['DirID'];
                                $v3 = $row['VpID'] ;
                                $s3 = $row['SvpID'];
                                }

                        $q16 = "UPDATE Employees SET DirID = '$d3' WHERE ManagerID = '$d2'";

                        $r16 = mysqli_query($con,$q16);

                        $q17 = "UPDATE Employees SET VpID = '$v3' WHERE ManagerID = 'd2'";

                        $r17 = mysqli_query($con,$q17);

                        $q18 = "UPDATE Employees SET SvpID = '$s3' WHERE EmployeeID = '$d2'";

                        $r18 = mysqli_query($con,$q18);


                        $q19 = "INSERT INTO Archives VALUES ('$e','$f','$l','$j','$p','$t','$a','$b','$w','$m','$d','$v','$s')";
                        $r19 = mysqli_query($con,$q19);

                        if($r19)
                                {
                                echo "Employee is archived using the information shown below:<br><br>";
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
                                echo "Director ID: $d <br>";
                                echo "Vice President ID: $v <br>";
                                echo "Sr. VP ID: $s <br><br><br>";
                               }

                        $q20 = "DELETE FROM Employees WHERE EmployeeID = '$e'";
                        $r20 = mysqli_query($con,$q20);

                        $q31 = "DELETE FROM Logins WHERE EmpID = '$e'";
                        $r31 = mysqli_query($con,$q31);
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
        <div class="header" style="background-color: #4D148C; padding-left:35%;">
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

<h1>Employee Archive Form</h1>
<?php
        require('connect_db.php');

        $e = $_POST['EmployeeID'];

                        $q20 = "SELECT * FROM Employees WHERE EmployeeID='$e'";

                        $r20 = mysqli_query($con,$q20);

                        while($row = mysqli_fetch_array($r20))
                        {
                                echo "Below is the Selected Employee's Current Data On File<br><br>";
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


<form action="archivehandler.php" method="POST">
<h1 style="color:white;">Important: Must Reenter the Employee ID to Verify Changing Correct Employee Data<h1>
<br>
<h3>Make Changes Only to the Fields Requiring Changes. No Need to Reenter Correct Info</h3>
<br><br>
<label for="EmployeeID">Employee ID: (Must Enter ID to Delete Record)</label>
  <input type="text" id="EmployeeID" name="EmployeeID" placeholder="Numeric 5-10 Digits" pattern="[0-9]{5,10}" maximum="10" size="15">

<br>
<br>

<label for="mgranswer">Is the Employee a Manager, Director, VP, or SVP?</label>
        <select id="mgranswer" name="mgranswer">
        <option value="">Select One</option>
        <option value="Y">Y</option>
        <option value="N">N</option>
        </select>

<br>
<br>

<label for="replacement">If Manager, is the Replacement Identified? (Note:For non-leadership, select N)</label>
        <select id="replacement" name="replacement">
        <option value="">Select One</option>
        <option value="Y">Y</option>
        <option value="N">N</option>
        </select>

<br>
<br>

<label for="ManagerID">If Replacement Identified, Enter ManagerID:</label>
  <input type="text" id="ManagerID" name="ManagerID" placeholder="Numeric 5-10 Digits" pattern="[0-9]{5,10}" maximum="10" size="15">


<p><input type="submit" style="background-color:#FF6600; color:white; height:25px; width:75px;"></p>

</form>
</body>

<?php include './includes/ExecutiveFooter.css';?>

</html>
