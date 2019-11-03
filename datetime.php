<!DOCTYPE html>
<?php
$color="#fff";
$fonts="verdana";
?>
<head>
<title>PHP Fundamentals</title>
   <style>
        body{font-family:<?php echo $fonts;?>}   
       .maincontent{width:900px;margin:0 auto;background:#ddd;}
       .header,.footer{color:<?php echo $color;?>;padding:2px;background:#444;text-align:center;}
       .content{min-height:400px;padding:20px;}
       .header h2,.footer h2{font-size:27px;}
	    p(margin:0)
   </style>
</head>

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
		     echo "The date is:".date("d-m-Y");
		     echo "</br>";
		     echo  "The time is:".date("h:i:sa");
		     echo "</br>";
		     echo "Today is: ".date("l");
		     date_default_timezone_set("asia/dhaka");
		     echo "</br>";
		     echo  "The current time in bd is:".date("h:i:sa");
			 echo "</br>";	
			 echo date_default_timezone_get();
			 ?>			 
    </section>
          <section class="footer">
		  <p>&copy; <?php echo date  ("Y");?> PHP Fundamentals</p>
             <h2> www.php fundamentals.com </h2>
          </section>

</div>
</body>
</html>















