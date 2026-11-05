<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DSA Duplicate Finder</title>
    <link rel="stylesheet" href="style.css">
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

    /* Container ko center aur beautiful banane ke liye */
    .container {
        background-color: rgba(255, 255, 255, 0.85); /* Halki white background taaki text saaf dikhe */
        padding: 40px;
        border-radius: 15px;
        text-align: center;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    input {
        margin: 5px;
        padding: 10px;
        width: 250px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    button {
        margin: 5px;
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }
    </style>
</head>
<body>
    <div class="container">
        <h2>C & DSA Based  Finder</h2>
        <form action="process.php" method="POST">
            <label>Numbers enter karein (Space ya comma dekar):</label><br><br>
            <input type="text" name="numbers" placeholder="e.g. 10 20 10 30 20" required><br><br>
            <button type="submit" formaction="process.php">Find Max Sum For Two Numbers</button>
              <button type="submit" formaction="process1.php">Find Min Sum For Two Numbers</button>
        </form>
    </div>
</body>
</html>