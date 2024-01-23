<!DOCTYPE html><!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.2.2
* @link https://coreui.io/product/free-bootstrap-admin-template/
* Copyright (c) 2023 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://github.com/coreui/coreui-free-bootstrap-admin-template/blob/main/LICENSE)
--><!-- Breadcrumb-->
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Free Bootstrap Admin Template</title>
    <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="vendors/simplebar/css/simplebar.css">
    <link rel="stylesheet" href="css/vendors/simplebar.css">
    <!-- Main styles for this application-->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link href="css/examples.css" rel="stylesheet">
    <style>
         
         #view-more-btn {
         margin-top: 10px;
         background-color: #333;
         color: white;
         border: none;
         padding: 10px 20px;
         cursor: pointer;
         display: flex;
         align-items: center;
         justify-content: flex-end; /* Align to the right */
         }
         #view-more-btn i {
         margin-right: 5px;
         }
         .button-container {
         display: flex;
         justify-content: flex-end;
         margin-bottom:50px;
         }
         body {
         font-family: Arial, sans-serif;
         background-color: #f4f4f4;
         padding: 10px;
         }
         
         form {
         background: #fff;
         padding: 20px;
         border-radius: 8px;
         box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
         max-width: 100%;
         margin: 20px auto;
         }
         label {
         display: block;
         margin-bottom: 5px;
         }
         input[type="text"],
         input[type="email"],
         input[type="tel"],
         select,
         textarea,
         input[type="date"] {
         width: 100%;
         padding: 10px;
         margin-bottom: 20px;
         border-radius: 4px;
         border: 1px solid #ddd;
         background: #eee;
         }
         input[type="text"]:focus,
         input[type="email"]:focus,
         input[type="tel"]:focus,
         select:focus,
         textarea:focus,
         input[type="date"]:focus {
         background-color: #ddd;
         outline: none;
         }
         input[type="submit"] {
         width: 100%;
         background: #007bff;
         color: white;
         padding: 10px;
         border: none;
         border-radius: 4px;
         cursor: pointer;
         }
         input[type="submit"]:hover {
         background: #0056b3;
         }
         /* For devices with a width of approximately 412px */




         .openButton {
         border: none;
         border-radius: 5px;
         background-color: #1c87c9;
         color: white;
         padding: 14px 20px;
         cursor: pointer;
         margin-left: 70%;
         margin-bottom:10px;
         right: 10px; /* Align to the right */
         bottom: 10px; /* Position at the bottom */
         }
       
         .loginPopup {
         position: relative;
         text-align: left;
         width: 100%;
         }
         .formPopup {
         display: none;
         position: fixed;
         left: 45%;
         top: 5%;
         transform: translate(-50%, 5%);
         border: 3px solid #999999;
         z-index: 9;
         margin-top:40px;
         }
         .formContainer {
         max-width: 300px;
         padding: 20px;
         background-color: #fff;
         }
         .formContainer input[type=text],
         .formContainer input[type=password] {
         width: 100%;
         padding: 15px;
         margin: 5px 0 20px 0;
         border: none;
         background: #eee;
         }
         .formContainer input[type=text]:focus,
         .formContainer input[type=password]:focus {
         background-color: #ddd;
         outline: none;
         }
         .formContainer .btn {
         padding: 12px 20px;
         border: none;
         background-color: #8ebf42;
         color: #fff;
         cursor: pointer;
         width: 100%;
         margin-bottom: 15px;
         opacity: 0.8;
         }
         .formContainer .cancel {
         background-color: #cc0000;
         }
         .formContainer .btn:hover,
         .openButton:hover {
         opacity: 1;
         }
         .formPopup {
         display: none;
         position: fixed;
         left: 50%;
         top: 50%;
         transform: translate(-50%, -50%);
         border: 3px solid #999999;
         z-index: 9;
         overflow-y: auto; /* Enable vertical scrolling */
         max-height: 80vh; /* Maximum height */
         width: 90%; /* Responsive width */
         max-width: 500px; /* Maximum width */
         }
      
         .cls_btn{
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
/*************************************************breakpoint********************************************** */

/* General Styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    padding: 10px;
}

table {
    width: 100%;
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid #ccc;
}

th, td {
    padding: 10px;
    text-align: center;
}

th {
    background-color: #333;
    color: green;
}

/* Responsive Button */
.openButton {
    /* Common styles (adjust as needed) */
    padding: 10px 15px;
    font-size: 16px; /* Example size */
}

/* Responsive Form */
form {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    max-width: 100%;
    margin: 20px auto;
}
.close-btn {
    position: absolute;
    top: 0px;
    right: 15px;
    border-top: 2px solid red;
    border-right: 2px solid green;
    border-bottom: 2px solid blue;
    border-left: 2px solid black;
    background: transparent;
    font-size: 20px;
    cursor: pointer;
}

.close-btn:hover {
    color: #d2042d;
}
/* Base styles */
.header-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap; /* Allows items to wrap to the next line on small screens */
}

.header-container h1 {
    margin: 10px; /* Adjust as needed */
    font-size: 24px; /* Default font size */
}

.header-container .openButton {
    padding: 10px 15px;
    font-size: 16px; /* Default button font size */
    margin: 10px; /* Adjust as needed */
}


/* Media Queries */

/* Small Devices, Tablets */
@media only screen and (max-width: 768px) {
    .table-responsive {
        width: 100%;
        overflow-x: auto; /* Enable horizontal scrolling */
    }

    .openButton {
        /* Adjustments for medium screens, e.g., tablets */
        padding: 12px 20px; /* Larger padding */
        font-size: 18px; /* Larger font size */
    }
    h2 {
        /* Adjustments for medium screens */
        font-size: 28px; /* Slightly larger font size for tablets */
    }
    .header-container {
        flex-direction: column;
        align-items: center;
    }

    .header-container h1 {
        font-size: 20px; /* Smaller font size for h1 */
    }

    .header-container .openButton {
        width: 100%; /* Full width button */
        font-size: 14px; /* Smaller font size for button */
    }
}
@media only screen and (max-width: 767px) {
    .openButton {
        /* Adjustments for small screens, e.g., phones */
        
        padding: 10px; /* Smaller padding */
        font-size: 14px; /* Smaller font size */
    }
    h2 {
        /* Adjustments for small screens */
        font-size: 20px; /* Smaller font size for better readability on phones */
    }
}

/* Extra Small Devices, Phones */
@media only screen and (max-width: 576px) {
    .formContainer {
        padding: 15px; /* Adjust padding for smaller screens */
    }

    /* Adjust font sizes and other styles for extra small devices */
}


/*************************************************breakpoint********************************************** */

      </style>
  </head>
  <body>
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
      <div class="sidebar-brand d-none d-md-flex">
        <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
          <use xlink:href="assets/brand/coreui.svg#full"></use>
        </svg>
        <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
          <use xlink:href="assets/brand/coreui.svg#signet"></use>
        </svg>
      </div>
      <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item"><a class="nav-link" href="index.html">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
            </svg> Dashboard<span class="badge badge-sm bg-info ms-auto">NEW</span></a></li>
        <li class="nav-title">Details</li>
        
        <li class="nav-item"><a class="nav-link" href="Leads.php">
              <svg class="nav-icon">
                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
              </svg> Leads</a></li>

              <li class="nav-item"><a class="nav-link" href="meeting.php">
                <svg class="nav-icon">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-laptop"></use>
                </svg> Meeting</a></li>

                <li class="nav-item"><a class="nav-link" href="visit.php">
                  <svg class="nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-people"></use>
                  </svg> Visiting</a></li>

                  <li class="nav-item"><a class="nav-link" href="close.php">
                    <svg class="nav-icon">
                      <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-check"></use>
                    </svg> Closing</a></li>
           
       
        
        
        
        <li class="nav-divider"></li>
        
        
      </ul>
      <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
    </div>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
      <header class="header header-sticky mb-4">
        <div class="container-fluid">
          <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
            <svg class="icon icon-lg">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
            </svg>
          </button><a class="header-brand d-md-none" href="#">
            <svg width="118" height="46" alt="CoreUI Logo">
              <use xlink:href="assets/brand/coreui.svg#full"></use>
            </svg></a>
          <ul class="header-nav d-none d-md-flex">
            <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Users</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
          </ul>
          <ul class="header-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="#">
                <svg class="icon icon-lg">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                </svg></a></li>
            <li class="nav-item"><a class="nav-link" href="#">
                <svg class="icon icon-lg">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-list-rich"></use>
                </svg></a></li>
            <li class="nav-item"><a class="nav-link" href="#">
                <svg class="icon icon-lg">
                  <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                </svg></a></li>
          </ul>
          <ul class="header-nav ms-3">
            <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/8.jpg" alt="user@email.com"></div>
              </a>
              <div class="dropdown-menu dropdown-menu-end pt-0">
                <div class="dropdown-header bg-light py-2">
                  <div class="fw-semibold">Account</div>
                </div><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                  </svg> Updates<span class="badge badge-sm bg-info ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                  </svg> Messages<span class="badge badge-sm bg-success ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-task"></use>
                  </svg> Tasks<span class="badge badge-sm bg-danger ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-comment-square"></use>
                  </svg> Comments<span class="badge badge-sm bg-warning ms-2">42</span></a>
                <div class="dropdown-header bg-light py-2">
                  <div class="fw-semibold">Settings</div>
                </div><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                  </svg> Profile</a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                  </svg> Settings</a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-credit-card"></use>
                  </svg> Payments<span class="badge badge-sm bg-secondary ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-file"></use>
                  </svg> Projects<span class="badge badge-sm bg-primary ms-2">42</span></a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                  </svg> Lock Account</a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                  </svg> Logout</a>
              </div>
            </li>
          </ul>
        </div>
        <div class="header-divider"></div>
        <div class="container-fluid">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
              <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><a href="#">Home</a>
              </li>
              <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><a href="#">Details</Details></a>
              </li>
              <li class="breadcrumb-item active"><span>Leads</span></li>
            </ol>
          </nav>
        </div>
      </header>
      <div class="body flex-grow-1 px-3">
      <div class="body flex-grow-1 px-3">
            <div class="container-lg">
             <div class="header-container">
               <h1>Real Estate Leads</h1>
               <button class="openButton button" onclick="openForm()"><strong>New Lead</strong></button></div>
            <div class="loginPopup">
               <div class="formPopup" id="popupForm">
                  <form action="" method="post">
                  <button type="button" class="close-btn" onclick="closeForm()">&times;</button>
                     <h2>Real Estate Lead Generation Form</h2>
                     <label for="employee_name">Employee Name:</label>
                     <input type="text" id="employee_name" name="employee_name" required>
                     <label for="name">Full Name:</label>
                     <input type="text" id="name" name="name" required>
                     <label for="email">Email Address:</label>
                     <input type="email" id="email" name="email" required>
                     <label for="phone">Phone Number:</label>
                     <input type="tel" id="phone" name="phone">
                     <label for="interest">Real Estate Interest:</label>
                     <select id="interest" name="interest">
                        <option value="buy">Buying</option>
                        <option value="sell">Selling</option>
                        <option value="rent">Renting</option>
                        <option value="invest">Investing</option>
                        <option value="other">Other</option>
                     </select>
                     <label for="desiredDate">Desired Date:</label>
                     <input type="date" id="desiredDate" name="desiredDate" required>
                     <label for="comments">Additional Comments:</label>
                     <textarea id="comments" name="comments" rows="4"></textarea>
                     <input type="submit" value="Submit">
                   
                    
                   
                     <?php include 'lead_form.php';?>
                     
                  </form>
               </div>
            </div>
            <script>
               function openForm() {
                 document.getElementById("popupForm").style.display = "block";
               }
               function closeForm() {
                 document.getElementById("popupForm").style.display = "none";
               }
            </script>
         </div>

         <?php
            // Database connection parameters
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "form";
            $limit=10;
            
            // Create a connection to the database
            $conn = new mysqli($servername, $username, $password, $dbname);
            
            // Check if the connection is successful
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            // SQL query to retrieve data from the table
            $sql = "SELECT * FROM real_estate_leads ORDER BY desiredDate DESC";
            $result = $conn->query($sql);
            
        
            // Assuming you have already executed your query and have $result
        
            if ($result->num_rows > 0) {
                // Start of responsive table wrapper
                echo '<div class="table-responsive">';
        
                // Table with Bootstrap classes for styling
                echo '<table class="table table-bordered table-hover">';
        
                // Table Headers
                echo "<tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Employee Name</th>
                        <th>Customer Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Interest</th>
                        <th>Comments</th>
                        <th>Edit</th>
                        <th>Remove</th>
                      </tr>";
        
                // Table Rows
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["desiredDate"] . "</td>";
                    echo "<td>" . $row["employee_name"] . "</td>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["phone"] . "</td>";
                    echo "<td>" . $row["interest"] . "</td>";
                    echo "<td>" . $row["comments"] . "</td>";
                    echo "<td><button onclick='editRecord(" . $row["id"] . ")'>Edit</button></td>";
                    echo "<td><button onclick='deleteRecord(" . $row["id"] . ")'><i class='fa fa-trash'></i></button></td>";
                    echo "</tr>";
                }
        
                // End of the table
                echo '</table>';
        
                // End of responsive table wrapper
                echo '</div>';
            } else {
                echo "No records found.";
            }
 
        
            
            
            
            
            
            
            
            
            // Close the database connection
            $conn->close();
            ?>
            <script>
function deleteRecord(id) {
    var confirmDelete = confirm("Are you sure you want to delete this record?");
    if (confirmDelete) {
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "delete_record.php?id=" + id, true);
        xhr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // Handle the response from the server
                alert("Record deleted successfully.");

                // Optionally, remove the deleted row from the table or update the table view
                // For example, if your table rows have unique IDs:
                // var row = document.getElementById("row_" + id);
                // if (row) row.parentNode.removeChild(row);
                location.reload();
            }
        };
        xhr.send();
    }
}

</script>

            <script>
                   function editRecord(id) {
    // Example: Redirect to an edit page
                   window.location.href = 'edit_record.php?id=' + id;

    // Or open an inline form for editing
    // openEditForm(id);
}
</script>
      </div>
      <footer class="footer">
        <div><a href="https://coreui.io">CoreUI </a><a href="https://coreui.io">Bootstrap Admin Template</a> © 2023 creativeLabs.</div>
        <div class="ms-auto">Powered by&nbsp;<a href="https://coreui.io/docs/">CoreUI UI Components</a></div>
      </footer>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <script src="vendors/simplebar/js/simplebar.min.js"></script>
    <script>
    </script>

  </body>
</html>