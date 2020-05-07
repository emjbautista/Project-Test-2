<?php

    $con=mysqli_connect('db','root','it635','project');

    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
?>