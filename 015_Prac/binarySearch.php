<!DOCTYPE html>
<html>
<head>
    <title>Binary Search</title>
</head>
<body>
    <h2>Binary Search Implementation</h2>
    <form method="post">
        <label for="array">Enter array elements (comma-separated):</label><br>
        <input type="text" id="array" name="array" required><br><br>
        <label for="target">Enter target value:</label><br>
        <input type="number" id="target" name="target" required><br><br>
        <input type="submit" name="submit" value="Search">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $array = explode(',', $_POST['array']);
        $array = array_map('trim', $array);
        $array = array_map('intval', $array);
        sort($array);
        $target = intval($_POST['target']);

        function binarySearch($array, $target) {
            $left = 0;
            $right = count($array) - 1;

            while ($left <= $right) {
                $mid = floor(($left + $right) / 2);

                if ($array[$mid] == $target) {
                    return $mid;
                } elseif ($array[$mid] < $target) {
                    $left = $mid + 1;
                } else {
                    $right = $mid - 1;
                }
            }

            return -1;
        }

        $result = binarySearch($array, $target);

        if ($result != -1) {
            echo "<p>Target value $target found at index $result.</p>";
        } else {
            echo "<p>Target value $target not found in the array.</p>";
        }
    }
    ?>
</body>
</html>