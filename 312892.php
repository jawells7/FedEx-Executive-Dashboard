<?php
                session_start();

                include('includes/session_check.inc');

                ?>


<html>

<head>

<title>Manager Portal</title>

<?php include './includes/SVPHeader.css';?>
</head>
        <body>
                        <a href="logout.php">Logout</a>
                        <h2>Login is Good!</h2>
                        <br><br>

                <?php
                echo $_SESSION['user'] . " now has access to dashboard<br>";
                ?>

/* Enter Dashboard link Below */
<iframe title="Report Section" width="1024" height="804" src="https://app.powerbi.com/view?r=eyJrIjoiNTUwY>


</body>
<?php include './includes/IndexFooter.css';?>
</html>