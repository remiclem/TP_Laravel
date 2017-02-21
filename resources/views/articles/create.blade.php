@extends('template.layout')

@section('content')

    <h1>Mon Fomulaire</h1>

    <form method="POST" action="{{route('article.store')}}">
        {{csrf_field()}}

        <input type="text" name="title" placeholder="Titre">
        <br>
        <textarea name="body" id="" clos="30" rows="10"></textarea>
        <br>
        <input type="submit" value="Envoyer">

     </form>


@endsection