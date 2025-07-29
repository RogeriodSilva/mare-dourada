<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthenticatorController extends Controller
{

    public function render()
    {
        return view('auth');
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|min:3|max:255|string|regex:/^[A-Za-zÀ-ÿ\s]+$/u|regex:/^\S*$/',
            'lastname' => 'required|min:3|max:255|string|regex:/^[A-Za-zÀ-ÿ\s]+$/u|',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:4',
            'password_confirm' => 'required|same:password'
        ];

        $val = Validator::make($request->all(), $rules, [
            'required' => 'O campo nome é obrigatório',
            'password.min' => 'A senha deve ter no mínimo 4 caracteres',
            'password_confirm.same' => 'As senhas não conferem',
            'email.unique' => 'Email já cadastrado',
            'name.min' => 'O nome deve ter no mínimo 3 caracteres',
            'name.regex' => 'O esse campo não pode haver caracteres especiais',
        ]);

        if ($val->fails()) {
            return redirect()
                ->route('auth.index')
                ->withErrors($val)
                ->withInput()
                ->with(['mode' => 'register']);
        }

        User::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()
            ->route('auth.index')
            ->with(['mode' => 'login', 'alert' => [
                'title' => 'Cadastro realizado com sucesso',
                'message' => 'Faça o login para começar a comprar'
            ]]);
    }

    public function auth(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        } else {
            return redirect()->route('auth.index')->with('login_erro', 'Usuário ou senha inválidos');
        }
    }

    public function logout()
    {
        $email = Auth::user()->email;

        Auth::logout();

        return redirect()
            ->route('auth.index')
            ->with(['mode' => 'login'])
            ->withInput(['email' => $email]);;
    }
}
