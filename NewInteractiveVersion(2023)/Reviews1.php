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

  <title>Dolliet</title>

</head>
<body data-spy="scroll" data-target=".navbar" class="page">

  <body data-spy="scroll" data-target=".navbar">

    <nav class="navbar navbar-expand-sm fixed-top bg-light navbar-light">
      <div class="container">
        <a class="navbar-brand text-dark" href="#"><i class="fas fa-hand-lizard"></i></a>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#NCollapse">
          <i class="fas fa-crosshairs"></i>
        </button>
          <div id="NCollapse" class="collapse navbar-collapse">
            <ul class="navbar-nav font-weight-bold">
              <li class="active"><a class="nav-link text-dark" href="Blog.php">Come Back Home <i class="fas fa-hand-holding"></i></a></li>
              <li class="nav-item"><a class="nav-link text-dark" href="Blog.php#news">News</a></li>
              <li class="nav-item"><a class="nav-link text-dark" href="Blog.php#reviews1">Current Reviews</a></li>
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

  <header class="page">
    <div class="col-md-11 mx-auto mt-5 pt-4">
        <img class="w-100 rounded" src="witcher.jpg">
        <div class="carousel-caption">
          <h2 class="text-left">The Witcher® 3: Wild Hunt Detailed Examination Or Analysis</h2>
        </div>
    </div>
  </header>

                          <!-- MODAL -->

    <div class="modal fade" id="modall">
      <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Radiation Risk <i class="fas fa-biohazard"></i></h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body font-weight-bold">
          Radiation spread to this tab as a result of a minor accident. <br> We are working on it, we will clean it very soon
          </div>
          <div class="modal-footer">
            <button class="btn btn-danger" type="button" data-dismiss="modal">Run <i class="fas fa-running"></i></button>
          </div>
        </div>
      </div>
    </div>
                          <!-- MODAL END  -->

  <main id="reviews1" class="page">

    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <div class="card mt-3">
              <div class="card-body font-weight-bold">
                  <h3>Player Bases:</h3>
                  <p>
                    <i class="fas fa-times text-danger"></i> Kids.  <br>
                    <i class="fas fa-times text-danger"></i> Mature. <br>
                    <i class="fas fa-check text-success"></i> Casual Players. <br>
                    <i class="fas fa-times text-danger"></i> competitive players. <br>
                  </p>
                  <h3>Graphics:</h3>
                  <p>
                    <i class="fas fa-times text-danger"></i> Paint.exe. <br>
                    <i class="fas fa-times text-danger"></i> Potato. <br>
                    <i class="fas fa-times text-danger"></i> Really Bad. <br>
                    <i class="fas fa-times text-danger"></i> Bad. <br>
                    <i class="fas fa-times text-danger"></i> OK. <br>
                    <i class="fas fa-times text-danger"></i> Good. <br>
                    <i class="fas fa-check text-success"></i> Beautiful. <br>
                    <i class="fas fa-times text-danger"></i> Masterpiece. <br>
                    <i class="fas fa-times text-danger"></i> You forget reality. <br>
                  </p>
                  <h3>Price:</h3>
                  <p>
                    <i class="fas fa-check text-success"></i> Just buy it. <br>
                    <i class="fas fa-times text-danger"></i> Full Price. <br>
                    <i class="fas fa-times text-danger"></i> Wait For Discount. <br>
                    <i class="fas fa-times text-danger"></i> Refund It If You Can. <br>
                    <i class="fas fa-times text-danger"></i> Don't Buy It. <br>
                    <i class="fas fa-times text-danger"></i> Free. <br>
                  </p>
                  <h3>PC Requirements:</h3>
                  <p>
                    <i class="fas fa-times text-danger"></i> Check if you can run paint. <br>
                    <i class="fas fa-times text-danger"></i> Potato. <br>
                    <i class="fas fa-times text-danger"></i> Minimum. <br>
                    <i class="fas fa-times text-danger"></i> Medium. <br>
                    <i class="fas fa-check text-success"></i> Fast. <br>
                    <i class="fas fa-times text-danger"></i> High End. <br>
                    <i class="fas fa-times text-danger"></i> Super Computer. <br>
                    <i class="fas fa-times text-danger"></i> Ask NASA if they have a spare computer. <br>
                  </p>
                  <h3>Difficulty:</h3>
                  <p>
                    <i class="fas fa-times text-danger"></i> Easy. <br>
                    <i class="fas fa-times text-danger"></i> Medium. <br>
                    <i class="fas fa-times text-danger"></i> Hard. <br>
                    <i class="fas fa-check text-success"></i> Easy to learn / Hard to master. <br>
                    <i class="fas fa-times text-danger"></i> Very Hard. <br>
                    <i class="fas fa-times text-danger"></i> Death March. <br>
                    <i class="fas fa-times text-danger"></i> Dark Souls. <br>
                  </p>
                  <h3>Game length:</h3>
                  <p>
                    <i class="fas fa-times text-danger"></i> Really Short. ( 0 - 4 hours) <br>
                    <i class="fas fa-times text-danger"></i> Short. ( 4 - 10 hours) <br>
                    <i class="fas fa-times text-danger"></i> Medium. ( 10 - 20 hours) <br>
                    <i class="fas fa-times text-danger"></i> Long. ( 20 - 40 hours) <br>
                    <i class="fas fa-check text-success"></i> Very Long. ( 40 - 80 hours) <br>
                    <i class="fas fa-times text-danger"></i> Extremely Long. (100+ hours) <br>
                    <i class="fas fa-times text-danger"></i> Endless. <br>
                  </p>
                  <h3>Story:</h3>
                  <p>
                    <i class="fas fa-times text-danger"></i> It Doesn't Have One. <br>
                    <i class="fas fa-times text-danger"></i> Horrible. <br>
                    <i class="fas fa-times text-danger"></i> Meh. <br>
                    <i class="fas fa-times text-danger"></i> Ok. <br>
                    <i class="fas fa-times text-danger"></i> Average. <br>
                    <i class="fas fa-times text-danger"></i> Good. <br>
                    <i class="fas fa-times text-danger"></i> Fantastic. <br>
                    <i class="fas fa-check text-success"></i> Will make you cry or smile a lot. <br>
                  </p>
                  <h3>Music/Sound:</h3>
                  <p>
                    <i class="fas fa-times text-danger"></i> Horrible. <br>
                    <i class="fas fa-times text-danger"></i> Decent. <br>
                    <i class="fas fa-times text-danger"></i> Average. <br>
                    <i class="fas fa-times text-danger"></i> Good. <br>
                    <i class="fas fa-check text-success"></i> Amazing. <br>
                  </p>
                  <h3>Gameplay:</h3>
                  <p>
                    <i class="fas fa-times text-danger"></i> Terrible. <br>
                    <i class="fas fa-times text-danger"></i> Meh. <br>
                    <i class="fas fa-times text-danger"></i> Ok. <br>
                    <i class="fas fa-times text-danger"></i> Average. <br>
                    <i class="fas fa-times text-danger"></i> Good. <br>
                    <i class="fas fa-times text-danger"></i> Fantastic. <br>
                    <i class="fas fa-check text-success"></i> Try not to get addicted. <br>
                  </p>
                  <h3>Bugs:</h3>
                  <p>
                    <i class="fas fa-times text-danger"></i> Game Itself Is One Big BUG. <br>
                    <i class="fas fa-times text-danger"></i> Game Breaking Bugs. <br>
                    <i class="fas fa-times text-danger"></i> Lots of bugs. <br>
                    <i class="fas fa-times text-danger"></i> Can get annoying. <br>
                    <i class="fas fa-check text-success"></i> Few Bugs. <br>
                    <i class="fas fa-times text-danger"></i> Nothing. <br>
                  </p>
                  <h3>Final:</h3>
                  <p>
                    <i class="fas fa-times text-danger"></i> Terrible. <br>
                    <i class="fas fa-times text-danger"></i> Meh. <br>
                    <i class="fas fa-times text-danger"></i> Ok. <br>
                    <i class="fas fa-times text-danger"></i> Average. <br>
                    <i class="fas fa-times text-danger"></i> Good. <br>
                    <i class="fas fa-times text-danger"></i> Great. <br>
                    <i class="fas fa-times text-danger"></i> Fantastic. <br>
                    <i class="fas fa-check text-success"></i> ... <br>
                  </p>
                  <p>Best RPG of 2015 and probably of the decade. If you haven't played it yet, do yourself a favor and give it a shot.</p>
                  <h3>Others:</h3>
                  <p>
                    Multiplayer: <i class="fas fa-times text-danger"></i> <br>
                    Singleplayer: <i class="fas fa-check text-success"></i> <br>
                  </p>
                  <h3>Final Score:</h3>
                  <br>
                    <h4 class="text-warning">93/100 <i class="fas fa-trophy"></i></h4>
                  <br>
                <div class="d-inline cardfooter text-muted">Posted On 3/7/20</div>
              </div>
          </div>



        </div>
        <div class="col-md-5">
          <div class="btn-primary py-2 disabled mt-5">
            <h4 class="text-center">Search <i class="fas fa-gamepad"></i> <b>/</b> Clock <i class="fas fa-clock"></i></h4>
          </div>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search Dolliet">
              <span class="input-group-btn">
                <button type="button" class="btn btn-secondary">
                  <i class="fas fa-search"></i>
                </button>
              </span>
            </div>
          </div>
          <div class="card" style="margin-left: 115px;margin-right: 115px;">
          <h4 class="clock bg-dark" id="clock" style="margin-bottom: 0px;"></h4><i class="fas fa-undo-alt clock chan mousePointer text-right" style="padding-right: 4px;padding-bottom: 4px; background-color: #343a40 !important;"></i>
          </div>
          <br>
          <div class="btn-success py-2 disabled">
            <h4 class="text-center text-weight-bold">Platforms <i class="fas fa-charging-station"></i></h4>
          </div>
          <div class="card-body bg-bt" style="padding-right: 0px;margin-left: 1.25rem;margin-right: 1.25rem;padding-left: 0.75rem;">
            <i class="fab fa-steam navbar-brand mousePointer steam"></i>
            <i class="fab fa-xbox navbar-brand mousePointer xbox"></i>
            <i class="fab fa-playstation navbar-brand mousePointer playstation"></i>
            <i class="fab fa-twitch navbar-brand mousePointer twitch"></i>
            <i class="fab fa-youtube navbar-brand mousePointer youtube"></i>
            <i class="fab fa-instagram navbar-brand mousePointer instagram"></i>
            <i class="fab fa-facebook navbar-brand mousePointer facebook"></i>
            <i class="fab fa-discord navbar-brand mousePointer discord"></i>
            <i class="fab fa-twitter navbar-brand mousePointer twitter"></i>
            <i class="fab fa-telegram-plane navbar-brand mousePointer telegram"></i>
          </div>
          <br>
          <div class="btn-default purple text-light py-2 disabled">
            <h4 class="text-center">Game Calendar <i class="fas fa-calendar-alt"></i></h4>
          </div>
          <div class="row mt-3">
      			<div class="col-12"><a href="#"><img src="gcalendar.png" class="img-thumbnail" alt=""></a></div>
      			<div class="col-12"><a href="#" style="text-decoration: none;"><h5 class="text-center yazi font-weight-bold">Games Release Dates Full List</h5></a>
            <br>
            <h4 class="text-center text-dark font-weight-bold mybb mousePointer"><i class="fas fa-grip-lines-vertical text-danger mybb"></i> Top Upcoming Games</h4>
              <div class="bg-bt py-2 mt-4 disabled games1">
                <h4 class="text-center tx-wt" style="padding-left: 65px;">Final Fantasy VII Remake<i id="exit1" class="fas fa-times card-title tx-wt mousePointer" style="padding-left: 65px;"></i></h4>
                <h5 class="text-muted ml-4">Coming Apr 10, 2020</h5>
              </div>
              <div class="bg-bt py-2 mt-1 disabled games2">
                <h4 class="text-center tx-wt" style="padding-left: 108px;">Cyberpunk 2077<i id="exit2" class="fas fa-times card-title tx-wt mousePointer" style="padding-left: 108px;"></i></h4>
                <h5 class="text-muted ml-4">Coming Sep 17, 2020</h5>
              </div>
              <div class="bg-bt py-2 mt-1 disabled games3">
                <h4 class="text-center tx-wt" style="padding-left: 87px;">The Last of Us Part II<i id="exit3" class="fas fa-times card-title tx-wt mousePointer" style="padding-left: 87px;"></i></h4>
                <h5 class="text-muted ml-4">Coming May 29, 2020</h5>
              </div>
      				</div>
            </div>
          <br>
          <div class="btn-danger py-2 disabled">
            <h4 class="text-center">News <i class="fas fa-newspaper"></i></h4>
          </div>
          <div class="row mt-3">
      			<div class="col-5 "><img src="Photo/hades.jpg" class="img-thumbnail" alt=""></div>
      			<div class="col-7 "><a style="text-decoration:none;" class="yazi font-weight-bold" href="#">Hades Player Completes Challenge Thought To Be Impossible</a>
      				</div>
            </div>
            <div class="row mt-3">
              <div class="col-5 "><img src="Photo/pokemon.jpg" class="img-thumbnail" alt=""></div>
              <div class="col-7 "><a style="text-decoration:none;" class="yazi font-weight-bold" href="#">Pokémon Go Fest 2023: Dates, times & details for London event</a>
    				</div>
            </div>
            <div class="row mt-3">
              <div class="col-5 "><img src="Photo/mrbeast.png" class="img-thumbnail" alt=""></div>
              <div class="col-7 "><a style="text-decoration:none;" class="yazi font-weight-bold" href="#">Mr. Beast Responds To Criticism About Promoting TMNT During The Actors' Strike</a>
    				</div>
            </div>
            <div class="row mt-3">
              <div class="col-5 "><img src="Photo/ac.jpg" class="img-thumbnail" alt=""></div>
              <div class="col-7 "><a style="text-decoration:none;" class="yazi font-weight-bold" href="#">Assassin's Creed Jade Gameplay Revealed</a>
    				</div>
            </div>
            <div class="row mt-3">
              <div class="col-5 "><img src="Photo/rmnt.jpg" class="img-thumbnail" alt=""></div>
              <div class="col-7 "><a style="text-decoration:none;" class="yazi font-weight-bold" href="#">Remnant 2 Players Voice Concerns About the Game’s Difficulty Scaling</a>
    				</div>
            </div>
            <div class="row mt-3">
              <div class="col-5 "><img src="Photo/meganfoxdiablo.png" class="img-thumbnail" alt=""></div>
              <div class="col-7 "><a style="text-decoration:none;" class="yazi font-weight-bold" href="#">Blizzard's paying Megan Fox to eulogise Diablo 4 deaths in a corset</a>
    				</div>
            </div>
            <div class="row mt-3">
              <div class="col-5 "><img src="Photo/ffpxel.png" class="img-thumbnail" alt=""></div>
              <div class="col-7 "><a style="text-decoration:none;" class="yazi font-weight-bold" href="#">Final Fantasy 14 Dev Wants to Add the Pixel Remaster Games to the Gold Saucer</a>
    				</div>
            </div>
            <div class="row mt-3">
              <div class="col-5 "><img src="Photo/owervatc.png" class="img-thumbnail" alt=""></div>
              <div class="col-7 "><a style="text-decoration:none;" class="yazi font-weight-bold" href="#">An Overwatch 2 and Team Fortress 2 Collaboration is Happening, But Not in The Way You'd Expect</a>
    				</div>
            </div>
            <div class="row mt-3">
              <div class="col-5 "><img src="Photo/payday.jpg" class="img-thumbnail" alt=""></div>
              <div class="col-7 "><a style="text-decoration:none;" class="yazi font-weight-bold" href="#">Payday 3 Will Utilize Controversial Anti-Tamper Technology</a>
    				</div>
            </div>
            <div class="row mt-3">
              <div class="col-5 "><img src="Photo/xbox.jpg" class="img-thumbnail" alt=""></div>
              <div class="col-7 "><a style="text-decoration:none;" class="yazi font-weight-bold" href="#">Control Developer Explains Why Xbox Series S Is a Problem for Devs</a>
    				</div>
            </div>
          </div>

        </div>
      </div>
    </div>

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


<script  src="Kiss.js" type="text/Javascript"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
