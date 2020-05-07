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
            $Ticketnumber = $_GET['Del'];
            $query = "delete from tickets where Ticketnumber='".$Ticketnumber."'";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:view_tickets.php");
            }
            else
            {
                echo ' Please Check Your Query ';
            }
        }
        else
        {
            header("location:view_tickets.php");
        }


}
	
	 else
	{
		header("location:permission_error.php");
			
	}
?>