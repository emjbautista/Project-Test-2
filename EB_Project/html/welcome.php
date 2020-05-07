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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="css/bootstrap.css"/>
    <title>Registration Form</title>
</head>
<body class="bg-dark">
 
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3"> Main Menu</h3>
                        </div>
                        <div class="card-body">
 
								<a href="/view_boxes.php">View/Edit/Delete Boxes</a><br>
								<a href="/add_box.php">Add Box</a><br>
								<a href="/view_queue.php">View Your Queue</a><br>
								<a href="/view_tickets.php">View/Edit/Delete Tickets</a><br>
								<a href="/add_ticket.php">Add Ticket</a><br>
								<a href="/view_users.php">View/Edit/Delete Users</a><br>
								<a href="/add_user.php">Add User</a><br>
								                                
                            </form>
 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>