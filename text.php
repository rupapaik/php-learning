<!DOCTYPE html>
<?php
$color="#fff";
$fonts="verdana";
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "<span style='color: red'>Name is required </span>";
  } else {
    $name =validate($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "<span style='color: red'>Email is required</span>";
	 }
	 elseif(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
		$emailErr = "<span style='color: red'>Invalid email format</span>"; 
	 }
  else {
    $email = validate($_POST["email"]);
  }

  if (empty($_POST["website"])) {
     $websiteErr = "<span style='color: red'>Website is required</span>";
  }
	elseif(!filter_var($_POST["website"],FILTER_VALIDATE_URL)){
		$websiteErr = "<span style='color: red'>Invalid website format</span>"; 
	 }

  else {
    $website =validate($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = validate($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "<span style='color: red'>Gender is required</span>";
  } else {
    $gender = validate($_POST["gender"]);
  }
}
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
	  	 
	  <!-- <form action="" method="post">-->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	   <table>
	       <tr>
			     
                <td>Name</td>		   
		        <td>
		             <input type="text" name="name">
                     <span class="error">* <?php echo $nameErr;?></span>
                     <br><br>
			    </td>
			</tr>
			 
		    <tr>
               <td> E-mail</td>
		       <td>
                    <input type="text" name="email">
                    <span class="error">* <?php echo $emailErr;?></span>
                    <br><br>
		       </td>
		    </tr>
			
		   <tr>
               <td> Website</td>
		       <td>
                   <input type="text" name="website">
                   <span class="error">* <?php echo $websiteErr;?></span>
                   <br><br>
		       </td>
		   </tr>
		   
		  <tr>
              <td> Comment</td>
		      <td>
		          <textarea name="comment" rows="5" cols="40"></textarea>
                  <br><br>
		      </td>
		  </tr>
		  
		  <tr>
              <td> Gender</td>
		      <td>
                   <input type="radio" name="gender" value="female">Female
                   <input type="radio" name="gender" value="male">Male
                   <input type="radio" name="gender" value="other">Other
                   <span class="error">* <?php echo $genderErr;?></span>
                   <br><br>
		     </td>
		   </tr>
		   <tr>
		        <td></td>
                <td><input type="submit" name="submit" value="Submit"> </td>
		   </tr>
</table>
</form>
	 
  <?php	   
	   
		/*$mess = $_GET['msg'];
		$text = $_GET['text'];
		echo "First text:".$mess;
		echo"<br/>";
		echo "Second text:".$text;
		*/		
		   
		    function validate($data){
				$data= trim($data);
				$data= stripcslashes($data);
				$data= htmlspecialchars($data);
				return $data;
			}
			echo "Name: ".$name."<br/>";
			echo "E-mail: ".$email."<br/>";
			echo "Website: ".$website."<br/>";
			echo "Comment: ".$comment."<br/>";
			echo "Gender: ".$gender."<br/>";
		
			
				
				
			
        ?>
			 
			 
    </section>
          <section class="footer">
             <h2> www.php fundamentals.com </h2>
          </section>

</div>
</body>
</html>













