<?php

namespace App\Http\Controllers;

use App\Http\Requests\EnviaEmailFormRequest;
use App\Mail\EnviarEmail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EnviarEmailController extends Controller{

    public function enviaEmail(EnviaEmailFormRequest $request){

        $email = Mail::to('projetos.fatene@gmail.com')->send(new EnviarEmail($request));

        if($email == null){

            return redirect()->back()->with(['success' => 'Obrigado por entrar em contato com a KUG']);

        }else{
            return redirect()->back()
                ->withErrors(['errors'=>'Algo deu errado, favor tentar novamente!'])
                ->withInput();
        }

    }

    public function index(){

    
        return view('index');
    }
}
