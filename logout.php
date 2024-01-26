<?php

Session_start();

$_SESSION = array();

session_destroy();

?>

<html>

        <head>
                <title>Logout</title>

<?php include './includes/LogoutHeader.css';?>
        </head>
        <body>

<body>
        <div class="header" style="background-color: #4D148C;">
                <div class="menu" style="padding-left:47%";>
                        <div class="submenu">
                                 <button class="dropbtn"><a href="index.php" style="color:white;">Login</a></button>
                        </div>

                </div>
        </div>
                         <br><br>

        <span id="info">
                        <p style="color:white; font-size:30; font-family:Times New Roman;text-align:center;">You have been successfully logged out.</p>
                        <p style="color:white; font-size:30; font-family:TimesNew Roman;text-align:center;">Click link above to log back in</p>


<img src="img/FedEx50.png" alt="Fedex 50 Celebration" style="padding-left:25%;width:50%;height:auto;padding-right:25%;border=2;background-color:white;">
</span>
        </body>

<?php include './includes/ExecutiveFooter.css';?>

</html>