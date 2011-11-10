<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Examples of using printf()</title>
</head>

<body>
<h1>Examples of using printf()</h1>

<?php
$myVar = array(1, 2, 3);

echo($myVar[1]);


?>

<pre>
   <?php
   //Outputs "pi equals 3.14159"
   printf("pi equals %f\n", 3.14159);
   
   //Outputs "3.14"
   printf("%.2f\n", 3.14159);
   
   //Outputs "          3.14"
   printf("%10.2f\n", 3.14159);
   
   //Outputs "3.1415900000"
   printf("%.10f\n", 3.14159);
   
   //Outputs "halfofthe"
   printf("%.9s\n", "halfofthestring");
   
   //Outputs "1111011 123 123.000000 test"
   printf("%b %d %f %s\n", 123, 123, 123, "test");
   
   //Outputs "Over 55.71% of statistics are made up."
   printf("Over %.2f%% of statistics are made up.\n", 55.719);
   
   //sprintf() works just the same except the output is returned as a string
   $c = 245;
   $message = sprintf("%c = %x (Hex) %o (Octal)", $c, $c, $c);
   
   //Prints "õ = f5 (Hex) 365 (Octal)"
   print($message);
   
   ?>
</pre>

</body>
</html>