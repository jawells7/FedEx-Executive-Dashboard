<?php
                session_start();

                include('includes/session_check.inc');

                ?>


<html>

<head>

<title>Executive Portal</title>

<?php include './includes/ExecutiveHeader.css';?>
</head>
<body>
        <div class="header" style="background-color: #4D148C;">
                <div class="menu" style="padding-left:25%";>
                        <div class="submenu">
                                 <button class="dropbtn"><a href="PersonnelJobTypes.php" style="color:white;">Job Type Chart</a></button>
                        </div>
                        <div class="submenu">
                                 <button class="dropbtn"><a href="Severance.php" style="color:white;">Severance Calculator</a></button>
                        </div>
                        <div class="submenu">
                                 <button class="dropbtn"><a href="incentive.php" style="color:white;">Annual Incentive Calculator</a></button>
                        </div>
                        <div class="submenu">
                                 <button class="dropbtn"><a href="USER_GUIDE.pdf" target="_blank" style="color:white;">Help</a></button>
                        </div>
                        <div class="submenu">
                                <button class="dropbtn"><a href="logout.php" style="color:white;">Logout</a></button>
                        </div>
                </div>
        </div>
                         <br><br>

                <span id="info">
                <iframe title="Executive" width="100%" height="804" src="https://app.powerbi.com/view?r=eyJrIjoiMTdkMTM4Y2QtN2UwZS00ZWMzLWIyNjktMzBkNzhhNjA1YjU5IiwidCI6IjUyOTM0M2ZhLWU4YzgtNDE5Zi1hYjJlLWE3MGMxMDAzODgxMCIsImMiOjZ9" frameborder="0" allowFullScreen="true"></iframe>
                </span>

</body>
<?php include './includes/ExecutiveFooter.css';?>
</html>