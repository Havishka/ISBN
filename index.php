<html>
<style>
  form {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 50%;
    margin: 0 auto;
  }

  form > * {
    width: 100%;
    margin: 10px 0;
  }

  form button {
    background-color: blue;
    color: white;
    font-size: 18px;
    padding: 10px;
    border: none;
    cursor: pointer;
  }

  form button:hover {
    background-color: darkblue;
  }

  form button:active {
    transform: translateY(2px);
  }
</style>



<form id="isbn-form" action="generate-isbn.php" method="POST">
  <label for="title" >Book Title:</label ><br>
  <input type="text" id="title" name="title" required><br>
  <label for="author" >Author:</label><br>
  <input type="text" id="author" name="author" required><br>
  <button type="submit">Generate ISBN</button>
</form>

<script>
  const form = document.getElementById("isbn-form");
  form.addEventListener("submit", async (event) => {
    event.preventDefault();

    // Get the form data
    const formData = new FormData(form);

    // Send a POST request to the server
    const response = await fetch("generate-isbn.php", {
      method: "POST",
      body: formData,
    });

    // Get the generated ISBN number
    const data = await response.json();
    const isbn = data.isbn;

    // Display the ISBN number
    alert(`Your ISBN number is: ISBN ${isbn}`);
  });
</script>
</html>