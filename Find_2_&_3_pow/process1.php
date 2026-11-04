<?php
$output = "";
    if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $user_input=$_POST['numbers'];
            $exe_path="logic1.exe";
            $command=$exe_path . " " . escapeshellarg($user_input); 
            $output=shell_exec($command);
    
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <style>
        body{
            background-image: url('1350.jpg');
            font-family: 'Times New Roman', Times, serif;
            font-size: x-large;
        }
        button{
              padding: 10px 25px;
        }
    </style>
</head>
<body>
    <div class="result_box">
        <?php 
        if (!empty($output)) {
            echo "Sum of Squared Digits: " . $output;
        } else {
            echo "No input provided!";
        }
        ?>
    </div>
    <br>
    <form action="index.php" method="get">
        <button type="submit" class="button">back</button>
    </form>
</body>
</html>