<?php

    session_start();

    if(isset($_SESSION['User']))
    {
        echo ' Currently Logged in as: ' . $_SESSION['User'].'<br/><br/><br/>';
        echo '<a href="logout.php?logout">Logout</a>';
    }
    else
    {
        header("location:index.php");
    }


if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `boxes` WHERE CONCAT(`Boxnumber`, `Boxlocation`, `Boxtype`, `Connectiontype`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `boxes`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("db", "root", "it635", "project");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        
        <form action="boxsearch.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            
            <table>
                <tr>
                    <th>Boxnumber</th>
                    <th>Boxlocation</th>
                    <th>Boxtype</th>
                    <th>Connectiontype</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['Boxnumber'];?></td>
                    <td><?php echo $row['Boxlocation'];?></td>
                    <td><?php echo $row['Boxtype'];?></td>
                    <td><?php echo $row['Connectiontype'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</html>
