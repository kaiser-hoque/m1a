<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>even_odd_checker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body> 
    
<!-- Build a PHP program called even_odd_checker.php that checks whether a given number is even or odd. Provide an input field where the user can enter a number. Display a message indicating whether the number is even or odd. --> 

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
                    <h1 class="text-center text-primary">Task-4</h1>
                    <hr class="text-primary">

                    <form method="post" action="">
                        <div class="mb-3">
                            <label for="number" class="form-label"><b class="text-warning">Enter a Number:</b></label>
                            <input type="number" class="form-control" name="number" id="number" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Check</button>
                    </form>

                    <hr>

                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $number = $_POST["number"];
                        $result = ($number % 2 == 0) ? "Even" : "Odd";
                        echo "<h3 class='text-warning'>The number $number is $result.</h3>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>