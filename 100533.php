
<?php
                session_start();

                include('includes/session_check.inc');

                ?>


<html>

<head>

<title>100533 Manager Portal</title>

<link rel="stylesheet" type="text/css" href="./css/Index.css">

<?php include './includes/ExecutiveHeader.css';?>


</head>
<body>
        <div class="header">
                <div class="menu" style="padding-left:40%; background-color:4D148C;">
                        <div class="submenu">
                                <button class= "dropbtn"><a href="100533b.php" style="color:white;">Job Type</a></button>
                        </div>
                          <div class="submenu">
                                 <button class="dropbtn"><a href="USER_GUIDE.pdf" target="_blank" style="color:white;">Help</a></button>
                        </div>
                         <div class="submenu">
                                <button class= "dropbtn"><a href="logout.php" style="color:white;">Logout</a></button>
                        </div>
                </div>
        </div>
<br><br>
<span id="info">
<iframe title="100533" width="100%" height="804" src="https://app.powerbi.com/view?r=eyJrIjoiNDg2ZThmYTEtZGRiYi00M2IyLThhOWQtN2YwZDM2NjMyNmI0IiwidCI6IjUyOTM0M2ZhLWU4YzgtNDE5Zi1hYjJlLWE3MGMxMDAzODgxMCIsImMiOjZ>
</span>

</body>
<?php include './includes/ExecutiveFooter.css';?>
</html>