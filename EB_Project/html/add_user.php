<?php
	require_once('connection.php');
	
    session_start();
	
	
	
	$query_permission="select Permission from employee where UName='".$_SESSION['User']."'";
	
	$result_permission=mysqli_query($con,$query_permission);
	
	$permission = mysqli_fetch_array($result_permission);
		
	if($permission[0]=="administrator")
	
	{

    if(isset($_SESSION['User']))
    {
        echo '<a style="color:white"> Welcome ' .$_SESSION['User'].'</a> - <a href="welcome.php"> Home</a> - <a href="logout.php?logout">Logout</a>';
		
    }
  else
    {
        header("location:index.php");
    }

	}
	
	 else
	{
		header("location:permission_error.php");
			
	}
	
	echo '<a style="color:white">  Group: '.$permission[0].' </a> ';
	
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
                            <h3 class="bg-success text-white text-center py-3"> User Creation Form</h3>
                        </div>
                        <div class="card-body">
   
                            <form action="insert_user.php" method="post">
                                <label for="Ticketnumber">Username</label><br>
                                <input type="text" class="form-control mb-2" value="<?php echo $UName ?>" name="UName">
								<label for="Ticketnumber">Password</label><br>
                                <input type="text" class="form-control mb-2" value="<?php echo $Pass ?>" name="Pass">
								<label for="Ticketnumber">Permission Group (Administrator/Technician)</label><br>
								<input type="text" class="form-control mb-2" value="<?php echo $Permission ?>" name="Permission">
                                <button class="btn btn-primary" name="submit">Submit</button>
                            </form>
 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>