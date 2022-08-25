<!DOCTYPE html>
<html>
 
<?php
session_start();
    if(!isset($_SESSION['x']))
        header("location:userlogin.php");
    
    
    $conn=mysqli_connect("localhost","root","","crime_alert");
    if(!$conn)
    {
        die("could not connect".mysqli_error());
    }
    mysqli_select_db($conn,"crime_alert");
    
    $u_id=$_SESSION['u_id'];
        
        $result=mysqli_query($conn,"SELECT c_no FROM user where u_id='$u_id' ");
        $q2=mysqli_fetch_assoc($result);
        $c_no=$q2['c_no'];
    
        $result1=mysqli_query($conn,"SELECT u_name FROM user where u_id='$u_id' ");
        $q2=mysqli_fetch_assoc($result1);
        $u_name=$q2['u_name'];
    
if(isset($_POST['s'])){
    $con=mysqli_connect('localhost','root','');
    if(!$con)
    {
        die('could not connect: '.mysqli_error());
    }
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        
        
 
      $d_o_c=$_POST['d_o_c'];
  
        $var=strtotime(date("Ymd"))-strtotime($d_o_c);
        
        
    if($var>=0)
    {
      $location=$_POST['location'];
      $type_crime=$_POST['type_crime'];
      $description=$_POST['description'];
      // $images=$_POST['images'];
      
      $file_name = $_FILES['images']['name'];
      $file_temp = $_FILES['images']['tmp_name'];
      $file_uri = './image/'.$file_name;
      move_uploaded_file($file_temp, $file_uri);
      $comp="INSERT into complaint(c_no,location,type_crime,d_o_c,description,images) values('$c_no','$location','$type_crime','$d_o_c','$description','$file_uri')";
      mysqli_select_db($con,"crime_alert"); 
      $res=mysqli_query($con,$comp);
      
      if(!$res)
      {
        $message1 = "Complaint already filed";
        echo "<script type='text/javascript'>alert('$message1');</script>";
      }
      else
      {
          $message = "Complaint Registered Successfully";
          echo "<script type='text/javascript'>alert('$message');</script>";
      }
    }
    else
    {
     $message = "Enter Valid Date";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }
  }
}
?>
    
 <script>
     function f1()
        {
           var sta1=document.getElementById("desc").value;
           var x1=sta1.trim();
          if(sta1!="" && x1==""){
          document.getElementById("desc").value="";
          document.getElementById("desc").focus();
          alert("Space Found");
        }
}
 </script>
   
<head>
	<title>Complainer Home Page</title>

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

	<link href="complainer_page.css" rel="stylesheet" type="text/css" media="all" />

</head>

<body style="background-size: cover;
    background-image: url(home_bg1.jpeg);
    background-position: center;">
	<nav  class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home.php"><b>Home</b></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li ><a href="userlogin.php">User Login</a></li>
        <li class="active"><a href="complainer_page.php">User Home</a></li>
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="complainer_page.php">Log New Complain</a></li>
        <li><a href="complainer_complain_history.php">Complaint History</a></li>
        <li><a href="logout.php">Logout &nbsp <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
      </ul>
    </div>
  </div>
 </nav>
    
    
<div class="video" style="margin-top: 5%"> 
	<div class="center-container">
		 <div class="bg-agile">
			<br><br>
			<div class="login-form"><p><h2 style="color:white">Welcome <?php echo "$u_name" ?></h2></p>
                                    <p><h2>Log New Complain</h2></p>
				<form action="complainer_page.php" method="post" style="color: gray" enctype="multipart/form-data">Citizenship Number
					<input type="text"  name="c_no" placeholder="CitizenShip Number" required="" disabled value=<?php echo "$c_no"; ?>>
					
				<div class="top-w3-agile" style="color: gray">Location of Crime
                    
                    <select class="form-control" name="location">
						<?php
                        $loc=mysqli_query($conn,"select location from police_station");
                        while($row=mysqli_fetch_array($loc))
                        {
                            ?>
                                	<option> <?php echo $row[0]; ?> </option>
                            <?php
                        }
                        ?>
					
				    </select>
				</div>
				<div class="top-w3-agile" style="color: gray">Type of Crime
					<select class="form-control" name="type_crime">
						<option>Theft</option>
						<option>Robbery</option>
                        <option>Pick Pocket</option>
                        <option>Murder</option>
                        <option>Rape</option>
                        <option>Molestation</option>
                        <option>Kidnapping</option>
                        <option>Missing Person</option>
                        <option>Others</option>
				    </select>
				</div>
					<div class="Top-w3-agile" style="color: gray">
					Date Of Crime : &nbsp &nbsp  
						<input style="background-color: #313131;color: white" type="date" name="d_o_c" required>
					</div>
					<br>
					<div class="top-w3-agile" style="color: gray">
					Description
						<textarea  name="description" rows="20" cols="50" placeholder="Describe the incident in details with time" onfocusout="f1()" id="desc" required></textarea>
					</div>
          <div class="Top-w3-agile" style="color: gray">
						<input type="file" style="background-color: #313131;color: white"  class="Top-w3-agile"  name="images">
					</div>

        	<input type="submit" value="Submit" name="s">
				</form>	
              
			</div>	
		</div>
	</div>	
</div>	
<div style="position: relative;
   left: 0;
   bottom: 0;
   width: 100%;
   height: 30px;
   background-color: rgba(0,0,0,0.8);
   color: white;
   text-align: center;">
  <h4 style="color: white;">&copy <b>Crime Alert 2022</b></h4>
</div>
 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>