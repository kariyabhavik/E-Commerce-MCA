<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css files -->
    <link rel="stylesheet" href="../style.css">
    <style>
    .admin_image{
    width: 100px;
    object-fit: contain;
    } 
    .footer{
        position:absolute;
        bottom:0;
    }
    </style>
</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../images/logo.png" alt="" class="logo">
                <nav class="navbar navbar-expand-lg"> 
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Welcome guest</a>
                        </li>
                    </ul>
                </nav> 
            </div>
        </nav>
        <!-- second child -->
        <div class="bg-light">
                <h3 class="text-center p-2">Manage Details</h3>
        </div>

        <!-- Third Child -->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div class="p-3">
                    <a href="#"><img src="../images/logo.png" alt="" class="admin_image"></a>
                    <p class="text-light text-center">Admin Name</p>
                </div>
                <div class="button text-center">
                    <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">Insert Products</a></button>
                    <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">View Products</a></button>
                    <button class="my-3"><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
                    <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">View Categories</a></button>
                    <button class="my-3"><a href="index.php?insert_brand" class="nav-link text-light bg-info my-1">Insert Brands</a></button>
                    <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">View Brands</a></button>
                    <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">All Orders</a></button>
                    <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">All Payments</a></button>
                    <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">List Users</a></button>
                    <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>
                </div>
            </div>
        </div>

    <!-- fourth child -->
    <div class="container my-5">
        <?php
            if (isset($_GET['insert_category'])) {
                include('insert_categories.php');
            }
            if (isset($_GET['insert_brand'])) {
                include('insert_brands.php');
            }
        ?>
    </div>

        <!-- last child -->
<div class="bg-info p-3 text-center footer">
    <p>All rights reserved 0- Designed by Bhavik and achal - 2023</p>
</div>
    </div>
    </div>
    <!-- Bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</script>

</body>
</html>