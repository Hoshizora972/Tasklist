<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Affiche la page d'accueil
    public function index()
    {
        return view('home');
    }

    // Mène vers la page iconic lorsqu'on clique sur le logo
    public function info()
    {
        return view('iconic');
    }

    //AffIche et récupère les taches de la base de donner
    public function listing()
    {
        $tasks=Task::all();
        return view('list',compact('tasks'));
    }

    // Mène vers la page form pour crée de nouvelle taches
    public function create()
    {
        return view('form');
    }

    // Crée et sauvegarde les nouvelles taches en leurs donnant une valeur par defaut 
    public function store(Request $request)
    {
        //Vérification des données saisi par l'utilisateur dans le formulaire
        $request->validate(['title'=>'required']);
        // Instance de la nouvelle valeur à enregistrer
        $task = new Task();
        // Affectation de la valeur a enregistrer
        $task->title=$request->title;
        $task->description=$request->description;
        // Requete deffinissant la valeur par défaut
        $task->state=0;
        // sauvegarde de la tache enregistrer
        $task->save();
        // retour a la page home
        return redirect()->route('list');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
    
    // Modification des champs deja enregistrer dans la base de donnée
    public function edit(Task $task)
    {
        return view ('edit',compact('task'));
    }
    public function maj(Request $request,Task $task)
    {
        $task->title=$request->input('title');
        $task->description=$request->input('description');
        $task->state=0;
        $task->save();
        return redirect()->route('list');
    }


    // Les fontion update et remove sont la pour mettre a jour le statut ou le remettre au statut initial
    public function update(Task $task)
    {
        // mise a jour du statut de la tache
        $task->update(['state'=>1]);
        // retour a la page précédente
        return back();
    }
    public function remove(Task $task)
    {
        // mise a jour du statut si le statut est deja a 1
        $task->update(['state'=>0]);
        return back();
    }

    // Suppression des taches 
    public function destroy(Task $task)
    {
        // requete de suppression de la tache selectionner
        $task->delete();
        return back();
    }
}
