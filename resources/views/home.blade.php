@extends('layouts.app')
@section('content')
@include('roads.message')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                {{-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div> --}}
            </div>
        </div>
    </div>
    <br>
    <div class="row">
      @if(auth()->user()->isAdmin == 0)
        <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">My Feedbacks</h5>
                          <h6  class="card-subtitle mb-2 text-muted">Total Feedbacks : {{App\Feedbacks::where('userid',auth()->user()->id)->count()}}</h6>
                          <h6 class="card-subtitle mb-2 text-muted">See all of your feedbacks</h6>
                          {{-- <p class="card-text">Total Feedbacks :</p> --}}
                          <a href="/my-feedbacks" class="card-link">Click here</a>
                          {{-- <a href="#" class="card-link">Another link</a> --}}
                        </div>
                      </div>
                      
        </div>
        @endif
        @if(auth()->user()->isAdmin == 1)
        <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">All Feedbacks</h5>
                          <h6  class="card-subtitle mb-2 text-muted">Total Feedbacks : {{App\Feedbacks::all()->count()}}</h6>
                          <h6 class="card-subtitle mb-2 text-muted">See all of your feedbacks</h6>
                          {{-- <p class="card-text">Total Feedbacks :</p> --}}
                          <a href="/my-feedbacks" class="card-link">Click here</a>
                          {{-- <a href="#" class="card-link">Another link</a> --}}
                        </div>
                      </div>
                      
        </div>
        @endif

        <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">Submit a feedback</h5>
                          <h6 class="card-subtitle mb-2 text-muted">Give a new feedback</h6>
                          {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                          <a href="/submit-a-feedback" class="card-link">Click here</a>
                          {{-- <a href="#" class="card-link">Another link</a> --}}
                        </div>
                      </div>
                      
        </div>
        @if(auth()->user()->isAdmin == 1)
        <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">Verified Feedbacks</h5>
                          <h6  class="card-subtitle mb-2 text-muted">Total Feedbacks : {{App\Feedbacks::where('verified',1)->count()}}</h6>
                          <h6 class="card-subtitle mb-2 text-muted">View all Verified feedbacks</h6>
                          {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                          <a href="/verified-feedbacks" class="card-link">Click here</a>
                          {{-- <a href="#" class="card-link">Another link</a> --}}
                        </div>
                      </div>
                      
        </div>

        <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">Not Verified Feedbacks</h5>
                          <h6  class="card-subtitle mb-2 text-muted">Total Feedbacks : {{App\Feedbacks::where('verified',0)->count()}}</h6>
                          <h6 class="card-subtitle mb-2 text-muted">View all Not Verified Feedbacks</h6>
                          {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                          <a href="/not-verified-feedbacks" class="card-link">Click here</a>
                          {{-- <a href="#" class="card-link">Another link</a> --}}
                        </div>
                      </div>
                      
        </div>
        @endif
    </div>
</div>
@endsection
