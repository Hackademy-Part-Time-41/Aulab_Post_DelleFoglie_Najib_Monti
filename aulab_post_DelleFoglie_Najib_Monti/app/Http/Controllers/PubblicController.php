<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\CareerRequestMail;

class PubblicController extends Controller implements HasMiddleware
{
    public function homepage() {
        $articles = Article::where('is_accepted', true)->orderBy('created_at', 'desc')->take(4)->get();
        return view('welcome', compact('articles'));
    
    }
    
     public function chiSiamo(){
         return view('chiSiamo');
     }
    
    public function presentati(){
        return view('presentati');
    }
    
    public static function middleware()
    {
        return [
            new Middleware('auth', except: ['homepage']),
        ];
    }

    public function careers(){
        return view('careers');
    }

    public function careersSubmit(Request $request){

        $request->validate([
            'role' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $user = Auth::user();
        $role = $request->role;
        $email = $request->email;
        $message = $request->message;
        $info = compact('role', 'email', 'message');

        Mail::to('admin@theaulabpost.it')->send(new CareerRequestMail($info));

        switch ($role) {
            case 'admin':
                $user->is_admin = NULL;
                break; 
            case 'revisor':
                $user->is_revisor = NULL;
                break;
            case 'writer':
                $user->is_writer = NULL;
                break;
        }
        
        $user->update();

        return redirect(route('homepage'))->with('message', 'Richiesta inviata con successo');
    
    }

}

