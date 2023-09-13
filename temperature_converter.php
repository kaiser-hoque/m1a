<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <title> Temperature Converter</title>
</head>

<body>
    
    <!-- Design a PHP program called temperature_converter.php that converts temperatures between Celsius and Fahrenheit.Provide a form where the user can input a temperature value and select the conversion direction (Celsius to Fahrenheit or vice versa). Display the converted temperature.Or, Declare 3 variable temperature values and select the conversion direction (Celsius to Fahrenheit or vice versa). Display the converted temperature." -->

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
                <h1 class="text-center text-primary">Task-2</h1>
                <hr class="text-primary">

                <form action="" method="post">
                    <label for="temperature" class="form-label"><b class="text-warning">Enter Temperature: </b></label><br>
                    <input type="number" name="temperature"class="form-control" id="temperature" required>
                    <br>
                    <label for="conversionType" class="form-label"><b class="text-warning">Select Conversion Type:</b></label>
                    <select name="conversionType" id="conversionType" required>
                        <option value="celsiusToFahrenheit">Celsius to Fahrenheit</option>
                        <option value="fahrenheitToCelsius">Fahrenheit to Celsius</option>
                    </select>
                    <br>
                    <input type="submit" class="btn btn-primary mt-3" value="Convert">
                </form>
                <hr>

                <?php
                function celsiusToFahrenheit($celsius)
                {
                    return ($celsius * 9 / 5) + 32;
                }

                function fahrenheitToCelsius($fahrenheit)
                {
                    return ($fahrenheit - 32) * 5 / 9;
                }

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $temperature = $_POST['temperature'];
                    $conversionType = $_POST['conversionType'];

                    $convertedTemperature = 0;

                    if ($conversionType == 'celsiusToFahrenheit') {
                        $convertedTemperature = celsiusToFahrenheit($temperature);
                        $fromUnit = "Celsius";
                        $toUnit = "Fahrenheit";
                    } elseif ($conversionType == 'fahrenheitToCelsius') {
                        $convertedTemperature = fahrenheitToCelsius($temperature);
                        $fromUnit = "Fahrenheit";
                        $toUnit = "Celsius";
                    }

                    echo "<h3 class='text-warning'>$temperature $fromUnit is equal to $convertedTemperature $toUnit.</h3>";
                }
                ?>
            </div>
        </div>
    </div>

</body>

</html>