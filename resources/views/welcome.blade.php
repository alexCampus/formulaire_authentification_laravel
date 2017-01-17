@extends('template')
@section('content')

@foreach ($news as $new) 

    <div>
    <h2>New N° {{ $new->id }} </h2>
        <h3>title</h3>
        <p>{{ $new->title }}</p>

        <h3>content</h3>
        <p>{{ $new->content }}</p>
    </div>
    <hr>

@endforeach
@endsection
