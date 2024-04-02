@extends('layouts.public')

@section('title','RAF it days')

@section('content')

    <h1>RAF IT Days Laravel blog</h1>

    <p>Ovde prikazujemo sve zapise iz bloga</p>

  @foreach($blogovi as $blog)

    <div>

        <h3>{{ $blog['title'] }}</h3>

        <p>{{ $blog['short_intro'] }}</p>

        <a href="{{ route('blog', ['id'=>$blog['id']]) }}" class="btn btn-primary">Opširnije</a>

    </div>

  @endforeach

@endsection