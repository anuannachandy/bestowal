<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use DB;
use Validator;
use Auth;
use Hash;

class mainController extends Controller
{

	/*login page*/
     function admin(){

    	return view('admin/login');
    }
    
    /*login form function*/
    function checklogin(Request $request){

        $this->validate($request,[

            'email'     =>'required|email',
            'password'  =>'required|min:7',
            ]);

        $user_data=array(

            'email'     =>$request->get('email'),
            'password'  =>$request->get('password')
            );

        if(Auth::attempt($user_data))
        {
            return redirect('/home');
        }
        else
        {
            return back()->with('error','Wrong login details');
        }

    }
    /*admin home page*/
    public function home(){

        $count1=DB::table('gallery')->count();//count of total testmonials
       
        $count2=DB::table('news')->count();//count of total portfolios
    	return view('admin/home')->with('gallery_count',$count1)->with('news_scount',$count2);
    }

    /*changing password page retrive*/
    public function password_settings(){

        return view('admin/password_settings');
    }

    /*changing password*/
    public function change_password(Request $request){

        if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {
            // The passwords not matches
            return back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }
        if(strcmp($request->get('current_password'), $request->get('new_password')) == 0){
            //Current password and new password are same
            return back()->with("error","New Password be same as your current password. Please choose a different password.");
        }
        

        $this->validate($request,[

            'current_password' =>'required',
            'new_password'  =>'required|min:7',
            'confirm_password' =>'required|min:7',
            ]);

        //change password
        $user = Auth::user();
        $new = bcrypt($request->get('new_password'));
        $var=DB::table('users')->update(['password'=>$new]);
        return back()->with("success","Password changed successfully !");
       
    }


    /* logout*/
    function logout(){

        Auth::logout();
        return redirect('/admin');
    }
    /*Add gallery page*/
    public function add_photos(){

    	return view('admin/add_photos');
    }

    public function addphotos(Request $request){

        $this->validate($request,[

            'title' => 'required',
            'txt1'  => 'required',
            'fileupload'=> 'required',
        ]);

    	$a 	= $request->input('txt1');
        $b  = $request->input('title');
    	$now= new DateTime();
    	 //fileupload
        $uploadedFile       = $request->file('fileupload');
        $destinationpath    ='gallery/';
        $filename           =$uploadedFile->getClientOriginalName();
        $newfilename        =$destinationpath.$filename;
        $uploadedFile->move($destinationpath,$filename);

        $data_ar=array('image'=>$newfilename,'descp'=>$a,'date'=>$now,'status'=>0,'title'=>$b);

        $var=DB::table('gallery')->insert($data_ar);
        return redirect('/view_photos');

    }

    /*view gallery page*/
    public function view_photos(){

        $data=DB::table('gallery')->get();

    	return view('admin/view_photos')->with('tt',$data);
    }

    /*delete gallery */
    public function delete_gallery($id){

        $var=DB::table('gallery')->where('id',$id)->delete();
        return redirect('/view_photos');
    }

    /*update view gallery */
    public function update_gallery($id){

        $var=DB::table('gallery')->where('id',$id)->get();
        return view('admin/update_photos_view')->with('tt',$var);
    }

    /*update gallery*/
    public function up_photos(Request $request){

        $a  = $request->input('txt1');
        $b  = $request->input('title');
        $h  = $request->input('hid');

        if($request->hasfile('fileupload'))
        {
            $uploadedFile       = $request->file('fileupload');
            $destinationpath    ='gallery/';
            $filename           =$uploadedFile->getClientOriginalName();
            $newfilename        =$destinationpath.$filename;
            $uploadedFile->move($destinationpath,$filename);

            $var=DB::table('gallery')->where('id',$h)->update(['image'=>$newfilename,'descp'=>$a,'title'=>$b]);
            return redirect('/view_photos');
        }
        else{

            $var=DB::table('gallery')->where('id',$h)->update(['descp'=>$a,'title'=>$b]);
            return redirect('/view_photos');
        }
        
        
    }

    /* news & events page */
    public function news_events(){

        return view('admin/news_events');
    }

    /* add news & events to db*/
    public function add_news_events(Request $request){
        
        $a  = $request->input('txt1');
        $b  = $request->input('txt2');

        $data=DB::table('news')->insert(['heading'=>$a,'decp'=>$b]);

        return redirect('/view_news_events');
    }

    /* view news and events */
    public function view_news_events(){

        $data=DB::table('news')->get();
        return view('admin/view_news_events')->with('tt', $data);
    }

    /* delete news and events */
    public function delete_news($id){

        $var=DB::table('news')->where('id',$id)->delete();
        return redirect('/view_news_events');
    }

    /*update view page of news & events */
    public function update_news($id){

        $var=DB::table('news')->where('id',$id)->get();

        return view('admin/update_view_news')->with('tt',$var);

    }
    
    /*update news & events */
    public function up_news_events(Request $request){

        $a  = $request->input('txt1');
        $b  = $request->input('txt2');
        $h  = $request->input('hid');

        $var=DB::table('news')->where('id',$h)->update(['heading'=>$a,'decp'=>$b]);

        return redirect('/view_news_events');

    }
}
