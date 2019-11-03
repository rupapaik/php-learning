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
      
      Operator
      <hr />
          <?php 		  
		/*$x=33;
		 $y=42;
		 if($x==33 xor $y==72){
			 echo  "i live in bd";
		 }
		 else 
		 {
			 echo "false";
		 }*/
		 
		/* $x="I Live In";
		 $y=" Bangladesh.";
		 $x.= $y;
		 echo $x;	*/
		/* $x= array
		 (
		 "a"=> "Dhaka",
		 "b"=> "Khulna"
		 );
		 $y=array(
		 "c"=>"Borishal",
		 "d"=>"Sylhet"
		 );
		 var_dump($x!=$y);*/
		 
		/* $x = 1;
		 if($x>50){
			 echo "training with php";
			  }
		elseif($x>15){
			echo "Training with live project";
		}
		elseif($x>13){
			echo "Training with live JAVA";
		}
		elseif($x>11){
			echo "Training with live JS";
		}	
        else{echo "I live in Bangladesh";}*/
		
		/* $coding = "java";
		 switch($coding){
			 
			 case "html";
			   echo"I Love html";
			   break;
			   
			   case "php";
			   echo"I Love php";
			   break;
			   
			   case "css";
			   echo"I Love css";
			   break;
			   
			   case "c#";
			   echo"I Love java";
			   break;
			   
			   case "js";
			   echo"I Love js";
			   break;
			   default:
			   echo "I Love Programming";
		 }*/
		 /*$x=1;
		 while($x<=5){			
			 echo "The number is:$x"."<br/>";
				  $x++;		 			 
		 }*/
		
/*		$x=1;
		 do{
			 echo "The number is: $x"."<br/>";
			 $x++;			 
		 }
		 while($x<=7)*/
		 
		/* for($i=1;$i<=10;$i++){
			 echo "The number is:$i <br/>";
		 }*/
		/* $colors = array("white","green","red","skyblue","blue");
		 foreach($colors as $color){
		 echo "$color <br  />";
		 }*/
		 //function school($name ="SK school",$year ="1977")
		 
		/* function school($name ,$year ){
		 echo "$name My school.Started$year <br/>";			 
		 }
		 school(" ML high school is"," 2019");
		 school(" BL high school is"," 1991");
		 school(" CL high school is"," 1976");
		 school(" DL high school is"," 1965");
		 school(" EL high school is"," 1956");*/
		 //school();
		 
		 function sum($x,$y){
			$z = $x+$y; 
			 return $z;
		 }
		echo "2+9 = ".sum(2,9);
		 ?>
    </section>
          <section class="footer">
             <h2> www.php fundamentals.com </h2>
          </section>

</div>
</body>
</html>









\





