<?php

//including my object file from includes folder
include "includes/calculator.php";


//creating calculator object
$Calobj = new Calculator();

?>


<!DOCTYPE html>
<html lang="us">
	<head>
	<title>INCOME CALCULATOR</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/all.css">
	<link rel="stylesheet" href="css/all.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/custom.css">
	</head>

<body>
		<div class="container">
			<h2 class="text-center">Income Calculator</h2>
			<hr><br>

			<?php

				if (isset($_POST['submit'])) 
				{
					
					$name 	= ucfirst(trim($_POST['name']));

					$amount = $_POST['amount'];

					$month	= $_POST['month'];



					if ($name == "" || $amount == "" || $month == "") 
					{
						
						echo "<div class='alert alert-danger'>";
						echo "Field Must Not Be Empty";
						echo "</div>";

					}elseif ($month == "Select Month") 
						{
						
							echo "Please select a month";
						}elseif ($month == "January") 
							{
						

						echo "<div class='alert alert-success alert-dismissible'>
						<a href='index.php' class='close' data-dismiss='alert'>&times;</a>";
						echo "<h3>Your Monthly Expenditure is: </h3>";

						echo "<br> ";
						
						//Monthly Salary Amount
						echo "<h4> Your Monthly Salary is: ". $amount . "</h4>";

						$Calobj->tithe($name, $amount, $month);
						$Calobj->transport($name, $amount, $month);
						$Calobj->upkeep($name, $amount, $month);
						$Calobj->foodstuff($name, $amount, $month);
						echo "</div>";

							}elseif ($month == "February") 
					{

						echo "<div class='alert alert-success alert-dismissible'>
						<a href='index.php' class='close' data-dismiss='alert'>&times;</a>";
						echo "<h3>Your Monthly Expenditure is: </h3>";

						echo "<br> ";
								
						//Monthly Salary Amount
						echo "<h4> Your Monthly Salary is: ". $amount . "</h4>";

						$Calobj->tithe($name, $amount, $month);
						$Calobj->transport($name, $amount, $month);
						$Calobj->upkeep($name, $amount, $month);
						$Calobj->foodstuff($name, $amount, $month);
						
						
						echo "</div>";
					}

					elseif ($month == "March") 
					{
						

						echo "<div class='alert alert-success alert-dismissible'>
						<a href='index.php' class='close' data-dismiss='alert'>&times;</a>";
						echo "<h3>Your Monthly Expenditure is: </h3>";

						echo "<br> ";
								
						//Monthly Salary Amount
						echo "<h4> Your Monthly Salary is: ". $amount . "</h4>";

						$Calobj->tithe($name, $amount, $month);
						$Calobj->transport($name, $amount, $month);
						$Calobj->upkeep($name, $amount, $month);
						$Calobj->foodstuff($name, $amount, $month);
						
						echo "</div>";
					}

					elseif ($month == "April") 
					{
						

						echo "<div class='alert alert-success alert-dismissible'>
						<a href='index.php' class='close' data-dismiss='alert'>&times;</a>";
						echo "<h3>Your Monthly Expenditure is: </h3>";

						echo "<br> ";
								
						//Monthly Salary Amount
						echo "<h4> Your Monthly Salary is: ". $amount . "</h4>";

						$Calobj->tithe($name, $amount, $month);
						$Calobj->transport($name, $amount, $month);
						$Calobj->upkeep($name, $amount, $month);
						$Calobj->foodstuff($name, $amount, $month);
						
						
						echo "</div>";
					}


					elseif ($month == "May") 
					{
						

						echo "<div class='alert alert-success alert-dismissible'>
						<a href='index.php' class='close' data-dismiss='alert'>&times;</a>";
						echo "<h3>Your Monthly Expenditure is: </h3>";

						echo "<br> ";
								
						//Monthly Salary Amount
						echo "<h4> Your Monthly Salary is: ". $amount . "</h4>";

						$Calobj->tithe($name, $amount, $month);
						$Calobj->transport($name, $amount, $month);
						$Calobj->upkeep($name, $amount, $month);
						$Calobj->foodstuff($name, $amount, $month);
						
						
						echo "</div>";
					}

					elseif ($month == "June") 
					{
						

						echo "<div class='alert alert-success alert-dismissible'>
						<a href='index.php' class='close' data-dismiss='alert'>&times;</a>";
						echo "<h3>Your Monthly Expenditure is: </h3>";

						echo "<br> ";
								
						//Monthly Salary Amount
						echo "<h4> Your Monthly Salary is: ". $amount . "</h4>";

						$Calobj->tithe($name, $amount, $month);
						$Calobj->transport($name, $amount, $month);
						$Calobj->upkeep($name, $amount, $month);
						$Calobj->foodstuff($name, $amount, $month);
						
						
						echo "</div>";
					}

					elseif ($month == "July") 
					{
						

						echo "<div class='alert alert-success alert-dismissible'>
						<a href='index.php' class='close' data-dismiss='alert'>&times;</a>";
						echo "<h3>Your Monthly Expenditure is: </h3>";

						echo "<br> ";
								
						//Monthly Salary Amount
						echo "<h4> Your Monthly Salary is: ". $amount . "</h4>";

						$Calobj->tithe($name, $amount, $month);
						$Calobj->transport($name, $amount, $month);
						$Calobj->upkeep($name, $amount, $month);
						$Calobj->foodstuff($name, $amount, $month);
						
						
						echo "</div>";
					}


					elseif ($month == "August") 
					{
						

						echo "<div class='alert alert-success alert-dismissible'>
						<a href='index.php' class='close' data-dismiss='alert'>&times;</a>";
						echo "<h3>Your Monthly Expenditure is: </h3>";

						echo "<br> ";
								
						//Monthly Salary Amount
						echo "<h4> Your Monthly Salary is: ". $amount . "</h4>";

						$Calobj->tithe($name, $amount, $month);
						$Calobj->transport($name, $amount, $month);
						$Calobj->upkeep($name, $amount, $month);
						$Calobj->foodstuff($name, $amount, $month);
						
						
						echo "</div>";
					}

					elseif ($month == "September") 
					{
						

						echo "<div class='alert alert-success alert-dismissible'>
						<a href='index.php' class='close' data-dismiss='alert'>&times;</a>";
						echo "<h3>Your Monthly Expenditure is: </h3>";

						echo "<br> ";
								
						//Monthly Salary Amount
						echo "<h4> Your Monthly Salary is: ". $amount . "</h4>";

						$Calobj->tithe($name, $amount, $month);
						$Calobj->transport($name, $amount, $month);
						$Calobj->upkeep($name, $amount, $month);
						$Calobj->foodstuff($name, $amount, $month);
						
						
						echo "</div>";
					}
					elseif ($month == "October") 
					{
						

						echo "<div class='alert alert-success alert-dismissible'>
						<a href='index.php' class='close' data-dismiss='alert'>&times;</a>";
						echo "<h3>Your Monthly Expenditure is: </h3>";

						echo "<br> ";
								
						//Monthly Salary Amount
						echo "<h4> Your Monthly Salary is: ". $amount . "</h4>";

						$Calobj->tithe($name, $amount, $month);
						$Calobj->transport($name, $amount, $month);
						$Calobj->upkeep($name, $amount, $month);
						$Calobj->foodstuff($name, $amount, $month);
						
						
						echo "</div>";
					}

					elseif ($month == "November") 
					{
						

						echo "<div class='alert alert-success alert-dismissible'>
						<a href='index.php' class='close' data-dismiss='alert'>&times;</a>";
						echo "<h3>Your Monthly Expenditure is: </h3>";

						echo "<br> ";
								
						//Monthly Salary Amount
						echo "<h4> Your Monthly Salary is: ". $amount . "</h4>";

						$Calobj->tithe($name, $amount, $month);
						$Calobj->transport($name, $amount, $month);
						$Calobj->upkeep($name, $amount, $month);
						$Calobj->foodstuff($name, $amount, $month);
						
						
						echo "</div>";
					}

					elseif ($month == "December") 
					{
						

						echo "<div class='alert alert-success alert-dismissible'>
						<a href='index.php' class='close' data-dismiss='alert'>&times;</a>";
						echo "<h3>Your Monthly Expenditure is: </h3>";

						echo "<br> ";
								
						//Monthly Salary Amount
						echo "<h4> Your Monthly Salary is: ". $amount . "</h4>";

						$Calobj->tithe($name, $amount, $month);
						$Calobj->transport($name, $amount, $month);
						$Calobj->upkeep($name, $amount, $month);
						$Calobj->foodstuff($name, $amount, $month);
						
						
						echo "</div>";
					}
				}


				/*function validateInput($validate)
				{

					return $validate;
				}*/

			?>
			
			<form action="index.php" method="post">
				<div class="form-group">
					
					<h4 class="label_font_size">Name</h4>
					<input type="text" name="name" class="form-control input_size" pattern="^[A-Za-z]+">
					<br>
					
					<h4 class=" label_font_size">Enter Income below</h4>
					<input type="text" name="amount" class="form-control input_size">
					<br>
					
					<h4 class="label_font_size">Select month</h4>
					<select class="custom-select input_size" name="month">
						<option selected>Select month</option>
						<option>January</option>
						<option>February</option>
						<option>March</option>
						<option>April</option>
						<option>May</option>
						<option>June</option>
						<option>July</option>
						<option>August</option>
						<option>September</option>
						<option>October</option>
						<option>November</option>
						<option>December</option>
					</select>
					<br>
					<input type="submit" name="submit" value="Submit" class="btn btn-primary submit">
				</div>
			</form>

		</div>



</body>
</html>