<?php 

    require_once("connection.php");

    if(isset($_POST['update']))
    {
			$Ticketnumber = $_GET['ID'];
            $Boxnumber = $_POST['Boxnumber'];
			$Date = $_POST['Date'];
            $Techassigned = $_POST['Techassigned'];
			$Location = $_POST['Location'];
			$Reportedproblem = $_POST['Reportedproblem'];
			$Resolution = $_POST['Resolution'];
			$Timestart = $_POST['Timestart'];
			$Timeend = $_POST['Timeend'];
			$Followup = $_POST['Followup'];
			$Status = $_POST['Status'];

        $query = " update tickets set Ticketnumber = '".$Ticketnumber."', Boxnumber ='".$Boxnumber."',Date = '".$Date."',Techassigned = '".$Techassigned."',Location = '".$Location."',Reportedproblem = '".$Reportedproblem."',Resolution = '".$Resolution."',Timestart = '".$Timestart."',Timeend = '".$Timeend."',Followup = '".$Followup."',Status = '".$Status."' where Ticketnumber='".$Ticketnumber."'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:view_tickets.php");
        }
        else
        {
            echo ' Please Check Your Query ';
			echo $query;
        }
    }
    else
    {
        header("location:view_tickets.php");
    }


?>