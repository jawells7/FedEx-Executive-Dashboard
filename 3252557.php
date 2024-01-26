<?php
                session_start();

                include('includes/session_check.inc');

                ?>


<html>

<head>

<title>Manager Portal</title>

<?php include './includes/ExecutiveHeader.css';?>
</head>
<body>
        <div class="header" style="background-color:#4D148C;">
                <div class="menu">
                        <div class="submenu" style="padding-left:450px;">
                                 <button class="dropbtn"><a href="logout.php" style="color:white;">Logout</a></button>
                        </div>
                </div>
        </div>
                        <h2>Login is Good!</h2>
                        <br><br>

                <?php
                echo $_SESSION['user'] . " now has access to dashboard<br>";
                ?>

/* Enter Dashboard link Below */
<iframe title="Report Section" width="1024" height="804" src="https://app.powerbi.com/view?r=eyJrIjoiMWRmMTY0YTAtNjg3MS00ZmFjLWJlMDAtNTBiNjg2MTIwYTI0IiwidCI6IjUyOTM0M2ZhLWU4YzgtNDE5Zi1hYjJlLWE3MGMxMDAzODgxMCIsImMiOjZ9" frameborder="0" allowFullScreen="true"></iframe>


</body>
<?php include './includes/ExecutiveFooter.css';?>
</html>