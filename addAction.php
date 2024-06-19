<html>
 
<head>
    <title>Add Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
 
<body>
<header class="p-3 text-bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>
 
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="index.php" class="nav-link px-2 text-secondary">Home</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">About</a></li>
                </ul>
 
                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                    <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..."
                        aria-label="Search">
                </form>
 
                <div class="text-end">
                    <button type="button" class="btn btn-outline-light me-2">Login</button>
                    <button type="button" class="btn btn-warning">Sign-up</button>
                </div>
            </div>
        </div>
    </header>
    <div class="container mt-5">
        <p>
            <a class="btn btn-info" href="index.php">Home</a>
        </p>
        <h2 class="text-primary">Back to Home</h2>
        <hr>
        <?php
        // Include the database connection file
        require_once ("dbConnection.php");
 
        if (isset($_POST['submit'])) {
            // Escape special characters in string for use in SQL statement
            $name = mysqli_real_escape_string($mysqli, $_POST['name']);
            $age = mysqli_real_escape_string($mysqli, $_POST['age']);
            $email = mysqli_real_escape_string($mysqli, $_POST['email']);
 
            // Check for empty fields
            if (empty($name) || empty($age) || empty($email)) {
                if (empty($name)) {
                    echo "<font color='red'>Name field is empty.</font><br/>";
                }
 
                if (empty($age)) {
                    echo "<font color='red'>Age field is empty.</font><br/>";
                }
 
                if (empty($email)) {
                    echo "<font color='red'>Email field is empty.</font><br/>";
                }
 
                // Show link to the previous page
                echo "<br/><a href='javascript:self.history.back();'>
                Go Back
                </a>";
            } else {
                // If all the fields are filled (not empty)
        
                // Insert data into database
                $result = mysqli_query($mysqli, "INSERT INTO users (`name`, `age`, `email`) VALUES ('$name', '$age', '$email')");
 
 
                // Display success message
        
                // echo "<font color='green'>Data added successfully!</p>";
                // echo "<a href='index.php'> View Result</a>";

                header("Location:index.php");
 
            }
        }
        ?>
    </div>
 
</body>
 
</html>
