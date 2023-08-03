<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
  <link rel="stylesheet" type="text/css" href="Tiss.css"/> 
  <link rel="icon" type="image/x-icon" href="Photo/dudtled.png">

  <title>Dolliet</title>

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
          <li class="active"><a class="nav-link text-dark" href="#home">Home</a></li>
          <li class="nav-item"><a class="nav-link text-dark" href="#news">News</a></li>
          <li class="nav-item"><a class="nav-link text-dark" href="#reviews">Reviews</a></li>
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

  <div class="stickybuttons mousePointer">
      <img src="Photo/help.png" width="75px;" height="75px;">
    <span id="hcx" class="close" style="font-size: 1rem;">X</span>
  </div>

  <header id="home">
    <div class="col-md-11 mx-auto">
      <div id="slider" class="carousel slide mt-5 pt-4" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#slider" data-slide-to="0" class="active"></li>
          <li data-target="#slider" data-slide-to="1"></li>
          <li data-target="#slider" data-slide-to="2"></li>
          <li data-target="#slider" data-slide-to="3"></li>
          <li data-target="#slider" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 rounded" src="Photo/rdr2.png">
            <div class="carousel-caption">
              <h2 class="text-left">Bounty Hunting and Showdown Mode Bonuses</h2>
              <p class="text-left pl-2">Plus Discounts on Bounty Hunting Essentials and More. Get Extra XP in All Bounty Missions. Plus 50% XP Boost in all Showdown Modes. Bonuses and Benefits. Including Bounty Hunting Essentials <a href="#" style="text-decoration: none;" class="text-light font-weight-bold">More...</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 rounded d-block mx-auto" src="Photo/division2.jpg">
            <div class="carousel-caption">
              <h2 class="text-left">Get The Division 2 For 95% Off As Major Expansion Announced</h2>
              <p class="text-left pl-2">On March 3, Division 2 Agents will enter the new open world of Lower Manhattan in the Warlords of New York expansion <a href="#" style="text-decoration: none;" class="text-light font-weight-bold">More...</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 rounded" src="Photo/bf.png">
            <div class="carousel-caption">
              <h2 class="text-left">EA Teases Next Battlefield Game</h2>
              <p class="text-left pl-2">Electronic Arts is starting to officially talk about the next major release in Battlefield, the popular online multiplayer shooter franchise <a href="#" style="text-decoration: none;" class="text-light font-weight-bold">More...</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 rounded" src="Photo/rockstar.jpg">
            <div class="carousel-caption">
              <h2 class="text-left">GTA 6 Map Leaks: Everything Confirmed & Debunked (So Far)</h2>
              <p class="text-left pl-2">There have been a ton of rumors about GTA 6 map leaks and where the next game will take place, but players shouldn’t believe everything they hear <a href="#" style="text-decoration: none;" class="text-light font-weight-bold">More...</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 rounded" src="Photo/dolliet.png">
            <div class="carousel-caption">
              <h2 class="text-left">Maybe Unwillingly You Came Here<br>But You Will Love This Page</h2>
              <p class="text-left pl-2">This page about game information,news,reviews,wikis and <a href="#" style="text-decoration: none;" class="text-light font-weight-bold">More...</a></p>
            </div>
          </div>
        </div>
        <a href="#slider" class="carousel-control-prev" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#slider" class="carousel-control-next" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
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

  <main id="news">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <div class="card mt-5">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe id="if1" class="card-img-top img-thumbnail" src="https://www.youtube.com/embed/O2W0N3uKXmo" frameborder="0" allowfullscreen></iframe>
            </div>
              <div class="card-body">
                <h5 class="card-title"><a style="text-decoration: none;" href="#">March 23 | Valve | Link | VR </a></h5>
                <p class="d-inline card-text">They did it. The madmen, they did it. It’s not quite Half-Life 3, but it is a full length Half-Life game starring Alyx Vance, all played in VR, so it might as well be.</p>
                <br>
                <div class="d-inline cardfooter text-muted">Posted On 3/1/20</div>
              </div>
          </div>
          <br>
          <div id="crd1" class="card">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe src="https://www.youtube.com/embed/bna8MPkJ9b8" frameborder="0" allowfullscreen></iframe>
            </div>
              <div class="card-body">
                <h5 class="card-title"><a style="text-decoration: none;" href="#">Borderlands 3 Hotfix Update Out Now; Full Patch Notes Revealed</a></h5>
                <p class="d-inline card-text">Developer Gearbox Software has released a brand-new Borderlands 3 hotfix update on PC, PlayStation 4, Google's Stadia cloud gaming service, and Xbox One. The patch addresses a number of community concerns, including progression issues, stuck enemies, weapon adjustments, and more, all of which is detailed in the full patch notes.</p>
                <br>
                <div class="d-inline cardfooter text-muted">Posted On 3/1/20</div>
              </div>
          </div>
          <br>
          <div id="crd2" class="card">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe src="https://www.youtube.com/embed/3FKq0Ep6RI8" frameborder="0" allowfullscreen></iframe>
            </div>
              <div class="card-body">
                <h5 class="card-title"><a style="text-decoration: none;" href="#">Everything We Know About Rainbow Six Siege Year 5: Oryx, Iana and Tachanka</a></h5>
                <p class="d-inline card-text">Watch Oryx, the new Defender, utilize his explosive strength to crash through walls, knock down his opponents, and climb up through open floor hatches. Then try to spot the real Iana, as the new Attacker deploys her holographic clone to deceive and distract the defending team. Learn how </p>
                <br>
                <div class="d-inline cardfooter text-muted">Posted On 3/2/20</div>
              </div>
          </div>
          <br>
          <div id="crd3" class="card">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/JgPXMxW7zJk" frameborder="0" allowfullscreen></iframe>
            </div>
              <div class="card-body">
                <h5 class="card-title"><a style="text-decoration: none;" href="#">Fortnite Chapter 2 Season 2 is live: Everything you need to know</a></h5>
                <p class="d-inline card-text">Fortnite Chapter 2 Season 2 is officially here. Now known by its proper name of Top Secret, that means we have a brand new battle pass to grind through, new cosmetics to covet, and myriad map updates to explore, and inevitably get killed near. </p>
                <br>
                <div class="d-inline cardfooter text-muted">Posted On 3/3/20</div>
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
          <div class="card" style="margin-left: 100px;margin-right: 100px;">
          <h4 class="clock bg-dark" id="clock" style="margin-bottom: 0px;"></h4><i class="fas fa-undo-alt clock chan mousePointer text-right" style="padding-right: 4px;padding-bottom: 4px; background-color: #343a40 !important;"></i>
          </div>
          <br>
          <div class="btn-success py-2 disabled">
            <h4 class="text-center text-weight-bold">Platforms <i class="fas fa-charging-station"></i></h4>
          </div>
          <div class="card-body bg-bt" style="padding-right: 0px;margin-left: 0.6rem;margin-right: 0.6rem;">
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
      			<div class="col-12"><a href="#"><img src="Photo/gcalendar.png" class="img-thumbnail" alt=""></a></div>
      			<div class="col-12"><a href="#" style="text-decoration: none;"><h5 class="text-center yazi font-weight-bold">Games Release Dates Full List</h5></a>
            <br>
            <h4 class="text-center text-dark font-weight-bold mybb mousePointer"><i class="fas fa-grip-lines-vertical text-danger mybb"></i> Top Upcoming Games</h4>
              <div class="bg-bt py-2 mt-4 disabled games3">
                <h4 class="text-center text-white font-weight-bold">Payday 3<i id="exit1" class="fas fa-times card-title mousePointer" style="float:right; margin-right:0.5rem;"></i></h4>
                <p class="text-muted ml-4" style="margin: 0;"><span class="text-info">Release date: </span>September 21, 2023</p>
                <p class="text-muted ml-4"><span class="text-info">Platform(s): </span>PS5, PS4, Xbox Series X, Xbox One, PC</p>
              </div>
              <div class="bg-bt py-2 mt-1 disabled games1">
                <h4 class="text-center text-white font-weight-bold">Assassin's Creed Mirage<i id="exit1" class="fas fa-times card-title mousePointer" style="float:right; margin-right:0.5rem;"></i></h4>
                <p class="text-muted ml-4" style="margin: 0;"><span class="text-info">Release date: </span>October 12, 2023</p>
                <p class="text-muted ml-4"><span class="text-info">Platform(s): </span>PS4, PS5, Xbox One, Xbox Series X/S</p>
              </div>
              <div class="bg-bt py-2 mt-1 disabled games2">
                <h4 class="text-center text-white font-weight-bold"">Marvel's Spider-Man 2<i id="exit1" class="fas fa-times card-title mousePointer" style="float:right; margin-right:0.5rem;"></i></h4>
                <p class="text-muted ml-4" style="margin: 0;"><span class="text-info">Release date: </span>October 20, 2023</p>
                <p class="text-muted ml-4"><span class="text-info">Platform(s): </span>PS5</p>
              </div>
      				</div>
            </div>
          <br>
          <div class="btn-danger py-2 disabled">
            <h4 class="text-center">News <i class="fas fa-newspaper"></i></h4>
          </div>
          <div class="row mt-3">
      			<div class="col-5 "><img src="Photo/f76.jpg" class="img-thumbnail" alt=""></div>
      			<div class="col-7 "><a style="text-decoration:none;" class="yazi font-weight-bold" href="#">Watch Fallout 76 Wastelander Gameplay in Action</a>
      				</div>
            </div>
            <div class="row mt-3">
              <div class="col-5 "><img src="Photo/pokemon.jpg" class="img-thumbnail" alt=""></div>
              <div class="col-7 "><a style="text-decoration:none;" class="yazi font-weight-bold" href="#">Armored Mewtwo Pokemon Go: Counters, Raid Tips, And How To Catch</a>
    				</div>
            </div>
            <div class="row mt-3">
              <div class="col-5 "><img src="Photo/codz.jpg" class="img-thumbnail" alt=""></div>
              <div class="col-7 "><a style="text-decoration:none;" class="yazi font-weight-bold" href="#">Call of Duty zombies mode director Jason Blundell leaves Treyarch</a>
    				</div>
            </div>
            <div class="row mt-3">
              <div class="col-5 "><img src="Photo/hzd.jpeg" class="img-thumbnail" alt=""></div>
              <div class="col-7 "><a style="text-decoration:none;" class="yazi font-weight-bold" href="#">Horizon: Zero Dawn for PC appears on Amazon</a>
    				</div>
            </div>
            <div class="row mt-3">
              <div class="col-5 "><img src="Photo/scgc.jpg" class="img-thumbnail" alt=""></div>
              <div class="col-7 "><a style="text-decoration:none;" class="yazi font-weight-bold" href="#">Here's how Star Citizen is planning to implement survival mechanics</a>
    				</div>
            </div>
            <div class="row mt-3">
              <div class="col-5 "><img src="Photo/dc.jpg" class="img-thumbnail" alt=""></div>
              <div class="col-7 "><a style="text-decoration:none;" class="yazi font-weight-bold" href="#">Dead Cells – 1.7.0 Patch Notes | The Bad Seed</a>
    				</div>
            </div>
            <div class="row mt-3">
              <div class="col-5 "><img src="Photo/lol.jpg" class="img-thumbnail" alt=""></div>
              <div class="col-7 "><a style="text-decoration:none;" class="yazi font-weight-bold" href="#">Riot Games’ new tactical shooter is titled Valorant, alleges report</a>
    				</div>
            </div>
            <div class="row mt-3">
              <div class="col-5 "><img src="Photo/pubg.jpg" class="img-thumbnail" alt=""></div>
              <div class="col-7 "><a style="text-decoration:none;" class="yazi font-weight-bold" href="#">PUBG Corp addresses cheaters, DDoS attacks, and performance problems</a>
    				</div>
            </div>
            <div class="row mt-3">
              <div class="col-5 "><img src="Photo/payday.jpg" class="img-thumbnail" alt=""></div>
              <div class="col-7 "><a style="text-decoration:none;" class="yazi font-weight-bold" href="#">Payday 2’s San Martín Bank Heist is available now</a>
    				</div>
            </div>
            <div class="row mt-3">
              <div class="col-5 "><img src="Photo/xbox.jpg" class="img-thumbnail" alt=""></div>
              <div class="col-7 "><a style="text-decoration:none;" class="yazi font-weight-bold" href="#">Xbox Series X will use audio ray tracing for super-realistic soundscapes</a>
    				</div>
            </div>
          </div>
        </div>
      </div>
    </div>

                            <!-- 3.News Bar -->

    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card mt-3">
            <img src="Photo/e320.jpg" class="img-thumbnail" alt="">
              <div class="card-body">
                <h5 class="card-title"><a style="text-decoration: none;" href="#">E3 2020 is moving ahead 'full speed' despite the coronavirus</a></h5>
                <p class="d-inline card-text">Last week, GDC was postponed amid growing concerns about the coronavirus, Covid-19. It's one of a large number of events to have been pushed back or cancelled in the last month. The ESA, which organises E3, is also keeping an eye on the situation, but at the moment it's moving ahead as planned.</p>
                <div class="d-inline cardfooter text-muted">Posted On 3/2/20</div>
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mt-3">
              <img src="Photo/bg3.gif" class="img-thumbnail" alt="">
              <div class="card-body">
                <h5 class="card-title"><a style="text-decoration: none;" href="#">I love that Baldur's Gate 3 makes you roll a die for big decisions</a></h5>
                <p class="d-inline card-text">There's a lot of Divinity: Original Sin DNA in Baldur's Gate 3, but if there's one major distinction between Larian's last RPG and its new one, it's dice. Dungeons & Dragons is built on dice, D6s and D8s and D20s and all the other weird-shaped ones in between. The dice control your destiny.</p>
                <div class="d-inline cardfooter text-muted">Posted On 3/2/20</div>
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mt-3">
            <img src="Photo/stadia.jpg" class="img-thumbnail" alt="">
              <div class="card-body">
                <h5 class="card-title"><a style="text-decoration: none;" href="#">Developers & Publishers Say Google isn’t Offering Them Enough Money to Bring Their Games to Stadia</a></h5>
                <p class="d-inline card-text">Google Stadia hasn’t been a huge success. One big reason is the lack of games. And it seems the reason Stadia’s library of software is so small is that Google isn’t willing to spend the money to get more games on the platform. </p>
                <div class="d-inline cardfooter text-muted">Posted On 3/2/20</div>
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mt-3">
            <img src="Photo/paxeast.jpg" class="img-thumbnail" alt="">
              <div class="card-body">
                <h5 class="card-title"><a style="text-decoration: none;" href="#">Watch live from PAX East 2020</a></h5>
                <p class="d-inline card-text">PAX East is happening right now, and PC Gamer isn't just there to wander the halls, sniffing out rad computer games from the future. This year, we've partnered with PAX to stream from the event on Friday and Saturday (February 28 & 29). </p>
                <div class="d-inline cardfooter text-muted">Posted On 3/2/20</div>
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="Photo/gta6.jpg" class="img-thumbnail" alt="">
              <div class="card-body">
                <h5 class="card-title"><a style="text-decoration: none;" href="#">What Grand Theft Auto's Writer Leaving Means For GTA 6</a></h5>
                <p class="d-inline card-text">One of the driving forces behind the studio has always been its co-founders, Dan and Sam Houser, who also functioned as producers and writers on most of Rockstar's games. In February 2020, Rockstar announced that Dan Houser would be stepping down from his role as Vice President and be leaving the company.</p>
                <div class="d-inline cardfooter text-muted">Posted On 3/7/20</div>
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mt-3">
            <img src="Photo/bgame.png" class="img-thumbnail" alt="">
              <div class="card-body">
                <h5 class="card-title"><a style="text-decoration: none;" href="#">What was the best year for PC gaming?</a></h5>
                <p class="d-inline card-text">There are great PC games every year, but which single year brought us the greatest collection of great games? The nice thing about this question is there's really no wrong answer, because every year is a great year for PC gaming.</p>
                <div class="d-inline cardfooter text-muted">Posted On 3/2/20</div>
              </div>
          </div>
        </div>
      </div>
    </div>
                            <!-- 3.News Bar End -->
                              <!-- 4.News Bar -->

      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="card mt-3 imgo">
              <img class="card-img" height="200" src="Photo/tlous.jpg" alt="Card image">
                <div class="card-img-overlay d-flex flex-column " style="padding-left: 0px;padding-right: 0px;padding-bottom: 0px;">
                  <h5 style="text-align:center" class="card-text font-weight-bold mt-auto bg-t"><a href="#" style="text-decoration:none;" class="tx-t">The Last Of Us TV Series Coming To HBO With Chernobyl Creator</a></h5>
                </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card mt-3 imgo">
              <img class="card-img" height="200" src="Photo/got.jpg" alt="Card image">
                <div class="card-img-overlay d-flex flex-column " style="padding-left: 0px;padding-right: 0px;padding-bottom: 0px;">
                  <h5 style="text-align:center" class="card-text font-weight-bold mt-auto bg-t"><a href="#" style="text-decoration:none;" class="tx-t">Ghost Of Tsushima Launches On PS4 In June</a></h5>
                </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card mt-3 imgo">
              <img class="card-img" height="200" src="Photo/dayz.jpg" alt="Card image">
                <div class="card-img-overlay d-flex flex-column " style="padding-left: 0px;padding-right: 0px;padding-bottom: 0px;">
                  <h5 style="text-align:center" class="card-text font-weight-bold mt-auto bg-t"><a href="#" style="text-decoration:none;" class="tx-t">The State of DayZ Update 1.07</a></h5>
                </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card mt-3 imgo">
              <img class="card-img" height="200" src="Photo/laptop.jpg" alt="Card image">
                <div class="card-img-overlay d-flex flex-column" style="padding-left: 0px;padding-right: 0px;padding-bottom: 0px;">
                  <h5 style="text-align:center" class="card-text font-weight-bold mt-auto bg-t"><a href="#" style="text-decoration:none;" class="tx-t">Cheap gaming laptop deals</a></h5>
                </div>
            </div>
          </div>

        </div>
      </div>
                          <!-- News End -->
                          <!-- Reviews   -->

<reviews id="reviews">

  <div class="container">
    <div class="row">
      <div class="col-md-6 mt-5">
        <a href="reviews1.php" class="text-warning" style="text-decoration:none;">
          <img src="Photo/witcher.jpg" alt="Lights" style="width:100%" height="300px">
          <div class="card-img-overlay"><h4 class="card-title text-warning ml-3">93/100 <i class="fas fa-trophy"></i></h4></div>
          <div class="caption">
            <h2 style="text-align:center" class="card-text font-weight-bold mt-auto bg-t">The Witcher® 3: Wild Hunt Detailed Examination Or Analysis</h2>
          </div>
        </a>
      </div>
      <div class="col-md-6 mt-5">
        <a href="reviews2.php"class="text-warning" style="text-decoration:none;">
          <img src="Photo/wd2.jpg" alt="Lights" height="300px" style="width:100%">
          <div class="card-img-overlay"><h4 class="card-title text-warning ml-3">83/100 <i class="fas fa-trophy"></i></h4></div>
          <div class="caption">
            <h2 style="text-align:center" class="card-text font-weight-bold mt-auto bg-t">Watch_Dogs® 2 Detailed Examination Or Analysis</h2>
          </div>
        </a>
      </div>
      <div class="col-md-6 mt-3">
        <a href="reviews3.php"class="text-warning" style="text-decoration:none;">
          <img src="Photo/dl.jpg" alt="Lights" height="300px" style="width:100%">
          <div class="card-img-overlay"><h4 class="card-title text-warning ml-3">90/100 <i class="fas fa-trophy"></i></h4></div>
          <div class="caption">
            <h2 style="text-align:center" class="card-text font-weight-bold mt-auto bg-t">Dying Light Detailed Examination Or Analysis</h2>
          </div>
        </a>
      </div>
      <div class="col-md-6 mt-3">
        <a href="reviews4.php"class="text-warning" style="text-decoration:none;">
          <img src="Photo/ut.png" alt="Lights" height="300px" style="width:100%">
          <div class="card-img-overlay"><h4 class="card-title text-warning ml-3">100/100 <i class="fas fa-trophy"></i></h4></div>
          <div class="caption">
            <h2 style="text-align:center" class="card-text font-weight-bold mt-auto bg-t">Undertale Detailed Examination Or Analysis</h2>
          </div>
        </a>
      </div>
    </div>
  </div>

</reviews>

                          <!-- Reviews End  -->
                          
<footer id="more" class="py-4 mt-5 bg-bt text-white text-center" class="paged">

                          <!-- Collapse -->

  <div id="collapse" class="collapse">

    <div class="container">
      <div class="row">
        <div class="col-md-3 mt-3">
          <a class="navbar-brand text-white" href="#">Dolliet <i class="fas fa-hand-lizard"></i></a>
            <hr class="line mousePointer">
            <p class="text-left">Dolliet is a community of ​​​gamers​​​ posting the latest game news and Also adds Turkish subtitles to game trailers</p>
            <h5 class="text-left font-weight-bold text-white">Mode <i class="fas fa-toggle-off chan2 chnclc mousePointer"></i></h5>
            <div class="d-inline cardfooter text-muted">Website Create on 2/29/20 - 11.46</div><br>
            <div class="d-inline cardfooter text-muted">Website Finish on 3/8/20 - 7.38</div><br>
            <div class="d-inline cardfooter text-muted">Site Update Start on 7.29.23 - 12.11</div><br>
            <div class="d-inline cardfooter text-muted">Site Update Finish on 3/8/20 - 7.38</div><br>
        </div>
        <div class="col-md-3 mt-3">
          <a class="navbar-brand text-white" href="#">Top Games <i class="fas fa-dragon"></i></a>
            <hr class="line mousePointer">
            <p class="text-left"><a class="mr-2 btn btn-success btn-sm" href="#">97</a> Red Dead Redemption 2 </p>
            <p class="text-left"><a class="mr-2 btn btn-success btn-sm" href="#">96</a> Grand Theft Auto V</p>
            <p class="text-left"><a class="mr-2 btn btn-success btn-sm" href="#">93</a> The Last of Us Part II</p>
            <p class="text-left"><a class="mr-2 btn btn-success btn-sm" href="">86</a> Cyberpunk 2077</p>
            <p class="text-left"><a class="mr-2 btn btn-warning btn-sm" href="#">76</a> Watch Dogs: Legion</p>
            <div class="d-inline cardfooter text-muted">(Scoring taken from metacritic data)</div>
        </div>
        <div class="col-md-3 mt-3">
          <a class="navbar-brand text-white" href="#">Admins <i class="fas fa-users-cog"></i></a>
            <hr class="line mousePointer">
            <p class="text-left font-weight-bold text-white mousePointer opa">Tamer Akipek <i class="fas fa-crown"></i></p>
            <p class="text-left font-weight-bold text-white mousePointer opa">Efe Akipek <i class="fas fa-chess-queen"></i></p>
        </div>
        <div class="col-md-3 mt-3 text-white">
          <a class="navbar-brand text-white" href="#">Help & Info <i class="fas fa-tools"></i></a>
            <hr class="line mousePointer">
            <p class="text-left font-weight-bold mousePointer opa">About</p>
            <p class="text-left font-weight-bold mousePointer opa">Contact / Feedback</p>
            <p class="text-left font-weight-bold mousePointer opa">Help & FAQ</p>
            <p class="text-left font-weight-bold mousePointer opa">Forum</p>
            <p class="text-left font-weight-bold mousePointer opa">Best Of</p>
            <p class="text-left font-weight-bold mousePointer opa">E-spor</p>
        </div>

      </div>
    </div>
  </div>

                        <!-- Collapse End -->


 <a href="#collapse" data-toggle="collapse"><i class="fas fa-angle-double-down text-white chan4 btnchn"></i></a>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script  src="Kiss.js" type="text/Javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>
