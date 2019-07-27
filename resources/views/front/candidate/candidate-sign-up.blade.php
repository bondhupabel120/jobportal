@extends('front.master')

@extends('front.menu')

@section('body')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-2">

            </div>

            <div class="col-lg-8 pb-4">
                <p class="text-center pt-5" style="font: 20px 'Open Sans';color: #00a0da">Please Register</p>

                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('new-candidate-sign-up') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">First Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="first_name" class="form-control" placeholder="First Name" required/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Last Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="last_name" class="form-control" placeholder="Last Name"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Email Address</label>
                                <div class="col-md-9">
                                    <input type="email" name="email_address" class="form-control" placeholder="Email Address" required onblur="emailCheck(this.value);"/>
                                    <span id="res" class="text-success"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Password</label>
                                <div class="col-md-9">
                                    <input type="password" name="password" class="form-control" placeholder="Password" required/>
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

    <script>
        function emailCheck(email) {

            // Raw ajax

            // var xmlHttp = new XMLHttpRequest();
            // var serverPage = 'http://127.0.0.1:8000/email-check/'+email;
            // xmlHttp.open('GET', serverPage);
            // xmlHttp.onreadystatechange = function () {
            //     if(xmlHttp.readyState == 4 && xmlHttp.status == 200){
            //         document.getElementById('res').innerHTML = xmlHttp.responseText;
            //         if(xmlHttp.responseText == 'Email address already exist'){
            //             document.getElementById('regBtn').disabled == true;
            //         }else {
            //             document.getElementById('regBtn').disabled == false;
            //         }
            //     }
            // }
            //
            // xmlHttp.send();

            $.ajax({
                url      : 'http://127.0.0.1:8000/email-check/'+email,
                method   : 'GET',
                data     :{email:email},
                dataType : 'JSON',
                success  : function (data) {
                    document.getElementById('res').innerHTML = data;
                    if(data == 'Email address already exist'){
                        document.getElementById('regBtn').disabled = true;
                    }else {
                        document.getElementById('regBtn').disabled = false;
                    }
                }
            });

        }
    </script>

@endsection