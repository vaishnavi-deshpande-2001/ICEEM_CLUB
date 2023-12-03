<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Mainpage.css">
  <link rel="stylesheet" type="text/css" href="footer.css">
	<title>ICEEM Club</title>
</head>

<style type="text/css">
  .image{
    margin-left:400px;
  animation: theme 1s infinite ease-in-out;

}

@keyframes theme{
  from{
    width:100px;
    height: 40px;
  }
  to{
    width:150px;
    height: 40px;
  }

}
</style>
<body style="height:820px;">
<div>
	<img class="img" src="img/banner1.jpg">
</div>
<div style="position:absolute;">
  <ul style="font-size: 16px;">
  <li class="home"><a href="#">Home</a></li>
  <li class="policy"><a href="#">Policy</a>
    <ul>
      <li><a href="AI-ML Club Policy.php">AI-ML Club Policy </a></li>
      <li><a href="DS-CC Club Policy.php">DS-CC Club Policy</a></li>
    </ul>

  </li>
  
 <li class="comm"><a href="#">Committee</a>
    <ul>
      <li><a href="AI-ML Club Committe.php">AI-ML Club Committee</a></li>
      <li><a href="DS-CC Club Committe.php">DS-CC Club Committee </a></li>
    </ul>

 </li>

  <li class="she"><a href="#">Sheduled Activity</a>
     <ul>
      <li><a href="AI-ML Club Activity.php">AI-ML Club Activity</a></li>
      <li><a href="DS-CC Club Activity.php">DS-CC Club Activity </a></li>
    </ul>
  </li>
  <li class="mem"><a href="#">Membership</a>
     <ul>
      <li><a href="AI-ML Club Membership.php">AI-ML Club Membership</a></li>
      <li><a href="DS-CC Club Membership.php">DS-CC Club Membership </a></li>
    </ul>
  </li>
  <li><a href="Contact.php">Contact Us</a></li>
</ul>
</div>

<div class="myslides" style="z-index: -1;margin-top: 32px; margin-left:22px;">
    
   <img class="myslides1"src="img/aimi1.jpg" width="927px" height="300px" style="z-index: -1;">
   <img class="myslides1"src="img/aimi2.jpg" width="927px" height="300px" style="z-index: -1;">
   <img class="myslides1"src="img/cc1.jpg" width="927px" height="300px" style="z-index: -1;">
   <img class="myslides1"src="img/data1.jpg" width="927px" height="300px" style="z-index: -1;">
   

  </div>
 
  <script>
    var slideIndex = 0;
    carousel();
    
    function carousel() {
      var i;
      var x = document.getElementsByClassName("myslides1");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > x.length) {slideIndex = 1}
      x[slideIndex-1].style.display = "block";
      setTimeout(carousel, 2000); // Change image every 2 seconds
    }
 
  
    </script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  <div class=" count">
<!-- hitwebcounter Code START -->
<a  target="_blank">
<img src="https://hitwebcounter.com/counter/counter.php?page=8101401&style=0049&nbdigits=5&type=page&initCount=0" title="Free Counter" Alt="web counter" class="image" border="0" /></a>                                    
</div>
</div>
<div style="background-color:blue;color: black;padding:0px; margin-left:0px; width:930px; height:300px; margin-top:20px; display:block; margin-left:1px"><br>
<tfoot class="tfoot" >
  <h2 style="color:white; margin-top:10px; padding:10px; text-align: center; font-family: Arial Rounded MT; font-weight:bold;font-size:35px; ">Contact Us</h2>

<h3 style="margin-top:2px; padding:5px; margin-left:75px; color:yellow">
      International Centre Of Excelleance in Engineering & Management CIDCO Mahanagar ,
    </h3>
    <h6 style="margin-left:75px; font-size: 15px; color:white; font-family: Arial Rounded MT; padding: 2px;  "> Mailing  address:</h6>
    <h6 style="margin-left:75px; font-size: 15px; color:white; font-family: Arial Rounded MT;padding: 2px; ">Opp.Bajaj Auto Main Gate,</h6>
    <h6 style="margin-left:75px; font-size: 15px; color:white; font-family: Arial Rounded MT; padding: 2px;"> Aurangabad-431136</h6>
    <h6 style="margin-left:75px; font-size: 15px; color:white; font-family: Arial Rounded MT;padding: 2px; ">Ph:+91-0240-2558101 to 10 </h6>
    <h6 style="margin-left:75px; font-size: 15px; color:white; font-family: Arial Rounded MT;padding: 2px; "> Fax:+91-0240-2558111</h6>
    <h6 style="margin-left:75px; font-size: 15px; color:white; font-family: Arial Rounded MT;padding: 2px; "> Email: <a href=" https://www.iceemabad.com/director@iceemabad.com" style="color: white;">director@iceemabad.com</a></h6>
    <h6 style="color:white; margin-left:75px;padding: 2px; font-size:15px; font-family: Arial Rounded MT;margin-top:10px"> ©Copyright 2022-23. ICEEM, Designed by Deshpande Vaishnavi, Harde Gita, Kanse Nikita (Student of BE CSE)</h6>
</tfoot>
</div>
</body>
</html>