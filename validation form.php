<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>validation</title>
    <style>
        .error{color:#ff0000;}
        </style>
</head>
<body>

        <?php
        $nameErr="";$emailErr=""; $websiteErr="";$commentErr=""; $genderErr="";
        if($_SERVER["REQUEST_METHOD"]=="POST");
        {
            if(empty($_POST["name"]))
            {
                $nameErr="Name is required";
            } else{
                $name=$_POST["name"];
            }
            if(empty($_POST["email"]))
            {
                $emailErr="email is required";
            }else if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) ) {
                $emailErr="Invalid Email";

            }
            else{
                $email=$_POST["email"];
            }
            if(empty($_POST["website"]))
            {
                $websiteErr="Website is required";
            }else if(!filter_var($_POST["website"], FILTER_VALIDATE_URL) ) {
                $websiteErr="Invalid website";
            }
            else{
                $website=$_POST["website"];
            }
            if(empty($_POST["comment"]))
            {
                $commentErr="comment is required";
            }
            else{
                $comment=$_POST["comment"];
            }
            if(empty($_POST["gender"]))
            {
                $genderErr="gender is required";
            }
            else{
            $gender = $_POST["gender"];
            }

            
        }

    ?>
    <h2> PHP form validation Example</h2>
    <form method="POST">
        Name: <input type="text" name="name">
        <span class="error">*<?php echo $nameErr;?></span><br><br>
        E-mail: <input type="text" name="email">
        <span class="error">*<?php echo $emailErr;?></span><br><br>
        Website: <input type="text" name="website">
        <span class="error">*<?php echo $websiteErr;?></span><br>
        <br>
        Comment: <textarea rows="10" column="15" name="comment"></textarea>
        <span class="error">*<?php echo $commentErr;?></span><br>
        <br>
        Gender:
        <input type="radio" name="gender" value="Female">Female
        <input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Other">Other
        <span class="error">*<?php echo $genderErr;?></span><br><br>


        <input type="submit" value="submit"><br>

    </form>
    <br>
    <?php
    echo "your input values: ";
    echo "<br>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    echo "<br>"
    
    ?>

</body>
</html>