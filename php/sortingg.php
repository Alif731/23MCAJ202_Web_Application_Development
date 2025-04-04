<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Sorting</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 20px;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
            text-align: left;
        }
        h2 {
            color: #333;
        }
        pre {
            background: #eee;
            padding: 10px;
            border-radius: 5px;
            overflow: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Original Array</h2>
        <pre>
            <?php
            // Array of student names
            $students = array("John", "Alice", "Michael", "Sophie", "David");
            print_r($students);
            ?>
        </pre>

        <h2>Array sorted in Ascending Order (asort)</h2>
        <pre>
            <?php
            asort($students);
            print_r($students);
            ?>
        </pre>

        <h2>Array sorted in Descending Order (arsort)</h2>
        <pre>
            <?php
            arsort($students);
            print_r($students);
            ?>
        </pre>
    </div>
</body>
</html>
