<?php
                session_start();

                include('includes/session_check.inc');

                ?>


<html>

<head>

<title>Your Employee Portal</title>



<?php include './includes/AdminHeader.css';?>
</head>
<body>
        <div class="header" style="background-color:#4D148C;">
                <div class="menu" style="padding-left:25%; padding-right:9%">
                        <div class="submenu">
                                <button class="dropbtn"><a href="intakev2.php" style="color:white;">Add New Employee</a></button>
                        </div>
                         <div class="submenu">
                                <button class="dropbtn"><a href="updatehome.php" style="color:white;">Update Employee</a></button>
                        </div>

                        <div class="submenu">
                                <button class="dropbtn"><a href="archivehome.php" style="color:white;">Archive Employee</a></button>
                        </div>
                          <div class="submenu">
                                 <button class="dropbtn"><a href="USER_GUIDE.pdf" target="_blank" style="color:white;">Help</a></button>
                        </div>
                         <div class="submenu">
                                <button class="dropbtn"><a href="logout.php" style="color:white;">Logout</a></button>
                        </div>
                </div>
        </div>
<h1>Welcome</h1>

<img src="img/FedEx50.png" alt="Fedex 50 Celebration" style="padding-left:25%;width:50%;height:auto;padding-right:25%" border="2;">



</body>
<?php include './includes/ExecutiveFooter.css';?>
</html>