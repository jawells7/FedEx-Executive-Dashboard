<?php

session_start();
include('includes/session_check.inc');
?>



<html>
<head>
<title>Employee Delete Start</title>

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
                <div class="menu" style="padding-left:40%";>
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
<form action="archivehandler.php" method="POST">
<br>
<h3 style="color:white">Employee Archive Form Start</h3>
<h2 style="color:white">Enter Employee ID of Record Requiring an Archive</h2>
<br>
<label for="EmployeeID">Employee ID:</label>
  <input type="text" id="EmployeeID" name="EmployeeID" placeholder="Numeric 5-10 Digits" pattern="[0-9]{5,10}" maximum="10" size="15">

<p><input type="submit" style="background-color:#FF6600; color:white; height:25px; width:75px;"></p>


</form>

</body>

<?php include './includes/ExecutiveFooter.css';?>

</html>