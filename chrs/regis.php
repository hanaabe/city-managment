<!DOCTYPE html>
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

h3{
 padding-top: 20px;
}

    </style>

</head>
<bod>
 <nav>
        <a class="logo">WOLKITE CITY HOUSE REGISTRATION SYSTEM</a>

    </nav>
    <div class="navi">
     <a href="#" class="active">Register</a>
     <a href="display.php">View registered house</a>
     <a href="modifiey.php">Modifiey the house data</a>
    </div>
         <center>
          <h3>Enter the House data</h3>
         <form  action="regis.php" method="post" id="register" class="input-group">
            
            <label>Owner</label><input type="text" name="owner" class="input-field" placeholder="owner full name" required>
            <label>Kebele</label><input type="text" name="village" class="input-field" placeholder="Enter Password" required>
            <label>House area</label><input type="text" name="area" class="input-field" placeholder="Enter Password" required>
            <label>House floor</label><input type="text" name="floor" class="input-field" placeholder="Enter Password" required>
            
            <button type="submit" class="submit-btn" name="save">Register</button>

        </form>
        
         </center>
      
  </bod>
  </html>
   <?php
 include('connect.php');
 if (isset($_POST['save'])){

$owner=$_POST['owner'];
$village=$_POST['village'];
$area=$_POST['area'];
$floor=$_POST['floor'];
 mysqli_query($con,"insert into house (owner,village,area, floor) 
    values ( '$owner','$village','$area', '$floor')")or die(mysqli_error($con));
     echo "<center><h3>The House data is seccesefuly Registered</h3></center>";

}

?>