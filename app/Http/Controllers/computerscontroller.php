<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class computerscontroller extends Controller
{



    //array of static Data
    private static function getData(){
        return [
            ['id'=>1,'name'=>'LG','origin'=>'Korea'],
            ['id'=>2,'name'=>'HP','origin'=>'USA'],
            ['id'=>3,'name'=>'DELL','origin'=>'France']
        ];
    }



    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('computers.index',['computers'=>self::getData()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('computers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        $computers = self::getData();
        $index = array_search($id,array_column($computers,'id'));
        if($index===false){
            abort(404);
        }
        else{
        return view('computers.show',['computer'=>$computers[$index]]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
