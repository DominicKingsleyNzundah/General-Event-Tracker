<?php
session_start();
require 'dbcon.php';

//save record.
if(isset($_POST['save_event'])){
    $event_title = mysqli_real_escape_string($con,$_POST['event_title']);
    $event_id = mysqli_real_escape_string($con,$_POST['event_id']);
    $event_date = mysqli_real_escape_string($con,$_POST['event_date']);
    $venue = mysqli_real_escape_string($con,$_POST['venue']);
    $descript = mysqli_real_escape_string($con,$_POST['descript']);

    $query="INSERT INTO events(event_title,event_id,event_date,venue,descript) VALUES 
    ('$event_title','$event_id','$event_date','$venue','$descript')";

    $query_run = mysqli_query($con, $query);
    if($query_run){
        $_SESSION['message']="Event added succsfully !";
        header("Location: event-create.php");
        exit(0);
    }
    else{
        $_SESSION['message']="Event NOT created !";
        header("Location: event-create.php");
        exit(0);
    }



    }
?>