<?php

namespace App\Http\Controllers;

use App\Models\Factory;

use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;


class FactoryController extends Controller
{
    public function index()
    {
        if (!Gate::allows('factories-basic')) {
            return redirect()->route('login');
        }

        $factory = Factory::all();
        return view('factory.index',[
            'factory'=>$factory
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        if (!Gate::allows('factories-basic')) {
            return redirect()->route('login');
        }

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

    public function show(Factory $factory)

    {
        return view('factory.show', ['factory' => $factory]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Factory $factory)
    {

        $user = Auth::user();

        $is_super_admin = $user->role === 'super_admin';
        $can_update = $is_super_admin || $user->role === 'editor' && $user->id == $factory->creator_user_id;


        return view('factory.edit', ['factory' => $factory, 'is_super_admin' => $is_super_admin, 'can_update' => $can_update]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Factory $factory):RedirectResponse
    {

        if (!Gate::allows('update-factories', [$factory])) {
            abort(403, 'Unauthorized');
        }


        $data=$request->only(['code','name','number','branch','address']);
        $factory->update($data);
        return redirect(route('factories.index'));
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Factory $factory):RedirectResponse
    {

        if (!Gate::allows('delete-factories')) {
            abort(403, 'Unauthorized');
        }
        $factory->delete();
        return redirect(route('factories.index'));
    }

}
