<!DOCTYPE html>
<html>
<head>
    <title>Enhanced Vowel Counter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        h1 {
            color: #333;
        }
        form {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"] {
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            width: 200px;
        }
        input[type="submit"] {
            background-color: #5cb85c;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #4cae4c;
        }
        p {
            font-size: 16px;
            color: #333;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Enhanced Vowel Counter</h1>
    <form method="post">
        <label for="text">Enter text:</label>
        <input type="text" name="text" id="text" required>
        <input type="submit" value="Count Vowels">
    </form>

    <?php
    
    function countVowel($str) : int {
        $vowels = ['a', 'e', 'i', 'o', 'u'];
        $count = 0;
        $textLower = strtolower($str);

        for ($i = 0; $i < strlen($textLower); $i++) {
            if (in_array($textLower[$i], $vowels)) {
                $count++;
            }
        }

        return $count;
        
    }


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $text = $_POST["text"];
        
        if (empty($text)) {
            echo "<p class='error'>Please enter some text.</p>";
        } else {
            $vowels = ['a', 'e', 'i', 'o', 'u'];
            $count = countVowel($text);
            

            echo "<p>Total vowels: " . $count . "</p>";
        }
    }
    ?>
</body>
</html>
