@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!<br />
                    You referred {{$user->count()}} Users.
                    <br />

                    <div class='alert alert-success '>
                      <h4>Your Private Affiliate id</h4>
                      @if(Auth::user()->affiliate_id)
                          {{url('/').'/register/?ref='.Auth::user()->affiliate_id}}
                      @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
