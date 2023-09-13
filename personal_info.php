<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>personal_info</title>
</head>

<body>

<!-- Create a PHP file named personal_info.php that displays your personal information using variables and the echo statement. Include your name, age, country, and a brief introduction. -->

    <style>
        .styled-div {

            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
    </style>

    <?php
        $name = "Ahtesnul hoque kaiser";
        $age = 25;
        $country = "Bangladesh";
        $brief = " Hi, I'm Kaiser. I'm a passionate coder from Bangladesh, eager to make a difference thsoftware development.";
    ?>

    <div class="container mt-5 ">
        <div class="row">
            <div class="col-sm-4 card mx-auto styled-div">
                <h1 class="text-center text-primary">Task-1</h1>
                <h3 class="text-center text-warning">Personal Information</h3>
                <hr class="text-primary">
                <div class="info-label"><b>Name:</b></div>
                <p><?= $name ?></p>
                <div class="info-label"><b>Age:</b></div>
                <p><?= $age ?></p>
                <div class="info-label"><b>Country:</b></div>
                <p><?= $country ?></p>
                <div class="info-label"><b>Brief:</b></div>
                <p class="brief"><?= $brief ?></p>
            </div>
            <hr>
        </div>
    </div>
    </div>
    </div>
</body>
</html>