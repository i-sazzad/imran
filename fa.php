<?php
$a=$_POST["t"];
$p=1;
for($i=1;$i<=$a;$i++)
{
$p=$p*$i;
}
echo("Factorial: $p");
?>