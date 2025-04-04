<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQLite Database Records</title>
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
        <h2>SQLite Database Records</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Role</th>
            </tr>
            <?php
            // Connect to SQLite database
            $db = new SQLite3('cricket.db');

            // Query to get users
            $results = $db->query("SELECT id, name, role FROM players");

            while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
                echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['role']}</td></tr>";
            }

            $db->close();
            ?>
        </table>
    </div>
</body>
</html>
