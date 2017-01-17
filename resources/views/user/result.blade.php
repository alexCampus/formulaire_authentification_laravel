@extends('template')
@section('content')
    <h2>Resultats du formulaire</h2>

    <h3>Firstname</h3>
    <p>{{Auth::user()->firstname}}</p>

    <h3>lastname</h3>
    <p>{{Auth::user()->lastname}}</p>

    <h3>email</h3>
    <p>{{Auth::user()->email}}</p>

    

    
@endsection
