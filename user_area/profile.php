<!-- Connect file -->
<?php
include('../includes/connect.php');
include('../functions/common_function.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome <?php echo $_SESSION['username']  ?></title>
  <!-- Bootstrap CSS link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <!-- font awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- css files -->
  <link rel="stylesheet" href="../Style.css">
  <style>
    body{
        overflow-x: hidden; 
    }
</style>
</head>

<body>
  <!-- navbar -->
  <div class="container-fluid p-0">
    <!-- First child -->
    <nav class="navbar navbar-expand-lg bg-info navbar-light">
      <div class="container-fluid">
        <img src="../images/logo.jpg" alt="" class="logo">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../display_all.php">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.php">My Account</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../cart.php"><i class="fa-solid fa-cart-shopping"></i><sup><?php cart_item(); ?><sup></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Total Price:<?php   total_cart_price(); ?>/-</a>
            </li>
          </ul>
          <form class="d-flex" action="../search_product.php" method="get">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
            <input type="submit" value="search" class="btn btn-outline-light" name="search_data_product">
          </form>
        </div>
      </div>
    </nav>

    <!-- calling cart function  -->
  <?php
  cart();
  ?>
    <!-- second child -->
    <nav class="navbar navbar-expand-lg bg-secondary navbar-dark">
      <ul class="navbar-nav me-auto">
        <?php
           if (!isset($_SESSION['username'])) {
            echo "<li class='nav-item'>
            <a class='nav-link' href='#'>welcome Guest</a>
          </li>";
            }else{
            echo "<li class='nav-item'>
            <a class='nav-link' href='#'>Welcom ". $_SESSION['username']."</a>
          </li>";
            }
          if (!isset($_SESSION['username'])) {
          echo "<li class='nav-item'>
          <a class='nav-link' href='./user_area/user_login.php'>Login</a>
        </li>";
          }else{
          echo "<li class='nav-item'>
          <a class='nav-link' href='./user_area/logout.php'>Logout</a>
        </li>";
          }
        ?>
      </ul>
    </nav>

    <!-- third child -->
    <div class="bg-light">
      <h3 class="text-center">Our Store</h3>
      <p class="text-center">Communication is at the heart of E-Commerce and community</p>
    </div>

    <!-- Fourth child -->
    <div class="row">
        <div class="col-md-2 ">
            <ul class="navbar-nav bg-secondary text-center" style="height:100vh">
            <li class="nav-item bg-info">
              <a class="nav-link text-light" href="#">Your Profile </a>
            </li>   

            <?php
            $username=$_SESSION['username'];
            $user_image = "select * from `user_table` where username='$username'";
            $user_image = mysqli_query($con, $user_image);
            $row_image = mysqli_fetch_array($user_image);
            $user_image = $row_image['user_image'];
            echo "<li class='nav-item'>
            <img src='./user_images/$user_image' class='profile_image my-4' alt=''>
          </li> ";
            ?>
            <li class="nav-item">
              <a class="nav-link text-light" href="profile.php">Pending Orders </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="profile.php?edit_account"> Edit Account</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="profile.php?my_orders"> My Orders</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="profile.php?delete_account"> Delete Account </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-light" href="logout.php"> Logout </a>
            </li>
            </ul>
        </div>
        <div class="col-md-10 text-center">
          <?php
          get_user_order_details();
          if (isset($_GET['edit_account'])) {
            include('edit_account.php');
          }
          if (isset($_GET['my_orders'])) {
            include('user_orders.php');
          }
          if (isset($_GET['delete_account'])) {
            include('delete_account.php');
          }
          ?>
        </div>
    </div>
    
    <!-- last child -->
    <?php
    include("../includes/footer.php"); 
    ?>
  </div>

  <!-- Bootstrap js link -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
    integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
    integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
    crossorigin="anonymous"></script>
  </script>
</body>

</html>