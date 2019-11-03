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
      
    Index Arrays
      <hr />
	     <?php 
		  //index array;
		  
		/*$x = array(3,4,5,6,7,8,9,4);
		//echo $x[0];
		$length = count($x);
		for($i = 0; $i<$length; $i++){		
      		echo $x[$i];
			echo "<br/>";
		}*/
		//associative array;
		
		//$student = array("karim"=>"22","rahim"=>"23","salam"=>"24");
		/*$student["karim"] = "25";
		$student["rahim"] = "23";
		$student["salam"] = "24";
		$student["rony"] = "25";
		foreach($student as $name=>$age){
			echo "name = ".$name.",age = ".$age;
			echo "<br/>";
			}
		
		*/
		//multidimentional array;
		
	/*	$cars = array(
		  array("BMW",15,6),
		  array("VOLVO",65,87),
	      array("Toyota",12,"good"),
		  array("SABB",33,44)
		);
		//echo $cars[2][2];
		for($row=0;$row<4;$row++){
			echo "<p>Row number $row</p>";
			echo "<ul>";
			for($col=0;$col<3;$col++){
				echo"<li>".$cars[$row][$col]."</li>";
			}
			
			echo"</ul>";
			
		}*/
		/*
		//$name=array("jamal","kamal","rohim","babu","abul");
		$name =array(3,1,5,7,89,56,34,0);
		//rsort($name);
		sort($name);
		//rsort($name);
		$length = count($name);
		//for($i=0;$i<5;$i++)
		for($i=0;$i<$length;$i++){
		echo $name[$i];
		echo "<br/>";		
		}
		*/
		$name=array("jamal"=>"22","kamal"=>"33","rohim"=>"12","babu"=>"80","abul"=>"24");
		//ksort($name);
		asort($name);
		foreach($name as $x=>$age){
		echo "name = ".$x." age = ".$age;
		echo "<br/>";
		}
		?>
    </section>
          <section class="footer">
             <h2> www.php fundamentals.com </h2>
          </section>

</div>
</body>
</html>









\





