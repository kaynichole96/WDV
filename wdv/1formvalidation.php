<!DOCTYPE HTML>
<html>
<head>
</head>
<body>

<?php
// define variables and set to empty values
$name = $SocalSecurityNumber = $ChooseAResponse = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $website = test_input($_POST["Socal Security Number"]);
  $gender = test_input($_POST["Choose a Response"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Name: <input type="text" name="name">
  <br><br>
  Social Security Number: <input type="text" name="Social Security Number">
  <br><br>
  Choose a Response:
  <input type="radio" name="Response" value="Phone">Phone
  <input type="radio" name="Response" value="Email">Email
  <input type="radio" name="Response" value="US Mail">US Mail
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $SocalSecurityNumber;
echo "<br>";
echo $ChooseAResponse;
echo "<br>";
?>

</body>
</html>
