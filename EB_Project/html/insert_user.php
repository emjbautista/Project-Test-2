<?php
 
    require_once("connection.php");
	
	
    if(isset($_POST['submit']))
    {
        if(empty($_POST['UName']))
        {
            echo ' Please Fill in Username! (Required for User Creation) ';
        }
        else
        {
            $UName = $_POST['UName'];
			$Pass = $_POST['Pass'];
			$Permission = $_POST['Permission'];
			 
            $query = " insert into employee (UName,Pass,Permission) values('$UName','$Pass','$Permission')";
            $result = mysqli_query($con,$query);
 
            if($result)
            {
                header("location:view_users.php");
            }
            else
            {
                echo '  Please Check Your Query! ';
				echo '  Opss! Something went wrong! Contact the non-exesting helpdesk composed by me!';
				echo $query;
            }
        }
    }
    else
    {
        header("location:index.php");
    }
 
	
	
	
	
	
 
 
?>