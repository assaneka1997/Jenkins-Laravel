@extends('layout.main')
@section('title','Ajout d\'un utilisateur')
@section('titre','Ajout d\'un utilisateur')
@section('contenu')
        <form class="main" method="post" action="create">
            @csrf
            <div class="formItem">
                <label for="">Prénom</label>
                <input type="text" name="prenom" value="{{old('prenom')}}">
            </div>
            <div class="formItem">
                <label for="">Nom</label>
                <input type="text" name="nom" value="{{old('nom')}}">
            </div>
            <div class="formItem">
                <label for="">Email</label>
                <input type="email" name="email" value="{{old('email')}}">
            </div>
            <div class="formItem">
                <label for="">Adresse</label>
                <input type="text" name="adresse" value="{{old('adresse')}}">
            </div>
            <div class="formItem">
                <input type="submit" value="Ajouter" id="">
            </div>
        </form>
@endsection
