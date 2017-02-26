@extends('layouts.app')

@section('content')




    @if(Auth::check())
        Vous etes connecté sur {{ Auth::user()->name }}
        <br><br>

        <br>
        Name: {{ $user->name }}<br>
        Email: {{ $user->email }}<br>
        Date d'inscription: {{ $user->created_at }}<br>


        Liste des articles de l'user {{ $user->name }}: <br>

        @foreach ($user->articles as $article)
            {{ $article->title }}
        @endforeach

    @else
        Vous n'etes pas connecté

    @endif

@endsection