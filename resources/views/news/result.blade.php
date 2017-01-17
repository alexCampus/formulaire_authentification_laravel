@extends('template')
@section('content')
    <h2>Resultats du formulaire</h2>
@foreach ($news as $new)
<div>
<h2>New N° {{ $new->id }} </h2>
	<h3>title</h3>
    <p>{{ $new->title }}</p>

    <h3>content</h3>
    <p>{{ $new->content }}</p>
    <a href="/news/{{$new->id}}"><button class="btn btn-primary btn-sm">Mettre à jour</button></a>
    <a href="/news/{{$new->id}}/delete"><button class="btn btn-danger btn-sm">Supprimer</button></a>
</div>
<hr>

@endforeach   

    

    
@endsection
