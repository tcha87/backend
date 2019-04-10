<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

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
        $chart_options = [
            'chart_title' => 'Products by Month',
            'report_type' => 'group_by_date',
            'model' => 'App\Product',
            'group_by_field' => 'created_at',
            'group_by_period' => 'day',
            'chart_type' => 'line',
            'filter_field' => 'created_at',
            'filter_days' => 10, 
        ];
    
        $chart1 = new LaravelChart($chart_options);

        

        return view('home',compact('chart1'));
    }
    public function accountSettings()
    {
        return view('settings.account');
    }

    public function storeSettings()
    {
        return view('settings.store');
    }
}
