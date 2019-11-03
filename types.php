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
   </style>
</head>

<body>
<div class="maincontent">
    <section class="header">
       <h2>PHP Fundamentals</h2>
    </section>
       <section class="content">
	   1.String
       2.Integer
       3.Float
       4.Boolean
       5.Array
       6.Object
       7.Null

      <hr />
       1.String
      <hr />
          <?php 
		// $x=" Are Beautiful Bangladesh ";		 
		  // echo strlen($x) ."<br />";
		   // echo str_word_count($x) ."<br />";
			// echo strrev($x) ."<br />";
			 //echo strpos($x,"is") ."<br />";
			 // echo str_replace("Are", "The", $x) ."<br />";
			 
			 define("LIKE","I like PHP",true);
			
			 
			 function learnPHP(){
				 return like;
			 }
			  echo learnPHP();
			 ?>			 
    </section>
          <section class="footer">
             <h2> www.php fundamentals.com </h2>
          </section>

</div>
</body>
</html>















