<?php
                session_start();

                include('includes/session_check.inc');

                ?>


<html>

<head>

<title>281327 Manager Portal</title>

<link rel="stylesheet" type="text/css" href="./css/Index.css">

<?php include './includes/ExecutiveHeader.css';?>


</head>
<body>
        <div class="header">
                <div class="menu">
                        <div class="submenu" style="padding-left:450px">
                                <button class= "dropbtn"><a href="logout.php" style="color:white;">Logout</a></button>
                        </div>
                         <div class="submenu">
                                 <button class="dropbtn"><a href="USER_GUIDE.pdf" target="_blank" style="color:white;">Help</a></button>
                        </div>
                        <div class="submenu">
                                <button class= "dropbtn"><a href="281327b.php" style="color:white;">Job Type</a></button>
                                <br>
                        </div>
                </div>
        </div>
<br><br>
<span id="info">
        <iframe title="Report Section" width="100%" height="804" src="https://app.powerbi.com/view?r=eyJrIjoiODIxMGUxOTAtODJlMC00ZjI2LWEzMGUtYmViMTcxOWZiYjA2IiwidCI6IjUyOTM0M2ZhLWU4YzgtNDE5Zi1hYjJlLWE3MGMxMDA></span>

</body>
<?php include './includes/ExecutiveFooter.css';?>
</html>