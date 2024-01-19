<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class "col-md-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Elector's Data</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                            <form action=" " method="POST">
                                <div class="form-group">
                                    <input type="text" name="get_AadharNumber" class="form-control" placeholder="Enter AadharNumber" required>
                                </div>
                                <button type="submit" name="search_by_AadharNumber" class="btn btn primary">search</button>
                            </form>
                            </div>
                        </div>
                        <?php
                        $connection=mysqli_connect("localhost","root","","project");
                        if(isset($_POST["search_by_AadharNumber"]))
                        {
                            $id=$_POST["get_AadharNumber"];
                            $query="SELECT  * FROM voters where Aadharnumber='$id' ";
                            $query_run=mysqli_query($connection,$query);
                          ?>
                               <div class="table-responsive">
                                 <table class="table table-bordered">
                                  <thead>
                                    <tr>
                                      <th scope="col"><b>Electors Name</b></th>
                                      <th scope="col">Aadhar Number</th>
                                      <th scope="col">Gender</th>
                                      <th scope="col">Date of Birth</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                     <?php
                                        if(mysqli_num_rows($query_run)>0) 
                                        {
                                          while($row = mysqli_fetch_array($query_run))
                                         {
                                     ?>
                                      <tr>
                                        <td><?php echo $row["Elector's Name"]; ?></td>
                                        <td><?php echo $row["Aadharnumber"]; ?></td>
                                        <td><?php echo $row["Gender"]; ?></td>
                                        <td><?php echo $row["Date of Birth"]; ?></td>
                                        <td><a href="s2.php?Aadharnumber=<?php  echo $row['Aadharnumber']; ?>"><center><h3><button >Next</button></h3></center>
                                      
                                        
                                      <?php
                                        }
                                       }
                                       else
                                       {
                                          ?>
                                            <tr>
                                               <td colspan="6">No Record Found</td>
                                            </tr>
                                        <?php
                                         }
                                        ?> 
                                  </tbody>
                                  </table>
                                </div> 
                          <?php
                                                   
                       }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
                      </br>
    <center><a href="sb.html">
      <button style="background-color:blue; color:white; width:500; height:200;">HELP</button>
    </a></center>
   </br>
    <marquee><img src="https://website-verovoting.azureedge.net/wp-content/uploads/2021/01/voting-channels-1.jpg" height="300" width="500">
    <img src="https://img.freepik.com/premium-vector/hand-casting-vote-india-election-voting-conchept-ballot-box-india-election_667085-131.jpg?w=2000" height="300" width="500">
    <img src="https://img.freepik.com/free-vector/flat-design-international-day-democracy-background-with-voting_23-2148607147.jpg?w=2000" height="300" width="500">
    <img src="https://akm-img-a-in.tosshub.com/businesstoday/images/story/201905/voting-o_660_050619073027.jpg" height="300" width="500">
    </body>
</html>
