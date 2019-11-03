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
     6.Object
      <hr />
          <?php 
		  //$a=88;		  
		    //$b=881;
			//$c=$a+$b;
			//echo "Total count ". $c ." value";
           // echo" <br/>";
		   // echo "PHP ", " IS", " NICE";
			 //echo" <br/>";
			 // echo" <br/>";
			//print "PHP IS FINE";
			//print "PHP ", " IS", " NICE";
			//$a = print ("Rupa paik");
			//echo" <br/>";
			//$x=array("Rahim","karim","Salam");
			 //var_dump($x);
			 
			 class person{
				 
				public $name;
				public $age;
				
					function PersonName(){
						 echo "Person name is ".$this->name."<br />";
						 	}
							
                    function personAge($value){
	                    echo "person age is ".$this->age=$value;
                            }					
		}
					
				 $st=new person;
			     $st->name = "Rahim";
				 $st->PersonName();
				 $st->personAge("22");
				
			 ?>			 
    </section>
          <section class="footer">
             <h2> www.php fundamentals.com </h2>
          </section>

</div>
</body>
</html>















