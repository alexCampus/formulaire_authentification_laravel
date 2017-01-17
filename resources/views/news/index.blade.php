@extends('template')
@section('content')
    

<div>
<h2>New N° {{ $new->id }} </h2>
	<h3>title</h3>
    <p>{{ $new->title }}</p>

    <h3>content</h3>
    <p>{{ $new->content }}</p>


    <form class="" action="/news/{{ $new->id }}/update" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" placeholder="title">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content"  class="form-control" rows="8" cols="80"></textarea>
        </div>
        <input type="hidden" name="_method" value="put" />
        <button type="submit" class="btn btn-primary btn-sm">Mettre à jour</button>
    </form>
    
    
</div>
<hr>
  

    

    
@endsection