<<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Feedback</title>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style type="text/css">
  .raiting{
 position: absolute;
 left: 50%;
 margin-top:-25px;
 transform: translate(-50%,-50%) rotateY(180deg);
 display: flex;

}
.raiting input{
 display: none;
}
.raiting label{
  display: block;
  cursor: pointer;
  /*width: 50px;*/
   margin-left:10px;
}
.raiting label:before{
  content: '\f005';
  font-family: fontAwesome;
  position: relative;
  display: block;
  font-size:30px;
   color: red;


}
.raiting label:after{
  content: '\f005';
  font-family: fontAwesome;
  position: absolute;
  display: block;
  font-size: 30px;
   color: purple;
   top: 0;
   opacity:0;
   transition: .5s;
   text-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);

}
.raiting label:hover:after,
.raiting label:hover ~label:after,
.raiting input:checked ~label:after{
opacity: 1;
 
}
.emoji{
  margin-top:10px;
  width: 100px;
  height: 100px;
  margin-left:410px;
  border-radius:50%;
   margin-bottom:30px;
  overflow:hidden ;
}
.emoji img{
  width:80px;
  margin: 0 10px;

}

#emoji{
     display: flex;
    align-items: center;
    transform:translateX(-400px);
  transition: 0.3s;
}
.feed{
  width:200px;
  height:70px;
  margin-left:360px;
  border-radius:10px;
  margin-top:-10px;
}
.feed::placeholder{
  color: black;
  font-size:15px;
  font-family: times new roman;
  font-weight: bold;
  text-align: center;
}
.submit1{
  text-align: center;
  margin-left:430px;
  border-radius:20px;
  background-color:black;
  color: white;
  margin-top: 10px;
}
</style>
<body>
  <?php
if(isset($_POST['submit'])){

    $rate=mysqli_real_escape_string($con,$_POST['rate']);
    $feedback=mysqli_real_escape_string($con,$_POST['feedback']);
   
  //  $emailquery="SELECT * FROM feedback WHERE rate='$rate'";
  // $query=mysqli_query($con,$emailquery);
  // $emailcount=mysqli_num_rows($query);

  // if($emailcount>0){
  //   $email_pass=mysqli_fetch_assoc($query);

  //   ?>
  //   <script>
  //     alert("Feedback already exist!! Sorry");
  //   </script>
  //   <?php
  // }else{
  
    //insert query

  
 $insertquery= "INSERT INTO feedback(rate,feedback) VALUES('$rate','$feedback')";
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
   ?>

<div style="border:1px solid grey; width:870px;height:250px;margin-left:200px; border-radius: 10px;">
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
  <input type="text" class="feed" name="feedback" placeholder="Feedback">

  <input type="submit" class="submit1" name="submit" value="Submit">
</div>
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