<?php
$con = mysqli_connect
('128.198.162.149','team2','Team2SqlPass','team2')
OR die
(mysqli_connect_error() );

mysqli_set_charset($con, 'utf8');
?>