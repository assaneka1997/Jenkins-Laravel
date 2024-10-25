@extends('layout.main')
@section('title','modification d\'un utilisateur')
@section('titre','Modification d\'un utilisateur')
@section('contenu')
        <form class="main" method="post" action="{{$users->id}}">
            @csrf
            <div class="formItem">
                <label for="">Prénom</label>
                <input type="text" name="prenom" value="{{$users->prenom}}">
            </div>
            <div class="formItem">
                <label for="">Nom</label>
                <input type="text" name="nom" value="{{$users->nom}}">
            </div>
            <div class="formItem">
                <label for="">Email</label>
                <input type="email" name="email" value="{{$users->email}}">
            </div>
            <div class="formItem">
                <label for="">Adresse</label>
                <input type="text" name="adresse" value="{{$users->adresse}}">
            </div>
            <div class="formItem">
                <input type="submit" value="Modifier">
            </div>
        </form>
@endsection
