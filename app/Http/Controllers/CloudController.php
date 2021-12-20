<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cloud;

class CloudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.clouds.index',['clouds' => Cloud::all()]);
        
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.clouds.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'storage' => 'required|max:255',
            'price' => 'required|max:255',
        ]);

        Cloud::create($validatedData);

        return redirect('dashboard/clouds')->with('success', 'New data has been added!');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Cloud $cloud)
    {
        return view('dashboard.clouds.show', [
            'cloud' => $cloud,
            ]);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Cloud $cloud)
    {
        return view('dashboard.clouds.edit', [
            'cloud' => $cloud,
            ]);
    }
        
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request,Cloud $cloud)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'storage' => 'required|max:255',
            'price' => 'required|max:255',
        ]);
    
        Cloud::where('id', $cloud->id)->update($validatedData);
    
        return redirect('dashboard/clouds')->with('success', 'Data has been edited!');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cloud $cloud )
    {
        Cloud::destroy($cloud->id);
        return redirect('dashboard/clouds')->with('success','Cloud has been deleted!');
    }
}
