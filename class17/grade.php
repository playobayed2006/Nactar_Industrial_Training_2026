
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grade Calculator</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            margin: 0;
        }

        .container {
            background: white;
            padding: 30px;
            border-radius: 18px;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 10px 30px #0003;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-top: 7px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 13px;
            margin-top: 20px;
            border: none;
            border-radius: 8px;
            background: #667eea;
            color: white;
            font-size: 17px;
            cursor: pointer;
        }

        button:hover {
            background: #5266c5;
        }

        .reset {
            background: #555;
            margin-top: 10px;
        }

        .result {
            background: #f0f4ff;
            padding: 18px;
            border-radius: 10px;
            margin-top: 20px;
            text-align: center;
        }

        .grade {
            font-size: 30px;
            font-weight: bold;
            color: #5266c5;
        }

        .error {
            color: red;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>🎓 Grade Calculator</h2>

    <form method="POST">
        <label>Bangla Marks</label>
        <input type="number" name="bangla"
            min="0" max="100" required
            value="<?= htmlspecialchars($_POST['bangla'] ?? '') ?>">

        <label>English Marks</label>
        <input type="number" name="english"
            min="0" max="100" required
            value="<?= htmlspecialchars($_POST['english'] ?? '') ?>">

        <label>Math Marks</label>
        <input type="number" name="math"
            min="0" max="100" required
            value="<?= htmlspecialchars($_POST['math'] ?? '') ?>">

        <button type="submit" name="calculate">
            Calculate Result
        </button>
    </form>

    <form method="POST">
        <button type="submit" class="reset">
            Reset
        </button>
    </form>

    <?php
    if (isset($_POST['calculate'])) {

        $bangla = (float) $_POST['bangla'];
        $english = (float) $_POST['english'];
        $math = (float) $_POST['math'];

        if (
            $bangla < 0 || $bangla > 100 ||
            $english < 0 || $english > 100 ||
            $math < 0 || $math > 100
        ) {
            echo '<p class="error">Marks must be between 0 and 100!</p>';
        } else {

            $average = ($bangla + $english + $math) / 3;

            if ($average >= 80 && $average <= 100) {
                $grade = "A+";
            } elseif ($average >= 70) {
                $grade = "A";
            } elseif ($average >= 60) {
                $grade = "A-";
            } elseif ($average >= 50) {
                $grade = "B";
            } elseif ($average >= 40) {
                $grade = "C";
            } elseif ($average >= 33) {
                $grade = "D";
            } else {
                $grade = "F";
            }
    ?>

    <div class="result">
        <h3>📊 Your Result</h3>
        <p>Bangla: <?= $bangla ?></p>
        <p>English: <?= $english ?></p>
        <p>Math: <?= $math ?></p>

        <h3>Average:
            <?= number_format($average, 2) ?>
        </h3>

        <p>Grade:</p>
        <div class="grade">
            <?= $grade ?>
        </div>
    </div>

    <?php
        }
    }
    ?>
</div>

</body>
</html>
