<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;


class ProdutoController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function list()
    {
        return Produto::all();
    }
}
