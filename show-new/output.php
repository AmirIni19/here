<?php
$conn = mysqli_connect("localhost", "root", "", "staff");
$sql = "SELECT * FROM college";
$run = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Output</title>

  <link rel="stylesheet" href="css/style.css">
  <script src="js/script.js"></script>


</head>

<body style="background: #2b2b2b;">

  <div class="wrapper">

    <div class="table">

      <div class="row header blue">
        <div class="cell">
          نام و نام خانوادگی
        </div>
        <div class="cell">
          ملیت
        </div>
        <div class="cell">
          کد ملی / گذرنامه
        </div>
        <div class="cell">
          سمت
        </div>
        <div class="cell">
          چاپ اطلاعات
        </div>

      </div>

      <?php
      while ($result = mysqli_fetch_assoc($run)) {
        ?>
        <div class="row">
          <div class="cell" id="item1">
            <?php echo $result['username']; ?>
          </div>

          <div class="cell" id="item2">
            <?php echo $result['nationality']; ?>
          </div>

          <div class="cell" id="item3">
            <?php echo $result['national_code']; ?>
          </div>

          <div class="cell" id="item4">
            <?php echo $result['position']; ?>
          </div>

          <div class="cell">
            <button style="
              border: 1px solid #939393;
              border-radius: 12px;
              padding: 3px 21px;
              cursor: pointer; " onclick="printPage()"> چاپ </button>
          </div>

        </div>
      <?php } ?>

  </div>




  <div class="mybox">
    <div id="mybox" style="display:none;">

    </div>
  </div>

  
</body>

</html>