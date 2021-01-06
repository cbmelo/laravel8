<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Bem vindos ao nosso blog show';
        return view ('pages.index', ['title' => $title]);
    }

    public function games()
    {
        $title = 'Tudo sobre Games';
        return view('pages.games');
    }

    public function entertenimento()
    {
        $dados = array(
            'title' => 'Vamos falar de entertenimento!',
            'categorias' => ['Cinema', 'Parks', 'Shows']
        );

        return view('pages.entertenimento')->with($dados);
    }
}
