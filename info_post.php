<?php
$a=$_POST["t1"];
echo("Wecome.$a");
$name=array("Mina","Rony");
$id=array("123","321");
$dep=array("CSE","EEE");
for($i=0;$i<3;$i++)
{
if($a==$name[$i])
{
echo("ID:$id[$i]<br>Department:$dep[$i]");
}
} 
?>