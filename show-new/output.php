<?php
$conn = mysqli_connect("localhost", "root", "", "staff");
$sql = "SELECT * FROM college";
$run = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>خروجی فرم ها</title>

  <link rel="stylesheet" href="css/style.css">
  <script src="js/script.js"></script>


</head>

<body style="background: #2b2b2b;">

  <div id="hidden_content" style="display: none;">
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
          $info = [
            'username' => $result['username'],
            'nationality' => $result['nationality'],
            'national_code' => $result['national_code'],
            'position' => $result['position'],
          ];

          $info = json_encode($info);
          // echo $info;
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
          cursor: pointer; " onclick='printPage(<?php echo $info; ?>)'> چاپ </button>
            </div>

          </div>
        <?php } ?>

      </div>

      <script>
        function printPage(info) {
          console.log(info);
          // return;
          var username = document.getElementById("item1").innerHTML;
          var nationality = document.getElementById("item2").innerHTML;
          var national_code = document.getElementById("item3").innerHTML;
          var position = document.getElementById("item4").innerHTML;


          // اون باکسی که باید پرینت گرفته شه
          var mycontent = document.getElementById("mybox").innerHTML =
            `
            <div style="display:flex; justify-content:center; align-items:center; flex-direction: column;">
            <div class="show_img">
                 <img src="https://pooyaserver.com/wp-content/uploads/2024/06/1.png"  alt="کارت شناسایی" title="کارت شناسایی">
            
                 <strong class="item1">
                 ${info.username}
                 </strong>
            
                 <strong class="item2">
                 ${info.nationality}
                 </strong>
            
                 <strong class="item3">
                 ${info.national_code}
                 </strong>
            
                 <strong class="item4">
                 ${info.position}
                 </strong>
            </div>
            
              
            <button onclick="window.print();" class="print_info" style="  cursor: pointer;">
            چاپ کارت
            </button>
            
            </div>
            `

          // فراخوانی هد صفحه فعلی در صفحه پرینت
          var head = document.getElementsByTagName("head")[0].innerHTML;

          // ایجاد یک صفحه / پنجره جدید
          var myWindow = window.open('', '', '');

          // ریختن محتوایی که باید چاپ شه در صفحه چاپ
          myWindow.document.write("<html>   <head>   <p class='mysite'>" + "  ‌  " + "</p>" + head + "  </head>  <body>   <div class='mybox'>" + mycontent + "</div>     </body> </html> ");

        }
      </script>


      <div class="mybox">
        <div id="mybox" style="display:none;">

        </div>
      </div>

    </div>
  </div>

  <script>
    function showHiddenContent() {
      document.getElementById("hidden_content").style.display = "block";
    }
    showHiddenContent();
  </script>




</body>

</html>