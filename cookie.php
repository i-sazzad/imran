<html>
<head>
<title>cookie</title>
</head>
<body>
<?php
$cookie_name = "user";

if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
	echo "<form method='POST' action='co.php'>Value: <input type='text' name='t'><input type='submit' value='Set' </form>";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>