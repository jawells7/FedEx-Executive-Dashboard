<?php
                session_start();

                include('includes/session_check.inc');

                ?>

<html>

        <head>
        </head>

        <body>
                <?php
                $name = $_POST['user'];
                $pswd = $_POST['password'];

                $query = "SELECT * FROM Logins WHERE EmpID = '$name' AND Password = '$pswd'" ;


                /*include('includes/connection.inc');*/
                $serverName = "128.198.162.149";
                $userName = "team2";
                $password = "Team2SqlPass";
                $dbName = "team2";

                $con = mysqli_connect($serverName, $userName , $password , $dbName);

                if (mysqli_connect_errno())
                {
                echo "Failed to connect to MySql: " . mysqli_connect_error();
                }


                $result = mysqli_query($con, $query);


                $row = mysqli_fetch_array($result);


                if ($row == null)
                {
                        echo '<b style="color:black; font-size:40; font-family:arial;"><br><br>Oops! Login failed.  No valid username or password.</b><br><br>
                        <p style="font-size:25; font-family:arial;"></p>  <img src="img/error.jpg" alt="error">';
                        session_start();
                        $_Session = array();
                        session_destroy();
                 header('refresh:1; index.php');

                }

                elseif($pswd == "FedexPass1")
                {
                header('location: passwordhandler.php');
                }

                else
                {
                        if ($name == 100533){
                                session_start();
                                $_SESSION['user'] = $name;
                                header('location: 100533.php');
                        } elseif ($name == 281327) {
                                session_start();
                                $_SESSION['user'] = $name;
                                header('location: 281327.php');

                        } elseif ($name == 298908) {
                                session_start();
                                $_SESSION['user'] = $name;
                                header('location: 298908.php');

                        } elseif ($name == 312892) {
                                /* SVP */
                                session_start();
                                $_SESSION['user'] = $name;
                                header('location: executive.php');

                        } elseif ($name == 338590) {
                                session_start();
                                $_SESSION['user'] = $name;
                                header('location: 338590.php');

                        } elseif ($name == 364670) {
                                session_start();
                                $_SESSION['user'] = $name;
                                header('location: 364670.php');

                        } elseif ($name == 426315) {
                                session_start();
                                $_SESSION['user'] = $name;
                                header('location: 426315.php');

                        } elseif ($name == 641135) {
                                session_start();
                                $_SESSION['user'] = $name;
                                header('location: 641135.php');

                        } elseif ($name == 641144) {
                                session_start();
                                $_SESSION['user'] = $name;
                                header('location: 641144.php');

                        } elseif ($name == 641148) {
                                session_start();
                                $_SESSION['user'] = $name;
                                header('location: 641148.php');

                        } elseif ($name == 641149) {
                                session_start();
                                $_SESSION['user'] = $name;
                                header('location: administration.php');

                        } elseif ($name == 641311) {
                                session_start();
                                $_SESSION['user'] = $name;
                                header('location: 641311.php');

                        } elseif ($name == 641325) {
                                session_start();
                                $_SESSION['user'] = $name;
                                header('location: 641325.php');


                        } elseif ($name == 641615) {
                                session_start();
                                $_SESSION['user'] = $name;
                                header('location: 641615.php');

                        } elseif ($name == 641623) {
                                session_start();
                                $_SESSION['user'] = $name;
                                header('location: 641623.php');

                        } elseif ($name == 641627) {
                                session_start();
                                $_SESSION['user'] = $name;
                                header('location: 641627.php');


                        } elseif ($name == 641687) {
                                session_start();
								


                        } elseif ($name == 641716) {
                                session_start();
                                $_SESSION['user'] = $name;
                                header('location: 641716.php');


                        } elseif ($name == 641723) {
                                session_start();
                                $_SESSION['user'] = $name;
                                header('location: 641723.php');

                        } elseif ($name == 641729) {
                                session_start();
                                $_SESSION['user'] = $name;
                                header('location: 641729.php');


                        } elseif ($name == 641767) {
                                session_start();
                                $_SESSION['user'] = $name;
                                header('location: 641767.php');

                        } elseif ($name == 641805) {
                                session_start();
                                $_SESSION['user'] = $name;
                                header('location: 641805.php');

                        } elseif ($name == 641814) {
                                session_start();
                                $_SESSION['user'] = $name;
                                header('location: 641814.php');

                        } elseif ($name == 645235) {
                                session_start();
                                $_SESSION['user'] = $name;
                                header('location: 645235.php');

                        } elseif ($name == 689123) {
                                session_start();
                                $_SESSION['user'] = $name;
                                header('location: 689123.php');

                        } elseif ($name == 3252557) {
                                /* VP IT */
                                session_start();
                                $_SESSION['user'] = $name;
                                header('location: executive.php');

                        } elseif ($name == 4489576) {
                                session_start();
                                $_SESSION['user'] = $name;
                                header('location: 4489576.php');

                        } elseif ($name == 181521) {
                                session_start();
                                $_SESSION['user'] = $name;
                                header('location: 181521.php');

                        } elseif ($name == 248871) {
                                session_start();
                                $_SESSION['user'] = $name;
                                header('location: 248871.php');

                        } elseif ($name == 298971) {
                                session_start();
                                $_SESSION['user'] = $name;
                                header('location: 298971.php');

                        } elseif ($name == 641199) {
                                session_start();
                                $_SESSION['user'] = $name;
                                header('location: 641199.php');

                        } elseif ($name == 641530) {
                                session_start();
                                $_SESSION['user'] = $name;
                                header('location: 641530.php');

                        } elseif ($name == 888888) {
                                session_start();
                                $_SESSION['user'] = $name;
                                header('location: 888888.php');

                        }else {
                                session_start();
                                $_SESSION['user'] = $name;
                                header('location:nohome.php');
                                }

                }

                mysqli_close($con);
                ?>

        </body>
</html>