<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comparison_tool</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <!-- Develop a PHP tool named comparison_tool.php that compares two numbers and displays the larger one using the ternary operator.Create a form where the user can input two numbers. Use the ternary operator to determine the larger number and display the result. Or, declare 2 variable numbers and use the ternary operator to determine the large number and display the result -->

    <div class="container mt-5">
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
                    <h1 class="text-center text-primary">Task-6</h1>
                    <hr class="text-primary">



                    <form action="" method="post">
                        <label for="num1" class="form-label">
                            <b class="text-warning">Enter the first number: </b>
                        </label>

                        <input type="number" class="form-control" name="num1" id="num1" required>
                        <br>
                        <label for="num2"><b class="text-warning">Enter the seceond number: </b></label>
                        <input type="number" class="form-control" name="num2" id="num2" required>
                        <br>
                        <input type="submit" class="Compare btn btn-primary">
                    </form>

                    <hr>

                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $num1 = $_POST['num1'];
                        $num2 = $_POST['num2'];

                        $largerNumber = ($num1 > $num2) ? $num1 : $num2;

                        echo "<h3 class='text-warning'>The larger number is: $largerNumber</h3>";
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</body>

</html>