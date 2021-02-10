<?php

namespace App\Http\Controllers;

use App\Models\Estudante;
use App\Models\produto;
use Illuminate\Http\Request;

class EstudanteController extends Controller
{
    //estudante = usuario
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function teste()
    {
        return view (view: 'teste');
    }
    
     public function index()
    {
        return view (view: 'estudante.pagina');
    }
    public function index1()
    {
            return view (view: 'estudante.paginaPrincipal'); 
    }
    public function index2()
    {
            return view (view: 'estudante.produto'); 
    }        
    public function index3()
    {
        $estudante = estudante::all();   
        return view ('estudante.lista', ['estudante' => $estudante]); 
    }        
    public function index4()
    {
        $produto = produto::all();   
        return view ('estudante.lista', ['produto' => $produto]); 
    }        
    public function index5()
    {
        return view (view : 'estudante.paginausuario');
    }        
    public function index6()
    {
        $produto = produto::all();   
        return view ('estudante.listausuario', ['produto' => $produto]); 
    }        
    public function index7()
    {
        return view (view : 'estudante.edit');
    }        
    public function index8()
    {
        return view (view : 'estudante.edit2');
    }        


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view (view :'estudante.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       estudante::create([
        'nome' => $request->nome,
        'senha' => $request->senha,
       ]);
        
       return view (view: 'estudante.create'); 
}
      

        public function create1()
    {
         return view (view :'estudante.cadastro');
    }
    
    
    public function store1(Request $request)
    {
        produto::create([
            'nome' => $request->nome,
            'preço' => $request->preço,
        ]);
    return view (view: 'estudante.cadastro'); 
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estudante  $estudante
     * @return \Illuminate\Http\Response
     */
    public function show(Estudante $estudante)
    {
        $estudante = estudante::findOrFail($estudante); 
        return view('estudante.show',['estudante' => $estudante]);
        //$produto = produto::findOrFail($id);
       // return view ('estudante.show',  ['produto' => $produto]);
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estudante  $estudante
     * @return \Illuminate\Http\Response
     */
    public function edit(Estudante $estudante)
    {
        $this->estudante = $estudante;
        return view ('estudante.edit', compact('estudante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estudante  $estudante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estudante $estudante)
    {
        $estudante->update($request->all());
        return redirect()->route('estudante.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estudante  $estudante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estudante $estudante)
    {
            $estudante->delete();
            return redirect()->route('estudante.edit');
        

    }

    public function show1($id)
    {
        $estudante = estudante::findOrFail($id); 
        return view('estudante.show',['estudante' => $estudante]);
        //$produto = produto::findOrFail($id);
       // return view ('estudante.show',  ['produto' => $produto]);
         
    }
    public function edit1($id)
    {
        $estudante = estudante::findOrFail($id); 
        return view('estudante.edit',['estudante' => $estudante]);
    }

    public function update1(Request $request, $id)
    {
        $estudante = estudante::findOrFail($id);    
        $estudante->update([
        'nome' => $request->nome,
        'senha' => $request->senha,
       ]);
        
       return "criador com sucesso"; 
    }


    public function edit2($id)
    {
    $produto = produto::findOrFail($id); 
    return view('estudante.edit2',['produto' => $produto]);
    }

    public function update2(Request $request, $id)
    {
    $produto = produto::findOrFail($id);    
    $produto->update([
    'nome' => $request->nome,
    'preço' => $request->preço,
   ]);
    
   return view ('estudante.paginaPrincipal'); 
    }

public function delete1($id)
{
    $produto = produto::findOrFail($id); 
    return view('estudante.delete',['produto' => $produto]);
}

public function destroy1($id)
    {
        $produto = produto::findOrFail($id); 
        $produto->delete();

        return view ('estudante.paginaPrincipal');
        

    }










}
