<!DOCTYPE html>
<html>
<head>
<title>Student Name</title>
</head>
<body>
<h2>Student Names Array</h2>
<?php
$name=["Shada","Sana","Safa","Aysha","Nesa"];
$t=$name;
echo"<h3>Displaying using print_r()</h3>";
print_r($name);
echo"<br><br>";

echo"<h3>Sorting using asort()</h3>";
asort($name);
print_r($name);
echo"<br><br>";

echo"<h3>Sorting using arsort()</h3>";
arsort($name);
print_r($name);

?>
</body>
</html>
