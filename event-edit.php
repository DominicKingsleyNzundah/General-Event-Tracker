<?php
//start session and require connection to the database for edits to be possible.
session_start();
require 'dbcon.php';
?>

<?php include('includes/header.php');?>
  <div class="container mt-5">
    <?php include('message.php');?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>   Edit Event
                        <a href="index.php" class="btn btn-danger float-right"> BACK </a>
                    </h4>
                </div>
                <div class="card-body">
                    <?php
                    if(isset($_GET['id']))
                    {
                         $ident= mysqli_real_escape_string($con, $_GET['id']);
                         $query="SELECT * FROM events WHERE event_id='$ident' ";
                         $query_run=mysqli_query($con,$query);
                        
                         if(mysqli_num_rows($query_run)>0)
                         {
                            $event=mysqli_fetch_array($query_run);
                            //print_r($event); for testing edits.
                            ?>
                            <form action = "code-edit.php" method="POST">
                                <div class="mb-3">
                                    <label>Event Title </label>
                                    <input type="text" name="event_title" value ="<?=$event['event_title'];?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Event ID</label>
                                    <input type="text" name="event_id" value="<?=$event['event_id'];?>"  class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Date</label>
                                    <input type="date" name="event_date" value="<?=$event['event_date'];?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Venue </label>
                                    <input type="text" name="venue" value="<?=$event['venue'];?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Description (More details about the event)</label>
                                    <input type="text" name="descript" value="<?=$event['descript'];?>"  class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <button type="submit"class="btn btn-primary" name ="update_event"> Update Event</button>
                                </div>
                            </form>

                            <?php

                         }
                         else
                         {
                            echo "<h4>No Event with such ID Found ! </h4>";
                         }
                    }
                    ?>

                    

                    
                </div>

            </div>

        </div>

    </div>
  </div>
  <?php include('includes/footer.php');?>