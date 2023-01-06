<?php

function generate_unique_isbn() {
    // Connect to the database
    $conn = new mysqli("localhost", "root", "", "isbn");
  
    do {
      // Generate the first three digits (ISBN agency)
      //$isbn = rand(100, 999) . "-";
  
      // Generate the language code
      //$isbn .= rand(0, 9) . "-";
  
      // Generate the book identifier using a cryptographically secure random number generator
        // Generate the book identifier using a cryptographically secure random number generator
    $isbn = random_int(1000000000000, 9999999999999);

  
      // Calculate the check digit
      // Calculate the check digit
    //   $check_digit = 0;
    //   for ($i = 0; $i < strlen($isbn); $i++) {
    //     if ($i % 2 == 0) {
    //       $check_digit += (int)$isbn[$i];
    //     } else {
    //       $check_digit += 3 * (int)$isbn[$i];
    //     }
    //   }
    //   $check_digit = 10 - ($check_digit % 10);
    //   if ($check_digit == 10) {
    //     $check_digit = 0;
    //   }
    //   $isbn .= $check_digit;
  
      // Check if the ISBN is already in the database
      $result = $conn->query("SELECT * FROM books WHERE isbn = '$isbn'");
    } while ($result->num_rows > 0);
  
    // Insert the new ISBN into the database
   // $conn->query("INSERT INTO books (isbn) VALUES ('$isbn')");
  
    // Close the database connection
    $conn->close();
  
    return $isbn;
  }
  

  ?>