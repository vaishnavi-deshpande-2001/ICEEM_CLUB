
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<style type="text/css">
  body{
    background-color: lightcyan;
  }
  *{
  margin: 0;
  padding: 0;
  list-style: none;
  text-decoration: none;
}

  .heading{
    color: brown;
    font-size: 50px;
    font-style: times new roman;
    font-weight: bold;
    margin-top: 50px;
    text-align: center;
  }
  .name{
    margin-left:500px;
    font-size:25px;
    color: blue;
    font-weight: bold;
    margin-top: 50px;
  }
  .name1{
 margin-left: 10px;
 border-radius:10px;
 padding:7px;
 color: purple;
 margin-top: 50px;
  }
 .name1::placeholder{
  color: purple;
 }
 .app-sdate{
  margin-left:490px;
    font-size:25px;
    color: blue;
    font-weight: bold;
    padding: 10px;
 }
 .date{
  margin-left:35px;
 border-radius:10px;
 padding:7px;
 color: purple;
 width:170px;
 margin-top: 10px; 
 }
 .app-edate{
margin-left:490px;
    font-size:25px;
    color: blue;
    font-weight: bold;
    padding: 10px;
 }
 .edate{
  margin-left:65px;
 border-radius:10px;
 padding:7px;
 color: purple;
 width:170px;
 margin-top: 10px; 
 }
 .app-fees{
  margin-left:490px;
    font-size:25px;
    color: blue;
    font-weight: bold;
    padding: 10px;
 }
 .fees{
  margin-left:100px;
 border-radius:10px;
 padding:7px;
 color: purple;
 width:170px;
 margin-top: 10px; 
 }
 .app-remark{
  margin-left:490px;
    font-size:25px;
    color: blue;
    font-weight: bold;
    padding: 10px;
 }
 .remark{
  margin-left:60px;
 border-radius:10px;
 padding:7px;
 color: purple;
 width:170px;
 margin-top: 10px; 
 }
.submit{
  height: 50px;
  margin-left:500px;
  font-size:25px;
  background-color:#658588;
  border-radius:10px;
  margin-top: 20px;
  color: white;
  width:355px;
 font-family: times new roman;
}
.view{
 margin-left:500px;
 height: 50px;
  font-size:25px;
  background-color:green;
  border-radius:10px;
  margin-top:10px;
  color: white;
 font-family: serif;
 width: 350px;
}
.view a{
  color: white;
}

</style>
<body>

<?php
  include 'ICEEM_Club_Connection.php';
  

   if(isset($_POST['submit'])){

    $name=mysqli_real_escape_string($con,$_POST['name']);
    $date=mysqli_real_escape_string($con,$_POST['date']);
    $edate=mysqli_real_escape_string($con,$_POST['edate']);
    $fees=mysqli_real_escape_string($con,$_POST['fees']);
    $remark=mysqli_real_escape_string($con,$_POST['remark']);

   $emailquery="SELECT * FROM ds_cc_club_activity WHERE remark='$remark'";
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

  
 $insertquery= "INSERT INTO ds_cc_club_activity(name,fromdate,todate,fees,remark) VALUES('$name','$date',
    '$edate','$fees','$remark')";
   $res=mysqli_query($con,$insertquery);

   if($res){
    ?>
    <script>
      alert("Your Activity Is Submitted");
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
 

  <div class="appoient">
    <h1 class="heading">DS-CC Club Activity</h1>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
    <label class="name">Activity Name:</label><input class="name1" type="name" name="name" placeholder="Enter Activity Name" required/><br>

    <label class="app-sdate">From Date:</label><input class="date" type="date" name="date" required/><br>
 
    <label class="app-edate">To Date:</label><input class="edate" type="date" name="edate" required/><br>

    <label class="app-fees">Fees:</label><input class="fees" type="fees" name="fees" placeholder="Enter Activity Fees" required/><br>

    <label class="app-remark">Remark:</label><input class="remark" type="remark" name="remark" placeholder="Enter Activity Remark" required/><br>
    <div class="book">
       <input class="submit" type="submit" name="submit" value="Submit Activity">
    </div>
 </form>
      <div>
     <a href="View DS-CC Club Activity.php"><button class="view">View Activity</a></button>
    </div>
</div>

</body>
</html>