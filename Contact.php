<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="contact.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"><!-- 
<link rel="stylesheet" type="text/css" href="feedback.php"> -->
	<title>Contact Us</title>
</head>
<body>
	<?php
  include 'ICEEM_Club_Connection.php';
  

   if(isset($_POST['Submit'])){

    $name=mysqli_real_escape_string($con,$_POST['name']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $mobile=mysqli_real_escape_string($con,$_POST['mobile']);
    $comment=mysqli_real_escape_string($con,$_POST['comment']);
   
   $emailquery="SELECT * FROM  contact WHERE email='$email'";
  $query=mysqli_query($con,$emailquery);
  $emailcount=mysqli_num_rows($query);

  if($emailcount>0){
    $email_pass=mysqli_fetch_assoc($query);

    ?>
    <script>
      alert("Already exist");
    </script>
    <?php
  }else{
  
    //insert query

  
 $insertquery= "INSERT INTO  contact(name,email,mobile,comment) VALUES('$name','$email',
    '$mobile','$comment')";
   $res=mysqli_query($con,$insertquery);

   if($res){
    ?>
    <script>
      alert("Your Quick Contact is Submitted");
    </script>
    <?php
   }else{
       ?>
    <script>
      alert("Plz try again!");
    </script>
    <?php
   }
   }
 }
   ?>
 

	<h1 class="conus">Contact Us</h1>
	<div class="border">
		 <img class="img" src="img/contactus.png">
		 <h4 class="des">Gut NO. 4, CIDCO Mahanagar,<br>
Opp. Bajaj Auto Main Gate,<br>
Aurangabad-431136, Maharashtra(India)<br>

<h4 class="mob">Mob. No.: + 91 7249007777, 7020475138</h4><br>

<h4 class="pho">Ph:0240-2558106,0240-2558103, 0240-2558120</h4><br>
<h4 class="fax">Fax: + 91 - 0240 - 2558111</h4><br>
 
<h4 class="email"><a href="https://www.iceemabad.com/director@iceemabad.com">Email: director@iceemabad.com</a></h4>

</h4>
	</div>
	<div class="Quick">
		<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
			<h1 class="qcontact">Quick Contact</h1>
			<input class="name" type="text" name="name" placeholder="Name"><br>
			<input class="email1" type="text" name="email" placeholder="Email"><br>
			<input class="mobile" type="text" name="mobile" placeholder="Mobile"><br>
			<textarea class="text" name="comment" placeholder="Comments"></textarea>

			<input class="contactsubmit" type="submit" name="Submit" value="Submit">
			<button class="reset">Reset</button>
		</form>
	</div>
  <div style="background-color:blue;color: black;padding:10px; margin-left:200px; width:853px; height:; margin-top10px">
<tfoot class="tfoot" >
  <h2 style="color:white; margin-top: -10px;">Contact Us</h2>
<h3 style="margin-top: 5px;">
      International Centre Of Excelleance in Engineering & Management CIDCO Mahanagar ,
    </h3>
    <h6> Mailing  address:
    <h6>Opp.Bajaj Auto Main Gate,</h6>
    <h6> Aurangabad-431136</h6>
    <h6>Ph:+91-0240-2558101 to 10 </h6>
    <h6> Fax:+91-0240-2558111</h6>
    <h6> Email: <a href=" https://www.iceemabad.com/director@iceemabad.com" style="color: white;">director@iceemabad.com</a></h6>
    <h6 style="color:white"> ©Copyright 2022-23. ICEEM, Designed by Deshpande Vaishnavi, Harde Gita, Kanse Nikita (Student of BE CSE)</h6>
</tfoot>
</div>
 <?php
if(isset($_POST['submit'])){

    $rate=mysqli_real_escape_string($con,$_POST['rate']);
    $feedback=mysqli_real_escape_string($con,$_POST['feedback']);
    $name=mysqli_real_escape_string($con,$_POST['name']);
   
   $emailquery="SELECT * FROM feedback WHERE name='$name'";
  $query=mysqli_query($con,$emailquery);
  $emailcount=mysqli_num_rows($query);

  if($emailcount>5){
    $email_pass=mysqli_fetch_assoc($query);

    ?>
    <script>
      alert("Sorry!! Your limit is Over");
    </script>
    <?php
  }else{
  
    //insert query

  
 $insertquery= "INSERT INTO feedback(name,feedback) VALUES('$name','$feedback')";
   $res=mysqli_query($con,$insertquery);

   if($res){
    ?>
    <script>
      alert("Thanks for your Feedback");
    </script>
    <?php
   }else{
       ?>
    <script>
      alert("Plz try again!");
    </script>
    <?php
   }
 }
   
 }
   ?> 
<form action="" method="POST">
<div style="border:1px solid grey; width:870px;height:280px;margin-left:200px; border-radius: 10px;">
<div class="emoji"> 
	  <div id="emoji">
	<img src="img/poor1.jpg">
	<img src="img/bad.jpg" >
	<img src="img/okay.jpg">
	<img src="img/good.jpg">
	<img src="img/excellent.jpg">
	</div>
</div>


  <div class="raiting">
    <input type="radio" name="rate" id="rate-5">
    <label for="rate-5" class="fas fa-star"></label>
    <input type="radio" name="rate" id="rate-4">
    <label for="rate-4" class="fas fa-star"></label>        
    <input type="radio" name="rate" id="rate-3">
    <label for="rate-3" class="fas fa-star"></label>    
    <input type="radio" name="rate" id="rate-2">
    <label for="rate-2" class="fas fa-star"></label>
    <input type="radio" name="rate" id="rate-1">
    <label for="rate-1" class="fas fa-star"></label>        

  </div>

  <input type="text" class="name1" name="name" placeholder="Enter Your Name" required/>
  <input type="text" class="feed" name="feedback" placeholder="Feedback" required/>

  <input type="submit" class="submit1" name="submit" value="Submit">
</div>
</form>
<script>

	var stars=document.getElementsByClassName("fas");
  var emoji=document.getElementById("emoji");
stars[4].onclick=function(){
  stars[0].style.color="#ffd93b";
  stars[1].style.color="#e4e4e4";
  stars[2].style.color="#e4e4e4";
  stars[3].style.color="#e4e4e4";
  stars[4].style.color="#e4e4e4";
  emoji.style.transform="translateX(0)";
  }
   stars[3].onclick=function(){
  stars[0].style.color="#ffd93b";
  stars[1].style.color="#e4e4e4";
  stars[2].style.color="#e4e4e4";
  stars[3].style.color="#e4e4e4";
  stars[4].style.color="#e4e4e4";
  emoji.style.transform="translateX(-100px)";
}

   stars[2].onclick=function(){
  stars[0].style.color="#ffd93b";
  stars[1].style.color="#e4e4e4";
  stars[2].style.color="#e4e4e4";
  stars[3].style.color="#e4e4e4";
  stars[4].style.color="#e4e4e4";
  emoji.style.transform="translateX(-200px)";
}

   stars[1].onclick=function(){
  stars[0].style.color="#ffd93b";
  stars[1].style.color="#e4e4e4";
  stars[2].style.color="#e4e4e4";
  stars[3].style.color="#e4e4e4";
  stars[4].style.color="#e4e4e4";
  emoji.style.transform="translateX(-300px)";
}

   stars[0].onclick=function(){
  stars[0].style.color="#ffd93b";
  stars[1].style.color="#e4e4e4";
  stars[2].style.color="#e4e4e4";
  stars[3].style.color="#e4e4e4";
  stars[4].style.color="#e4e4e4";
  emoji.style.transform="translateX(-400px)";
}


</script>
</body>
</html>