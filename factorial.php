<html>
<head>
<title>Factorial</title>
</head>
<body>
<form method="POST">
Value: <input type="text" name="t">
<input type="submit" value="FACTORIAL" action="<?php echo $_SERVER[PHP_SELF];?>"
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$a=$_POST["t"];
$p=1;
for($i=1;$i<=$a;$i++)
{
$p=$p*$i;
}
echo("Factorial: $p");
}
?>
</body>
</html>