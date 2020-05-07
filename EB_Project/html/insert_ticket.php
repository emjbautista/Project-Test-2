<?php
 
    require_once("connection.php");
	
	
    if(isset($_POST['submit']))
    {
        if(empty($_POST['Boxnumber']))
        {
            echo ' Please Fill in Box Number! (Required for Ticket Creation) ';
        }
        else
        {
            $Boxnumber = $_POST['Boxnumber'];
			$Date = "SYSDATE()";
            $Techassigned = $_POST['Techassigned'];
			$Location = $_POST['Location'];
			$Reportedproblem = $_POST['Reportedproblem'];
			$Resolution = $_POST['Resolution'];
			$Timestart = $_POST['Timestart'];
			$Timeend = $_POST['Timeend'];
			$Followup = $_POST['Followup'];
			$Status = $_POST['Status'];
 
            $query = " insert into tickets (Boxnumber,Date,Techassigned,Location,Reportedproblem,Resolution,Timestart,Timeend,Followup,Status) values('$Boxnumber',NOW(),'$Techassigned','$Location','$Reportedproblem','$Resolution','$Timestart','$Timeend','$Followup','$Status')";
            $result = mysqli_query($con,$query);
 
            if($result)
            {
                header("location:view_tickets.php");
            }
            else
            {
                echo '  Please Check Your Query! ';
				echo '  Either Date format is wrong or Box does not Exist! ';
				echo $query;
            }
        }
    }
    else
    {
        header("location:index.php");
    }
 
	
	
	
	
	
 
 
?>