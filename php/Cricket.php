<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indian Cricket Players</title>
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
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Indian Cricket Players</h2>
        <table>
            <tr>
                <th>#</th>
                <th>Player Name</th>
            </tr>
            <?php
            $players = array("Virat Kohli", "Rohit Sharma", "MS Dhoni", "Sachin Tendulkar", "Kapil Dev", "Rahul Dravid", "Sourav Ganguly", "Anil Kumble", "Sunil Gavaskar", "Yuvraj Singh");
            $count = 1;
            foreach ($players as $player) {
                echo "<tr><td>$count</td><td>$player</td></tr>";
                $count++;
            }
            ?>
        </table>
    </div>
</body>
</html>
