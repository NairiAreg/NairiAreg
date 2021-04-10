@extends('welcome')
@section('content')
    
<form action="{{route('login')}}" method="post">
    @csrf
    <h1>Login</h1>
    <input type="email" name="email" id="email" placeholder="email" class="form-control">
    <input type="password" name="password" id="password" placeholder="password" class="form-control">
    <input type="submit" value="Submit" class="btn btn-success">
</form>
@endsection