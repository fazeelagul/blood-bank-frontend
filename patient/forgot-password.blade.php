@extends('layouts.patient') 
@section('content') 
<div class="container">
     <h2>Forgot Password</h2>
 @if(session('status')) 
<div class="alert alert-success">{{ session('status') }}</div> 
@endif
<form method="POST" action="{{ route('patient.sendResetLink') }}">
     @csrf 
<div class="form-group"> 
<label for="email">Enter your registered email:</label> 
<input type="email" name="email" class="form-control" required> 
</div> 
<button type="submit" class="btn btn-primary">Send Reset Link</button> 
</form> 
</div>
 @endsection