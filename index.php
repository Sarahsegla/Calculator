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

<input  required type="number" name="num01" placeholder="number one">
<select number="operator" >
    <option value="add">+</option>
    <option value="subtract">-</option>
    <option value="multiply">*</option>
    <option value="divide">/</option>
</select>
<input required type="number" name="num02" placeholder="number two">
<button>Calculate</button>
</form>

<!-- using post method we dont see data in url-->
<?php 
if ($_SERVER["REGUEST_METHOD"]== "POST" ) {
    // all data from inputs
    // getting the num01 and float so user can use decimal points
$num01 = filter_input(INPUT_POST, "num01", FILTER_SANITIZA_NUMBER_FLOAT);
// getting num02
$num02 = filter_input(INPUT_POST, "num02", FILTER_SANITIZA_NUMBER_FLOAT);
// getting operator
// need to use htmlspec cause filter_input will not work (for +, -, /)
$operator = htmlspecialchars($_POST["operator"]);

// error handlers (prevent user doing things not meant to) when required doesnt work

$errors =  false;
// if these are empty
if (empty($num01) || empty($num02) || empty($opertator)) {
    // show this msg in p tag
    echo "<p class='theError'> Please fill it in! </p>";
    // error has been set from false to true because now we have an error
    $errors = true;
}
// need to make sure only numbers can be used
if (its_numeric($num01) === false|| its_numeric($num02) === false ) {
    // show this msg in p tag
    echo "<p class='theError'> Only numbers please! </p>";
    // error has been set from false to true because now we have an error
    $errors = true;
}

// to cal if errors dont occur

if ($errors === false) {

    // use a switch statement to determine what the user submitted

    switch ($operator) {
        case "add":

    }

}


}


?>
    
</body>
</html>