
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Establish a database connection
        $servername = "localhost"; // Replace with your database server name
        $username = "root"; // Your MySQL username
        $password = ""; // No password is set
        $dbname = "form"; // Database name

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Get data from the form
        $employee_name = $_POST['employee_name'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $desiredDate = $_POST['desiredDate'];
        $interest = $_POST['interest'];					
        $comments = $_POST['comments'];
        

        // SQL query to insert data into a table named "users"
        $sql = "INSERT INTO real_estate_leads (employee_name,name, email, phone, interest,desiredDate,comments) 
        VALUES ('$employee_name	','$name', '$email', '$phone','$interest','$desiredDate','$comments')";

        if ($conn->query($sql) === TRUE) {
            echo "Record inserted successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close the database connection
        $conn->close();
    }
    ?>
