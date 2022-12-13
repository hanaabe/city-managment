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
table{
    background-color: #403e3e;
    margin-top: 50px;
    width: 60%;

}
table  td{
 font-size: 15px;
 font-family: roman;
 color: white;
 text-align: center;
 
}
th{
    font-family: roman;
    font-size: 17px;
    color: white;
}



    </style>

</head>
<bod>
    <nav>
        <a class="logo">WOLKITE CITY HOUSE REGISTRATION SYSTEM</a>

    </nav>
    <div class="navi">
     <a href="regis.php">Register</a>
     <a href="#" class="active">View registered house</a>
     <a href="modifiey.php">Modifiey the house data</a>
    </div>

<center>
<table border 1>
                    
						<thead>
						  <tr>
                            <th>House id</th>
	                        <th>Owner Full Name</th>
	                        <th>Village</th>
	                        <th>House Area</th>
	                        <th>Floor</th>
	                        
                          </tr>
						</thead>
						<tbody>
									<?php
                                    include('connect.php');
                                    $hous = mysqli_query($con,"select* from house order by house_no ASC ") or die(mysqli_error($con));
                                    while ($row = mysqli_fetch_array($hous)) {
                                    $id = $row['house_no'];
                                
                                        ?>
								   <tr>
                                    <td><?php echo $row['house_no']; ?></td>
                                    <td><?php echo $row['owner']; ?></td> 
                                    <td><?php echo $row['village']; ?></td>
                                    <td><?php echo $row['area']; ?></td> 
                                    <td><?php echo $row['floor']; ?></td>
                                	
                                	
                                </tr>
                                    
                             
                            <?php } ?>
                 </tbody>
			</table>
</center>

</bod>
</html>