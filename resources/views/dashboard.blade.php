@extends('layouts.app')

@section('content')
<div class="container">
    <img src='image/6.png' class="img-fluid " alt="...">  

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Dashboard') }}</div>

                <div class="container py-3">
                    <div class="row">
                      <div class="col">
                        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                            <div class="card-header">Link</div>
                            <div class="card-body">
                              <h2 class="card-title text-center">{{$link_count}}</h2>
                              <hr>
                              <p class="card-text">The Number Of Links  Shortened By Users.</p>
                            </div>
                     </div>
                      </div>

                      <div class="col">
                        <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                            <div class="card-header">User</div>
                            <div class="card-body">
                              <h2 class="card-title text-center">{{$user_count}}</h2>
                              <hr>
                              <p class="card-text">Number Of Registered Users On The Site.</p>
                            </div>
                          </div>
                      </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                                <div class="card-header"></div>
                              </div>
                        </div>
  
                        <div class="col">

                            <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                                <div class="card-header"></div>
                              </div>
                        </div>
                      </div>
               </div>

            </div>
        </div>

        
    </div>


</div>
@endsection
