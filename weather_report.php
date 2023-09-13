<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>weather_report</title>
</head>

<body>
    <!-- Create a PHP script named weather_report.php that provides weather information based on temperature. Use a variable to store the temperature. Depending on the temperature range, display messages like "It's freezing!", "It's cool.", or "It's warm." -->

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
                <h1 class="text-center text-primary">Task-5</h1>
                <hr class="text-primary">

                <form action="" method="post">
                    <label for="temperature"><b class="text-warning">Enter the temperature: </b></label>
                    <input type="text" class="form-control mt-2" name="temperature" id="temperature">
                    <input type="submit" class="btn btn-primary mt-2" value="Get Weather Report">
                </form>
                <hr>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $temperature = $_POST['temperature'];

                    if ($temperature < 0) {
                        echo "<p class='text-warning fs-3'>It's freezing!</p>";
                    } elseif ($temperature < 15) {
                        echo "<p class='text-success fs-3'>It's cool.</p>";
                    } else {
                        echo "<p class='text-info fs-3'>It's warm.</p>";
                    }
                }

                ?>
            </div>
        </div>
    </div>

</body>

</html>