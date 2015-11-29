<html>
<head>
<title>CSE 480</title>
<body>
<?php
function f()
{
$color=array("blue","red","green");

for($i=0;$i<3;$i++)
{
echo("<font color='".$color[$i]."'>CSE 480</font>");
echo("<br>");
}
}
f();
?>
</body>
</html>