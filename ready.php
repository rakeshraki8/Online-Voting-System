<html>
  <head>
    <title>Display Image</title>
  </head>
  <body>
    <center>
        <form action="" method="POST" enctype="multipart/form_data">
            <table width=50% border="1" cellpadding="5" cellspacing="5">
                <thead>
                    <tr>
                        <th>Candidate Name</th>
                        <th>Party Name</th>
                        <th>Party Symbol</th>
                    </tr>
                </thead>
                <?php
                   $connection=mysqli_connect("localhost","root","");
                   $db=mysqli_select_db($connection,'project');
                   $query="SELECT * FROM candidate";
                   $query_run=mysqli_query($connection,$query);
                   while($row=mysqli_fetch_array($query_run))
                   {
                    ?>
                    <tr>
                        <td> <?php echo $row['candidatename']; ?></td>
                        <td> <?php echo $row['partyname']; ?></td>
                        <td><?php echo '<img src="data:image;base64,'.base64_encode($row['partysymbol']).'"alt="partysymbol" style="width:100px; height:100px;" >'; ?></td>
                        <td> <a href="success.html"><button type="button" style="background-color:blue; color:white; width:200; height:50;">Click Here To Vote</button></a></td>
                    </tr>   
                    <?php
                   }
                   ?>
            </table>
        </form>
    </center>
  </body>
</html>
