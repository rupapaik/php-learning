<?php include 'header.php'?>

<body>
<div class="maincontent">
    <section class="header">
       <h2>PHP Fundamentals</h2>
    </section>
       <section class="content">
	  
    PHP Date and Time
	 <span style = "float:right">
	 <?php
	  date_default_timezone_set("asia/dhaka");		     
		     echo "Time: ".date("h:i:sa");
			 ?> 
			 </span>
			 
	 
      <hr />
          <?php 
		     echo "Today is: ".date("l");
		     date_default_timezone_set("asia/dhaka");
		     echo "</br>";
		     echo  "The current time in bd is:".date("h:i:sa");
			 echo "</br>";	
			 echo date_default_timezone_get();
			  echo "</br>";
			  echo "</br>";
			 require "require.php";
			   echo "</br>";
			 require_once "require.php";
			 ?>			 
    </section>

<?php require 'footer.php'?>













