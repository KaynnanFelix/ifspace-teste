<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpacesController extends Controller
{
    private $spaces = [
        ['id'=>0, 'name' => 'Sala 314', 'localization' => 'Bloco A', 'type' => 'Sala de Aula Grande'],
        ['id'=>1, 'name' => 'Sala 315', 'localization' => 'Bloco A', 'type' => 'Sala de Aula Grande'],
        ['id'=>2, 'name' => 'Sala 316', 'localization' => 'Bloco A', 'type' => 'Sala de Aula Grande'],
        ['id'=>3, 'name' => 'Sala 317', 'localization' => 'Bloco A', 'type' => 'Sala de Aula Grande'],
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct(){
         $spaces = session('spaces');
         if(!isset($cliente))
            session(['spaces' => $this->spaces]);
     }
    public function index()
    {
        $spaces = session('spaces');
        $titles = "Lista de Espaços - IFSP";
        return view('spaces.index')
            ->with('spaces',$spaces)
            ->with('title', $titles);
        //return view('spaces.index', commpact(['spaces']));
        //return view('spaces.index', ['spaces' => $spaces, 'title' = $titles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('spaces.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $spaces = session('spaces');
        $id = end($spaces)['id'] + 1;
        $name = $request->name;
        $localization = $request->localization;
        $type = $request->type;
        $data = ["id"=>$id, "name"=>$name,"localization"=>$localization,"type"=>$type];
        $spaces[] = $data;
        session(['spaces' => $spaces]);
        return redirect()->route('spaces.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $spaces = session('spaces');
        $index = $this->getIndex($id, $spaces);
        $space = $spaces[ $index];
        return view('spaces.show', compact(['space']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $spaces = session('spaces');
        $index = $this->getIndex($id, $spaces);
        $space = $spaces[ $index ];
        return view('spaces.edit', compact(['space']));

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
        //
        $spaces = session('spaces');
        $index = $this->getIndex($id, $spaces);
        $spaces[ $index]['name'] = $request->name;
        $spaces[ $id]['localization'] = $request->localization;
        $spaces[ $id]['type'] = $request->type;
        session(['spaces' => $spaces]);
        return redirect()->route('spaces.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $spaces = session('spaces');
        $index = $this->getIndex($id, $spaces);
        array_splice($spaces, $index, 1);
        session(['spaces' => $spaces]);
        return redirect()->route('spaces.index');
    }

    private function getIndex($id, $spaces){
        $ids = array_column($spaces, 'id');
        $index = array_search($id, $ids);
        return $index;
    }
}
