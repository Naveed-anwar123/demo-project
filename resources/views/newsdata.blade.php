@extends('layouts.master')

@section('menu')
    <div id="fh5co-main">
        <div class="col-md-6 col-md-offset-7">
            <form action="{{url('/search')}}" method="get">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="keyword" placeholder="Search news ">
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Search">
                    </div>
                </div>
        </div>
        </form>
    </div>
    <div class="container">
        <div class="row">
            <div id="fh5co-board" data-columns>

                @if (count($news) > 0)
                    @foreach($news as $latest)

                        @if($latest['urlToImage'] != NULL)
                            <div class="item">
                                <div class="animate-box">
                                    <a href="{{$latest['urlToImage']}}" class="image-popup fh5co-board-img" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, eos?"><img src="{{$latest['urlToImage']}}"  alt="Free HTML5 Bootstrap template"></a>
                                </div>
                                <h4 style="margin-left: 20px">{{$latest['title']}}</h4>
                                <div class="fh5co-desc">{{ str_limit ($latest['description'],54 , '...' )}} <a href="{{$latest['url']}}" >Read more</a></div>

                            </div>
                        @endif
                    @endforeach
                @else
                    <div class="fh5co-desc">No result found </div>
                @endif
            </div>
        </div>
    </div>

@endsection