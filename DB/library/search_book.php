
<?php
$conn = new mysqli("localhost", "root", "", "library");
if ($conn-> connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$search_title = $_POST['search_title'];
$sql = "SELECT * FROM books WHERE title LIKE ?";
$stmt = $conn-> prepare($sql);
$likeTitle = "%" . $search_title . "%";
$stmt-> bind_param("s", $likeTitle);
$stmt-> execute();
$result = $stmt->get_result();



echo '<link rel="stylesheet" href="style.css">';
echo '<div class="container">';
echo "<h2>Search Results for \"$search_title\"</h2>";

if ($result->num_rows > 0) {
    echo "<table>
        <tr>
            <th>Accession Number</th>
            <th>Title</th>
            <th>Authors</th>
            <th>Edition</th>
            <th>Publisher</th>
        </tr>";
    while ($row = $result->fetch_assoc()){
        echo "<tr>
            <td>{$row['accession_number']}</td>
            <td>{$row['title']}</td>
            <td>{$row['authors']}</td>
            <td>{$row['edition']}</td>
            <td>{$row['publisher']}</td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "<p>No Books Found.</p>";
}

echo '<a href="index.php">← Back to Home</a>';
echo '</div>';

$conn->close();
?>