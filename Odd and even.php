<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   $filename="number.txt";
   $handle=fopen ($filename,"r");
   if($handle){
    $oddfile=fopen('odd.txt','w');
    $evenfile=fopen('even.txt','w');
    while (($number=fgets($handle)) !==false){
        $number=intval($number);
    if($number % 2 == 0){
        fwrite($evenfile,"\n".$number);
    }else{
        fwrite($oddfile,"\n".$number);
    }
    }

    fclose($handle);
    fclose($oddfile);
    fclose($evenfile);
    
    echo "Odd and even numbers have been separated and saved in 'odd.txt' and 'even.txt' respectively.";
} else {
   
    echo "Error opening file 'numbers.txt'.";
}

    ?>
     
</body>
</html>