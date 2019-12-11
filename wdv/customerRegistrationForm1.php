<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WDV341 Intro PHP - Self Posting Form</title>
<style>

#orderArea	{
	width:600px;
	border:thin solid black;
	margin: auto auto;
	padding-left: 20px;
}

#orderArea h3	{
	text-align:center;
}
.error	{
	color:red;
	font-style:italic;
}

</style>
</head>

<body>
<h1>WDV341 Intro PHP</h1>
<h2>Unit-5 and Unit-6 Self Posting - Form Validation Assignment


</h2>
<p>&nbsp;</p>


<div id="orderArea">
<form name="form3" method="post" action="">
  <h3>Customer Registration Form</h3>

      <p>
        <label for="textfield">Name:</label>
        <input type="text" name="textfield" id="textfield">
      </p>
      <p>
        <label for="textfield2">Phone Number:</label>
        <input type="text" name="textfield2" id="textfield2">
      </p>
      <p>
        <label for="textfield3">Email Address: </label>
        <input type="text" name="textfield3" id="textfield3">
      </p>
      <p>
        <label for="select">Registration: </label>
        <select name="select" id="select">
          <option value="">Choose Type</option>
          <option value="evt01">Attendee</option>
          <option value="evt02">Presenter</option>
          <option value="evt03">Volunteer</option>
          <option value="evt04">Guest</option>
        </select>
      </p>
      <p>Badge Holder:</p>
      <p>
        <input type="radio" name="radio" id="radio" value="radio">
        <label for="radio">Clip</label> <br>
        <input type="radio" name="radio2" id="radio2" value="radio2">
        <label for="radio2">Lanyard</label> <br>
        <input type="radio" name="radio3" id="radio3" value="radio3">
        <label for="radio3">Magnet</label>
      </p>
      <p>Provided Meals (Select all that apply):</p>
      <p>
        <input type="checkbox" name="checkbox" id="checkbox">
        <label for="checkbox">Friday Dinner</label><br>
        <input type="checkbox" name="checkbox2" id="checkbox2">
        <label for="checkbox2">Saturday Lunch</label><br>
        <input type="checkbox" name="checkbox3" id="checkbox3">
        <label for="checkbox3">Sunday Award Brunch</label>
      </p>
      <p>
        <label for="textarea">Special Requests/Requirements: (Limit 200 characters)<br>
        </label>
        <textarea name="textarea" cols="40" rows="5" id="textarea"></textarea>
      </p>

  <p>
    <input type="submit" name="button3" id="button3" value="Submit">
    <input type="reset" name="resetButton" id="resetButton" value="Reset">
  </p>
</form>
</div>

</body>
</html>
