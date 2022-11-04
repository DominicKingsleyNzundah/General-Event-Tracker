<?php
session_start();
?>
<?php include('includes/header.php');?>

  <div class="container mt-5">
    <?php include('message.php');?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>   Add New Event
                        <a href="index.php" class="btn btn-danger float-right"> BACK </a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action = "code-create.php" method="POST">
                        <div class="mb-3">
                            <label>Event Title </label>
                            <input type="text" name="event_title" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Event ID</label>
                            <input type="text" name="event_id" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Date</label>
                            <input type="date" name="event_date" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Venue </label>
                            <input type="text" name="venue" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Description (More details about the event)</label>
                            <input type="text" name="descript" class="form-control" >
                        </div>
                        <div class="mb-3">
                            <button type="submit"class="btn btn-primary" name ="save_event"> Save Event</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>

    </div>
  </div>
  <?php include('includes/footer.php');?>