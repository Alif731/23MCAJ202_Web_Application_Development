<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    http_response_code(500);
    echo "Database connection failed.";
    exit();
}

$acc_no = $_POST['accession_number'];
$title = $_POST['title'];
$authors = $_POST['authors'];
$edition = $_POST['edition'];
$publisher = $_POST['publisher'];

$sql = "INSERT INTO books (accession_number, title, authors, edition, publisher)
        VALUES ('$acc_no', '$title', '$authors', '$edition', '$publisher')";

if ($conn->query($sql) === TRUE) {
    echo "Book added successfully!";
} else {
    http_response_code(500);
    echo "Error: " . $conn->error;
}

$conn->close();
?>
