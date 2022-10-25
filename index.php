<?php
  session_start();
  require 'dbcon.php';
  //require_once 'includes/auth_check.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/csss/styles.css">

    <title>General Event Tracker </title>
  </head>
  <body>

    <div class="container mt-4">
    <img  src="assets/img/get_icon.png" style="height: 195px;width: 255px; margin-left:400px"/>
    <?php include('message.php');?>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>Event Details
                <a href="event-create.php" class="btn btn-primary float-right" >Add New Event</a>      
              </h4>
              <!--  ****filtering functionality to be added here in future:  Dominic Nzundah
           
              <label style="margin-left:170px;"> Filter Events From :  <input type="date" name="event_date">   To: 
               <input type="date" name="event_date">  <button class="btn btn-success btn-sm">Filter</button></label> 
              -->
            </div>
            <div class="card-bordy">
              <table class="table table-bordered table-striped">
                <thread>
                  <tr>
                    <th>Event Title</th>
                    <th>Event Identifier</th>
                    <th>Event Date</th>
                    <th>Venue</th>
                    <th>Descriptions</th>
                    <th style="width:200px">Action</th>
                  </tr>
                </thread>
                <tbody>
                  <?php
                   $query="SELECT * FROM events";
                   $query_run=mysqli_query($con,$query);

                   if(mysqli_num_rows($query_run)>0){
                    foreach($query_run as $event ){
                     ?>
                     <tr>
                          <td><?= $event['event_title']; ?></td>
                          <td><?= $event['event_id']; ?></td>
                          <td><?= $event['event_date']; ?></td>
                          <td><?= $event['venue']; ?></td>
                          <td><?= $event['descript']; ?></td>
                          <td>
                            <a href="event-view.php ?id=<?= $event['event_id']?>" class="btn btn-info btn-sm ">View</a>
                            <a href="event-edit.php ?id=<?= $event['event_id']?>" class="btn btn-success btn-sm">Edit</a>

                            <form action="code-delete.php" method="POST"class="d-inline">
                              <button type="submit" name="delete-event" value=<?= $event['event_id']?> class="btn btn-danger btn-sm">Delete</button>
                            </form>
                          </td>
                     </tr>
                     <?php

                    }
                   }else {
                    echo "<h5> No Record Found ! </h5>";
                   }
                  ?>

                </tbody>
              </table>
            </div>
          </div>

        </div>
       
      </div>

    </div>
    <!-- Optional JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   </body>
</html>