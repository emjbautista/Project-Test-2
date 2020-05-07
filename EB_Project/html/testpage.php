<?php
    session_start();

    if(isset($_SESSION['User']))
    {
        echo ' Welcome ' . $_SESSION['User'].'<br/>';
        echo '<a href="logout.php?logout">Logout</a>';
    }
    else
    {
        header("location:index.php");
    }

?>


<!DOCTYPE html>
<html>
   <head>
      <title>HTML Links</title>
   </head>

   <body>
      <h1>Reach us here</h1>
      <a href="/testpage.php">Contact</a>
   </body>
</html>