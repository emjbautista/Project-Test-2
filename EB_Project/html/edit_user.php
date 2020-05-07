<?php 

require_once("connection.php");

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

?>


<?php 

    require_once("connection.php");
    $ID = $_GET['GetID'];
    $query = " select * from employee where ID='".$ID."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $ID = $row['ID'];
        $UName = $row['UName'];
        $Pass = $row['Pass'];
        $Permission = $row['Permission'];
    }



}
	
	 else
	{
		header("location:permission_error.php");
			
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
                            <h3 class="bg-success text-white text-center py-3"> Update User Information</h3>
                        </div>
                        <div class="card-body">
						
						
                            <form action="update_user.php?ID=<?php echo $ID ?>" method="post">
                                <label for="Ticketnumber">Username</label><br>
                                <input type="text" class="form-control mb-2" value="<?php echo $UName ?>" name="UName">
								<label for="Ticketnumber">Password</label><br>
                                <input type="text" class="form-control mb-2" value="<?php echo $Pass ?>" name="Pass">
								<label for="Ticketnumber">Permission Group (Administrator/Technician)</label><br>
								<input type="text" class="form-control mb-2" value="<?php echo $Permission ?>" name="Permission">
								<button class="btn btn-primary" name="update">Update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>