<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Examples of string padding</title>
</head>

<body>
<h1>Examples of string padding</h1>

<pre>
   <?php
   
   $players = array("DUNCAN, king of Scotland"=>"Larry",
                    "MALCOLM, son of the king"=>"Curly",
					"MACBETH"=>"Moe",
					"MACDUFF"=>"Rafael");
					
   print "<pre>";
   
   //Prin a heading
   print str_pad("Dramatis Personae", 50, " ", STR_PAD_BOTH) . "\n";
   
   //Print an index line for each entry
   foreach($players as $role => $actor)
      print str_pad($role, 30, ".")
	     . str_pad($actor, 20, ".", STR_PAD_LEFT)
		 . "\n";
		 
   print "</pre>";
   
   ?>
</pre>

</body>
</html>