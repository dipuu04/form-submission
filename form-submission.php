<!DOCTYPE html>
<html>
<head>
	<style>
		h1 {text-align: center;}
		h2 {text-align: left;}
		</style>
	<title>Registration Form</title>
</head>
<body>

	<h1>Registration Form</h1>

	
	<form action="action_page.php">
		
		  
		<fieldset>
			<legend> Basic Information :</legend>

		<label for="name">Enter Your Name:</label>
		<input type="text" name="name" id="name">
		<br>
               
                <label for="lname">Last Name</label>
		<input type="text" name="lname" id="lname">
                 
                <br>

		<label for="">Gender:</label>
		<input type="radio" name="gender" id="male" value="male">
		<label for="male">Male</label>
		<input type="radio" name="gender" id="female" value="female">
		<label for="female">Female</label>
		<br>

		<label for="dob">Date of Birth:</label>
		<input type="date" id="dob" name="Date of Birth"
        min="1920-01-01" max="2021-12-31">
		<br>

		<label for="Religion">Religion</label>
		<select id="Religion" name="Religion">
			<option>Muslim</option>
			<option>Hindu</option>
			<option>Christian</option>
			<option>Budhists</option>
			<option>Others</option>
		</select>
		<br>

		
		</fieldset>
		  
		<fieldset>
			<legend> Contact Information :</legend>

		  <label for="praddress">Enter Present Address:</label>
		  <input type="text" name="praddress" id="praddress">
		  <br>
		  <label for="peaddress">Enter Permanent Address:</label>
		<input type="text" name="peaddress" id="peaddress">
		<br>  

		<label for="phone">Enter your phone number:</label>
		<input type="tel" name="phone" id="phone" placeholder="+880123456789">
		<br>

		<label for="email">Enter your email:</label>
		<input type="email" name="email" id="email"	placeholder="example@mail.com">
		<br>

		<label for="url">Enter Personal Website Link:</label>
		<input type="url" name="url" id="url"
       	placeholder="https://example.com"
       	pattern="https://.*" size="30">
		<br>
		</fieldset>
		
		<fieldset>
			<legend> Academic Information :</legend>
		<label for="sscy">SSC Year:</label>
		<input type="number" id="sscy" name="sscy" min="2000" max="2021">
		<br>
		<label for="ssci">SSC Institute:</label>
		<input type="text" name="ssci" id="ssci">
		<br>

		<label for="hscy">HSC Year:</label>
		<input type="number" id="hscy" name="hscy" min="2000" max="2023">
		<br>
		<label for="hsci">HSC Institute:</label>
		<input type="text" name="hsci" id="hsci">
		<br>
		</fieldset>

	  <button type="submit" class="submitbtn">Submit</button>
		
	  
	  </form>


</body>
</html>