<?php
  session_start();
  require 'dbcon.php';
  //require_once 'includes/auth_check.php';

?>

<?php include('includes/header.php');?>

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
    <?php include('includes/footer.php');?>
