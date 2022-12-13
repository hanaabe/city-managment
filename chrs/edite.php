<DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css">
.logo{
      font-family: Georgia, 'Times New Roman', Times, serif;
      color: #f2f2f2;
      font-size: 20px;
      font-weight: bold;
   
}
.navi{
    display: flex;
   background: linear-gradient(to right, #ff105f,#ffad06);
    align-items: center;
    justify-content: center;
    height: 42px;
}
.navi a:hover{
  background: #ff105f;}
.navi a{

padding: 10px 20px;
text-align: center;
display: inline-block;
font-family: Georgia, 'Times New Roman', Times, serif;
color: #f2f2f2;
font-size: 20px;
font-weight:bold;
text-decoration: none;    
}

.active{
    border-radius: 70px;
    background: #ffad06;
    overflow: hidden;

}

body{
       background-color: #ffad06;
}
.input-group{
  margin: 60px 0px 40px 0px;
  position: relative;
  width: 320px;  
  
}



    </style>

</head>
<bod>
 <nav>
        <a class="logo">WOLKITE CITY HOUSE REGISTRATION SYSTEM</a>

    </nav>
    <div class="navi">
     <a href="regis.php">Register</a>
     <a href="display.php">View registered house</a>
     <a href="#"  class="active">Modifiey the house data</a>

    </div>
	<center>

<form  id="edite.php" class="input-group"  method="post">
	<?php
  include('connect.php');
  $get_id = $_GET['id'];
                    $hous = mysqli_query($con,"select * from house where house_no='$get_id' ")or die(mysqli_error($con));
                    while($row = mysqli_fetch_array($hous)){
                    $id = $row['house_no'];
                    $owner= $row['owner'];
                    $village = $row['village'];
                    $area = $row['area'];
                    $floor = $row['floor'];
                    
                    ?>
                    <?php } ?>
		 <label>Owner</label><input type="text" class="input-field" name="owner" value=" <?php echo "$owner"; ?>" /><br><br>
		 <label>Kebele</label><input type="text" class="input-field" name="village" value=" <?php echo "$village"; ?>"/><br><br>
		 <label>House Area</label><input type="text" class="input-field" name="area" value=" <?php echo "$area"; ?>"/><br><br>
		 <label>House Floor</label><input type="text" class="input-field" name="floor" value=" <?php echo "$floor"; ?>"/><br><br>
		
		<button type="submit" class="submit-btn" name="update">Update</button>
		</form>
		</center>
		</body>
		</html>

		<?php
    include('connect.php');
if (isset($_POST['update'])){

$get_id = $_GET['id']; 

$owner=$_POST['owner'];
$village=$_POST['village'];
$area=$_POST['area'];
$floor=$_POST['floor'];
mysqli_query($con,"update house set owner='$owner', village='$village',area='$area', floor='$floor' where house_no = '$get_id' ")or die(mysqli_error($con));
echo "House seccesefuly upadated";
header("location: display.php");
}
?>