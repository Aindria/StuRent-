<?php include("connection.php")?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/contact.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  
    <title>Contact Form</title>
  </head>
  <body>
    <div class="container">
      <form action="" method="POST">
        <div class="row hhh">
            <div class="col-md-7">
              <h4>Get in touch</h4>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Name</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter your name" name="name" required>
                  </div>
                  <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Email</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter your email" name="email" required>
                  </div>
                  <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Contact Number</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter your number" name="cn" required>
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Your Requirement / Problem</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="problem" required></textarea>
                  </div>
                  <input class="btn btn-primary" type="submit" name="submit"></input>
            </div>
            <div class="col-md-5 ">
              <h4>Contact us</h4><hr>
              <div class="mt-4">
                  <div class="d-flex">
                    <i class="bi bi-geo-alt-fill"></i>
                    <p >Address: UEM,Kolkata</p>
                  </div><hr>
                  <div class="d-flex">
                    <i class="bi bi-telephone-fill"></i>
                    <p>Contact :- +9162959846</p>
                  </div><hr>
                  <div class="d-flex">
                    <i class="bi bi-envelope-fill"></i>
                    <p>Email:- sturent@gmail.com</p>
                  </div><hr>
                  <div class="d-flex">
                    <i class="bi bi-browser-chrome"></i>
                    <p>Website: www.sturent.com</p>
                  </div><hr>
              </div>
            </div>
        </div>
</form>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>


<?php
    if($_POST['submit'])
    {
      $name = $_POST['name'];
      $email =$_POST['email'];
      $cn=$_POST['cn'];
      $problem=$_POST['problem'];
    }

    if($name !="" && $email !="" && $cn!="" && $problem!="")
       { 

        $query = "INSERT INTO contact values('$name','$email','$cn','$problem')";
        //INSERT INTO `form`(`fname`, `lname`, `password`, `cpassword`, `gender`, `email`, `phone`, `address`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]')
        $data=mysqli_query($conn, $query);
        if($data)
        {
            echo "<script>alert('Done Successfully...');</script>";
            //echo "done";
        }
        else
        {
            echo "Failed";
        }
    
    //else
    //{
    //    echo "<script>alert('Fill the form first');</script>";
    //}
    
    
    }


?>