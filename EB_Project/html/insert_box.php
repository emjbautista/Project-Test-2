<?php
 
    require_once("connection.php");
	
	
    if(isset($_POST['submit']))
    {
        if(empty($_POST['Boxnumber']) || empty($_POST['Boxlocation']) || empty($_POST['Boxtype']) || empty($_POST['Connectiontype']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
            $Boxnumber = $_POST['Boxnumber'];
            $Boxlocation = $_POST['Boxlocation'];
            $Boxtype = $_POST['Boxtype'];
			$Connectiontype = $_POST['Connectiontype'];
 
            $query = " insert into boxes (Boxnumber,Boxlocation,Boxtype,Connectiontype) values('$Boxnumber','$Boxlocation','$Boxtype','$Connectiontype')";
            $result = mysqli_query($con,$query);
 
            if($result)
            {
                header("location:view_boxes.php");
            }
            else
            {
                echo '  Please Check Your Query, two different boxes might not have the same Box Number! ';
            }
        }
    }
    else
    {
        header("location:index.php");
    }
 
	
	
	
	
	
 
 
?>