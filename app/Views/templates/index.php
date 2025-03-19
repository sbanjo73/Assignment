<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Screen Critic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <h1 class="my-5 text-center">Screen Critic</h1>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Screen Critic</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Reviews</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Categories</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Drama</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Sci-Fi</a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    
    <div class="container my-5">
      <div class="row">
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img src="./Views/templates/images/img63.jpg" class="card-img-top" alt="Movie Poster">
            <div class="card-body">
              <h5 class="card-title">Guardians of the Galaxy</h5>
              <p class="card-text">A brief review or description of the movie.</p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Movie Poster">
            <div class="card-body">
              <h5 class="card-title"> Avengers Endgame</h5>
              <p class="card-text">Another quick review or description of the movie.</p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Movie Poster">
            <div class="card-body">
              <h5 class="card-title">Movie Title 3</h5>
              <p class="card-text">Yet another quick review or description.</p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
