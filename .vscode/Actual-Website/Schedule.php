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
		    <p style="text-align: center;">Recycler by Day, Home cook by night</p>
        </header>
        <nav>
        <div><a href = "home.html">Home Page</a></div>
        <div><a href = "Accepted-Items.html">Accepted Items</a></div>
        <div><a href = "Different-Metals.html">Different Metals</a></div>
        <div><a href = "Freon-Info.html">Freon Info</a></div>
        <div><a href = "Mission.html">Her Mission</a></div>
        <div><a href = "How-She-Recycles.html">How She Recycles</a></div>
        <div><a href = "Carbon-Footprint.html">Reducing Carbon Footprint</a></div>
        <div><a href = "Recycling-Info.html">Recycling Info</a></div>
        <div><a href = "Schedule.php">Specialized Recycling Info</a></div>
        <div><a href = "Tools.html">Tools She Uses</a></div>
        <div><a href = "Types-Wire.html">Types of Wire</a></div>
        <div class = "curPage"><a href = "Schedule.php">Scheduling</a></div>
        </nav>

        <h1>Scheduling</h1>
        <form>

        </form>

        <?php
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        mysqli_report(MYSQLI_REPORT_OFF);
        $conn = new mysqli($servername, $username, $password);
        if ($conn->connect_error){
            die("Connection failed: ".$conn->connect_error);
        }


        $sql = "CREATE database Schedule";

        $sql = "USE Schedule;";

        $sql = "CREATE TABLE Person (ID int auto_increment PRIMARY KEY, FName varChar(50), LName varchar(50), Adress varchar(200));";

        $sql = "CREATE TABLE Appointment (ID int FOREIGN KEY, AppDay varchar(50), AppTime varchar(50))";





        $conn->close(); 
        ?>
    </body>
</html>
