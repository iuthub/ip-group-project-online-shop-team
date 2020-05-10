@extends('layouts.app')
@section('content')

<div class = "container">
  <br>
  <br>
  
        <div class="card card-user">
          <div class="card-header bg-dark text-white">
            <h5 class="card-title text-center ">
              <i class="fa fa-id-card-alt text-light fa-lg"></i> Contact Us</h5>
          </div>
          <div class="card-body">
            
            @if(Session::has('success'))
                <div class="alert alert-success text-center">
                {{ Session::get('success') }}
                </div>
            @endif
          

            <form method="post" action="{{route('postContactus')}}">
              {{csrf_field()}}
    
                <div class="form-row">
                  
                    <div class="form-group col-md-6">
                      <label><i class="fa fa-user text-secondary"></i> Name </label>
                      <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name">
                      @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                  
                  <div class="form-group col-md-6">
                      <label><i class="fa fa-envelope text-secondary"></i> Email </label>
                      <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email">
                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                    
                </div>
              <div class="form-row">
                  <div class="form-group col-md-6">
                    <label><i class="fa fa-phone-volume text-secondary"></i> Phone Number </label>
                    <input type="text" class="form-control @error('phone_number') is-invalid @enderror" placeholder="Phone Number" name="phone_number">
                    @error('phone_number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                
                
                  <div class="form-group col-md-6">
                    <label><i class="fa fa-tag text-secondary"></i> Subject </label>
                    <input type="text" class="form-control @error('subject') is-invalid @enderror" placeholder="Subject" name="subject">
                    @error('subject')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                
              </div>
                  <div class="form-group">
                    <label><i class="fa fa-sticky-note text-secondary"></i> Message </label>
                    <textarea class="form-control textarea @error('message') is-invalid @enderror" placeholder="Message" name="message"></textarea>
                    @error('message')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                
              
              <div class="row">
                <div class="update ml-auto mr-auto">
                  <button type="submit" class="btn btn-outline-success">
                    <i class="fa fa-paper-plane text-dark"></i> Send
                  </button>
                </div>
              </div>

            </form>
            
          </div>
        </div>
</div>

@endsection


