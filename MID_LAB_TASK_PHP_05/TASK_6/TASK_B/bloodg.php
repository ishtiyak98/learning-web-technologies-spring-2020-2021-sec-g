<?php
    
    if(isset($_POST['submit'])){
        echo "Blood Group: ".$_POST['bloodGroup'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Group</title>
</head>
<body>
    <form method="POST" action="#">
        <fieldset style="width:200px">
            <legend><b>BLOOD GROUP</b></legend>
            <select name="bloodGroup">
                <option value=""> </option>
				<option value="A+">A+</option>
				<option value="A-">A-</option>
				<option value="B+">B+</option>
				<option value="B-">B-</option>
				<option value="AB+">AB+</option>
				<option value="AB-">AB-</option>
				<option value="O+">O+</option>
				<option value="O-">O-</option>
			</select>
			<hr>
       <input type="submit" name="submit" value="Submit">
        </fieldset>
        <br>
    </form>
</body>
</html>