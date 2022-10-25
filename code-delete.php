<?php
session_start();//required for the message.php
require 'dbcon.php';//connect to db

//delete from the database 
if(isset($_POST['delete-event']))
{
    $event_id = mysqli_real_escape_string($con,$_POST['delete-event']);


    $query="DELETE FROM events  WHERE event_id='$event_id' ";
    $query_run=mysqli_query($con,$query);

    if( $query_run){
        $_SESSION['message']="Event deleted succsfully !";
        header("Location: index.php");
        exit(0);

    }
    else{
        $_SESSION['message']="Event NOT deleted !";
        header("Location: index.php");
        exit(0);

    }
}
?>