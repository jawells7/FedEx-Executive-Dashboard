<?php
                session_start();

                include('includes/session_check.inc');

                ?>


<html>

<head>

<title>298971 Director Portal</title>

<?php include './includes/ExecutiveHeader.css';?>

</head>

<body>
        <div class="header" style="background-color: #4D148C;">
                <div class="menu">
                        <div class="submenu" style="padding-left:400px;">
                                 <button class="dropbtn"><a href="298971b.php" style="color:white;">Job Type Chart</a></button>
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
                <iframe title="Report Section" width="100%" height="804" src="https://app.powerbi.com/view?r=eyJrIjoiYmUyMjEzN2UtYzM3OC00MDBjLWIzZDgtYWFiYzBlZGMxNDg5IiwidCI6IjUyOTM0M2ZhLWU4YzgtNDE5Zi1hYjJlLWE3MGMxMDAzODgxMCIsImMiOjZ9" frameborder="0" allowFullScreen="true"></iframe>
                </span>


</body>

<?php include './includes/ExecutiveFooter.css';?>

</html>