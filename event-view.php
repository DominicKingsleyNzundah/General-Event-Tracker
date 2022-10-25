<?php
require 'dbcon.php';//connect to db to view data
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>General Event Tracker : Edit View</title>
  </head>
  <body>

  <div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>  View  Event Details
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
                            ?>
                                <div class="mb-3">
                                    <label style="font-weight:bold">Event Title </label>
                                    <p>
                                    <?=$event['event_title'];?>
                                    </p>
                                </div>

                                <div class="mb-3">
                                    <label style="font-weight:bold">Event ID</label>
                                    <p>
                                    <?=$event['event_id'];?>
                                    </p>
                                </div>

                                <div class="mb-3">
                                    <label style="font-weight:bold">Date</label>
                                    <p>
                                    <?=$event['event_date'];?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label style="font-weight:bold">Venue </label>
                                    <p>
                                    <?=$event['venue'];?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label style="font-weight:bold">Description (More details about the event)</label>
                                    <p>
                                    <?=$event['descript'];?>
                                    </p>
                                </div>
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

    <!-- Optional JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  </body>
</html>