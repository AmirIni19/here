<!DOCTYPE html>
<html lang="en">

<head>
	<title>کارت شناسایی</title>
</head>
<link rel="stylesheet" href="css/style.css">


<body>
	<center class="center">

		<div class="forms">
			<h1>اطلاعات خود را پر کنید</h1>

			<form action="insert.php" method="post">

				<p>
					<input required type="text" name="username" id="Username" placeholder="نام و نام خانوادگی">
				</p>

				<p>
					<input required type="text" name="nationality" id="Nationality" placeholder="ملیت">
				</p>

				<p>
					<input required type="text" name="national_code" id="National_code" placeholder="کدملی / گذرنامه">
				</p>

				<p>
					<input required type="text" name="position" id="Position" placeholder="سمت">
				</p>

				<p>
					<input style="display: none;" type="text" name="email" id="emailAddress" placeholder="تست">
				</p>

				<input class="submit" type="submit" value="ثبت اطلاعات">

			</form>
		</div>

	</center>

</body>

</html>