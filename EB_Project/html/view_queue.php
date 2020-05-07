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
    $query = " select * from tickets where Techassigned = '".$_SESSION['User']."' ";
    $result = mysqli_query($con,$query);
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="css/bootstrap.css"/>
    <title>View Records</title>
</head>
<body class="bg-dark">
 
        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered">
                            <tr>
                                <td> Ticketnumber </td>
                                <td> Boxnumber </td>
                                <td> Date </td>
                                <td> Techassigned </td>
                                <td> Location  </td>
                                <td> Reportedproblem </td>
								<td> Resolution  </td>
								<td> Timestart  </td>
								<td> Timeend  </td>
								<td> Followup  </td>
								<td> Status  </td>
								<td> Edit  </td>
								<td> Delete  </td>
                            </tr>
 
                            <?php 
                                    
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
                            ?>
                                    <tr>
                                        <td><?php echo $Ticketnumber ?></td>
                                        <td><?php echo $Boxnumber ?></td>
                                        <td><?php echo $Date ?></td>
										<td><?php echo $Techassigned ?></td>
                                        <td><?php echo $Location ?></td>
										<td><?php echo $Reportedproblem  ?></td>
										<td><?php echo $Resolution ?></td>
										<td><?php echo $Timestart ?></td>
										<td><?php echo $Timeend ?></td>
										<td><?php echo $Followup ?></td>
										<td><?php echo $Status  ?></td>
                                        <td><a href="edit_ticket.php?GetID=<?php echo $Ticketnumber ?>">Edit</a></td>
                                        <td><a href="delete_ticket.php?Del=<?php echo $Ticketnumber ?>">Delete</a></td>
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   
 
                        </table>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>