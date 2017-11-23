<?php

namespace App\Http\Controllers;

use App\Models\AirdropModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Telegram\Bot\Laravel\Facades\Telegram;

class AirdropController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('airdrop.airdrop');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        //$response = Telegram::getMe();

        print_r($request);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AirdropModel  $airdropModel
     * @return \Illuminate\Http\Response
     */
    public function show(AirdropModel $airdropModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AirdropModel  $airdropModel
     * @return \Illuminate\Http\Response
     */
    public function edit(AirdropModel $airdropModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AirdropModel  $airdropModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AirdropModel $airdropModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AirdropModel  $airdropModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(AirdropModel $airdropModel)
    {
        //
    }
}
