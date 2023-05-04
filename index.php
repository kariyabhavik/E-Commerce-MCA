`<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Website</title>
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- css files -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0">
        <!-- First child -->
        <nav class="navbar navbar-expand-lg bg-info navbar-light">
  <div class="container-fluid">
    <img src="./images/logo.png" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1<sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price:100/-</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- second child -->
<nav class="navbar navbar-expand-lg bg-secondary navbar-dark">  
  <ul class="navbar-nav me-auto">
  <li class="nav-item">
          <a class="nav-link" href="#">welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
  </ul> 
</nav>

<!-- third child -->
<div class="bg-light">
  <h3 class="text-center">Our Store</h3>
  <p class="text-center">Communication is at the heart of E-Commerce and community</p>
</div>


<!-- Fourth child -->
<div class="row">
  <div class="col-md-10">
    <!-- products -->
    <div class="row">
      <div class="col-md-4 mb-2">
      <div class="card">
  <img src="./images/1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
      </div>
      <div class="col-md-4 mb-2">
      <div class="card" >
  <img src="./images/2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
      </div>
      <div class="col-md-4 mb-2">
      <div class="card">
  <img src="./images/3.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
      </div>
      <div class="col-md-4 mb-2">
      <div class="card">
  <img src="./images/4.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
      </div>
      <div class="col-md-4 mb-2">
      <div class="card">
  <img src="./images/6.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
      </div>
    </div>
  </div>
  <div class="col-md-2 bg-secondary p-0">
    <!-- sidenav -->
    <!-- brands to be displayed -->
  <ul class="navbar-nav me-auto text-center">
    <li class="nav-item bg-info">
      <a href="#" class="nav-link text-light"><h4>Delivery Brands</h4></a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-light">Brand1</a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-light">Brand2</a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-light">Brand3</a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-light">Brand4</a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-light">Brand5</a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-light">Brand6</a>
    </li>
  </ul>

  <!-- categories to be displatyed -->
  <ul class="navbar-nav me-auto text-center">
    <li class="nav-item bg-info">
      <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-light">Categories1</a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-light">Categories2</a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-light">Categories3</a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-light">Categories4</a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-light">Categories5</a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link text-light">Categories6</a>
    </li>
  </ul>
  </div>
</div>


<!-- last child -->
<div class="bg-info p-3 text-center">
    <p>All rights reserved 0- Designed by Bhavik and achal - 2023</p>
</div>
    </div>

<!-- Bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</script>
</body>
</html>`