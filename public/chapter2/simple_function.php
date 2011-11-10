<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Simple Function</title>
</head>

<body bgcolor="#FFFFFF">
<?php

   function bold($string)
   {
	   print "<b>" . $string . "</b>";
   }

   //First example function call (with a static string)
   print "this is not bold ";
   bold("this is bold ");
   print "this is again not bold ";
   
   //Second example function call (with a variable)
   $myString = "this is bold";
   bold($myString);

 ?>
</body>
</html>