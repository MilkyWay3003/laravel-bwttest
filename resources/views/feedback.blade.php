@extends('layouts.template')

@section('content')

<div class="container"> 
  <div class="row">
       <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Feedback</div>
                <div class="panel-body">  
                
                <form class="form-horizontal" method="POST" action="{{ route('feedback.store') }}">
                  {{ csrf_field() }}
                  <input type="hidden" name="user_id" value="{{ Auth::check() and Auth::user()->id }}">
                  @if ( Auth::check() and Auth::user()->id )
                  
                  <div class="form-group">
                    <label for="inputMessage" class="col-md-4 control-label">Message</label>
                    <div class="col-md-6">
                        <textarea id="message" cols="72" rows="4" class="form-control" placeholder="Enter your message from 20 to 255 signs" required name="message"></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                     <div class="col-md-6 col-md-offset-4">
                        <div class="g-recaptcha" data-sitekey={{ env('RECAPTCHA_KEY') }}></div>
                     </div>
                  </div>
                 
                  <div class="form-group">
                      <div class="col-md-8 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">  Submit </button>
                        </div>
                  </div>

                  @else
                  <div class="form-group">
                    <label for="inputFirstName" class="col-md-4 control-label">FirstName</label>
                    <div class="col-md-6">
                      <input type="text" id="inputFirstName" class="form-control" placeholder="FirstName" required name="firstname"  autofocus>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputEmail" class="col-md-4 control-label">Email address</label>
                    <div class="col-md-6">
                       <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required name="email" >
                    </div>
                  </div>
                
                  <div class="form-group">
                    <label for="inputMessage" class="col-md-4 control-label">Message</label>
                    <div class="col-md-6">
                        <textarea id="message" cols="72" rows="4" class="form-control" placeholder="Enter your message from 20 to 255 signs" required name="message"></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                     <div class="col-md-6 col-md-offset-4">
                        <div class="g-recaptcha" data-sitekey={{ env('RECAPTCHA_KEY') }}></div>
                     </div>
                  </div>
                 
                  <div class="form-group">
                      <div class="col-md-8 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">  Submit </button>
                        </div>
                  </div>
                  @endif
                </form>
                 </div> 
            </div>
         </div> 
   </div>
</div>

@endsection