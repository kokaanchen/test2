<?php

namespace App\Http\Controllers;

use Storage, Artisan, Excel;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function index(Request $request)
    {
        $user= User::where('username', $request->username)->first();

        // print_r($data);
            if (!$user || !Hash::check($request->password, $user->password)) {
                return response([
                    'message' => ['These credentials do not match our records.']
                ], 404);
            }
            
             $token = $user->createToken('my-app-token')->plainTextToken;
        
            $response = [
                'user' => $user,
                'token' => $token
            ];
        
             return response($response, 201);
    }

    function user()
    {
        $user = new User;

        $user->name = "abcdefg";
        $user->email = "abcdefg";
        $user->password = "fsfsfsfs";

        $user->save();
        //Artisan::call('schedule:run');
        dd("SSS");
        //dd(Storage::cloud()->exists('pop up_merdeka_promo.jpg'),"SS",Storage::cloud()->url('pop up_merdeka_promo.jpg'));
        //Storage::cloud()->setVisibility('imgtest/LSqHATA4IitZPcAUefP40M11ialDXkdPXSwSKsfy.jpeg','public');
        /*$url = Storage::cloud()->url('imgtesting/logo.png');
        dd($url);
        $urls = explode("/",$url);
        dd($urls[sizeof($urls)-1],sizeof($urls));*/

        //dd(Storage::disk('s3')->exists('pop up_merdeka_promo.jpg'));
        //dd(Storage::cloud()->response('pop up_merdeka_promo.jpg'));
        //return Storage::cloud()->response('pop up_merdeka_promo.jpg');

        //Storage::cloud()->setVisibility('imgtest/hHbKyUOjkhh3xEFphRtrEUdB2o8m83Y3osvOIVQD.jpeg','public');
    }

    function posting(Request $request)
    {
        //dd($request);
        //$path = Storage::cloud()->put('directory_name/abc', $request->file('attachment'), 'public');
        $path = Storage::cloud()->putFile('imgtest', $request->file('attachment'));
        //$path = $request->file('attachment')->store('imgtest','s3');
        //$path = Storage::putFileAs('imgtest', $request->file('attachment'), 'public', 'hahahddahaha.jpeg');
        dd($request,$path);
        dd("S");
    }
    
}
