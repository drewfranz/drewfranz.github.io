<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Multi-Dimentional Arrays</title>
</head>

<body>
<h2>A two dimentional array</h2>
<?php

//A two dimentional array using integer indexes
$planets = array(array("Mercury", 0.39, 0.38),
                 array("Venus",   0.72, 0.95),
				 array("Earth",   1.0,  1.0),
				 array("Mars",    1.52, 0.53) );
				 
//Prints "Earth"
print $planets[2][0];

?>

<h2>More sophisticated multi-dimentional array</h2>
<?php

//More sophisticated multi-dimentional array
$planets2 = array(
   "Mercury"=> array("dist"=>0.39, "dia"=>0.38),
   "Venus"  => array("dist"=>0.72, "dia"=>0.95),
   "Earth"  => array("dist"=>1.0,  "dia"=>1.0,
                     "moons"=>array("Moon")),
   "Mars"   => array("dist"=>1.52, "dia"=>0.53,
                     "moons"=>array("Phobos", "Deimos"))
   );

//Prints "Moon"
print $planets2["Earth"]["moons"][0];
?>
</body>
</html>