<!DOCTYPE html>

<head>
	<title>Electricity Bill</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<?php
$result_str = $result = '';
if (isset($_POST['unit-submit'])) {
    $units = $_POST['units'];
    if (!empty($units)) {

        $unit_cost_first = 3.00;
        $unit_cost_second = 4.00;
        $unit_cost_third = 5.00;
        $unit_cost_fourth = 6.00;

        if($units <= 100) {
            $bill = $units * $unit_cost_first;
        }
        else if($units > 100 && $units <= 200) {
            $temp = 100 * $unit_cost_first;
            $remaining_units = $units - 100;
            $bill = $temp + ($remaining_units * $unit_cost_second);
        }
        else if($units > 200 && $units <= 300) {
            $temp = (100 *$unit_cost_first) + (100 * $unit_cost_second);
            $remaining_units = $units - 200;
            $bill = $temp + ($remaining_units * $unit_cost_third);
        }
        else {
            $temp = (100 * $unit_cost_first) + (100 * $unit_cost_second) + (100 * $unit_cost_third);
            $remaining_units = $units - 300;
            $bill = $temp + ($remaining_units * $unit_cost_fourth);
        }
            $result_str = 'Total amount of ' . $units . ' Unit is - ' . number_format((float)$bill, 2, '.', '');
    }
}
?>

<body>
	<div id="page-wrap">
        <br>
        <br>
        <br>
		<h1 class="w3-center">Electricity Bill</h1>
        <br>
		<form action="" method="post" class="w3-container w3-xlarge">
            	<input class="w3-input" type="number" name="units" placeholder="Please enter units" />
                <br>
                <br>
            	<center><input class="w3-button w3-grey" type="submit" name="unit-submit" id="unit-submit" value="Submit" /></center>
		</form>
		<div>
		    <h1 class="w3-center"><?php echo '<br />' . $result_str; ?></h1>
		</div>
	</div>
</body>
</html>
