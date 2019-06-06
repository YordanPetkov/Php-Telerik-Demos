<?php

namespace CoolBlog\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use CoolBlog\Models\Country;

class DBdemo extends Controller
{
    public function index(Request $request) {
        $result = DB::select('SELECT * FROM country WHERE id > :id AND country_name = :name', ['id'=>5,'name' => 'Anguilla']);
        print_r($result);

        return view('home');
    }

    public function EloquentDemo(Request $request) {
        /* $result = Country::where('country_name', 'Bulgaria')->get();
        foreach($result as $v) {
            echo $v->country_name . '<br />';
        } */

        $result = Country::all();
        foreach($result as $v) {
            echo $v->country_name . '<br />';
        }

        /* echo '<br />';

        $result = Country::where('id','>' ,'10')->get();
        foreach($result as $v) {
            echo $v->country_code . '<br />';
        } */
        
        /*  $country = new Country();
        $country->country_name = 'Zamunda';
        $country->country_code = 'ZM';
        $country->save(); */

        /* $country = Country::find(248);
        $country->country_code = 'ZD';
        $country->delete();
        $country = Country::find(249);
        $country->country_code = 'ZD';
        $country->delete(); */
    }
    
}
