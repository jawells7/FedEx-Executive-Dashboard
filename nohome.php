<?php

session_start();
include('includes/session_check.inc');
?>


<html>
<head>
<title>Under Construction</title>

<?php include './includes/MaintHeader.css';?>
</head>
<body>
 <div class="header" style="background-color: #4D148C;">
                <div class="menu">
                        <div class="submenu" style="padding-left:75px;">
                                 <button class="dropbtn"><a href="logout.php" style="color:white;">Logout</a></button></div>
                        </div>
        </div>

<h1 style="width:100%;color:black;">Your Home Page is still under construction. Please check back later.</h1>

<img src="img/construct.jpg" alt="Construction" style="padding-left:25%;width:50%;height:auto;padding-right:25%;border=2;background-color:white;">

</body>
</html>