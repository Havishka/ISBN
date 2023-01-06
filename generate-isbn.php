<?php

require "isbn.php";

header("Content-Type: application/json");

// Get the form data
$title = $_POST["title"];
$author = $_POST["author"];

// Generate a unique ISBN number
$isbn = generate_unique_isbn();

// Save the book to the database
$conn = new mysqli("localhost", "root", "", "isbn");
$conn->query("INSERT INTO books (isbn, title, author) VALUES ('$isbn', '$title', '$author')");
$conn->close();

echo json_encode(["isbn" => $isbn]);
?>