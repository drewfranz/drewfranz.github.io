<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>The Times-Tables</title>
</head>

<body bgcolor="#FFFFFF">
<h1>The Times Tables</h1>

<?php

   //Go through each table
   for($table=1; $table<3; $table++) {
      print "<p><b>The " . $table . " Times Table</b>\n";
	  
	  // Produce 12 lines for each table
	  for($counter=1; $counter<13; $counter++) {
		  $answer = $table * $counter;
		  
		  // Is this an even-number counter?
		  if ($counter % 2 === 0) {
			  // Yes, so print this line in bold
			  print "<br><b>{$counter} x {$table} = " .
			     "{$answer}</b>";
		  } else {
			// No, so print this in normal face
			print "<br>{$counter} x {$table} = {$answer}";  
		  }
	  }
   }


 ?>
</body>
</html>