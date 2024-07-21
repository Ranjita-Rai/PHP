<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$conn=new mysqli("localhost","root","","tu1");
if($conn->connect_error){
    die("connection failed". $conn->connect_error);
}

    $sql="Insert into student(name,address)values
    ('Srijana','Dhading');";
    $sql .="Insert into student(name,address)values
    ('Sumana','Bhaktapur');";
    $sql .="Insert into student(name,address)values
    ('Riya','Nuwakot');";
    $sql .="Insert into student(name,address)values
    ('Aashish','Jhapa');";
    $sql .="Insert into student(name,address)values
    ('Ranjita','Nuwakot');";
    $sql .="Insert into student(name,address)values
    ('Risita','Thankot');";
    $sql .="Insert into student(name,address)values
    ('Bimala','Gorkha');";
    $sql .="Insert into student(name,address)values
    ('Pratistha','Jhapa');";
    $sql .="Insert into student(name,address)values
    ('Unique','Hetauda');";
    $sql .="Insert into student(name,address)values
    ('Osiyan','Dhading')";
    
   if($conn->multi_query($sql)==TRUE){
        echo"new records inserted successfully";
    }else{
        echo"Error".$conn->error;
    }
    $conn->close();
    ?>
</body>
</html>