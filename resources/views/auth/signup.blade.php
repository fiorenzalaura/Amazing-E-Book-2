@extends('layout.main')
@section('content')
    <div class="container">
        <br>
        <h1><u><b>Sign Up</b></u></h1>
        <br>
        <div class="row">
            <div class="col-md-5">
                <label for="static" class="col-form-label">First Name:</label>
                <div class="col-md-8">
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-5">
                <label for="static" class="col-form-label">Middle Name:</label>
                <div class="col-md-8">
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-5">
                <label for="static" class="col-form-label">Last Name:</label>
                <div class="col-md-8">
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-5">
                <label for="static" class="col-form-label">Email Address:</label>
                <div class="col-md-8">
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-5">
                <label for="static" class="col-form-label">Gender:</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                </div>
            </div>
            <div class="col-md-5">
                <label for="static" class="col-form-label">Role:</label>
                <select name="inputRole" class="form-control">
                    <option selected>Admin</option>
                    <option selected>User</option>
                </select>
            </div>
            <div class="col-md-5">
                <label for="static" class="col-form-label">Password:</label>
                <div class="col-md-8">
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-5">
                <label for="static" class="col-form-label">Display Picture:</label>
                <div class="col-md-8">
                    <input type="file" class="form-control-file">
                </div>
            </div>
            <div class="col-sm-3"></div>
            <div class="col-sm-7">
                <br>
                <button type="submit" class="btn btn-warning text-dark">Submit</button>
                <div class="col-md-8">
                    <a href="/login" class="text-decoration-none">Already have an account? click here to log in</a>
                </div>
            </div>
        </div>
    </div>
@endsection
