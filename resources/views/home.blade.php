@extends('layout.main')
@section('content')
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-warning bg-warning">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-dark active" href="/home"><b>Home</b><span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-dark" href="/cart"><b>Cart</b></a>
                    <a class="nav-item nav-dark" href="/profile"><b>Profile</b></a>
                </div>
            </div>
        </nav>
    </div>
@endsection
