<?php 

    require_once("connection.php");

    if(isset($_POST['update']))
    {
			$Boxnumber = $_GET['ID'];
            $Boxlocation = $_POST['Boxlocation'];
            $Boxtype = $_POST['Boxtype'];
			$Connectiontype = $_POST['Connectiontype'];

        $query = " update boxes set Boxnumber = '".$Boxnumber."', Boxlocation= '".$Boxlocation."',Boxtype = '".$Boxtype."',Connectiontype = '".$Connectiontype."' where Boxnumber='".$Boxnumber."'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:view_boxes.php");
        }
        else
        {
            echo ' Please Check Your Query ';
			echo $query;
        }
    }
    else
    {
        header("location:view_boxes.php");
    }


?>