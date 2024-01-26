<?php
                session_start();

                include('includes/session_check.inc');

                ?>


<html>

<head>

<title>298908 Manager Portal</title>

<link rel="stylesheet" type="text/css" href="./css/Index.css">

<?php include './includes/ExecutiveHeader.css';?>
</head>
<body>
        <div class="header" style="background-color:#4D148C;">
                <div class="menu">
                         <div class="submenu">
                                 <button class = "dropbtn"><a href="298908b.php" style="color:white;">Job Type</a></button>
                        </div>
                        <div class="submenu">
                                 <button class="dropbtn"><a href="USER_GUIDE.pdf" target="_blank" style="color:white;">Help</a></button>
                        </div>
                        <div class="submenu">
                                 <button class = "dropbtn"><a href="logout.php" style="color:white;">Logout</a></button>
                        </div>
                </div>
        </div>
                        <br><br>

<span id="info">
<iframe title="Report Section" width="100%" height="804" src="https://app.powerbi.com/view?r=eyJrIjoiODgwNWY5NDgtNmI5NC00ZWQ0LWFkZmEtOTcwNDQ0MmM5NjM2IiwidCI6IjUyOTM0M2ZhLWU4YzgtNDE5Zi1hYjJlLWE3MGMxMDAzODgxMCIDgxMCIsImMiOjZ9" frameborder="0" allowFullScreen="true"></iframe>
</span>

</body>
<?php include './includes/ExecutiveFooter.css';?>
</html>