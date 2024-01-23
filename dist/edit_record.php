<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get ID from the query string
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Fetch record from the database
$sql = "SELECT * FROM real_estate_leads WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "No record found";
    exit;
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data and update the record
    // Collect data from POST request
    $employee_name = $_POST['employee_name'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $interest = $_POST['interest'];
    $desiredDate = $_POST['desiredDate'];
    $comments = $_POST['comments'];

    // Update SQL query
    $updateSql = "UPDATE real_estate_leads SET employee_name='$employee_name', name='$name', email='$email', phone='$phone', interest='$interest', desiredDate='$desiredDate', comments='$comments' WHERE id=$id";
    
    if ($conn->query($updateSql) === TRUE) {
        echo "Record updated successfully";
        // Optionally redirect back to a listing page or similar
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Real Estate Lead</title>
    <!-- include your stylesheets here -->
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" crossorigin="anonymous">

</head>
<style>
body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 10px;
        }

        h2 {
            text-align: center;
        }

        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: 20px auto;
        }

        form label {
            display: block;
            margin-bottom: 10px;
        }

        form input[type="text"],
        form input[type="email"],
        form input[type="tel"],
        form input[type="date"],
        form select,
        form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        form textarea {
            resize: vertical; /* Allow vertical resize */
        }

        form input[type="submit"] {
            width: 100%;
            background-color: #007bff;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: #0056b3;
        }

        @media (max-width: 768px) {
            form {
                width: 90%; /* Slightly smaller width on smaller screens */
                padding: 15px; /* Lesser padding */
            }
        }

        .back_btn{
         background-color: #d2042d;
          margin-top: 5px;
          
          padding: 6px;
          color: #ffff;
          border: 2px solid red;
          border-radius: 5px;
          width: 100%;
          background: #007bff;
          color: white;
          padding: 10px;
          border: none;
          border-radius: 4px;
        }
    </style>


</head>
<body>
<h2>Edit Real Estate Lead</h2>
    <form method="post" action="">
        <label for="employee_name">Employee Name:</label>
        <input type="text" id="employee_name" name="employee_name" value="<?php echo $row['employee_name']; ?>" required>

        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>" required>

        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" value="<?php echo $row['phone']; ?>">

        <label for="interest">Real Estate Interest:</label>
<select id="interest" name="interest">
    <option value="buy" <?php if ($row['interest'] == 'buy') echo 'selected'; ?>>Buying</option>
    <option value="sell" <?php if ($row['interest'] == 'sell') echo 'selected'; ?>>Selling</option>
    <option value="rent" <?php if ($row['interest'] == 'rent') echo 'selected'; ?>>Renting</option>
    <option value="invest" <?php if ($row['interest'] == 'invest') echo 'selected'; ?>>Investing</option>
    <option value="other" <?php if ($row['interest'] == 'other') echo 'selected'; ?>>Other</option>
</select>

        <label for="desiredDate">Desired Date:</label>
        <input type="date" id="desiredDate" name="desiredDate" value="<?php echo $row['desiredDate']; ?>" required>

        <label for="comments">Additional Comments:</label>
        <textarea id="comments" name="comments"><?php echo $row['comments']; ?></textarea>
        <input type="submit" value="Update">
        <button class="back_btn"><a href="Leads.php">Back <i class='fas fa-arrow-circle-left'></i></a></button>
    </form>
  
</body>
</html>
