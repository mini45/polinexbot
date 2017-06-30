<?php

namespace App\Http\Controllers;



use App\Http\Library\PolinexApiWrapper;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        PoloniexApiWrapper::

        $api = new PolinexApiWrapper();
//        $xyz = $api->get_volume();
//        $y = $api->get_my_trade_history('BTC_ETH');
//        $y = $api->get_my_trade_history('ETH_BTC');


        return view('home');
    }
}
