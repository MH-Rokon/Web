<?php

    $con=mysqli_connect("localhost","root","","student");

    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $phone=$_POST['phone'];
        $gender=$_POST['gender'];

        $sql=" INSERT INTO data(name, email, phone, password, gender) values ('$name','$email','$phone','$password','$gender')";

        $result=mysqli_query($con,$sql);
        if($result==True){
          echo "Data is Inserted";
        }else{
            echo "Not inserted";
        }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Details</title>
    <!-- <link rel="stylesheet" href="lab_04.css"> -->
    <style>
        div{
            background-color: blanchedalmond;
            width:40%;
            height:288px;
            margin: auto;
            padding: 5px;
        }
        h3{
            text-align: center;
        }
        form{
            width: 50%;
            display: block;
            margin: auto auto;
        }
        label,input{
            margin: 8px auto;
            /* display: block; */
            /* text-align: center; */
        }
        button{
            margin-left:100px;
            background-color:rgb(106, 227, 141);
            border: 1px solid ;
            border-radius: 5px;
            padding: 5px;
            font-size: 17px;
        }
    </style>
</head>
<body>
    <div>
        <h3>Personal Details</h3>
        <form action="" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br>

            <label for="email">Email:</label>
            <input type="emial" name="email" id="email" required><br>

            <label for="phone">Phone Number:</label>
            <input type="tel" name="phone" id="phone" required><br>

            <label for="pass">Password</label>
            <input type="password" name="password" id="pass" required><br>

            <label for="gender">Gender:</label>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="male">Female</label><br>

            <button type="submit" name="submit">Submit</button>

        </form>

    </div>
    
</body>
</html>