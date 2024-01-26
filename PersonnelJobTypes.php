<?php
                session_start();

                include('includes/session_check.inc');

                ?>


<html>

<head>
<?php include './includes/ExecutiveHeader.css';?>
<title>Your Employee Portal</title>


</head>
        <body>
        <div class="header" style="background-color: #4D148C;">
                <div class="menu" style="padding-left:25%";>
                        <div class="submenu">
                                 <button class="dropbtn"><a href="executive.php" style="color:white;">Executive Main</a></button>
                        </div>
                        <div class="submenu">
                                 <button class="dropbtn"><a href="Severance.php" style="color:white;">Severance Calculator</a></button></div>
                        <div class="submenu">
                                 <button class="dropbtn"><a href="incentive.php" style="color:white;">Annual Incentive Calculator</a></button>
                        </div>
                          <div class="submenu">
                                 <button class="dropbtn"><a href="USER_GUIDE.pdf" target="_blank" style="color:white;">Help</a></button>
                        </div>
                        <div class="submenu">
                                <button class="dropbtn"><a href="logout.php" style="color:white;">Logout</a></button></div>
                </div>
        </div>
                         <br><br>
                <span id="info">
                <iframe title="Report Section" width="100%" height="804" src="https://app.powerbi.com/view?r=eyJrIjoiZTkyNDBjZGQtMGQxYy00NGNiLTg1ZTctMjkyYzIzNjFkNWExIiwidCI6IjUyOTM0M2ZhLWU4YzgtNDE5Zi1hYjJlLWE3MGMxMDAzODgxMCIsImMiOjZ9" frameborder="0" allowFullScreen="true"></iframe>
                </span>

        </body>

<?php include './includes/ExecutiveFooter.css';?>

</html>