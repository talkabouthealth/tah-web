<?php
          /* Start of PHP3 Script */ 
          /* Data of SQL-server */ 
          $server= "db2285.perfora.net";     /* Address of 1&1 database server */ 
          $user= "dbo317697468";                   /* Database user name */ 
          $password= "applepie";              /* Database Password */ 
          $database= "db317697468";             /* name of database */ 
          $table= "email";                /* Name of table, you can select that */ 
					$column1= "email";
										
          /* Accessing SQL-server */ 
          MYSQL_CONNECT($server, $user, $password) or die ( "<H3>Server unreachable</H3>");
          MYSQL_SELECT_DB($database) or die ( "<H3>Database non existent</H3>");
          
          $txt = $_POST['email'];
					
					/* Entering the values */ 
          MYSQL_QUERY( "INSERT INTO $table ($column1) VALUES('$txt')");
 
          
         /* Close SQL-Connection */ 
          MYSQL_CLOSE();
					header("Location: featuresurvey.html");
					exit;
      ?>
      

