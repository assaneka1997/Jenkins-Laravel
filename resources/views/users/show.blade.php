@extends('layout.main')
@section('title','Ajout d\'un utilisateur')
@section('Profil','profil de l\'utilisateur'.$users->id)
@section('contenu')
    <table>
        <tr>
            <th>Caractéristiques</th>
            <th>Valeur</th>
        </tr>
        <tr>
            <td>Prénom</td>
            <td>{{$users->prenom}}</td>
        </tr>
        <tr>
            <td>Nom</td>
            <td>{{$users->nom}}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{$users->email}}</td>
        </tr>
        <tr>
            <td>Adresse</td>
            <td>{{$users->adresse}}</td>
        </tr>
    </table>
@endsection
