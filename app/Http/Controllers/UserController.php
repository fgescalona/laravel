<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        if (request()->has('empty')) {
            $users = [];
        } else {
            $users = [ 'Javier', 'Jose', 'Francisco', 'Rodolfo'];
        }

        $title = 'Listado de usuarios';

        return view('users.index', compact('users', 'title'));
    }

    public function show($id)
    {
         return view('users.show', compact('id'));
    }

    public function create()
    {
        return view('users.create');
    }
}   
