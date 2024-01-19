<html>
<head>
        <title></title>
        <style>
            @keyframes blinking{
                0% { color: red;}
                50% { color: blue;}
                100%{ color: green;}
            }
            #demo {
                font-size: 2em;
                animation:blinking 1s infinite;

            }

        </style>

    </head>
    <body>
        <center><b><p id="demo">READY TO VOTE!</p><b>
        <img src="https://media.gettyimages.com/id/1258633187/vector/online-vote.jpg?s=612x612&w=gi&k=20&c=hGbWymlY_y2ctJvaEjDJFNRLXPJGnxg4BFBMAyUaw7U=" height="400" width="400">
         </center>
   </body>
<?php 
$connection=mysqli_connect("localhost","root","","project");
error_reporting(0);
$rollno=$_GET['Aadharnumber'];
 $query = "DELETE FROM voters WHERE Aadharnumber='$rollno'";
//$query = "DELETE FROM `voters` WHERE `voters`.`Aadharnumber` = "4567891234";
$data=mysqli_query($connection,$query);
if($data)
{
   
}
 else{
    echo"<font color='red'Failed to delete Record from Database";
}
?>
<a href="ready.php" >      
   <center><h3><button style="background-color:blue; color:white; width:200; height:50;">VOTE HERE</button></h3></center></a>
   
</html>