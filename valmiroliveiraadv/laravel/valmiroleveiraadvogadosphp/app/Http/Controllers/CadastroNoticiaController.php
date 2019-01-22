<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Categoria;
use App\NoticiaSums; 
use Illuminate\Support\Facades\DB;
use File;

class CadastroNoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastroNoticia');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,   [
            'inputImagem' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'inputTitulo' => 'required',
            'inputConteudo' => 'required'
        ]);

        $ns = new NoticiaSums();
        $ns->titulo = $request->input('inputTitulo');
        $ns->conteudo = $request->input('inputConteudo');
        $this->validate($request,   [
            'inputImagem' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        $image = $request->file('inputImagem');
        $new_name = rand() . '.' . $image->getClientOriginalName();
        $image->move(public_path('images'), $new_name);
        $ns->imagem =  "images/" . $new_name;
        $ns->save();

        return view('cadastroNoticiaSucesso');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nots = NoticiaSums::find($id);
        if(isset($nots)){
            return view('editNoticia', compact('nots'));
        }
        return redirect('/');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,   [
            'inputImagem' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'inputTitulo' => 'required',
            'inputConteudo' => 'required'
        ]);

        $ns = NoticiaSums::find($id);
        $ns->titulo = $request->input('inputTitulo');
        $ns->conteudo = $request->input('inputConteudo');

        if($request->file('inputImagem') !== null){
            File::delete($ns->imagem);
            $image = $request->file('inputImagem');
            $new_name = rand() . '.' . $image->getClientOriginalName();
            $image->move(public_path('images'), $new_name);
            $ns->imagem =  "images/" . $new_name;
        }
        $ns->save();

        return view('cadastroNoticiaSucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nots = NoticiaSums::find($id);
        if(isset($nots)){
            $nots->delete();
        }
        return redirect('/');
    }
}
