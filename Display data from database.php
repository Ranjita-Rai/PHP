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
    $sql="select id,name,address from student ";
    $result= $conn->query($sql);
    if($result->num_rows >0){
        while($row=$result->fetch_assoc())
        echo "id= ".$row["id"]." name= ".$row["name"]." address= ".$row["address"]."<br>";

    }else{
        echo "no records";

    }
    $conn->close();
    ?>  `


</body>
</html>