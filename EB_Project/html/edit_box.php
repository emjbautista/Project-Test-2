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
    $Boxnumber = $_GET['GetID'];
    $query = " select * from boxes where Boxnumber='".$Boxnumber."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $Boxnumber = $row['Boxnumber'];
        $Boxlocation = $row['Boxlocation'];
        $Boxtype = $row['Boxtype'];
        $Connectiontype = $row['Connectiontype'];
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
                            <h3 class="bg-success text-white text-center py-3"> Update Box Information</h3>
                        </div>
                        <div class="card-body">
						
						<?php 

		if($Connectiontype == "Radio")
        {
            echo $Connectiontype;
        }

?>
						
                            <form action="update_box.php?ID=<?php echo $Boxnumber ?>" method="post">
                                <input type="text" class="form-control mb-2" value="<?php echo $Boxnumber ?>" name="Boxnumber">
                                <input type="text" class="form-control mb-2" value="<?php echo $Boxlocation ?>" name="Boxlocation">
                                <input type="text" class="form-control mb-2" value="<?php echo $Boxtype ?>" name="Boxtype">
								<label>Connection Type</label><br>
								<input type="radio"  id="Radio" name="Connectiontype" value="Radio" 
<?php 
		if($Connectiontype == "Radio")
        {
            echo ' Checked';
        }
?>>
								<label for="Radio">Radio</label><br>
								<input type="radio"  id="Fiber" name="Connectiontype" value="Fiber" 
<?php 
		if($Connectiontype == "Fiber")
        {
            echo ' Checked';
        }
?>>
								<label for="Radio">Fiber</label><br>
                                <button class="btn btn-primary" name="update">Update</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>