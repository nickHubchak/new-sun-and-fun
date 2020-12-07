<?php
session_start();
include('config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>View Admin</title>

  <!--Favicon-->
  <link rel="icon" type="image/png" href="http://localhost/new-sun-and-fun/media\Stock-images\yellow_beach-chair-and-umbrella_icon-icons.com_59553.ico" />

  <!--BootstrapCDN-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


  <link rel="stylesheet" type="text/css" href="view-admin.css">
  <link rel="stylesheet" type="text/css" href="dashboard.css">

</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
      </div>
      <div class=" header col-md-4">
        <center>
          <h1>View/Delete Vendor Requests</h1>
        </center>
      </div>
      <div class="col-md-2">

      </div>
      <div class="col-md-2">
        <a href="http://localhost/new-sun-and-fun/admin-site/dashboard/dashboard.php">
          <button class="btn btn-dark">Back to Dashboard</button>
        </a>
      </div>
    </div>
    <div class="row">
      <div class=" my_form col-md-12">
        <form action="delete-vendor-requests.php" method="POST">
          <center>
            <h1>Delete A Request</h1>
            <h3>Enter an ID to delete that request from the database</h3>
            <br>
            <label for="vendorId">ID:</label>
            <fieldset>
              <input type="number" name="IdDelete" placeholder="Enter an ID to delete" required>
            </fieldset>
            <br>
            <fieldset>
              <input type="submit" name="submit" Value="Delete Request">
            </fieldset>
            <br>
          </center>
        </form>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="my_form col-md-12">
        <div class="table table-hover table-borderless table-responsive">
          <thead></thead>
          <center>
            <h1>Vendor Request List</h1>
            <p>From here you can see people who requested to sell their products to Sun N FUn.</p>
          </center>
          <table class="view col-md-12">
            <thead class="thead-dark">
              <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Description</th>
              </tr>
            </thead>

            <?php
            $query = "SELECT vendor_id, name, email, phone, description FROM vendor";
            $result = $con->query($query);
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["vendor_id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["phone"] . "</td><td>" . $row["description"] . "</td></tr>";
              }
              echo "</table>";
            } else {
              echo "Wow, looking pretty empty in here. No requests found.";
            }
            $con->close();
            ?>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>

</html>