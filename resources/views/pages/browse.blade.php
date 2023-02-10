@extends('layouts.app')

@section('content')
    <!-- Section Another Page -->
    <div class="container">
        <div class="container-fluid m-8 p-4 mt-10">

            @if (!Auth::user()->avatar)
                <div class="alert alert-info alert-dismissible fade show text-center" role="alert">
                    Users with a profile picture get 80% more matches, <a class="text-primary" href="/settings">Upload</a>
                    yours now!
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
            <div class="overflow-auto">
                <div class="list-group d-none d-md-block d-lg-block d-xl-block">

                    @foreach ($users as $user)
                        @if ($user->id == Auth::user()->id)
                            @continue;
                        @endif

                        <label class="list-group-item" for="CheckBox5">
                            <div class="row">
                                <div class="col col-1">



                                    <!-- Modal -->
                                    <div class="modal fade" id="myModal-{{ $user->id }}" data-bs-backdrop="static"
                                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog  modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    @if (Auth::user()->avatar)
                                                        <div class="text-center">
                                                            <img src="./avatars/{{ $user->avatar }}" class="img-thumbnail"
                                                                style="height: 300px; width: 300px">
                                                        </div>
                                                    @else
                                                        <div class="text-center">
                                                            <small>No profile</small>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if (!$user->avatar)
                                        <img src="./imgs/icon-user.png" alt="" data-bs-toggle="modal"
                                            data-bs-target="#myModal-{{ $user->id }}" />
                                    @else
                                        <img class="rounded-circle circle-img shadow-4-strong" data-bs-toggle="modal"
                                            data-bs-target="#myModal-{{ $user->id }}" src="./avatars/{{ $user->avatar }}">
                                    @endif
                                </div>

                                <div class="col col-9 text-desc">
                                    <strong> {{ $user->name }}
                                        @if ($user->isOnline())
                                            <small class="fa fa-circle text-success"></small>
                                        @else
                                            <small>...</small>
                                        @endif
                                    </strong> <br />
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

                                    <br />


                                    <form method="POST" action="{{ route('request-hookup', $user->id) }}">
                                        @csrf
                                        @if (App\Models\requests::where('from_user_id', Auth::user()->id)->where('to_user_id', $user->id)->first())
                                            <span class="btn btn-sm btn-outline-secondary">Requested</span>
                                        @else
                                            <button type="submit" class="btn btn-sm btn-outline-primary">Request contact
                                                info</button>
                                        @endif
                                    </form>
                                </div>
                            </div>
                        </label>
                    @endforeach
                </div>




                   <div class="overflow-auto">
                <div class="list-group  d-sm-block d-md-none">

                    @foreach ($users as $user)
                        @if ($user->id == Auth::user()->id)
                            @continue;
                        @endif

                        <label class="list-group-item" for="CheckBox5">
                            <div class="row-sm col-md text-center">
                                <div class="col col-xs-3 col-sm-3 col-md-1 col-lg-1">
                                    <!-- Modal -->
                                    <div class="modal fade" id="myModal-{{ $user->id }}" data-bs-backdrop="static"
                                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog  modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    @if (Auth::user()->avatar)
                                                        <div class="text-center">
                                                            <img src="./avatars/{{ $user->avatar }}" class="img-thumbnail"
                                                                style="height: 300px; width: 300px">
                                                        </div>
                                                    @else
                                                        <div class="text-center">
                                                            <small>No profile</small>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    @if (!$user->avatar)
                                        <img src="./imgs/icon-user.png" alt="" data-bs-toggle="modal"
                                            data-bs-target="#myModal-{{ $user->id }}" />
                                    @else
                                        <img class="rounded-circle circle-img shadow-4-strong" data-bs-toggle="modal"
                                            data-bs-target="#myModal-{{ $user->id }}" src="./avatars/{{ $user->avatar }}">
                                    @endif
                                </div>

                                <div  class="col col-md-8 col-lg-9 col-xs-5 col-sm-7  text-desc">
                                    <strong> {{ $user->name }}
                                        @if ($user->isOnline())
                                            <small style="font-size:10px" class="fa fa-circle text-success"></small>
                                        @else
                                            <small>...</small>
                                        @endif
                                    </strong> <br />
                                    {{ $user->location }}

                                    <br />

                                    {{ $user->profile->description ?? 'No Description yet' }}

                                </div>

                                <div class="col col-lg-2 col-sm-4 col-xs-4 text-right ">
                                    <small style="font-size:0.6em" >
                                        @if (date_diff(new DateTime($user->last_login), new DateTime())->format('%h') == 0)
                                            {{ date_diff(new DateTime($user->last_login), new DateTime())->format('%i min ago') }}
                                        @elseif(date_diff(new DateTime($user->last_login), new DateTime())->format('%d') == 0)
                                            {{ date_diff(new DateTime($user->last_login), new DateTime())->format('%h h  %i min') }}
                                        @elseif(date_diff(new DateTime($user->last_login), new DateTime())->format('%d d,%h h %i min ago'))
                                            {{ date_diff(new DateTime($user->last_login), new DateTime())->format('%d d ago') }}
                                        @else
                                        @endif
                                    </small>

                                    <br />


                                    <form method="POST" action="{{ route('request-hookup', $user->id) }}">
                                        @csrf
                                        @if (App\Models\requests::where('from_user_id', Auth::user()->id)->where('to_user_id', $user->id)->first())
                                            <span class="btn btn-sm btn-outline-secondary">Requested</span>
                                        @else
                                            <button type="submit" class="btn btn-sm btn-outline-primary"><small>Request </small>
                                                </button>
                                        @endif
                                    </form>
                                </div>
                            </div>
                        </label>
                    @endforeach
                </div>


 

            </div>
            <div class="d-flex justify-content-center">
                {!! $users->links() !!}
            </div>
        </div>
    </div>
    </div>
@endsection
