<?php 

    require_once("connection.php");

    if(isset($_POST['update']))
    {
			$ID = $_GET['ID'];
            $UName = $_POST['UName'];
            $Pass = $_POST['Pass'];
			$Permission = $_POST['Permission'];

        $query = " update employee set ID = '".$ID."', UName= '".$UName."',Pass = '".$Pass."',Permission = '".$Permission."' where ID='".$ID."'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:view_users.php");
        }
        else
        {
            echo ' Please Check Your Query ';
			echo $query;
        }
    }
    else
    {
        header("location:view_users.php");
    }


?>