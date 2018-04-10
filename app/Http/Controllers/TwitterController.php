<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response; 

use Log;
use App\Tweet;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TwitterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function twitter()
    {
        return view('twitter');
    }

    public function about()
    {
        return view('about');
    }
    
    public function contact()
    {
        return view('contact');
    }

    public function index(){
        return Tweet::all();
    }

    public function store(Request $request) {

        Log::info("I am getting called");

        $this->validate($request, ['title' => 'required']);
        $this->validate($request, ['message' => 'required']);

        $tweet = Tweet::create([
            'title' => $request->input('title'),
            'message' => $request->input('message')
        ]);
        
        Log::info('I am tweet' . $tweet);

        return $tweet;
         
    }

    public function update(Request $request, $id) {
        
        $this->validate($request, ['title' => 'required']);
        $this->validate($request, ['message' => 'required']);

        $input = $request->all();

        $tweet = Tweet::where('id', $id);

        $tweet->update($input);
         
    }

    public function destroy($id) {
        
        $tweet = Tweet::findOrFail($id)->delete();

        if(!$tweet){
            $response= response()->json([
                'error'=>[
                    'message'=>'This post not available'
                ]  
            ],404);
            return $response;
        }
        $response = response()->json('Successfuly deleted',200);
        return $response;
    }

    public function show($id) {
        
        Log::info('I am called');
        $tweet=Tweet::findorfail($id);

      if(!$tweet){
            $response= response()->json([
                'error'=>[
                    'message'=>'This post not available'
                ]  
            ],404);
            return $response;
        }
        $response = response()->json($tweet,200);
        return $response;
    }
    
}
