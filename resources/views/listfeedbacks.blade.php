@extends('layouts.template')

@section('content')

<div class="container">
<div class="col-md-6 col-md-offset-3">
   <br>
    <div class="panel panel-default">
    <div class="panel-heading">List feedbacks</div>
      @foreach($feedbacks as $feedback)
       <div class="panel-body">      
            {{ $feedback['created_at'] }}       
            @if ($feedback->user['firstname']) 
               {{ $feedback->user['firstname']}}   
            @endif           
            {{ $feedback['message'] }}        
      </div>
      @endforeach
  </div>
 </div>
</div>

@endsection

