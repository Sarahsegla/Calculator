<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>


<!-- to send data to the same page that we are on -->
<!-- htmlspecchars help to prevent hackers? -->
<form action=" <?php echo htmlspecialchars( $_SERVER["PHP_SELF"]); ?> " method="post" > 

<input type="number" name="num01" placeholder="number one">
<select number="operator" >
    <option value="add">+</option>
    <option value="subtract">-</option>
    <option value="multiply">*</option>
    <option value="divide">/</option>
</select>
<input type="number" name="num02" placeholder="number two">
<button>Calculate</button>
</form>

<!-- using post method we dont see data in url-->
<?php 
if ($_SERVER["REGUEST_METHOD"]== "POST" ) {
    // getting the num01
$num01 = $_POST["num01"];
}


?>
    
</body>
</html>