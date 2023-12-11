<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ebook Eporium</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="Home.css">
</head>

<body> 
<header data-bs-theme="dark">
  <div class="collapse text-bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4>About</h4>
          <p class="text-body-secondary">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4>Contact</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Follow on Twitter</a></li>
            <li><a href="#" class="text-white">Like on Facebook</a></li>
            <li><a href="#" class="text-white">Email me</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>E book Eporium</strong>
      </a>
      <a href="/WEBPRO/php/Signup/SignUp.php" id="signupButton" class="btn btn-primary">Sign up</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
  
</header>

<!-- Main content -->
<main>
  <div class="album py-5 bg-body-tertiary">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 g-2"> <!-- Adjusted gutter space to g-2 -->
            <div class="col">
              <div class="card shadow-sm" style="width: 14rem;">
                <img src="../../images/Fiverings.jpg" class="card-img-top img-fluid" alt="Image Alt Text">
                <div class="card-body">
                <b>echo BOOK TITLE HERE.</b>
                <p>echo Author HERE.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Favourite</button>
                    </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm" style="width: 14rem;">
              <img src="../../images/The33strategiesofwar.jpg" class="card-img-top img-fluid" alt="Image Alt Text">
              <div class="card-body">
                <b>echo BOOK TITLE HERE.</b>
                <p>echo Author HERE.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Favourite</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm" style="width: 14rem;">
              <img src="../../images/Chainsawman10.jpg" class="card-img-top img-fluid" alt="Image Alt Text">
              <div class="card-body">
                <b>echo BOOK TITLE HERE.</b>
                <p>echo Author HERE.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Favourite</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm" style="width: 14rem;">
              <img src="../../images/BGaE_Nietzsche.jpg" class="card-img-top img-fluid" alt="Image Alt Text">
              <div class="card-body">
                <b>echo BOOK TITLE HERE.</b>
                <p>echo Author HERE.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Favourite</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm" style="width: 14rem;">
              <img src="../../images/Becominghitler.jpg" class="card-img-top img-fluid" alt="Image Alt Text">
              <div class="card-body">
                <b>echo BOOK TITLE HERE.</b>
                <p>echo Author HERE.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Favourite</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm" style="width: 14rem;">
              <img src="../../images/Guweiz.jpg" class="card-img-top img-fluid" alt="Image Alt Text">
              <div class="card-body">
                <b>echo BOOK TITLE HERE.</b>
                <p>echo Author HERE.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Favourite</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm" style="width: 14rem;">
              <img src="../../images/Guweiz2.jpg" class="card-img-top img-fluid" alt="Image Alt Text">
              <div class="card-body">
                <b>echo BOOK TITLE HERE.</b>
                <p>echo Author HERE.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Favourite</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm" style="width: 14rem;">
              <img src="../../images/Pablopicasso.jpg" class="card-img-top img-fluid" alt="Image Alt Text">
              <div class="card-body">
                <b>echo BOOK TITLE HERE.</b>
                <p>echo Author HERE.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Favourite</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm" style="width: 14rem;">
              <img src="../../images/Thewayofkings.jpg" class="card-img-top img-fluid" alt="Image Alt Text">
              <div class="card-body">
                <b>echo BOOK TITLE HERE.</b>
                <p>echo Author HERE.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Favourite</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm" style="width: 14rem;">
              <img src="../../images/48lawsofpower.jpg" class="card-img-top img-fluid" alt="Image Alt Text">
              <div class="card-body">
                <b>echo BOOK TITLE HERE.</b>
                <p>echo Author HERE.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Favourite</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm" style="width: 14rem;">
              <img src="../../images/tsukurutazaki.jpg" class="card-img-top img-fluid" alt="Image Alt Text">
              <div class="card-body">
                <b>echo BOOK TITLE HERE.</b>
                <p>echo Author HERE.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Favourite</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm" style="width: 14rem;">
              <img src="../../images/Ikigai.jpg" class="card-img-top img-fluid" alt="Image Alt Text">
              <div class="card-body">
                <b>echo BOOK TITLE HERE.</b>
                <p>echo Author HERE.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Favourite</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm" style="width: 14rem;">
              <img src="../../images/Kafkaontheshore.jpg" class="card-img-top img-fluid" alt="Image Alt Text">
              <div class="card-body">
                <b>echo BOOK TITLE HERE.</b>
                <p>echo Author HERE.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Favourite</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm" style="width: 14rem;">
              <img src="../../images/Nirnama.jpg" class="card-img-top img-fluid" alt="Image Alt Text">
              <div class="card-body">
                <b>echo BOOK TITLE HERE.</b>
                <p>echo Author HERE.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Favourite</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm" style="width: 14rem;">
              <img src="../../images/Kingalife.jpg" class="card-img-top img-fluid" alt="Image Alt Text">
              <div class="card-body">
                <b>echo BOOK TITLE HERE.</b>
                <p>echo Author HERE.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Favourite</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm" style="width: 14rem;">
              <img src="../../images/StudioAnywhere.jpg" class="card-img-top img-fluid" alt="Image Alt Text">
              <div class="card-body">
                <b>echo BOOK TITLE HERE.</b>
                <p>echo Author HERE.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Favourite</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm" style="width: 14rem;">
              <img src="../../images/StudioAnywhere2.jpg" class="card-img-top img-fluid" alt="Image Alt Text">
              <div class="card-body">
                <b>echo BOOK TITLE HERE.</b>
                <p>echo Author HERE.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Favourite</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm" style="width: 14rem;">
              <img src="../../images/theWager.jpg" class="card-img-top img-fluid" alt="Image Alt Text">
              <div class="card-body">
                <b>echo BOOK TITLE HERE.</b>
                <p>echo Author HERE.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Favourite</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm" style="width: 14rem;">
              <img src="../../images/Thepowerofart.jpg" class="card-img-top img-fluid" alt="Image Alt Text">
              <div class="card-body">
                <b>echo BOOK TITLE HERE.</b>
                <p>echo Author HERE.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Favourite</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm" style="width: 14rem;">
              <img src="../../images/Palestine.jpg" class="card-img-top img-fluid" alt="Image Alt Text">
              <div class="card-body">
                <b>echo BOOK TITLE HERE.</b>
                <p>echo Author HERE.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Favourite</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm" style="width: 14rem;">
              <img src="../../images/Weatheringwithyou.jpg" class="card-img-top img-fluid" alt="Image Alt Text">
              <div class="card-body">
                <b>echo BOOK TITLE HERE.</b>
                <p>echo Author HERE.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Favourite</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Add more similar card elements for each book -->

          <div class="col">
            <div class="card shadow-sm" style="width: 14rem;">
              <img src="../../images/Canthurtme.jpg" class="card-img-top img-fluid" alt="Image Alt Text">
              <div class="card-body">
                <b>echo BOOK TITLE HERE.</b>
                <p>echo Author HERE.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Favourite</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col">
            <div class="card shadow-sm" style="width: 14rem;">
              <img src="../../images/Nerds.jpg" class="card-img-top img-fluid" alt="Image Alt Text">
              <div class="card-body">
                <b>echo BOOK TITLE HERE.</b>
                <p>echo Author HERE.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Favourite</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm" style="width: 14rem;">
              <img src="../../images/Batmanthedarkknight.jpg" class="card-img-top img-fluid" alt="Image Alt Text">
              <div class="card-body">
                <b>echo BOOK TITLE HERE.</b>
                <p>echo Author HERE.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Favourite</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm" style="width: 14rem;">
              <img src="../../images/front_NW_haruki.jpg" class="card-img-top img-fluid" alt="Image Alt Text">
              <div class="card-body">
                <b>echo BOOK TITLE HERE.</b>
                <p>echo Author HERE.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Favourite</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Add more similar card elements for each book -->

        </div>
      </div>
    </div>
  </div>
</div>

</main>

<footer class="text-body-secondary py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Back to top</a>
    </p>
    <p class="mb-1">footer here</p>
    <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a href="../getting-started/introduction/">getting started guide</a>.</p>
  </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>