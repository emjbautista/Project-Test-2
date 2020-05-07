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
    $query = " select * from employee ";
    $result = mysqli_query($con,$query);
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                                <td> ID </td>
                                <td> User Name </td>
                                <td> Permission Group </td>
                                <td> Edit  </td>
                                <td> Delete </td>
                            </tr>
 
                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $ID = $row['ID'];
                                        $UName = $row['UName'];
                                        $Permission = $row['Permission'];
                                        
                            ?>
                                    <tr>
                                        <td><?php echo $ID ?></td>
                                        <td><?php echo $UName ?></td>
                                        <td><?php echo $Permission ?></td>
                                        
                                        <td><a href="edit_user.php?GetID=<?php echo $ID ?>">Edit</a></td>
                                        <td><a href="delete_user.php?Del=<?php echo $ID ?>">Delete</a></td>
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