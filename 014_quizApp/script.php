<!DOCTYPE html>
<html>
<head>
    <title>Quiz App</title>
    <style>
        body {
            font-family: 'Poppins', Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.15);
            width: 90%;
            max-width: 600px;
            max-height: 90vh; /* Prevents it from overflowing */
            overflow-y: auto; /* Enables scrolling */
            text-align: center;
        }
        h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 15px;
        }
        form {
            text-align: left;
        }
        p {
            font-size: 18px;
            font-weight: 500;
            color: #333;
            margin: 10px 0;
        }
        label {
            display: block;
            background: #f1f3f5;
            padding: 10px;
            border-radius: 6px;
            margin: 5px 0;
            cursor: pointer;
            transition: 0.3s;
        }
        label:hover {
            background: #e0e4e7;
        }
        input[type="radio"] {
            margin-right: 10px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #007BFF;
            color: #ffffff;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s ease-in-out;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        h2 {
            font-size: 22px;
            font-weight: 600;
            color: #333;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Quiz App</h1>
        <form method="post">
            <?php
            $questions = [
                "What is the capital of France?" => ["Paris", "London", "Berlin", "Madrid"],
                "What is 2 + 2?" => ["3", "4", "5", "6"],
                "What is the capital of Spain?" => ["Lisbon", "Madrid", "Rome", "Paris"],
                "What is the capital of Italy?" => ["Berlin", "Athens", "Rome", "Lisbon"],
                "What is the capital of Germany?" => ["Berlin", "Moscow", "Tokyo", "Beijing"],
                "What is the capital of Portugal?" => ["Lisbon", "Madrid", "Paris", "Rome"],
                "What is the capital of Greece?" => ["Athens", "Berlin", "Lisbon", "Madrid"],
                "What is the capital of Russia?" => ["Moscow", "Tokyo", "Beijing", "Berlin"],
                "What is the capital of Japan?" => ["Tokyo", "Beijing", "Moscow", "Berlin"],
                "What is the capital of China?" => ["Beijing", "Tokyo", "Moscow", "Berlin"]
            ];

            $correctAnswers = [
                "What is the capital of France?" => "Paris",
                "What is 2 + 2?" => "4",
                "What is the capital of Spain?" => "Madrid",
                "What is the capital of Italy?" => "Rome",
                "What is the capital of Germany?" => "Berlin",
                "What is the capital of Portugal?" => "Lisbon",
                "What is the capital of Greece?" => "Athens",
                "What is the capital of Russia?" => "Moscow",
                "What is the capital of Japan?" => "Tokyo",
                "What is the capital of China?" => "Beijing"
            ];

            $i = 1;
            foreach ($questions as $question => $options) {
                echo "<p>$i. $question</p>";
                foreach ($options as $option) {
                    echo "<label><input type='radio' name='answers[$i]' value='$option' required /> $option</label>";
                }
                $i++;
            }
            ?>
            <br>
            <input type="submit" name="submit" value="Submit Quiz" />
        </form>

        <?php
        if (isset($_POST['submit']) && isset($_POST['answers'])) {
            $score = 0;
            $answers = $_POST['answers'];
            $i = 1;

            foreach ($correctAnswers as $question => $correctAnswer) {
                if (isset($answers[$i]) && $answers[$i] === $correctAnswer) {
                    $score++;
                }
                $i++;
            }

            echo "<h2>Your Score: $score / 10</h2>";
        }
        ?>
    </div>
</body>
</html>
