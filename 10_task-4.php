<?php
    $conn=mysqli_connect("localhost","root","","programmer");
if(isset($_POST["submit"])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $pass=$_POST['pass'];
    $imagename=$_FILES['image']['name'];

    $tmpname=$_FILES['image']['tmp_name'];
    $uploc='images/'.$imagename;

    $sql = "INSERT INTO Stu_Reg(ID, Name, Image, Password) VALUES ('$id', '$name', '$imagename', '$pass')";

    $result=mysqli_query($conn,$sql);

    if($result==TRUE){
        echo '<div class="alert alert-success" role="alert">
         <strong>Success </strong> Data  inserted Succesfully
      </div>';
        move_uploaded_file($tmpname,$uploc);

    }else{
        echo "Not Submited";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
    <style>
        img{
            width: 200px;
        }
    </style>
</head>
<body>

<div class="container mt-5 d-flex justify-content-center" >
        <table class="table table-bordered w-50" >
            <thead class="table-dark">
                <tr>
                    <th scope="col" >ID</th>
                    <th scope="col" >Name</th>
                    <th scope="col" >Image</th>
                </tr>
            </thead >
            <tbody>
                    <?php
                $sql=" SELECT * FROM stu_reg";
                $result=mysqli_query($conn,$sql);
                $row=mysqli_fetch_assoc($result);

                while($row=mysqli_fetch_assoc($result)){ 
                $id=$row["ID"];
                $name=$row["Name"];
                $image=$row['Image'];
            
                echo " <tr>
                    <td>$id</td>
                    <td>$name</td>
                    <td><img src='images/$image'age</td>
                </tr>";
        
                }
                ?>

            </tbody>
        </table>
    </div> 

</body>
</html>