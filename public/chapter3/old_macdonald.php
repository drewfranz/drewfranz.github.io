<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Old MacDonald Lyrics</title>
</head>

<body>
<h2>Old MacDonald</h2>
<?php

//Create an array of animals and the sounds they make
$sounds = array("cow"=>"moo", "dog"=>"woof", "pig"=>"oink", "duck"=>"quack", "cat"=>"meow");

//Iterate through each item in the array to create the verses of Old MacDonald
foreach ($sounds as $animal => $sound) {
   print "<p>Old MacDonald had a farm, EIEIO.";
   print "<br />And on that farm he had a {$animal}, EIEIO.";
   print "<br />Whith a {$sound}-{$sound} here,";
   print "<br />and a {$sound}-{$sound} there.";
   print "<br />Here a {$sound}, there a {$sound},";
   print "<br />everywhere a {$sound}-{$sound}.";
   print "<p>Old MacDonald had a farm, EIEIO.";
   	
};
?>
</body>
</html>