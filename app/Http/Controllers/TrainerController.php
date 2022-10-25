<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//AÑADIR
use App\Http\Controllers\Controllers;
use App\Trainer;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $trainers=Trainer::all();
        return view('index', compact('trainers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('avatar')){
            $file=$request->file('avatar');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
            //return $name;


        //return $request->all();
        //return $request->input('name');
        $trainer = new Trainer();
        $trainer->name=$request->input('name');
        $trainer->apellido=$request->input('apellido');
        //$trainer->Avatar=$request->input('Avatar');
        $trainer->avatar=$name;
        $trainer->save();
        return 'Guardado';
        //return $request->all();
        }
        else{
            return 'ERROR'; }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return 'tengo que regresar el id';
        //return view("show");
        $trainer = Trainer::find($id);
        return $trainer;
        return view('show', compact('trainer'));
        //return $trainer;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer)
    {
        //
        //return $trainer;
        return view('edit', compact('trainer'));
    }
    //https://www.youtube.com/watch?v=HNIHkITNUtE
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trainer $trainer)
    {
        //
        //return $trainer;
        $trainer->fill($request->except('avatar'));
        if ($request->hasFile('avatar')){
            $file= $request->file('avatar');
            $name=time().$file->getClientOriginalName();

            $trainer->avatar=$name;
            $file->move(public_path().'/images/',$name);
        }
        $trainer->save();
        return redirect('trainers/');
        //return "update";
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
        $trainer=Trainer::find($id);
        if ($trainer->delete($id)){
            
            //return 'El'.$id."si se pudo borrar";
            return redirect('trainers/');
        }
        else{
            return 'El'.$id."No se pudo borrar";
        }

        $data=Trainer::FindOrFail($id);
        if(file_exists('images/'.$data->avatar) AND !empty($data->avatar)){
        }
        try{
            $data->delete();
            $bug = 0;
        }
        catch(\Exception $e){
            $bug = $e->errorInfo[1];
        }
        if($bug==0){
            echo "success";
        }else{
            echo "error"; 
        }
    }
}

