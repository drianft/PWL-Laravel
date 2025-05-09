<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "toko_buku";

$koneksi = new mysqli($server, $username, $password, $database);

if ($koneksi->connect_error) {  
    die("Connection failed: " . $koneksi->connect_error);
}

$sql = "SELECT books.title, books.author_id, books.price, author.author_name 
  FROM books 
  JOIN author ON books.author_id = author.author_id";
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "Judul: " . $row["title"]. " - Penulis: " . $row["author_name"]. " - Harga: " . $row["price"]. "<br>";
  }
} else {
  echo "0 results";
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="submit.php" method="post"></form>
    <label for="judul">Judul Buku:</label><br>
    <input type="text" id="judul" name="judul"><br>
    <label for="penulis">Penulis:</label><br>
    <input type="text" id="penulis" name="penulis"><br>
    <label for="harga">Harga:</label><br>
    <input type="text" id="harga" name="harga"><br><br>
    <input type="submit" value="Submit">
  </form>

  <?php
  $sql = "SELECT books.title, author.author_name,books.price 
    FROM books 
    JOIN author ON books.author_id = author.author_id";
  $result = $koneksi->query($sql);

  if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>Judul</th><th>Penulis</th><th>Harga</th></tr>";
    while($row = $result->fetch_assoc()) {
      echo "<tr><td>" . $row["title"]. "</td><td>" . $row["author_name"]. "</td><td>" . $row["price"] . "</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
  $koneksi->close();
  ?>
</body>
</html>