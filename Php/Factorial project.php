<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1 class="title">Factorial</h1>
        <h4 class="info">Please enter your number</h4>
        <form method="post" class="form">
            <input type="number" name="number" id="number" placeholder="Enter your value :" />
            <input type="submit" name="submit" class="submit" value="Calculate" />
        </form>
        <?php
        if ($_POST) {
            $fact = 1;
            //getting value from input text box 'number'  
            $number = $_POST['number'];
            //echo "Factorial of $number:<br><br>";
            echo "<p class='status'>" . "Factorial of $number is:<br>" . "</p>";
            //start loop  
            for ($i = 1; $i <= $number; $i++) {
                $fact = $fact * $i;
            }
            echo "<p class='status num1'>" . $fact . "</p>";
        }
        ?>
    </div>
</body>

</html>