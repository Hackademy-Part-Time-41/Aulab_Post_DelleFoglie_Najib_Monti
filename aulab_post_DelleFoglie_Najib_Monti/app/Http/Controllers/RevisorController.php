<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
<<<<<<< HEAD
class RevisorController extends Controller
{
   public function dashboard(){
    $unrevisionedArticles = Article::where('is_accepted', NULL)->get();
    $acceptedArticles = Article::where('is_accepted', True)->get();
    $rejectedArticles = Article::where('is_accepted', false)->get();

    return view('revisor.dashboard', compact('unrevisionedArticles', 'acceptedArticles' ,'rejectedArticles'));
   }
=======

class RevisorController extends Controller
{
    public function dashboard(){
        $unrevisionedArticles = Article::where('is_accepted', NULL)->get();
        $acceptedArticles = Article::where('is_accepted', true)->get();
        $rejectedArticles= Article::where('is_accepted', false)->get();
        return view('revisor.dashboard', compact('unrevisionedArticles', 'acceptedArticles', 'rejectedArticles'));
    }

    public function acceptArticle(Article $article){
        $article->is_accepted = true;
        $article->save();
        return redirect(route('revisor.dashboard'))->with('message', "Hai accettato l'articolo $article->title");
    }

    public function rejectArticle(Article $article){
        $article->is_accepted = false;
        $article->save();
        return redirect(route('revisor.dashboard'))->with('message', "Hai rifiutato l'articolo $article->title");
    }

    public function undoArticle(Article $article){
        $article->is_accepted = NULL;
        $article->save();
        return redirect(route('revisor.dashboard'))->with('message', "Hai rimandato in revisione l'articolo $article->title in revisione");
    }
>>>>>>> 0daa3a0756d391c8d4ac7c8b4b4b76b6033d5d37
}
