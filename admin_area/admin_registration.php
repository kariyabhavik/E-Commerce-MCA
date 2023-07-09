<?php
include('../includes/connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            overflow: hidden;
        }
    </style>
</head>

<body>
    <div class="container-fluid m-3">
        <h2 class="text-center mb-5">Admin Registration</h2>
        <div class="row d-flex justify-content-center ">
            <div class="col-lg-6 col-xl-5">
                <img src="../images/1.jpg" alt="Admin Registration" class="img-fluid">
            </div>
            <div class="col-lg-6 col-xl-4">
                <form action="" method="post">
                    <div class="form-outline mb-4">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" id="username" name="username" placeholder="Enter your Name"
                            required="required" class="form-control">
                    </div>
                    <div class="form-outline mb-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter your Email" required="required"
                            class="form-control">
                    </div>
                    <div class="form-outline mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" name="password" placeholder="Enter your Password"
                            required="required" class="form-control">
                    </div>
                    <div class="form-outline mb-4">
                        <label for="confirm_password" class="form-label">Conform Password</label>
                        <input type="confirm_password" id="confirm_password" name="confirm_password"
                            placeholder="Enter your Confirm Password" required="required" class="form-control">
                    </div>
                    <div>
                        <input type="submit" class="bg-info py-2 px-3 border-0" name="admin_registration"
                            value="Register">
                        <p class="small fw-bold mt-2 pt-1">Do you already have an account? <a href="admin_login.php"
                                class="link-danger">Login</a> </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>


<!-- php code -->

<?php
if (isset($_POST['admin_registration'])) {
    $admin_username = $_POST['username'];
    $admin_email = $_POST['email'];
    $amin_password = $_POST['password'];
    $hash_password = password_hash($amin_password, PASSWORD_DEFAULT);
    $conf_admin_password = $_POST['confirm_password'];

    // select query
    $select_query = "SELECT * from `admin_table` WHERE admin_name='$admin_username'or admin_email='$admin_email'";
    $result = mysqli_query($con, $select_query);
    $rows_count = mysqli_num_rows($result);
    if ($rows_count > 0) {
        echo "<script> alert('Username and Email already exist') </script>";
    } else if ($amin_password != $conf_admin_password) {
        echo "<script> alert('Password do not match') </script>";
    } else {
        // insert query
        $insert_query = "insert into `admin_table` (admin_name,admin_email,admin_password) values ('$admin_username','$admin_email','$hash_password')";
        $sql_execute = mysqli_query($con, $insert_query);
        echo "<script> alert('Admin register successfull') </script>";
    }
}
?>