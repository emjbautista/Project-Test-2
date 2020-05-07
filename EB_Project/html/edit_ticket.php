<?php
    session_start();

    if(isset($_SESSION['User']))
    {
        echo '<a style="color:white"> Welcome ' .$_SESSION['User'].'</a> - <a href="welcome.php"> Home</a> - <a href="logout.php?logout">Logout</a>';
		
    }
    else
    {
        header("location:index.php");
    }

?>


<?php 

    require_once("connection.php");
    $Ticketnumber = $_GET['GetID'];
    $query = " select * from tickets where Ticketnumber='".$Ticketnumber."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
										$Ticketnumber = $row['Ticketnumber'];
                                        $Boxnumber = $row['Boxnumber'];
                                        $Date = $row['Date'];
                                        $Techassigned = $row['Techassigned'];
										$Location  = $row['Location'];
										$Reportedproblem = $row['Reportedproblem'];
										$Resolution = $row['Resolution'];
										$Timestart = $row['Timestart'];
										$Timeend = $row['Timeend'];
										$Followup = $row['Followup'];
										$Status = $row['Status'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="css/bootstrap.css"/>
    <title>Document</title>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3"> Update Ticket Information</h3>
                        </div>
                        <div class="card-body">
						
											
                            <form action="update_ticket.php?ID=<?php echo $Ticketnumber ?>" method="post">
								<label for="Ticketnumber">Ticketnumber</label><br>
                                <input type="text" class="form-control mb-2" value="<?php echo $Ticketnumber ?>" name="Ticketnumber">
								<label for="Boxnumber">Boxnumber</label><br>
                                <input type="text" class="form-control mb-2" value="<?php echo $Boxnumber  ?>" name="Boxnumber">
								<label for="Date">Date</label><br>
								<input type="text" class="form-control mb-2" value="<?php echo $Date ?>" name="Date">
								<label for="Techassigned">Techassigned</label><br>
                                <input type="text" class="form-control mb-2" value="<?php echo $Techassigned ?>" name="Techassigned">
								<label for="Location">Location</label><br>
								<input type="text" class="form-control mb-2" value="<?php echo $Location ?>" name="Location">
								<label for="Reportedproblem">Reportedproblem</label><br>
								<input type="text" class="form-control mb-2" value="<?php echo $Reportedproblem ?>" name="Reportedproblem">
								<label for="Resolution">Resolution</label><br>
								<input type="text" class="form-control mb-2" value="<?php echo $Resolution ?>" name="Resolution">
								<label for="Timestart">Timestart</label><br>
								<input type="text" class="form-control mb-2" value="<?php echo $Timestart ?>" name="Timestart">
								<label for="Timeend">Timeend</label><br>
								<input type="text" class="form-control mb-2" value="<?php echo $Timeend ?>" name="Timeend">
								<label for="Followup">Followup</label><br>
								<input type="text" class="form-control mb-2" value="<?php echo $Followup ?>" name="Followup">
								<label for="Status">Status</label><br>
								<input type="text" class="form-control mb-2" value="<?php echo $Status  ?>" name="Status">
								<button class="btn btn-primary" name="update">Update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>