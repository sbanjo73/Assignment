<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <style>
   
        .genre-header {
            background-color: #343a40;
            color: #fff;
            padding: 50px 0;
            text-align: center;
            width:100%;
        }
        .movie-card {
            margin-bottom: 30px;
        }

        
        .movie-header {
            background: url('https://image.tmdb.org/t/p/original/1rWWBansScOoRn3XS1tfmhfF3Q7.jpg') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        .movie-header h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .movie-header p {
            font-size: 1.2rem;
        }
        .movie-details {
            margin-top: 30px;
        }
    </style>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="https://mi-linux.wlv.ac.uk/~2375304/assignment/public/">Screen Critic</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="https://mi-linux.wlv.ac.uk/~2375304/assignment/public/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://mi-linux.wlv.ac.uk/~2375304/assignment/public/review/new">Reviews</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="https://mi-linux.wlv.ac.uk/~2375304/assignment/public/action">Action</a></li>
            <li><a class="dropdown-item" href="#">Comedy</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sci-Fi</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Login</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>