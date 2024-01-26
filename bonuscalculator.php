<?php
        session_start() ;

        include('includes/session_check.inc') ;

?>
<html>
<head>

<meta name ="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" text="type/css" href="./css/Index.css">

<title> Fedex Bonus Calculator </title>

<?php
include './includes/ExecutiveHeader.css';
?>
</head>

<body>
<?php

// DB Connection
require('connect_db.php');


// MySQL Querying and response
$query1 ="SELECT* FROM Bonus" ;
$result1 = mysqli_query($con, $query1) ;

// Table Formatting
echo '<style>';
echo 'table { border-collapse: collapse; width: 100%; }';
echo 'th, td { padding: 12px 15px; text-align: left; }';
echo 'th { background-color: #F8F8F8; font-weight: bold; }';
echo 'tr:nth-child(even) { background-color: #F2F2F2; }';
echo '</style>';

$table_header = '<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Rating</th><th>Bonus Expected</th></tr>';

echo '<table>';
echo $table_header;

while ($row = mysqli_fetch_array($result1)) {
    echo '<tr>';
    echo '<td>' . $row['ID'] . '</td>';
    echo '<td>' . $row['FName'] . '</td>';
    echo '<td>' . $row['LName'] . '</td>';
    echo '<td>' . $row['FY23Rating'] . '</td>';
    echo '<td>' . $row['Current_Bonus'] . '</td>';
    echo '</tr>';
}

echo '</table>';

echo '<br>';

echo '<table>';
echo $table_header;

while ($row = mysqli_fetch_array($result1)) {
    echo '<tr>';
    echo '<td>' . $row['ID'] . '</td>';
    echo '<td>' . $row['FName'] . '</td>';
    echo '<td>' . $row['LName'] . '</td>';
    echo '<td>' . $row['FY23Rating'] . '</td>';
    echo '<td>' . $row['Current_Bonus'] . '</td>';
    echo '</tr>';
}

echo '</table>';

echo '<br>';

echo '<table>';
echo $table_header;

while ($row = mysqli_fetch_array($result1)) {
    echo '<tr>';
    echo '<td>' . $row['ID'] . '</td>';
    echo '<td>' . $row['FName'] . '</td>';
    echo '<td>' . $row['LName'] . '</td>';
    echo '<td>' . $row['FY23Rating'] . '</td>';
    echo '<td>' . $row['Current_Bonus'] . '</td>';
    echo '</tr>';
}

echo '</table>';

$query2 = "SELECT SUM(Current_Bonus) AS count FROM Bonus" ;
$duration = $con->query($query2);
$record = $duration->fetch_array();
$total = $record['count'];
$total2 = round($total, 8) ;
echo "Current Allocated Funds: $" . $total2 ;

?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <p><b> Do you wish to change data?</b></p>
  <p>If so, please enter the employee ID you wish to modify.</p>
  Employee ID:<input type="text" name="EmployeeIDGiven" value="" required><br><br>
  <input type="submit" value="Submit">
</form>

</body>
</html>
