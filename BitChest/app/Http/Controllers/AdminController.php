<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AdminController extends Controller
{
    // Afficher le formulaire pour ajouter un nouvel utilisateur
    public function createUserForm()
    {
        if (Gate::allows('manage-users')) {
            return view('admin.create_user');
        } else {
            abort(403);
        }
    }

    // Enregistrer un nouvel utilisateur
    public function storeUser(Request $request)
    {
        if (Gate::allows('manage-users')) {
            // Logique pour valider et enregistrer les données du nouvel utilisateur
        } else {
            abort(403);
        }
    }

    // Afficher la liste des utilisateurs
    public function userList()
    {
        if (Gate::allows('manage-users')) {
            $users = User::all();
            return view('admin.user_list', compact('users'));
        } else {
            abort(403);
        }
    }

    // Modifier les données personnelles d'un utilisateur
    public function editUser($userId)
    {
        if (Gate::allows('manage-users')) {
            $user = User::findOrFail($userId);
            return view('admin.edit_user', compact('user'));
        } else {
            abort(403);
        }
    }

    // Mettre à jour les données personnelles d'un utilisateur
    public function updateUser(Request $request, $userId)
    {
        if (Gate::allows('manage-users')) {
            // Logique pour valider et mettre à jour les données de l'utilisateur
        } else {
            abort(403);
        }
    }

    // Supprimer un utilisateur
    public function deleteUser($userId)
    {
        if (Gate::allows('manage-users')) {
            $user = User::findOrFail($userId);
            $user->delete();
            return redirect()->route('admin.user_list')->with('success', 'User deleted successfully');
        } else {
            abort(403);
        }
    }

    // Afficher le formulaire pour ajouter une nouvelle news
    public function createNewsForm()
    {
        if (Gate::allows('manage-news')) {
            return view('admin.create_news');
        } else {
            abort(403);
        }
    }

    // Enregistrer une nouvelle news
    public function storeNews(Request $request)
    {
        if (Gate::allows('manage-news')) {
            // Logique pour valider et enregistrer les données de la nouvelle news
        } else {
            abort(403);
        }
    }

    // Afficher la liste des news
    public function newsList()
    {
        if (Gate::allows('manage-news')) {
            $news = News::all();
            return view('admin.news_list', compact('news'));
        } else {
            abort(403);
        }
    }

    // Modifier une news
    public function editNews($newsId)
    {
        if (Gate::allows('manage-news')) {
            $news = News::findOrFail($newsId);
            return view('admin.edit_news', compact('news'));
        } else {
            abort(403);
        }
    }

    // Mettre à jour une news
    public function updateNews(Request $request, $newsId)
    {
        if (Gate::allows('manage-news')) {
            // Logique pour valider et mettre à jour les données de la news
        } else {
            abort(403);
        }
    }
}
