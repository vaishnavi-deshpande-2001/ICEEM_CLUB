<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> View AI-ML Club Activity</title>
</head>
<style type="text/css">
	body{
	background-color: lightcyan;
}

.profile{
	margin-top: 100px;
	color: purple;
	text-align: center;
	font-family:cooper;
	font-size: 30px;
	font-weight: bold;
}

.table-design th{
	padding:10px;
	margin-left: 20px;
	font-size: 20px;
	width: 300px;
	font-family: times new roman;
	font-weight: bold;
	color: brown;
 border: 1px solid blue;
   
}

.table-design tr{
	padding: 20px;
	padding-left: 30px;
	font-size:15px;
	font-family: cooper;
	font-weight: bold;
	
	
}
.table-design td{
	padding: 20px;
	padding-left: 30px;
	font-size:15px;
	font-family: sans-serif;
	font-weight: bold;
	border: 1px solid blue;
	color: green;
}
</style>
<body>
<div class="center-div">
   	     	<h1 class="profile"> View DS-CC Club Activity</h1>
   </div>
     <div class="table-responsive">
     </div>
      <table class="table-design">
      	<thead>
      		<tr>
      			<th>Sr No</th>
      			<th>Activity Name</th>
            <th>From Date</th>
      			<th>To Date</th>
      			<th>Fees</th>
      			<th>Remark</th>
           	</tr>
      	</thead>
 
      	<tbody>
      		
             <?php
                 
                  include 'ICEEM_Club_Connection.php';



              $selectquery="select * from ds_cc_club_activity";

              $query=mysqli_query($con,$selectquery);

              $nums=mysqli_num_rows($query);

              while ($res=mysqli_fetch_array($query)) {

                ?>
                <tr>
                 <td><?php echo $res['Sr.no'];?></td>
                  <td><?php echo $res['name'];?></td>
                  <td><?php echo $res['fromdate'];?></td>
                  <td><?php echo $res['todate'];?></td>
                  <td><?php echo $res['fees'];?></td>
                  <td><?php echo $res['remark'];?></td>
                </tr>
                <?php
              }
               ?> 
             
      	</tbody>
      </table>

</body>
</html>