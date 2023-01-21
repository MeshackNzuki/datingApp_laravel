@extends('layouts.app')

@section('content')
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
@endsection