<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

<!-- Develop a PHP script named grade_calculator.php that computes the average of three test scores and determines the corresponding letter grade.Create a form where the user can input three test scores. Calculate the average and display it along with the corresponding grade (A, B, C, D, F). Or, declare 3 variable test scores and calculate the average and display it along with the corresponding grade (A, B, C, D, F) -->

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
                <div class="col-sm-6 card mx-auto styled-div">
                    <h1 class="text-center text-primary">Task-3</h1>
                    <hr class="text-primary">

                    <form method="post" action="" class="mb-4">
                        <div class="mb-3">
                            <label for="score1" class="form-label text-warning"><b>Test Score 1 <span style="opacity: 0.6";>(Bangla):</span></b></label>
                            <input type="text" class="form-control" name="score1" id="score1"   value="<?= $test_scores[0] ?? '' ?>">
                        </div>
                        <div class="mb-3">
                            <label for="score2" class="form-label text-warning"><b>Test Score 2 <span style="opacity: 0.6";>(English):</span></b></label>
                            <input type="text" class="form-control" name="score2" id="score2"   value="<?= $test_scores[1] ?? '' ?>">
                        </div>
                        <div class="mb-3">
                            <label for="score3" class="form-label text-warning"> <b>Test Score 3 <span style="opacity: 0.6";>(Math):</span></b></label>
                            <input type="text" class="form-control" name="score3" id="score3"  value="<?= $test_scores[2] ?? '' ?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Calculate</button>
                    </form>

                    <hr>

                    <?php
                    $test_scores = [];
                    $average_score = '';
                    $letter_grade = '';

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $test_scores[] = $_POST["score1"];
                        $test_scores[] = $_POST["score2"];
                        $test_scores[] = $_POST["score3"];
                        $average_score = array_sum($test_scores) / count($test_scores);

                        if ($average_score >= 90) {
                            $letter_grade = 'A';
                        } else if ($average_score >= 80) {
                            $letter_grade = 'B';
                        } else if ($average_score >= 70) {
                            $letter_grade = 'C';
                        } else if ($average_score >= 60) {
                            $letter_grade = 'D';
                        } else {
                            $letter_grade = 'F';
                        }
                    }
                    ?>

                    <?php
                    if ($average_score !== '') {
                        echo "<p class='text-success fs-4'>Average Score: <span class='text-warning'> $average_score </span></p>";
                        echo "<p class='text-success fs-4'>Letter Grade: <span class='text-warning'> $letter_grade </span></p>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>