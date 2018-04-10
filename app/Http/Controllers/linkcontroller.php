<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Log;
use App\Link;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class linkcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Link::all();
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
        Log::info("I am getting called");

        $this->validate($request, ['name' => 'required']);
        $this->validate($request, ['url' => 'required']);
        $this->validate($request, ['type' => 'required']);

        $link = Link::create([
            'name' => $request->input('name'),
            'url' => $request->input('url'),
            'type' => $request->input('type')
        ]);
        
        Log::info('I am tweet' . $link);

        return $link;
         
    
    }

    
    public function update(Request $request, $id) {
        
        $this->validate($request, ['name' => 'required']);
        $this->validate($request, ['url' => 'required']);
        $this->validate($request, ['type' => 'required']);

        $input = $request->all();

        $link = Link::where('id', $id);

        $link->update($input);
         
    }

    public function destroy($id) {
        
        $link =Link::findOrFail($id)->delete();

        if(!$link){
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
        $link=Link::findorfail($id);

      if(!$link){
            $response= response()->json([
                'error'=>[
                    'message'=>'This post not available'
                ]  
            ],404);
            return $response;
        }
        $response = response()->json($link,200);
        return $response;
    }
    
}
