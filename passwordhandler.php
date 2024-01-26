<?php
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
        require('connect_db.php');
        $errors = array() ;



                if(empty( $_POST['EmployeeID']))
                        {$errors[] = 'Enter EmployeeID';}
                else
                        {$e = mysqli_real_escape_string($con,trim($_POST['EmployeeID']));}

                if( isset($_POST['dob']))
                        {$b = mysqli_real_escape_string($con,trim($_POST['dob']));}
                else {null;}


                if(empty($errors))
                        {
                        $q3 = "SELECT EmployeeID FROM Employees WHERE EmployeeID='$e'";

                        $r3 = mysqli_query($con,$q3);

                        if (mysqli_num_rows($r3) == 0 )
                                {$errors[] = 'EmployeeID does not exist. Please try again';}
                        }

                if(empty($errors))
                        {
                        $q5 = "SELECT Birthday FROM Employees WHERE EmployeeID='$e'";

                        $r5 = mysqli_query($con,$q5);

                         while($row = mysqli_fetch_array($r5)) {
                        $eb = $row['Birthday'];
                        }

                        if ($eb != $b)
                                {$errors[] = 'Employee Birthday does not match. Please try again';}
                        }

                if(!empty($_POST['password']))
                        {
                        if($_POST['password'] != $_POST['confirm'])
                        {
                                $errors[] = 'Passwords do not match';
                        }
                        else
                        {
                        $p = mysqli_real_escape_string($con,trim($_POST['password']));
                        }
                }
                else
                {
                        $errors[] = 'Enter Your Password';
                }
                if($p=="FedexPass1"){
                         $errors[] = '<h1><img src ="img/error.jpg">Error! Cannot use Default Password</h1><br>';

                        }

                if(empty($errors)){
                        $q4 = "UPDATE Logins SET Password = '$p' WHERE EmpID = '$e'";

                        $r4 = mysqli_query($con,$q4);
                        echo '<h2>Your password has been changed. You will be redirected to Login shortly. Please wait.</h2>';
                        echo header('refresh:2; index.php');
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

<?php include './includes/PasswordHeader.css';?>

</head>
<body>
        <div class="header" style="background-color: #4D148C;">
                <div class="menu">
                        <div class="submenu" style="padding-left:43%; padding-right:40%">
                                 <button class="dropbtn"><a href="index.php" style="color:white;">Return to Login Page</a></button>
                        </div>
                </div>
        </div>

<h1>Password Update Form</h1>


<form action="passwordhandler.php" method="POST">
<label for="EmployeeID">Employee ID: (Must Enter ID to Update Record)</label>
  <input type="text" id="EmployeeID" name="EmployeeID" placeholder="Numeric 5-10 Digits" pattern="[0-9]{5,10}" maximum="10" size="15">
<br><br>
&nbsp;&nbsp;


<label for="Birthday">Birthday:</label>
<input type="date" id="Birthday" name="dob" min="1943-01-01" max="2020-12-31">
<br><br>
&nbsp;&nbsp;

<label for="Password">New Password:</label>
<input type="password" id="password" name="password" placeholder="Alpha Numeric Specials, Min 8 Characters" pattern = "(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!#$%&'*+,-./:;<=>?@\^_`|~]).{8,}" size="40">
<br><br>
&nbsp;&nbsp;

<label for="ConfirmPassword">Confirm Password:</label>
<input type="password" id="confirm" name="confirm" placeholder="Alpha Numberic Specials, Min 8 Characters" pattern = "(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!#$%&'*+,-./:;<=>?@\^_`|~]).{8,}" size = "40">
&nbsp;&nbsp;
<p><input type="submit" value="submit"</p>

</div>

<div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid"><b>One lowercase</b> letter</p>
  <p id="capital" class="invalid"><b>One capital (uppercase)</b> letter</p>
  <p id="number" class="invalid"><b>One number</b></p>
  <p id="number" class="invalid"><b>One of the following special characters !#$%&'*+,-./:;<=>?@\^_`|~</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>


</body>


<?php include './includes/ExecutiveFooter.css';?>

</html>