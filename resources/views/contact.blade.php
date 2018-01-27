@extends('layouts.master')

@section('contact')
    @if (Session::has('success'))
         <div class="alert alert-success">  <center> {{Session::get('success')}} </center></div>
     @endif


    <div id="fh5co-main">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2>Contact</h2>
                    <div class="fh5co-spacer fh5co-spacer-sm"></div>
                    <form action="{{url('contact')}}" method="post">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="fname" class="form-control" placeholder="First Name">
                                    @if ($errors->has('fname'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('fname') }}</strong>
                                        </span>
                                    @endif

                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="lname" placeholder="Last Name">
                                    @if ($errors->has('lname'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('lname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email Address">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <textarea name="message" id="message" name="message" cols="30" class="form-control" rows="10"></textarea>
                                    @if ($errors->has('message'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('message') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Send Message">
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>


@endsection