<?php

namespace App\Http\Controllers\crud;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Crud;
use App\User;
use Illuminate\Support\Facades\Auth;

class Create extends Controller
{
    public function index()
    {
        $registros = Crud::all();
        return view('registers.index_home', compact('registros'));
    }

    public function criar()
    {
        return view('create-user.adicionar');
    }

    public function salvar(Request $request)
    {
        $dados = $request->all();
        // dd($dados);
        if ($request->hasFile('imagem')) {
            $imagem = $request->file('imagem');
            $number = rand(0, 1000);
            $dir = "img/crud/";
            $extensions = $imagem->guessClientExtension();
            $nomeImage = "imagem_" . $number . "." . $extensions;

            $imagem->move($dir, $nomeImage);

            $dados['imagem'] = $dir . $nomeImage;
        }

        Crud::create($dados);

        return redirect()->route('cursos.cursos.user.lista');
    }

    public function editar($id)
    {
        $registro = Crud::find($id);
        return view('edit-user.editar', compact('registro'));
    }

    public function atualizar(Request $request, $id)
    {

        $dados = $request->all();

        if ($request->hasfile('imagem')) {
            $imagem = $request->file('imagem');
            $number = rand(0, 1000);
            $dir = "img/crud/";
            $extensions = $imagem->guessClientExtension();
            $nomeImage = "imagem_" . $number . "." . $extensions;

            $imagem->move($dir, $nomeImage);

            $dados['imagem'] = $dir . $nomeImage;
        }

        Crud::find($id)->update($dados);

        return redirect()->route('cursos.cursos.user.lista');
    }

    public function deletar($id)
    {
        Crud::find($id)->delete();
        return redirect()->route('cursos.cursos.user.lista');
    }

    public function config()
    {
        return view('settings.configuration');
    }

    public function configsalvar(Request $request)
    {
        $dados = [
            'name' => $request['name'],
            'email' => $request['email'],
            'imagem' => $request['imagem'],
            'password' => bcrypt($request['password']),
        ];

        if ($request->hasFile('imagem')) {
            $imagem = $request->file('imagem');
            $number = rand(0, 1000);
            $dir = "img/crud/";
            $extensions = $imagem->guessClientExtension();
            $nomeImage = "imagem_" . $number . "." . $extensions;

            $imagem->move($dir, $nomeImage);

            $dados['imagem'] = $dir . $nomeImage;
        }

        User::create($dados);

        if (User::where('email', '=', $dados['email'])->count()) {
            $user = User::where('email', '=', $dados['email'])->first();
            $user->update($dados);
            echo "Retornado user alterado";
            return redirect()->route('cursos.cursos.user.lista');
        } else {
            User::create($dados);
            echo "Retornado user criado";
        }

        return redirect()->route('cursos.cursos.user.lista');
    }

    public function configedit()
    {
        return view('settings.configuration-edit');
    }

    public function configupdate(Request $request)
    {
        $id = Auth::user()->id;

        if ($request->hasFile('imagem')) {
            $imagem = $request->file('imagem');
            $number = rand(0, 1000);
            $dir = "img/crud/";
            $extensions = $imagem->guessClientExtension();
            $nomeImage = "imagem_" . $number . "." . $extensions;

            $imagem->move($dir, $nomeImage);

            $dados['imagem'] = $dir . $nomeImage;

            if (User::where('id', '=', $id)->count()) {
                $user = User::where('id', '=', $id)->first();
                $user->update([
                    'name' => $request['name'],
                    'email' => $request['email'],
                    'imagem' => $dados['imagem'],
                ]);
                return redirect('/configedit/configuracao/edit')->with('mensagem', 'Usuário alterado com sucesso!');
            }
            
        } else {
            if (User::where('id', '=', $id)->count()) {
                $user = User::where('id', '=', $id)->first();
                $user->update([
                    'name' => $request['name'],
                    'email' => $request['email'],
                    'password' => bcrypt($request['password']),
                ]);
                echo "Retornado user alterado";
                return redirect('/configedit/configuracao/edit')->with('mensagem', 'Usuário alterado com sucesso!');
            } else {
                echo "not will possible update";
            }
        }
    }
}
