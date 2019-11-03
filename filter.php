<!DOCTYPE html>
<?php
$color="#fff";
$fonts="verdana";
session_start();
setcookie('visited',"",time() -3600);
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
	  <hr/>
    PHP Cookie
			
	
	 <span style = "float:right">
	 <?php
	  date_default_timezone_set("asia/dhaka");		     
		     echo "Time: ".date("h:i:sa");
			 ?> 
				</span> 
					<hr />
          
		<!--  <table>
		  <tr>
		  <td>Filter Name</td>
		  <td>Filter Id</td>
		  </tr>
		  <?php 
		  //foreach(filter_list()as $id =>$filter){
			//  echo'<tr><td>'.$filter.'</td><td>'.filter_id($filter).'</td></tr>';
		  //}
		  ?>
		  </table>-->
		  <?php
		  
		 /* $str="<h2>I am Learning PHP</h2>";
		  $newstr = filter_var($str,FILTER_SANITIZE_STRING);
		  echo $str;
		  echo  $newstr;*/
		  
		  /*
		  $int = 60;
		  if(filter_var($int,FILTER_VALIDATE_INT)){
			  
			  echo "It is integer value";
		  }else{
			  echo "It is not integer value";
		  }	
           echo"<br/>";
		  
		   $ip = "255.0.0.12";
		  if(filter_var($ip,FILTER_VALIDATE_IP)){
			  
			  echo "It is valid ip address";
		  }else{
			  echo "It is not valid ip address";
		  }
		  
		   echo"<br/>";
		    $mail = "rahim@gmail.com";
		  if(filter_var($mail,FILTER_VALIDATE_EMAIL)){
			  
			  echo "It is valid email address";
		  }else{
			  echo "It is not valid email address";
		  }
		  
		  
		   
		   echo"<br/>";
		    $url = "http://www.gmail.com";
		  if(filter_var($url,FILTER_VALIDATE_URL)){
			  
			  echo "It is valid website address";
		  }else{
			  echo "It is not valid website address";
		  }
		   */
		  ?>		 
		  <?php
		   /*
		  $int=300;
		  $min=1;
		  $max=200;
		 if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false){
			  echo "It is valid";
		  }else{
			  
			  echo"It is not valid";
		  }
		  */
		  
		 $url = "http://www.google.com/index.html?q=123";
		   if (filter_var($url, FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED)){
			   
			   echo "This url is valid";
		   }
		   else{
			    echo "This url is not valid";
		   }
		
		  
		  /*
		   $int = 122;
           $min = 100;
           $max = 200;
 
           if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
           echo("Variable value is not within the legal range");
           } else {
           echo("Variable value is within the legal range");
          }
		   */
		   phpinfo();
		  ?>
		  
    </section>
          <section class="footer">
		  <p>&copy; <?php echo date  ("Y");?> PHP Fundamentals</p>
             <h2> www.php fundamentals.com </h2>
          </section>

</div>
</body>
</html>















