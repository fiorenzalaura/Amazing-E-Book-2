@extends('layout.main')
@section('content')
    <div class="container">
        <br>
        <h1><u><b>Log In</b></u></h1>
        <br>
        <form>
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email Address:</label>
                <div class="col-sm-5">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password:</label>
                <div class="col-sm-5">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-1"></div>
                <div class="col-sm-5">
                    <button type="submit" class="btn btn-warning text-dark">Submit</button>
                    <div class="col-sm-5">
                        <a href="/home" class=""></a>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
