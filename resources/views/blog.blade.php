@extends('layouts.public')

@section('title','RAF it days')

@section('content')
    <h1>
        {{$blog['title']}}
    </h1>
    <b>
        {{$blog['published']}}
    </b>
        
    <img src="{{$blog['picture']}}" class="img-thumbnail" style="width:100%" alt="">

    <P>
        {{$blog['short_intro']}}
    </P>
    <p>
        {{$blog['content']}}
    </p>
    <a href="{{route('homepage')}}" class="btn btn-primary">Nazad</a>
@endsection