<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Cloud;
use Alert;

class CloudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.clouds.index', [
            'clouds' => Cloud::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.clouds.create', [
            'categories' => Category::all()
        ]);
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
            'category_id' => 'required',
        ]);

        Cloud::create($validatedData);
        Alert::success('Congrats', 'New course has been added!');

        return redirect('dashboard/clouds');
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
            'categories' => Category::all(),
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
            'categories' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cloud $cloud)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'storage' => 'required|max:255',
            'price' => 'required|max:255',
            'category_id' => 'required',
        ]);

        Cloud::where('id', $cloud->id)->update($validatedData);
        Alert::success('Congrats', 'New course has been edited!');

        return redirect('dashboard/clouds');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cloud $cloud)
    {
        Cloud::destroy($cloud->id);
        Alert::success('Congrats', 'New course has been deleted!');

        return redirect('dashboard/clouds');
    }
}
