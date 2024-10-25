<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
  public function index(){

    $users = DB::select("SELECT * FROM users");

    return view('users.liste', compact('users'));
  }

  public function create(){
    return view('users.create');
  }
  public function store(){
    if (!empty(request('prenom'))&& !empty(request('nom'))&&
        !empty(request('email'))&& !empty(request('adresse'))) {
            $users = DB::select('SELECT * FROM users WHERE email = ?', [request('email')]);
            if (empty($users)) {
                $requete = 'INSERT INTO users(prenom, nom, email, adresse) VALUES (:prenom, :nom, :email, :adresse)';
                $status= DB::insert($requete, [
                'prenom'=>request('prenom'),
                'nom'=>request('nom'),
                'email'=>request('email'),
                'adresse'=>request('adresse'),
                ]);

                if ($status=== true) {
                    $message = 'Ajout effectuer avec succes';
                }else {
                    $message = "Erreur d'ajout";
                }
                return redirect('users/liste')->with(['status'=> $status, 'message'=> $message]);
            }
            else {
                return back()->withInput()->with('message', 'Erreur l\'email existe déja' );
            }
    }
    else {
        return back()->withInput()->with('message', 'Erreur vous devez renseignez tous les champs' );
    }
}

public function delete($id){
    $affected = DB::delete('delete from users where id = ?', [$id]);
    if ($affected > 0) {
        $message = "Utilisateur suprimer avec succes";
    }else {
        $message = "Aucune suppression n'a été effectuer";
    }
    return redirect('users/liste')->with(['status'=> $affected, 'message'=> $message]);

}

public function edit($id){
    $users = DB::select('select * from users where id = ?', [$id]);
    if (!empty($users)) {
        $users = $users[0];
       return view('users.edit', compact('users'));
    }else {
        abort(404);
    }

}

public function update($id){
    if (!empty(request('prenom'))&& !empty(request('nom'))&&
        !empty(request('email'))&& !empty(request('adresse')))
    {
        $requete = 'UPDATE users SET prenom= :prenom, nom= :nom, email= :email, adresse= :adresse WHERE id = :id';
    $affected = DB::update($requete, [
        'id'=>$id,
        'prenom'=>request('prenom'),
        'nom'=>request('nom'),
        'email'=>request('email'),
        'adresse'=>request('adresse'),
     ]);
     if ($affected > 0) {
        $message = "Modification effectuer avec succes";
    }else {
        $message = "Aucune Modification n'a été effectuer";
    }
    return redirect('/users/liste')->with(['status'=> $affected, 'message'=> $message]);
    } else {
        return back()->withInput()->with('message', 'Erreur vous devez renseignez tous les champs' );
    }

}

public function show($id){
    $users = DB::select('select * from users where id = ?', [$id]);
    $users = $users[0];
    return view('users.show', compact('users'));
}
}
