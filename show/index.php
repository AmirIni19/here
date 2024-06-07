<?php
if(isset($_POST['btn'])){
    $user_name = $_POST['user_name'];
    $connect = mysqli_connect(hostname:'localhost', username: 'root', password: '', database: 'user_site');
    $sql = "INSERT INTO user_add(name) VALUES('$user_name')" ;
    $run=mysqli_query($connect,$sql);
}
    ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Cart</title>
</head>

<body>

    <form action="" method="post">
        <input type="text" id="" name="user_name">
        <!-- <input type="text" id="" name="last_name">
        <input type="email" id="" name="email">
        <input type="number" id="" name="phone"> -->

        <br><br>

        <button name="btn">
            send
        </button>

    </form>

</body>

</html>