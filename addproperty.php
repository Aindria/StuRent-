<?php include("connection.php")?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
  
    <title>Registration Form</title>
	  <link href="css/addproperty.css" rel="stylesheet">
</head>
<body>

<div class="wrapper">
<form action="*" method="POST">
    <div class="title">
      Add Your Property
    </div>
    <div class="form">
       <div class="inputfield">
          <label>First Name</label>
          <input type="text" class="input" name="fname" required>
       </div>  
        <div class="inputfield">
          <label>Last Name</label>
          <input type="text" class="input" name="lname" required>
       </div>  
       <div class="inputfield">
          <label>Location</label>
          <input type="password" class="input" name="location" required>
       </div>  
      <div class="inputfield">
          <label>Rent Type</label>
          <div class="custom_select">
            <select name="rent" required>
              <option value="">Select</option>
              <option value="apartment">Apartment</option>
              <option value="house">House</option>
              <option value="pg">PG</option>
            </select>
          </div>
       </div> 
        <div class="inputfield">
          <label>Gender</label>
          <div class="custom_select">
            <select name="gender" required>
              <option value="">Select</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>
       </div> 
        <div class="inputfield">
          <label>Email Address</label>
          <input type="text" class="input" name="email" required>
       </div> 
      <div class="inputfield">
          <label>Phone Number</label>
          <input type="text" class="input" name="phone" required>
       </div> 
      <div class="inputfield">
          <label>Govt ID Number</label>
          <textarea class="textarea" name="govt" required></textarea>
       </div> 
      <div class="inputfield">
          <label>Postal Code</label>
          <input type="text" class="input" name="code" required>
       </div> 
      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <p>Agreed to terms and conditions</p>
       </div> 
      <div class="inputfield">
        <input type="submit" value="Register" class="btn" name="register">
      </div>
    </div>
</form>
</div>	
	
</body>
</html>

<?php
{
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $location = $_POST["location"];
  $rent = $_POST["rent"];
  $gender = $_POST["gender"];
  $email = $_POST["email"];
  $govt = $_POST["govt"];
  $code = $_POST["code"];
}

if($fname !="" && $lname !="" && $location!="" && $rent!="" && $gender!="" && $email!="" && $govt!="" && $code!="")
{
  $query = "INSERT INTO lemo values('$fname','$lname','$location','$rent','$gender','$email','$govt','$code')";
//INSERT INTO `form`(`fname`, `lname`, `password`, `cpassword`, `gender`, `email`, `phone`, `address`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]')
  $data=mysqli_query($conn, $query);
  if($data)
  {
    echo "<script>alert('Registration Done Successfully');</script>";
  }
  else
  {
    echo "Failed";
  }

}
?>

