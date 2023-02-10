@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card mx-auto p-2" style="width: 18rem;">

            <div class="card-body">
                <h5 class="card-title">

                    <div class="alert alert-primary" role="alert">
                        We are currently processing your payment...

                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                    </div>
                </h5>
                <p class="card-text">You will be redirected when done</p>
                <h3 class="flex text-center text-danger shadow-lg" id="counter"></h3><br />
                <a href="/browse" id="click" class="btn btn-primary">Check status</a>
            </div>
        </div>
    </div>
    <script>
        window.onload = (event) => {

            let count = 0;
            let interval = setInterval(function() {

                count += 1;

                if (count === 20) {
                    clearInterval(interval);
                    document.getElementById("click").click();
                }
                document.getElementById("counter").innerHTML = count

            }, 1000);
        };
    </script>
@endsection
