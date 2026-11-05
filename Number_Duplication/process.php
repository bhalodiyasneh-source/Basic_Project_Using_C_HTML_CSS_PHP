<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_input = $_POST['numbers'];

    // Agar user ne commas ya spaces diye hain, toh unhe space mein convert karke alag karein
    // Jaise "1, 2, 3" ya "1 2 3" sabhi ko space se split kar dega
    $numbers_array = preg_split('/[\s,]+/', trim($user_input));
    $formatted_input = implode(' ', $numbers_array);

    // Security ke sath command banana
    $clean_input = escapeshellarg($formatted_input);
    
    // Yahan dhyan dein ki aapke .exe file ka exact naam ho
    $exe_path = "Duplicate_Number.exe"; 
    $command = $exe_path . " " . $clean_input;
    
    $output = shell_exec($command);

    echo "<div style='width: 50%; margin: 50px auto; background: #f4f4f4; padding: 20px; border-radius: 8px; font-family: sans-serif; text-align: center;'>";
    echo "<h2>DSA Execution Results (C Language)</h2>";
    echo "<pre style='background: #fff; padding: 15px; border-radius: 5px; text-align: left;'>$output</pre>";
    echo "<br><a href='index.php' style='background: teal; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;'>Go Back</a>";
    echo "</div>";
}
?>