<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disco;
use Carbon\Carbon;

class DiscoController extends Controller
{
    //
    public function index()
{
    $discos = Disco::all();

    return view('discos.index', [
        'discos' => $discos
    ]);
}

public function create()
{
    return view('discos.create');

}
public function store(Request $request)
{
    $dados = $request->all();
    //$dados['data_publicacao'] = Carbon::createFromFormat("d/m/Y", $dados['data_publicacao'])->format("Y-m-d");
    //$request->imagem->storeAs('public', $request->imagem->getClientOriginalName());
    //$dados['imagem'] = '/storage/' . $request->imagem->getClientOriginalName();
    Noticia::create($dados);
    
    return redirect()->back()->with('mensagem', 'Registro criado com sucesso!');
}
public function edit()
{

}
public function update()
{

}
public function destroy()
{

}

}
