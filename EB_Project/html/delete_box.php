<?php 

require_once("connection.php");

session_start();


$query_permission="select Permission from employee where UName='".$_SESSION['User']."'";
	
	$result_permission=mysqli_query($con,$query_permission);
	
	$permission = mysqli_fetch_array($result_permission);
		
	if($permission[0]=="administrator")
	
	{


        if(isset($_GET['Del']))
        {
            $Boxnumber = $_GET['Del'];
            $query = " delete from boxes where Boxnumber = '".$Boxnumber."'";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:view_boxes.php");
            }
            else
            {
                echo ' Please Check Your Query - This box has tickets tied to it. Delete all tickets first before deleting this box. ';
            }
        }
        else
        {
            header("location:view_boxes.php");
        }


}
	
	 else
	{
		header("location:permission_error.php");
			
	}
?>