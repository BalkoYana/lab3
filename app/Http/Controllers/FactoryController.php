<?php

namespace App\Http\Controllers;

use App\Models\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FactoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $factory = Factory::all();
        return view('factory.index',[
            'factory'=>$factory
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('factory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $data=$request->only(['code','name','number','branch','address']);
        Factory::create($data);
        return redirect((route('factories.index')));
    }

    /**
     * Display the specified resource.
     */
    public function show(Factory $factory): View
    {
        return view('factory.show', ['factory' => $factory]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Factory $factory)
    {
        return view('factory.edit', compact('factory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Factory $factory):RedirectResponse
    {
        $data=$request->only(['code','name','number','branch','address']);
        $factory->update($data);
        return redirect(route('factories.index'));
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Factory $factory):RedirectResponse
    {
        $factory->delete();
        return redirect(route('factories.index'));
    }
}
