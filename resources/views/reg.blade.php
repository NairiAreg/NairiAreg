@extends('welcome')
@section('content')
    
<form action="{{route('reg')}}" method="post">
    @csrf
    <h1>Register</h1>
    <input type="text" name="name" id="name" placeholder="name" class="form-control">
    <input type="email" name="email" id="email" placeholder="email" class="form-control">
    <input type="password" name="password" id="password" placeholder="password" class="form-control">
    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="password confirm" class="form-control">
    <input type="submit" value="Submit" class="btn btn-success">
</form>

@endsection