<html>
    <head>
        <title>Upload Image</title>
        <style>
            body 
            {
                background-color:lightblue;
            }
            input 
            {
                width: 50%; 
                height: 5%;
                border:1px;
                border-radius:05px;
                padding:8px 15px 8px 15px;
                margin:10px 0px 15px 0px;
                box-shadow:1px 1px 2px 1px grey;
                font_weight:bold;
            }
        </style>
    </head>
    <body>
        <center>
            <h1>Nomination</h1>
            <form action= "" method="POST" enctype='multipart/form-data'>
                <label> Choose your partysymbol:</label><br>
                <input type="file" name="image" id="image"/><br>



                <label> Enter Candidate Name:</label><br>
                <input type="text" name="candidatename" placeholder="Enter Candidate Name"/><br>

                <label>Enter Party Name :</label><br>
                <input type="text" name="partyname" placeholder="Enter Party Name"/><br>

            
                <input type="submit" name="upload" value="Upload Partysymbol"/><br>

            
            </form>
        </center>
   </body>
</html>
<?php
  $connection=mysqli_connect("localhost","root","");
  $db=mysqli_select_db($connection,'project');
  if(isset($_POST['upload']))
  {
    $file=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $candidatename=$_POST['candidatename'];
    $partyname=$_POST['partyname'];
    $query="INSERT INTO `candidate`(`candidatename`,`partyname`,`partysymbol`)VALUES('$candidatename','$partyname','$file')";
    $query_run = mysqli_query($connection,$query);
    if($query_run)
    {
        echo '<script type="text/javascript">alert("Image Profile Uploaded")</script>';
    }
    else
    {
        echo '<script type="text/javascript">alert("Image Profile Not Uploaded")</script>';
    }
  }