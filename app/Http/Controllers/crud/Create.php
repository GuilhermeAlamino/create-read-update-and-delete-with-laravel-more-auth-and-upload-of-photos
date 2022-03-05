<?php

namespace App\Http\Controllers\crud;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Crud;

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

        return redirect()->route('admin.user.lista');
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

        return redirect()->route('admin.user.lista');
    }

    public function deletar($id)
    {
        Crud::find($id)->delete();
        return redirect()->route('admin.user.lista');
    }
}
