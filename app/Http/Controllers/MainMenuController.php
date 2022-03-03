<?php

namespace App\Http\Controllers;

use App\Models\MainMenu;
use App\Http\Requests\StoreMainMenuRequest;
use App\Http\Requests\UpdateMainMenuRequest;

class MainMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMainMenuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMainMenuRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MainMenu  $mainMenu
     * @return \Illuminate\Http\Response
     */
    public function show(MainMenu $mainMenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MainMenu  $mainMenu
     * @return \Illuminate\Http\Response
     */
    public function edit(MainMenu $mainMenu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMainMenuRequest  $request
     * @param  \App\Models\MainMenu  $mainMenu
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMainMenuRequest $request, MainMenu $mainMenu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MainMenu  $mainMenu
     * @return \Illuminate\Http\Response
     */
    public function destroy(MainMenu $mainMenu)
    {
        //
    }
}
