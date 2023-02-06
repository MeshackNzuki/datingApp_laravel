@extends('layouts.app')

@section('content')
    <!-- Section Another Page -->
    <div class="section-another-page">
      <div class="container">
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
        <div class="row">
          <div class="list-group">           

            @foreach ($users as $user)
 
              @if($user->id == Auth::user()->id)
                @continue;
              @endif
                         
            <label class="list-group-item" for="CheckBox5">
              <div class="row">
              <div class="col col-1">
                             @if(!$user->avatar)
                               <img src="./imgs/icon-user.png" alt="" />
                             @else

                                <img class="rounded-circle circle-img shadow-4-strong" src="./avatars/{{$user->avatar}}">
                              @endif
                              </div>

                <div class="col col-9 text-desc">
      
                  <strong> {{ $user->name }}
                  @if($user->isOnline())             
                  <small class="fa fa-circle text-"></small>
                  @else
                  <small>...</small>   
                  @endif
                 </strong> <br />
                  {{ $user->location}}

                  <br />

                {{ $user->profile->description?? 'No Description yet' }}

                </div>

                <div class="col col-2 text-right"> joined
                {{ date('M , Y', strtotime($user->created_at)) }} <br />

                      
                  <form method="POST" action="{{ route('request-hookup',$user->id) }}">
  
                        @csrf
                        <button class = "btn btn-sm btn-outline-primary">Request contact info</button>
                 </form>
                </div>

              </div>
            </label>
           @endforeach
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
@endsection
