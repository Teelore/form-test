<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta content="width=device-width, initial-scale=1" name="viewport" />
		<title>Ramsey MediaWorks Test Results</title>
		<link rel="stylesheet" href="css/main.css" />
	</head>
	<body>
		<h1>Ramsey MediaWorks Test Results</h1>
		<h2>You submitted the following data:</h2>
		<p>Name: <?php echo $_POST["fullName"]; ?></p>
		<p>Email: <?php echo $_POST["email"]; ?></p>
		<p>Phone Number: <?php echo $_POST["phone"]; ?></p>
		<p>City: <?php echo $_POST["city"]; ?></p>
		<p>State: <?php echo $_POST["state"]; ?></p>
		<p>Zip Code: <?php echo $_POST["zip"]; ?></p>
		<p>Have you been out of the country? <?php echo $_POST["country"]; ?></p>
		<p>What sports have you played? <?php echo $_POST["sports"]; ?></p>
	</body>
</html>
