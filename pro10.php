<?php
$msg = '';
	if(isset($_POST['form_submit'])) {
		$ch = $_POST['option'];
		$string = $_POST['string'];
		switch($ch) {
		case 1:
				$msg = 'Reverse of <b>' . $string . '</b> is <b>' . strrev ( $string ) . '</b>';
				break;
		case 2:
				$msg = 'Length of <b>' . $string . '</b> is <b>' . strlen ( $string ) . '</b>';
				break;
		case 3:
				$msg = 'Substring of <b>' . $string . '</b> is <b>' . substr ( $string , 3 ) . '</b>';
				break;	
		case 4:
				$msg = 'Converting <b>' . $string . '</b> to upper case <b>' . strtoupper ( $string ) . '</b>';
				break;
		case 5:
				$msg = 'Converting <b>' . $string . '</b> to lower case <b>' . strtolower ( $string ) . '</b>';
				break;				
		case 6:
				$msg = 'Number of words in <b>' . $string . '</b> is <b>' . str_word_count ( $string ) . '</b>';
				break;
		default:
			$msg = 'invalid option';
		}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Menu Driven</title>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>
	<form method="POST">
		<center><h1>String Operations</h1></center>
		<br>
		<input class="w3-input" type="text" name="string" placeholder="Enter String" required>
		<br>

		<select class="w3-select w3-border" name="option">
    		<option value="" disabled selected>Choose your option</option>
    		<option value="1">Reversing the string</option>
   			<option value="2">Finding the length of the string</option>
   			<option value="3">Substring operations</option>
   			<option value="4">Converting to uppercase</option>
   			<option value="5">Converting to lowercase</option>
   			<option value="6">Counting the number of words.</option>
  </select>
  <br>
  <br>
  <center><input class="w3-button w3-grey" type="submit" name="form_submit" value="Submit"></center>
	</form>
	<br>
	<center><h1><?php echo $msg; ?></h1></center>
</body>
</html>
