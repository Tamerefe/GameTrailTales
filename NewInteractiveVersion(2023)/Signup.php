<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
  <link rel="stylesheet" href="Tiss.css">
  <link rel="icon" type="image/x-icon" href="Photo/dudtled.png">

</head>
<body class="page" data-spy="scroll" data-target=".navbar" onload="startTime()">

    <nav class="navbar navbar-expand-sm fixed-top bg-light navbar-light">
        <div class="container">
            <i class=" navbar-brand text-dark fas fa-hand-lizard mousePointer"></i>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#NCollapse">
            <i class="fas fa-crosshairs"></i>
            </button>
            <div id="NCollapse" class="collapse navbar-collapse">
            <ul class="navbar-nav font-weight-bold">
                <li class="active"><a class="nav-link text-dark" href="Blog.php#home">Come Back Home </a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="Blog.php#news">News</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="Blog.php#reviews">Reviews</a></li>
                <li class="nav-item"><a class="nav-link text-dark" data-toggle="modal" data-target="#modall" href="#wikis">Wikis</a></li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#" data-toggle="dropdown">More</a>
                <div class="dropdown-menu bg-light">
                <a class="dropdown-item text-dark" href="#more">Forum</a>
                <a class="dropdown-item text-dark" href="#more">Best Of</a>
                <a class="dropdown-item text-dark" href="#more">E-spor</a>
                </div>
                </li>
            </ul>
            </div>
            <a class="text-dark" href="LoginPage.php">
            <i class="fas fa-fingerprint"></i>
            </a>
        </div>
    </nav>

    <div class="container mt-5 pt-5 sign">
      <div class="wrap d-md-flex">
        <img class="w-50" src="Photo/bf5.jpg" alt="">
        <div class="p-4 p-md-5">
          <div class="d-flex">
            <div class="w-100">
              <h3 class="mb-4" style="text-align: end;">Sign Up</h3>
            </div>
          </div>
          <form action="#" class="signin-form">
            <div class="form-group mb-3">
              <label class="label" for="name">Username</label>
              <input type="text" class="form-control" placeholder="Username" required>
            </div>
            <div class="form-group mb-3">
              <label class="label" for="email">E-mail</label>
              <input type="text" class="form-control" placeholder="Email" required>
            </div>
            <div class="form-group mb-3">
              <label class="label" for="password">Password</label>
              <input type="password" class="form-control" placeholder="Password" required>
            </div>
            <div class="form-group">
              <button type="submit" class="form-control btn btn-warning rounded submit px-3">Sign Up</button>
            </div>
          </form>
          <p class="text-center">You are a member? <a href="LoginPage.php">Sign In</a></p>
        </div>
      </div>
    </div>




                          <!-- Reviews End  -->
                          
  <footer id="more" class="py-4 mt-5 bg-bt tx-wt text-center" class="paged">

                            <!-- Collapse -->
  
    <div id="collapse" class="collapse">
  
      <div class="container">
        <div class="row">
          <div class="col-md-3 mt-3">
            <a class="navbar-brand tx-wt" href="#">Dolliet <i class="fas fa-hand-lizard"></i></a>
              <hr class="line mousePointer">
              <p class="text-left">Dolliet is a community of ​​​gamers​​​ posting the latest game news and Also adds Turkish subtitles to game trailers</p>
              <h5 class="text-left font-weight-bold tx-wt">Mode <i class="fas fa-toggle-off chan2 mousePointer"></i></h5>
              <div class="d-inline cardfooter text-muted">Website Create On 2/29/20 - 11.46</div>
              <div class="d-inline cardfooter text-muted">Website Finish On 3/8/20 - 7.38</div>
          </div>
          <div class="col-md-3 mt-3">
            <a class="navbar-brand tx-wt" href="#">Top Games <i class="fas fa-dragon"></i></a>
              <hr class="line mousePointer">
              <p class="text-left"><a class="mr-2 btn btn-success btn-sm" href="">99</a> Cyberpunk 2077</p>
              <p class="text-left"><a class="mr-2 btn btn-success btn-sm" href="#">97</a> Red Dead Redemption 2 </p>
              <p class="text-left"><a class="mr-2 btn btn-success btn-sm" href="#">96</a> Grand Theft Auto V</p>
              <p class="text-left"><a class="mr-2 btn btn-success btn-sm" href="#">93</a> Witcher 3 Wild Hunt</p>
              <p class="text-left"><a class="mr-2 btn btn-warning btn-sm" href="#">82</a> Watch_Dogs® 2</p>
              <div class="d-inline cardfooter text-muted">(Scoring taken from metacritic data)</div>
          </div>
          <div class="col-md-3 mt-3">
            <a class="navbar-brand tx-wt" href="#">Admins <i class="fas fa-users-cog"></i></a>
              <hr class="line mousePointer">
              <p class="text-left font-weight-bold tx-wt mousePointer opa">Tamer Akipek <i class="fas fa-crown"></i></p>
              <p class="text-left font-weight-bold tx-wt mousePointer opa">Efe Akipek <i class="fas fa-chess-queen"></i></p>
          </div>
          <div class="col-md-3 mt-3">
            <a class="navbar-brand tx-wt" href="#">Help & Info <i class="fas fa-tools"></i></a>
              <hr class="line mousePointer">
              <p class="text-left font-weight-bold tx-wt mousePointer opa">About</p>
              <p class="text-left font-weight-bold tx-wt mousePointer opa">Contact / Feedback</p>
              <p class="text-left font-weight-bold tx-wt mousePointer opa">Help & FAQ</p>
              <p class="text-left font-weight-bold tx-wt mousePointer opa">Forum</p>
              <p class="text-left font-weight-bold tx-wt mousePointer opa">Best Of</p>
              <p class="text-left font-weight-bold tx-wt mousePointer opa">E-spor</p>
          </div>
  
        </div>
      </div>
    </div>
  
                          <!-- Collapse End -->
  
  
   <a href="#collapse" data-toggle="collapse"><i class="fas fa-angle-double-down tx-wt chan4"></i></a>
  </footer>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script  src="Kiss.js" type="text/Javascript"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
  
  </body>
  </html>