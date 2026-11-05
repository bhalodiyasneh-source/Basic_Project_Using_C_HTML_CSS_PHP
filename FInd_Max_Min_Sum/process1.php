<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find_Sum</title>
    <style>
         body {
        margin: 0;
        height: 100vh;
        display: flex;
        justify-content: center;  /* Horizontal center */
        align-items: center;      /* Vertical center */
        background-image: url('img.avif');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        font-family: 'Times New Roman', Times, serif;
    }
    </style>
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_input = $_POST['numbers'];
    $numbers_array = preg_split('/[\s,]+/', trim($user_input));
    $formatted_input = implode(' ', $numbers_array);
    $clean_input = escapeshellarg($formatted_input);
    $exe_path = "Min_Sum.exe"; 
    $command = $exe_path . " " . $clean_input;
    $output = shell_exec($command);
    echo "<div style='width: 50%; margin: 50px auto; background: #f4f4f4; padding: 20px; border-radius: 8px; font-family: sans-serif; text-align: center;'>";
    echo "<h2>DSA Execution Results (C Language)</h2>";
    echo "<pre style='background: #fff; padding: 15px; border-radius: 5px; text-align: left;'>$output</pre>";
    echo "<br><a href='index.php' style='background: teal; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;'>Go Back</a>";
    echo "</div>";
}
?>
</body>
</html>