<?php
$conn = mysqli_connect("localhost", "root", "", "staff");
$sql = "SELECT * FROM college";
$run = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>کارت شناسایی</title>
</head>

<link rel="stylesheet" href="css/style.css">
<script src="js/script.js"></script>

<body class="my_body">

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = isset($_POST['usernamee']) ? $_POST['usernamee'] : '';
        $password = isset($_POST['passwordd']) ? $_POST['passwordd'] : '';

        if ($username === '1' && $password === '2') {
            include 'output.php'; // Include the hidden content file
        } else {
            echo '
            <div  style="
                width: 100%;
                display: flex;
                flex-direction: column;
                flex-wrap: wrap;
                align-content: space-around;
                justify-content: center;
                align-items: flex-start;
                height: 90vh;
                color:white;
                font-size:20px;
            ">
           نام کاربری یا رمز عبور اشتباه است
            </div>
            ';
        }
    } else {
        echo '
        <div class="main_form">
            <form class="my_form" method="post" style="">
                <label class="my_label" for="usernamee">نام کاربری:</label>
                <input class="my_input" type="text" id="usernamee" name="usernamee">

                <label class="my_label" for="passwordd">رمزعبور:</label>
                <input class="my_input" type="password" id="passwordd" name="passwordd">
            
                <button class="my_button" type="submit">ورود</button>
            </form>
        </div>
        ';
    }
    ?>

</body>

</html>