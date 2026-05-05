<?php
	$servername = "localhost";
    $username = "root";
    $password = "PneuMonoUltraMicroScopicSilicoVolcanoConIoSis!?";
    $dbname = "time_table";

    $conn = new mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $company_name = $_POST["company_name"];
    $address = $_POST["address"];
    $date = $_POST["Year"]."-".$_POST["Month"]."-".$_POST["Day"];
    $time = $_POST["Hour"].":".$_POST["Minute"];

    $stmt = $conn->prepare("INSERT INTO times (company_name, address, date, time) VALUES (?, ?, ?, ?)");
    if(!$stmt){
		die("Prepare failed: " . $conn->error);
	}
	$stmt->bind_param("ssss", $company_name, $address, $date, $time);

    $stmt->execute();

    echo "<script>console.log('Data inserted successfully')</script>";

	$stmt->close();
	}

    $conn->close();
?>

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
				<p style="text-align: center; color: var(--col2)"><b>Preventing waste, one scrap at a time</b></p>
			</div>
			<img src="photos/Recycle.png" alt="" height="100px" width="100px">
		</div>
		<hr>

        <h1>Scheduling</h1>

		<h3 style="text-align: center;">Here you can sign up for a time to meet with me, I'm retired so I have a lot of free time, if there are any conflicts I'll be sure to reach out to you</h3>

		<div id="Schedule-Content">
			<form method="post" name="times" action="Schedule.php" onsubmit="return submit_times();">
				<table>
					<tr>
						<th>Company Name</th>
						<td><input type="text" name="company_name"></td>
					</tr>
					<tr>
						<th>Address</th>
						<td><input type="text" name="address"></td>
					</tr>
					<tr>
						<th>Date & Time</th>
						<td>
							<select name="Month" id="">
								<option value="" selected="selected">Month</option>
								<option value="01">01</option>
								<option value="02">02</option>
								<option value="03">03</ption>
								<option value="04">04</option>
								<option value="05">05</option>
								<option value="06">06</option>
								<option value="07">07</option>
								<option value="08">08</option>
								<option value="09">09</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
							</select>
							<select name="Day" id="">
								<option value="" selected="selected">Day</option>
								<option value="1">01</option>
								<option value="2">02</option>
								<option value="3">03</option>
								<option value="4">04</option>
								<option value="5">05</option>
								<option value="6">06</option>
								<option value="7">07</option>
								<option value="8">08</option>
								<option value="9">09</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
							</select>
							<select name="Year" id="">
								<option value="" selected="selected">Year</option>
								<option value="2026">2026</option>
								<option value="2027">2027</option>
							</select>
							<select name="Hour" id="">
								<option value="" selected="selected">Hour</option>
								<option value="00">00</option>
								<option value="01">01</option>
								<option value="02">02</option>
								<option value="03">03</option>
								<option value="04">04</option>
								<option value="05">05</option>
								<option value="06">06</option>
								<option value="07">07</option>
								<option value="08">08</option>
								<option value="09">09</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
							</select>
							<select name="Minute" id="">
								<option value="" selected="selected">Minute</option>
								<option value="00">00</option>
								<option value="15">15</option>
								<option value="30">30</option>
								<option value="45">45</option>
							</select>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<input type="submit" value="Submit form">
						</td>
					</tr>
				</table>
			</form>
		</div>

		<script>
			function submit_times(){
				var company_name = "";
				var address = "";
				var date = "";
				var time = "";

				for(let i = 0; i < 2; i++){
					var text = document.forms["times"].elements[i];

					if(!text.value){
						alert("You haven't filled the box: " + text.name);
						text.focus();
						return false;
					}
					
					if(i == 0)
						company_name = text.value;
					else
						address = text.value;
				}

				if (!document.times.Month.value || !document.times.Day.value || !document.times.Year.value || !document.times.Hour.value || !document.times.Minute.value){
					alert("Please select a full date and time");
					return false;
				}

				date = document.times.Year.options[document.times.Year.selectedIndex].text + "/";
				date += document.times.Month.options[document.times.Month.selectedIndex].text + "/";
				date += document.times.Day.options[document.times.Day.selectedIndex].text;
				time = document.times.Hour.options[document.times.Hour.selectedIndex].text + ":";
				time += document.times.Minute.options[document.times.Minute.selectedIndex].text;

				console.log("company_name = " + company_name);
				console.log("address = " + address);
				console.log("date = " + date);
				console.log("time = " + time);

				return true;

			}
		</script>
    </body>
</html>
