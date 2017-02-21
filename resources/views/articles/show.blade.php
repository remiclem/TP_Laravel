@extends('layouts.app')

@section('content')
    <div class="container" xmlns="http://www.w3.org/1999/html">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <h1>{{$article->title}}</h1>
                        <p>{{$article->content}}</p>
                        <p>
                            @if($article->user)
                                Utilisateur: {{$article->user->name}}
                            @else
                                Pas d'utilisateur
                            @endif
                        </p>
                        <a href="{{route('article.index')}}">Retour</a>
                    </div>
                    <hr>


                    <div class="card">

                        <div class="card-block">

                            <form method="POST" action="/post/{{ $post->id }}/comments">


                                {{ csrf_field() }}



                                <div class="form-group">

                                    <textarea name="body" placeholder="votre commentaire ici" class="form-control"></textarea>

                                </div>


                                <div class="form-group">

                                    <button type="submit" class="btn btn-primary">Ajouter un commentaire</button>

                                </div>

                            </form>


                        </div>

                    </div>



                </div>
            </div>
        </div>
    </div>





@endsection
