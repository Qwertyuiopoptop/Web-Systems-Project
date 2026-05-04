<html>
    <head>
        <title>Schedule</title>
        <link rel = "stylesheet" href = "stylesheet.css">
        <style>
            header h1, header p
            {
                color:black;
            }
            h1
            {
                color:#5FA7B0;;
            }
        
        </style>
    </head>
    <body>
        <header>
            <h1>Sue Lemke</h1>
		    <p style="text-align: center;">Preventing waste, one scrap at a time</p>
        </header>
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

        <h1>Scheduling</h1>
        <?php
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        mysqli_report(MYSQLI_REPORT_OFF);
        $conn = new mysqli($servername, $username, $password);
        if ($conn->connect_error){
            die("Connection failed: ".$conn->connect_error);
        }

        $conn->close(); 
        ?>
    </body>
</html>
