<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestRequest;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //

    public function getMeProfile()
    {
        $username = "hugo";
        return view ('users', compact ('username'));
    }

    public function getProfile(string $username)
    {
        return view ("users", compact('username'));
    }

    public function testeResponse()
    {
        return response()->json(['name' => 'hugo']);
    }

    public function testeRedirect()
    {
        return redirect('/');//redirecciona para index
    }

    public function testeRoute()
    {
        return redirect(route('user-profile', ['username' => 'HugoResende']));
    }

    public function testeRequest(Request $request)
    {
        dd($request->all());
        //url teste4?name=bros&age=22 vai apresentar dados no array
    }

    public function testeRequestB(TestRequest $request)
    {
        //código aqui
        /*
        $this->validate($request,    [
            'name' => 'required|exists:users',//exists e unique para verificações na Base de Dados
            'age' => 'required|numeric|unique:users,age'    
        ]);
        */
    }
}
