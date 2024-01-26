<html>
<head>

<title>Welcome to FedEx</title>
<link rel="stylesheet" type="text/css" href="./css/Index.css">

<?php include './includes/IndexHeader.css';?>
</head>

<body>

        <span class="content">
<a href="USER_GUIDE.pdf" target="_blank" style="font-size:20;font-family:arial;font-color:black;">Need Help Getting Started? Click Here for User Guide</a>
<br><br>
                <form action="fedexlogincheck.php" method="POST">
                        <h3>Enter your Employee ID and Password to log in to the Executive HR Dashboard</h3>
                        Employee ID:&nbsp;<input type="text" name="user" value="" placeholder="Numeric 5-10 Digits" pattern="[0-9]{5,10}" maximum="10" size="18" required><br><br>
                        Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="password" value="" placeholder="Alpha Numeric Specials Min 8 Characters" pattern="[a-z,A-Z,0-9,!#$%&'*+,-./:;<=>?@\^_`|~]{8,}" minimum="8" size="40"required><br><br>
                        <a href=passwordhandler.php>Forgot or Want to Change Password? Click Here</a><br><br>

                        <input type="submit" style="font-family:Times New Roman; color:white; background-color:#FF6600; font-size:18px; border-color:white;" value="Log In"><br>
                </form>

<img src="img/FedEx50.png" alt="Fedex 50 Celebration" style="padding-left:95%;width:50%;height:auto;padding-right:75%;border=2;background-color:white;">


</span>

        </div>



<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<hr>
        <div class="footer">
                <fr>
                &copy Fedex 1995-2023 <a href=https://www.fedex.com/en-us/sitemap.html>Site Map</a> | <a href="https://www.fedex.com/en-us/terms-of-use.html">Terms of Use</a> | <a href="https://www.fedex.com/en-us/trust-center.html">Privacy & Security</a>

                </div>
        </body>

</html>