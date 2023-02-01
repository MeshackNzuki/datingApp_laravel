@extends('layouts.app')
@section('content')

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
          <div class="activity-top fw-bold fs-4 text-center my-3">
              Activity
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
   
            @if ($matches)
                                           
            @foreach ($matches as $user)
                         
                         <label class="list-group-item" for="CheckBox5">
                           <div class="row">
                             <div class="col col-1">
                             @if(!$user->avatar)
                               <img src="./imgs/icon-user.png" alt="" />
                             @else
                               <img class="circle-img" src="./avatars/{{$user->avatar}}">
                            @endif
                             </div>
                             <div>
       
   
       
    </div>
          <div class="col col-9 text-desc">
              <strong> {{ $user->name }}</strong> <br />
                    {{ $user->location}}

                    <br />

                  {{ $user->profile->description?? 'No Description yet' }}

                  </div>

                  <div class="col col-2 text-right">
                  {{ date('M , Y', strtotime($user->created_at)) }} <br />          


    
                    
                  <form method="POST" action="{{ route('accept-hookup',$user->id) }}">               
                          @csrf
                          <button class = "btn btn-sm btn-outline-primary me-1">                                    
                        Accept
                        </button>
                    <form>
                        
                  

                          <form method="POST" action="{{ route('decline-hookup',$user->id) }}">               
                          @csrf
                          <button class = "btn btn-sm btn-outline-danger">Decline</button>
                          </form>
                          </div>

                </div>
              </label>
            @endforeach
     
            @else
            <div class="text-center my-3">No hookup requests yet</div>
            <h4 class="text-center my-3 fw-bold">Go to browse page</h4>
            <div class="text-center">
              Visit the “Browse” page, view photos and start chatting right
              now!
            </div>
            <div class="encounter-btn-box text-center my-3">
              <a href="/browse"
                type="button"
                class="encounter-btn btn btn-outline-info rounded-pill px-4"
              >
                Browse
              </a>
            </div>
            @endif
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
          


            <div class="section-another-page">
      <div class="container">
        <div class="row">
          <div class="list-group">
   
            @if ($users)
                                           
            @foreach ($users as $user)
                         
                         <label class="list-group-item" for="CheckBox5">
                           <div class="row">
                             <div class="col col-1">
                               <img src="./imgs/icon-user.png" alt="" />
                             </div>
                             <div class="col col-9 text-desc">
                               <strong> {{ $user->name }}</strong> <br />
                               {{ $user->location}}
             
                               <br />
             
                             {{ $user->profile->description?? 'No Description yet' }}
             
                             </div>
             
                             <div class="col col-2 text-right">
                             {{ date('M , Y', strtotime($user->created_at)) }} <br />          
         
             
				       
                                
                             <form method="POST" action="{{ route('accept-hookup',$user->id) }}">               
                                     @csrf
                                     <button class = "btn btn-sm btn-outline-primary me-1">
                                    
                                    Message
                                    </button>
                                <form>
                                    
                              

                                     <form method="POST" action="{{ route('decline-hookup',$user->id) }}">               
                                     @csrf
                                     <button class = "btn btn-sm btn-outline-danger">Delete</button>
                                 </form>
                              </div>
             
                           </div>
                         </label>
            @endforeach
     
            @else
            <div class="text-center my-3">No matches yet</div>
            <h4 class="text-center my-3 fw-bold">Go to encounters page</h4>
            <div class="text-center">
              Visit the “Browse” page, view photos and start chatting right
              now!
            </div>
            <div class="encounter-btn-box text-center my-3">
              <a href="/browse"
                type="button"
                class="encounter-btn btn btn-outline-info rounded-pill px-4"
              >
                Browse
              </a>
            </div>
            @endif
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
        </div>
      </div>
    </main>
    <script src="js/activity.js"></script>
    @endsection