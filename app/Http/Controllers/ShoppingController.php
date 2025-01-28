<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShoppingRequest;
use App\Models\Shopping;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ShoppingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('shoppings.index', [
            'shoppings' => Shopping::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('shoppings.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ShoppingRequest $request)
    {
        Shopping::create($request->validated());

        return redirect()->route('shoppings');
    }

    /**
     * Display the specified resource.
     */
    public function show(Shopping $shopping)
    {
        return view('shoppings.view', ['shopping' => $shopping]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Shopping $shopping)
    {
        return view('shoppings.form', ['shopping' => $shopping]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ShoppingRequest $request, Shopping $shopping)
    {
        $shopping->fill($request->validated());
        $shopping->save();

        return redirect()->route('shoppings');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shopping $shopping): RedirectResponse
    {
        $shopping->delete();

        return redirect()->route('shoppings');
    }
}
