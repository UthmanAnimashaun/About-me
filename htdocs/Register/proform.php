<?php
    $db =new mysqli("localhost", "root", "", "seconddb");
    if(mysqli_connect_error()) {
        echo "Wrong connection";
    }
    else{
        echo "connected";
    }
    echo "<br>";

    if(isset($_POST['submit'])){
        $fname=$_POST['fname'];
        $mname=$_POST['mname'];
        $lname=$_POST['lname'];
        $gender=$_POST['gender'];
        $dob=$_POST['dob'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $pw=$_POST['pw'];
        $courses=$_POST['courses'];
        $address=$_POST['address'];
        $city=$_POST['city'];
        $state=$_POST['state'];
        $zip=$_POST['zip'];

        // send to DB Table
        $insert="insert into proform values('', '".$fname."', '".$mname."', '".$lname."', '".$gender."', '".$dob."', '".$phone."', '".$email."', '".$pw."', '".$courses."', '".$address."', '".$city."', '".$state."', '".$zip."')";

        $q=$db->query($insert);
        if($q){
            echo "Success";
        }
    }

// $host =
// $fullname =
//  $password $db


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programming Registration Form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/schoolform.css">
</head>
<body>
    <div class="container">
      <span class="display-5"> <img src="img/edmoss.jpg" alt="" class="img-fluid"> Edmoss Global</span> 
        <h1 class="display-6">Programming Registration Form</h1>
        <p class="lead">Please fill out the form carefully.</p><hr>

        <!-- Form Registration -->
        <form action="" method="POST">
            <!-- <label for="" class="h5">Student Name</label> -->
            <div class="row mb-3">
                <div class="col">
                <label for="inputGender">First Name</label>
                    <input type="text" name="fname" class="form-control" placeholder="First Name" title="Input your first name here" required>
                </div>

                <div class="col">
                <label for="inputGender">Middle Name</label>
                    <input type="text" name="mname" class="form-control" placeholder="Middle Name" title="Input your middle name here" required>
                </div>

                <div class="col">
                <label for="inputGender">Last Name</label>
                    <input type="text" name="lname" class="form-control" placeholder="Last Name" title="Input your last name here" required>
                </div>
            </div>

           
            <div class="row mb-3">
                <div class="form-group col-md-6">
                    <label for="inputGender">Gender</label>
                    <select name="gender" id="" class="form-control  mb-3">
                        <option>Male</option>
                        <option>Female</option>
                        <option>Others</option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="inputBirth">Birth Date</label>
                    <input type="date" name="dob" class="form-control" id="inputBirth" placeholder="Birth Date" required>
                </div>
            </div>

            <div class="row">

                <div class="form-group col-md-6 mb-3">
                    <label for="">Phone Number</label>
                    <input type="text" name="phone" class="form-control" id="inputPhoneNumber" placeholder="Phone Number" required>
                </div>
                <div class="form-group col-md-6 mb-3">
                    <label for="inputEmail4">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email" required>
                </div>
            </div>

            <div class="row">

                <div class="form-group mb-3">
                    <label for="inputPassword4">Password</label>
                    <input type="password" name="pw" class="form-control" id="inputPassword4" placeholder="Password" required>
                </div>
            </div>


                <div class="form-group">
                    <label for="inputGender">Course</label>
                    <select name="courses" id="" class="form-control mb-3">
                        <option> Artificial Inteligent</option>
                        <option>Graphic Design</option>
                        <option>Mobile App Developement</option>
                        <option>Web development(Fullstack)</option>
                      
                    </select>
                </div>

                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" name="address" class="form-control mb-3" id="inputAddress" placeholder="123 Main St" required>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" name="city" class="form-control mb-3" id="inputCity" placeholder="City" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select name="state" id="inputState" class="form-control mb-3">
                            <option selected>Abia</option>
                            <option selected>Adamawa</option>
                            <option selected>Bauchi</option>
                            <option selected>Borno</option>
                            <option selected>Cross River</option>
                            <option selected> Delta</option>
                            <option selected> Kwara</option>
                            <option selected> Lagos</option>
                            <option selected> Osun</option>
                            <option selected> Kaduna</option>
                            <option selected> Kano</option>
                            <option selected> Zamfara</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input type="number" name="zip" class="form-control mb-3" id="inputZip" placeholder="Zip" required>
                    </div>
                </div>

                <div class="form-group col-12 btn">  
                    <button class="button" type="submit" name="submit">Register</button>
                </div>
                    

        </div>
    </div>




    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>