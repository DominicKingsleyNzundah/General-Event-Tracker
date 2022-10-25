<?php
session_start();
require 'dbcon.php';

//update after edits 
if(isset($_POST['update_event']))
{
    $event_title = mysqli_real_escape_string($con,$_POST['event_title']);
    $event_id = mysqli_real_escape_string($con,$_POST['event_id']);
    $event_date = mysqli_real_escape_string($con,$_POST['event_date']);
    $venue = mysqli_real_escape_string($con,$_POST['venue']);
    $descript = mysqli_real_escape_string($con,$_POST['descript']);

    $query="UPDATE  events SET  event_title='$event_title', event_id='$event_id', event_date='$event_date' ,
    venue='$venue',descript='$descript' WHERE event_id='$event_id' ";

    $query_run=mysqli_query($con,$query);

    if( $query_run){
        $_SESSION['message']="Event updated succsfully !";
        header("Location: index.php");
        exit(0);

    }
    else{
        $_SESSION['message']="Event NOT updated !";
        header("Location: index.php");
        exit(0);

    }
}
?>