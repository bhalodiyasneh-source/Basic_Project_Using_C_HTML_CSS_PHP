<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice_For_This</title>
   <style>
    body{
        background-image: url('1350.jpg');
    }
    .label{
        text-align: center;
        font-family: 'Times New Roman', Times, serif;
        font-size: xxx-large;
    }
    button{
        font-size: xx-large;
        padding: 10px 25px;
    }
    input[type="text"]
    {
        font-size: xx-large;
    }
    h22{
      
        font-family: 'Times New Roman', Times, serif;
        font-size: xx-large;
    }
    h21{
      
        font-family: 'Times New Roman', Times, serif;
        font-size: xx-large;
    }
    
   </style>
</head>
<body>
    <form action="process.php" method="post">
    <div class="label">   
     <label>Enter Number </label><br><br>
    <input type="text" name="numbers" placeholder="Do Not Enter Space"  size="xx-large" ><br>
    <button type="submit" formaction="process.php">Find Power 2</button>
    <button type="submit" formaction="process1.php">Find Power 3</button>
    </div>
    <h22><b>
        ~For Example<br><br>
        ~pow 2
        ->If You Enter A Number 123 So Answere Is <br>
        ->1^2, 2^2,3^2<br>
        ->And Final Answere Is 1+4+9=14
        </b>
    </h22>
     <h21><b>
        ~For Example<br><br>
        ~pow 3
        ->If You Enter A Number 123 So Answere Is <br>
        ->1^3, 2^3,3^3<br>
        ->And Final Answere Is 1+8+27=36
</b>
    </h21>
    </form>
</body>
</html> 