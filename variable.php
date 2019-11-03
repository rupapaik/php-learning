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

      Variable
      <hr />
	    
	   <!--<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		Username:<input type="text" name="username"/>
		<input type="submit" value="Submit"/>			
		</form>-->
		
          <?php 
		  
		  /* $x = 16;
		function test1(){	
            global $x;		
			$a=7;
			echo $a;
		    echo "</br/>";
		    echo"The value of x in test1 is =".$x;
		    echo "</br/>";
		}
		function test2(){
            global $x;			
			$b=8;
		    echo $b;
			echo "</br/>";
			echo "The value of x in test2 is =".$x;
			echo "</br/>";
		}
		test1();
		test2();
		echo "The value of x in  is =".$x;
		
		*/	
		/*$x = 17;
		$y = 20;
		function sum(){
			$GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];			
			}
		sum();
		echo $z;*/
		/*
		echo $_SERVER['PHP_SELF'];
		echo "<br/>";
		echo $_SERVER['SERVER_NAME'];
		echo "<br/>";
		echo $_SERVER['SCRIPT_NAME'];
		echo "<br/>";
		echo $_SERVER['HTTP_USER_AGENT'];
		echo "<br/>";
		echo $_SERVER['SERVER_ADDR'];
		*/
		/*
		if($_SERVER["REQUEST_METHOD"]=="POST"){
		//$name = $_POST['username'];
		$name = $_REQUEST['username'];
		if(empty($name)){
			echo "<span style='color:red'>Username must not be empty!!!!</span>";
		}else
			echo "<span style='color:blue'>Username is" .$name. "</span>";
			
		}
		*/
		
			 ?>
			 <a href="text.php?msg=good&text=bye" >Sent Data</a>
			 
    </section>
          <section class="footer">
             <h2> www.php fundamentals.com </h2>
          </section>

</div>
</body>
</html>













[