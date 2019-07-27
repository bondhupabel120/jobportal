@extends('front.master')

@extends('front.menu')

@section('body')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-2">

            </div>

            <div class="col-lg-8 pb-4">
                <p class="text-center pt-5" style="font: 20px 'Open Sans';color: #00a0da">Please Login</p>

                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center text-danger">{{ Session::get('message') }}</h3>
                        <form action="{{ route('new-candidate-login') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Email Address</label>
                                <div class="col-md-9">
                                    <input type="text" name="email_address" class="form-control" placeholder="Email Address" required />
                                    <span id="res" class="text-success"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Password</label>
                                <div class="col-md-9">
                                    <input type="text" name="password" class="form-control" placeholder="Password"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="btn" id="resBtn" class="btn btn-block" value="Register" style="background-color: #00a0da;color: white">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-2">

            </div>
        </div>
    </div>

@endsection