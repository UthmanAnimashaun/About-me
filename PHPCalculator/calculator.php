  <?php
    if(isset ($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 =$_POST['num2'];
        $operator = $_POST['opt'];
    
        switch($operator){
            case "Addition":
                $answer = $num1 + $num2;
            break;
            case "Subtraction":
                $answer = $num1 - $num2;
            break;
            case "Multiplication":
               $answer = $num1 * $num2;
            break;
            case "Exponential":
               $answer = $num1 ** $num2;
            break;
            case "Division":
                $answer = $num1 / $num2;        
             break;
        }
    }

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
    <link rel="stylesheet" href="./bootstrap.min.css">
    <style>
        body{
            background: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: -webkit-linear-gradient(right, blue, green, red, brown, violet);
        }
        h3 {
            display: flex;
            position: absolute;
            top: 10px;
            left: 10%;
            border: 1px solid blue;
            padding: 10px;
        }
        a {
            text-decoration: none;
        }
        center{ 
            background: grey;
        }
        ::placeholder{
            color: aliceblue;
            text-align: center;
        }
        .button{
            width: 50%;
            height: 50px;
            background-color: green;
            color: aliceblue;
        }
        .text{
            width: 50%;
            height: 50px;
            background-color: #444;
            color: aliceblue;
        }
        .opt{
            width: 50%;
            height: 60px;
            background-color: #444;
            color: aliceblue;
        }
        select {
            border-radius: 5px;
            border: 1px solid aliceblue;
        }
         .value{
            grid-column: span 4;
            height: 100px;
            text-align: right;
            border: none;
            outline: none;
            padding: 10px;
            font-size: 18px;
        }
        .body {
            width: auto;
            border: 1px solid black;
            display: block;
        }
    </style>
</head>
<body>
    <h3>
        <a href="../index.php">
            &LeftArrow; Back to Home Page
        </a>
    </h3>
    <center>
        <h1>Uthman's mini Calculator</h1>
        <form action="" class="body" method="POST"> 
        <input 
        value="<?php echo @$answer; ?>" 
        placeholder="Answer" 
        class="opt value form-conktrol" 
        type="text" 
        name="answer"
         readonly><br>

            <label>Num1</label>
            <input type="number" class="text form-control" name="num1" placeholder="Num1" required><br>

            <label>Num2</label>
            <input type="number" name="num2" placeholder="Num2" class="text form-control" required><br>

            <label>Select operator </label><br>

                <select name="opt" class="opt">
                    <option class="text">Addition</option>
                    <option class="text">Subtraction</option>
                    <option class="text">Multiplication</option>
                    <option class="text">Exponential</option>
                    <option class="text">Division</option>
                </select><br><br>
            
            <input type="submit" value="Submit" name="submit" class="button form-control">
        </form>
    </center>
    
</body>
</html>