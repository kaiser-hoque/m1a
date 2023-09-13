<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

<!-- Build a PHP calculator named simple_calculator.php that performs basic arithmetic operations. Provide input fields for two numbers and a dropdown to select the operation (addition, subtraction, multiplication, division). Display the result of the chosen operation.Complete these tasks by writing PHP code that fulfills the requirements of each task. Feel free to enhance the tasks or add extra features if you'd like.This assignment will help you practice your PHP skills and apply the concepts you've learned. Good luck! -->

    <style>
        .styled-div {
            
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
    </style>

    <div class="container mt-5 ">
        <div class="row">
            <div class="col-sm-4 card mx-auto styled-div">
                <h1 class="text-center text-primary">Task-7</h1>
                    <hr class="text-primary">

                <form action="" method="post">
                    <div class="form-group">
                        <h4><label for="fnum" class="text-warning">1st Number:</label></h4>
                        <input type="number" class="form-control" name="fnum" placeholder="Enter Your 1st Number" required>
                    </div>

                    <div class="form-group">
                        <h4><label for="snum" class="text-warning">2nd Number:</label></h4>
                        <input type="number" class="form-control"  name="snum" placeholder="Enter Your 2nd Number" required>
                    </div>

                    <div class="form-group">
                        <h4 class="text-warning">Select Operation:</h4>
                        <label><input type="radio" name="operation" value="addition"> Addition</label>
                        <label><input type="radio" name="operation" value="subtraction"> Subtraction</label>
                        <label><input type="radio" name="operation" value="multiplication"> Multiplication</label>
                        <label><input type="radio" name="operation" value="division"> Division</label>
                    </div>

                    <button type="submit" name="calculate" class="btn btn-primary mt-2">Calculate</button>

                     

                </form>
                <hr>
                 

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $fnum = $_POST["fnum"];
                    $snum = $_POST["snum"];
                    $operation = $_POST["operation"];
                    $result = '';

                    switch ($operation) {
                        case "addition":
                            $result = $fnum + $snum;
                            break;
                        case "subtraction":
                            $result = $fnum - $snum;
                            break;
                        case "multiplication":
                            $result = $fnum * $snum;
                            break;
                        case "division":
                            if ($snum != 0) {
                                $result = $fnum / $snum;
                            } else {
                                echo "<p>Can't Divide By Zero</p>";
                            }
                            break;
                    }

                    if ($result !== '') {
                        echo "<h1 class='text-success'>Result: $result</h1>";
                    }
                }
                ?>
            </div>
        </div>
    </div>

</body>

</html>
