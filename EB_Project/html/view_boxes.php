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
    $query = " select * from boxes ";
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
                                <td> Box Number </td>
                                <td> Box Location </td>
                                <td> Box Type </td>
                                <td> Connection Type </td>
                                <td> Edit  </td>
                                <td> Delete </td>
                            </tr>
 
                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $Boxnumber = $row['Boxnumber'];
                                        $Boxlocation = $row['Boxlocation'];
                                        $Boxtype = $row['Boxtype'];
                                        $Connectiontype = $row['Connectiontype'];
                            ?>
                                    <tr>
                                        <td><?php echo $Boxnumber ?></td>
                                        <td><?php echo $Boxlocation ?></td>
                                        <td><?php echo $Boxtype ?></td>
                                        <td><?php echo $Connectiontype ?></td>
                                        <td><a href="edit_box.php?GetID=<?php echo $Boxnumber ?>">Edit</a></td>
                                        <td><a href="delete_box.php?Del=<?php echo $Boxnumber ?>">Delete</a></td>
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