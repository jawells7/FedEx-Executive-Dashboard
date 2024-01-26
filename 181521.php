<?php
                session_start();

                include('includes/session_check.inc');

                ?>


<html>

<head>

<title>181521 Director Portal</title>

<?php include './includes/ExecutiveHeader.css';?>

</head>

<body>
        <div class="header" style="background-color: #4D148C;">
                <div class="menu">
                        <div class="submenu" style="padding-left:400px;">
                                 <button class="dropbtn"><a href="181521b.php" style="color:white;">Job Type Chart</a></button>
                        </div>
                         <div class="submenu">
                                 <button class="dropbtn"><a href="USER_GUIDE.pdf" target="_blank" style="color:white;">Help</a></button>
                        </div>
                        <div class="submenu">
                                 <button class="dropbtn"><a href="logout.php" style="color:white;">Logout </div>
                        </div>
        </div>
                         <br><br>
                <span id="info">
                <iframe title="181521" width="100%" height="804" src="https://app.powerbi.com/view?r=eyJrIjoiNGI5YzZiMzYtZGZkOS00NzhmLWI1ZDYtZTEwMTg4ZGQ2ODQ3IiwidCI6IjUyOTM0M2ZhLWU4YzgtNDE5Zi1hYjJlLWE3MGMxMDA>                </span>


</body>

<?php include './includes/ExecutiveFooter.css';?>

</html>