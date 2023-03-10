@extends('layouts.app')
@section('content')

    <body>
        <!-- Main Content -->
        <main>
            <div class="main-activity-wrapper">
                <div class="container py-5">
                    @if (!Auth::user()->avatar)
                        <div class="alert alert-info alert-dismissible fade show text-center" role="alert">
                            Users with a profile picture get 80% more matches, <a class="text-primary"
                                href="/settings">Upload</a> yours now!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <!-- Activity and top -->
                    <div class="row">

                        <div class="matches-toggle-box d-flex justify-content-center my-2">
                            <a href="#"
                                class="matchedme active border px-3 py-1 rounded-start-2 border-dark fw-bold text-decoration-none"
                                onclick="onMatchedmeClick()">Matched me ({{ Auth::user()->pendingFriendsTo->count() }})
                            </a>
                            <a href="#"
                                class="matches border px-3 py-1 rounded-end-2 border-dark fw-bold text-decoration-none"
                                onclick="onMatchesClick()">
                                Matches ({{ Auth::user()->friends->count() }})
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
                        <div class="container-fluid  shadow-lg">
                            <div class="container">
                                <div class="row">
                                    <div class="list-group">
                                        @if ($users)
                                            @foreach ($users as $user)
                                                <label class="list-group-item" for="CheckBox5">
                                                    <div class="row">
                                                        <div class="col col-1">
                                                            @if (!$user->avatar)
                                                                <img src="./imgs/icon-user.png" alt="" />
                                                            @else
                                                                <img class="circle-img" src="./avatars/{{ $user->avatar }}">
                                                            @endif
                                                        </div>
                                                        <div>



                                                        </div>
                                                        <div class="col col-9 text-desc">
                                                            <strong> {{ $user->name }}</strong> <br />
                                                            {{ $user->location }}

                                                            <br />

                                                            {{ $user->profile->description ?? 'No Description yet' }}

                                                        </div>

                                                        <div class="col col-2 text-right">
                                                            {{ date('M , Y', strtotime($user->created_at)) }} <br />




                                                            <form method="POST" id="form1"
                                                                action="{{ route('accept-hookup', $user->id) }}">
                                                                @csrf
                                                                <button type="submit"
                                                                    class="btn btn-sm btn-outline-primary me-1">
                                                                    Accept
                                                                </button>
                                                                <form>



                                                                    <form method="POST" id="form2"
                                                                        action="{{ route('decline-hookup', $user->id) }}">
                                                                        @csrf
                                                                        <button type="submit"
                                                                            class="btn btn-sm btn-outline-danger">Decline</button>
                                                                    </form>
                                                        </div>

                                                    </div>
                                                </label>
                                            @endforeach
                                        @else
                                            <div class="text-center my-3">No hookup requests yet</div>
                                            <h4 class="text-center my-3 fw-bold">Go to browse page</h4>
                                            <div class="text-center">
                                                Visit the ???Browse??? page, view photos and start chatting right
                                                now!
                                            </div>
                                            <div class="encounter-btn-box text-center my-3">
                                                <a href="/browse" type="button"
                                                    class="encounter-btn btn btn-outline-info rounded-pill px-4">
                                                    Browse
                                                </a>
                                            </div>
                                        @endif
                                    </div>
                                    @if ($users->count() > 10)
                                        <div class="row btn-next-wrapper">
                                            <div class="col">

                                                <button type="submit" class="btn btn-next">
                                                    Load More <img src="./imgs/icon-next.png" alt="" />
                                                </button>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Under Matches box -->
                    <div class="row matches-box d-none">
                        <div class="container-fluid  shadow-lg">
                            <div class="container">
                                <div class="row">
                                    <div class="list-group">

                                        @if ($matches)
                                            @foreach ($matches as $user)
                                                <label class="list-group-item" for="CheckBox5">
                                                    <div class="row text-lg-start text-center">
                                                        <div class="col col-3 col-sm-2 col-md-1 ">
                                                            <img src="./imgs/icon-user.png" alt="" />
                                                        </div>
                                                        <div class="col col-9 text-desc">
                                                            <strong> {{ $user->name }}</strong> <br />
                                                            {{ $user->location }}

                                                            <br />

                                                            {{ $user->profile->description ?? 'No Description yet' }}

                                                        </div>

                                                        <div class="col col-2 text-right ">
                                                        <small class='text-xs'>
                                                @if (date_diff(new DateTime($user->last_login), new DateTime())->format('%h') == 0)
                                                    {{ date_diff(new DateTime($user->last_login), new DateTime())->format('%i min ago') }}
                                                @elseif(date_diff(new DateTime($user->last_login), new DateTime())->format('%d') == 0)
                                                    {{ date_diff(new DateTime($user->last_login), new DateTime())->format('%h h  %i min') }}
                                                @elseif(date_diff(new DateTime($user->last_login), new DateTime())->format('%d d,%h h %i min ago'))
                                                    {{ date_diff(new DateTime($user->last_login), new DateTime())->format('%d d ago') }}
                                                @else
                                                @endif
                                    </small>




                                                            <form method="POST"
                                                                action="{{ route('accept-hookup', $user->id) }}">
                                                                @csrf

                                                                <form>
                                                                    <!-- Modal -->
                                                                    <div class="modal fade" id="myModal-{{ $user->id }}" tabindex="-1"
                                                                        aria-labelledby="exampleModalLabel"
                                                                        aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-centered">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <p class="modal-title"
                                                                                        id="exampleModalLabel">
                                                                                        {{ $user->name }} - Profile and
                                                                                        contacts</p>
                                                                                    <button type="button" class="btn-close"
                                                                                        data-bs-dismiss="modal"
                                                                                        aria-label="Close"></button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <div class="picture-container">

                                                                                        <div
                                                                                            class="container-fluid text-center">
                                                                                            @if ($user->avatar)
                                                                                                <img src="./avatars/{{ $user->avatar }}"
                                                                                                    class="img-fluid rounded-circle"
                                                                                                    style="height: 100px; width: 100px"
                                                                                                    alt="" />
                                                                                            @endif
                                                                                            <div class="alert alert-secondary mt-2 mb-2"
                                                                                                role="alert">
                                                                                                {{ $user->profile ? $user->profile->description : 'No Description yet' }}
                                                                                            </div>

                                                                                        </div>
                                                                                        <!-- user details -->
                                                                                        <div
                                                                                            class="container text-center mt-4 mb-4">
                                                                                            <p class="fw-bold text-secondary">
                                                                                                Name : <span
                                                                                                    class="sitename">
                                                                                                    {{ $user->name }}</span>
                                                                                            <p>
                                                                                            <p class="fw-bold text-secondary">
                                                                                                Age :<span
                                                                                                    class="sitename">
                                                                                                    {{ $user->age }}</span>
                                                                                            <p>

                                                                                                @if ($user->sex == 1 || $user->sex == 1)
                                                                                                    <p
                                                                                                        class="fw-bold text-secondary">
                                                                                                        Sex :<span
                                                                                                            class="sitename">
                                                                                                            Male</span>
                                                                                                    <p>
                                                                                                    @else
                                                                                                    <p
                                                                                                        class="fw-bold text-secondary">
                                                                                                        Sex :<span
                                                                                                            class="sitename">
                                                                                                            Female</span>
                                                                                                    <p>
                                                                                                @endif

                                                                                            <p class="fw-bold text-secondary">
                                                                                                location :<span
                                                                                                    class="sitename">
                                                                                                    {{ $user->location }}</span>
                                                                                            <p>
                                                                                            <p class="fw-bold text-secondary">
                                                                                                Contacts :<span
                                                                                                    class="sitename">
                                                                                                    {{ $user->contacts }}</span>
                                                                                            <p>
                                                                                            <p class="fw-bold text-secondary">
                                                                                                Contacts2 :<span
                                                                                                    class="sitename">
                                                                                                    {{ $user->profile ? $user->profile->contacts : 'No contact 2 yet' }}</span>
                                                                                            <p>
                                                                                            <p class="fw-bold text-secondary">
                                                                                                Phone :<span
                                                                                                    class="sitename">
                                                                                                    {{ $user->profile ? $user->profile->phone : 'No Phone yet' }}</span>
                                                                                            <p>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <a id="modal"
                                                                        class="btn btn-sm btn-outline-primary"
                                                                        data-bs-toggle="modal"
                                                             data-bs-target="#myModal-{{$user->id}}">Contacts</a>
                                                        </div>
                                                    </div>
                                                </label>
                                            @endforeach
                                        @else
                                            <div class="text-center my-3">No matches yet</div>
                                            <h4 class="text-center my-3 fw-bold">Go to encounters page</h4>
                                            <div class="text-center">
                                                Visit the ???Browse??? page, view photos and start chatting right
                                                now!
                                            </div>
                                            <div class="encounter-btn-box text-center my-3">
                                                <a href="/browse" type="button"
                                                    class="encounter-btn btn btn-outline-info rounded-pill px-4">
                                                    Browse
                                                </a>
                                            </div>
                                        @endif
                                    </div>
                                    @if ($matches->count() > 10)
                                        <div class="row btn-next-wrapper">
                                            <div class="col">

                                                <button type="submit" class="btn btn-next">
                                                    Load More <img src="./imgs/icon-next.png" alt="" />
                                                </button>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <script src="js/activity.js"></script>
        <script>
            document.getElementById("modal").addEventListener("click", function(event) {
                event.preventDefault()
            });
        </script>
    @endsection
