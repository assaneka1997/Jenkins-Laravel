@extends('layout.main')
@section('title', 'liste')
@section('titre', 'Liste des Utilisateurs')
@section('contenu')
@if (!empty($users))
    <table>
        <tr>
            <th>#</th>
            <th>PRENOM</th>
            <th>NOM</th>
            <th>EMAIL</th>
            <th>ADRESSE</th>
            <th colspan="3">Actions</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->prenom }}</td>
                <td>{{ $user->nom }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->adresse }}</td>
                <td>
                    <a href="/users/{{$user->id}}" class="button">Consulter</a>
                    <a href="/users/edit/{{$user->id}}" class="button">Modifier</a>
                    <a href="/users/delete/{{$user->id}}" class="button" onclick="return confirm('En êtes vous sûr?');">Supprimer</a>
                </td>
            </tr>
        @endforeach
    </table>
@else
    <p>la liste est vide</p>
@endif
@endsection

