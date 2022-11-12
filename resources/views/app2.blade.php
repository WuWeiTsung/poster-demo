<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
  <!-- nav-bar -->
  <ul class="nav justify-content-end">
    <li class="nav-item">
      <a class="nav-link" href="#">My POST</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">My comment</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
    </li>
  </ul>

  <div class="container">

    <div class="row">
      <div class="col-9">
        <h1>POST</h1>

        <a href="#" class="btn btn-primary text-end">Add Post</a>
        <div class="card mt-5 border-dark">
          <h5 class="card-header">mane</h5>
          <div class="card-body">
            <h5 class="card-title">title</h5>
            <p class="card-text">content</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary btn-sm">COMMENT</a>
          </div>
        </div>
        <div class="comment ms-5">
          <div class="card border-primary ">
            <div class="card-body">
              <h5 class="card-title">name</h5>
              <p class="card-text">comment</p>
            </div>
          </div>
          <div class="card border-primary">
            <div class="card-body">
              <h5 class="card-htitle">name</h5>
              <p class="card-text">comment</p>
            </div>
          </div>
        </div>

        <div class="card mt-5 border-dark">
          <h5 class="card-header">mane</h5>
          <div class="card-body">
            <h5 class="card-title">title</h5>
            <p class="card-text">content</p>
          </div>
          <div class="card-footer">
            <div class="btn btn-primary btn-sm">COMMENT</div>
          </div>
        </div>

        <div class="card mt-5 border-dark">
          <h5 class="card-header">mane</h5>
          <div class="card-body">
            <h5 class="card-title">title</h5>
            <p class="card-text">content</p>
          </div>
          <div class="card-footer">
            <p class="btn btn-primary btn-sm">COMMENT</p>
          </div>
        </div>


      </div>
      <div class="col-3">
        <!-- POST -->
        <h5>Latest Post</h5>
        <ul>
          <li>Post1</li>
          <li>Post2</li>
          <li>Post3</li>
        </ul>

        <!-- COMMENT -->
        <h5>Latest Comment</h5>
        <ul>
          <li>COMMENT 1</li>
          <li>COMMENT 2</li>
          <li>COMMENT 3</li>
        </ul>

      </div>
    </div>



  </div>


  <script src="js/bootstrap.min.js"></script>
</body>

</html>