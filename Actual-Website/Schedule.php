<html>
    <head>
        <title>Schedule</title>
        <link rel = "stylesheet" href = "stylesheet.css">
    </head>
    <body>
		<nav>
			<a href="home.html"><h3>Home Page</h3></a>
			<a href="Accepted-Items.html"><h3>Accepted Items</h3></a>
			<a href="Different-Metals.html"><h3>Different Metals</h3></a>
			<a href="Freon-Info.html"><h3>Freon Info</h3></a>
			<a href="Mission.html"><h3>My Mission</h3></a>
			<a href="How-She-Recycles.html"><h3>How I Recycle</h3></a>
			<a href="Carbon-Footprint.html"><h3>Carbon Footprint</h3></a>
			<a href="Recycling-Info.html"><h3>Recycling Info</h3></a>
			<a href="Tools.html"><h3>Tools I Use</h3></a>
			<a href="Types-Wire.html"><h3>Types of Wire</h3></a>
			<a href="Schedule.php" class="curPage"><h3>Scheduling</h3></a>
		</nav>
        <div class="page-header">
			<img src="photos/Recycle.png" alt="" height="100px" width="100px">
			<div>
				<h1>Sue Lemke</h1>
				<p style="text-align: center;">Preventing waste, one scrap at a time</p>
			</div>
			<img src="photos/Recycle.png" alt="" height="100px" width="100px">
		</div>
		<hr>

        <h1>Scheduling</h1>
		<!-- echo "<script>console.log()</script>"; -->
        <?php
        
        $servername = "localhost";
        $username = "root";
        $password = "PneuMonoUltraMicroScopicSilicoVolcanoConIoSis!?";
        mysqli_report(MYSQLI_REPORT_OFF);
        $conn = new mysqli($servername, $username, $password);
        if ($conn->connect_error){
            die("Connection failed: ".$conn->connect_error);
        }

        $sql = "CREATE DATABASE time_table";

		if($conn->query($sql) == TRUE){
				echo "<script>console.log('Database created successfully')</script>";
		}
		else{
				echo "<script>console.log('Error Creating Database:'.$conn->error)</script>";
		}

		$sql = "USE time_table";

		if($conn->query($sql) == TRUE){
			echo "<script>console.log('Database changed successfully')</script>";
		}
		else{
			echo "<script>console.log('Error changing database: ' .$conn->error)</script>";
		}

		$sql = "CREATE TABLE times (logID INT NOT NULL PRIMARY KEY AUTO_INCREMENT, company_name VARCHAR(50) NOT NULL, address VARCHAR(255) NOT NULL, time int";

        $conn->close(); 
        ?>
    </body>
</html>
