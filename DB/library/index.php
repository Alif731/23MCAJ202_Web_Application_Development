<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Add a Book</h2>
    <form id="addBookForm">
    <label>Accession Number:</label>
    <input type="number" name="accession_number" required>

    <label>Title:</label>
    <input type="text" name="title" required>

    <label>Authors:</label>
    <input type="text" name="authors" required>

    <label>Edition:</label>
    <input type="text" name="edition">

    <label>Publisher:</label>
    <input type="text" name="publisher">

    <div class="button-container">
        <input type="submit" value="Add Book">
    </div>
</form>


   

    <h2>Search Book by Title</h2>
    <form action="search_book.php" method="post">
    <label>Enter title to search:</label>
    <input type="text" name="search_title" required>
    
    <div class="button-container">
        <input type="submit" value="Search">
    </div>
</form>
    
</div>
<script>
document.getElementById('addBookForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const formData = new FormData(this);

    fetch('add_book.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        alert("Book added successfully!");
        document.getElementById('addBookForm').reset();
    })
    .catch(error => {
        alert("Error adding book.");
        console.error(error);
    });
});
</script>

</body>
</html>