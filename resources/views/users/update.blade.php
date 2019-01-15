@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action={{url('/update/'.$user['id'])}} method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label> <input
                    type="text" class="form-control"
                    aria-describedby="emailHelp" placeholder="Enter Username"
                    value={{ $user["name"] }} />
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label> <input
                    type="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Enter email"
                    value={{ $user["email"] }} />
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href={{url('/users')}} class="btn btn-primary pull-left">Go Back</a>
            </form>
        </div>
    </div>
</div>
@endsection
