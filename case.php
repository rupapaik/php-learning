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
	  
    PHP File Handling
	
	 <span style = "float:right">
	 <?php
	  date_default_timezone_set("asia/dhaka");		     
		     echo "Time: ".date("h:i:sa");
			 ?> 
			 
			 </span>
			 <hr />
           
		 <form action="" method="post">
		 <input type= "text" name="text"  />
		 <input type="submit" value="Submit"/>
		 </form>

		 <?php
		
		 if(isset($_POST['text'])){			 
			$txt = $_POST['text'];           
			echo strtoupper($txt);
			echo "<br/>";
			echo strtolower($txt);
			echo "<br/>";
			echo ucfirst($txt);
			echo "<br/>";
			echo ucwords($txt);
			echo "<br/>";
			echo lcfirst($txt);
			echo "<br/>";
			echo trim($txt);
			echo "<br/>";
			echo ltrim($txt);
			echo "<br/>";
			echo rtrim($txt);
			echo "<br/>";
			echo trim($txt," .");
		 }						 				 
				?>
    </section>
          <section class="footer">
		  <p>&copy; <?php echo date  ("Y");?> PHP Fundamentals</p>
             <h2> www.php fundamentals.com </h2>
          </section>

</div>
</body>
</html>















