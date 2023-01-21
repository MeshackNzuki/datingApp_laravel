<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Kenyanbabes is the only online dating app that matches you on what really matters to you. Find other singles are like you today!"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.css" />
    <title>Activity</title>
  </head>

  <body>
    <!-- Header -->
    <header class="container">
      <div class="row">
        <div
          class="col-12 d-flex justify-content-between mx-auto py-3 position-relative"
        >
          <!-- Site Name -->
          <div class="sitename fs-4 fw-bold">
            <a href="index.html"
              ><img
                src="imgs/logo.png"
                alt="kenyan babes logo"
                class="img-fluid"
                height="60"
                width="196"
            /></a>
          </div>

          <div class="navlinks d-flex flex-row">
            <div class="encounters fw-bold pt-2 mx-3 pe-auto">Browse</div>
            <div class="activity fw-bold pt-2 mx-3 pe-auto">
              Activity<span class="badge bg-badge mx-2">5</span>
            </div>
          </div>

          <!-- Profile -->
          <div class="profile" style="cursor: pointer">
            <img
              src="imgs/placeholder.png"
              class="img-fluid rounded-circle"
              style="height: 40px; width: 40px"
              alt=""
            />
            logout
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <main>
      <div class="main-activity-wrapper">
        <div class="container py-5">
          <!-- Activity and top -->
          <div class="row">
            <div class="activity-top fw-bold fs-4 text-center my-3">
              Activity
            </div>
            <div class="matches-toggle-box d-flex justify-content-center my-2">
              <a
                href="#"
                class="matchedme active border px-3 py-1 rounded-start-2 border-dark fw-bold text-decoration-none"
                onclick="onMatchedmeClick()"
                >Matched me
              </a>
              <a
                href="#"
                class="matches border px-3 py-1 rounded-end-2 border-dark fw-bold text-decoration-none"
                onclick="onMatchesClick()"
              >
                Matches
              </a>
            </div>
          </div>

          <!-- Content Under Matched me box -->
          <!-- card row box -->
          <div class="row matchedme-box" id="matchedmeBox">
            <div class="text-center text-secondary my-3">
              These people are interested in you. Decline or Accept their
              request to view your number.
            </div>
	 <div class="section-another-page">
      <div class="container">
        <div class="row">
          <div class="list-group">
            
            <label class="list-group-item" for="CheckBox1">
              <div class="row">
                <div class="col col-1">
                  <img src="./imgs/icon-user.png" alt="" />
                </div>
                <div class="col col-9 text-desc">
                  <strong> Tom </strong> <br />
                  Low key sexy guy
                  <br />
                  I touch you and you get warm even wet
                </div>
                <div class="col col-2 text-right">
                  3 hrs ago <br />
                  <button class = "btn btn-sm btn-outline-primary me-1">Accept</button>
				  <button class = "btn btn-sm btn-outline-danger">Decline</button>
                </div>
              </div>
            </label>
            
            <label class="list-group-item" for="CheckBox2">
              <div class="row">
                <div class="col col-1">
                  <img src="./imgs/icon-user.png" alt="" />
                </div>
                <div class="col col-9 text-desc">
                  <strong> Dorcas </strong> <br />
                  Jarden near you
                  <br />
                  The lovely princess
                </div>
                <div class="col col-2 text-right">
                  1 day ago <br />
                  <button class = "btn btn-sm btn-outline-primary me-1">Accept</button>
				  <button class = "btn btn-sm btn-outline-danger">Decline</button>
                </div>
              </div>
            </label>            
            <label class="list-group-item" for="CheckBox3">
              <div class="row">
                <div class="col col-1">
                  <img src="./imgs/icon-user.png" alt="" />
                </div>
                <div class="col col-9 text-desc">
                  <strong> Lucy </strong> <br />
                  If you need someone to make you feel good, hit me up
                  <br />
                  Ill make you want to cum even more
                </div>
                <div class="col col-2 text-right">
                  Mar 28 <br />
                  <button class = "btn btn-sm btn-outline-primary me-1">Accept</button>
				  <button class = "btn btn-sm btn-outline-danger">Decline</button>
                </div>
              </div>
            </label>
           
            <label class="list-group-item" for="CheckBox4">
              <div class="row">
                <div class="col col-1">
                  <img src="./imgs/icon-user.png" alt="" />
                </div>
                <div class="col col-9 text-desc">
                  <strong> Kyallo </strong> <br />
                  Funn
                  <br />
                  Looks very lady chat video
                </div>
                <div class="col col-2 text-right">
                  Mar 27 <br />
                  <button class = "btn btn-sm btn-outline-primary me-1">Accept</button>
				  <button class = "btn btn-sm btn-outline-danger">Decline</button>
                </div>
              </div>
            </label>
           
            <label class="list-group-item" for="CheckBox5">
              <div class="row">
                <div class="col col-1">
                  <img src="./imgs/icon-user.png" alt="" />
                </div>
                <div class="col col-9 text-desc">
                  <strong> Kiss </strong> <br />
                  am small tall, smiley girl am so kind, I love working out and
                  singing
                  <br />
                  I get awet pussy
                </div>
                <div class="col col-2 text-right">
                  Mar 26 <br />
                  <button class = "btn btn-sm btn-outline-primary me-1">Accept</button>
				  <button class = "btn btn-sm btn-outline-danger">Decline</button>
                </div>
              </div>
            </label>
          </div>
          <div class="row btn-next-wrapper">
            <div class="col">
              <button type="submit" class="btn btn-next">
                Load More <img src="./imgs/icon-next.png" alt="" />
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
            
          </div>

          <!-- Content Under Matches box -->
          <div class="row matches-box d-none">
            <div class="text-center my-3">No matches yet</div>
            <h4 class="text-center my-3 fw-bold">Go to encounters page</h4>
            <div class="text-center">
              Visit the “Encounters” page, view photos and start chatting right
              now!
            </div>
            <div class="encounter-btn-box text-center my-3">
              <button
                type="button"
                class="encounter-btn btn btn-outline-info rounded-pill px-4"
              >
                Encounters
              </button>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Footer -->
    <footer>
      <div class="container footer">
        <hr />
        <div class="footer-content text-secondary ps-3 pb-3">
          &#169; Kenyanbabes.co.ke 2022 | All rights reserved.
        </div>
      </div>
    </footer>

    <script src="js/activity.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
