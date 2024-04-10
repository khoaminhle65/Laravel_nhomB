@extends('dashboard')

@section('content')
    <div class="container">
        <h1>User Details</h1>
        <p>User ID: {{ $user->id }}</p>
        <p>Name: {{ $user->name }}</p>
        <p>Email: {{ $user->email }}</p>
    </div>
@endsection