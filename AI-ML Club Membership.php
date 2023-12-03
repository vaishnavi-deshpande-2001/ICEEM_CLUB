<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AI-ML Club Membership Form</title>
	<link rel="stylesheet" type="text/css" href="members.css">
</head>
<body>

	<?php
  include 'ICEEM_Club_Connection.php';
  

   if(isset($_POST['Submit'])){

    $regno=mysqli_real_escape_string($con,$_POST['regno']);
    $date=mysqli_real_escape_string($con,$_POST['date']); 
    $other=mysqli_real_escape_string($con,$_POST['other']);
    $name=mysqli_real_escape_string($con,$_POST['name']);
    $gender=mysqli_real_escape_string($con,$_POST['gender']);
    $datebirth=mysqli_real_escape_string($con,$_POST['datebirth']);
    $yearstudy=mysqli_real_escape_string($con,$_POST['yearstudy']);
    $contact=mysqli_real_escape_string($con,$_POST['contact']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $address=mysqli_real_escape_string($con,$_POST['address']);
    $declaration=mysqli_real_escape_string($con,$_POST['declaration']);
    
    
   $emailquery="SELECT * FROM ai_ml_club_membership WHERE email='$email'";
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

  
 $insertquery= "INSERT INTO ai_ml_club_membership(regno, date, other, name, gender, datebirth, yearstudy, contact, email, address, declaration) VALUES ('$regno','$date','$other','$name','gender','$datebirth','$yearstudy','$contact','$email','$address','$declaration')";
   $res=mysqli_query($con,$insertquery);

   if($res){
    ?>
    <script>
      alert("Your form Submitted");
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
 

 <img class=" ai" src="img/icm.jpg">
 
 	
 <h1 class="i"> INTERNATIONAL CENTRE OF EXCELLENCE IN ENGINEERING <br> AND MANAGEMENT(ICEEM)</h1>
	<h4 class="i1" style="margin-left:250px; margin-top:-20px">  Research to reality.....</h4></div>
	<div>
	<hr style="margin-top:70px; width: 1330px; margin-left:0">
	<hr style="margin-top:-5px; width: 1330px; margin-left:0" >
</div>
	<div>
		<h1 style="margin-top: 20px; margin-left:570px"> AI-ML Club</h1>
        <h5 style="margin-left:520px;margin-top: -10px;">(Department of Computer science & Engineering)</h5>
        <h2 class=" p"> Membership Form</h2>
        <hr class="s">
        <hr class="r">
</div>
<div style="margin-left:150px; display: block;">
	<form action="" method="POST">
	<h5 class="gi">(For Office Use )</h5>

	<label class="regno" style="margin-top:-10px; display:block; color: black; font-weight:bold">Reg.No:</label> <input style="margin-top:-18px; margin-left:120px;display: block; background: transparent;border: 0;border-bottom: 2px solid black;border-color: black;" type="text" name="regno" placeholder class="enter">

	<label class="date" style="margin-left:500px; margin-top:-20px; display: block; color: black; font-weight:bold"> Date:</label> 
	<input style="margin-left:550px;margin-top: -20px; display: block;background: transparent;border: 0;border-bottom: 2px solid #c5ecfd;border-color: black;" type="date" name="date" placeholder=" ">
</div>
<div>
		<label class="other" style="margin-top:5px;; margin-left:150px; color: black; font-weight: bold;">Other details:</label> 
		<input style="margin-top:10px;margin-left:25px;background: transparent;border: 0;border-bottom: 2px solid #c5ecfd;border-color: black;" type="text" name="other" placeholder class="enter1">
<!--         <label class="Sign"> Sign:</label> <input class="Sign1" type="text" name=" Sign" placeholder ="">
 --></div>
		<hr class="nikit" style="margin-top:10px">
	     <hr class="nikita" style="margin-top:-5px" >

	<label class="name" style="margin-top:10px; display: block; margin-left:150px; color:black; font-weight: bold;">Name:</label> 
	<input style="margin-left:270px; margin-top:-20px; display:block;background: transparent;border: 0;border-bottom: 2px solid #c5ecfd;border-color: black; width:400px;
	" class="name1" type="text" name="name" placeholder class="enter">

 <div> 
     		<br>
     		<label style="margin-left:150px; color:black; font-weight:bold;">Gender:</label>
     		<input style="margin-left:50px;color: black; font-weight:bold;" type="radio" name="rdbGender"/>Male	     			
     		<input type="radio" name="gender"/>Female
     		<label style="margin-left:50px; color: black; font-weight:bold;">Date Of Birth:</label> <input class="birth1" type="date" name="datebirth" placeholder class="enter">
  <div>
  	   <div style="margin-left:810px; width: 200px; margin-top:-10px">
     		<label style="margin-left:-100px; color:black; font-weight:bold; margin-top: -20px; display:block;">Year Of Study:</label>
     	</div>
     	<div style="margin-left:820px;margin-top:-20px;">
     		<input  type="radio" name="yearstudy"/>FE	    
     	 <input type="radio" name="yearstudy"/>SE
     	<input style="margin-left:5px;color: black; font-weight:bold;" type="radio" name="yearstudy"/>TE		
     	<input style="margin-left:5px;color: black; font-weight:bold;" type="radio" name="yearstudy"/>BE	
     </div>
   </div>
            <label style="margin-left:150px; color: black; font-weight: bold; margin-top:20px; display: block; ">Contact No.:</label> <input style="margin-left:250px; margin-top:-20px; display:block;background: transparent;border: 0;border-bottom: 2px solid #c5ecfd;border-color: black;  " type="text" name="contact" placeholder class =" enter2">

    </div>
              <label style="margin-left:510px; margin-top:-12px;color: black; font-weight:bold; display: block;">Email Address:</label><input style="background: transparent;border: 0;border-bottom: 2px solid #c5ecfd;border-color: black; margin-left: 620px; margin-top: -20px; display: block; width: 250px;" type="text" name="email" placeholder class="enter">

             <label style="margin-left:150px; color: black; font-weight: bold; margin-top:20px; display: block; ">Present Address:</label> <input style="margin-left:270px; margin-top:-20px; display:block;background: transparent;border: 0;border-bottom: 2px solid #c5ecfd;border-color: black; width: 500px;" type="text" name="address" placeholder class =" enter2">
	     		
	   <div style="margin-left:150px;">
	   <h3 style="margin-top:30px"> Terms and conditions</h3>
	<ul>
		<LI> Club member should take activ part in all activitis planned form time to time.</LI>
		<LI> Club member shall abide aii rules of the club framad by the authurity.</LI>
		<LI> Club president shall be final authurity to resolve in case of any discrepancy if arose.</LI>
		<LI> Club member shall bear the expenases( if any )requried for some activity.</LI>

	</ul>


	   </div> 
	    		    <label style="margin-left:150px; color: black; font-weight: bold; margin-top:20px; display: block; ">Declaration:</label>
	    		</div>
                 <label style="margin-left:150px; color:black;  margin-top:10px;display: block;">I</label>
	    		    <input style="margin-left:165px; margin-top:-20px; display:block;background: transparent;border: 0;border-bottom: 2px solid #c5ecfd;border-color: black; width:250px;" type="text" name="declaration" placeholder class =" enter2"><p style="margin-left:430px;margin-top: -15px; display:block;"> shall follow all the rules and regulations of the club and accepts the about terms and  conditions.</p>

	     	
	    	</div>
	    	<div>
	    		<input style="margin-left:600px;margin-top: 5px; color:white; background:black; font-size:20px;width:150px" type="submit" name="Submit" value="Submit">
	    	</div>
	  <div>
	    			
</div>
</form>
 </div> 
 
</body>
</html>
<!-- <!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="Members.css">
	<title>
		
	</title>

</head>
<body>
	<img class=" ai" src="img/icm.jpg">
	<h1 class="i"> INTERNATIONAL CENTRE OF EXCELLENCE IN ENGINEERING AND MANAGEMENT(ICEEM)</h1>
	<h4 class="i1">  Research to reality.....</h4>
	<hr class="a">
	<hr class="g">
	<div>
		<h1 class=" abc"> DS-CC Club</h1>
        <h5  class=" b">(Department of Computer science & Engineering)</h5>
        <h2 class=" p"> Membership Form</h2>
        <hr class="s">
        <hr class="r">
</div>
<div>
	<h5 class="gi">(For Office Use )</h5>
	<h3 class="git"> Reg.No.:</h3>
	<h3 class="gita"> Date:</h3> 
	<h3 class="ni"> Other details:</h3>
	<h3 class="nik"> Sign:</h3>
</div>
<div>
		<hr class="nikit">
	<hr class="nikita" >

</div>
<div>
	<h3 class="sn"> Name: </h3>
	<hr class ="sand" width="93%">
</div>
<div>
	<h3 > Gender: M/F</h3>
	<h3 class="sani" > Date of Birth: /  /  </h3>
	<h3 class="sandy"> Year of Study: FE/ SE/TE/BE</h3>


</div>

<div>
	<h3> Contact No.:</h3>
	<hr class="sa" width="20%">
	<h3 class="sha"> Email Address:</h3>
	<hr class ="shal" width="60%">
</div>
<div>
	<h3> Present Address:</h3>
	<hr class="shali" width="88%">
	<hr class="s1" width="97%">
	<hr class="s2" width="97%">
</div>
<div>
	<h3 class="s3"> Sign</h3>
	<hr>
</div>
<div>
	<h3> Terms and conditions</h3>
	<ul>
		<LI> Club member should take activ part in all activitis planned form time to time.</LI>
		<LI> Club member shall abide aii rules of the club framad by the authurity.</LI>
		<LI> Club president shall be final authurity to resolve in case of any discrepancy if arose.</LI>
		<LI> Club member shall bear the expenases( if any )requried for some activity.</LI>

	</ul>

</div>
<div>
	<h3> Declaration </h3>
	<h3>I</h3>
	<hr class="s4" width="50%">
	<p class="s5"> shall follow all the rules and regulations of the club and accepts the about terms and  conditions.</p>
</div>
<div>
	<h3>Date:</h3>
	<h3 class="s6"> Sign</h3>
	<button class="s7"> Print</button>
</div>
</body>
</html>
 -->