  <?php
    if(isset ($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 =$_POST['num2'];
        $operator = $_POST['opt'];
    
        switch($operator){
            case "Addition":
                @$answer = $num1 + $num2;
            break;
            case "Subtraction":
                @$answer = $num1 - $num2;
            break;
            case "Multiplication":
               @$answer = $num1 * $num2;
            break;
            case "Exponential":
               @$answer = $num1 ** $num2;
            break;
            case "Division":
                @$answer = $num1 / $num2;        
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
    <style>
        body{
            background: #626262;
            color: aliceblue;
        }
        ::placeholder{
            color: aliceblue;
        }
        #button{
            width: 300px;
            height: 50px;
            background-color: green;
            color: aliceblue;
            margin-left: 60px;
        }
        #text{
            width: 300px;
            height: 50px;
            background-color: #444;
            color: aliceblue;
        }
        #opt{
            width: 310px;
            height: 60px;
            background-color: #444;
            color: aliceblue;
        }
    </style>
</head>
<body>
    <h1>Uthman's mini Calculator</h1>
    <form action="" method="POST">
        <table>    
            <tr>
                <td>Num1</td>
                <td><input type="text" id="text" name="num1" placeholder="Num1"></td>
            </tr><br>

            <tr>
                <td>Num2</td>
                <td><input type="text" id="text" name="num2" placeholder="Num2"></td>
            </tr><br>

            <tr>
                <td>Select </td>
                <td>
                <select name="opt" id="opt">
                    <option id="text">Addition</option>
                    <option id="text">Subtraction</option>
                    <option id="text">Multiplication</option>
                    <option id="text">Exponential</option>
                    <option id="text">Division</option>
                </select>
                </td>
            </tr><br>

            <tr>
            <td>Answer</td>
            <td><input type="text" id="text" name="answer" value="<?php echo @$answer; ?>" placeholder="Answer"></td>
            </tr><br>     
        </table>
        <input type="submit" value="Submit" name="submit" id="button">
    </form>

    
</body>
</html>