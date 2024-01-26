<?php
                session_start();

                include('includes/session_check.inc');

                ?>


<html>

<head>

<title>248871 Director Portal</title>

<?php include './includes/ExecutiveHeader.css';?>

</head>

<body>
        <div class="header" style="background-color: #4D148C;">
                <div class="menu">
                        <div class="submenu" style="padding-left:400px;">
                                 <button class="dropbtn"><a href="248871.php" style="color:white;">Director Main</a></button>
                        </div>
                         <div class="submenu">
                                 <button class="dropbtn"><a href="USER_GUIDE.pdf" target="_blank" style="color:white;">Help</a></button>
                        </div>
                        <div class="submenu">
                                 <button class="dropbtn"><a href="logout.php" style="color:white;">Logout</a></button> </div>
                        </div>
        </div>
                         <br><br>
                <span id="info">
                        <iframe title="Report Section" width="100%" height="804" src="https://app.powerbi.com/view?r=eyJrIjoiNmQxZWVlM2EtMGViNy00ZTZkLTlmYWItY2M1NTAzMGFiNGE5IiwidCI6IjUyOTM0M2ZhLWU4YzgtNDE5Zi1>                </span>

</body>

<?php include './includes/ExecutiveFooter.css';?>

</html>