<?php

namespace App\Http\Controllers\Dashboard;

use App\Helpers\Alert;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function dashboard()
    {
        if (Auth::check() && !Auth::user()->isAdmin()) {
            Alert::warning('Ой, а Вы точно администратор?', 'Слабо верится! :)');

            return redirect(route('home'));
        }

        if (!Auth::check()) {
            Alert::warning('Сперва необходимо авторизоваться!', 'Что то не так!');

            return redirect(route('home'));
        }

        return view('dashboard.dashboard');
    }
}
