<?php include("connection.php")?>




<!DOCTYPE html>
<html>
    <head>
        <title>PHP CRUD OPERATIONS</title>

        <link rel="stylesheet" type="text" href="style.css">
    </head>
    


    <body>
        
        <div class="container">
        <form action="#" method="POST">
            <div class="title">
                Registration Form
            </div>

            <div class="form">
                <div class="input_field">
                    <label>First Name</label>
                    <input type="text" name="fname" value="" class="input" required>
                </div>

                <div class="input_field">
                    <label>Last Name</label>
                    <input type="text" name="lname" value="" class="input" required>
                </div>

                <div class="input_field">
                    <label>Password</label>
                    <input type="Password" name="password" value="" class="input" required>
                </div>

                <div class="input_field">
                    <label>Confirm Password</label>
                    <input type="Password" name="conpassword" value="" class="input" required>
                </div>

                <div class="input_field">
                    <label>Gender</label>
                    <select name="gender" required>
                        <option value="Not Selected">Select</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>

                <div class="input_field">
                    <label>Email</label>
                    <input type="text" name="email" value="" class="input" required>
                </div>

                <div class="input_field">
                    <label>Phone</label>
                    <input type="text" name="phone" value="" class="input" required>
                </div>

                <div class="input_field">
                    <label>Addres</label>
                    <textarea name="address"></textarea>
                </div>
                
                <div class="input_field terms">
                    <label class="check" required>
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                    <p>Agree to term and conditions</p>
                </div>

                <div class="input_field">
                    <input type="submit" name="register" value="Register" class="btn">

                </div>

            </div>
        </form>
        </div>
    </body>
</html>


<?php
    if($_POST['register'])
    {
        $fname   = $_POST['fname'];
        $lname   = $_POST['lname'];
        $pwd     = $_POST['password'];
        $cpwd    = $_POST['conpassword'];
        $gender  = $_POST['gender'];
        $email   = $_POST['email'];
        $phone   = $_POST['phone'];
        $address = $_POST['address'];


        if($fname !="" && $lname !="" && $pwd !="" && $gender!="" && $email!="" && $phone!="" && $address!="")
        {

        $query = "INSERT INTO form values('$fname','$lname','$pwd','$cpwd','$gender','$email','$phone','$addres')";
        //INSERT INTO `form`(`fname`, `lname`, `password`, `cpassword`, `gender`, `email`, `phone`, `address`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]')
        $data=mysqli_query($conn, $query);
        if($data)
        {
            echo "<script>alert('done');</script>";
        }
        else
        {
            echo "Failed";
        }
    }
    //else
    //{
    //    echo "<script>alert('Fill the form first');</script>";
    //}
    
    }
?>
