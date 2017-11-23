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
        $telegram_user  = $request['telegram'];

        $eth_address    = $request['eth_address'];

        $email_id       = $request['email'];

        $check_email    = AirdropModel::where('email_address', '=', $email_id)->select('id')->first();

        $check_tel      = AirdropModel::where('tel_user_name', '=', $telegram_user)->select('id')->first();
        if($check_email === null){

            if($check_tel === null){

                $create = AirdropModel::create([
                    'tel_user_name' => $telegram_user,
                    'email_address' => $email_id,
                    'eth_address'   => $eth_address,
                    'verify_telegram'=> 0,
                    'created_at'    => date('Y-m-d H:i:s')
                ]);
                die(json_encode(['status'=>'succ','msg'=>'User registered successfully']));

            }else{

                die(json_encode(['status'=>'err','msg'=>'Telegram Username already exist']));
            }
        }
        else{

            die(json_encode(['status'=>'err','msg'=>'Email Id already exist']));
        }    
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
