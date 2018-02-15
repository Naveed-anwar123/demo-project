<?php
/**
 * Created by PhpStorm.
 * User: Naveed Anwar
 * Date: 06/02/2018
 * Time: 01:07 AM
 */
?>


@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Change Password</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ url('changePasswordRequest') }}">
                            {{ csrf_field() }}


                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Email</label>

                                <div class="col-md-6">
                                    <input id="password" type="email" class="form-control" name="email" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('cpassword') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="cpassword" required>

                                    @if ($errors->has('cpassword'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('cpassword') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>




                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Change Password
                                    </button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection





