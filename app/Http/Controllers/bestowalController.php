<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class bestowalController extends Controller
{
    public function home(){

        
        $data=DB::table('gallery')->get();

        $var=DB::table('news')->get();
        
        return view('index')->with('tt',$data)->with('dd',$var);
    }
    public function aboutus(){

    	return view('aboutus');
    }

    public function corporate(){

    	return view('corporate');
    }
    public function ieeeacademic(){

        return view('ieeeacademic');
    }
    public function digital_marketing(){

    	return view('digital_marketing');
    }
     public function virtual_reality(){

        return view('virtual_reality');
    }

    public function cloud(){

        return view('cloud');
    }
    public function embedded(){

        return view('embedded');
    }
    public function python(){

        return view('phython');
    }
    public function iot(){

        return view('iot');
    }
    public function artificalintelligence(){

        return view('artificalintelligence');
    }
    public function machinelearning(){

        return view('machinelearning');
    }
    public function mobileapp(){

        return view('mobileapp');
    }
    public function ethical(){

        return view('ethical');
    }
    public function java(){

        return view('java');
    }
    public function php(){

        return view('php');
    }
    public function dotnet(){

        return view('dotnet');
    }
    public function webdesign(){

        return view('webdesign');
    }
    public function softwareTesting(){

        return view('softwareTesting');
    }
        
    public function Career(){

    	return view('Career');
    }
    public function policy(){

    	return view('policy');
    }
    public function contactus(){

    	return view('contactus');
    }
    
    public function courses(){

        return view('courses');
    }

    /*view gallery photos */
    public function view_gallery(){

        $data=DB::table('gallery')->get();
        print_r($data);
        //return view('index')->with('tt',$data);
    }
}
