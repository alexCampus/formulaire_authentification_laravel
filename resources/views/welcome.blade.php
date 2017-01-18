@extends('template')
@section('content')

@foreach ($news as $new) 

    <div>
    <h2>New N° {{ $new->id }} </h2>
        <h3>title</h3>
        <p>{{ $new->title }}</p>

        <h3>content</h3>
        <p>{{ $new->content }}</p>
        <p><em>Ecrit par {{ $new->user['firstname'] }} et posté le {{ $new->created_at->format('d M Y') }}</em></p>
    </div>
    <hr>

@endforeach
@endsection
