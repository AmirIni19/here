<?php
$conn = mysqli_connect("localhost", "root", "", "staff");
$sql = "SELECT * FROM college";
$run = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>CSS Responsive Table Layout</title>

  <link rel="stylesheet" href="css/style.css">


</head>

<body>

  <div class="wrapper">

    <div class="table">

      <div class="row header blue">
        <div class="cell">
          First Name
        </div>
        <div class="cell">
          Last Name
        </div>
        <div class="cell">
          Gender
        </div>
        <div class="cell">
          Address
        </div>
        <div class="cell">
          Email Address
        </div>
      </div>

      <?php
      while ($result = mysqli_fetch_assoc($run)) {
        ?>
        <div class="row">
          <div class="cell">
            <?php echo $result['first_name']; ?>
          </div>
          <div class="cell">
          <?php echo $result['last_name']; ?>
          </div>
          <div class="cell">
          <?php echo $result['gender']; ?>
          </div>
          <div class="cell">
          <?php echo $result['address']; ?>
          </div>
          <div class="cell">
          <?php echo $result['email']; ?>
          </div>
        </div>
      <?php } ?>

    </div>

  </div>


</body>

</html>