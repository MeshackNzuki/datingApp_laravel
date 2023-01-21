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
    <title>Payment</title>
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

    <div class="payment-page-wrapper">
      <div class="container payment-page">
        <div class="row">
          <div class="card col-8">
            <div class="header-section">
              <div class="row">
                <div class="col col-9">
                  <h1>Pay by Mpesa</h1>
                  <p>
                    Discreet payment using your Mpesa. Business name will appear
                    as Luckymate Entertainment
                  </p>
                </div>
                <div class="col col-3">
                  <img src="imgs/mpesa.png" class="card-img-top" alt="image" />
                </div>
              </div>
            </div>

            <div class="subscription-section">
              <h1>Select Your Subscription:</h1>
              <div class="list-group">
                <input
                  type="radio"
                  name="RadioInputName"
                  value="Value1"
                  id="Radio1"
                />
                <label class="list-group-item" for="Radio1">
                  <strong> 7 Days Access - 30% off </strong>
                  <p class="mx-4">
                    Browse profiles of hot singles unlimited for 7 days
                  </p>
                  <div class="select-price">
                    Kshs.<strong>500</strong>
                    <p>week</p>
                  </div>
                </label>
                <input
                  type="radio"
                  name="RadioInputName"
                  value="Value2"
                  id="Radio2"
                />

                <label class="list-group-item" for="Radio2">
                  <strong> 1 Month - 30% off </strong>
                  <p class="mx-4">
                    Browse profiles of hot singles unlimited for 7 days
                  </p>
                  <div class="best-value text-center">best value!</div>
                  <div class="select-price">
                    Kshs.<strong>1500</strong>
                    <p>month</p>
                  </div>
                </label>
                <input
                  type="radio"
                  name="RadioInputName"
                  value="Value3"
                  id="Radio3"
                />
              </div>
            </div>

            <div class="form-section">
              <form>
                <div class="row">
                  <div class="mb-3">
                    <label for="InputNumber" class="form-label"
                      >Mpesa Number</label
                    >
                    <input
                      type="number"
                      class="form-control"
                      id="InputNumber1"
                      placeholder="e.g 0700 123 456"
                    />
                  </div>
                </div>

                <div class="row main-btn-wrapper">
                  <button type="submit" class="main-btn btn btn-primary">
                    Pay Now
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

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
